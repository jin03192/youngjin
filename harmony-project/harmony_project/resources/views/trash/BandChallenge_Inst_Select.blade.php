<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/Select.css">
    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/hanna.css);

    </style>

  </head>
  <body>
    <!--
    |**************************************************************************
    | bandChallenge- Record합주_상단 메뉴부분
    |**************************************************************************
    -->
    <div class="top">
      @include('menu.topmenu')
    </div>
    <!--
    |**************************************************************************
    | bandChallenge- Record합주_앨범정보
    |**************************************************************************
    -->
    <div id="imgbox">
      <img src="/img/ali.jpg" width="250" height="250">
      <div class="font">
        <p>곡명 : Understand Me(Fact Young Jeezy)</p>
        <p>아티스트 : Chief keef</p>
        <p>장르 : Rop / Hip-hop</p>
        <p>발매일 :2012 12 18</p>
        <p>앨범 : Finally Rich</p>
        <p>연주하고 싶은악기</p>
      </div>
      <div class="styled-select">
        <select>
          <option selected>악기 선택</option>
          <option value="드럼">드럼</option>
          <option value="피아노">피아노</option>
          <option value="일렉">일렉</option>
          <option value="통기타">통기타</option>
          <option value="베이스">베이스</option>
        </select>
      </div>
      <div id="buttonBox">
        <a href="{{ url('/recordalbum')}}">이전</button>
        <a href="{{ url('/recordwork')}}">연주하기</button>
      </div>
    </div>
  </body>
</html>
