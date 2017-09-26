<!DOCTYPE html>
@extends('layouts.layout')

@section('content')
<html>
<head>
  <!-- 
  |*************************************************************************************
  |링크 뒤에 붙어있는  ?var=<?//=filemtime('파일경로');?>는 css,js의 수정내용이 바로바로 적용되게 하기 위함. 
  |*************************************************************************************
   -->
  
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/css/menu.css?var=<?=filemtime('./css/menu.css');?>">
  <link rel="stylesheet" href="/css/login.css?var=<?=filemtime('./css/login.css');?>">
  <link rel="stylesheet" href="/css/template_depth.css?var=<?=filemtime('./css/template_depth.css');?>">
  <script src="/js/jquery.flipster.min.js?var=<?=filemtime('./js/jquery.flipster.min.js');?>"></script>
  <script src="/js/template.js?var=<?=filemtime('./js/template.js');?>"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=550, initial-scale=1">
  <style>@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);</style>

 <!--지금 시도하려는 css및 화면설명-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fluid CSS3 Slideshow with Parallax Effect" />
        <meta name="keywords" content="fluid, css3, css-only, slideshow, responsive, parallax, sibling, pseudo-class, transitions" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="/css/otoven_slide/demo.css" />
        <link rel="stylesheet" type="text/css" href="/css/otoven_slide/style.css" />
		<script type="text/javascript" src="/js/otoven_slide/modernizr.custom.04022.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
 
 
 

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
     nav {
        margin-right: 15px;
        margin-left: 60px;
        display: inline-block;
     }

     section {
        position: absolute;
        top: 200px;
        display: inline-block;
        width:1550px;
        height:650px;
        border: 8px solid white;
     }

     h1 {
        text-align: center;
        color: white;
        font-weight: bold;
     }

     article {
        text-align: center;
     }
    
     li,.als-prev  {
         position: relative;
         display: inline-block;
     }
     
     img[title="previous"]  {
         position: absolute;
         display: inline-block;
         top:200px;
         left:-700px;
     }
     
     img[title="next"]  {
         position: absolute;
         display: inline-block;
         top:350px;
         left:1450px;
     }

  /***************************************************************************
  | 합주전/합주후 글자의 위치 및 글자속성 설정
  |***************************************************************************/
     span:nth-child(n+2){ 
        margin-left: 122.5px;
        margin-right: 122.5px;
        font-weight: bold;
        width:100%;
        display: inline;
        color: rgba(255,255,255,0.8);
     }


  /***************************************************************************
  | Record작곡&합주랭킹,Video작곡&합주랭킹 글자의 위치 및 글자속성 설정
  |***************************************************************************/
     span:nth-child(-n+2) {
        margin-left: 220px;
        margin-right: 220px;
        font-weight: bold;
        width:100%;
        display: inline;
     }
   

  /***************************************************************************
  | 랭킹 게시물 보여주는 하얀색 div안에 프로필 사진이 들어갈 div설정
  |***************************************************************************/   
   .picture_position, .Name_Tag{
      margin-top: 50px;
        width: 250px;
        height:250px;
        display: inline-block;
        
     }


  /***************************************************************************
  | 랭킹 게시물 보여주는 하얀색 div의 속성설정
  |***************************************************************************/
     .record_collabo_before,
     .record_collabo_after,
     .video_collabo_before,
     .video_collabo_after { 
        position: relative;
        margin-top: 0px;
        width: 250px;
        height:320px;
        margin-left: 10px;
        margin-right: 20px;
        display: inline-block;
        background-color: rgba(255,255,255,0.8);;
     }


  /***************************************************************************
  | 랭킹 게시물 보여주는 하얀색 div안에 프로필 사진 및 연주 사진 크기 설정
  |***************************************************************************/
     article img[title="record_collabo_before"]{
        width: 150px;
        height: 150px;
        border-radius: 75px;
     }
     article img[title="record_collabo_after"]{
        width: 100px;
        height: 100px;
        border-radius: 70px;
     }
     article img[title="video_collabo_before"]{
        width: 200px;
        height: 150px;
     }
     article img[title="video_collabo_after"]{
        width: 100px;
        height: 150px;
     }


  /***************************************************************************
  | 랭킹 게시물 보여주는 하얀색 div의 포지션 설정
  |***************************************************************************/
     .record_collabo_before,
     .record_collabo_after,
     .video_collabo_before,
     .video_collabo_after {
        position:relative ;
        top: 50px;
     }


  /***************************************************************************
  | 랭킹 게시물 보여주는 하얀색 div안에 게시물 제목과 게시자가 표시되는 frame(까만색 네모박스)
  |***************************************************************************/
     .Name_Tag {
        position:relative ;
        width: 210px;
        height:80px;
        top: -135px;
        border: 4px solid #3d3d3d;
     }


  /***************************************************************************
  | 랭킹 게시물 보여주는 하얀색 div안에 게시물 제목과 게시자가 표시되는 내용(font)
  |***************************************************************************/
     p[title="subject"] {
        margin-top: 5px;
        font-weight: bold;
        font-size: 20px;
     }
     p[title="writer"] {
        position: relative;
        top: -10px;
        font-size: 17px;
     }
  </style>
