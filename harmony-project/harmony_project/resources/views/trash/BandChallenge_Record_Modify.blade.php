<link rel="stylesheet" href="/css/Rmodify.css">
<body>
  <!--
  |**************************************************************************
  | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
  |**************************************************************************
   -->
  <div class="top">
    @include('menu.topmenu')
  </div>
  <!--
  |**************************************************************************
  | 악보 부분
  |**************************************************************************
  -->
  <div class="musicnote">
    <img src="img/c.jpg" alt="">
  </div>
  <!--
  |**************************************************************************
  | 악보 옆 버튼 부분
  |**************************************************************************
  -->
  <div class="musicmenu">
    <button type="button" name="button">♩</button>
    <button type="button" name="button">♪</button>
    <button type="button" name="button">♬</button>
    <button type="button" name="button">♭</button>
    <button type="button" name="button">¶</button>
    <button type="button" name="button">#</button>
    <button type="button" name="button">지우개</button>
    <div class="playbtn">
      <button type="button" name="button">∥</button>
      <button type="button" name="button">■</button>
      <button type="button" name="button">▶</button>
    </div>
    <div class="modifyok">
      <a href="recordupload">
        <button type="button" name="button">수정완료</button>
      </a>
    </div>
  </div>
</body>
