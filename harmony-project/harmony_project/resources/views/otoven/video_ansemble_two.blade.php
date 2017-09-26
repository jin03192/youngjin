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
            margin-left:33%;
            margin-top:-80%;
            
        }
         #buttons{
        position: relative;
        margin-top: 50em;
      }
    </style>
     <script>
     window.onload=function(){
      /*controller에서 데이터를 배열로 받아오기 때문에 삭제예정*/
     
        
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
            }else if(position == "fourth"){
                first_id    = document.getElementById("first_view");
                fourth_id    = document.getElementById("fourth_view");
                
                first_article_id   = document.getElementById("first_article");
                fourth_article_id   = document.getElementById("fourth_article");
                
                first_clonevalue  = first_article_id.cloneNode(true);
                fourth_clonevalue  = fourth_article_id.cloneNode(true);
                
                first_clonevalue.setAttribute('id','fourth_article');
                fourth_clonevalue.setAttribute('id','first_article');
                
                first_id.removeChild(first_id.firstElementChild);
                fourth_id.removeChild(fourth_id.firstElementChild);
                
                first_id.appendChild(fourth_clonevalue);
                fourth_id.appendChild(first_clonevalue);
            }else if(position == "fifth"){
                first_id    = document.getElementById("first_view");
                fifth_id    = document.getElementById("fifth_view");
                
                first_article_id   = document.getElementById("first_article");
                fifth_article_id   = document.getElementById("fifth_article");
                
                first_clonevalue  = first_article_id.cloneNode(true);
                fifth_clonevalue  = fifth_article_id.cloneNode(true);
                
                first_clonevalue.setAttribute('id','fifth_article');
                fifth_clonevalue.setAttribute('id','first_article');
                
                first_id.removeChild(first_id.firstElementChild);
                fifth_id.removeChild(fifth_id.firstElementChild);
                
                first_id.appendChild(fifth_clonevalue);
                fifth_id.appendChild(first_clonevalue);
            }
        }
  </script>
    </head>
  <body>
    @include('menu.topmenu')
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
            <video id="recorded"  loop></video>
        </a>
    </div>
    <div>
        <a href="#" id="fourth_view" onclick="change_position('fourth');"> 
           
        </a>
    </div>
    <div>
        <a href="#" id="fifth_view" onclick="change_position('fifth');"> 
           
        </a>
    </div>
   
        <?php 
            for($i=0; $i<count($file_name); $i++){
                echo "<div>
                        <a href='#' id='recorded_view{$i}'>
                            <video src='/uploads/otoven/video/$file_name[$i]' class='recorded_view{$i}' name='anotherVideo[]' controls></video>
                        </a>
                      </div>
                    ";
                    
            $video_path{$i} = "/uploads/otoven/video/$file_name[$i]";
            }
            //배열값으로 만들어서 js에 던져줄거임.
           $video_path_array = array();
            for($i=0; $i<count($file_name); $i++){
             array_push($video_path_array,$video_path{$i});
            }
        ?>
            
    <div>
        <a href="#" id="cam_view" >
            <video id="gum" class="cam_view" muted></video>
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
       
        <button type="button" id="record" >녹화시작</button>
        <button type="button" id="play" >정지</button>
        <button type="button" id="download" >다운로드</button>
        <button type="button" id="upload">업로드</button>
        <button type="button" onclick="Return();' ">돌아가기</button><br>
    </div>
    

    
       
    </div>
    <script src="/js/video/video.js?var=<?=filemtime('./js/video/video.js');?>"></script>
    <script src="/js/lib/ga.js?var=<?=filemtime('./js/lib/ga.js');?>"></script>
    <script>    
         function stop_event(temp){
        var recorded_view0_id = document.getElementById("recorded_view0");
        var recorded_view1_id = document.getElementById("recorded_view1");
        var recorded_view2_id = document.getElementById("recorded_view2");
        var cam_view_id = document.getElementById("cam_view");
        var note_view_id = document.getElementById("note_view");
        
        recorded_view0_id.removeChild(recorded_view0_id.firstElementChild);
        recorded_view1_id.removeChild(recorded_view1_id.firstElementChild);
        recorded_view2_id.removeChild(recorded_view2_id.firstElementChild);
        cam_view_id.removeChild(cam_view_id.firstElementChild);
        note_view_id.removeChild(note_view_id.firstElementChild);
        /*정지 버튼을 누르면 캠화면이 사라지고,
        DB에서 악보와 방금 저장된 동영상 파일을 불러와서 
        화면의 가장 좌측과 중앙에 위치시킨다.
        그리고 캠 화면은 가장 우측의 작은 크기로 이동시킨다.*/
      var view_array    = [];
      var js_video_path_array = <?php echo json_encode($video_path_array)?>;
      var first_view    = "/img/c.jpg";
      var second_view   = temp;
      var third_view    = js_video_path_array[0];
      var fourth_view   = js_video_path_array[1];
      var fifth_view    = js_video_path_array[2];
   
        view_array.push(first_view);
        view_array.push(second_view);
        view_array.push(third_view);
        view_array.push(fourth_view);
        view_array.push(fifth_view);
        
        
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
                    third_id.innerHTML = "<video src='" + temp + "' id='third_article' controls ></video>";
                }
            }else if(cnt == 3){
                var fourth_id = document.getElementById("fourth_view");
                if(extension[1] == "jpg"){
                    /*확장자가 이미지일 경우*/
                    fourth_id.innerHTML = "<img src='" + view_array[cnt] + "' id='fourth_article'/>";
                }else if(extension[1] == "mp4"){
                    /*확장자가 동영상일 경우*/
                    fourth_id.innerHTML = "<video src='" + view_array[cnt] + "' id='fourth_article' controls></video>";
                }
            }else if(cnt == 4){
                var fourth_id = document.getElementById("fifth_view");
                if(extension[1] == "jpg"){
                    /*확장자가 이미지일 경우*/
                    fourth_id.innerHTML = "<img src='" + view_array[cnt] + "' id='fifth_article'/>";
                }else if(extension[1] == "mp4"){
                    /*확장자가 동영상일 경우*/
                    fourth_id.innerHTML = "<video src='" + view_array[cnt] + "' id='fifth_article' controls></video>";
                }
            }
            
            
            
        }
    }
    </script>
  </body>
  
</html> 
@endsection