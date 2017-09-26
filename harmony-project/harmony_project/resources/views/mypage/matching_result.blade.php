
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
    <link rel="stylesheet" href="/css/Connection.css?var=<?=filemtime('./css/Connection.css');?>" type="text/css" />
    <script type="text/javascript" src="/js/Connection.js?var=<?=filemtime('./js/Connection.js');?>"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
     <!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    <style>
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    #maintext{
      left: -10px;
      font-size: 19px;
    }
    #test{
        position: absolute;
        top: 88px; left: 385px;
        width: 120px; height: 25px;
        padding: 4px;
        /*font-size: 15px;*/
      }
    #sel{
      margin-top: -30px; margin-left: 50px;
      width: 120px; height: 25px;
    }
    #sel1{
      width: 95px;  height: 25px;
      padding: 4px;
    }
    
    
    /*
    **************************************************************************
    | title 메인 글씨, div1 사용자의 음악장르, 자주 연주하는 악기 글씨
    |**************************************************************************
    */
    
    
    #title{
      font-family: 'Nanum Gothic', serif;
      font-size: 25px;
      text-align:center;
      /*margin-top: 50px;*/
    }
  
    #div10{
      width: 480px; height: 200px;
    }
    /*
    **************************************************************************
    | title 메인 글씨, div1 사용자의 음악장르, 자주 연주하는 악기 글씨
    |**************************************************************************
    */
    
    
    #text{
      margin-top: -40px;
      margin-left: -40px;
    }
    
    .moreMenu{
          position:absolute;
          background-color:#eee;
          border:1px solid #000;
        }
        
    .custom-menu {
        z-index:1000;
        position: absolute;
        background-color:#C0C0C0;
        border: 1px solid black;
        padding: 2px;
    }
    .col-md-4{
      padding-left: 0px;
    }
    #div10 .col-md-4{
      padding-left: 25px;
    }
    #div2{
      text-align:center;
    }
    #div p{
      display: inline;
    }

    #footer{
      margin-bottom : 38%;
      
    }
    
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
      
    }
    
    .menu a:link { color: blue; text-decoration: none;}
    .menu a:visited { color: white; text-decoration: none;}
    .menu > a:hover{
      color: lime;
    }
    </style>
    
</head>
  