</head>
 

<body>
  <!-- 
  |**************************************************************************
  | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
  |**************************************************************************
   -->
    @include('menu.topmenu')
    
  <nav> <!-- 좌측 네비게이션 메뉴 -->
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
  </nav>   <!-- 좌측 네비게이션 메뉴 끝 -->

  <section> <!-- 중앙 컨텐츠 -->
     <header>
        <h1>音Ven 명예의 전당</h1>
     </header> 


     <article> <!-- 랭킹 1위 표시 article -->
        <span><a href="">Record작곡&합주랭킹</a></span>
        <span><a href="">Video작곡&합주랭킹</a></span><br><br>

        <span>합주 전</span>
        <span>합주 후</span>
        <span>합주 전</span>
        <span>합주 후</span><br>
        
        
     <div class="container">
		
		
			<div class="sp-slideshow">
			
				<input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
				<label for="button-1" class="button-label-1"></label>
				
				<input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
				<label for="button-2" class="button-label-2"></label>
				
				<input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
				<label for="button-3" class="button-label-3"></label>
				
				<input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
				<label for="button-4" class="button-label-4"></label>
				
				<input id="button-5" type="radio" name="radio-set" class="sp-selector-5" />
				<label for="button-5" class="button-label-5"></label>
				
				<label for="button-1" class="sp-arrow sp-a1"></label>
				<label for="button-2" class="sp-arrow sp-a2"></label>
				<label for="button-3" class="sp-arrow sp-a3"></label>
				<label for="button-4" class="sp-arrow sp-a4"></label>
				<label for="button-5" class="sp-arrow sp-a5"></label>
				
				<div class="sp-content">
					<div class="sp-parallax-bg"></div>
					<ul class="sp-slider clearfix">
						<li>
	 <!-- 
      |**************************************************************************
      | 音Ven- Record합주_아직 합주 전 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
        <div class="record_collabo_before">
            <div class="picture_position">
              <img src="/img/JNH_Profile_Picture.png" title="record_collabo_before">
            </div>

             <div class="Name_Tag">
                <p title="subject">힙합자작곡</p>   
                <p title="writer">조나훔</p>
             </div>
        </div>
        <!-- 
      |**************************************************************************
      | 音Ven- Record합주_합주 후 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
      
        <div class="record_collabo_after">
           <div class="picture_position">
              <img src="/img/JMH_Profile_Picture.png" title="record_collabo_after">
               <strong>X</strong> 
              <img src="/img/KHJ_Profile_Picture.png" title="record_collabo_after">
         </div>

         <div class="Name_Tag">
            <p title="subject">민호x혜진 작품!</p>   
            <p title="writer">장민호,김혜진</p>
         </div>
        </div>
        	<!-- 
      |**************************************************************************
      | 音Ven- Video합주_아직 합주 전 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
           
        <div class="video_collabo_before">
           <div class="picture_position">
              <img src="/img/KJY_Play_Video.png" title="video_collabo_before">
         </div>

         <div class="Name_Tag">
            <p title="subject">미사일!</p>   
            <p title="writer">김진영</p>
         </div>
        </div>
        	<!-- 
      |**************************************************************************
      | 音Ven- Video합주_합주 후 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
    
        <div class="video_collabo_after">
           <div class="picture_position">
              <img src="/img/JSM_Play_Video.png" title="video_collabo_after">
              <img src="/img/PHG_Play_Video.png" title="video_collabo_after">
         </div>

         <div class="Name_Tag">
            <p title="subject">피아노랑 드럼!</p>   
            <p title="writer">주성민,박현경</p>
         </div>	
						</li>
						<li>
	  <!-- 
      |**************************************************************************
      | 音Ven- Record합주_아직 합주 전 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
        <div class="record_collabo_before">
            <div class="picture_position">
              <img src="/img/JNH_Profile_Picture.png" title="record_collabo_before">
            </div>

             <div class="Name_Tag">
                <p title="subject">힙합자작곡</p>   
                <p title="writer">조나훔</p>
             </div>
        </div>
        <!-- 
      |**************************************************************************
      | 音Ven- Record합주_합주 후 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
      
        <div class="record_collabo_after">
           <div class="picture_position">
              <img src="/img/JMH_Profile_Picture.png" title="record_collabo_after">
               <strong>X</strong> 
              <img src="/img/KHJ_Profile_Picture.png" title="record_collabo_after">
         </div>

         <div class="Name_Tag">
            <p title="subject">민호x혜진 작품!</p>   
            <p title="writer">장민호,김혜진</p>
         </div>
        </div>
        	<!-- 
      |**************************************************************************
      | 音Ven- Video합주_아직 합주 전 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
           
        <div class="video_collabo_before">
           <div class="picture_position">
              <img src="/img/KJY_Play_Video.png" title="video_collabo_before">
         </div>

         <div class="Name_Tag">
            <p title="subject">미사일!</p>   
            <p title="writer">김진영</p>
         </div>
        </div>
        	<!-- 
      |**************************************************************************
      | 音Ven- Video합주_합주 후 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
    
        <div class="video_collabo_after">
           <div class="picture_position">
              <img src="/img/JSM_Play_Video.png" title="video_collabo_after">
              <img src="/img/PHG_Play_Video.png" title="video_collabo_after">
         </div>

         <div class="Name_Tag">
            <p title="subject">피아노랑 드럼!</p>   
            <p title="writer">주성민,박현경</p>
         </div>	
						</li>
						<li>
	    <!-- 
      |**************************************************************************
      | 音Ven- Record합주_아직 합주 전 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
        <div class="record_collabo_before">
            <div class="picture_position">
              <img src="/img/JNH_Profile_Picture.png" title="record_collabo_before">
            </div>

             <div class="Name_Tag">
                <p title="subject">힙합자작곡</p>   
                <p title="writer">조나훔</p>
             </div>
        </div>
        <!-- 
      |**************************************************************************
      | 音Ven- Record합주_합주 후 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
      
        <div class="record_collabo_after">
           <div class="picture_position">
              <img src="/img/JMH_Profile_Picture.png" title="record_collabo_after">
               <strong>X</strong> 
              <img src="/img/KHJ_Profile_Picture.png" title="record_collabo_after">
         </div>

         <div class="Name_Tag">
            <p title="subject">민호x혜진 작품!</p>   
            <p title="writer">장민호,김혜진</p>
         </div>
        </div>
        	<!-- 
      |**************************************************************************
      | 音Ven- Video합주_아직 합주 전 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
           
        <div class="video_collabo_before">
           <div class="picture_position">
              <img src="/img/KJY_Play_Video.png" title="video_collabo_before">
         </div>

         <div class="Name_Tag">
            <p title="subject">미사일!</p>   
            <p title="writer">김진영</p>
         </div>
        </div>
        	<!-- 
      |**************************************************************************
      | 音Ven- Video합주_합주 후 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
    
        <div class="video_collabo_after">
           <div class="picture_position">
              <img src="/img/JSM_Play_Video.png" title="video_collabo_after">
              <img src="/img/PHG_Play_Video.png" title="video_collabo_after">
         </div>

         <div class="Name_Tag">
            <p title="subject">피아노랑 드럼!</p>   
            <p title="writer">주성민,박현경</p>
         </div>	
						</li>
						<li>
		<!-- 
      |**************************************************************************
      | 音Ven- Record합주_아직 합주 전 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
        <div class="record_collabo_before">
            <div class="picture_position">
              <img src="/img/JNH_Profile_Picture.png" title="record_collabo_before">
            </div>

             <div class="Name_Tag">
                <p title="subject">힙합자작곡</p>   
                <p title="writer">조나훔</p>
             </div>
        </div>
        <!-- 
      |**************************************************************************
      | 音Ven- Record합주_합주 후 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
      
        <div class="record_collabo_after">
           <div class="picture_position">
              <img src="/img/JMH_Profile_Picture.png" title="record_collabo_after">
               <strong>X</strong> 
              <img src="/img/KHJ_Profile_Picture.png" title="record_collabo_after">
         </div>

         <div class="Name_Tag">
            <p title="subject">민호x혜진 작품!</p>   
            <p title="writer">장민호,김혜진</p>
         </div>
        </div>
        	<!-- 
      |**************************************************************************
      | 音Ven- Video합주_아직 합주 전 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
           
        <div class="video_collabo_before">
           <div class="picture_position">
              <img src="/img/KJY_Play_Video.png" title="video_collabo_before">
         </div>

         <div class="Name_Tag">
            <p title="subject">미사일!</p>   
            <p title="writer">김진영</p>
         </div>
        </div>
        	<!-- 
      |**************************************************************************
      | 音Ven- Video합주_합주 후 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
    
        <div class="video_collabo_after">
           <div class="picture_position">
              <img src="/img/JSM_Play_Video.png" title="video_collabo_after">
              <img src="/img/PHG_Play_Video.png" title="video_collabo_after">
         </div>

         <div class="Name_Tag">
            <p title="subject">피아노랑 드럼!</p>   
            <p title="writer">주성민,박현경</p>
         </div>			
						</li>
	    				<li>
		<!-- 
      |**************************************************************************
      | 音Ven- Record합주_아직 합주 전 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
        <div class="record_collabo_before">
            <div class="picture_position">
              <img src="/img/JNH_Profile_Picture.png" title="record_collabo_before">
            </div>

             <div class="Name_Tag">
                <p title="subject">힙합자작곡</p>   
                <p title="writer">조나훔</p>
             </div>
        </div>
        <!-- 
      |**************************************************************************
      | 音Ven- Record합주_합주 후 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
      
        <div class="record_collabo_after">
           <div class="picture_position">
              <img src="/img/JMH_Profile_Picture.png" title="record_collabo_after">
               <strong>X</strong> 
              <img src="/img/KHJ_Profile_Picture.png" title="record_collabo_after">
         </div>

         <div class="Name_Tag">
            <p title="subject">민호x혜진 작품!</p>   
            <p title="writer">장민호,김혜진</p>
         </div>
        </div>
        	<!-- 
      |**************************************************************************
      | 音Ven- Video합주_아직 합주 전 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
           
        <div class="video_collabo_before">
           <div class="picture_position">
              <img src="/img/KJY_Play_Video.png" title="video_collabo_before">
         </div>

         <div class="Name_Tag">
            <p title="subject">미사일!</p>   
            <p title="writer">김진영</p>
         </div>
        </div>
        	<!-- 
      |**************************************************************************
      | 音Ven- Video합주_합주 후 게시물 중 랭킹 1위 표시
      |**************************************************************************
      -->
    
        <div class="video_collabo_after">
           <div class="picture_position">
              <img src="/img/JSM_Play_Video.png" title="video_collabo_after">
              <img src="/img/PHG_Play_Video.png" title="video_collabo_after">
         </div>

         <div class="Name_Tag">
            <p title="subject">피아노랑 드럼!</p>   
            <p title="writer">주성민,박현경</p>
         </div>			
						</li>
					</ul>
				</div><!-- sp-content -->
				
			</div><!-- sp-slideshow -->
			
		</div>
      
     </article><!-- 랭킹 1위 표시 article 끝 -->
  </section> <!-- 중앙 컨텐츠 끝 -->

</body>
</html>

@endsection