<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">

    <style media="screen">
    #trash-can{
    position:absolute;
    top:77%;
    right:5%;
    border:1px solid black;
    width:40px; height:35px;
    }
    #sortable1 {
      position:relative;
      display:inline-block;
      float:left;
      margin-left:0px;
      left:0%;
      font-size: 20px;
      font-family: 'Hanna', serif;
      text-align: center;
      border-radius: 20px;
      border: 2px solid #000000;
      width: 45%; height:60%;
    }
    #sortable2 {
      position:relative;
      display:inline-block;
      left:4%;
       float:left;
      font-size: 20px;
      font-family: 'Hanna', serif;
      text-align: center;
      border-radius: 20px;
      border: 2px solid #000000;
      width: 45%; height:60%;
    }


    #trash-can {
     background-image: url('/img/trashCanClosed.png');
     background-size: 40px 35px;
    }
  
    #trash-can:hover {
       background-image: url('/img/trashCanOpen.png');
       background-size: 40px 35px;
    }

    /* 왼쪽 메뉴바 */
    #musicMenu {
      border-radius: 18px;
      border:5px solid #7FC7AF;
      width:95%;
      height:25%;
      position: relative;
      position: absolute;
      padding:0px;
    }

    /* 오른쪽 컨텐츠 */
    #main {
      width:100%; height:80%;
      /*padding-top: 150px;*/
      position:absolute;
      top: 27%;
    }

    /* 왼쪽 앨범 사진 */
    #albumImage {
      width:30%; height:60%;
      margin-left: 6.2%;
      margin-top: 10%;
      position: absolute;
    }
/*
|**************************************************************************
| 메뉴 내용.
|**************************************************************************
*/
    .menus>div{
      border-radius: 38px;
      width: 50%; height: 15%;
      display: inline-block;
      float:left;
      border: 2px solid #7FC7AF;
      padding: 5%;
      text-decoration: none;
      margin-left:100%;
      margin-bottom:3%;
    }
    .menus:nth-child(3){
      border-radius: 38px;
      width: 50%; height: 15%;
      display: inline-block;
      float:left;
      border: 2px solid #7FC7AF;
      padding: 5%;
      text-decoration: none;
      margin-left:100%;
      margin-bottom:10%;
    }
    .menus>a:hover{
      color: lime;
    }
    .menus{
      float:left;
      font-family: 'Hanna', serif;
      display:inline-block;
      text-align:center;
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
    #button{
      position: absolute;
      margin-left:-25%;
      margin-top:55%;
      z-index:4;
    }
    p{
      margin-bottom: -15px;
    }
    #revision{
      display: inline-block;
      margin-left: 44%;
    }
    #storage{
      position: absolute;
      margin-left:0%;
      margin-top:110%;
      z-index:5;
    }
    </style>
    
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">


  // 삭제하는 데이터 담는 그릇
  var deleteArray = [];
  $(function() {
    $("#sortable1, #sortable2").sortable({
      connectWith:".connectedSortable",
    });


    // 휴지통
    $("#trash-can").droppable({
        drop: function ( event, ui) {
          $(ui.draggable).remove();
          // 배열에 1개씩 삭제 요소 넣기
          deleteArray.push(ui['draggable'][0]['innerText']);
        }
    });
  });



  function save(){
    var data2 = $("#sortable1, #sortable2")[0].innerText;
    var data  = $("#sortable1, #sortable2")[1].innerText;
    var albumNumber = <?php echo $albumNumber; ?>;
      $.ajax({
        url:'/alterAlbumListAction',
        data:{"nullKey":rplLine(data),
              "key":rplLine(data2),
              "albumNumber":albumNumber,
              "deleteArray":deleteArray},
        dataType:'jsonp',
      });
    alert("저장 완료");
    history.go(0);
  }


  function rplLine(value){
      if (value != null && value != "") {
          return value.replace(/\n/g, "\\n");
      }else{
          return value;
      }
  }
  </script>
  
  </head>
  
  <body>
    <div id = "musicMenu">
      <div id = "albumImage">
        <img src='<?php echo "/albumImages/{$imageFile[0]['album_picture']}"; ?>' alt="" width=100% height=100%>
      </div>
      <div class = "menus">
        <h4 id="title"></h4>
        <div><a href="<?php echo "/myPage/album/record/modify/{$sessionUser}/{$albumNumber}"; ?>">노래수정</a></div>
        <div><a href="<?php echo "/ionic/myPage/album/record/play/{$sessionUser}/{$albumNumber}"; ?>">노래재생</a></div>
        <div><a href="/myPage/album">뒤로가기</a></div>
      </div>
    </div>
    
 <div id="main">
  <h2 id="revision">노래수정</h2>
    <div id="sortable1" class="connectedSortable">
      <?php
        for ($i = 0; $i < count($userMusics); $i++) {
          echo "<p class='ui-state-default' >{$userMusics[$i]->subject}</p>";
        }
       ?>
    </div>

    
    <img id="button" src="/img/add-button.png" alt="" width="20" height="20">
      <div id="sortable2" class="connectedSortable">
        <?php
          for ($i = 0; $i < count($allMusics); $i++) {
            echo "<p class='ui-state-highlight'>{$allMusics[$i]->subject}</p>";
          }
        ?>
      </div>
    <script>
      $("#button").click(function () {
        if ($("#sortable2").is(":hidden"))
        {
          $("#sortable2").show("slow");
        }else{
          $("#sortable2").slideUp();
        }
    });
    </script>
  <button id="storage" onClick="save()">저장</button>
  <div id="trash-can">
  </div>
</div>

  </body>
</html>
