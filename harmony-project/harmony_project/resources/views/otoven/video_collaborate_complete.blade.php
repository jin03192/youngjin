<!DOCTYPE html>
<html>
<head>

  <!-- 
  |*************************************************************************************
  |링크 뒤에 붙어있는  ?var=<?//=filemtime('파일경로');?>는 css,js의 수정내용이 바로바로 적용되게 하기 위함. 
  |*************************************************************************************
   -->
   
   <!-- 사이드메뉴 관련 css 및 js -->
  <link href="/css/otoven_sidemenu/demo.css?var=<?=filemtime('./css/otoven_sidemenu/demo.css');?>" rel="stylesheet" type="text/css" />
  <link href="/css/otoven_sidemenu/boxymenu.css?var=<?=filemtime('./css/otoven_sidemenu/boxymenu.css');?>" rel="stylesheet" type="text/css" />
  <script src="/js/otoven_sidemenu/jquery.min.js?var=<?=filemtime('./js/otoven_sidemenu/jquery.min.js');?>" type="text/javascript"></script>
  <script src="/js/otoven_sidemenu/boxymenu.js?var=<?=filemtime('./js/otoven_sidemenu/boxymenu.js');?>" type="text/javascript"></script>
  <!-- -------------------------------------------------------------- -->
  
   
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
  | 각 태그별 가장 큰범위 속성
  |***************************************************************************/   
  
    .section {
        position: absolute;
        margin-left:3%;
        top: 225px;
        display: inline-block;
        width:1550px;
        
        border: 8px solid white;
     }

    .circle_profile {
      width: 50px;
      height: 50px;
      border-radius: 70px;
    }

    .activator {
      position: relative;
      float:left;
      margin-top:10%;
      margin-bottom:8%;
      width:50%;
      height:100%;
    }
    .activator3 {
      position: relative;
      float:left;
      margin-top:15%;
      margin-bottom:1%;
      width:33.3333333%;
      height:33.333333%;
    }
    .card-title3{
        position:absolute;
        top:40%;
        width:100%;
        font-size:25px;
    }

    .card-title{
        position:absolute;
        top:45%;
    }
    
    .play_button {
      position: relative;
      left:340px; top: -5px; z-index: 1;
      width:50px;
      height: 50px;
    }

    .card.medium>hr {
      position: relative; top: 23%;
    }
    .card.medium3>hr {
      position: relative; top: 37%;
    }
    .card.medium3>span {
      position: absolute; 
      top: 93%; left: 15px;
    }
    
    .card.medium>span {
      position: absolute; 
      top: 93%; left: 15px;
    }
    .card-content3 p {
        position: absolute;
        top: 75%;
        left:5%;
    }
    .card-content p {
        position: absolute;
        top: 75%;
        left:5%;
    }

    .btn {
      position: relative;
      padding-top:8px;
      margin-top: 10px;
      margin-bottom: 10px;
      left:1050px;
    }
    
    .boxy-menu > li
    {
        margin: 0;
        padding: 0;
        width: 220px;
        height: 150px;
        display: inline;
        float: left;
        font-family: Arial;
        margin-left: 25px;
        margin-right: 25px;
        margin-top: 20px;
        overflow: hidden;
        cursor: pointer;
        position: relative;
    }
    
    .boxy-menu-item-bottom
    {
         padding-right:5px;
         padding-top:15px;
        display: none;
        
    }
    
    .boxy-menu
  {
      /*width: 1024px;*/
      height: 150px;
      list-style: none;
      float:left;
      margin: 0;
      padding: 0;
      margin-left: 18px;
      margin-top: 150px;
      margin: 0 auto;
      width: 200px;
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
<!--좌측 사이드메뉴 시작-->
 <div id="menu-wrapper">
        <ul class="boxy-menu">
            <li>
                <a href="{{ url('/otoven/record_before') }}" style="text-decoration:none">
                <div class="boxy-menu-item-top">
                    Record 합주를 기다려요
                </div>
                <div class="boxy-menu-item-bottom">
                    <ul class="items">
                        <p>Solo Mode</p>
                        <p>오디오 인터페이스 or 마이킹을 통한 녹음작곡</p>
                    </ul>
                </div>
                </a>
            </li>


            <li>
                <a href="{{ url('/otoven/record_collaborate_after') }}" style="text-decoration:none">
                <div class="boxy-menu-item-top">
                    Record 합주를 했어요
                </div>
                <div class="boxy-menu-item-bottom">
                    <ul class="items">
                        <p>Multi Mode</p>
                        <p>다른사람의 작곡녹음 게시물을 보고, 직접 작곡에 참여할 수 있습니다.</p>
                    </ul>
                </div>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/otoven_video_collaborate_wait') }}" style="text-decoration:none">
                <div class="boxy-menu-item-top">
                    Video 합주를 기다려요
                </div>
                <div class="boxy-menu-item-bottom">
                    <ul class="items">
                        <p>Solo Mode</p>
                        <p>오디오 인터페이스 or Cam을 통한 녹화작곡</p>
                    </ul>
                </div>
                </a>
            </
            li>
            
            <li>
                <a href="{{ url('/otoven_video_collaborate_complete') }}" style="text-decoration:none">
                <div class="boxy-menu-item-top">
                    Video 합주를 했어요
                </div>
                <div class="boxy-menu-item-bottom">
                    <ul class="items">
                        <p>Multi Mode</p>
                        <p>다른사람의 작곡녹화 게시물을 보고, 직접 작곡에 참여할 수 있습니다.</p>
                    </ul>
                </div>
                </a>
            </li>
        </ul>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#menu-wrapper').boxymenu();
        });
    </script>
    
    <!--좌측 사이드메뉴 끝-->

  <div class="section"> <!-- 중앙 컨텐츠 -->

    <header>
    <a class="waves-effect waves-light btn">추천순</a>
    <a class="waves-effect waves-light btn">조회순</a>
    <a class="waves-effect waves-light btn">최신순</a>
    </header> 
    <article> <!-- 랭킹 1위 표시 article -->
    <?php
      if($otoven_video_all){
        foreach($otoven_video_all as $list){
        $otoven_video_id = $otoven_video_parti::all()->where('otoven_video_id',$list['id']);
        $user_image = $user::find($list['writer_id']);
        
                
     if(count($otoven_video_id) == 3){    
        echo"<div class='card medium3'>";
     }else{
        echo"<div class='card medium'>";
     }
     echo " <a href='/otoven_in_two_video_article/$list[id]'>
              <div class='complete-card-image waves-effect waves-block waves-light'>
              ";
              
               
               foreach($otoven_video_id as $otoven_video){
                    if(count($otoven_video_id) == 3){
                        echo"<video class='activator3' src='/uploads/otoven/video/$otoven_video[file_name]'></video>";
                    }else{
                        echo"<video class='activator' src='/uploads/otoven/video/$otoven_video[file_name]'></video>";
                    }
               }
               /*<img class='play_button' src='/img/Video_Play_Button.png'>*/
                echo"   
              </div>
             </a>";
             
             if(count($otoven_video_id) == 3){
                 echo" <div class='card-content3'>";
                 echo"<span class='card-title3 activator3 grey-text text-darken-4'>";
             }else{
                 echo" <div class='card-content'>";
                echo"<span class='card-title activator grey-text text-darken-4'>";
             }
                    
              
                     echo"<img class='circle_profile' src='/img/$user_image[userImage]'>";
                
            echo "
                  {$list['subject']}
                </span>
                <p>{$list['contents']}</p>
              </div>
              <hr>
              <span>♥ 좋아요 x {$list['goods']}</span>
            </div>
            ";
          
        }
      }
    ?>
    </article><!-- 랭킹 1위 표시 article 끝 -->
  </div> <!-- 중앙 컨텐츠 끝 -->



</body>
</html>
