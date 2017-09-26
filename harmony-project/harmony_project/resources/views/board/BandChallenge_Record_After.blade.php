
  <title>BandChallenge レコード コラボ</title>
  <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <!--<link rel="stylesheet" href="/css/bandview.css?var=">-->
    <link rel="stylesheet" href="/css/Before_View.css?var=<?=filemtime('./css/Before_View.css');?>">
    <link rel='stylesheet' href='/css/checkbox.css?var=<?=filemtime('./css/checkbox.css');?>'>
    <link rel="stylesheet" href="/css/bandchallenge/progress.css">
  <style type="text/css">
  /***************************************************************************
  | 각 태그별 가장 큰범위 속성
  |**************************************************************************
  */
  body{
    background-color:rgba(1,148,168,.4);
  }
    .beforesection {
      position: absolute;
      top: 400px;
      left: 340px;
      display: inline-block;
      width: 1400px;
  
      border: 8px solid #f0f0f5;
    }
    header>.btn{
      position: relative;
      font-size: 15px;
      padding: 10 20px;
      margin-top: 20px;
      margin-left: 20px;
      float: right;
      -webkit-transition-duration: 0.7s; /* Safari */
      transition-duration: 0.7s;
    }
    header>.btn:hover{
      background-color: white;
      color: black;
    }

    .column {
      border: 0px solid #cacaca;
      margin-top:40px;
      margin-left: 100px;
      list-style-type: none;
      background-color:white;
      width: 1150px;
      position:relative;
    }
    .column:hover{
      list-style-type: none;
      box-shadow: 2px 2px 20px darkgray;
    }
    .list{
      padding-top: 80px;
    }
    .cover{
      position:relative;
      display:inline-block;
      padding-top:15px;
      padding-left:15px;
      padding-bottom:10px;
      padding-right:15px;
      background-color: #6d928c;
      left:0;
    }
    .cover img {
      width:200px;
      height:200px;
      border:0px solid black;
    }
    
    .info{
      position:absolute;
      width:230px;
      top:30px;
      left:350px;
    }
    .toptitle{
      position:relative;
      font-size:20px;
      border-bottom:0px solid black;
      margin-top:10px;
      left:-30px;
      width:400px;
      display:block;
    }
    .albumtitle{
      position:relative;
      font-size:40px;
      left:-50px;
      width:400px;
    }
    .artist{
      position:relative;
      text-align:right;
      margin-top:10px;
    }
    .foot{
      text-align:right;
      width:575px;
      height:40px;
      border-top:0px solid black;
      position:relative;
      left:-120px;
      top:45px;
      text-align:left;
      
    }
    .foot>ul li{
      position:relative;
      display:inline-block;
      margin-top:10px;
      margin-left:100px;
    }
    .toptable{
      position:absolute;
      border-left:0px solid black;
      width:30%;
      top:0;
      left:70%;
      height:100%;
    }
    .publisher{
      position:relative;
      top:10%;
      display:block;
    }
    .publisher p{
      position:relative;
      text-align:center;
    }
    .publisher p[name="boardtitle"]{
      display:inline-block;
      background-color:#AFEEEE	;
      border-radius:15px;
      left:38%;
      padding:10px;
    }
    p[name="publishername"]{
      top:20%;
      left:20px;
      text-align:left;
    }
    /*
    |**************************************************************************
    | 음원에 대한 정보들의 위치를 지정해주고 경계선을 그어준다.
    |**************************************************************************
    */
    #imgbox{
        width:850px;
        height:190px;
        font-family: Mouse Memoirs, Hanna, gulim;
        position: absolute;
        top: 180px; 
        left: 300px;
        border: 0px solid black;
        border-bottom: none;
        border-radius: 10px;
        background-color: white;
      }
    #imgbox>img{
      float:left;
      margin:20px 20px 20px 22px;
      width:130px;
      height:130px;
    }
    /*
    |**************************************************************************
    | p태그의 padding 및 글자크기 지정
    |**************************************************************************
    */
    .font{
      position:relative;
      /*display: inline;*/
      padding-top:2%;
      padding-bottom:10px;
      padding-left: 30px;
      font-size: 22px;
     }
     .font p{
       margin-bottom: 0px;
     }
     /*
      |**************************************************************************
      | 버튼의 이미지와 이벤트 및 글자크기를 지정해준다
      |**************************************************************************
      */
      input[type="button"]{
          margin-left: 10px;
          background:#1AAB8A;
          color:#fff;
          border:none;
          position:relative;
          left:463px;
          top:200px;
          width:120px;
          height:31px;
          font-size:12px;
          padding:0 0.8em;
          cursor:pointer;
      }
      
      /*
      |**************************************************************************
      | 마우스가 올려 졌을 때의 색상을 지정
      |**************************************************************************
      */
      input[type="button"]:hover{
          background:#fff;
          color:#1AAB8A;
      }
      /*
      |**************************************************************************
      | button의 위치를 padding을 통해 지정해준다.
      |**************************************************************************
      */
      .styled-select{
        overflow-y:hidden;
        width:850px;
        height:280px;
        border-radius: 5px; 
        border: 0px solid black; 
        position: absolute; 
        top:370px;
        left:300px;
      }
      .bandlist{
        overflow:auto;
        width:300px;
        height:245px;
        border-radius: 5px; 
        border: 0px solid black; 
        position: relative; 
        top:18px;
        left: 500px;
        overflow-x:hidden;
      }
      .bandlist p{
        font-size:15px;
      }
      .layer{
        position:absolute;
        top:0px;
        left:30px;
        /*margin-top: -300px;*/
        width:350px;
        height: 450px;
      }
      
      .layer > div{
        font-size:13px;
        height: 60px;
        
      }
      .nav{
        float: left;
        margin-top: 10%;
        padding:10px;
      }
      .listname{
        display: inline-block;
        margin-top: 0px;
        margin-bottom: 0px;
        margin-right: 10px;
        margin-left: 50px;
        font-size: 20px;
      }
      p[title="after"]{
        position:absolute;
        font-size:80px;
        left:300px;
        top:150px;
      }
      p[title="afterview"]{
        position:absolute;
        font-size:80px;
        left:400px;
        top:150px;
      }
      .navfloat{
        position:absolute;
        left:0px;
      }
      
      #footer{
        margin-bottom : 60%;
        
      }
    
      #footer_text{
        font-family: 'Nanum Gothic', serif;
        font-size: 10px;
        
      }
      
      .listborder{
        height: 95px;
      }
      .listborder audio{
        padding:5px;
        margin-top: -10px;
      }
      .listUser{
        margin-top: 25px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        font-size: 15px;
      }
      .listUser p{
       display: inline;
       font-size: 15px;
      }
      audio{
        width:300px;
        height: 34px;
      }
      .bobost{
        padding: -20px;
        margin-top: -35px;
        margin-right:-15px;
      }
      label{
        margin-top: 30px;
        margin-left: 20px;
      }
      .testss{
        margin-top: -20px;
      }
      .navbar .menufont{
        background-color:rgba(1,106,120,.8);
        z-index:100;
      }
      
  </style>
  <script>
    window.onload=function(){
      function funLoad(){
        var Cheight = $(window).height();
        $('.beforesection').css({'height':Cheight+'px'});
      }
      window.onload = funLoad;
      window.onresize = funLoad;
    }
  </script>
