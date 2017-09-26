

<link rel="stylesheet" href="/css/template.css?var=<?=filemtime('./css/template.css');?>">
<script src="/js/template.js?var=<?=filemtime('./js/template.js');?>"></script>
<link rel="stylesheet" href="/css/menu.css?var=<?=filemtime('./css/menu.css');?>">
<link rel="stylesheet" href="/css/login.css?var=<?=filemtime('./css/login.css');?>">

<!--<script src="/js/jquery-3.2.1.min.js"></script>-->

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <style>
    .menu{
      height:42px;
    }
    #logo{
      width:170px;
      height:70px;
      margin:20px 60%;
      margin-bottom:10px;
    }
  </style>
  
  <div class="menu">
  <!--
  |**************************************************************************
  | Top menu bar -BandChallenge
  |**************************************************************************
   -->
    <div class="dropdown">
      <!--<a class="dropbtn" href="{{ url('/band_main')}}"><strong>BandChallenge</strong></a>-->
      <a class="dropbtn" href="{{ url('/band_main')}}"><strong>バンドチャレンジ</strong></a>
      <div class="dropdown-content">
        <!--<a href="{{ url('/list') }}">오디오합주</a>-->
        <!--<a href="{{ url('/videoList') }}">동영상합주</a>-->
      </div>
    </div>


  <!--
  |**************************************************************************
  | Top menu bar -音Ven
  |**************************************************************************
   -->
    <div class="dropdown">
      <a class="dropbtn" href="{{ url('/otoven/otoven_main') }}"><strong>音ベン</strong></a>
      <!--<a class="dropbtn" href="{{ url('/otoven/otoven_main') }}"><strong>音Ven</strong></a>-->
      <div class="dropdown-content">
        <!--<a href="{{ url('/list') }}">오디오 작곡합주</a>-->
        <!--<a href="{{ url('/video') }}">동영상 작곡합주</a>-->
      </div>
    </div>


  <!--
  |**************************************************************************
  | Top menu bar -Guild Community
  |**************************************************************************
  -->
    <div class="dropdown">
      <a class="dropbtn" href="{{ url('/guildmain') }}"><strong>ギルド</strong></a>
      <!--<a class="dropbtn" href="{{ url('/guildmain') }}"><strong>Guild</strong></a>-->
      <div class="dropdown-content">
        <!--<a href="{{ url('/') }}">길드게시판</a>-->
        <!--<a href="{{ url('/') }}">길드채팅</a>-->
      </div>
    </div>


  <!--
  |**************************************************************************
  | Top menu bar -お好み樂器
  |**************************************************************************
  -->
    <div class="dropdown">
      <a class="dropbtn" href="{{ url('/matching/main')}}"><strong>お好み樂器</strong></a>
      <div class="dropdown-content">
        <!--<a href="{{ url('/matching/main') }}">매칭서비스</a>-->
        <!--<a href="{{ url('/myPage/album') }}">마이리시트</a>-->
        <!--<a href="{{ url('/') }}">정보수정</a>-->
      </div>
    </div>


  <!--
  |**************************************************************************
  | Top menu bar -Community
  |**************************************************************************
  -->
    <div class="dropdown">
      <a class="dropbtn" href="{{ url('/myPage/album')}}"><strong>マイアルバム</strong></a>
      <!--<a class="dropbtn" href="{{ url('/myPage/album')}}"><strong>MyAlbum</strong></a>-->
      <div class="dropdown-content">
        <!--<a href="{{ url('/') }}">회원 커뮤니티</a>-->
        <!--<a href="{{ url('/') }}">자유게시판</a>-->
        <!--<a href="{{ url('/') }}">자유채팅창</a>-->
      </div>
    </div>
  </div>
  <input type="hidden" name="session_user" value="{{Session::get('user_id')}}"/>
  <div name="notice" style="display:none; position:fixed; bottom:0; right:0; height: 80px; width: 300px; border:5px solid black; z-index:1; overflow-x:hidden;">
    
  </div>
      <audio name='my_news' style='display:none;' src='https://harmony-project-chonahoom.c9users.io/news.mp3' controls>
      </audio>
  <script>
    var my_news = document.getElementsByName("my_news");
    var tnum =[];
    var notice = document.getElementsByName('notice');
    var session_user = document.getElementsByName('session_user');
    notice[0].style.display = 'none';
   
    if(session_user[0].value){
      notice_update();
    }
     
    function notice_update(){
      var user_name = session_user[0].value;
      var notice_table = document.createElement('table');
      notice_table.setAttribute('style','border:1px solid black;');
      var notice_tr = document.createElement('tr');
      var notice_td = document.createElement('td');
    
      notice_td.setAttribute('style','height:80px;width:300px;');
      
     
      $.ajax({
        url: "/noticeTest/"+user_name,
        type: "get",
        processData: false,
        contentType: false,
        data: '',
        
        success:function(data){
           var ss = '';
          if(data == 4){
            return ;
          }
          
          tnum = data.split(',');
          var tn = ''+tnum[0];
          var tp = ''+tnum[1];
          ss = tp.replace('/','');
          var name = tn.substring(2, (tn.length-1));
          var path = ss.substring(1, (ss.length-2));
         my_news[0].play();
          notice_td.innerHTML = "<a href='https://harmony-project-chonahoom.c9users.io/"+path+"'>"+name+" 様があなたの作品と合奏しました。</a>";
          notice_td.style.background ="white";
          notice_tr.appendChild(notice_td);
          notice_table.appendChild(notice_tr);
          notice[0].removeChild(notice[0].firstChild);
          notice[0].appendChild(notice_table);
         
            notice[0].style.display = 'block';
            
            setTimeout(function (){
              notice[0].style.display = 'none';
            }, 100000);

        },
        error: function (){
          
        }
    });
      
      
      setTimeout("notice_update();", 1000);
    }
    
  </script>