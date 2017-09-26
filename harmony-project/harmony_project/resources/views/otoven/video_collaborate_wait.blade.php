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
  <link rel="stylesheet" href="/css/app.css?var=<?=filemtime('./css/app.css');?>">
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
  
    #total_wrap {
        width: 100%;
    }
    
    #content_wrap{
        width: 1300px;
        margin: 0 auto;
    }
   html,body{
    background-color:#3d5a59;
  }
  

  /***************************************************************************
  | 각 태그별 가장 큰범위 속성
  |***************************************************************************/   
   .nav{
        position: absolute;
        left: 7%;
        margin-right:20px;
    }
    
    .section {
       position: absolute;
        margin-left:21em;
        padding-left:60px;
        top: 200px;
        display: inline-block;
        width:1000px;
        
        border: 8px solid white;
    }

    .circle_profile {
      width: 50px;
      height: 50px;
      border-radius: 70px;
    }

    .activator {
      position: relative;
      width:400px;
    }
    .play_button {
      position: relative;
      left:340px; top: -120px; z-index: 1;
      width:50px;
      height: 50px;
    }

    .card.medium {
      position:relative;
      display:inline-block;
      top:0px;
    }
    .card.medium>hr {
      position: relative; 
      top: -40px;
    }

    .card.medium>span {
      position: relative; top: -58px; left: 15px;
    }

    .btn,.center_btn {
      position: relative;
      padding: 0 auto;
      margin-top: 10px;
      margin-bottom: 10px;
      margin-left:5px;
      margin-right:auto;
    }
    .center_btn{
        margin-left:30%;
    }
    
    
    p[title="contents"]{
      padding-left:15px;
      padding-right:15px;
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
 <div id="total_wrap">
 <!-- 
  |**************************************************************************
  | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
  |**************************************************************************
   -->
  <header class="navbar navbar-inverse">
    @include('menu.topmenu')
  </header>
<div id="content_wrap">
  <div class="nav">
  @include('otoven.otoven_Navigation')
  </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#menu-wrapper').boxymenu();
        });
    </script>
    
    <!--좌측 사이드메뉴 끝-->

  <div class="section"> <!-- 중앙 컨텐츠 -->

    <header>
    <a class="waves-effect waves-light btn center_btn" 
       href="/otoven_video_recording_one">녹화하기</a>
    <a class="waves-effect waves-light btn">추천순</a>
    <a class="waves-effect waves-light btn">조회순</a>
    <a class="waves-effect waves-light btn">최신순</a>
    </header> 
    
                <!--<p>id:{$list['id']}</p>
                <p>제목:{$list['subject']}</p>          
                <p>악기:{$list['instruments']}</p>          
                <p>첫게시자:{$user_imfor['user_id']}</p>          
                <p>내용:{$list['contents']}</p>          
                <p>참여자:{$list['writer_id']}</p>          
                <p>추천수:{$list['goods']}</p>          
                <p>유저프로필사진:{$user_imfor['userImage']}</p> -->


 
        <?php 
        
        if($otoven_video_all){
              foreach($otoven_video_all as $list){
                   
              echo "
                <div class='card medium'>
                  <a href='/otoven_in_one_video_article/$list[id]'>
                     <div class='card-image waves-effect waves-block waves-light'>";
                     
                    $otoven_video_id = $otoven_video_partis::all()->where('otoven_video_id',$list['id']);
                    
                     foreach($otoven_video_id as $otoven_video_par){
                        echo "<video class='activator' src='/uploads/otoven/video/$otoven_video_par[file_name]'></video>";
                     }
                    
                       echo"
                       <img class='play_button' src='/img/Video_Play_Button.png'>
                     </div>
                  </a>

                  <div class='card-content'>
                    <span class='card-title activator grey-text text-darken-4'>";
                    
                    $user_image= $user::all()->where('id',$list['writer_id']);
                    foreach($user_image as $user_img){

                      echo "<img class='circle_profile' src='/img/$user_img[userImage]'>"; 
                    }
                    
                    echo "
                      $list[subject]
                    </span>
                    <p title='contents'>$list[contents]</p>
                  </div>
                    <hr>
                    <span>좋아요♡x $list[goods]</span>
                </div>
                ";

            
          }
        }
?>
       
        </div><!-- content_wrap 끝 -->
    </div><!-- total_wrap 끝 -->
  </div> <!-- 중앙 컨텐츠 끝 -->



</body>
</html>
