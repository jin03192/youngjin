<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    @import url(http://fonts.googleapis.com/earlyaccess/notosanskr.css);
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
      html,body {
        height: 100%;
      }
body {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    margin: 0;
    font-family: Lato, sans-serif;
    color: #222;
    font-size: 0.9em;
}

main {
    flex: 1 0 auto;
    display: flex;
}
.title{
  text-align: center;
  margin: -50px 0 20px 0;
  /*margin-top: -50px;*/
  /*padding: 0px;*/
  
}

footer {
    flex: 0 0 90px;
    padding: 10px 92% 10px 35px;
    color: #fff;
    background-color: rgba(61, 100, 158, .9);
    position: absolute;
    top: 580px; left: -10px;
    z-index: -1;
    
}

aside {
    flex: 0 0 40px;
    display: flex;
    flex-direction: column;
    /*justify-content: space-around;*/
    align-items: center;
    background-color: #f2f2f2;
}

aside i.fa {
    font-size: 1.5em;
    padding-top: 40px;
}
.playlist{
      position: relative;
      top: -230px;
      right: -10px;
}
aside i.fa:hover {
    transition: .5s;
    transform: scale(1.5);
}

.content {
    display: flex;
    flex: 1 1 auto;
    flex-direction: column;
}

.music-head {
    flex: 0 0 150px;
    display: flex;
    padding: 40px;
    background-color: #4e4e4e;
    background: linear-gradient(hsla(200, 100%, 30%, 0.5),hsla(170, 100%, 30%, 0.5)), url(https://subtlepatterns.com/patterns/grey_wash_wall.png);
    
}

.music-list {
    flex: 0 5 auto;
    list-style-type: none;
    padding: 5px 10px 0px 30px;
    margin-top: 200p;
}
ul {
  margin: 0px 0px 0px 0px;
}


li {
    display: flex;
    padding: 0px 0px 0px 10px;
    min-height: 50px;
}

li p {
    flex: 0 0 25%;
}

li .number{
  flex: 0 0 5%;
}


li span.catty-cloud {
    border: 1px solid black;
    font-size: 0.6em;
    padding: 3px;
}

li:nth-child(2n) {
    background-color: #f2f2f2;
}

.catty-music {
    flex: 1 1 auto;
    display: flex;
    flex-direction: column;
    font-weight: 300;
    color: #fff;
    padding-left: 50px;
}

.catty-music div:nth-child(1) {
    margin-bottom: auto;
}

.catty-music div:nth-child(2) {
    margin-top: 0;
}

.catty-music div:nth-child(2) i.fa {
    font-size: 0.9em;
    padding: 0 0.7em;
    font-weight: 300;
}

.catty-music div:nth-child(1) p:first-child {
    font-size: 1.8em;
    margin: 0 0 10px;
}

.catty-music div:nth-child(1) p:not(:first-child) {
    font-size: 0.9em;
    margin: 2px 0;
}

footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.name-track {
    display: flex;
    flex: 1 1 50%;
    align-items: center;
}

.name-track p {
    font-size: 1em;
    margin: 2px 10px;
}

.footer-controls {
    flex: 1 1 50%;
    display: flex;
    justify-content: space-between;
}

.footer-controls i {
    font-size: 1.2em;
}

i:hover {
    cursor: pointer;
    transition: .5s;
    transform: scale(1.5);
}

@media screen and (max-width: 64em) {
    .sm-hide {
        display: none;
        /*display: inline;*/
    }
    .sm-text-center {
        text-align: center;
    }
    .sm-text-right {
        text-align: right;
    }
    section.content .music-head {
        flex: 0 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 0;
        background-color: #4e4e4e;
    }
    section.content .music-head .catty-music {
        padding: 0;
    }
    .music-head img {
        width: 150px;
    }
    .catty-music div:nth-child(1) p:first-child {
        margin: 20px 0;
        font-size: 1em;
    }
    li p {
        flex: 0 0 50%;
    }
    .footer-controls {
        justify-content: space-around;
    }
}
</style>
<style>
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

  /* 오른쪽 컨텐츠 */
  #main {
    border-radius: 10px;
    /*border: 5px solid #7FC7AF;*/
    width:900px; height:320px;
    /*padding-top: 150px;*/
    position:absolute;
    top: 340px;
    left:220px;
    overflow-x: hidden;
    overflow-y: auto;
    
    background: rgba(0,0,0,0);
	  box-shadow: 0px 2px 10px 1px rgba(0,0,0,0.6), inset 0px 0px 20px 2px rgba(0,0,0,0.4), inset 0px 0px 5px 1px rgba(255,255,255,0.6), inset 0px 0px 0px 1px rgba(255,255,255,0.2);
  }



  /* 메뉴 내용 */

    
    
    /* 노래리스트 테이블 */


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
    /*#myAlbum{*/
    /*  position: absolute;*/
    /*  top: 10px; left: 345px;*/
    /*  width: 250px; height: 200px;*/

    /*}*/
    #content{
      position: absolute;
      top: 620px; left: 145px;
      width: 350px;
      white-space:nowrap;
      overflow:hidden; 
      text-overflow:ellipsis;
      color: #fff;
      /*background-color: rgba(61, 100, 158, .9);*/
    }
    .autolist{
        /*border:1px solid;*/
        width: 90%; height: 200px;
        overflow-y:auto;
        overflow-x:hidden;
    }
    #playbox{
      position: absolute;
      top:632px; left:405px;
    }
    #playbox a{
      margin-left: 200px;
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
    .musicplay{
      margin-top: -100px;
    }
