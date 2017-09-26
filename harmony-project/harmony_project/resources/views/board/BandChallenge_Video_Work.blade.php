@extends('layouts.layout')

@section('content')

<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="/css/Change2.css?var=<?=filemtime('./css/Change2.css');?>">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="/js/Change2.js?var=<?=filemtime('./js/Change2.js');?>"></script>
        <script type="text/javascript" src="/js/BandCallenge_VideoController.js?var=<?=filemtime('./js/BandCallenge_VideoController.js');?>"></script>

        <!--<script type="text/javascript" src="/js/Change2.js"></script>-->
     <script>
     window.onload=function(){
      /*controller에서 데이터를 배열로 받아오기 때문에 삭제예정*/
      var view_array    = [];
      var first_view    = "/img/dday.jpg";
      var second_view   = "/img/fools.jpg";
      var third_view    = "/video/cat.mp4";
        view_array.push(first_view);
        view_array.push(second_view);
        view_array.push(third_view);

        for(var cnt=0;cnt<view_array.length;cnt++){
            var extension = view_array[cnt].split('.');
            if(cnt == 0){
                var first_id = document.getElementById("first_view");
                if(extension[1] == "jpg"){
                    /*확장자가 이미지일 경우*/
                    first_id.innerHTML = "<img src='" + view_array[cnt] + "' id='first_article'/>";

                }else if(extension[1] == "mp4"){
                    /*확장자가 동영상일 경우*/
                    first_id.innerHTML = "<video src='" + view_array[cnt] + "' id='first_article' controls></video>";
                }
            }else if(cnt == 1){
                var second_id = document.getElementById("second_view");
                if(extension[1] == "jpg"){
                    /*확장자가 이미지일 경우*/
                    second_id.innerHTML = "<img src='" + view_array[cnt] + "' id='second_article'/>";
                }else if(extension[1] == "mp4"){
                    /*확장자가 동영상일 경우*/
                    second_id.innerHTML = "<video src='" + view_array[cnt] + "' id='second_article' controls></video>";
                }
            }else if(cnt == 2){
                var third_id = document.getElementById("third_view");
                if(extension[1] == "jpg"){
                    /*확장자가 이미지일 경우*/
                    third_id.innerHTML = "<img src='" + view_array[cnt] + "' id='third_article'/>";
                }else if(extension[1] == "mp4"){
                    /*확장자가 동영상일 경우*/
                    third_id.innerHTML = "<video src='" + view_array[cnt] + "' id='third_article' controls></video>";
                }
            }


        }


    }
     var first_id
    function change_position(position){
            if(position == "second"){
                first_id    = document.getElementById("first_view");
                second_id   = document.getElementById("second_view");

                first_article_id   = document.getElementById("first_article");
                second_article_id   = document.getElementById("second_article");

                first_clonevalue  = first_article_id.cloneNode(true);
                second_clonevalue  = second_article_id.cloneNode(true);

                first_clonevalue.setAttribute('id','second_article');
                second_clonevalue.setAttribute('id','first_article');

                first_id.removeChild(first_id.firstElementChild);
                second_id.removeChild(second_id.firstElementChild);

                first_id.appendChild(second_clonevalue);
                second_id.appendChild(first_clonevalue);

            }else if(position == "third"){
                first_id    = document.getElementById("first_view");
                third_id    = document.getElementById("third_view");

                first_article_id   = document.getElementById("first_article");
                third_article_id   = document.getElementById("third_article");

                first_clonevalue  = first_article_id.cloneNode(true);
                third_clonevalue  = third_article_id.cloneNode(true);

                first_clonevalue.setAttribute('id','third_article');
                third_clonevalue.setAttribute('id','first_article');

                first_id.removeChild(first_id.firstElementChild);
                third_id.removeChild(third_id.firstElementChild);

                first_id.appendChild(third_clonevalue);
                third_id.appendChild(first_clonevalue);
            }
        }
  </script>
    </head>
  <body>
    @include('menu.topmenu')
<div class="container align">
  <div class="row "> 
    <div class="navfloat">
      @include('board.BandChallenge_Navi')    
    </div>
  </div>
    <div >
        <a href="#" id="first_view">

        </a>
    </div>
    <div>
        <a href="#" id="second_view" onclick="change_position('second');">

        </a>
    </div>
    <div>
        <a href="#" id="third_view" onclick="change_position('third');">

        </a>
    </div>


    <div id="Below">
    <div id="buttons">
    <button type="button" name="start">시작</button>
    <button type="button" name="pause">일시정지</button>
    <button type="button" name="stop">정지</button>
    <button type="button" name="back">돌아가기</button><br>
    </div>
    <img id="img1" src="/img/song.png" width="483" height="50">
        <img id="img2" src="/img/song.png" width="483" height="50">
        <button value="이미지토글" onclick="imgToggle()"></button>
        <div class="range-slider">
        <p id="bpm">BPM</p>
          <font  class="range-slider__value" size = 2 id = "slider_value_view">0</font>
          <input id="select"class="range-slider__range" oninput="ShowSliderValue(this.value)" type="range" min="0" max="100" value="100">
        </div>
    </div>
  </body>
</html>
<script>
    var cnt=1;
    function imgToggle(){
        var img1 = document.getElementById("img1");
        var img2 = document.getElementById("img2");
        if(cnt%2==1){
            img1.src="/img/song2.png";
            img2.src="/img/song1.png";
        }
        else{
            img1.src="/img/song1.png";
            img2.src="/img/song2.png";
        }
        c++;
    }
</script>

@endsection