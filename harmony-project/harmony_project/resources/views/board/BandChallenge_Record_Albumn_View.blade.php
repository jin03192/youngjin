
    <link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
    
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  </head>
  <style>
  @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
  
    /*dddd*/
    .navfloat{
        position:absolute;
        left:0px;
    }
    p[title="viewtitle"]{
        width:70%;
        border-bottom:1px solid #555;
    }
    .viewbox{
        width:80%;
        height:300px;
        border:1px solid #888;
        margin:80px 260px;
    }
    .buttonstyle{
        width:100%;
        text-align:center;
        margin:0 20px;
    }
    .buttonstyle input[type="button"]{
        font-size:15px;
        height:40px;
        width:50px;
        box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.2);
        background-color:white;
        border-radius:5px;
        text-align:center;
    }
    .buttonstyle input[type="button"]:hover{
        border:1px solid #999;
    }
    .albumcontent{
        width:40%;
    }
    .albumviewimg img{
        width:100%;
        height:200px;
        border:1px solid #777;
        margin:20px 20px;
        }
    .font{
        margin:20px 30px;
        width:100%;
    }
    p[title="musicname"]{
        font-size:27px;
    }
    .viewcontentfont{
        font-size:15px;
    }
    /*
    |**************************************************************************
    | 
    |**************************************************************************
    */
    .bandlist p{
      position:relative;
      border-radius: 5px;
      margin: 5px;
      padding: 5px;
      border: 3px solid darkgreen;
    }
    .bandlist p{
      font-size:20px;
      border-bottom:2px solid darkgreen;
    }
    .styled-select{
        overflow:auto;
        width:270px;
        height:298px;
        border-radius: 5px; 
        border: 0px solid darkgreen; 
        background:white;
        margin:0 40px;
    }
    .styled-select>div{
        text-align: center; 
        font-size: 20px;
    }
    .namealign{
      position:relative;
      color:black;
      display:inline-block;
      margin-left:10px;
    }
    .test{
        border:1px solid black;
    }
    .align{
        margin:0 auto;
    }
    #footer{
      margin-bottom : 5%;
    }
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
    }
  </style>
  <body>
    <script type="text/javascript">
    if (document.location.protocol == 'http:') {
    document.location.href = document.location.href.replace('http:', 'https:');
    }
    </script>
  <!--
  |**************************************************************************
  | bandChallenge- Record합주_상단 메뉴부분
  |**************************************************************************
  -->
@include('menu.topmenu')
<div class="container align">
  <div class="row "> 
    <div class="navfloat">
      @include('board.BandChallenge_Navi')    
    </div>
  </div>

  <!--
  |**************************************************************************
  | bandChallenge- Record합주_게시글 표시부분
  |**************************************************************************
  -->
    <div class="row viewbox">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3 albumviewimg ">
                    <div class="row ">
                        <img id="img1" src="<?php echo '/midi/'.$midi['path'].'/'.$midi['img'];?>">    
                    </div>
                    <div class="row">
                        <div class="buttonstyle ">
                            <form name="recordForm" id="recordForm" action="/recordwork" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="music_checked_list" value="">
                                <input type="hidden" name="midi_id" value="{{ $midi['id'] }}">
                                <input type='button' onclick="recordPage();" value='録音'>
                                <input type='button' onclick="videoRecordPage();" value='録画' >
                                <input type="button" onclick="allCheck();" value="All"/>
                                <input type="button" onclick="init();" name="listen_btn"  value="▶"/>
                            </form>
                        </div>
                    </div><!--row 끝나는지점-->
                </div>
                <div class="col-md-2 albumcontent ">
                    <div class="font">
                        <p title="musicname"><b><?php echo $midi['music_name'];?></p></b>
                        <div class="col-md-4 viewcontentfont ">
                            <p>アーティスト</p>
                            <p>ジャンル</p>
                        </div>
                        <div class="col-md-7 viewcontentfont ">
                            <p><?php echo $midi['composer'];?></p>
                            <p><?php echo $midi['genre'];?></p>
                        </div>
                    </div>{{--font 의 div--}}
                </div>
                <div class="col-md-3 ">
                    <div class="styled-select" style="">
                        <div class="bandlist"><b><p>楽器のリスト</p></b>
                            <?php
                            $i=0;
                          foreach ($insts as $inst){
                              $inst_src = '/midi/'.$midi['path'].'/'.$inst['inst_name'];
                                
                              echo "
                                 <link rel='stylesheet' href='/css/bandchallenge/scroll.css'>
                                 <link rel='stylesheet'  href='/css/checkbox.css'>
                                 <div class='listborder '>
                                    <img src='/inst_img/".substr($inst['inst_name'],0,-4).".jpg'/ style='width:50px;height:50px;'><div class='namealign'>".substr($inst['inst_name'],0,-4)."</div>
                                        <div class='checkbox'>
                                     <input type='checkbox' id='switch[$i]' checked name='musics[]' value='$inst[inst_name]'/>
                                     <label for='switch[$i]'></label>
                                        </div><br>";
                                 echo "<audio name='my_audio[]' src='$inst_src' controls>
                                </audio></div>";
                                $i++;
                             }
                        ?>
                        
                        </div>
                    </div>{{--layer의 div--}}
                </div>
            </div>
        </div><!--col 12 끝나는지점-->
    </div><!--row 끝나는지점-->
</div><!--container 끝나는지점-->
  
       
<script src="/scripts/same_time_play.js?var=<?=filemtime('./scripts/same_time_play.js');?>"></script>
<script src="/js/video/video.js?var=<?=filemtime('./js/video/video.js');?>"></script>

<div style="position:relative; left:-400px; top:800px;">
    메트로눔
</div>
</div>

    <div class="footer row">
        @include('menu.footer')
    </div>

</body>