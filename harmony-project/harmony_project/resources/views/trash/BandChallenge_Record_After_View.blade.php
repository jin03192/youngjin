<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
    <!--<link rel="stylesheet" href="/css/bandview.css?var==filemtime('./css/bandview.css');?>">-->
    <!--<link rel="stylesheet" href="/css/After_View.css?var==filemtime('./css/After_View.css');?>">-->
  </head>
  <style type="text/css">
    
  </style>
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
  | bandChallenge- Record합주_Navigation 메뉴부분
  |**************************************************************************
  -->
<!-- 좌측 네비게이션 메뉴 -->
  @include('board.BandChallenge_Navigation')
  <!-- 좌측 네비게이션 메뉴 끝 -->
  <div class="align">
    <div id="imgbox">
      <img id="img1" src="/img/ali.jpg" width="250" height="250">
      <div class="font">
        <p>곡명 : Understand Me(Fact Young Jeezy)</p>
        <p>아티스트 : Chief keef</p>
        <p>게시자 : 나훔</p>
        <p>참여자</p>
        <p>합주에 참여된 악기 : 베이스 기타</p>
      </div>
    </div>
    <div id="buttonBox">
      <a href="{{ url('#')}}">♥ 좋아요</a>
      <a href="{{ url('#')}}">다른 합주 ?개</a>
      <a href="{{ url('/recordafter')}}">이전</a>
      <a href="{{ url('/recordjoin')}}">연주하기</a>
    </div>
  </div>
</body>
