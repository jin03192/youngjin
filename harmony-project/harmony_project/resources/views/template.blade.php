
<!DOCTYPE html>
<html>
<head>
  <!--
  |*************************************************************************************
  |링크 뒤에 붙어있는  ?var=<?//=filemtime('파일경로');?>는 css,js의 수정내용이 바로바로 적용되게 하기 위함.
  |*************************************************************************************
   -->
   <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MusicQuitous</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=550, initial-scale=1">
  <style>
  @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
  body{
    background-image:url('/img/mainimg.jpg');
    background-size:100%;
  }
  .smalltitle{
    text-align:center;
    
  }
  .smalltitle>strong{
    text-align:center;
    width:40%;
    color:white;
    font-size:23px;
    background-color:rgba(0,0,0,.7);
  }
  .bigtitle{
    text-align:center;
  }
  .bigtitle>strong{
    color:white;
    font-size:70px;
    font-family: "Noto Sans Japanese";
    background-color:rgba(0,0,0,.7);
    text-align:center;
  }
  .maintitle{
    position:absolute;
    top:50%;
    width:100%;
  }
  .buttontitle{
    margin-top:20px;
    text-align:center;
  }
  .buttontitle button{
    border:none;
    background-color:black;
    color:white;
    padding:5px 20px;
    border-radius:30px;
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
  <div class="container maintitle ">
    <div class="row">
      <div class="col-md-12 smalltitle ">
        <strong>一緒に演奏する人がいない？</strong>
        <!--같이 합주할 사람이 없다고?-->
      </div>
    </div>
    <div class="row bit_align">
      <div class="col-md-12 bigtitle">
        <strong>&nbsp;ＭＱしよう！</strong>
        <!--<strong>MQ하자!</strong>-->
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 buttontitle text-center">
        <button>
          一緒に演奏しに行こう →
          <!--합주하러 가기 →-->
        </button>
      </div>
    </div>
  </div>
</body>
</html>
