

@extends('layouts.layout')

@section('content')



<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Passion+One');
  /***************************************************************************
  | 각 태그별 가장 큰범위 속성
  |**************************************************************************
  */
    html,body{
        background-color:#3d5a59;
    }
    /*
    |**************************************************************************
    | 음원에 대한 정보들의 위치를 지정해주고 경계선을 그어준다.
    |**************************************************************************
    */
    #imgbox{
        width:700px;
        height:350px;
        font-family: Mouse Memoirs, Hanna, gulim;
        position: absolute;
        top: 300px; left: 350px;
        border: 8px solid #7ABA66;
        border-radius: 10px;
        background-color: white;
      }
    #imgbox>img{
      float:left;
      margin:20px;
      width:200px;
      height:200px;
    }
    /*
    |**************************************************************************
    | p태그의 padding 및 글자크기 지정
    |**************************************************************************
    */
    .font{
      position:relative;
      padding-top:20px;
      padding-bottom:20px;
      font-size: 30px;
     }
      /*
      |**************************************************************************
      | button의 위치를 padding을 통해 지정해준다.
      |**************************************************************************
      */
      .recordlist{
        overflow:auto;
        width:700px;
        height:250px;
        border-radius: 5px; 
        border: 3px solid black; 
        position: absolute; 
        top:350px;
        left:1100px;
        background-color:white;
      }
      .recordlist>h1{
        text-align:center;
      }
      .layer{
        position:absolute;
        top:80px;
        left:150px;
        width:400px;
        border: 3px solid #000;
        border-radius: 10px;
        background-color:white;
      }
      .listname{
        position:relative;
        color:black;
        display:inline-block;
        margin-right:10px;
      }
      input[type="button"]{
        margin-left: 10px;
        background:#1AAB8A;
        color:#fff;
        border:none;
        position:relative;
        margin-top:410px;
        left:370px;
        width:100px;
        height:40px;
        font-size:20px;
        padding:0 0.8em;
        cursor:pointer;
    }
    input[type="button"]:hover{
        background:#fff;
        color:#1AAB8A;
    }
    /*
    |**************************************************************************
    | 사용자 글 부분
    |**************************************************************************
    */
    .users{
      width:900px;
      height:130px;
      background-color:white;
      position:relative;
      left:350px;
      top:200px;
      border-radius: 15px;
    }
    img[alt="userimg"]{
      width:100px;
      height:100px;
      border-radius: 75px;
      position:relative;
      margin:15px;
    }
    p[name="comment"]{
      color:black;
      display:inline-block;
      position:absolute;
      font-size:20px;
      border:3px solid lightgreen;
      border-radius: 15px;
      padding:30px;
      left:150px;
    }
    .users-title{
      position:relative;
      left:350px;
      top:150px;
      background-color:lightgreen;
      border-radius: 15px;
      width:1450px;
      height:50px;
    }
    .users-title>p{
      font-size:30px;
      display:inline-block;
      position:relative;
      left:600px;
      top:-30px;
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
    /**************************************************************************
    | 모달 팝업 관련 css
    |**************************************************************************/
    #bottom_buttonBox>a{
      position:relative;
      float:right;
      right:100px;
      top:200px;
      margin-left: 10px;
      background:#1AAB8A;
      color:#fff;
      border:none;
      width:200px;
      height:30px;
      font-size:20px;
      padding:15px 10px;
      cursor:pointer;
      text-align:center;
      margin-bottom:40px;
      text-decoration:none;
    }
    #bottom_buttonBox>a:hover{
      background-color:white;
      color:#1AAB8A;
    }
  	.another_play {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.8);
      opacity:0;
      -webkit-transition: opacity 400ms ease-in;
      -moz-transition: opacity 400ms ease-in;
      transition: opacity 400ms ease-in;
      pointer-events: none;
    }
    
    .another_play:target {
        opacity:1;
        pointer-events: auto;
    }
    
    .another_play > div {
    	position: absolute;
    	top: 25%;
    	left: 25%;
    	width: 50%;
    	height: 50%;
    	padding: 16px;
    	border: 16px solid #3ea480;
    	background-color: white;
    	overflow: auto;	
    }
    a[title="modal_close"]{
      position:absolute;
      top:10px;
      right:20px;
      text-decoration:none;
      font-size:40px;
      text-align:center;
      border-radius:50px;
      background-color:  #FF5050;
      color:white;
      width:40px;
      height:40px;
      font-family: 'Passion One', cursive;
    }
  /***************************************************************************
  | 랭킹 게시물 보여주는 하얀색 div안에 프로필 사진 및 연주 사진 크기 설정
  |***************************************************************************/
     .another_play img[title="record_collabo_before"]{
        width: 150px;
        height: 150px;
        border-radius: 75px;
     }
     .another_play img[title="record_collabo_after"]{
        width: 100px;
        height: 100px;
        border-radius: 70px;
     }
     .another_play img[title="video_collabo_before"]{
        width: 200px;
        height: 150px;
     }
     .another_play img[title="video_collabo_after"]{
        width: 100px;
        height: 150px;
     }
     
  /***************************************************************************
  | 랭킹 게시물 보여주는 하얀색 div의 속성설정
  |***************************************************************************/
     .record_collabo_after { 
        position: relative;
        margin-top: 0px;
        width: 250px;
        height:280px;
        margin-left: 20px;
        margin-right: 20px;
        display: inline-block;
        border: 4px solid #6d928c;
        }
  /***************************************************************************
  | 랭킹 게시물 보여주는 하얀색 div안에 게시물 제목과 게시자가 표시되는 frame(까만색 네모박스)
  |***************************************************************************/
     .Name_Tag {
        position:relative;
        text-align:center;
        margin:auto;
        width: 210px;
        height:80px;
        top: 20px;
        border: 4px solid #6d928c;
     }
     .user_profile_circle{
       margin-left:5%;
       margin-top:20%;
     }
     
