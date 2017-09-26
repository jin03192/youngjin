
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
<link rel="stylesheet" href="/css/login.css?var=<?=filemtime('./css/login.css');?>">

<style type="text/css">
    
    #logo{
        background-color: none;
        width:200px;
      }
      .menufont{
        background-color:rgba(255,255,255,.4);
        padding-bottom:30px;
        width:78%;
        float:right;
      }
      .menuimg{
        background: rgba(255, 255, 255,0);
        width:22%;
        text-align:center;
        padding-bottom:5px;
      }
      .dropbtn {
          /*처음 보여지는 btn 배경 부분*/
          color: white;
          font-size: 20px;
          border: none;
          cursor: pointer;
          display: inline-block;
          text-decoration: none;
          padding-left:20px;
          font-family: "Noto Sans Japanese";
          margin-top:15%;
      }
      .dropdown {
          display: inline-block;
          text-align:right;
          margin-right:50px;
      }
      .dropbtn:hover{
          text-decoration: none;
          color:#006400;
      }
      .test{
        border:1px solid white;
      }
      .menu{
        text-align:right;
      }
        
      a[name="bandchallenge"]{
        /*color:#20A6B9;*/
        color:black;
      }
      a[name="otoven"]{
        /*color:#2F7CC3;*/
        color:black;
      }
      a[name="guild"]{
        /*color:#2B40AC;*/
        color:black;
      }
      a[name="matching"]{
        /*color:#4F32C3;*/
        color:black;
      }
      a[name="album"]{
        /*color:#7E30B9;*/
        color:black;
      }
</style>
<div class="container-fluid ">
      <div class="row">
        <div class="col-md-2 menuimg">
          <a href="{{ url('/') }}">
            <img id="logo" src="/img/logo3.png" alt="">
          </a>
        </div>
        <div class="col-md-10 menufont">
          <div class="menu">
          <!--
          |**************************************************************************
          | Top menu bar -BandChallenge
          |**************************************************************************
           -->
            <div class="dropdown">
              <a class="dropbtn" href="{{ url('/band_main')}}" name="bandchallenge"><strong>バンドチャレンジ</strong></a>
            </div>
        
        
          <!--
          |**************************************************************************
          | Top menu bar -音Ven
          |**************************************************************************
           -->
            <div class="dropdown">
              <a class="dropbtn" href="{{ url('/otoven/otoven_main') }}" name="otoven"><strong>音ベン</strong></a>
            </div>
        
        
          <!--
          |**************************************************************************
          | Top menu bar -Guild Community
          |**************************************************************************
          -->
            <div class="dropdown">
              <a class="dropbtn" href="{{ url('/guildmain') }}" name="guild"><strong>ギルド</strong></a>
            </div>
        
        
          <!--
          |**************************************************************************
          | Top menu bar -お好み樂器
          |**************************************************************************
          -->
            <div class="dropdown">
              <a class="dropbtn" href="{{ url('/matching/main')}}" name="matching"><strong>お好み樂器</strong></a>
            </div>
        
        
          <!--
          |**************************************************************************
          | Top menu bar -Community
          |**************************************************************************
          -->
            <div class="dropdown">
              <a class="dropbtn" href="{{ url('/myPage/album')}}" name="album"><strong>マイアルバム</strong></a>
            </div>
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
      @include("menu.toplogin")
      