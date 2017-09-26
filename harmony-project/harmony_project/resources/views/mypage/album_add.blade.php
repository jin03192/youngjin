<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>게시판</title>
    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
/*
|**************************************************************************
| 앨범 게시판의 "앨범만들기" 글과 텍스트
|**************************************************************************
*/
      #submit{
        position: absolute;
        top: 715px; left: 860px;
        font-family: 'Nanum Gothic', serif;
        font-size: 20px;
      }
      #boardmain{
        margin-top: -300px;
        font-family: 'Nanum Gothic', serif;
        font-size: 20px;
      }
      #titles{
        text-align:center;
        font-family: 'Nanum Gothic', serif;
        font-size: 40px;
      }
      #back{
        position: absolute;
        top: 715px; left: 775px;
        font-family: 'Nanum Gothic', serif;
        font-size: 20px;
      }
      label{
        font-family: 'Nanum Gothic', serif;
        font-size: 20px;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  </head>
  <body>
      <header class="navbar navbar-inverse">
        @include('menu.topmenu')
      </header>
        <div class='os'>
        <table border=2>
               <h2 id="titles">앨범만들기</h2>
               <div id="boardmain" style="padding :330px;">
                   <form action='/addAlbumAction' method='post' enctype='multipart/form-data'>
                     <div class="form-group">
                       <label>제목</label>
                       <input type="text" name='album_title' class="form-control">
                     </div>
                     <div class="form-group">
                       <label>앨범소개</label>
                        <textarea rows="15" cols="40" name='album_content' class="form-control"></textarea>

                     </div>
                     <div class="form-group">
                       <input type='file' name='album_picture'>
                     </div>
                     <br><br>
                     <input id="submit" type="submit" value='앨범생성'>
                     <button id="back" type="button" onClick="location.href='/myPage/album';">뒤로가기</button>
                     
                     {{csrf_field()}}
                   </form>
               </div>
          </div>
        </body>
      </html>
