
<meta name="csrf_token" content="{{ csrf_token() }}"/>
<head>
   <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Ravi+Prakash" rel="stylesheet">
  <style type="text/css">
  @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    /*로고 및 길드명 부분*/
    body{
        background-color:#eef0f3 ;
    }
    .guildicon p{
      background-color:white;
      padding:10 0px;
    }
    .guildicon ul{
      border-bottom:1px solid rgba(0,0,0,.2);
    }
    .guildicon img{
      width:100%; 
      height:200px;
      display:inline-block;
    }
   
    /*제일 상위 align*/

    .toptitle{
      width:600px;
      padding-bottom:5px;
      border-bottom:1px solid rgba(0,0,0,.2);
    }
    .rank_title{
      background-color:white;
      margin-left:40px;
      width:640px;
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.5);
      margin-bottom:30px;
    }
    .rank_title li{
       display:inline-block;
    }
    .rank_title a{
      text-decoration:none;
    }
    .rank_title a:hover{
      background-color:#999;
    }
   .infotable{
     float:right;
     width:100%;
   }

   #test{
     position: absolute;
     top: 300px; left: 300px;
     border: 1px solid red;
     width: 200px; height: 200px;
   }
   #nnno{
     position: absolute;
     top: 500px; left: 1000px;
     border: 1px solid;
     width: 200px; height: 200px;
   }
    #footer{
      margin-bottom : 25%;
    }
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
      
    }
    .test{
      border:1px solid black;
    }
    
    .menu a:link { color: blue; text-decoration: none;}
    .menu a:visited { color: white; text-decoration: none;}
    .menu > a:hover{
      color: lime;
    }
    .align{
      margin-top:40px;
    }
    .meminfo{
      border-radius:10px;
      border:1px solid #999;
    }
    .meminfo p{
      border:2px solid black;
      border-radius:30px;
      margin:20px auto;
      width:100px;
      height:30px;
    }
    .chatroom{
      background-color:black;
      border-radius:20px;
      height:80%;
      width:100%;
      margin-top:100px;
    }
    .chatroom iframe{
      margin:40px auto;
      width:100%;
      height:75%;
      background-color:white;
      border-radius:15px;
    }
    .iponeone{
      width:50px;
      height:50px;
      background-color:black;
      position:absolute;
      top:450px;
      left:50%;
      border-radius:50px;
      border:3px solid silver;
    }
    .board{
      height:400px;
    }
    .mem_list{
      margin-top:100px;
      width:800px;
    }
    p[name="tabletitle"]{
      font-size:30px;
      text-align:center;
    }
    li[name="name"],li[name="position"]{
      width:30%;
      text-align:center;
    }
    li[name="title"]{
      width:35%;
      text-align:center;
    }
    li[name="online"],li[name="user_id"],li[name="day"]{
      width:20%;
      text-align:center;
    }
    li[name="number"],li[name="kaisu"]{
      width:10%;
      text-align:center;
    }
    li[name="point"]{
      width:15%;
      text-align:right;
    }
    p[name="guildname"]{
      font-size:30px;
      font-weight:bold;
    }
    .guildinfo{
      width:200;
    }
    .topalign{
      margin-top:60px;
    }
    
    /**************************************************************************
    | 모달 팝업 관련 css
    |**************************************************************************/

  	.another_play {
      position: fixed;
      top: 20%;
      right: 0;
      bottom: 0;
      left: 20%;
      background: rgba(0, 0, 0, 0.8);
      opacity:0;
      -webkit-transition: opacity 400ms ease-in;
      -moz-transition: opacity 400ms ease-in;
      transition: opacity 400ms ease-in;
      pointer-events: none;
      height:300px;
    }
    
    .another_play:target {
        opacity:1;
        pointer-events: auto;
    }
    .another_play tr{
    	width: 100%;
    	height: 80%;
    	padding: 16px;
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
      border-radius:10px;
      background-color:  #FF5050;
      color:white;
      width:50px;
      height:50px;
      font-family: 'Passion One', cursive;
    }
    
    
    .guild_content li:last-child{
      padding-left:50px;
      font-size:18px;
    }
    .myinfo img{
      width:100%;
      height:200px;
    }
    p[name="user_id"]{
      background-color:white;
      padding:10px 0px;
      font-size:30px;
      font-weight:bold;
      text-align:center;
    }
  </style>
  </head>
  <body>
  <!--
  |**************************************************************************
  | bandChallenge- Record합주_상단 메뉴부분
  |*********************************************ㄹ*****************************
  -->
  <div class="top">
    @include('menu.topmenu')
  </div>
  <div class="container-fluid align">
    <div class="col-md-12">
      <div class="col-md-3 guildicon text-left ">
        <img src="/img/guildmark/<?php echo "{$myguild[0]['guild_mark']}" ?>"></img>
        <p name="guildname"><?php echo "{$myguild[0]['guild_name']}" ?></p>
        <ul class="list-inline guild_content">
          <li><!--마스터-->マスター</li>
          <li><?php echo "{$myguild[0]['guild_master']}" ?></li>
        </ul>
        <ul class="list-inline guild_content">
          <li><!--멤버수-->メンバー数</li>
          <li><?php echo "{$myguild[0]['guild_user']}" ?>人</li>
        </ul>
      </div>
      <div class="col-md-7" >
        <div class="row">
          <div class="col-md-7 rank_title" >
          <ul class="toptitle list-unstyled">
            <li name="name"><!--길드원-->ギルドメンバー</li>
            <li name="position"><!--순위-->職位</li>
            <li name="online"><!--접속상태-->接続状態</li>
            <li name="point"><!--포인트-->ポイント</li>
          </ul>
          <?php
          $k = 0;
          echo "<ul class='list-unstyled'>
          <form id='member' action='/' method='post' name='member'>";
            foreach ($guildmembers as $guildmember) {
              echo "
              <input type='hidden' name='guildmember[]' value='{$guildmember['guild_user']}'>
              
              <a href='#open' onclick='memlist($k)' id='infoview'>
                <li name='name'>{$guildmember['guild_user']}</li>
                <li name='position'>{$guildmember['guild_position']}</li>";
                  if(!empty($connections[$k])){
                    echo "
                    <li name='online'>オンライン</li>";
                  }
                  if(empty($connections[$k])){
                    echo "
                    <li name='online'>オプライン</li>";
                  }
                  echo "
                <li name='point'>0</li>
                <br/>
                </a>
                <input type='hidden' name='_token' value='{{ csrf_token() }}'>
               ";
              $k++;
            }
            echo "</form>
                </ul>";
            ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 rank_title">
            <p name="tabletitle"><!--공지사항-->公知事項</p>
            <ul class="toptitle list-unstyled">
              <li name="number"><!--번호-->ナンバー</li>
              <li name="title"><!--제목-->タイトル</li>
              <li name="user_id"><!--작성자-->作成者</li>
              <li name="day"><!--작성일-->作成日</li>
              <li name="kaisu"><!--조회-->照会</li>
            </ul>
            <ul class='list-unstyled'>
              <li name="number">1</li>
              <li name="title"><!--길드에 오신것을 환영합니다-->ギルドにいらっしゃったことを歓迎します</li>
              <li name="user_id">user</li>
              <li name="day">2017-08-25</li>
              <li name="kaisu">5</li>
            </ul>
            <ul class="text-right">
              <button class="btn btn-primary"><!--글쓰기-->作文</button>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="col-md-2 myinfo">
        <?php echo"<img src='/img/{$user_id[0]['userImage']}'>"?>
        <p name='user_id'><?php echo"{$user_id[0]['user_id']}"?></p>
      </div>
        
        
    </div>
    
    <div id="Chat" class=" col-md-4 text-center chatroom">
      <iframe id="chatboxs" src="/chat" frameborder="0"></iframe>
      <div class="iponeone"></div>
    </div>
    
    <div class="row">
      <div class="col-md-7 ">
        <div class="mem_list another_play" id="open">
          <table class="infotable table text-center" >
              <tr>
                <th class="text-center test">제목</th>
                <th class="text-center test">연주곡 명</th>
                <th class="text-center test">연주한 악기</th>
                <th class="text-center test">참여한 사람</th>
              </tr>
            <tr>
              <td id="subject"></td>
              <td id="midi_name"></td>
              <td id="instrument"></td>
              <td id="partici_name"></td>
            </tr>
            <tr>
              <div id="icon">
                <a href="#close" title="modal_close">×</a>
              </div>
            </tr>
            </a>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="footer row">
        @include('menu.footer')
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">


