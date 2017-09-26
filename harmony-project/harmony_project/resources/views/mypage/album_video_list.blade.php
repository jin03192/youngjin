<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">

    <style media="screen">
    /* 왼쪽 메뉴바 */
    #musicMenu {
      border-radius: 18px;
      border:5px solid #7FC7AF;
      width:225px;
      height:600px;
      margin: 15px;
      position: relative;
      position: absolute;
      top: 25%;
    }

    /* 오른쪽 컨텐츠 */
    #main {
      width:800px; height:600px;
      /*padding-top: 150px;*/
      position:absolute;
      top: 27%;
      left:300px;
    }

    /* 왼쪽 앨범 사진 */
    #albumImage {
      width:194px; height:180px;
      margin-left: 6.2%;
      margin-top: 10%;
      position: absolute;
    }


    /* 메뉴 내용 */
    .menus>div{
      border-radius: 38px;
      width: 170px; height: 16px;
      display: inline-block;
      border: 2px solid #7FC7AF;
      margin-bottom: 17%;
      padding: 5%;
      text-decoration: none;
    }
    .menus>a:hover{
      color: lime;
    }
    .menus{
      font-family: 'Hanna', serif;
      text-align:center;
      margin-left: 0%;
      margin-top: 105%;
    }

    /* 노래리스트 테이블 */
    #musicTable {
      border:1px solid black;
    }
    /*#songlist{
      margin-top:75%;
      margin-bottom: 15%;
      margin-left: 24%;
    }
    #songModify{
      margin-left: 24%;
      margin-bottom: 15%;
    }
    #songPlayback{
      margin-left: 24%;
      margin-bottom: 15%;
    }*/
      .boardLineList{
        border-spacing: 1px;
        border-collapse: separate;
      }
      .boardLineList{
	     margin:0px;
	     padding: 0px;
	     font-size:11px;
	     color:#898989;
	     font-family: "wdu", "돋움";
      }
      #singlist{
        margin-left: 41%;
        margin-bottom: 5%;
      }
      table {
        border:0;
        border-spacing:0px;
        border-collapse:collapse;
      }
      #title{
        margin-top: 0px;
      }

      /* 목록 **************************************************************************************************************/
      .boardList th { background-color:#dddddd; height:40px; color:#000000;}

      .boardList td { height:16px; border-bottom:1px solid #e8e8e8; text-align:center; padding:8px 0 5px 0; }
      .boardList .left { text-align:left; padding-left:5px; }
      .boardList tr:hover, .boardList .overBg { background-color:#f7f7f7; }
      .boardList .outBg { background-color:#ffffff; }


      .boardLineList th { background-color:#dddddd; height:40px; color:#000000; }
      .boardLineList tr { background-color:#ffffff;}
      .boardLineList td { height:16px; text-align:center; padding:8px 0 5px 0; word-wrap:break-word;}

      .boardLineList .left { text-align:left; padding-left:5px; padding-right:5px; }
      .boardLineList .right { text-align:right; padding-right:5px; padding-left:5px; height:20px;}
      .boardLineList tr:hover, .boardLineList .overBg { background-color:#f7f7f7; }
      .boardLineList .outBg { background-color:#ffffff; }
      .boardLineList { background-color:#c5c5c5; }
    </style>
  </head>
  
  <body>
    <header class="navbar navbar-inverse">
      @include('menu.topmenu')
    </header>
    <div id = "musicMenu">
      <div id = "albumImage">
        <img src='<?php echo "/albumImages/{$imageFile[0]['album_picture']}"; ?>' alt="" width=100% height=100%>
      </div>
      <div class = "menus">
        <h4 id="title">미사일</h4>
        <div><a href="<?php echo "/myPage/album/record/list/{$sessionUser}/{$albumNumber}"; ?>">노래리스트</a></div>
        <div><a href="<?php echo "/myPage/album/record/modify/{$sessionUser}/{$albumNumber}"; ?>">노래수정</a></div>
        <div><a href="<?php echo "/myPage/album/record/play/{$sessionUser}/{$albumNumber}"; ?>">노래재생</a></div>
        <div><a href="/myPage/album">뒤로가기</a></div>
        <!--<a href="#">Record</a> <a href="#">Video</a>-->
      </div>
    </div>

    <div id="main">
      <h2 id="singlist">노래리스트</h2>
      
          <div id='body'>
          <div id='contents'>
          <div id='boardLineList'>
            <table width='100%' class='boardLineList'>
              <colgroup>
                <col width='25%'>
                <col width='10%'>
                <col width='48%'>
                <col width='*'>
              </colgroup>
              <tr>
                <th>音楽名</th>
                <th>楽器</th>
                <th>合奏した人たち</th>
                <th>合奏した日付</th>
              </tr>
              <?php
              // <a href='/recordbefore/{$userMusics[$listCount]["id"]}'>
              // onClick ='location.href="/"'
                for($listCount = 0; $listCount < count($userMusics); $listCount++) {
                echo "<tr>";
                echo "<td><a href='/recordbefore/{$userMusics[$listCount]["id"]}'>{$userMusics[$listCount]['subject']}</a></td>";
                echo "<td>{$userMusics[$listCount]['instrument']}</td>";
                echo "<td>{$partici_name[$listCount]}</td>";
                echo "<td>{$userMusics[$listCount]['created_at']}</td>";
                echo "</tr>";
                }
                ?>
              </div>
            </div>
          </div>

        
    </div>
    
    <script type="text/javascript">
      function f(){
        document.href = 
      }
    </script>
  </body>
</html>
