
  
@extends('layouts.layout')

@section('content')
<body>
<style>
  /*
  |**************************************************************************
  | 동영상 NAVIGATION메뉴
  |**************************************************************************
  */
  .nav{
    float: left;
    margin-top: 200px;
    padding:10px;
  }
  /*
  |**************************************************************************
  | 동영상 header Button CSS
  |**************************************************************************
  */
  .headerbutton button{
    position: relative;
    border:none;
    border-radius:4px;
    font-size: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 10 20px;
    margin-top: 10px;
    margin-left: 20px;
    float: right;
    background-color:	#7FFFD4;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    transition: .3s ease-out;
  }
  .headerbutton button:hover{
    background-color:	#40E0D0;
  }
  /*
  |**************************************************************************
  | 동영상 중앙컨텐츠
  |**************************************************************************
  */
  .tablecard{
    position: absolute;
    width: 1400px;
    height: 1500px;
    border: 8px solid gray;
    margin-top: 200px;
    left: 350px;
    padding: 50px;
    display: inline-block;
  }
  /*
  |**************************************************************************
  | 동영상 게시물 CSS
  |**************************************************************************
  */
  .card{
    width: 400px;
    height:400px;
    position: relative;
    border: 2px solid #cacaca;
    border-radius:20px;
  }
  .videoview{
    position:relative;
    height:220px;
  }
  .videoview img[alt="video"]{
    float:left;
    position:relative;
    top:50px;
    width: 400px;
    height: 150px;
    }
  .videoview img[alt="playbtn"]{
    width: 50px;
    position: absolute;
    top: 100px;
    left: 170px;
  }
  .container{
    position:relative;
    height:180px;
  }
  .container img[alt="profile"]{
    width: 50px;
    height: 50px;
    position: relative;
    border-radius: 70px;
    top: 20px;
    left:10px;
  }
  .container p[title="title"]{
    font-size: 25;
    position: absolute;
    top: 0px;
    left: 90px;
  }
  .container p{
    margin-top: 30px;
  }
  .container p[title="container"]{
    padding:10px;
  }
  .container>a{
    color: black;
    text-decoration:none;
  }
  .container>a:hover{
    color: gray;
  }
  .container>button{
    cursor: pointer;
    border: none;
    color: white;
    background-color: #2196F3;
    border:1px solid #2196F3;
    padding: 5px;
    margin-left:-2px;
    margin-top:8px;
    width:404px;
  }
  .container>button:hover{
    background-color: #0b7dda;
  }
</style>
<!--
|**************************************************************************
| bandChallenge- Record합주_상단 메뉴부분
|**************************************************************************
-->
@include('menu.topmenu')
<div class="container align">
  <div class="row "> 
    <div class="col-md-3 navfloat">
      @include('board.BandChallenge_Navi')    
    </div>
  </div>
</div>
<!--
|**************************************************************************
| bandChallenge- Video합주_게시판 부분
|**************************************************************************
-->
<div class="tablecard">
  <div class="headerbutton">
    <button>최신순</button>
    <button>조회순</button>
    <button>인기순</button>
  </div>
  <div class="card">
    <div class="videoview">
      <a href="/videoBView">
      <img src="/img/teayeon3.jpg" alt="video">
      <img src="/img/play.png" alt="playbtn">
      </a>
    </div>
    <div class="container">
      <img src="/img/JNH.png" alt="profile">
      <a href="/videoBView">
        <p title="title">피아노로 작곡해보았어요!</p>
        <p title="container">연주한 것을 동영상으로 촬영 해보았습니다!! 많은 분들 참여 부탁드려요~^-^</p>
      </a>
      <button type="button" name="button">♥ 좋아요 &nbsp;&nbsp;0</button>
    </div>
  </div>
</div>

</body>
@endsection