<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MUSICQUITOUS</title>
     <!--Myalbum 새 테마 -->
    <!--<link rel="stylesheet" href="../css/myPage/mypage_style.css">-->
    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">

    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    @import url(http://fonts.googleapis.com/earlyaccess/notosanskr.css);
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    
    
/*
|**************************************************************************
| 앨범 이미지와 설명이 들어간 div박스의 CSS
|**************************************************************************
*/
      #ablums{
        font-family: 'Nanum Gothic', serif;
        /*font-weight: 600;*/
        font-size: 20px;
        color: #000000;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.9);
        text-transform: uppercase;
        text-align: center;
        margin: 30px 0 50px 57px;
        padding-bottom: 10px;
        float:left;
        width:150px; height:150px;
        border:2px solid #7FC7AF;
        border-radius: 10px;
      }
      #album_Main{
        overflow-y:scroll;
        border-radius: 18px;
        margin: 20px 0 0 70px;
        border:5px solid #7FC7AF;
        width: 900px; height: 500px;
        /*overflow:hidden;*/
      }
      #main{
        border-radius: 10px;
        font-family: 'Nanum Gothic', serif;
      }
/*
|**************************************************************************
| 스크롤의 css를 지정해준다.
|**************************************************************************
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
  ::-webkit-scrollbar {width: 12px; height: 12px;  }
  ::-webkit-scrollbar-button:start:decrement, 
  ::-webkit-scrollbar-button:end:increment {display: block; width: 12px;height: 12px; background: url() rgba(0,0,0,.05);}
  ::-webkit-scrollbar-track {     background: rgba(0,0,0,.05); }
  ::-webkit-scrollbar-thumb {  background: rgba(0,0,0,.1);  }
/*
|**************************************************************************
| 나만의 앨범 글자의 위치
|**************************************************************************
*/
      #ablumtitle{
        display: inline-block;
        margin-left: 450px;
      }


/*| Plus의 이미지와 텍스트 위치 css*/


      .plus{
        /*padding-top:-250px;*/
        /*display: inline;*/
        /*width: 170px; height: 170px;*/
        /*margin-left: 1000px;*/
        /*margin-top: -550px; */
        /*position: absolute;*/
        /*top: 925px; left: 1040px;*/
        /*display: inline;*/
        /*margin-top: 30px;*/
        /*padding-top: 300px;*/
        /*padding-left: 0px;*/
        position: absolute;
        top: 45px;
      }
      #plusText{
        font-family: 'Nanum Gothic', serif;
        font-size: 30px;
        position: absolute;
        top: 710px; left: 1035px;
      }


/*  뒤로가기 버튼 css*/


      #back{
        font-family: 'Nanum Gothic', serif;
      }
      
/*/////////////////////////////////////////////////////////////////////////*/
   /* ul.mylist, ol.mylist {
          list-style: none;
          margin: 0px;
          padding: 0px;  
          max-width: 100%;
          width: 100%;
          height:100%;
          border: 1px solid #E3E3E3;
          background-color: #E3E3E3;
        }
  
    ul.mylist li, ol.mylist li {
         display: inline-block;
         padding: 10px;
         margin-bottom: 5px;
         border: 1px solid #E3E3E3;
         font-size: 12px;
         cursor: pointer;
         margin: 5px 3px 5px 1px;
        }
        
    ul.mylist li,
    ol.mylist li {
        -webkit-transition: background-color 0.3s linear;
        -moz-transition: background-color 0.3s linear;
        -ms-transition: background-color 0.3s linear;
        -o-transition: background-color 0.3s linear;
        transition: background-color 0.3s linear;
    }
  
    ul.mylist li:hover,
    ol.mylist li:hover {
       background-color: #f6f6f6;
    }*/
    .go{
        /*border: 1px solid #E3E3E3;*/
        /*border:3px solid #000000;*/
          margin: -20px 32px 0px 0px;
    /*white-space:nowrap;*/
    /*overflow:hidden; */
    /*text-overflow:ellipsis; */
    }
   /* .go p{
      margin-top: 0px;
    }
    .mylist img{
        margin: 2px 2px -1px 2px;
        border: 1px solid  White;
        padding: 3px 3px 3px 3px;
    }
/*//*/////////////////////////////////////////////////////////////////////*/

  
    li a:link { color: black; text-decoration: none; }
    li a:visited { color: black; text-decoration: none;}
    
    /* 타이틀 */
    
   /* #introduce{
      padding-bottom: 50px;
      margin-bottom: 50px;
      width: 200px; height: 200px;
    }
    #albumlist{
      border: 1px solid #7FC7AF;
      width: 1165px; height: 380px;
      margin-left: 50px;
      margin: 5px 0px 0px 65px;
      overflow: auto;
      padding-top: 20px;
    }
    .groud{
   
      height: 35px;
      background-color: #7FC7AF;
    }
    .titlebox{
      text-align:center;
      font-size:15px;
    
      font-family: 'Nanum Gothic', serif;
      width: 157px;
      white-space:nowrap;
      overflow:hidden; 
      text-overflow:ellipsis; 
    }*/
    #footer{
      margin-bottom : 0.5%;
    }
    
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
      
    }
    
    
