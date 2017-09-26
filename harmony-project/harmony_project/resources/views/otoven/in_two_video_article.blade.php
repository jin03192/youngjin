<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Mouse+Memoirs' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/Select2.css?var=<?=filemtime('./css/Select2.css');?>">
    <style media="screen">
    @import url(http://fonts.googleapis.com/earlyaccess/hanna.css);
    
    .point img {
       position:absolute;
       left: 0%;
       top:37px;
       width:40px;
       height:40px;
    }
    
    .font p {
        font-weight:bold;
    }
    
    .imgbox{
      width: 65em;
      height: 35em;
    }
    
    .videobox video:nth-child(n+3){
      margin-left:100px;
    }
    
    img[title="play_button"]{
        position:absolute;
        left:300px;
        top:180px;
        width:50px;
        height:50px;
       
  	}
    
  	.user_comment p:nth-child(n+1) {
  	    position: relative;
  	    display: inline-block;
  	    border: 2px solid #1f8a70;
  	    border-radius: 5px;
  	    padding:5px;
  	}
  	.user_comment img:nth-child(n+1){
  	   position:relative;
  		  width: 75px;
  		  height: 75px;
  		  border-radius: 75px;
  	  	border: 4px solid #1f8a70;
  	} 
  	.user_comment img[title="user_profile2"]{
  	   position:absolute;
  		  top: 87%;
  		  left: 8%;
  	}
  	.user_comment p[title="user_content0"]{
  	   position:absolute;
  		  top: 72%;
  		  left: 17%;
  	}
  	.user_comment img[title="user_profile0"]{
  	   position:absolute;
  		  top: 70%;
  		  left: 8%;
  	}
  	.user_comment img[title="user_profile1"]{
  	   position:absolute;
  		  top: 80%;
  		  right: 14%;
  	}
  	.user_comment p[title="user_content1"]{
  	   position:absolute;
  		  top: 81%;
  		  right: 22%;
  	}
  	.user_comment p[title="user_content2"]{
  	   position:absolute;
  		  top: 88%;
  		  left: 17%;
  	}
  	.first{
      position:relative;
      margin-left:2%;
    }
  	
  	#buttonBox{
  	  position absolute;
  	  margin-top: 60.5%;
  	}
    </style>
 
    
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
    
  <script type="text/javascript">
  var status;
     function play_button_delete(){
       var play_button_id = document.getElementById("play_button");
       if(play_button_id.firstElementChild.id == "play_button_img"){
        play_button_id.removeChild(play_button_id.firstElementChild);
        play_button_id.innerHTML="<img title='play_button' id='Pause_img' src='/img/Pause.png'></img>";
       }else if(play_button_id.firstElementChild.id == "Pause_img"){
        play_button_id.removeChild(play_button_id.firstElementChild);
        play_button_id.innerHTML="<img title='play_button' id='play_button_img' src='/img/Video_Play_Button.png'></img>";
       }
       status = "deleted"
     }
     
     function mouse_over(){
       var play_button_id = document.getElementById("play_button");
       if(!play_button_id.firstElementChild){
         play_button_id.innerHTML="<img title='play_button' id='Pause_img' src='/img/Pause.png'></img>";
       }
       
       status = "created"
     }
     
     function mouse_out(){
       var play_button_id = document.getElementById("play_button");
       if(play_button_id.firstElementChild.id == "Pause_img" && status == "created" && status !== "deleted"){
         play_button_id.removeChild(play_button_id.firstElementChild);
       }
       status = "deleted"
     }
  </script>
  
  </head>
  <body>
    <!--
    |**************************************************************************
    | bandChallenge- Record합주_상단 메뉴부분
    |**************************************************************************
    -->
    <div class="top">
      @include('menu.topmenu')
    </div>
    <div class="imgbox">
      <div class="articlebox" onmouseover="mouse_over();" onmouseout="mouse_out();">
      <?php
      foreach($otoven_videos_imfor as $contents){
        
      $otoven_video_id = $otoven_video_parti::all()->where('otoven_video_id',$contents['id']);
          echo "<div class='videobox'>";
      foreach($otoven_video_id as $otoven_video){
        if(count($otoven_video_id) == 3){
          
           echo" <video title='first' name='anotherVideo[]' src='/uploads/otoven/video/$otoven_video[file_name]' width='200' height='170' controls></video>";
        }else{
         
           echo" <video title='first' name='anotherVideo[]' src='/uploads/otoven/video/$otoven_video[file_name]' width='250' height='250' controls></video>";
           
        }
      
      }
       echo" <br><button type='button' id='before_play'>▶</button>";
        echo"</div>";
       echo" <!--<a href='#' id='play_button' onClick='play_button_delete();'>
          <img title='play_button' id='play_button_img' src='/img/Video_Play_Button.png'></img>
        </a>-->
        
      </div>
      <div class='font'>
        <div class='point'><img src='/img/cross_point_green.png'></img></div>";
        
       

          echo "  <p>제목 : $contents[subject]</p>
                  <p>곡명 : $contents[music_name]</p>";
                  
        
        
         
        for($i=count($user_name)-1;$i>=0;$i--){
            if($i ==count($user_name)-1){
               echo "<p>작곡자 : ";
               echo $user_name[$i];
               echo "</p>";
               
               }else{
                 if($i==count($user_name)-2){
                 echo "  <p>참여자 : ";
                 echo $user_name[$i];
                  echo "</p>";
                }else{
                echo "  <p>참여자 : ";
                echo $user_name[$i].", ";
                echo "</p>";             
              }
              
            }
             
        }
        
          
          echo "
                  <p>장르 : $contents[genre] / BPM : $bpm</p>
                  <p>참여일 : $contents[updated_at]</p>";
                  
               
   
              
                 
               
        for($i=count($user_instrum)-1; $i>=0; $i--){
           
               if($i == count($user_instrum)-1){
                   echo "<p>작곡에 사용된 악기 :";  
                   echo $user_instrum[$i];
                   echo " </p>";
                  }else{
                    if($i==count($user_instrum)-1){
                    echo "<p>작곡에 참여된 악기 : ";
                      echo $user_instrum[$i].", ";
                    }else{
                       echo "<p>작곡에 참여된 악기 : ";
                       echo $user_instrum[$i];
                      }
               }
              
            }
              
          echo  " </p>";
          echo  "</div>";
      
      
          echo "<div class='user_comment'>";  
      
          for($i=0;$i<count($user_img);$i++){
            
          echo "<img title='user_profile{$i}' src='/img/$user_img[$i]'></img>";
           echo "<p title='user_content{$i}'>$user_content[$i]</p>";
          }    
             
         
          echo "</div>";
      
          echo "<div id='buttonBox'>
                <a href='#'>♥ 좋아요</a>
                <a href='#'>다른 합주 $contents[goods]개</a>
                <a href='/otoven/video_collaborate_complete'>이전</a>
                <a href='/otoven_video_ansemble_two/{$contents['id']}'>연주하기</a></div>";
        }
        ?>
       
    </div>
     <script src="/js/video/video.js?var=<?=filemtime('./js/video/video.js');?>"></script>
   <script src="/js/lib/ga.js?var=<?=filemtime('./js/lib/ga.js');?>"></script>
  </body>
   
</html>
                                  