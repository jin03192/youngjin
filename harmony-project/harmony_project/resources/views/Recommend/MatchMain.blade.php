<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/MatchMain.css?var=<?=filemtime('./css/MatchMain.css');?>" type="text/css" />
    <script type="text/javascript">
      function Return() {
        var content = confirm("매칭 서비스는 음원과 사용자를 추천해줍니다. 하루 매칭 사용 횟수(0/5회) ");
        if(content == true){
          location.href = "/Recommend/Connection";
        }
      };
    </script>
  </head>
  <body>
    @include('menu.topmenu')
    <div id="main">
      <div id="userbox">
        <p id="userP">Admin님</p><br>
          <img src="/img/user.png" id="user"><br>
        <p id="userP">연주한 곡: 142곡</p><br>
      <p id="userP">길드: 교향 밴드</p>
      </div>
    <div id="mainbox">
      <h1 id="h1">추천 매칭</h1>
        <img src="/img/garea.png" id="Graph">
      <button id="button2" type="button" onclick="Return();">매칭하기</button>
      <button id="button1" type="button" onclick="location.href='joinUs.jsp' ">통계 더 보기</button>
      <div class="styled-select">
        <select>
          <option selected>악기별</option>
          <option value="드럼">음원별</option>
          <option value="피아노">합주별</option>
        </select>
      </div>
    </div>
    </div>
  </body>
</html>