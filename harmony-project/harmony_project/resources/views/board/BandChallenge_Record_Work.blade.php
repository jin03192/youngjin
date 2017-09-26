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
    
    <script type="text/javascript" src="/js/Change2.js?var=<?=filemtime('./js/Change2.js');?>"></script>
    </head>
    
    <style>
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);


    /*
     |**************************************************************************
     | bpm
     |**************************************************************************
    */
    
    
    /*
     |**************************************************************************
     | 주파수 상자
     |**************************************************************************
    */
    body{
        width: 100%;
        height: 100%;
        
    }
    
    .Studio{
        width:100%;
        height:100%;
        background:url("/img/RecordingStudio/wood_Recording3.png");
        background-size:100% 100%;
        font-family: 'Nanum Gothic', serif;
      }
    
    .main-controls{
        position:relative
    }
    
    .recordbox {
        margin:0 auto;
    }
    .visualizer{
        position:relative;
        right:-110%;
        padding:50px;
        width:70%;
        height:180px;
    }
    div[name="count_label"]{
        position:absolute;
        top: 370px;
        right:-65%;
        font-size:80px;
    }
     div[name="timer_label"]{
        position:absolute;
        top: 490px;
        right:-80%;
        font-size:25px;
        color:white;
    }
    p {
        font-size: 20px;
        color:white;
    }
    /*
     |**************************************************************************
     | 버튼 스타일
     |**************************************************************************
    */
 
    .work{
        /*border:1px solid black;*/
    }
    .musicnote{
        text-align:center;
    }
    .musicnote img{
        width:80%;
    }
    .test{
        border:1px solid black;
    }
    .range-slider{
        width:50%;
    }
    .numerical font{
        display:block;
        margin-top:30px;
    }
    .numerical input{
        border-color:#777;
        padding:10px;
        margin-top:20px;
        border-radius:10px;
    }
    .numerical input:hover{
        background-color:white;
    }
    .numerical button{
        background:rgba(0,0,0,0);
        border:none;
    }
    .bpmbox{
        margin:100px auto;
        position:relative;
        top: 0px;
        right: -130%;
        
    }
    
    .controlbtn {
        position:relative;
        right:-115%;
        text-align:center;
        margin-top:25px;
        
    }
    
    button[name="btn"]{
        border: none; /* Remove borders */
        padding: 4px 8px 5px 5px; /* Add some padding */
        cursor: pointer; /* Add a pointer cursor on mouse-over */
        width:55px;
        outline:0;
        background:rgba(0,0,0,0);
    }
    
    .step_box{
        position:relative;
        right:-175%;
        font-size:15px;
        padding:50px;
    }
    .sound-clips{
        width:700px;
    }
    .sound-clips audio{
        width:300px;
        margin-right:15px;
    }
    .sound-clips button{
        border: 1px solid #777; /* Remove borders */
        border-radius:10px;
        color: white; /* Add a text color */
        padding: 14px 0; /* Add some padding */
        cursor: pointer; /* Add a pointer cursor on mouse-over */
        width:10%;
        height:50px;
        text-align:center;
        font-size:15px;
        background-color:#001a0c;
        margin-right:15px;
    }
    .sound-clips button:hover{
        background-color:#ccffe4;
        border:none;
    }
    
    #footer{
      margin-bottom : -40%;
    }
    
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
    }
    
     .range-slider__range {
      -webkit-appearance: none;
      width: calc(75% - (73px));
      height: 5px;
      border-radius: 5px;
      background: #e5a26a;
      outline: none;
      padding: 0;
      margin: 0;
      }
      
    .range-slider__range::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 20px;
      height: 20px;
      border-radius: 5px;
      background:url("/img/RecordingStudio/BPM_bar_btn.png");
      background-size:100%;
     
      cursor: pointer;
      -webkit-transition: background .15s ease-in-out;
      transition: background .15s ease-in-out;
    }
    .range-slider__range::-webkit-slider-thumb:hover {
      background: #1abc9c;
    }
    .range-slider__range:active::-webkit-slider-thumb {
      background: #1abc9c;
    }
    .range-slider__value {
      display: inline-block;
      position: relative;
      width: 60px;
      height:34px;
      color: black;
      line-height: 20px;
      text-align: center;
    
      background: url("/img/RecordingStudio/BPM_value.png");
      background-size:100%;
      padding: 5px 10px;
      margin-left: 8px;
    }
    .range-slider__value:after {
      position: absolute;
      top: 8px;
      left: -7px;
      width: 0;
      height: 0;
      border-top: 7px solid transparent;
      border-right: 7px solid #e5a26a;
      border-bottom: 7px solid transparent;
      content: '';
    }
     button.replace {    /*button tag 에 원하는 스타일 적용*/
        width: 140px;
        height:55px;
        border:none;
        background:url("/img/RecordingStudio/ファイル選択.png");
        background-size: 100%
        cursor: pointer;
    }
    input.upload {  
      opacity: 0;       /*input type="file" tag 투명하게 처리*/
      width:200px;
    
      position: relative;
      
    }
   
    
    button.sub {
        position:relative;
        top:-10px;
        right:-35px;
        background:rgba(0,0,0,0);
        border:none;
        
    }
    
    #bpmStop{
        position:relative;
        top:-50px;
        float:right;
    }
    
    #artCanvas {
        border:0px solid black;
        z-index:1;
        position: absolute; 
        overflow-x:hidden; 
        width: 155%; 
        height: 47.5em; 
        left:-27%;
    }
    ::-webkit-scrollbar {
        display:none;
    } 
