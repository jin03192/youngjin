<!DOCTYPE html>

@extends('layouts.layout')

@section('content')
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        
        <link rel="stylesheet" href="/css/Change4.css?var=<?=filemtime('./css/Change4.css');?>">
        <link rel="stylesheet" href="/css/main.css?var=<?=filemtime('./css/main.css');?>" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="/js/Change2.js?var=<?=filemtime('./js/Change2.js');?>"></script>
        <!--<script type="text/javascript" src="/js/Change2.js"></script>-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        
         
    <style type="text/css">
        div[title="countLabel"]{
            color:red;
            font-size:200px;
            text-align:center;
        }
        .visualizer{
            position:absolute;
            top:25%;
            left:2.5%;
        }
    </style>
     <script>
    
    function stop_event(temp){
        /*정지 버튼을 누르면 캠화면이 사라지고,
        DB에서 악보와 방금 저장된 동영상 파일을 불러와서 
        화면의 가장 좌측과 중앙에 위치시킨다.
        그리고 캠 화면은 가장 우측의 작은 크기로 이동시킨다.*/
        
      var cam_view_id = document.getElementById("cam_view");
      var second_id   = document.getElementById("second_view");
      var visualizer_id   = document.getElementsByName("visualizer");
      
      cam_view_clonevalue  = cam_view_id.firstElementChild.cloneNode(true);
      
      cam_view_id.removeChild(cam_view_id.firstElementChild);
      //visualizer_id.removeChild(visualizer_id.firstElementChild);
      cam_view_clonevalue.setAttribute('id','second_article');
      second_id.appendChild(cam_view_clonevalue);
      
      var view_array    = [];
      var first_view    = "/img/c.jpg";
      var second_view   = temp;
      
        view_array.push(first_view);
        view_array.push(second_view);
        
        
        for(var cnt=0;cnt<view_array.length;cnt++){
            var extension = view_array[cnt].split('.');
            var extension1 = view_array[cnt].split(':');
            if(cnt == 0){
                var first_id = document.getElementById("first_view");
                if(extension[1] == "jpg"){
                    /*확장자가 이미지일 경우*/
                    first_id.innerHTML = "<img src='" + view_array[cnt] + "' id='first_article'/>";
                    
                }else if(extension[1] == "mp4"){
                    /*확장자가 동영상일 경우*/
                    first_id.innerHTML = "<video src='" + view_array[cnt] + "' id='first_article' controls></video>";
                }
            }else if(cnt == 2){
                var second_id = document.getElementById("second_view");
                if(extension[1] == "jpg"){
                    /*확장자가 이미지일 경우*/
                    second_id.innerHTML = "<img src='" + view_array[cnt] + "' id='second_article'/>";
                }else if(extension[1] == "mp4"){
                    /*확장자가 동영상일 경우*/
                    second_id.innerHTML = "<video src='" + view_array[cnt] + "' id='second_article' controls></video>";
                }
            }else if(cnt == 1){
                var third_id = document.getElementById("third_view");
                if(extension[1] == "jpg"){
                    /*확장자가 이미지일 경우*/
                    third_id.innerHTML = "<img src='" + view_array[cnt] + "' id='third_article'/>";
                }else if(extension[1] == "mp4"){
                    /*확장자가 동영상일 경우*/
                    third_id.innerHTML = "<video src='" + view_array[cnt] + "' id='third_article' controls></video>";
                }else if(extension1[0] == "blob"){
                    /*확장자가 동영상일 경우*/
                    third_id.innerHTML = "<video src='" + temp + "' id='third_article' controls autoplay></video>";
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
  
   <!--
    |**************************************************************************
    | 음파 표시
    |**************************************************************************
    -->
  
  <canvas class="visualizer" id="visualizer"></canvas>

    <script>


        var canvas = document.querySelector('.visualizer');
        var audioCtx = new (window.AudioContext || webkitAudioContext)();
        var canvasCtx = canvas.getContext("2d");
        var mediaRecorder;

        canvas.style.border = "1px solid black";

        if (navigator.getUserMedia) {


            navigator.getUserMedia (

                {
                    audio: true
                },

                // Success callback
                function(stream) {
                    mediaRecorder = new MediaRecorder(stream);

                    visualize(stream);

                    mediaRecorder.ondataavailable = function(e) {


                        var clipContainer = document.createElement('article');

                        var audio = document.createElement('audio');
                        var deleteButton = document.createElement('button');
                        var saveButton = document.createElement('button');

                        var audioControl = document.getElementsByName('tt');

                        clipContainer.classList.add('clip');
                        audio.setAttribute('controls', '');
                        deleteButton.innerHTML = "Delete";
                        saveButton.innerHTML = "Save";

                        clipContainer.appendChild(audio);

                        clipContainer.appendChild(deleteButton);
                        clipContainer.appendChild(saveButton);
                        soundClips.appendChild(clipContainer);

                        var audioURL = window.URL.createObjectURL(e.data);
                        var te = e.data;
                        var fr = new FileReader();


                        audio.src = audioURL;


                    }
                },

                // Error callback
                function(err) {

                }
            );
        }

        function visualize(stream) {
            var source = audioCtx.createMediaStreamSource(stream);

            var analyser = audioCtx.createAnalyser();
            analyser.fftSize = 2048;
            var bufferLength = analyser.frequencyBinCount;
            var dataArray = new Uint8Array(bufferLength);

            source.connect(analyser);
            //analyser.connect(audioCtx.destination);

            var WIDTH = canvas.width;
            var HEIGHT = canvas.height;

            draw();

            function draw() {

                requestAnimationFrame(draw);

                analyser.getByteTimeDomainData(dataArray);

                canvasCtx.fillStyle = 'rgb(255, 255, 255)';
                canvasCtx.fillRect(0, 0, WIDTH, HEIGHT);

                canvasCtx.lineWidth = 2;
                canvasCtx.strokeStyle = 'rgb(255, 255, 0)';

                canvasCtx.beginPath();

                var sliceWidth = WIDTH * 1.0 / bufferLength;
                var x = 0;


                for(var i = 0; i < bufferLength; i++) {

                    var v = dataArray[i] / 128.0;
                    var y = v * HEIGHT/2;

                    if(i === 0) {
                        canvasCtx.moveTo(x, y);
                    } else {
                        canvasCtx.lineTo(x, y);
                    }

                    x += sliceWidth;
                }

                canvasCtx.lineTo(canvas.width, canvas.height/2);
                canvasCtx.stroke();

            }

        }


    </script>

    <!----------------------------음파 표시 End-------------------------------->
    
    
   <!--
    |**************************************************************************
    | http -> https 전환
    |**************************************************************************
    -->
    <script type="text/javascript">
    if (document.location.protocol == 'http:') {
    document.location.href = document.location.href.replace('http:', 'https:');
    }
    </script>
    
    </head>
  <body>
      <div class="top">
          @include('menu.topmenu')
      </div>
    
    <div >
        <input type="hidden" name='board_id' value={{$id}}>
        <a href="#" id="first_view">
            
        </a>
    </div>
    <div>
        <a href="#" id="second_view" onclick="change_position('second');"> 
        </a>
    </div>
    <div>
        <a href="#" id="third_view"  onclick="change_position('third');"> 
            <video id="recorded" autoplay loop></video>
        </a>
    </div>
    <div>
        <a href="#" id="cam_view" >
            <video id="gum" class="gum" id="cam_article" autoplay muted></video>
        </a>
    </div>
    
    
    <div id="Below">
    <div name="countLabel" title="countLabel"></div>
    <div id="buttons">
        <button type="button" id="record" >녹화시작</button>
        <button type="button" id="play" >정지</button>
        <button type="button" id="download" >다운로드</button>
        <button type="button" id="upload">업로드</button>
        <button type="button" onclick="Return();' ">돌아가기</button><br>
    </div>
    
    <div class="range-slider">
        <input type="button" name="" value="BPM정지" onclick="bpmStop()"/>
        <p id="bpm">BPM</p>
          <input id="bpm_bar" class="range-slider__range" value={{$bpm}} 
          oninput="ShowSliderValue(this.value)" 
          onclick="metronomeStop(this.value)"  
          onmouseup="metronomeStart()" type="range" min="60" max="250" >
          <font  class="range-slider__value" size = 2 id = "slider_value_view">{{$bpm}}</font>

        <p id="volume">Volume</p>
          <input id="volume_bar" class="range-slider__range" 
          oninput="ShowVolume(this.value)" 
          onclick="metronomeStop(null,this.value)"
          onmouseup="metronomeStart()"
          type="range" min="0" max="100" value="70">
          <font  class="range-slider__value" size = 2 id = "slider_volume_view">70</font>
        </div>
    </div>
    
    <script src="/js/video/video.js?var=<?=filemtime('./js/video/video.js');?>"></script>
    <script src="/js/lib/ga.js?var=<?=filemtime('./js/lib/ga.js');?>"></script>
  </body>
</html> 
@endsection