<body>
  
  @include('menu.topmenu')
  <div id="div1" class="row">
    
   <div id ="title"><!--매칭결과-->マッチング結果</div>
     <?php
     $instrumentsRandom_keys = array_rand($printInstruments, 3);
     $genresRandom_keys = array_rand($printGenres, 3);
     $instrumentGenresRandom_keys = array_rand($printInstrumentGenres, 3);
     $danceMidisRandom_keys = array_rand($danceMidis, 3);
     $rockMidisRandom_keys = array_rand($rockMidis, 3);
     $popMidisRandom_keys = array_rand($popMidis, 3);
     $classicMidisRandom_keys = array_rand($classicMidis, 3);
     
     ?>
     
    <div id="div5">
    <p id="texts"><?php echo $user_id; ?>あなたとの趣向に合う音源</p>
         <!--<select id="sel">-->
         <!--   <option id="sel1">pop</option>-->
         <!--   <option id="sel2">rock</option>-->
         <!--   <option id="sel3">classic</option>-->
         <!--   <option id="sel4">dance</option>-->
         <!--</select>-->
         
    <div id="sel" class="container">
        <select id="sel1" class="form-control"> 
        <!--<option id="sel11">pop</option> -->
        <!--<option id="sel2">rock</option> -->
        <!--<option id="sel3">classic</option>-->
        <!--<option id="sel4">dance</option>-->
        <option id="sel11"><!--rock-->ロック</option> 
        <option id="sel2"><!--pop-->ポップ</option> 
        <option id="sel3"><!--classic-->クラシック</option>
        <option id="sel4"><!--dance-->ダンス</option>
        </select> 
    </div>
    </div>
    <!--<div class="col-md-9"> -->
    <div id="div2" class='row well well-lg' style="border: 2px solid #CFCFCF">
      <div class="col-md-4">
      <a href = "/albumview/<?php echo $popMidis[$popMidisRandom_keys[0]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;"
           id="imgss" src="/midi/<?php echo $popMidis[$popMidisRandom_keys[0]]->path; ?>/<?php echo $popMidis[$popMidisRandom_keys[0]]->img; ?>" width="100" height="100"><br>
      <p><?php echo $popMidis[$popMidisRandom_keys[0]]->composer; ?><br> <?php echo $popMidis[$popMidisRandom_keys[0]]->music_name; ?></p>
      </div></a>
       
      <div class="col-md-4" >  
        <a href = "/albumview/<?php echo $popMidis[$popMidisRandom_keys[1]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;" 
           id="imgss" src="/midi/<?php echo $popMidis[$popMidisRandom_keys[1]]->path; ?>/<?php echo $popMidis[$popMidisRandom_keys[1]]->img; ?>" width="100" height="100"><br>
       <p><?php echo $popMidis[$popMidisRandom_keys[1]]->composer; ?><br> <?php echo $popMidis[$popMidisRandom_keys[1]]->music_name; ?></p>
       </div></a>
     
      <div class="col-md-4">
        <a href = "/albumview/<?php echo $popMidis[$popMidisRandom_keys[2]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;"
           id="imgss" src="/midi/<?php echo $popMidis[$popMidisRandom_keys[2]]->path; ?>/<?php echo $popMidis[$popMidisRandom_keys[2]]->img; ?>" width="100" height="100"><br>
      <p><?php echo $popMidis[$popMidisRandom_keys[2]]->composer; ?><br> <?php echo $popMidis[$popMidisRandom_keys[2]]->music_name; ?></p>
      </div></a>
    </div>
    
    
    
    <div id="div11" class='row well well-lg'>
      <div class="col-md-4">
      <a href = "/albumview/<?php echo $popMidis[$popMidisRandom_keys[0]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;"
           id="imgss" src="/midi/<?php echo $popMidis[$popMidisRandom_keys[0]]->path; ?>/<?php echo $popMidis[$popMidisRandom_keys[0]]->img; ?>" width="100" height="100"><br>
      <?php echo $popMidis[$popMidisRandom_keys[0]]->composer; ?><br> <?php echo $popMidis[$popMidisRandom_keys[0]]->music_name; ?></a>
      </div>  
      <div class="col-md-4">  
        <a href = "/albumview/<?php echo $popMidis[$popMidisRandom_keys[1]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;" 
           id="imgss" src="/midi/<?php echo $popMidis[$popMidisRandom_keys[1]]->path; ?>/<?php echo $popMidis[$popMidisRandom_keys[1]]->img; ?>" width="100" height="100"><br>
       <?php echo $popMidis[$popMidisRandom_keys[1]]->composer; ?><br> <?php echo $popMidis[$popMidisRandom_keys[1]]->music_name; ?></a>
      </div>  
      <div class="col-md-4">  
        <a href = "/albumview/<?php echo $popMidis[$popMidisRandom_keys[2]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;"
           id="imgss" src="/midi/<?php echo $popMidis[$popMidisRandom_keys[2]]->path; ?>/<?php echo $popMidis[$popMidisRandom_keys[2]]->img; ?>" width="100" height="100"><br>
       <?php echo $popMidis[$popMidisRandom_keys[2]]->composer; ?><br> <?php echo $popMidis[$popMidisRandom_keys[2]]->music_name; ?></a>
      </div>
    </div>
    
    
    
    <div id="div12" class='row well well-lg'>
      <div class="col-md-4">
      <a href = "/albumview/<?php echo $rockMidis[$rockMidisRandom_keys[0]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;"
           id="imgss" src="/midi/<?php echo $rockMidis[$rockMidisRandom_keys[0]]->path; ?>/<?php echo $rockMidis[$rockMidisRandom_keys[0]]->img; ?>" width="100" height="100"><br>
      <?php echo $rockMidis[$rockMidisRandom_keys[0]]->composer; ?><br> <?php echo $rockMidis[$rockMidisRandom_keys[0]]->music_name; ?></a>
      </div>  
      <div class="col-md-4">
        <a href = "/albumview/<?php echo $rockMidis[$rockMidisRandom_keys[1]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;" 
           id="imgss" src="/midi/<?php echo $rockMidis[$rockMidisRandom_keys[1]]->path; ?>/<?php echo $rockMidis[$rockMidisRandom_keys[1]]->img; ?>" width="100" height="100"><br>
      <?php echo $rockMidis[$rockMidisRandom_keys[1]]->composer; ?><br> <?php echo $rockMidis[$rockMidisRandom_keys[1]]->music_name; ?></a>
      </div>
      <div class="col-md-4">
        <a href = "/albumview/<?php echo $rockMidis[$rockMidisRandom_keys[2]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;"
           id="imgss" src="/midi/<?php echo $rockMidis[$rockMidisRandom_keys[2]]->path; ?>/<?php echo $rockMidis[$rockMidisRandom_keys[2]]->img; ?>" width="100" height="100"><br>
       <?php echo $rockMidis[$rockMidisRandom_keys[2]]->composer; ?><br> <?php echo $rockMidis[$rockMidisRandom_keys[2]]->music_name; ?></a>
      </div>
    </div>
    
    
    <div id="div13" class='row well well-lg'>
      <div class="col-md-4">
      <a href = "/albumview/<?php echo $classicMidis[$classicMidisRandom_keys[0]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;"
           id="imgss" src="/midi/<?php echo $classicMidis[$classicMidisRandom_keys[0]]->path; ?>/<?php echo $classicMidis[$classicMidisRandom_keys[0]]->img; ?>" width="100" height="100"><br>
      <?php echo $classicMidis[$classicMidisRandom_keys[0]]->composer; ?><br> <?php echo $classicMidis[$classicMidisRandom_keys[0]]->music_name; ?></a>
      </div>
      <div class="col-md-4">
        <a href = "/albumview/<?php echo $classicMidis[$classicMidisRandom_keys[1]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;" 
           id="imgss" src="/midi/<?php echo $classicMidis[$classicMidisRandom_keys[1]]->path; ?>/<?php echo $classicMidis[$classicMidisRandom_keys[1]]->img; ?>" width="100" height="100"><br>
       <?php echo $classicMidis[$classicMidisRandom_keys[1]]->composer; ?><br> <?php echo $classicMidis[$classicMidisRandom_keys[1]]->music_name; ?></a>
      </div>
      <div class="col-md-4">
        <a href = "/albumview/<?php echo $classicMidis[$classicMidisRandom_keys[2]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;"
           id="imgss" src="/midi/<?php echo $classicMidis[$classicMidisRandom_keys[2]]->path; ?>/<?php echo $classicMidis[$classicMidisRandom_keys[2]]->img; ?>" width="100" height="100"></img><br>
       <?php echo $classicMidis[$classicMidisRandom_keys[2]]->composer; ?><br> <?php echo $classicMidis[$classicMidisRandom_keys[2]]->music_name; ?></a>
      </div>
    </div>
    
    
    <div id="div14" class='row well well-lg'>
      <div class="col-md-4">
      <a href = "/albumview/<?php echo $danceMidis[$danceMidisRandom_keys[0]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;"
           id="imgss" src="/midi/<?php echo $danceMidis[$danceMidisRandom_keys[0]]->path; ?>/<?php echo $danceMidis[$danceMidisRandom_keys[0]]->img; ?>" width="100" height="100"></img><br>
      <?php echo $danceMidis[$danceMidisRandom_keys[0]]->composer; ?><br> <?php echo $danceMidis[$danceMidisRandom_keys[0]]->music_name; ?></a>
      </div>
      <div class="col-md-4">
        <a href = "/albumview/<?php echo $danceMidis[$danceMidisRandom_keys[1]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;" 
           id="imgss" src="/midi/<?php echo $danceMidis[$danceMidisRandom_keys[1]]->path; ?>/<?php echo $danceMidis[$danceMidisRandom_keys[1]]->img; ?>" width="100" height="100"></img><br>
       <?php echo $danceMidis[$danceMidisRandom_keys[1]]->composer; ?><br> <?php echo $danceMidis[$danceMidisRandom_keys[1]]->music_name; ?></a>
      </div>
      <div class="col-md-4">
        <a href = "/albumview/<?php echo $danceMidis[$danceMidisRandom_keys[2]]->id; ?>">
        <img style="box-shadow: 1px 1px 5px #000;"
           id="imgss" src="/midi/<?php echo $danceMidis[$danceMidisRandom_keys[2]]->path; ?>/<?php echo $danceMidis[$danceMidisRandom_keys[2]]->img; ?>" width="100" height="100"></img><br>
       <?php echo $danceMidis[$danceMidisRandom_keys[2]]->composer; ?><br> <?php echo $danceMidis[$danceMidisRandom_keys[2]]->music_name; ?></a>
      </div>
    </div>


    
    <p id="text"><?php echo $user_id; ?>あなたとの趣向に合うユーザ</p>
      <!--<select id="test">-->
      <!--    <option id="test1">악기별</option>-->
      <!--    <option id="test2">장르별</option>-->
      <!--    <option id="test3">악기 + 장르별</option>-->
      <!--</select>-->
    <div class="container">
    <select id="test" class="form-control"> 
    <option id="test1">楽器別</option> 
    <option id="test2">ジャンル別</option> 
    <option id="test3">楽器+ジャンル別</option> 
    </select> 
    </div>
      
      <!--악기별 -->
      <div id="div10" class='row well well-lg' style="border: 2px solid #CFCFCF">
       <div class="col-md-4">
       <a href="/matching/user/<?php echo $printInstruments[$instrumentsRandom_keys[0]]->user_id; ?>/1">
          <img id="imgs" src="/img/<?php echo $printInstruments[$instrumentsRandom_keys[0]]->userImage; ?>" width="80" height="80"><br>
          <?php echo $printInstruments[$instrumentsRandom_keys[0]]->user_id; ?><br>
          <img src="/matching/instrument/<?php echo $myInstruments[$instrumentsRandom_keys[0]][0]; ?>.png" width="40px"; height="40px";>
          <img src="/matching/genre/<?php echo $myGenres[$instrumentsRandom_keys[0]][0]; ?>.png" width = 40px; height = 40px;>
          <!--<div id="moreMenu10" class="moreMenu">연주곡 보기</div>-->
      </a>
      </div>
       <div class="col-md-4">
      <a href="/matching/user/<?php echo $printInstruments[$instrumentsRandom_keys[1]]->user_id; ?>/1">
          <img id="imgs" src="/img/<?php echo $printInstruments[$instrumentsRandom_keys[1]]->userImage; ?>" width="80" height="80"><br>                                                             
          <?php echo $printInstruments[$instrumentsRandom_keys[1]]->user_id; ?><br>
          <img src="/matching/instrument/<?php echo $myInstruments[$instrumentsRandom_keys[1]][0]; ?>.png" width=40px; height=40px;>
          <img src="/matching/genre/<?php echo $myGenres[$instrumentsRandom_keys[1]][0]; ?>.png" width = 40px; height = 40px;>
          <!--<div id="moreMenu9" class="moreMenu">연주곡 보기</div>-->
      </a>
      </div>
      <div class="col-md-4">
      <a href="/matching/user/<?php echo $printInstruments[$instrumentsRandom_keys[2]]->user_id; ?>/1">
      <img id="imgs" src="/img/<?php echo $printInstruments[$instrumentsRandom_keys[2]]->userImage; ?>" width="80" height="80"><br>
      <?php echo $printInstruments[$instrumentsRandom_keys[2]]->user_id; ?><br>
          <img src="/matching/instrument/<?php echo $myInstruments[$instrumentsRandom_keys[2]][0]; ?>.png" width = 40px; height = 40px;>
          <img src="/matching/genre/<?php echo $myGenres[$instrumentsRandom_keys[2]][0]; ?>.png" width = 40px; height = 40px;>
          <!--<div id="moreMenu8" class="moreMenu">연주곡 보기</div>-->
      </a>
     </div>
    </div>
    
    
    
    
    
    <!--악기별 -->
    <div id="div6" class='row well well-lg'>
      <div class="col-md-4">
      <a href="/matching/user/<?php echo $printInstruments[$instrumentsRandom_keys[0]]->user_id; ?>/1">
          <img id="imgs" src="/img/<?php echo $printInstruments[$instrumentsRandom_keys[0]]->userImage; ?>" width="80" height="80">
          <?php echo $printInstruments[$instrumentsRandom_keys[0]]->user_id; ?><br>
          <img src="/matching/instrument/<?php echo $myInstruments[$instrumentsRandom_keys[0]][0]; ?>.png" width = 40px; height = 40px;>
          <img src="/matching/genre/<?php echo $myGenres[$instrumentsRandom_keys[0]][0]; ?>.png" width = 40px; height = 40px;>
          </a>
      </div>
      <div class="col-md-4">
          <a href="/matching/user/<?php echo $printInstruments[$instrumentsRandom_keys[1]]->user_id; ?>/1">
          <img id="imgs" src="/img/<?php echo $printInstruments[$instrumentsRandom_keys[1]]->userImage; ?>" width="80" height="80">                                                            
          <?php echo $printInstruments[$instrumentsRandom_keys[1]]->user_id; ?><br>
          <img src="/matching/instrument/<?php echo $myInstruments[$instrumentsRandom_keys[1]][0]; ?>.png" width = 40px; height = 40px;>
          <img src="/matching/genre/<?php echo $myGenres[$instrumentsRandom_keys[1]][0]; ?>.png" width = 40px; height = 40px;>
          </a>
      </div>
      <div class="col-md-4">
      <a href="/matching/user/<?php echo $printInstruments[$instrumentsRandom_keys[2]]->user_id; ?>/1">
      <img id="imgs" src="/img/<?php echo $printInstruments[$instrumentsRandom_keys[2]]->userImage; ?>" width="80" height="80">
      <?php echo $printInstruments[$instrumentsRandom_keys[2]]->user_id; ?><br>
          <img src="/matching/instrument/<?php echo $myInstruments[$instrumentsRandom_keys[2]][0]; ?>.png" width = 40px; height = 40px;>
          <img src="/matching/genre/<?php echo $myGenres[$instrumentsRandom_keys[2]][0]; ?>.png" width = 40px; height = 40px;>
      </a>
      </div>
    </div>
    
    
    <!--장르별 -->
    <div id="div7" class='row well well-lg'>
    <div class="col-md-4">
    <a href="/matching/user/<?php echo $printGenres[$genresRandom_keys[0]]->user_id; ?>/1">
      <img id="imgs" src="/img/<?php echo $printGenres[$genresRandom_keys[0]]->userImage; ?>" width="80" height="80"><br>
      <?php echo $printGenres[$genresRandom_keys[0]]->user_id; ?><br>
        <img src="/matching/instrument/<?php echo $myInstruments[$genresRandom_keys[0]][0]; ?>.png" width = 40px; height = 40px;>
        <img src="/matching/genre/<?php echo $myGenres[$genresRandom_keys[0]][0]; ?>.png" width = 40px; height = 40px;>
      </a>
    </div>
    <div class="col-md-4">
       <a href="/matching/user/<?php echo $printGenres[$genresRandom_keys[1]]->user_id; ?>/1">
      <img id="imgs" src="/img/<?php echo $printGenres[$genresRandom_keys[1]]->userImage; ?>" width="80" height="80"><br>
      <?php echo $printGenres[$genresRandom_keys[1]]->user_id; ?><br>
        <img src="/matching/instrument/<?php echo $myInstruments[$genresRandom_keys[1]][0]; ?>.png" width = 40px; height = 40px;>
        <img src="/matching/genre/<?php echo $myGenres[$genresRandom_keys[1]][0]; ?>.png" width = 40px; height = 40px;>
      </a>
    </div>
    <div class="col-md-4">
       <a href="/matching/user/<?php echo $printGenres[$genresRandom_keys[2]]->user_id; ?>/1">
      <img id="imgs" src="/img/<?php echo $printGenres[$genresRandom_keys[2]]->userImage; ?>" width="80" height="80"><br>
      <?php echo $printGenres[$genresRandom_keys[2]]->user_id; ?><br>
        <img src="/matching/instrument/<?php echo $myInstruments[$genresRandom_keys[2]][0]; ?>.png" width = 50px; height = 50px;>
        <img src="/matching/genre/<?php echo $myGenres[$genresRandom_keys[2]][0]; ?>.png" width = 40px; height = 40px;>
      </a>
    </div>
    </div>
    
    
    <!--악기 + 장르별 -->
    
    <div id="div8" class='row well well-lg'>
    <div class="col-md-4">
      <a href="/matching/user/<?php echo $printInstrumentGenres[$instrumentGenresRandom_keys[0]]->user_id; ?>/1">
      <img id="imgs" src="/img/<?php echo $printInstrumentGenres[$instrumentGenresRandom_keys[0]]->userImage; ?>" width="80" height="80"><br>
      <?php echo $printInstrumentGenres[$instrumentGenresRandom_keys[0]]->user_id; ?><br>
      <img src="/matching/instrument/<?php echo $myInstruments[$instrumentGenresRandom_keys[0]][0]; ?>.png" width = 40px; height = 40px;>
      <img src="/matching/genre/<?php echo $myGenres[$instrumentGenresRandom_keys[0]][0]; ?>.png" width = 40px; height = 40px;>
      </a>
    </div>
    <div class="col-md-4">
      <a href="/matching/user/<?php echo $printInstrumentGenres[$instrumentGenresRandom_keys[1]]->user_id; ?>/1">
      <img id="imgs" src="/img/<?php echo $printInstrumentGenres[$instrumentGenresRandom_keys[1]]->userImage; ?>" width="80" height="80"><br>
      <?php echo $printInstrumentGenres[$instrumentGenresRandom_keys[1]]->user_id; ?><br>
      <img src="/matching/instrument/<?php echo $myInstruments[$instrumentGenresRandom_keys[1]][0]; ?>.png" width = 40px; height = 40px;>
      <img src="/matching/genre/<?php echo $myGenres[$instrumentGenresRandom_keys[1]][0]; ?>.png" width = 40px; height = 40px;>
      </a>
    </div>
    <div class="col-md-4">
      <a href="/matching/user/<?php echo $printInstrumentGenres[$instrumentGenresRandom_keys[2]]->user_id; ?>/1">
      <img id="imgs" src="/img/<?php echo $printInstrumentGenres[$instrumentGenresRandom_keys[2]]->userImage; ?>" width="80" height="80"><br>
      <?php echo $printInstrumentGenres[$instrumentGenresRandom_keys[2]]->user_id; ?><br>
      <img src="/matching/instrument/<?php echo $myInstruments[$instrumentGenresRandom_keys[2]][0]; ?>.png" width = 40px; height = 40px;>
      <img src="/matching/genre/<?php echo $myGenres[$instrumentGenresRandom_keys[2]][0]; ?>.png" width = 40px; height = 40px;>
      </a>
    </div>  
    </div>
    <div class="col-md-12">
      <p id="maintext"><?php
      echo "{$user_id} さんがよく演奏する音楽のジャンルは 「{$textGenres}」 であり、よく演奏する楽器は 「{$textInstruments}」です.";
     ?></p>
    </div>
  </div>
  <p id = 'footer'>
  <pre id = 'footer_text'>
      <img src = "/img/logo2.png" width="60" height="30" align="left">                                                                                                                                                                                                                                               김대호 교수님(PM), 조나훔(조장), 박현경, 장민호, 김진영, 김혜진, 주성민
                                                                                                                                                                                                                                                     Copyright&copy; 2017 YoungjinCollege Harmony Team All rights reserved</pre>
                                                                                  
</p>
</body>
</html>