<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BandChallenge</title>
   <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
      body{
        background:url("/img/bandchallenge3.jpg");
        background-size:100%;
        background-repeat:no-repeat;
        font-family: 'Nanum Gothic', serif;
      }
      /*record작곡합주랭킹 버튼부분*/
      .ranking_title span{
        padding:12px 20px;
        border-radius:10px;
        background-color:lightgreen;
        margin-right:20%;
        margin-left:20%;
        font-size:14px;
      }
      .ranking_title a{
        text-decoration:none;
      }
      /*랭킹버튼과 합주전/후 1위들간의 간격*/
      article{
        padding-top:50px;
      }
      .greedtop{
        margin-top:100px;
      }
      /*합주 랭킹 1위의 login이미지 나타내는 곳*/
      .box_img{
        padding:40px;
        
      }
      .box_img img{
        width:100px;
        height:100px;
      }
      .imgline{
        margin:50 auto;
        border:1px solid #008B8B;
        border-top-left-radius:70px; 
        border-bottom-right-radius:70px; 
        width:21%;
        height:370px;
        margin-left:2%;
        margin-right:2%;
      }
      .imgline:hover{
        background-color:#D3D3D3;
        border-radius:70px;
        transition: 0.3s; /* Add transition on hover */
      }
      p[title="inter"]{
        font-size:25px;
        background-color: #D3D3D3;
        border-radius:50px;
      }
      p[title="subject"]{
        border-top:1px solid #D3D3D3;
        font-size:18px;
      }
      .contenttop{
        margin-top:5%;
      }
      #navmain{
        border: 1px solid;
        width: 1300px; height: 365px;
        margin-left: 370px;
      }
      .navfloat{
        position:absolute;
        left:0px;
      }

    </style>
  </head>
  <body>
  <!--
  |**************************************************************************
  | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
  |**************************************************************************
   -->
    <nav class="navbar menu_background">
    @include('menu.invisiblemenu')
    </nav>
    <div class="container align">
      <div class="row"> 
        <div class=" navfloat">
          @include('board.BandChallenge_Navi')    
        </div>
      </div>
    </div>
  </div>
   
<!--   <p id = 'footer'>-->
<!--  <pre id = 'footer_text'>-->
<!--      <img src = "/img/logo2.png" width="60" height="30" align="left">                                                                                                                                                                                                                                                                                                               김대호 교수님(PM), 조나훔(조장), 박현경, 장민호, 김진영, 김혜진, 주성민-->
<!--                                                                                                                                                                                                                                                                                                                   Copyright&copy; 2017 YoungjinCollege Harmony Team All rights reserved</pre>-->
                                                                                  
<!--</p>-->
</body>
</html>