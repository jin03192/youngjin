<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/bandview.css?var=<?=filemtime('./css/bandview.css');?>">
    <link rel="stylesheet" href="/css/Before_View.css?var=<?=filemtime('./css/Before_View.css');?>">
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
  | bandChallenge- Record합주_Navigation 메뉴부분
  |**************************************************************************
  -->
<!-- 좌측 네비게이션 메뉴 -->
<div class="nav">
  @include('board.BandChallenge_Navigation')
</div>
  <!-- 좌측 네비게이션 메뉴 끝 -->
  <!--
  |**************************************************************************
  | bandChallenge- Record합주_게시글 표시부분
  |**************************************************************************
  -->
  <div id="imgbox">
    <img id="img1" src="/img/ali.jpg" width="250" height="250">
    <div class="font">
      <p>曲名 : Understand Me(Fact Young Jeezy)</p>
      <p>アーティスト : Chief keef</p>
      <p>掲示者 : 나훔</p>
      <p>参加者</p>
      <p>合奏に参加された楽器 : 베이스 기타</p>
    </div>
  </div>
  <div id="buttonBox">
    <a href="{{ url('#')}}">♥ 좋아요</a>
    <a href="{{ url('#')}}">다른 합주 ?개</a>
    <a href="{{ url('/recordbefore')}}">이전</a>
    <a href="{{ url('/recordjoin')}}">연주하기</a>
  </div>
  <div class="article" title="one">
    <img src="img/iu.jpg" alt="">
    <p>いつまでも美しくありたい。</p>
  </div>
</body>
