<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/bandchallenge/progress.css">
  </head>
  <style>
   p[title="upload"]{
        position:absolute;
        font-size:35px;
        left:650px;
        top:-30px;
        margin-bottom:20px;
    }
    .hiddenform{
        position: relative;
    }
    .viewform{
        /*border: 1px solid;*/
        position: relative;
        top:0px; left:190px;
        border-radius: 15px;
        background-color: #f2f2f2;
        width:70%; height:850px;
        margin: 0px;
        padding: 0px;
    }
    .viewform>p{
        font-size:20px;
        margin-left:20px;
        /*display: inline;*/
        padding-top: 5px;
        text-align: center;
        /*position:relative;*/
        /*top:60px;*/
        /*margin-left:300px;*/
        /*padding-top:-70px;*/
    }
    #subject, textarea, #volume {
        position:relative;
        top:0px;
        width: 50%;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 0px;
        margin-left:230px;
        resize: vertical;
        font-size:20px;
    }
    #subject, #volume{
      height:40px;
    }
    textarea{
        height:300px;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        width: 435px;
        padding:2px 0px;
        font-size:20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        position:absolute;
        top:615px;
        left:230px;
    }
    
    input[type=submit]:hover {
        background-color: #45a049;
    }
    select {
      width: 120px; 
      /* 원하는 너비설정 */ 
      position:relative;
      top:-2px;
      padding: .6em .6em; 
      /* 여백으로 높이 설정 */ 
      font-family: inherit; 
      /* 폰트 상속 */ 
      background: url(https://farm1.staticflickr.com/379/19928272501_4ef877c265_t.jpg) no-repeat 95% 50%; 
      /* 네이티브 화살표 대체 */ 
      border: 1px solid #999; 
      border-radius: 0px; /* iOS 둥근모서리 제거 */ 
      -webkit-appearance: none; /* 네이티브 외형 감추기 */ 
      -moz-appearance: none;
      appearance: none;
      background-color:white;
    }
    .progress{
        position:absolute;
        top:-30px;
        left:320px;
    }
    .sound{
        
        margin-left: 300px;
        /*float: left;*/
    }
    .volumeBar{
        display: inline;
        position: absolute;
        top:215px;
    }
    .volumetest{
        margin-top: 5px;
        margin-left: -70px;
    }
    .upload{
        
    }
</style>
  <body>
    <!--
    |**************************************************************************
    | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
    |**************************************************************************
     -->
    <div class="top">
      @include('menu.topmenu')
    </div>
    <!--
    |**************************************************************************
    | bandChallenge- Record합주_미리듣기/악보출력
    |**************************************************************************
     -->
    
     <div class="hiddenform">
        <form action="/BandChallenge/recordingInsert" name="uploadForm" method="post">
            <input name = file_name type = hidden value="{{$file['file_name']}}"/>
            <input name = selected_insts type = hidden value="{{$file['selected_insts']}}"/>
            <input name = selected_particis type = hidden value="{{$file['selected_particis']}}"/>
            <input name = midi_id type = hidden value="{{$file['midi_id']}}"/>
            <input name = band_board_id type = hidden value="{{$file['band_board_id']}}"/>
            {{ csrf_field() }}
            <div class="viewform">
                <p>subject</p>
                <input id="subject" name = subject type = text required/>
                <select name="instrument">
                      <option value="Guitar">Guitar</option>
                      <option value="Piano">Piano</option>
                      <option value="Synthesizer">Synthesizer</option>
                      <option value="Drum">Drum</option>
                      <option value="Bass">Bass Guitar</option>
                      
                      </select>
                      
                <p>volume</p>
                <input id="volume" name = "volume" type = "number" value="0" max="100" min="0" required/>
                <div class="sound">
                    <input class="volumetest" type="button" onclick="send();" value="ボリュームの設定" />
                    <div class="volumeBar">
                    <audio name='music_file' controls src='/uploads/bandChallenge/audio/{{$file['file_name']}}'/>
                    </div>
                </div>
                <p>contents</p>
                <textarea name = contents required>
                </textarea>
                
                <div class="upload">
                    <input type="submit" value="登録" />
                </div>
                
            </div>
        </form>
    </div>
    
    <script>
    var version = 1;

    var sound = document.querySelector('.sound');
    var original = document.getElementsByName("file_name");
    var file_name = original[0].value;
    var volume = document.getElementsByName("volume");
    
    
    function name_change(name){
        document.uploadForm.file_name.value = name;
        
    }
    
        function send(data) {
            
            
            if((volume[0].value > 100) || (volume[0].value < 0)){
                alert('0~100との間の数字で入力してください。');
                
                return ;
            }
            alert('少々お待ちください。');
            var fd = new FormData();
            fd.append('data',file_name);
            fd.append('volume',volume[0].value);
            fd.append('version',version);
        
            $.ajax({
                url: "/volumeTest",
                type: "POST",
                processData: false,
                contentType: false,
                data: fd,
                dataType: 'json',
                success:function(data){
                    alert("ボリューム調節ができました。");
                    var audio = document.createElement('audio');
                    audio.setAttribute('controls', '');
                    audio.src = '/uploads/bandChallenge/audio/'+data;
                    sound.removeChild(sound.firstElementChild);
                    sound.appendChild(audio);
                   
                    version++;
                    if(version == 10){
                        version = 1;
                    }
                    name_change(data);
                },
                error: function () {
                    alert('Error');
                }
            });
        
        }
        
    </script>>
    
  </body>
</html>