</style>
            
<!--
|**************************************************************************
| bandChallenge- Record합주_상단 메뉴부분
|**************************************************************************
-->
  @include('menu.topmenu')
<!--
|**************************************************************************
| bandChallenge- Record합주_Navigation 메뉴부분
|**************************************************************************
-->
<div class="nav">
  @include('otoven.otoven_Navigation')
</div>
<!--
|**************************************************************************
| 곡 이름과 게시자 정보 나타내는 부분 (하얀박스)
|**************************************************************************
--> 
<div id="imgbox">
  <img id="img1" src=""/>
  <div class="font">
    <p>곡 명 : 나중에 구현할게요</p>
    <p>게시자 :{{$participants[0]['user_id']}}</p>
    <p>장르 : 작곡</p>
  </div>
</div>
<!--
|**************************************************************************
| 작곡 음원을 표시하는 부분
|**************************************************************************
-->
<div class="recordlist">
  <h1>작곡 음원</h1>
    <div class="layer" name="layer" >
      <div>합주자 리스트</div>
        <div style='border-radius: 5px;margin: 5px;padding: 5px;border: 1px solid black'>
          
          <?php
              foreach ($otoven_audio_particis as $otoven_audio_partici){
                  $inst_src = '/uploads/otoven/audio/'.$otoven_audio_partici['file_name'];
                  echo "<div style='border-radius: 5px;margin: 5px;padding: 5px;border: 1px solid black'>".
                      substr($otoven_audio_partici['file_name'],0,-4)."
                : <input type='checkbox' checked name='participants[]' value='$otoven_audio_partici[file_name]'/><br>";
                  echo "<audio name='my_participant[]' controls>
                  <source src='$inst_src' type='audio/mpeg'>
              </audio></div>";
              }
           ?>
          
        </div>
    </div>
</div>
<!--
|**************************************************************************
| 3개의 버튼을 표시하는 부분
|**************************************************************************
-->
<div id="buttonBox">
  <form name="recordForm" action="/otoven_recordwork" method="post">
    
    <input type="hidden" name="partici_checked_list" value="">
    <input type="hidden" name="otoven_board_id" value="{{$id}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    

    <input type="hidden" name="midi_id" value="">
    <input type="button" onclick="recordPage();" value="좋아요♥"></input>
    <input type="button" onclick="recordPage();" value="합주하기"></input>
    <input type="button" onclick="allCheck();" value="이전"></input>
    <input type="button" name="listen_btn" onclick="init();" value="▶">
    
 </form>
</div>
<!--
|**************************************************************************
| 게시자 코멘트 부분
|**************************************************************************
-->
<div class="users-title">
  <p>사용자 코멘트란</p>
</div>

<?php
  foreach($participants as $participant){
    echo "
    <div class='users'>
      <img src='/img/$participant[userImage]' alt='userimg'></img>
      <p name='comment'>이 테이블도 따로 만들어야 하노 ㅜ.ㅜ</p>
    </div>
    ";
  }
?>



<div id='bottom_buttonBox'>
<a href='#open'>다른 합주 4개</a>
</div>

<div class="another_play" id="open">
    <div>
        <p>
          <div id="two" class="record_collabo_after">
            <div class="user_profile_circle">
                <img id="two1" src="/img/JMH_Profile_Picture.png" title="record_collabo_after">
                 <strong>X</strong> 
                <img id="two2" src="/img/KHJ_Profile_Picture.png" title="record_collabo_after">
           </div>
           <div id="two3" class="Name_Tag">
              <p title="subject">민호x혜진 작품!</p>   
              <p title="writer">장민호,김혜진</p>
           </div>
          </div>
          
          <div id="two" class="record_collabo_after">
            <div class="user_profile_circle">
                <img id="two1" src="/img/JMH_Profile_Picture.png" title="record_collabo_after">
                 <strong>X</strong> 
                <img id="two2" src="/img/KHJ_Profile_Picture.png" title="record_collabo_after">
           </div>
           <div id="two3" class="Name_Tag">
              <p title="subject">민호x혜진 작품!</p>   
              <p title="writer">장민호,김혜진</p>
           </div>
          </div>
          <div id="icon">
            <a href="#close" title="modal_close">×</a>
          </div>
        </p>
    </div>
</div>

    <script src="/scripts/same_time_play.js"></script>
@endsection
