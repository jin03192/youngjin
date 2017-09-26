<!DOCTYPE html>
@extends('layouts.layout')

@section('content')

<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/Select.css?var=<?=filemtime('./css/Select.css');?>">
    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/hanna.css);
    
    .point img {
       position:absolute;
       left: 390px;
       top:37px;
       width:40px;
       height:40px;
       
    }
    
    .font p {
        font-weight:bold;
    }
    
    #imgbox{
    width: 60%;
    height: 50%;
    }
    video {
        margin-top:-5em;
        width:30em;
        height:30em;
    }
    
    img[title="play_button"]{
        position:absolute;
        left:180px;
        top:200px;
        width:50px;
        height:50px;
       
  	}

    /**************************************************************************
    | 모달 팝업 관련 css
    |**************************************************************************/
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
      top:350px;
      left:0%;
    }
    
  /***************************************************************************
  | 랭킹 게시물 보여주는 하얀색 div의 포지션 설정
  |***************************************************************************/
     .record_collabo_before,
     .record_collabo_after,
     .video_collabo_before,
     .video_collabo_after {
        position:relative ;
        top: 30px;
        left: 100px;
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
     
     strong{
       position:relative;
       top:-35px;
     }
     
     .user_comment p {
  	    position: relative;
  	    display: inline-block;
  	    border: 2px solid #1f8a70;
  	    border-radius: 5px;
  	    padding:5px;
  	}
  	.user_comment img:nth-child(n+1){
  	   position:relative;
  		  width: 75px;
  		  height: 75px;
  		  border-radius: 75px;
  	  	border: 4px solid #1f8a70;
  	} 
  	.user_comment img:nth-child(odd){
  	   position:absolute;
  		  top: 75%;
  		  left: 8%;
  	}
  	.user_comment p:nth-child(n+1){
  	   position:relative;
  		  bottom:-25.75em;
  		  left: -18em;
  	}
  	.user_comment img:nth-child(even){
  	   position:absolute;
  		  top: 85%;
  		  right: 14%;
  	}
  
  	#buttonBox{
  	  position: absolute;
  	  bottom: 10px;
  	  right: 20px;
  	}
    </style>
    
    <!--
    |**************************************************************************
    | http -> https 전환
    |**************************************************************************
    -->
    <script type="text/javascript">
    if (document.location.protocol == 'http:') {
    document.location.href = document.location.href.replace('http:', 'https:');
    }
    </script>

  <script type="text/javascript">
  var status;
     function play_button_delete(){
       var play_button_id = document.getElementById("play_button");
       if(play_button_id.firstElementChild.id == "play_button_img"){
        play_button_id.removeChild(play_button_id.firstElementChild);
        play_button_id.innerHTML="<img title='play_button' id='Pause_img' src='/img/Pause.png'></img>";
       }else if(play_button_id.firstElementChild.id == "Pause_img"){
        play_button_id.removeChild(play_button_id.firstElementChild);
        play_button_id.innerHTML="<img title='play_button' id='play_button_img' src='/img/Video_Play_Button.png'></img>";
       }
       status = "deleted"
     }
     
     function mouse_over(){
       var play_button_id = document.getElementById("play_button");
       if(!play_button_id.firstElementChild){
         play_button_id.innerHTML="<img title='play_button' id='Pause_img' src='/img/Pause.png'></img>";
       }
       
       status = "created"
     }
     
     function mouse_out(){
       var play_button_id = document.getElementById("play_button");
       if(play_button_id.firstElementChild.id == "Pause_img" && status == "created" && status !== "deleted"){
         play_button_id.removeChild(play_button_id.firstElementChild);
       }
       status = "deleted"
     }
     
     
  </script>
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
    <?php 
        
              foreach($otoven_videos_imfor as $list){
              echo"
                <div id='imgbox'>
                  <div class='articlebox' onmouseover='mouse_over();' onmouseout='mouse_out();'>";
                  $otoven_video_id = $otoven_video_parti::all()->where('otoven_video_id',$list['id']);
                  foreach ($otoven_video_id as $otoven_video_par) {
                   echo "<video src='/uploads/otoven/video/$otoven_video_par[file_name]' width='250' height='250' controls></video>";
                  }
                  
                  /*<a href='#' id='play_button' onClick='play_button_delete();'>
                      <img title='play_button' id='play_button_img' src='/img/Video_Play_Button.png'></img>
                    </a>*/
                  echo "
                   
                  </div>
                  <div class='font'>
                    <div class='point'><img src='/img/cross_point_green.png'></img></div>
                    <p>곡명 : $list[music_name]</p>";
                    
                    $user= $user::all()->where('id',$list['writer_id']);
                    foreach ($user as $user_id) {
                        echo "<p>작곡자 : $user_id[user_id]</p>";
                    }
                    
                   echo "
                    <p>장르 : $list[genre] / BPM : $list[bpm]</p>
                    <p>작곡일 :$list[updated_at]</p>
                    <p>작곡에 사용된 악기 : $otoven_video_instrum</p>
                    
                  </div>
                  <div class='user_comment'>";
                 
                  foreach ($user as $user_img) {
                   echo "<img title='user_profile1' src='/img/$user_img[userImage]'></img>";
                  }
                            
                  echo "
                      <p> $list[contents] </p>
                  </div>
                  <div id='buttonBox'>
                    <a href='{{ url('#')}}'>♥ 좋아요</a>
                    <a href='#open'>다른 합주 $list[writer_id]개</a>
                    <a href='{{ url('/otoven_video_collaborate_wait')}}'>이전</a>
                    <a href='/otoven_video_ansemble_one/$list[id]'>합주하기</a>
                    
                  </div>";

        }
    ?>
        
    
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
              <div id="buttonBox">
                <a href="#close" title="modal_close">닫기</a>
              </div>
            </p>
        </div>
    </div>
    
    
    </div>
  </body>
</html>

@endsection
