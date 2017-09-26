<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
    <link href="/css/recordwork_video.css?var=<?=filemtime('./css/recordwork_video.css');?>" rel="stylesheet" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/BandChallenge_Controller.js"></script>
     <style type="text/css">
         .video_view {
             position: relative;
             display:inline-block;
             left:25%;
             top:100px;
         }
         .wave {
             position: relative;
             display:inline-block;
             left:-55%;
             top:-300px;
         }
         .range-slider {
             position:relative;
             display:block;
             top:-1350px;
             left: -650px;
         }
     </style>
 </head>
  <body>
    <div class="top">
      @include('menu.topmenu')
    </div>
    <input type="hidden" name='board_id' value={{$id}}>
    <div >
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
        <a href="#" id="recorded_view"  >
           
            <video src="/uploads/otoven/video/{{$video_file_name}}" name="anotherVideo[]" class="recorded_view" controls></video>
             
        </a>
    </div>
    <div>
        <a href="#" id="cam_view" >
            <video id="gum" class="cam_view" autoplay muted></video>
        </a>
    </div>
    <div>
        <a href="#" id="note_view" >
            <img src="/img/c.jpg" class="note_view"></img>
        </a>
    </div>
    

    
    <div id="Below" class="buttons">
    <div name="countLabel" title="countLabel"></div>
    <div id="buttons" >
        <button type="button" id="record">녹화시작</button>
        <button type="button" id="play" >정지</button>
        <button type="button" id="download" >다운로드</button>
        <button type="button" id="upload">업로드</button>
        <button type="button" id="back" onclick="Return();' ">돌아가기</button>
    </div>
    

    <img id="song" src="/img/song.png" width="483" height="50">
        <div class="range-slider">
        <p id="bpm">BPM</p>
          <font  class="range-slider__value" size = 2 id = "slider_value_view">0</font>
          <input id="select"class="range-slider__range" oninput="ShowSliderValue(this.value)" type="range" min="0" max="100" value="100">
        </div>
    </div>
    <script src="/js/video/video.js?var=<?=filemtime('./js/video/video.js');?>"></script>
    <script src="/js/lib/ga.js?var=<?=filemtime('./js/lib/ga.js');?>"></script>
  </body>
</html>
