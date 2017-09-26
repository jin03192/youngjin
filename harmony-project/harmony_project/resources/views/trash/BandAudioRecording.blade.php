<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
      <link href="/css/Recording.css?var=<?=filemtime('./css/Recording.css');?>" rel="stylesheet">
 
  <script type="text/javascript" >
       function ShowSliderValue(sVal)
    {
        var obValueView = document.getElementById("slider_value_view");
        obValueView.innerHTML = sVal
    }
    </script>
  </head>
  <body>
    @include('menu.topmenu')
    <div id="buttons">
    <button type="button" onclick="location.href='joinUs.jsp' ">시작</button>
    <button type="button" onclick="location.href='joinUs.jsp' ">일시정지</button>
    <button type="button" onclick="location.href='/bandChallenge/bandAudioStop' ">정지</button>
    <button type="button" onclick="Return();' ">돌아가기</button><br>
    </div>
    <img id="sourt" src="/img/c.jpg" width="450" height="400">
    <img id="song" src="/img/song.png" width="450" height="50">
        <div class="range-slider">
        <p id="bpm">BPM</p>
          <font  class="range-slider__value" size = 2 id = "slider_value_view">0</font>
          <input id="select"class="range-slider__range" oninput = 'ShowSliderValue(this.value)'  type = "range" min='0' max='100' value='100'>
        </div>
  </body>
</html>