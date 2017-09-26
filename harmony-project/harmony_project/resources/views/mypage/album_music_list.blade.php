<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MUSICQUITOUS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">

    <style type="text/css">
        @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    @import url(http://fonts.googleapis.com/earlyaccess/notosanskr.css);
    @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
      html,body {
        height: 100%;
      }
body {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    margin: 0;
    font-family: Lato, sans-serif;
    color: #222;
    font-size: 0.9em;
}

main {
    flex: 1 0 auto;
    display: flex;
}
.title{
  text-align: center;
}

footer {
    flex: 0 0 90px;
    padding: 10px;
    color: #fff;
    background-color: rgba(61, 100, 158, .9);
}

aside {
    flex: 0 0 40px;
    display: flex;
    flex-direction: column;
    /*justify-content: space-around;*/
    align-items: center;
    background-color: #f2f2f2;
}

aside i.fa {
    font-size: 1.5em;
    padding-top: 40px;
}

aside i.fa:hover {
    transition: .5s;
    transform: scale(1.5);
}

.content {
    display: flex;
    flex: 1 1 auto;
    flex-direction: column;
}

.music-head {
    flex: 0 0 150px;
    display: flex;
    padding: 40px;
    background-color: #4e4e4e;
    background: linear-gradient(hsla(200, 100%, 30%, 0.5),hsla(170, 100%, 30%, 0.5)), url(https://subtlepatterns.com/patterns/grey_wash_wall.png);
}

.music-list {
    flex: 0 5 auto;
    list-style-type: none;
    padding: 5px 10px 0px -0px;
}
ul {
  margin: 0px 0px 0px 0px;
}


li {
    display: flex;
    padding: 0px 0px 0px 10px;
    min-height: 50px;
}

li p {
    flex: 0 0 25%;
}

li .number{
  flex: 0 0 5%;
}


li span.catty-cloud {
    border: 1px solid black;
    font-size: 0.6em;
    padding: 3px;
}

li:nth-child(2n) {
    background-color: #f2f2f2;
}

.catty-music {
    flex: 1 1 auto;
    display: flex;
    flex-direction: column;
    font-weight: 300;
    color: #fff;
    padding-left: 50px;
}

.catty-music div:nth-child(1) {
    margin-bottom: auto;
}

.catty-music div:nth-child(2) {
    margin-top: 0;
}

.catty-music div:nth-child(2) i.fa {
    font-size: 0.9em;
    padding: 0 0.7em;
    font-weight: 300;
}

.catty-music div:nth-child(1) p:first-child {
    font-size: 1.8em;
    margin: 0 0 10px;
}

.catty-music div:nth-child(1) p:not(:first-child) {
    font-size: 0.9em;
    margin: 2px 0;
}

footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.name-track {
    display: flex;
    flex: 1 1 50%;
    align-items: center;
}

.name-track p {
    font-size: 1em;
    margin: 2px 10px;
}

.footer-controls {
    flex: 1 1 50%;
    display: flex;
    justify-content: space-between;
}

.footer-controls i {
    font-size: 1.2em;
}

i:hover {
    cursor: pointer;
    transition: .5s;
    transform: scale(1.5);
}

@media screen and (max-width: 64em) {
    .sm-hide {
        display: none;
    }
    .sm-text-center {
        text-align: center;
    }
    .sm-text-right {
        text-align: right;
    }
    section.content .music-head {
        flex: 0 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 0;
        background-color: #4e4e4e;
    }
    section.content .music-head .catty-music {
        padding: 0;
    }
    .music-head img {
        width: 150px;
    }
    .catty-music div:nth-child(1) p:first-child {
        margin: 20px 0;
        font-size: 1em;
    }
    li p {
        flex: 0 0 50%;
    }
    .footer-controls {
        justify-content: space-around;
    }そのとおり
}

    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">

  function deleteFunc(){
        
        
    var albumNumber = document.getElementById('album_number').value;
    var sessionUser = document.getElementById('session_user').value;
        
      $.ajax({
        url:"/deleteAlbumAction",
        data:{"albumNumber": albumNumber,
              "sessionUser": sessionUser,
        },
        dataType:"jsonp",
      });
      history.go(0);
      location.href="/myPage/album";
    }
    </script>
</head>

<body>
      <header class="">
      @include('mypage.album_topmenu')
    </header>
    <main>
        <aside class="sm-hide">
            <a href="<?php echo "/myPage/album/record/list/{$sessionUser}/{$albumNumber}"; ?>"><i class="fa fa-bars"></i></a>
            <a href="<?php echo "/myPage/album/record/modify/{$sessionUser}/{$albumNumber}"; ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
            <a href="<?php echo "/myPage/album/record/play/{$sessionUser}/{$albumNumber}"; ?>"><i class="fa fa-play-circle" aria-hidden="true"></i></a>
            <i onclick = "deleteFunc()" class="fa fa-times" aria-hidden="true" ></i>
        </aside>
        <section class="content">
            <div class="music-head">
                <!--First list item: contains music details-->
                <!--<img src="http://cps-static.rovicorp.com/3/JPG_500/MI0003/237/MI0003237416.jpg?partner=allrovi.com" width="200px" height="200px" />-->
                <img src='<?php echo "/albumImages/{$imageFile[0]['album_picture']}"; ?>' width="200px" height="150px" />
                <!--Album art-->
                <section class="catty-music">
                    <!--other details of the album-->
                    <div>
                        <p class="sm-text-center"><?php echo $albumMusics[$albumNumber - 1]->album_title; ?></p>
                        <p class="sm-hide"><?php echo $albumMusics[$albumNumber - 1]->album_content; ?></p>
                        
                    </div>
                    <!--<div class="sm-text-center">-->
                        <!--Music controls-->
                    <!--    <i class="fa fa-play"> &nbsp;Play all</i>-->
                    <!--    <i class="fa fa-plus"> &nbsp;Add to</i>-->
                    <!--    <i class="fa fa-ellipsis-h">&nbsp;&nbsp;More</i>-->
                    <!--</div>-->
            </section>
            </div>
            <h1 class="title">ミュージックリスト</h1>
            <!--end .music-head-->
            <!--Second list item: Contains a list of all songs displayed-->
            <?php
              // <a href='/recordbefore/{$userMusics[$listCount]["id"]}'>
              // onClick ='location.href="/"'
              
              for($listCount = 0; $listCount < count($userMusics); $listCount++) {
              if(count($userMusics) != 0){
              ?>
              <ul class="music-list">
                <li>
                <p class="number"><?php echo $listCount+1; ?></p>
                <p><?php echo $userMusics[$listCount]['subject']; ?></p>
                <p class="sm-hide"><?php echo $userMusics[$listCount]['instrument']; ?></p>
                <p class="sm-text-right"><?php echo $partici_name[$listCount]; ?></p>
                <p class="sm-hide"><span class="catty-cloud"><?php echo substr($userMusics[$listCount]['created_at'],0,10); ?></span></p>
                </li>
              </ul>
                <?php
               }
              }
              ?>

        </section>
    </main>

</body>
</html>