

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
      width: 1230px;
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
      margin-top:20px;
      margin-left: 10px;
      list-style-type: none;
      background-color:white;
      width: 1100px;
      position:relative;
    }
    .column:hover{
      list-style-type: none;
      box-shadow: 2px 2px 20px darkgray;
    }
    .list{
      padding-top: 70px;
    }
    .cover{
      position:relative;
      display:inline-block;
      padding-top:15px;
      padding-left:15px;
      padding-bottom:10px;
      padding-right:15px;
      background-color: #6d928c;
      left:0;
    }
    .cover img {
      width:200px;
      height:200px;
      border:1px solid black;
    }
    .info{
      position:absolute;
      width:300px;
      top:30px;
      left:280px;
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
      background-color:#AFEEEE	;
      border-radius:15px;
      left:130px;
      padding:10px;
    }
    p[name="publishername"]{
      top:-15px;
      text-align:center;
      font-size:30px;
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
      left:800px;
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
  </style>
<!--
|**************************************************************************
| Record합주_상단 메뉴부분
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
      
        <div class='table'>
      
   <?php
   $k = 0;
   
        echo "<ul class='list'>";
        foreach ($otoven_audio_boards as $otoven_audio_board){
           
//전체 밴드 오디오 게시판
 ?>
    <li class="column">
      <div class="cover">
          <a href="/otoven/record_collaborate_beforeview/{{$otoven_audio_board['id']}}">
              <img src="/img/{{$partici_name[$k]->value('userImage')}}"/>
          </a>
      </div>
      <div class="info">
          <!--<a href="/recordbefore/{{$otoven_audio_board['id']}}">-->
          <!--</a>-->
          <div class="albumtitle">
              미디도 없는데
          </div>
          <div class="artist">
              {{$partici_name[$k]->value('user_id')}}
          </div>
          <div class="toptitle">
            제목 : {{$otoven_audio_board['subject']}}
          </div>
          <div class="foot">
              <ul>
                <li>{{substr($otoven_audio_board['created_at'],0,-9)}}</li>
                <li>좋아요 : {{$otoven_audio_board['goods']}}</li>
              </ul>
          </div>
      </div><!--info끝-->
      <div class="toptable">
        <div class="publisher">
          <p name="boardtitle">게시자</p>
          <p name="publishername">{{$partici_name[$k]->value('user_id')}}</p>
        </div>
      </div>
    </li>

  <?php
  $k++;
         }
  ?>
      </ul>
    </div>
  </div>
  
      <!--/////////////////////////////////////////////////////////-->
    <div class="sidemenu">
      <a onclick="recordPage();">
      <img src="/img/musicnote.png"></img>
      <p name="start">작곡하러가기</p>
      </a>
    </div>
    
    <script type="text/javascript">
    
     function post_to_url(path, params) {
      
          var form = document.createElement("form");
          form.setAttribute("method", "post");
          form.setAttribute("action", path);
      
          for(var key in params) {
              var hiddenField = document.createElement("input");
              hiddenField.setAttribute("type", "hidden");
              hiddenField.setAttribute("name", key);
              hiddenField.setAttribute("value", params[key]);
              form.appendChild(hiddenField);
          }
      
          document.body.appendChild(form);
          form.submit();
      }
      function recordPage() {
        post_to_url('/otoven_recordwork',{
                "_token":  $('meta[name="csrf-token"]').attr('content'),
            });
      }
           
    </script>
 @endsection
    