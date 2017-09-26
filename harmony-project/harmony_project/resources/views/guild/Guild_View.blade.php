<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf_token" content="{{ csrf_token() }}"/>
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <style type="text/css">
  .align{
    width:800px;
    border:1px solid black;
    margin:0px auto;
    margin-top:100px;
  }
  #imgbox{
    width:40%;
    margin:0px auto;
  }
  #img1{
    width:300px;
  }
  .font{
    margin-left:50px;
    font-size:20px;
  }
  #guild_intro{
    font-size:30px;
    color:#006666;
  }
  #intro_content{
    border:1px solid #006666;
    border-radius:15px;
    width:80%;
    height:100px;
    padding:30px;
  }
  #join, #main, #message{
    border:none;
    width:200px;
    height:50px;
    background-color:#777;
    margin:20px;
  }
  body{
    background-color:#B8D3F2;
  }
  </style>
  <body>
  <!--
  |**************************************************************************
  | bandChallenge- Record합주_상단 메뉴부분
  |**************************************************************************
  -->
  <nav class="navbar menu_background">
    @include('menu.invisiblemenu')
  </nav>
  <div class="align">
    <div id="imgbox">
      <img id="img1" src="/img/guildmark/<?php echo $guild[0]->guild_mark ?>">
    </div>
    <div class="font">
      <p>길드명 : <?php echo $guild[0]->guild_name; ?></p>
      <p>마스터 : <?php echo $guild[0]->guild_master; ?></p>
      <p id="guild_intro">길드 소개글</p>
      <p id="intro_content">댓글기능응용해서 소개글 작성 예정</p>
    </div>
    <div id="buttonBox">
      <form>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input type="hidden" name="guild_id" value="<?php echo $guild[0]->id; ?>"/>
        <input type="button" name="join" id="join" value="길드 가입 신청"/>
        <input type="button" name="main" id="main" value="이전"/>
        <input type="button" name="message" id="message" value="쪽지 보내기"/>
      </form>
    </div>
  </div>
</body>
<script type="text/javascript">
  $(function(){
    
    $("#join").click(function(){
      var id = $('input[name=guild_id]').val();
      window.open('join/'+id,'길드 가입 신청"','width=1000,height=700');
    });
    
    $("#main").click(function(){
      location.href='/guildmain';
    });

  
});
</script>