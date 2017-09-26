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
      <img id="img1" src="/img/JNH_Profile_Picture.png" width="480" height="510">
      <p class="google">곡명 : 베이스로 작곡해봤어요!<br><br>
         작곡자 : 조나훔 <br><br>
         장르 : Rop / Hip-hop <br><br>
         작곡일 : 2017.05.18<br><br>
         작곡에 사용된 악기 : 베이스기타
      </p>
      <div id="buttonBox">
        <button type="button" onclick="location.href='joinUs.jsp' ">♡좋아요</button>
        <button type="button" onclick="location.href='/instselect' ">다른합주 ??개</button>
        <button type="button" onclick="location.href='/otoven/record_join' ">합주에 참여하기</button>
      </div>
    </div>
  </body>
</html>