<!DOCTYPE html>
<html>
<head>

  <!-- 
  |*************************************************************************************
  |링크 뒤에 붙어있는  ?var=<?//=filemtime('파일경로');?>는 css,js의 수정내용이 바로바로 적용되게 하기 위함. 
  |*************************************************************************************
   -->
  <link rel="stylesheet" href="/css/materialize.css?var=<?=filemtime('./css/materialize.css');?>">
  <link rel="stylesheet" href="/js/materialize.js?var=<?=filemtime('./js/materialize.min.js');?>">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/css/menu.css?var=<?=filemtime('./css/menu.css');?>">
  <link rel="stylesheet" href="/css/login.css?var=<?=filemtime('./css/login.css');?>">
  <link rel="stylesheet" href="/css/template_depth.css?var=<?=filemtime('./css/template_depth.css');?>">
  <script src="/js/jquery.flipster.min.js?var=<?=filemtime('./js/jquery.flipster.min.js');?>"></script>
  <script src="/js/template.js?var=<?=filemtime('./js/template.js');?>"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=550, initial-scale=1">
  <style>@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);</style>
  
   <script>
    window.onload=function(){
      function funLoad(){
        var Cheight = $(window).height();
        $('.section').css({'height':Cheight+'px'});
      }
      window.onload = funLoad;
      window.onresize = funLoad;
    }
  </script>
  <style type="text/css">
  html,body{
    background-color:#3d5a59;
}
  /***************************************************************************
  | 좌측 네비게이션 메뉴 속성 설정
  |***************************************************************************/
    .record_collaborate_wait,
    .record_collaborate_complete,
    .video_collaborate_wait,
    .video_collaborate_complete {
      margin-top: 20px;
      margin-left: 0px;
      width: 200px;
      height: 140px;
      border: 8px solid white;
      color: white;
      text-align: center;
      line-height: 120px;
      font-weight: bold;
    }

  /***************************************************************************
  | 각 태그별 가장 큰범위 속성
  |***************************************************************************/   
  .left_menu {
      margin-right: 15px;
      margin-left: 60px;
      display: inline-block;
      

    }

    .section {
      position: absolute;
      padding-left: 50px;
      top: 200px;
      display: inline-block;
      width:1400px;
 
      border: 8px solid white;
    }

    .circle_profile {
      width: 50px;
      height: 50px;
      border-radius: 70px;
    }

    .activator {
      position: relative;
    }
    .play_button {
      position: relative;
      left:340px; top: -5px; z-index: 1;
      width:50px;
      height: 50px;
    }

    .card.medium>hr {
      position: relative; top: -10px;
    }

    .card.medium>span {
      position: absolute; top: 375px; left: 15px;
    }

    .btn {
      position: relative;
      padding-top:8px;
      margin-top: 10px;
      margin-bottom: 10px;
      left:1050px;
    }
    
 
    .column {
      border: 2px solid #cacaca;
      margin-right:50px;
      margin-bottom:20px;
      background-color:white;
    }
    .cover {
      position:relative;
      display:inline-block;
      padding-top:15px;
      padding-left:15px;
      padding-bottom:10px;
      padding-right:15px;
      background-color: #6d928c;
    }
    .cover img{
      border-radius: 70px;
      width:150px;
      height:150px;
    }
    .cover p{
      position:relative;
      display:inline-block;
      top:-60px;
    }
    .info {
      position:relative;
      display:inline-block;
    }
    .albumtitle{
      position:relative;
      top:-50px;
      left:20%;
      font-size:200%;
    }
    .artist{
      position:relative;
      top:-50px;
      left:60%;
    }
    .foot>ul li{
      position:relative;
      left:20%;
      display:inline-block;
    }
  </style>
</head>
 

<body>

 <!-- 
  |**************************************************************************
  | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
  |**************************************************************************
   -->
  <header class="navbar navbar-inverse">
    @include('menu.topmenu')
  </header>

  <div class="left_menu"> <!-- 좌측 네비게이션 메뉴 -->
    <a href="{{ url('/otoven/record_collaborate_wait') }}">
      <div class="record_collaborate_wait">
        Record 합주를 기다려요
      </div>
    </a>
    <a href="{{ url('/otoven/record_collaborate_complete') }}">
      <div class="record_collaborate_complete">
        Record 합주를 했어요
      </div>
    </a>
    <a href="{{ url('/otoven_video_collaborate_wait') }}">
      <div class="video_collaborate_wait">
        Video 합주를 기다려요
      </div>
    </a>
    <a href="{{ url('/otoven/video_collaborate_complete') }}">
      <div class="video_collaborate_complete">
        Video 합주를 했어요
      </div>
    </a>
  </div>  <!-- 좌측 네비게이션 메뉴 끝 -->

  <div class="section"> <!-- 중앙 컨텐츠 -->

    <header>
    <a class="waves-effect waves-light btn">추천순</a>
    <a class="waves-effect waves-light btn">조회순</a>
    <a class="waves-effect waves-light btn">최신순</a>
    </header> 
    <article> <!-- 랭킹 1위 표시 article -->
<!--
|**************************************************************************
| bandChallenge- Record합주_게시판 부분
|**************************************************************************
-->
<div class="table">
  <ul class="list">
  
    <li class="column">
      <div class="cover">
        <a href="{{ url('/beforeview')}}">
          <img src="/img/JNH_Profile_Picture.png">
        </a>
        <p>X</p>
        <a href="{{ url('/beforeview')}}">
          <img src="/img/JNH_Profile_Picture.png">
        </a>
      </div>
      <div class="info">
        <div class="tabletop">
          
        </div>
        <div class="albumtitle">
          <a href="{{ url('otoven/in_two_record_article')}}">피아노 작곡!</a>
        </div>
        <div class="artist">
            누가봐도김혜진
        </div>
        <div class="foot">
          <ul>
            <li>시간  03:52</li>
            <li>추천  75,545</li>
          </ul>
        </div>
      </div><!--info끝-->
    </li>
    
    <li class="column">
      <div class="cover">
        <a href="{{ url('/beforeview')}}">
          <img src="/img/JNH_Profile_Picture.png">
        </a>
        <p>X</p>
        <a href="{{ url('/beforeview')}}">
          <img src="/img/JNH_Profile_Picture.png">
        </a>
      </div>
      <div class="info">
        <div class="tabletop">
          
        </div>
        <div class="albumtitle">
          <a href="{{ url('otoven/in_two_record_article')}}">피아노 작곡!</a>
        </div>
        <div class="artist">
            누가봐도김혜진
        </div>
        <div class="foot">
          <ul>
            <li>시간  03:52</li>
            <li>추천  75,545</li>
          </ul>
        </div>
      </div><!--info끝-->
    </li>
    
    <li class="column">
      <div class="cover">
        <a href="{{ url('/beforeview')}}">
          <img src="/img/JNH_Profile_Picture.png">
        </a>
        <p>X</p>
        <a href="{{ url('/beforeview')}}">
          <img src="/img/JNH_Profile_Picture.png">
        </a>
      </div>
      <div class="info">
        <div class="tabletop">
          
        </div>
        <div class="albumtitle">
          <a href="{{ url('otoven/in_two_record_article')}}">피아노 작곡!</a>
        </div>
        <div class="artist">
            누가봐도김혜진
        </div>
        <div class="foot">
          <ul>
            <li>시간  03:52</li>
            <li>추천  75,545</li>
          </ul>
        </div>
      </div><!--info끝-->
    </li>
    
  </ul>
</div>
  </div> <!-- 중앙 컨텐츠 끝 -->



</body>
</html>
