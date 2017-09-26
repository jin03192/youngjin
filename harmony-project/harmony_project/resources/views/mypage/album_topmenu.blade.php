  <style>
    #logo{
        background-color: none;
        width:200px;
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
          font-family: 'Nanum Gothic', serif;
          margin-top:18%;
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
      .menufont{
        background-color:rgba(255,255,255,.4);
        padding-bottom:30px;
        width:78%;
        float:right;
        text-align:center;
      }
      .menuimg{
        background: rgba(255, 255, 255,0);
        width:22%;
        text-align:center;
        padding-bottom:5px;
        float:left;
      }
  </style>
<div class="container back">
  <div class="row topmenu">
    <div class="menuimg">
      <a href="{{ url('/') }}">
        <img id="logo" src="/img/logo3.png" alt="">
      </a>
    </div>
    <div class="menu menufont">
  <!--
  |**************************************************************************
  | Top menu bar -BandChallenge
  |**************************************************************************
   -->
    <div class="dropdown">
      <a class="dropbtn"  href="{{ url('/band_main')}}" name="bandchallenge"><strong>バンドチャレンジ</strong></a>
    </div>


  <!--
  |**************************************************************************
  | Top menu bar -音Ven
  |**************************************************************************
   -->
    <div class="dropdown">
      <a class="dropbtn" name="otoven" href="{{ url('/otoven/otoven_main') }}"><strong>音ベン</strong></a>
    </div>


  <!--
  |**************************************************************************
  | Top menu bar -Guild Community
  |**************************************************************************
  -->
    <div class="dropdown">
      <a class="dropbtn" name="guild" href="{{ url('/guildmain') }}"><strong>ギルド</strong></a>
    </div>


  <!--
  |**************************************************************************
  | Top menu bar -お好み樂器
  |**************************************************************************
  -->
    <div class="dropdown">
      <a class="dropbtn" name="matching" href="{{ url('/matching/main')}}"><strong>お好み樂器</strong></a>
    </div>


  <!--
  |**************************************************************************
  | Top menu bar -Community
  |**************************************************************************
  -->
    <div class="dropdown">
      <a class="dropbtn" name="album" href="{{ url('/myPage/album')}}"><strong>マイアルバム</strong></a>
    </div>
  </div>
</div>
</div>