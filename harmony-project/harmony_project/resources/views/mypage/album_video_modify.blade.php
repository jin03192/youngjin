<!doctype html>
<html>
<head>d
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
  <style>
  #trash-can{
    border:1px solid black;
    width:100px; height:70px;
    margin: -38px 650px;
  }
  #sortable1 {
    font-size: 20px;
    font-family: 'Hanna', serif;
    text-align: center;
    border-radius: 20px;
    margin: 50px 0 0 50px;
    border: 2px solid #000000;
    width: 280px; height: 390px;
  }
  #sortable2{
      border-radius: 20px;
      font-size: 23px;
      text-align: center;
      font-family: 'Hanna', serif;
      border: 2px solid;
      position: absolute;
      top: 120px; left: 470px;
      width:280px; height:390px;
  }


  #trash-can {
   background-image: url('/img/trashCanClosed.png');
   background-size: 100px 70px;
  }

  #trash-can:hover {
     background-image: url('/img/trashCanOpen.png');
     background-size: 100px 70px;
  }



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
    border-radius: 18px;
    border: 3px solid #7FC7AF;
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
    #button{
      position: absolute;
      top: 280px; left: 440px;
      z-index:5;
    }
    p{
      margin-bottom: -15px;
    }
    #revision{
      display: inline-block;
      margin-left: 44%;
    }
    #storage{
      margin-top: 20px;
      margin-lefT: 380px;
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
    <a href="#">Record</a> <a href="#">Video</a>
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

    
    <img id="button" src="/img/add-button.png" alt="" width="50" height="50">
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
  
  <hr>
  
  
</div>
</html>