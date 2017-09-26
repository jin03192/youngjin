<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>MUSICQUITOUS</title>
</head>


<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

  .button {
     display: inline-block;
     outline: none;
     cursor: pointer;
     text-align: center;
     text-decoration: none;
     font: 14px/100% Arial, Helvetica, sans-serif;
     padding: .5em 11em .25em;
     text-shadow: 0 1px 1px rgba(0,0,0,.3);
     -webkit-border-radius: .5em; 
     -moz-border-radius: .5em;
     border-radius: .5em;
     -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
     -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
     box-shadow: 0 1px 2px rgba(0,0,0,.2);
  }
  .button:hover {
     text-decoration: none;
  }
  .button:active {
     position: relative;
     top: 1px;
  }
  
  
  
  .button2 {
     display: inline-block;
     outline: none;
     cursor: pointer;
     text-align: center;
     text-decoration: none;
     font: 14px/100% Arial, Helvetica, sans-serif;
     padding: 1px 28px 1px;
     text-shadow: 0 1px 1px rgba(0,0,0,.3);
     -webkit-border-radius: .5em; 
     -moz-border-radius: .5em;
     border-radius: .5em;
     -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
     -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
     box-shadow: 0 1px 2px rgba(0,0,0,.2);
     margin-top: 15px;
  }
  .button2:hover {
     text-decoration: none;
  }
  .button2:active {
     position: relative;
     top: 1px;
  }
  
  
  /*익스플로우 용 스크롤바*/
  html { scrollbar-arrow-color: #efefef;
         scrollbar-Track-Color: #efefef; 
         scrollbar-base-color: #dfdfdf;
         scrollbar-Face-Color: #dfdfdf;
         scrollbar-3dLight-Color: #dfdfdf;         
         scrollbar-DarkShadow-Color: #dfdfdf;
         scrollbar-Highlight-Color: #dfdfdf;
         scrollbar-Shadow-Color: #dfdfdf;
  }
        
  /*크롬용 스크롤바*/
  ::-webkit-scrollbar {width: 12px; height: 12px;  }
  ::-webkit-scrollbar-button:start:decrement, 
  ::-webkit-scrollbar-button:end:increment {display: block; width: 12px;height: 12px; background: url() rgba(0,0,0,.05);}
  ::-webkit-scrollbar-track {     background: rgba(0,0,0,.05); }
  ::-webkit-scrollbar-thumb {  background: rgba(0,0,0,.1);  }

  /*글자 초과시 처리*/
  
  
  
  #trash-can{
    /*border:1px solid;*/
    width:250px; height:170px;
    margin: 5px 0px 0px 795px;
  }
  #sortable1 div{
    float: left;
    border-radius: 10px;
    margin: 10px 0px 10px 20px;
    /*border:1px solid #7FC7AF;*/
    width: 155px; height: 130px;
    white-space:nowrap;
    overflow:hidden; 
    text-overflow:ellipsis; 
  }
  #sortable1 img{
    border-radius: 10px;
    margin: 10px 0 0 10px;
  }
  #sortable1 {
    font-size: 15px;
    font-family: 'Hanna', serif;
    /*text-align: center;*/
    /*border-radius: 20px;*/
    margin: 20px 0 0 20px;
    /*border: 2px solid #7FC7AF;*/
    width: 380px; height: 380px;
    overflow: auto;
    background: rgba(0,0,0,0);
	  box-shadow: 0px 2px 10px 1px rgba(0,0,0,0.6), inset 0px 0px 20px 2px rgba(0,0,0,0.4), inset 0px 0px 5px 1px rgba(255,255,255,0.6), inset 0px 0px 0px 1px rgba(255,255,255,0.2);
  }
  #sortable2{
    font-size: 15px;
    font-family: 'Hanna', serif;
    /*text-align: center;*/
    /*border-radius: 20px;*/
    margin: -380px 0 0 440px;
    /*border: 2px solid #7FC7AF;*/
    width: 440px; height: 340px;
    overflow: auto;
    z-index: -1px;
    background: rgba(0,0,0,0);
	  box-shadow: 0px 2px 10px 1px rgba(0,0,0,0.6), inset 0px 0px 20px 2px rgba(0,0,0,0.4), inset 0px 0px 5px 1px rgba(255,255,255,0.6), inset 0px 0px 0px 1px rgba(255,255,255,0.2);
  }
  #sortable2 div{
    float: left;
    border-radius: 10px;
    margin: 10px 0px 10px 40px;
    /*border:1px solid #7FC7AF;*/
    width: 155px; height: 130px;
    white-space:nowrap;
    overflow:hidden; 
    text-overflow:ellipsis; 
  }
  #sortable2 img{
    border-radius: 10px;
    margin: 10px 0 0 10px;
  }


  #trash-can {
   background-image: url('/img/trashCanClosed.png');
   background-repeat: no-repeat;
   background-size: 70px 45px;
  }

  #trash-can:hover {
     background-image: url('/img/trashCanOpen.png');
     background-size: 70px 45px;
  }


  /* 왼쪽 메뉴바 */
  #musicMenu {
    border-radius: 18px;
    border:5px solid #7FC7AF;
    width:195px; height:420px;
    margin: 15px;
    /*position: relative;*/
    position: absolute;
    top: 215px;
  }

  /* 오른쪽 컨텐츠 */
  #main {
    border-radius: 18px;
    /*border: 5px solid #7FC7AF;*/
    width:900px; height:420px;
    /*padding-top: 150px;*/
    position:absolute;
    top: 380px;
    left:200px;
    background: rgba(0,0,0,0);
	  box-shadow: 0px 2px 10px 1px rgba(0,0,0,0.6), inset 0px 0px 20px 2px rgba(0,0,0,0.4), inset 0px 0px 5px 1px rgba(255,255,255,0.6), inset 0px 0px 0px 1px rgba(255,255,255,0.2);
  }

  /* 왼쪽 앨범 사진 */
  #albumImage {
    width:154px; height:100px;
    margin: 10px 0px 0px 17px;
    position: absolute;
  }


  /* 메뉴 내용 */
  .menus>div{
    border-radius: 38px;
    width: 140px; height: 6px;
    display: inline-block;
    border: 2px solid #7FC7AF;
    margin-bottom: 25px;
    padding:5px 10px 23px 10px;
    text-decoration: none;
  }
  
  .menus a:link { color: black; text-decoration: none;}
  .menus a:visited { color: black; text-decoration: none;}
  
  .menus>a:hover{
    color: lime;
  }
  .menus{
    font-family: 'Hanna', serif;
    text-align:center;
    margin-left: 0%;
    margin-top: 60%;
  }
  .menus p{
    display: inline;

  }

  /* 노래리스트 테이블 */
  #musicTable {
    border:1px solid black;
  }
  /*#songlist{
    margin-top:75%;
    margin-bottom: 15%;
    margin-left: 24%;
  }
  #songModify{
    margin-left: 24%;
    margin-bottom: 15%;
  }
  #songPlayback{
    margin-left: 24%;
    margin-bottom: 15%;
  }*/
    .boardLineList{
      border-spacing: 1px;
      border-collapse: separate;
    }
    .boardLineList{
     margin:0px;
     padding: 0px;
     font-size:11px;
     color:#898989;
     font-family: 'Nanum Gothic', serif;
    }
    #singlist{
      margin-left: 41%;
      margin-bottom: 5%;
    }
    #button{
      position: absolute;
      top: 150px; left: 405px;
      z-index:5;
    }
    #revision{
      display: inline-block;
      margin-left: 44%;
    }
    #storage{
      position: absolute;
      top: 373px; left: 428px;
    }
    
    p{
        /*padding-top: 50px;*/
        margin-top: 10px;
        margin-left: 14px;
        margin-right: 14px;
    }
    
    
    #footer{
      margin-bottom : 40%;
      
    }
    
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
    }    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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
}