</style>    
</head>

<body>
      <header class="navbar navbar-inverse">
      @include('mypage.album_topmenu')
    </header>
    <main>
        <aside class="sm-hide">
            <a href="<?php echo "/myPage/album/record/list/{$sessionUser}/{$albumNumber}"; ?>"><i class="fa fa-bars"></i></a>
            <a href="<?php echo "/myPage/album/record/modify/{$sessionUser}/{$albumNumber}"; ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
            <a href="<?php echo "/myPage/album/record/play/{$sessionUser}/{$albumNumber}"; ?>"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
            <i onclick = "deleteFunc()" class="fa fa-times" aria-hidden="true" ></i>
        </aside>
        <section class="content">
            <div class="music-head">
                <!--First list item: contains music details-->
                <!--<img src="http://cps-static.rovicorp.com/3/JPG_500/MI0003/237/MI0003237416.jpg?partner=allrovi.com" width="200px" height="200px" />-->
            <img src='<?php echo "/albumImages/{$imageFile[0]['album_picture']}"; ?>' width="200px" height="150px" />
            <section class="catty-music">
                    <div>
                        <p class="sm-text-center"><?php echo $albumMusics2[$albumNumber - 1]->album_title; ?></p>
                        <p class="sm-hide"><?php echo $albumMusics2[$albumNumber - 1]->album_content; ?></p>
                        
                    </div>
            </section>      
            <!--</div>-->
    </main>
    
    
    

      <div id='body'>

      <div id='content'></div>
      
        </div>
      <div class="musicplay">
      </div>
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
    <a role="button" onclick = "backAudio();"><img src="/album/back_white.png" width="20" height="20"> </a>
    <a role="button" onclick="playAudio();"><img id="player" src="/album/play_white.png" width="20" height="20"> </a>
    <a role="button" onclick="nextAudio();"><img src="/album/next_white.png" width="20" height="20"> </a>
    
    <!--<a role="button" class="audio-player-button small icon-backward" onclick = "backAudio();"></a>-->
    <!--<a role="button" class="audio-player-button audio-player-place-pause-button icon-play" name="listen_btn" onclick="playAudio();"></a>-->
    <!--<a role="button" class="audio-player-button small icon-forward" onclick="nextAudio();"></a>-->
    </div>
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>    
    
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
                    document.getElementById('player').src='/album/pause_white.png';
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
                    document.getElementById('player').src='/album/play_white.png';
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
      
      document.getElementById('player').src='/album/pause_white.png';
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
      document.getElementById('player').src='/album/pause_white.png';
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
    <div class="playlist">
    <h2 class="title">ミュージックリスト</h2>
    <div class="autolist">
    <?php
              for($listCount = 0; $listCount < count($userMusics); $listCount++) {
              if(count($userMusics) != 0){
              ?>
              <!--<ul class="music-list">-->
              <ul>
                <li>
                <p class="number"><?php echo $listCount+1; ?></p>
                <p><?php echo $userMusics[$listCount]['subject']; ?></p>
                <p class="sm-hide"><?php echo $userMusics[$listCount]['instrument']; ?></p>
                <p class="sm-text-right"><?php echo $partici_name[$listCount]; ?></p>
                <p class="sm-hide"><span class="catty-cloud"><?php echo substr($userMusics[$listCount]['created_at'],0,10); ?></span></p>
                </li>
              </ul>
                <?php
               }
              }
              ?>
    </div>
    </div>
    
    <footer>
        <div class="name-track">
            <!--<img src="<?php echo '/midi/'.$midi[0]->path.'/'.$midi[0]->img;?>">  -->
            <img id="myAlbum" src="<?php echo '/midi/'.$midi[0]->path.'/'.$midi[0]->img;?>" width="100px" height="100px" class="sm-hide">
        </div>
        <div class="footer-controls">
        </div>
    </footer>
    
</body>
</html>