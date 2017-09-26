

































<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
    <link href="/css/font-awesome.css?var=<?=filemtime('./css/font-awesome.css');?>" rel="stylesheet" type="text/css" />
    <link href="/css/stylet.css?var=<?=filemtime('./css/stylet.css');?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
    <link rel='stylesheet' href='/css/bandchallenge/scroll.css'>
    <link rel='stylesheet' href='/css/checkbox.css'>
    <script src="/scripts/playlist.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    
    
    <style media="screen">
      #audio-player{
        position: absolute;
        top: 220px; left: 100px;
      }
       /*익스플로우 용 스크롤바*/
  html { scrollbar-arrow-color: #efefef;
        scrollbar-Track-Color: #efefef; 
        scrollbar-base-color: #dfdfdf;
        scrollbar-Face-Color: #dfdfdf;
        scrollbar-3dLight-Color: #dfdfdf;         
        scrollbar-DarkShadow-Color: #dfdfdf;
        scrollbar-Highlight-Color: #dfdfdf;
        scrollbar-Shadow-Color: #dfdfdf}
  
  /*크롬용 스크롤바*/
  ::-webkit-scrollbar {width: 12px; height: 12px;}
  ::-webkit-scrollbar-button:start:decrement, 
  ::-webkit-scrollbar-button:end:increment {display: block; width: 12px;height: 12px; background: url() rgba(0,0,0,.05);}
  ::-webkit-scrollbar-track {     background: rgba(0,0,0,.05); }
  ::-webkit-scrollbar-thumb {  background: rgba(0,0,0,.1);  }
      
    </style>
    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    
        .button2 {
  	display: inline-block;
  	margin-top: 6px;
  	outline: none;
  	cursor: pointer;
  	text-align: center;
  	text-decoration: none;
  	font: 20px/100% Arial, Helvetica, sans-serif;
  	padding: .1em 2em .1em;
  	text-shadow: 0 1px 1px rgba(0,0,0,.3);
  	-webkit-border-radius: .5em; 
  	-moz-border-radius: .5em;
  	border-radius: .5em;
  	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
  	box-shadow: 0 1px 2px rgba(0,0,0,.2);
  }
  .button2:hover {
  	text-decoration: none;
  }
  .button2:active {
  	position: relative;
  	top: 1px;
  }
  
  
    
    
    /* 왼쪽 메뉴바 */
  
  #musicMenu {
    border-radius: 18px;
    border:5px solid #7FC7AF;
    width:230px;
    height:620px;
    margin: 15px 0px 0px 20px;
    position: relative;
    position: absolute;
    top: 265px;
    
    }
  
  .menus a:link { color: black; text-decoration: none;}
  .menus a:visited { color: black; text-decoration: none;}
  
  /* 오른쪽 컨텐츠 */
  #main {
    border-radius: 10px;
    border: 5px solid #7FC7AF;
    width:1200px; height:620px;
    /*padding-top: 150px;*/
    position:absolute;
    top: 280px;
    left:300px;
    overflow: auto;
  }

  /* 왼쪽 앨범 사진 */
  #albumImage {
    width:194px; height:180px;
    margin-left: 10px;
    margin-top: 20px;
    position: absolute;
  }


  /* 메뉴 내용 */
  .menus>div{
      border-radius: 38px;
      width: 187px; height: 41px;
      display: inline-block;
      border: 2px solid #7FC7AF;
      margin-bottom: 34px;
      padding: 5%;
      text-decoration: none;
    }
    .menus>a:hover{
      color: lime;
    }
    .menus{
    font-family: 'Hanna', serif;
    text-align:center;
    margin-left: 0%;
    margin-top: 105%;
    }
  
    
    
    /* 노래리스트 테이블 */
    #musicTable {
      border:1px solid black;
    }
    #video{
      border: 2px solid red;
      width: 300px; height: 300px;
      margin-left: 10px; margin-top: 10px;
    }

    .boardList th { background-color:#dddddd; height:40px; color:#000000;}

    .boardList td { height:16px; border-bottom:1px solid #e8e8e8; text-align:center; padding:8px 0 5px 0; }
    .boardList .left { text-align:left; padding-left:5px; }
    .boardList tr:hover, .boardList .overBg { background-color:#f7f7f7; }
    .boardList .outBg { background-color:#ffffff; }


    .boardLineList th { background-color:#dddddd; height:35px; color:#000000; width:225px; }
    .boardLineList tr { background-color:#ffffff;}
    .boardLineList td { height:16px; text-align:center; padding:8px 0 5px 0; word-wrap:break-word;}

    .boardLineList .left { text-align:left; padding-left:5px; padding-right:5px; }
    .boardLineList .right { text-align:right; padding-right:5px; padding-left:5px; height:20px;}
    .boardLineList tr:hover, .boardLineList .overBg { background-color:#f7f7f7; }
    .boardLineList .outBg { background-color:#ffffff; }
    .boardLineList { background-color:#c5c5c5; }

    #body{
      /*position: absolute;
      top: 12px; left: 325px;*/
      margin-top: 384px;
    }
    #audio-player{
      position: absolute;
      top: 100px; left: -300px;
    }
    .audio-player-image{
      position: absolute;
      top: -200px;
      margin-left: 550px;
      width: 300px;
      height: 220px;
    }
    .audio-player-controls{
      position: absolute;
      top: 100px; left: 535px;
      width: 300px;
      height: 220px;
    }
    .audio-player-song-name{
      position: absolute;
      top:280px; left: 130px;
    }
    #myAlbum{
      position: absolute;
      top: 10px; left: 435px;
      width: 300px; height: 300px;
    }
    #content{
      position: absolute;
      top: 310px; left: 440px;
      width: 300px;
      white-space:nowrap;
      overflow:hidden; 
      text-overflow:ellipsis; 
    }
    #playbox{
      position: absolute;
      top: 340px; left: 515px;
    }
    #playbox a{
      margin-left: 20px;
    }
    #title{
        margin-top: 30px;
      }
    
    button{
      font-family: 'Nanum Gothic', serif;
      font-size: 20px;
      cursor:pointer;
    }
    
    .musicNumber{
      cursor:pointer;
    }
    </style>
  
  
  
    
  </head>
  <body>
    <!-- (2017/07/10) 해당 앨범에 노래가 없으면 에러 코드가 발생하는데, 해결하기 위한 수단 -->
    <?php
      if(count($userMusics) == 0){
        echo '<script>
        alert("해당 앨범에 노래가 없습니다.");
        // history.go(-2);
        </script>';
        
        exit;
      }
      
    ?>
    
    <input type='hidden' id='album_number' value='{{$albumNumber}}'>
    <input type='hidden' id='session_user' value='{{$sessionUser}}'>
    <input type='hidden' id='album_picture' value='{{$imageFile[0]->album_picture}}'>
    <header class="navbar navbar-inverse">
      @include('menu.topmenu')
    </header>
    <div id = "musicMenu">

        <div id = "albumImage" onclick="imageChange();">
          <img src='<?php echo "/albumImages/{$imageFile[0]['album_picture']}"; ?>' alt="" width=100% height=100%>
        </div>

      <div class="menus">
        <button onclick = "deleteFunc()" class="button2">앨범 삭제</button>
        <h4 id="title"><?php echo $albumMusics2[$albumNumber - 1]->album_title; ?></h4>
        <div><a href="<?php echo "/myPage/album/record/list/{$sessionUser}/{$albumNumber}"; ?>">노래리스트</a></div>
        <div><a href="<?php echo "/myPage/album/record/modify/{$sessionUser}/{$albumNumber}"; ?>">노래수정</a></div>
        <div><a href="<?php echo "/myPage/album/record/play/{$sessionUser}/{$albumNumber}"; ?>">노래재생</a></div>
        <div><a href="/myPage/album">뒤로가기</a></div>
        <!--<a href="#">Record</a> <a href="#">Video</a>-->
      </div>
    </div>
    
    <div id='main'>
      <div id='body'>
        <img id="myAlbum" src="<?php echo '/midi/'.$midi[0]->path.'/'.$midi[0]->img;?>">
      <div id='content'></div>
      <div id='boardLineList'>
        
        <table width='100%' class='boardLineList'>
          <colgroup>
            <col width='50%'>
            <col width='*'>
          </colgroup>
          <tr>
            <th>노래명</th>
            <th>악기</th>
            <th>합주자명</th>
          </tr>
          </div>
        </div>
      </div>
      <?php
      for($listCount = 0; $listCount < count($userMusics); $listCount++) {
      ?>
      <tr class = musicNumber onclick = selectMusic({{$listCount}}); data-value="{{$listCount}}">
      <td><?php echo $userMusics[$listCount]['subject']; ?></td>
      <td><?php echo $userMusics[$listCount]['instrument']; ?></td>
      <td><?php echo $partici_name[$listCount]; ?></td>
      <input type='hidden' name='album_number' value='{{$listCount}}'>
      </tr>
      
      <?php
      }
    // file_name, instrument, ensemble, created_at
      ?>
    <?php
      $inst_src = array();
      $part_src = array();
      for($count = 0; $count < count($boards); $count++){
        if(strlen($boards[$count]->files) == 20){
          $parts[$count][0] = $boards[$count]->files;
        }else{
        $parts[$count]=explode(",", $boards[$count]->files);
        }
          
      }
      
      for($count = 0; $count < count($albumMusics); $count++){
       $insts=explode(",", $albumMusics[$count]->selected_instruments);
       foreach ($insts as $inst){
            // array_push($inst_src, '/midi/'.$midi[$count]->path.'/'.$inst);
            
            $inst_src[$count][] = '/midi/'.$midi[$count]->path.'/'.$inst;
          }
       }
      for($count = 0; $count < count($parts); $count++){
        if(count($parts[$count]) == 1){
          $part_src[$count][0] = '/uploads/bandChallenge/audio/' . $parts[$count][0];
        }else{
          for($i = 0; $i < count($parts[$count]); $i++){
          $part_src[$count][$i] = '/uploads/bandChallenge/audio/'. $parts[$count][$i];
          }
        }
      } 
        ?>
    
    <div id="playbox">
    <a role="button" onclick = "backAudio();"><img src="/album/back.png" width="20" height="20"> </a>
    <a role="button" onclick="playAudio();"><img id="player" src="/album/play.png" width="20" height="20"> </a>
    <a role="button" onclick="nextAudio();"><img src="/album/next.png" width="20" height="20"> </a>
    
    <!--<a role="button" class="audio-player-button small icon-backward" onclick = "backAudio();"></a>-->
    <!--<a role="button" class="audio-player-button audio-player-place-pause-button icon-play" name="listen_btn" onclick="playAudio();"></a>-->
    <!--<a role="button" class="audio-player-button small icon-forward" onclick="nextAudio();"></a>-->
    </div>
    
    
    <script type="text/javascript">
    function imageChange(){
        var albumNumber = document.getElementById('album_number').value;
        var sessionUser = document.getElementById('session_user').value;
        var album_picture = document.getElementById('album_picture').value;
        
        window.open("/imageChange?albumNumber=" + albumNumber + "&sessionUser=" + sessionUser + "&album_picture=" + album_picture, "네이버새창", 
        "width=250px, height=400px, toolbar=no, menubar=no, scrollbars=no, resizable=yes" );
      }
    
    
    // 앨범 삭제
    
    function deleteFunc(){
        
        
        var albumNumber = document.getElementById('album_number').value;
        var sessionUser = document.getElementById('session_user').value;
        
        $.ajax({
          url:"/deleteAlbumAction",
          data:{"albumNumber": albumNumber,
                "sessionUser": sessionUser,
          },
          dataType:"jsonp",
        });
        history.go(0);
        location.href="/myPage/album";
      }
      
    // 리스트별 해당하는 노래 미디파일의 악기 경로
    var inst_src = <?php echo json_encode($inst_src) ?>;
    
    // var random_number = Math.floor(Math.random() * inst_src.length);
    
    // 미디 곡 정보
    var midis = <?php echo json_encode($midi) ?>;
    
    // 해당하는 노래의 합주자 음원소리 경로
    var part_src = <?php echo json_encode($part_src) ?>;
  
  
    var title = <?php echo json_encode($userMusics) ?>;
  
    var music_number = 0;
    
    console.log(title[0]['subject']);  
    
    var audio  = new Audio(inst_src[music_number][0]);
    var audio2 = new Audio(inst_src[music_number][1]);
    var audio3 = new Audio(inst_src[music_number][2]);
    var audio4 = new Audio(inst_src[music_number][3]);
    var audio5 = new Audio(inst_src[music_number][4]);
    
    
    var people = new Audio(part_src[music_number][0]);
    var people2 = new Audio(part_src[music_number][1]);
    var people3 = new Audio(part_src[music_number][2]);
    var people4 = new Audio(part_src[music_number][3]);
        
    document.getElementById("content").innerHTML = title[0]['subject'];
    var currentFile = "";
    
    
    function playAudio() {
      
      
        if (window.HTMLAudioElement) {
            try {
                var oAudio = document.getElementById('myaudio');
                var btn = document.getElementById('play');

                // Tests the paused attribute and set state.
                if (audio.paused){
                    document.getElementById('player').src='/album/pause.png';
                    audio.play();
                    audio2.play();
                    audio3.play();
                    audio4.play();
                    audio5.play();
                    
                    people.play();
                    people2.play();
                    people3.play();
                    people4.play();
                    
                }
                else {
                    document.getElementById('player').src='/album/play.png';
                    audio.pause();
                    audio2.pause();
                    audio3.pause();
                    audio4.pause();
                    audio5.pause();
                    
                    people.pause();
                    people2.pause();
                    people3.pause();
                    people4.pause();
                    
                }
            }
            catch (e) {
                // Fail silently but show in F12 developer tools console
                 if(window.console && console.error("Error:" + e));
            }
        }
    }
    
    function selectMusic(a_number){
      this.music_number = a_number;
      
      
      
      document.getElementById('player').src='/album/pause.png';
      this.audio.pause();
      this.audio2.pause();
      this.audio3.pause();
      this.audio4.pause();
      this.audio5.pause();
      
      this.people.pause();
      this.people2.pause();
      this.people3.pause();
      this.people4.pause();
      
      audio  = new Audio(inst_src[music_number][0]);
      audio2 = new Audio(inst_src[music_number][1]);
      audio3 = new Audio(inst_src[music_number][2]);
      audio4 = new Audio(inst_src[music_number][3]);
      audio5 = new Audio(inst_src[music_number][4]);
      
      people  = new Audio(part_src[music_number][0]);
      people2 = new Audio(part_src[music_number][1]);
      people3 = new Audio(part_src[music_number][2]);
      people4 = new Audio(part_src[music_number][3]);
      
      document.getElementById("content").innerHTML = title[music_number]['subject'];
      
      audio.play();
      audio2.play();
      audio3.play();
      audio4.play();
      audio5.play();
      
      people.play();
      people2.play();
      people3.play();
      people4.play();
      document.getElementById('myAlbum').src="/midi/"+midis[music_number]['path']+"/"+midis[music_number]['img'];
    }
    
    function nextAudio(){
      
      document.getElementById('player').src='/album/pause.png';
      this.audio.pause();
      this.audio2.pause();
      this.audio3.pause();
      this.audio4.pause();
      this.audio5.pause();
      
      this.people.pause();
      this.people2.pause();
      this.people3.pause();
      this.people4.pause();
      this.audio.currentTime = 0;
      if(this.music_number == inst_src.length - 1){
        music_number = 0;
      }else{
        this.music_number++;
      }
      audio  = new Audio(inst_src[music_number][0]);
      audio2 = new Audio(inst_src[music_number][1]);
      audio3 = new Audio(inst_src[music_number][2]);
      audio4 = new Audio(inst_src[music_number][3]);
      audio5 = new Audio(inst_src[music_number][4]);
      
      people  = new Audio(part_src[music_number][0]);
      people2 = new Audio(part_src[music_number][1]);
      people3 = new Audio(part_src[music_number][2]);
      people4 = new Audio(part_src[music_number][3]);
      
      document.getElementById("content").innerHTML = title[music_number]['subject'];
      
      audio.play();
      audio2.play();
      audio3.play();
      audio4.play();
      audio5.play();
      
      people.play();
      people2.play();
      people3.play();
      people4.play();
      document.getElementById('myAlbum').src="/midi/"+midis[music_number]['path']+"/"+midis[music_number]['img'];
    }
    
    function backAudio(){
      // 바뀐 제목 넣어라
      document.getElementById('player').src='/album/pause.png';
      this.audio.pause();
      this.audio2.pause();
      this.audio3.pause();
      this.audio4.pause();
      this.audio5.pause();
      
      this.people.pause();
      this.people2.pause();
      this.people3.pause();
      this.people4.pause();
      this.audio.currentTime = 0;
      if(this.music_number == 0){
        music_number = inst_src.length - 1;
      }else{
        this.music_number--;
      }
      
      
      audio  = new Audio(inst_src[music_number][0]);
      audio2 = new Audio(inst_src[music_number][1]);
      audio3 = new Audio(inst_src[music_number][2]);
      audio4 = new Audio(inst_src[music_number][3]);
      audio5 = new Audio(inst_src[music_number][4]);
      
      people  = new Audio(part_src[music_number][0]);
      people2 = new Audio(part_src[music_number][1]);
      people3 = new Audio(part_src[music_number][2]);
      people4 = new Audio(part_src[music_number][3]);
      
      document.getElementById("content").innerHTML = title[music_number]['subject'];
      
      
      
      audio.play();
      audio2.play();
      audio3.play();
      audio4.play();
      audio5.play();
      
      people.play();
      people2.play();
      people3.play();
      people4.play();
      document.getElementById('myAlbum').src="/midi/"+midis[music_number]['path']+"/"+midis[music_number]['img'];
      
    }
    </script>
    
    
  </body>
</html>


    <footer>
        <div class="name-track">
            <!--<img src="<?php echo '/midi/'.$midi[0]->path.'/'.$midi[0]->img;?>">  -->
            <img id="myAlbum" src="<?php echo '/midi/'.$midi[0]->path.'/'.$midi[0]->img;?>" width="100px" height="100px" alt="" class="sm-hide">
            <div>
                <p>Another brick in the wall</p><br>
                <p>Pink Floyd</p>
            </div>
        </div>
        <div class="footer-controls">
        </div>
    </footer>

    .playlist{
      position: relative;
      top: -230px; right: -10px;
    }















