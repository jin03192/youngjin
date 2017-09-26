<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/hanna.css);
/*
    |**************************************************************************
    | 사용자 게시글 표시 부분
    |**************************************************************************
    */
    .imgbox{
      width: 1200px;
      height: 770px;  
      position: absolute;
      margin-top: 100px;
      left: 350px;
      border: 8px solid #7aba66;
      border-radius: 10px;
    }
    .videobox{
      position: absolute;
      top: 100px;
      left:20px;
      padding: 20px;
      width: 550px;
    }
    .videobox img[title="first"]{
      width: 500px;
      height: 250px;
    }
    .font{
      position: absolute;
      left: 630px;
      padding: 100px;
      font-size: 20px;
      font-weight: bold;
    }
    .point img {
      position: absolute;
      left: 50px;
      top: 80px;
      width: 40px;
      height: 40px;
    }
    .user_comment{
      width:1q00px;
      height:300px;
      position:relative;
      top:450px;
      margin-left: 40px;
    }
    .user_comment img[title="user_profile1"]{
      border-radius:75px;
      width:100px;
      height:100px;
      
      position: relative;
      top:55px;
    }
    .user_comment p{
      position:relative;
      display:inline-block;
      border:3px solid lightgreen;
      font-size:20px;
      padding:20px;
      border-radius:15px;
    }
    .user_comment p[title="user_profile1"]{
      top:0px;
      margin-left:30px;
    }
    .user_comment p[title="user_profile2"]{
      margin-left:300px;
    }
    .user_comment img[title="user_profile2"]{
      border-radius:75px;
      width:100px;
      height:100px;
      margin: 15px;
      position: relative;
      float:right;
    }
    #buttonBox{
      margin-bottom:40px;
    }
    input[type="button"]{
        margin-left: 10px;
        background:#1AAB8A;
        color:#fff;
        border:none;
        position:relative;
        margin-top:600px;
        left:370px;
        width:100px;
        height:40px;
        font-size:20px;
        padding:5px 10px;
        cursor:pointer;
    }
    input[type="button"]:hover{
        background:#fff;
        color:#1AAB8A;
    }
    /**************************************************************************
    | 모달 팝업 관련 css
    |**************************************************************************/
  	#bottom_buttonBox>a{
      position:relative;
      float:right;
      top:-80px;
      background:#1AAB8A;
      color:#fff;
      border:none;
      width:200px;
      height:30px;
      font-size:20px;
      padding:5px 10px;
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
    <div class="imgbox">
      <div class="videobox">
        <img title="first" src="/img/KJY.png" width="250" height="250">
      </div>
      <div class="font">
        <div class="point">
          <img src="/img/cross_point_green.png">
        </div>
        <p>곡명 : 베이스로 작곡해봤어요!</p>
        <p>작곡자 : 조나훔</p>
        <p>참여자 : 김혜진</p>
        <p>장르 : Rop / Hip-hop</p>
        <p>참여일 : 2017.05.19</p>
        <p>작곡에 사용된 악기 : 베이스기타</p>
        <p>작곡에 사용된 악기 : 신디사이저</p>
      </div>

      <div class="user_comment">
        <img title="user_profile1" src="/img/JNH.png">
        <p title="user_profile1"> 연주한 것을 동영상으로 촬영 해보았습니다!! 많은 분들 참여 부탁드려요^^ </p>

      </div>

<!--
|**************************************************************************
| 3개의 버튼을 표시하는 부분
|**************************************************************************
-->
<div id="buttonBox">
  <form name="recordForm" action="/recordwork" method="post">
    <input type="hidden" name="_token" value="">
    <input type="hidden" name="music_checked_list" value="">
    <input type="hidden" name="partici_checked_list" value="">
    <input type="hidden" name="band_board_id" value="">

    <input type="hidden" name="midi_id" value="">
    <input type="button" onclick="recordPage();" value="좋아요♥"></input>
    <input type="button" onclick="recordPage();" value="합주하기"></input>
    <input type="button" onclick="allCheck();" value="이전"></input>
    <input type="button" name="listen_btn" onclick="init();" value="▶">
 </form>
</div>
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
    </div>
  </body>
</html>
