

@extends('layouts.layout')

@section('content')

  <style>@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);</style>
  <style type="text/css">
  /***************************************************************************
  | 각 태그별 가장 큰범위 속성
  |**************************************************************************
  */
    html,body{
        background-color:#3d5a59;
    }
    .beforesection {
      position: absolute;
      top: 220px;
      left: 280px;
      display: inline-block;
      width: 1400px;
      height:1000px;
      border: 8px solid #f0f0f5;
    }
    header>.btn{
      position: relative;
      font-size: 15px;
      padding: 10 20px;
      margin-top: 20px;
      margin-left: 20px;
      float: right;
      -webkit-transition-duration: 0.7s; /* Safari */
      transition-duration: 0.7s;
    }
    header>.btn:hover{
      background-color: white;
      color: black;
    }

    .column {
      border: 2px solid #cacaca;
      margin-top:40px;
      margin-left: 120px;
      list-style-type: none;
      background-color:white;
      width: 1100px;
      position:relative;
      z-index:2;
    }
    .column:hover{
      list-style-type: none;
      box-shadow: 2px 2px 20px darkgray;
    }
    .list{
      padding-top: 70px;
    }
    .corver{
      position:relative;
      display:inline-block;
      padding:15px;
      background-color: #6d928c;
      left:0;
      z-index:3;
    }
    /***************************************************************************
    | 이미지 뭉쳐있다가 나오기
    |**************************************************************************
    */
    .dropimg {
      border: none;
      cursor: pointer;
      position: relative;
    }
    .dropimg>img{
      top:0;
      position:relative;
      display: inline-block;
      width: 200px;
      height:200px;
      cursor: pointer;
    }
    
    .dropdown-img {
      position: absolute;
      top:5px;
      display: none;
      left:250px;
      float:left;
      width:780px;
      height:220px;
      list-style-type: none;
      background-color:white;
      border:3px solid black;
      z-index:10;

    }
    
    .userimage {
        color: black;
        width:220px;
        height:219px;
        padding: 0px 16px;
        text-decoration: none;
        display: none;
        z-index:10;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
        position:relative;
        border:1px solid black;
    }
    .corver:hover .dropdown-img , .userimage{
        display: inline-block;
    }
    /***************************************************************************
    | 게시글 내용부분(하양)
    |**************************************************************************
    */
    .info{
      position:absolute;
      width:300px;
      top:30px;
      left:280px;
      z-index:1;
    }
    .toptitle{
      position:relative;
      font-size:20px;
      border-bottom:1px solid black;
      margin-top:10px;
      width:390px;
      display:block;
    }
    .albumtitle{
      position:relative;
      font-size:40px;
    }
    .artist{
      position:relative;
      text-align:right;
      margin-top:10px;
    }
    .foot{
      text-align:right;
    }
    .foot>ul li{
      position:relative;
      display:inline-block;
      margin-top:50px;
    }
    .toptable{
      position:absolute;
      border-left:1px solid black;
      width:30%;
      top:0;
      left:70%;
      height:100%;
    }
    .publisher{
      position:relative;
      top:10%;
      display:block;
    }
    .publisher p{
      position:relative;
      text-align:center;
    }
    .publisher p[name="boardtitle"]{
      display:inline-block;
      background-color:#AFEEEE;
      border-radius:15px;
      left:130px;
      top:-30px;
      padding:10px;
    }
    p[name="publishername"]{
      top:-50px;
      text-align:center;
    }
      
    /*
    |**************************************************************************
    | 네비게이션 메뉴
    |**************************************************************************
    */
    .boxy-menu li{
      position:relative;
      top:20px;
    }
    /*
    |**************************************************************************
    | sidemenu
    |**************************************************************************
    */
    
    .topsubmenu>button{
      margin-left: 10px;
      background:#99FF33;
      color:#336600;
      border:none;
      position:relative;
      left:950px;
      top:30px;
      width:120px;
      height:50px;
      font-size:20px;
      padding:0 0.8em;
      cursor:pointer;
      border-radius:55px;
      /*transition:400ms ease all;*/
      /*outline:none;*/
    }
    
    /*
    |**************************************************************************
    | sidemenu
    |**************************************************************************
    
    .sidemenu{
      width:200px;
      height:300px;
      background-color:lightgreen;
      position:absolute;
      left:1600px;
      top:250px;
      border-radius:55px;
    }
    .sidemenu img{
      width:100px;
      height:100px;
      margin:45px;
    }
    .sidemenu a{
      text-decoration:none;
      color: #30913D;
    }
    .sidemenu a:hover{
      color: #99FF99;
    }
    p[name="start"]{
      font-size:25px;
      text-align:center;
      margin-top:-10px;
    }*/
  </style>
  