<!--
|******************
********************************************************
| bandChallenge- Record합주_상단 메뉴부분
|**************************************************************************
-->
    <nav class="navbar ">
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

   <?php
   $k = 0;
    if($id == null){
        echo "
        
        
        <div class='beforesection'>
        <div class='table'>
        <ul class='list'>";
        foreach ($band_audio_boards as $band_audio_board){
          $current_key = key(current( $midis->where('id','=',$band_audio_board['midi_id']) ));
            $src = "https://harmony-project-chonahoom.c9users.io/midi/".$midis->where('id','=',$band_audio_board['midi_id'])[$current_key]['path'].'/'.
                    $midis->where('id','=',$band_audio_board['midi_id'])[$current_key]['img'];
            $music_name = $midis->where('id','=',$band_audio_board['midi_id'])[$current_key]['music_name'];
            $composer = $midis->where('id','=',$band_audio_board['midi_id'])[$current_key]['composer'];
//전체 밴드 오디오 게시판
 ?>
    <li class="column">
      <div class="cover">
          <a href="/recordafter/{{$band_audio_board['id']}}">
              <img src={{$src}}/>
          </a>
      </div>
      <div class="info">
          <!--<a href="/recordbefore/{{$band_audio_board['id']}}">-->
          <!--</a>-->
          <div class="albumtitle">
              {{$music_name}}
          </div>
          <div class="artist">
              {{$composer}}
          </div>
          <div class="toptitle">
            <?php
              if( strlen($band_audio_board['subject']) > 20 ){
               $band_audio_board['subject'] = mb_substr($band_audio_board['subject'],0,20, 'UTF-8').'...';
              }
            ?>
            タイトル : {{$band_audio_board['subject']}}
          </div>
          <div class="foot">
              <ul>
                <li>{{substr($band_audio_board['created_at'],0,-9)}}</li>
                <li>イイネ : {{$band_audio_board['goods']}}</li>
              </ul>
          </div>
      </div><!--info끝-->
      <div class="toptable">
        <div class="publisher">
          <?php
            if( strlen($partici_name[$k]) > 20 ){
              $partici_name[$k] = substr($partici_name[$k],0,20).'...';
            }
          ?>
          <p name="boardtitle">掲示者</p>
          <p name="publishername">{{$partici_name[$k]}}</p>
        </div>
      </div>
    </li>

  <?php
  $k++;
         }
    echo "</ul></div></div>";
    }
    else{
 ?>
   
   <!--<p title='afterview'>Record View</p>-->
      <!--<div class='progress2'>-->
      <!--  <div class='step-box'>-->
      <!--    <div class='step-state step2'>-->
      <!--      <ul>-->
      <!--        <li><p>List</p></li>-->
      <!--        <li><p>View</p></li>-->
      <!--        <li><p>Recording</p></li>-->
      <!--        <li><p>Upload</p></li>-->
      <!--      </ul>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      
      
    <div id="imgbox">
      <img id="img1" src="<?php echo '/midi/'.$midi['path'].'/'.$midi['img'];?>"/>
      <div class="font">
        <p>音の名前 : <?php echo $midi['music_name'];?></p>
        <p>作曲家 : <?php echo $midi['composer'];?></p>
        <p>ジャンル : <?php echo $midi['genre'];?></p>
      </div>{{--font 의 div--}}
    </div>
   
      <div class="styled-select" style="">
        <div class="bandlist"><p>楽器のリスト</p>
         <?php
          $i = 0;
        $insts=explode(",", $band_audio_board['selected_instruments']);
       
        foreach ($insts as $inst){
          
            $inst_src = '/midi/'.$midi['path'].'/'.$inst;
            echo "
            <link rel='stylesheet' href='/css/bandchallenge/scroll.css'>
            <div class='listborder'>
            <img src='/img/base.png'>
            <div class='bobost'>
            <div class='listname'>
            ".substr($inst,0,-4)."
            </div>
            <input type='checkbox' id='toggleButton[$i]' checked name='musics[]' value='$inst'/>
                <label for='toggleButton[$i]' data-on-text='On' data-off-text='Off'></label>
                
                </div><br>";
            echo "<div class='testss'><audio name='my_audio[]' controls>
                <source src='$inst_src' type='audio/mpeg'>
            </audio></div></div>";
            $i++;
        }
         ?>
        </div>
        <div class="layer" name="layer" >
          <p class="listUser">アンサンブル メンバー</p>
           <?php
               foreach ($band_audio_particis as $band_audio_partici){
                   $inst_src = '/uploads/bandChallenge/audio/'.$band_audio_partici['file_name'];
                   echo "<div style='border-radius: 5px;margin: 5px;padding: 5px;border: 1px solid black'>
                   <img style='width:15px;height:15px;' src='/inst_img/".$band_audio_partici['instrument'].".jpg' />".
                       substr($band_audio_partici['file_name'],15,-4)." 様の演奏".
                ": <input type='checkbox' checked name='participants[]' value='$band_audio_partici[file_name]'/><br>";
                   echo "<audio name='my_participant[]' controls>
                  <source src='$inst_src' type='audio/mpeg'>
              </audio></div>";
               }
           ?>
        </div>{{--layer의 div--}}
      </div>{{--styled-select의 div--}}
      <div id="buttonBox">
        <form name="recordForm" action="/recordwork" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="music_checked_list" value="">
          <input type="hidden" name="partici_checked_list" value="">
          <input type="hidden" name="band_board_id" value="{{$id}}">
    
          <input type="hidden" name="midi_id" value="{{ $midi['id'] }}">
          <input type="button" id="buttonBox" onclick="recordPage();" value="アンサンブルする">
          <input type="button" id="buttonBox" onclick="allCheck();" value="すべて選択">
          <input type="button" id="buttonBox" name="listen_btn" onclick="init();" value="▶">
       </form>
      </div>{{--button끝--}}
<script src="/scripts/same_time_play.js"></script>
 <?php
    }
 ?>
 