/* Tuned only for Chrome */
/* Image courtesy wikipedia */
/* Design inspired by http://ruky1024.deviantart.com/art/Plastic-CD-Case-2-sizes-194440543 */
html {
  min-height: 100%;
  background: linear-gradient(hsla(200, 100%, 30%, 0.5),hsla(170, 100%, 30%, 0.5)), url(https://subtlepatterns.com/patterns/grey_wash_wall.png);
}
body {
  margin:0;
  padding:0;
}
.cd-case {
	height: 206px;
	width: 230px;
	margin:20px 0px 15px 35px;
	display: inline-block;
	border-radius: 3px;
	background: rgba(0,0,0,0);
	box-shadow: 0px 2px 10px 1px rgba(0,0,0,0.6), inset 0px 0px 20px 2px rgba(0,0,0,0.4), inset 0px 0px 5px 1px rgba(255,255,255,0.6), inset 0px 0px 0px 1px rgba(255,255,255,0.2);
}
.album-art {
	height: 200px;
	width: 200px;
	border-radius: 3px;
	background: rgba(0,0,0,0);
	box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.5),inset 0px 0px 16px 2px rgba(0,0,0,0.1), inset 0px 0px 0px 1px rgba(255,255,255,0.3);
	position: relative;
	top: 3px;
	left: 25px;
	z-index: -2;
}

#Latest{
  
  color:white;
}
#Latest p{
  text-align: center;
  font-size:30px;
  padding-top:70px;
}

.spine{
  color:white;
  margin-top:-160px;
  margin-left:3px;
  writing-mode: tb-rl
}
.test{
  border:1px solid white;
}
    </style>
   
  </head>
  <body>
    <div class="test">
      @include('mypage.album_topmenu')
    </div>
    
    <div id="Latest">
      <p>個人アルバム</p>
    </div>
   
    <div id="albumlist" >
      <?php
      foreach ($myAlbum as $myAlbums) {

      echo "
        <div id='case1' class='cd-case'>
        <a href ='/myPage/album/record/list/{$user_id}/{$myAlbums['album_number']}'>
          <div class='album-art' style='background:  linear-gradient(rgba(255,255,255,0.15),rgba(255,255,255,0)), url(http://harmony-project-chonahoom.c9users.io/albumImages/{$myAlbums['album_picture']}) center center no-repeat;
  background-size: cover;'>
            <div class='sup pos-tl'></div>
            <div class='sup pos-tr'></div>
            <div class='sup pos-bl'></div>
            <div class='sup pos-br'></div>
          </div>
          </a>
          <div class='spine'><b>{$myAlbums['album_title']}</b></div>
        </div>
      ";
      
      
      }
     ?>
     <div class='cd-case'>
       <a href ='/myPage/album/add'>
       <div class='album-art'>
        <div class="plus">
           <form action="/myPage/album/add" method="get">
              <input id="plus" type="image" src="/img/plus1.png" value="앨범추가" width="100" height="100" style="margin-left:45px">
           </form>
         </div>
       </div>
       </a>
     </div>
    </div>
    
  </body>
</html>