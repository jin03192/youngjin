<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
    <style media="screen">
    
/*
|**************************************************************************
| 앨범 이미지와 설명이 들어간 div박스의 CSS
|**************************************************************************
*/
      #ablums{
        font-family: "Open Sans", sans-serif;
        font-weight: 600;
        font-size: 100%;
        color: #000000;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.9);
        text-transform: uppercase;
        text-align: center;
        margin: 2% 2% 2% 2%;
        padding-bottom: 2%;
        float:left;
        width:120px; height:150px;
        border:2px solid #7FC7AF;
        border-radius: 10px;
      }
      #album_Main{
        overflow-y:scroll;
        border-radius: 18px;
        margin: 2% 0 0 2%;
        border:5px solid #7FC7AF;
        width:372px; height: 400px;
      }
      .main{
        border-radius: 10px;
      }
/*
|**************************************************************************
| 스크롤의 css를 지정해준다.
|**************************************************************************
*/
      ::-webkit-scrollbar {width: 10px;}
      ::-webkit-scrollbar-track {-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,3); border-radius: 10px;}
      ::-webkit-scrollbar-thumb {border-radius: 10px;-webkit-box-shadow: inset 0 0 6px #000000;
      }
      
/*
|**************************************************************************
| 나만의 앨범 글자의 위치
|**************************************************************************
*/
      #ablumtitle{
        position:relative;
        left:30%;
        display: inline-block;
        text-align:center;
        font-size:200%;
      }
/*
|**************************************************************************
| Plus의 이미지와 텍스트 위치 css
|**************************************************************************
*/
      #plus{
        display: inline-block;
        /*margin-left: 1000px;
        margin-top: -550px; */
        position: relative;
        top: 95%; left: 45%;
        width:10%; height:10%;
      }
      #plusText{
        display:inline-block;
        font-family: 'Hanna', serif;
        font-size: 150%;
        position: relative;
        top: 70%; left: 45%;
      }
      
      button {
          display:inline-block;
          position:relative;
          width:50%;
          height:100%;
          top: 95%; left: 45%;
          font-size:100%;
      }
    </style>
  </head>
  <body>
 
    <h2 id="ablumtitle">나만의 앨범</h2>
    <div id="album_Main">
    <?php
      foreach ($myAlbum as $myAlbums) {
        echo "<a href ='/ionic/album/record/list/{$user_id}/{$myAlbums['album_number']}'>
        <div id='ablums'>";
        echo "<img class='main' src='/albumImages/{$myAlbums["album_picture"]}' width=100%; height=87%;>";
        echo $myAlbums['album_title'];
        echo "</div></a>";
      }
     ?>
   </div>
     <form class="" action="/ionic/album/add" method="get">
        <input id="plus" type="image" src="/img/plus-button.png" value="앨범추가">
        <p id="plusText">앨범 추가</p>
     </form>
     <button type="button"><a href="{{ url('/ionic/login') }}">Login</a></button>
     <button type="button" onClick="close_server();">뒤로가기</button>
     <script>
         function close_server(){
             self.opener = self;
             opener.close();
         }
     </script>
  </body>
</html>
