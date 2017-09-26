<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="http://fonts.googleapis.com/css?family=Mouse+Memoirs" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/Choice.css?var=<?=filemtime('./css/Choice.css');?>">
  </head>
  <body>
    @include('menu.topmenu')
    <div id="imgbox">
      <img id="img1" src="/img/sane.jpg" width="480" height="510">
      <p class="google">곡명:Understand Me(Fact Young Jeezy)<br><br>
         아티스트: Chief keef <br><br>
         장르: Rop / Hip-hop <br><br>
         발매일:2012 12 18<br><br>
         앨범: Finally Rich
      </p>
      <div id="buttonBox">
        <button type="button" onclick="location.href='joinUs.jsp' ">♡좋아요</button>
        <button type="button" onclick="location.href='/instselect' ">Record 합주 참여하기</button>
        <button type="button" onclick="location.href='/instselect' ">Video합주 참여하기</button>
      </div>
    </div>
  </body>
  </html>