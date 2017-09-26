<title>BandChallenge Album</title>
<!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style media="screen">
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

 
  /*
  |**************************************************************************
  | 게시판 전체 틀 부분
  |**************************************************************************
  */
  body{
    background-color:rgba(41,212,237,.4);
  }
  .aling {
   padding-top:50px;
  }
  /* 게시판 한 column단위 */
  .list{
    position: relative;
  }
  .column{
    position: relative;
    list-style: none;
    width: 300px;
    margin-top: 30px;
  }
  /* 앨범 커버 사진부분 */
  .cover{
    position: relative;
    width: 300px;
  }
  /* 게시판 정보 부분 */
  .info{
    position: absolute;
    top: 0px;
    left: 1000px;
    width: 600px;
    height: 300px;
    border: 1px solid white;
  }
  /* 인기 TOP */
  .tabletop{
    position: absolute;
    left: 5%;
    top: 0px;
    width: 95%;
    display: block;
    border-bottom: 1px solid white;
  }
  /* 앨범 제목 */
  .albumtitle{
    position: absolute;
    top: 30%;
    left: 40%;
    font-size: 40px;
  
  }
  /* 앨범 아티스트 */
  .artist{
    position: relative;
    top: 50%;
    left: 50%;
    font-size: 20px;
  }
  /* 총 시간과 추천 수 표시 */
  .foot{
    position: relative;
    top: 80%;
    font-size: 20px;
    border-top: 1px solid white;
  }
  .foot>ul{
    overflow: auto;
  }
  .foot>ul>li{
    float: left;
    list-style: none;
    margin-left: 20%;
    font-size: 18px;
  }

  /*
  |**************************************************************************
  | 인기순위 차트 컨텐츠
  |**************************************************************************
  */ 
 
  p[title="album"]{
    position:absolute;
    font-size:80px;
    left:360px;
    top:150px;
  }
  .album_content {
    position: absolute;
    width: 1400px;

    border: 8px solid #f0f0f5;
    margin-top: 200px;
    left: 330;
    padding: 50px;
    display: inline-block;
  }
  .acontent {
    transition: 0.3s;
    width: 300px;
    display: inline-block;
    position: relative;
    margin-right: 30px;
    margin-bottom: 100px;
  }
  .acontent img[alt="album"]{
    width: 300px;
    height:300px;
  }
  .acontent img[alt="playbtn"]{
    width: 50px;
    position: absolute;
    top: 210px;
    left: 210px;
  }
  
  .progress{
    position:absolute;
    left:550px;
    top:170px;
  }
  /*ddd*/
  .navfloat{
    position:absolute;
    left:0px;
  }
  .albumimg img{
    width:100%;
    height:200px;
  }
  img[alt="playbtn"]{
    width:30px;
    height:30px;
    position:absolute;
    z-index:200px;
    top:20px;
    right:30px;
  }
  .captioncolor{
    width:88%;
    height:80px;
    background: rgba(0, 0, 0,0.6);
    margin-top:-40%;
    position:absolute;
    z-index:100px;
  }
  .albumsize{
    width:250px;
  }
  .captioncolor a{
    text-decoration:none;
  }
  .captioncolor p{
    display: inline;
    color:white;
    margin:10px;
  }
  .captioncolor p[title="title"]{
    font-size: 18px;
  }
  .captioncolor p[title="content"]{
    font-size: 12px;
  }
  .captioncolor button{
    background: rgba(0, 0, 0,0);
    border:none;
    cursor:pointer;
    position:absolute;
    right:0px;
    top:35px;
  }
  .captioncolor img{
    border-radius:50px;
    background: rgba(255, 255, 255,0.7);
    display:inline;
    width:30px;
  }
  .captioncolor span{
    width:50px;
    margin-top:47px;
    font-size:25px;
    color:white;
    text-align:right;
  }
  .captioncolor span:hover{
    color: #1f8a70;
  }
  .albumbox{
    width:70%;
    margin:80px 300px;
  }
  #footer{
    margin-bottom : 30%;
  }
    
  #footer_text{
    font-family: 'Nanum Gothic', serif;
    font-size: 10px;
    }

  .test{
    border:1px solid black;
  }
</style>
<script>
    window.onload=function(){
      function funLoad(){
        var Cheight = $(window).height();
        $('.album_content').css({'height':Cheight+'px'});
      }
      window.onload = funLoad;
      window.onresize = funLoad;
    }
    
  </script>
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

<!--
|**************************************************************************
| bandChallenge- Record합주_게시판
|**************************************************************************
-->
<div class="row albumbox"> 
    <?php
        $k = 0;
          foreach ($midis as $midi){
           if($midi['id']!==2&&$midi['id']!==3&&$midi['id']!==4&&$midi['id']!==5&&$midi['id']!==6&&
              $midi['id']!==7&&$midi['id']!==9&&$midi['id']!==11&&$midi['id']!==12&&$midi['id']!==13&&
              $midi['id']!==15&&$midi['id']!==16&&$midi['id']!==19&&$midi['id']!==20&&$midi['id']!==21&&
              $midi['id']!==23&&$midi['id']!==27&&$midi['id']!==28
            ){
              echo "<div class='col-md-4 albumsize'>\n";
                echo "\t<a href='/albumview/$midi[id]'>\n";
                echo "<div class='thumbnail albumimg'>\n";
                  echo "\t<img src='/midi/$midi[path]/$midi[img]' alt='album'>\n";
                  echo "\t<img src='/img/play.png' alt='playbtn'>
                  </div>\n";
                echo "\t<div class='caption captioncolor'>\n";
                echo "\t<button type='button' name='goods_btn[]' onclick='goods($midi[id],$k);'><img src='/img/good.png'></button>\n";
                echo "\t<p title='title'><strong>$midi[music_name]</strong></p><br/>\n";
                echo "\t<p title='content'>$midi[composer]</p><br/>\n";
                echo "\t<p title='content'>いいね <strong>$midi[goods]</strong></p><br/>\n";
                echo "\t</div></a></div>\n";
            $k++;
            }
          }
        ?>
  </div>
</div>



    <div class="footer row">
        @include('menu.footer')
    </div>



<script>
  var goods_btn = document.getElementsByName("goods_btn[]");
    function goods(id,k){
      $.ajax({
        url: "/midigoods/"+id,
        type: "GET",
        processData: false,
        contentType: false,
        //data: 0,
        dataType: 'json',
        success:function(data){
            goods_btn[k].innerHTML = "♥ 좋아요\t"+data;

        },
        error: function (mes) {
          
        }
    });
    }
</script>