<!--
|**************************************************************************
|  Record합주_상단 메뉴부분
|**************************************************************************
-->
  @include('menu.topmenu')
<!--
|**************************************************************************
| Record합주_Navigation 메뉴부분
|**************************************************************************
-->
 <div class="nav">
  @include('otoven.otoven_Navigation')
  </div>
<!--
|**************************************************************************
| otoven 내용 시작 부분:)
|**************************************************************************
-->
    <div class='beforesection'>
<!--
|**************************************************************************
| otoven 상단 메뉴 3개
|**************************************************************************
-->
      <div class="topsubmenu">
        <button>최신순</button>
        <button>추천순</button>
        <button>조회순</button>
      </div>
<!--
|**************************************************************************
| otoven 내용부분:)
|**************************************************************************
-->
      <div class='table'>

       <?php
       
         $k = 0;
              echo "<ul class='list'>";
              foreach ($otoven_audio_boards as $otoven_audio_board){
                 
      //전체 밴드 오디오 게시판
       ?>
          <li class="column">
            <div class="corver">
              <a href="/otoven/record_collaborate_beforeview/{{$otoven_audio_board['id']}}"> 
                <img src="/img/ali.jpg" alt="">
              </a>
                <ul>
                  <li class="dropdown-img">
                    <a href="#"><img class="userimage" src="/img/ali.jpg" alt=""></a>
                    <a href="#"><img class="userimage" src="/img/ali.jpg" alt=""></a>
                    <a href="#"><img class="userimage" src="/img/ali.jpg" alt=""></a>
                  </li>
                </ul>
            </div>
            <div class="info">
                <!--<a href="/recordbefore/{{$otoven_audio_board['id']}}">-->
                <!--</a>-->
                <div class="albumtitle">
                    미디도 없는데
                </div>
                <div class="artist">
                    {{substr($partici_name[$k],0,strpos($partici_name[$k], ','))}}
                </div>
                <div class="toptitle">
                  제목 : {{$otoven_audio_board['subject']}}
                </div>
                <div class="foot">
                    <ul>
                      <li>{{substr($otoven_audio_board['created_at'],9,-3)}}</li>
                      <li>좋아요 : {{$otoven_audio_board['goods']}}</li>
                    </ul>
                </div>
            </div><!--info끝-->
            <div class="toptable">
              <div class="publisher">
                <p name="boardtitle">게시자</p>
                <p name="publishername">{{substr($partici_name[$k],0,strpos($partici_name[$k], ','))}}</p>
                <p name="boardtitle">참여자</p>
                    <p name="publishername">{{substr($partici_name[$k],0,-1)}}</p>
                  </div>
                </div><!--toptable끝-->
          
          
              </li><!--column끝-->
        <?php
        $k++;
               }
        ?>
        
                
        </ul>
      </div>
    </div>
    <!--<div class="sidemenu">-->
    <!--  <a href="#">-->
    <!--  <img src="/img/musicnote.png"></img>-->
    <!--  <p name="start">작곡하러가기</p>-->
    <!--  </a>-->
    <!--</div>-->
    
 @endsection
    