</style>


  <body>
       
      
    <!--
    |**************************************************************************
    | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
    |**************************************************************************
     -->
    <div class="topmenu_align">
    @include('menu.topmenu')
    </div>
   <script src="/scripts/gakuhu.js"></script>
   
        <input type="hidden" name="work_mode" value="work"/>
    <div class="Studio"> 
        <div class="row">
            <div class="col-md-12 work">
                <div class="col-md-6 recordbox">
                    
                    <div style="position: relative; margin-top:100px;margin-left:150px;">
                        <div id="artCanvas" -ms-overflow-style: none;>
                    
                        </div>
                    </div>
                    
                    <div class="row bpmbox">
                        <div class="col-md-3 range-slider">
                            <p id="bpm"><strong>BPM</strong></p>
                            <input id="bpm_bar" class="range-slider__range" value=118 
                            oninput="ShowSliderValue(this.value)" 
                            onclick="metronomeStop(this.value)"  
                            onmouseup="metronomeStart()" type="range" min="60" max="250" ><br><br>
                            <p id="volume"><strong>Volume</strong></p>
                            <input id="volume_bar" class="range-slider__range" 
                            oninput="ShowVolume(this.value)" 
                            onclick="metronomeStop(null,this.value)"
                            onmouseup="metronomeStart()"
                            type="range" min="0" max="100" value="70"><br>
                        </div>
                        
                        <div class="col-md-1 numerical">
                            <font class="range-slider__value" size = 2 id = "slider_value_view">118</font>
                            <font class="range-slider__value" size = 2 id = "slider_volume_view">70</font>
                        </div>
                        
                        
                        <div class="col-md-2 numerical">
                            <button type="button" id="bpmStop" onclick="bpmStop()"><img src="/img/RecordingStudio/BPM停止.png"></button>
                        </div>
                    </div>
                    <div class="row text-center">
                        <canvas class="visualizer"></canvas>
                        <div name="count_label">
                
                        </div>
                        <div name="timer_label">
                            
                        </div>
                    </div>
                    <div class="row controlbtn">
                        <button name="btn" class="record"><img src="/img/RecordingStudio/재생.png"></button>
                        <button name="btn" class="pause"><img src="/img/RecordingStudio/일시정지.png"></button>
                        <button name="btn" class="stop"><img src="/img/RecordingStudio/정지.png"></button>
                        <button name="btn" class="back"><img src="/img/RecordingStudio/뒤로가기.png"></button>
                    </div>
                    <div class="row step_box">
                       <!--<p>파일 업로드<p>-->
                       
                        <button class="replace">
                            <input type="file" name="data" style="width:130px; height:50px;cursor:pointer;" class="upload" multiple>
                        </button><br>
                        
                       <button type="button" class="sub" onclick="file_up()" style="margin:10px;">
                           <img src="/img/RecordingStudio/伝送.png">
                        </button>
                     <!-- <input type="button" onclick="file_up();" value="전송"/>-->
                    </div>
                    <div class="row">
                        <?php
                        echo "<input name='midi_id' type='hidden' value=$midi[id]>";
                        echo "<input name='band_board_id' type='hidden' value=$band_board_id>";
                    
                        foreach ($insts as $inst){
                            $inst_src = '/midi/'.$midi['path'].'/'.$inst;
                    
                            echo "<input name='instruments[]' type='hidden' value='$inst'>
                                    <audio name='music_inst[]' controls style='display: none;'>
                                        <source src='$inst_src' type='audio/mpeg'>
                                    </audio><br>";
                        }
                    
                        if( !empty($particis) ){
                    
                            foreach ($particis as $partici){
                                $partici_src = '/uploads/bandChallenge/audio/'.$partici;
                    
                                echo "<input name='participants[]' type='hidden' value='$partici'>
                                    <audio name='music_partici[]' controls style='display: none'>
                                        <source src='$partici_src' type='audio/mpeg'>
                                    </audio><br>";
                            }
                        }
                        //선택된 악기 태그들 생성
                        ?>
                        <div class="col-md-12 text-center">
                            <section class="sound-clips">
                            
                            </section>      
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    

    <!--
    |**************************************************************************
    | bandChallenge- Record합주_버튼
    |**************************************************************************
     -->
    <script src="/scripts/playrtc.js"></script>
    <script src="/scripts/app.js?var=<?=filemtime('./scripts/app.js');?>"></script>

    <p id = 'footer'>
  <pre id = 'footer_text'>
      <img src = "/img/logo2.png" width="60" height="30" align="left">                                                                                                                                                                                                                     Copyright&copy; 2017 YoungjinCollege Harmony Team All rights reserved</pre>
                                                                                  
</p>
</div>
  </body>
</html>