footer {
    flex: 0 0 90px;
    padding: 10px;
    color: #fff;
    background-color: rgba(61, 100, 158, .9);
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
    padding: 5px 10px 0px -0px;
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
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">


  // 삭제하는 데이터 담는 그릇
  var deleteArray = [];
  $(function() {
    $("#sortable1, #sortable2").sortable({
      connectWith:".connectedSortable",
  });


    // 휴지통
    $("#trash-can").droppable({
        drop: function ( event, ui) {
          $(ui.draggable).remove();
          // 배열에 1개씩 삭제 요소 넣기
          deleteArray.push(ui['draggable'][0]['innerText']);
        }
    });
  });



  function save(){
    var data2 = $("#sortable1, #sortable2")[0].innerText;
    var data  = $("#sortable1, #sortable2")[1].innerText;
    var albumNumber = <?php echo $albumNumber; ?>;
      $.ajax({
        url:'/alterAlbumListAction',
        data:{"nullKey":rplLine(data),
              "key":rplLine(data2),
              "albumNumber":albumNumber,
              "deleteArray":deleteArray},
        dataType:'jsonp',
      });
    alert("セーブ完了");
    history.go(0);
  }
  
  
  function rplLine(value){
      if (value != null && value != "") {
          return value.replace(/\n/g, "\\n");
      }else{
          return value;
      }
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
  </script>

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
                <!--Album art-->
                <section class="catty-music">
                    <!--other details of the album-->
                    <div>
                        <p class="sm-text-center"><?php echo $albumMusics[$albumNumber - 1]->album_title; ?></p>
                        <p class="sm-hide"><?php echo $albumMusics[$albumNumber - 1]->album_content; ?></p>
                    </div>
                    <!--<div class="sm-text-center">-->
                        <!--Music controls-->
                    <!--    <i class="fa fa-play"> &nbsp;Play all</i>-->
                    <!--    <i class="fa fa-plus"> &nbsp;Add to</i>-->
                    <!--    <i class="fa fa-ellipsis-h">&nbsp;&nbsp;More</i>-->
                    <!--</div>-->
            </section>
            </div>
            <h1 class="title">曲チェンジ</h1>
<div id="main">
  <!--<h2 id="revision">노래수정</h2>-->
    
    
    <div id="sortable1" class="connectedSortable">
      <?php
        for ($i = 0; $i < count($userMusics); $i++) {
          echo "<div>";
          echo "<img src='/midi/{$userMusics[$i]->path}/{$userMusics[$i]->img}' width='130' height='82'>";
          echo "<p>{$userMusics[$i]->subject}</p>";
          echo "</div>";
        }
       ?>
    </div>


    
    <img id="button" src="/img/add-button.png" alt="" width="25" height="25">
    
    
    <div id="sortable2" class="connectedSortable">
        <?php
          // dump($allMusics);
          for ($i = 0; $i < count($allMusics); $i++) {
            echo "<div>";
            echo "<img src='/midi/{$allMusics[$i]->path}/{$allMusics[$i]->img}' alt='The peaks of High Tatras' width='130' height='82'>";
            echo "<p>{$allMusics[$i]->subject}</p>";
            echo "</div>";
          }
        ?>
    </div>
      
      
    <script>
      $("#button").click(function () {
        if ($("#sortable2").is(":hidden"))
        {
          $("#sortable2").show("slow");
        }else{
          $("#sortable2").slideUp();
        }
     });
    </script>
  <button class="button" id="storage" onClick="save()">セーブ</button>
  <div id="trash-can"></div>
</div>

<input type='hidden' id='album_number' value='{{$albumNumber}}'>
<input type='hidden' id='session_user' value='{{$sessionUser}}'>

<!--<p id = 'footer'>-->
<!--  <pre id = 'footer_text'>-->
<!--      <img src = "/img/logo2.png" width="60" height="30" align="left">                                                                                                                                                                                                                                                                                                               김대호 교수님(PM), 조나훔(조장), 박현경, 장민호, 김진영, 김혜진, 주성민-->
<!--                                                                                                                                                                                                                                                                                                                   Copyright&copy; 2017 YoungjinCollege Harmony Team All rights reserved</pre></p>-->

           
        </section>
    </main>
    <!--<footer>-->
    <!--    <div class="name-track">-->
    <!--        <img src="http://cps-static.rovicorp.com/3/JPG_500/MI0003/237/MI0003237416.jpg?partner=allrovi.com" width="100px" height="100px" alt="" class="sm-hide">-->
    <!--        <div>-->
    <!--            <p>Another brick in the wall</p><br>-->
    <!--            <p>Pink Floyd</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--    <div class="footer-controls">-->
    <!--        <i class="fa fa-backward"></i>-->
    <!--        <i class="fa fa-pause"></i>-->
    <!--        <i class="fa fa-step-forward"></i>-->
    <!--        <i class="fa fa-random"></i>-->
    <!--    </div>-->
    <!--</footer>-->
  
</body>
</html>