
<head>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

    /*----------------------------------------------------------------*/
    body{
        background-image:url("/img/guildmain.jpg"),url("/img/piano.png");
        background-size:100% 85%,50% 300px;
        background-repeat:no-repeat,repeat;
         background-position:0px 0px ,0px 800px; 
    }
    .background_color{
        background-color:rgba(0,0,0,.7);
    }
    .topimg{
        width:100%;
        margin:0 auto;
    }
    .topimg img{
        display:block;
        width:20%;
        margin:40px auto;
    }
    .guildbox a:hover{
        text-decoration:none;
        color:black;
    }
    .guildimg img{
        width:100%;
        height:150px;
    }
    .guildbox{
        width:90%;
        margin:0 auto;
    }
    .guild_content{
        padding-bottom:10px;
        color:darkgreen;
    }
    p[title="guildname"]{
        font-size:18px;
    }
    p[title="guildmaster"]{
        font-size:15px;
    }
    .guildcard{
        box-shadow: 0 1px 3px 0 rgba(0,0,0,.1);
        background-color:white;
        margin-bottom:40px;
    }
    .guildcard:hover{
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
      -webkit-transition-duration: .5s;
      color:black;
    }
    .createguild{
        border:none;
        width:100%;
        color:black;
        background-color:white;
        border-radius:30px;
        padding: 10px 0px;
    }
    .createguild:hover{
        color:white;
    }
    .searchgroup{
        margin-top:-10px;
    }
    /*
    .titlestyle p{
        font-size:70px;
        position:relative;
        top:100px;
    }
    .menualign{
        width:70%;
        margin:0px auto;
    }
    .menualign a{
        width:250px;
        font-size:20px;
        text-align:center;
    }
    
    
    .uguilds{
        width:300px;
        height:250px;
        margin:50px auto;
        margin-left:50px;
    }
    
    */
    .test{
        border:1px solid black;
    }
    .container-fluid a{
        text-decoration: none;
    }
    .guild_menu li{
        padding:20px;
        width:200px;
        background-color:rgba(255,255,255,.5);
        margin:60px;
    }
    .guild_menu strong{
        font-size:20px;
        width:200px;
        height:60px;
        text-align:center;
        font-weight: bold;
        color:black;
        padding-left:20px;
        
    }
    .guild_menu strong:hover{
        color:gray;
    }
    .guild_menu img{
        width:20px;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script language=javascript>
   $(document).ready(function(){
       $("#div1").load("test.html");
   });
       function GuildCheck(){
         window.open('guild/create','Guildck','width=1000,height=700');
       }
</script>
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
<div class="container-fluid background_color">
    <div class="row ">
        <div class="col-md-3 pull-right guild_menu">
            <ul class="list-unstyled">
              <?php 
              if(!empty($myguild[0])){
              echo"
              <li>
              <a href='guild/myguild/{$myguild[0]['guild_name']}'>
              <img src='/img/home.png'><strong>マイアルバム</strong>
              </a>
              </li>
            </ul>
            ";
              }
              else{
              echo"
              <li><button onclick='GuildCheck();' class='createguild'>ギルド作る</button></li>
              </ul>
              ";
              }
            ?>
        </div>
    </div>
    <div class="row text-center guildbox">
        <div class="col-md-12">
            
        <?php
              foreach ($guilds as $guild) {
                echo "
                <div class='col-md-3 cardwidth'>
                    <div class='guildcard'>
                        <a href='/guild/guild_view/{$guild->id}'>
                            <div class='guildimg'>
                                <img src='/img/guildmark/{$guild->guild_mark}'>
                            </div>
                            <div class='guild_content'>
                                <p title='guildname'>{$guild->guild_name}</p>
                                <p title='guildmaster'>MASTER : {$guild->guild_master}</p>
                            </div>
                        </a>
                        
                    </div>
                </div>
                ";
              }
            ?>
            </div>
    </div>
</div>
    <div class="footer row">
        @include('menu.footer')
    </div>
</body>

