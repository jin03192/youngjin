<link rel="stylesheet" href="/css/band.css">
<link rel="stylesheet" href="/css/template_depth.css?var=<?=filemtime('./css/template_depth.css');?>">
@yield('nav')
<nav> <!-- 좌측 네비게이션 메뉴 -->
  <a href="{{ url('/recordalbum')}}">
    <div class="Record_wait">음원들이 기다려요</div>
  </a>
  <a href="{{ url('/recordbefore')}}">
    <div class="Record_Collaborate_wait">Record 합주를 기다려요</div>
  </a>
  <a href="{{ url('/recordafter')}}">
    <div class="Record_Collaborate_complete">Record 합주를 했어요</div>
  </a>
  <a href="{{ url('/videobefore')}}">
    <div class="Video_Collaborate_wait">Video 합주를 기다려요</div>
  </a>
  <a href="{{ url('/videoafter')}}">
    <div class="Video_Collaborate_complete">Video 합주를 했어요</div>
  </a>
</nav>	<!-- 좌측 네비게이션 메뉴 끝 -->
