<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
    <link href="/css/recordwork.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $("#start").click(function() {
        alert("되라");
      });
      $("#pause").click(function() {

      });
      $("#stop").click(function() {
          window.location.href="{{ url('/recordafter')}}";
      });
      $("#back").click(function() {
        if(confrim("지금 돌아가시면 녹음했던 모든 내용을 잃을 수 있습니다. 그래도 이전 페이지로 돌아 가시겠습니까?")){
          alert("확인");
        }else{
          alert("취소");
        }
      });
    });

    </script>
    </head>
  <body>
    <div class="top">
      @include('menu.topmenu')
    </div>
    <div class="btns">
      <button type="button" id="start">시작</button>
      <button type="button" id="pause">일시정지</button>
      <button type="button" id="stop">정지</button>
      <button type="button" id="back">돌아가기</button>
    </div>
    <img class="sourt" src="/img/c.jpg" width="500" height="500">
    <img class="song" src="/img/song.png" width="500" height="50">
        <div class="range-slider">
        <p>BPM</p>
          <font class="range-slider__value" size = 2 id = "slider_value_view">0</font>
          <input class="select range-slider__range" oninput = 'ShowSliderValue(this.value)'  type = "range" min='0' max='100' value='100'>
        </div>
  </body>
</html>
