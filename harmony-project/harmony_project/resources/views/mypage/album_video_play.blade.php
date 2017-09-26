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
    <style media="screen">
      #audio-player{
        position: absolute;
        top: 220px; left: 100px;
      }
      ::-webkit-scrollbar {width: 10px;}
      ::-webkit-scrollbar-track {-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,3); border-radius: 10px;}
      ::-webkit-scrollbar-thumb {border-radius: 10px;-webkit-box-shadow: inset 0 0 6px #000000;
    </style>
    <style media="screen">
    /* 왼쪽 메뉴바 */
    #musicMenu {
      border-radius: 18px;
      border:5px solid #7FC7AF;
      width:225px;
      height:600px;
      margin: 15px;
      position: relative;
      position: absolute;
      top: 25%;
    }

    /* 오른쪽 컨텐츠 */
    #main {
      border-radius: 18px;
      border:5px solid #7FC7AF;
      width:800px; height:600px;
      /*padding-top: 150px;*/
      position:absolute;
      top: 27%;
      left:300px;
      overflow-y:scroll;
    }

    /* 왼쪽 앨범 사진 */
    #albumImage {
      width:194px; height:180px;
      margin-left: 6.2%;
      margin-top: 10%;
      position: absolute;
    }


    /* 메뉴 내용 */
    .menus>div{
      border-radius: 38px;
      width: 170px; height: 16px;
      display: inline-block;
      border: 2px solid #7FC7AF;
      margin-bottom: 17%;
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
      top: 10px; left: 250px;
      width: 300px; height: 300px;
    }
    #content{
      position: absolute;
      top: 310px; left: 350px;
    }
    #playbox{
      position: absolute;
      top: 340px; left: 344px;
    }
    </style>
    
    
  </head>
  <body>
    <header class="navbar navbar-inverse">
      @include('menu.topmenu')
    </header>
    <div id = "musicMenu">
      <div id = "albumImage">
        <img src='<?php echo "/albumImages/{$imageFile[0]['album_picture']}"; ?>' alt="" width=100% height=100%>
      </div>

      <div class = "menus">
        <h4 id="title">미사일</h4>
        <div><a href="<?php echo "/myPage/album/record/list/{$sessionUser}/{$albumNumber}"; ?>">노래리스트</a></div>
        <div><a href="<?php echo "/myPage/album/record/modify/{$sessionUser}/{$albumNumber}"; ?>">노래수정</a></div>
        <div><a href="<?php echo "/myPage/album/record/play/{$sessionUser}/{$albumNumber}"; ?>">노래재생</a></div>
        <div><a href="/myPage/album">뒤로가기</a></div>
        <a href="#">Record</a> <a href="#">Video</a>
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
      echo "<tr>";
      echo "<td>{$userMusics[$listCount]['subject']}";
      echo "<td>{$userMusics[$listCount]['instrument']}";
      echo "<td>{$partici_name[$listCount]}";
      echo "</tr>";
      }
    // file_name, instrument, ensemble, created_at
      ?>
    <?php
      $inst_src = array();
      $part_src = array();
      for($count = 0; $count < count($boards); $count++){
        if(strlen($boards[$count]->files) == 20){
          $parts[$count] = $boards[$count]->files;
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
        // $part_src[$count]
        if(count($parts[$count]) == 1){
          $part_src[$count][0] = '/uploads/bandChallenge/audio/'.$parts[$count];
        }else{
          for($i = 0; $i < count($parts[$count]); $i++){
          $part_src[$count][$i] = '/uploads/bandChallenge/audio/'.$parts[$count][$i];
          }
        }
      } 
        
        ?>
        
        
    <!--<audio id="myaudio">-->
    <!--  HTML5 audio not supported-->
    <!--</audio>-->
    <!--<button id="play" onclick="playAudio();">-->
    <!--  Play-->
    <!--</button>-->
    <!--<button onclick="rewindAudio();">-->
    <!--  Rewind-->
    <!--</button>-->
    <!--<button onclick="forwardAudio();">-->
    <!--  Fast forward-->
    <!--</button>-->
    <!--<button onclick="restartAudio();">-->
    <!--  Restart-->
    <!--</button>-->
  
    <div id="playbox">
    <a role="button" onclick="backAudio();"><img src="/album/back.png"></a>
    <a role="button" onclick="playAudio();"><img id="player" src="/album/play.png"></a>
    <a role="button" onclick="nextAudio();"><img src="/album/next.png"></a>
    </div>
    <script type="text/javascript">
    var inst_src = <?php echo json_encode($inst_src) ?>;
    
    var random_number = Math.floor(Math.random() * inst_src.length);
    
    var midis = <?php echo json_encode($midi) ?>;
    
    var part_src = <?php echo json_encode($part_src) ?>;
  
    var title = <?php echo json_encode($userMusics) ?>;
  
    var music_number = 0;
    
    
    var audio  = new Audio(inst_src[music_number][0]);
    var audio2 = new Audio(inst_src[music_number][1]);
    var audio3 = new Audio(inst_src[music_number][2]);
    var audio4 = new Audio(inst_src[music_number][3]);
    var audio5 = new Audio(inst_src[music_number][4]);
    
    
    // var people = new Audio(part_src[music_number][0]);
    // var people2 = new Audio(part_src[music_number][1]);
    // var people3 = new Audio(part_src[music_number][2]);
    // var people4 = new Audio(part_src[music_number][3]);
        
    document.getElementById("content").innerHTML = title[0]['subject'];
    var currentFile = "";
    
    
    function playAudio() {
      
      
        if (window.HTMLAudioElement) {
            try {
                var oAudio = document.getElementById('myaudio');
                var btn = document.getElementById('play');

                // Tests the paused attribute and set state.
                if (audio.paused){
                    audio.play();
                    audio2.play();
                    audio3.play();
                    audio4.play();
                    audio5.play();
                    
                    // people.play();
                    // people1.play();
                    // people2.play();
                    // people3.play();
                    document.getElementById('player').src='/album/pause.png';
                }
                else {
                    audio.pause();
                    audio2.pause();
                    audio3.pause();
                    audio4.pause();
                    audio5.pause();
                    
                    // people.pause();
                    // people1.pause();
                    // people2.pause();
                    // people3.pause();
                    document.getElementById('player').src='/album/play.png';
                }
            }
            catch (e) {
                // Fail silently but show in F12 developer tools console
                 if(window.console && console.error("Error:" + e));
            }
        }
    }
    
    function nextAudio(){
      
      
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