var guildmemberinfo = document.getElementsByName("guildmember[]");

  function memlist(guild_user) {
    $('#subject').empty();
    $('#midi_name').empty();
    $('#instrument').empty();
    $('#partici_name').empty();
    $('#create_at').empty();
      $.ajax({
        type : 'post',
        url:'json/guildmember_infolist',
        dataType:'json',
        data:{
            '_token' : "{{csrf_token()}}",
    				meminfo : guildmemberinfo[guild_user]['value'],
          },
        success: function(data) {
          
          var boards_object = [];
              boards_object = data;
          $(boards_object).each(function(i){
            
            for(var d=0; d<boards_object[i].length; d++){
             
              var borads_list = boards_object[i];
              
              if(i==1){
                 //console.log(borads_list[d].subject);
                var boards_id  = borads_list[d]['id'];
                var boards_subejct  = borads_list[d]['subject'];
                var boards_instrument  = borads_list[d]['instrument'];
                var boards_created_at  = borads_list[d]['created_at'];
                var boards_writer_id  = borads_list[d]['writer_id']; 
                
                $('#subject').append(
                  "<a href='https://harmony-project-chonahoom.c9users.io/recordbefore/"+boards_id+"'><div>"+
                  boards_subejct+
                  "</div></a>"
                  );
                
                $('#instrument').append(
                  "<div>"+
                  boards_instrument+
                  "</div>"
                  );
                
                $('#partici_name').append(
                  "<div>"+
                  boards_writer_id+
                  "</div>"
                  );
                
                $('#create_at').append(
                  "<div>"+
                  boards_created_at+
                  "</div>"
                  );
                  
              }//if end
              else{
                var boards_midi_id  = boards_object[0][d];
                
                $('#midi_name').append(
                  "<div>"+
                  boards_midi_id+
                  "</div>"
                  );
              }//else end
            }//for end
           });//each end
           if(data==null){
             $('#subject').append(
              "<div>"+
              "현재 사용자는 연주한 곡이 없습니다."+
              "</div>"
              );
           }
          }//success
      });//ajax end
  }
</script>
