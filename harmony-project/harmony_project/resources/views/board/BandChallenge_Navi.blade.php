 <style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');

/* 여기서 부터 */
.sidebar {
  width: 250px;
  height: 100%;
  margin:0px;
}
.nano-content{
  list-style: none;
  margin-top:30px;
  margin-left:0px;
  padding:0px;
  border-bottom-right-radius:10px; 
}
.nano-content li{
  padding:20px;
  text-align:right;
  border:1px solid black;
  border-bottom-right-radius:10px; 
  border-top-right-radius:10px; 
  background: rgba(255, 255, 255,0.7);
}
.nano-content a{
  text-decoration:none;
  font-size:18px;
  color:black;
  font-style:bold;
}
.nano-content a:active{
  text-decoration: none;
  color:white;
}
.nano-content li[name="ongaku"]:active{
  background: #20A6B9;
  color:white;
}
.nano-content li[name="Renso"]:active{
  background: #2F7CC3;
  color:white;
}
.nano-content li[name="Rkorabo"]:active{
  background: #2B40AC;
  color:white;
}
.nano-content li[name="Venso"]:active{
  background: #4F32C3;
  color:white;
}
.nano-content li[name="Vkorabo"]:active{
  background: #7E30B9;
  color:white;
}
p[title="keybordone"]{
  width:110px;
  height:30px;
  background-color:black;
  position:absolute;
  top:77px;
}
p[title="keybordtwo"]{
  width:110px;
  height:30px;
  background-color:black;
  position:absolute;
  top:143px;
}
p[title="keybordthree"]{
  width:110px;
  height:30px;
  background-color:black;
  position:absolute;
  top:210px;
}
p[title="keybordfour"]{
  width:110px;
  height:30px;
  background-color:black;
  position:absolute;
  top:350px;
}
p[title="keybordfive"]{
  width:110px;
  height:30px;
  background-color:black;
  position:absolute;
  top:415px;
}
 </style>
 <!--좌측 사이드메뉴 시작-->
<!--<aside class="sidebar">-->
<!--    <ul class="nano-content">-->
<!--      <li class="sub-menu"><p title="bandchallenge">BandChallenge</p>-->
<!--      </li>-->
<!--      <li class="sub-menu music">-->
<!--        <a href="{{ url('/recordalbum') }}">음원을 기다려요<i class="arrow fa fa-angle-right pull-right"></i></a>-->
<!--      </li>-->
<!--      <li class="sub-menu beforerecord">-->
<!--        <a href="{{ url('/recordbefore') }}">Record 합주를 기다려요<i class="arrow fa fa-angle-right pull-right"></i></a>-->
<!--      </li>-->
<!--      <li class="sub-menu afterrecord">-->
<!--        <a href="{{ url('/recordafter') }}">Record 합주를 했어요<i class="arrow fa fa-angle-right pull-right"></i></a>-->
<!--      </li>-->
<!--      <li class="sub-menu beforevideo">-->
<!--        <a href="{{ url('/videobefore') }}">Video 합주를 기다려요<i class="arrow fa fa-angle-right pull-right"></i></a>-->
<!--      </li>-->
<!--      <li class="sub-menu aftervideo">-->
<!--        <a href="{{ url('/videoafter') }}">Video 합주를 했어요<i class="arrow fa fa-angle-right pull-right"></i></a>-->
<!--      </li>-->
<!--    </ul>-->
<!--</aside>-->
<aside class="sidebar">
  <ul class="nano-content">
    <li>バンドチャレンジ</li>
    <a href="{{ url('/recordalbum') }}">
    <li name="ongaku">音楽の音</li>
    <p title="keybordone"></p>
    <a href="{{ url('/recordbefore') }}">
    <li name="Renso">レコード 演奏</li></a>
    <p title="keybordtwo"></p>
    <a href="{{ url('/recordafter') }}">
    <li name="Rkorabo">レコード コラボ</li></a>
    <p title="keybordthree"></p>
    <a href="{{ url('/videobefore') }}">
    <li name="Venso">ビデオ 演奏</li></a>
    <p title="keybordfour"></p>
    <a href="{{ url('/videoafter') }}">
    <li name="Vkorabo">ビデオ コラボ</li></a>
    <li>&nbsp;</li>
    <p title="keybordfive"></p>
  </ul>
</aside>
<!--좌측 사이드메뉴 끝-->