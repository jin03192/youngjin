<!DOCTYPE html>

<html>
  <head>
    <meta charset='utf-8'>
    <title>게시판</title>
    <style media="screen">
      #submit{
        position: absolute;
        top: 735px; left: 888px;
      }
      #boardmain{
        margin-top: -300px;
      }
      #titles{
        text-align:center;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  </head>
  
 
  <body>
      <header class="navbar navbar-inverse">
        @include('menu.topmenu')
      </header>
        <div class='os'>
        <table border=2>
               <h2 id="titles">동영상 업로드</h2>
               <div id="boardmain" style="padding :330px;">
                   <form action='/otoven_video_recording_write/{{$write['result']}}' method='post' enctype='multipart/form-data'>
                       <input type="hidden" name="board_id" value="{{$write['board_id']}}"/>
                     <div class="form-group">
                       <label>제목</label>
                       <input type="text" name='video_subject' class="form-control">
                     </div>
                     <div class="form-group">
                       <label>음악 이름</label>
                       <input type="text" name='video_music_name' class="form-control">
                     </div>
                     <input type="hidden" name="bpm" value="{{$write['slider_value_view']}}"/>
                      <input type="hidden" name="volume" value="{{$write['slider_volume_view']}}"/>
                     <div>
                      <select name="instrument">
                      <option value="">악기 선택</option>
                      <option value="통기타">통기타</option>
                      <option value="피아노">피아노</option>
                      <option value="일렉기타">일렉기타</option>
                      <option value="베이스">베이스</option>
                      </select>
                      <select name="genre">
                      <option value="">장르선택</option>
                      <option value="OST">OST</option>
                      <option value="POP">POP</option>
                      <option value="Classic">Classic</option>
                      <option value="ROCK">ROCK</option>
                      </select>
                      
                    </div>
                     <div class="form-group">
                       <label>내용</label>
                        <textarea rows="15" cols="40" name='video_content' class="form-control"></textarea>

                     </div>
                      <input type='hidden' name='_method' value='PUT'>
                      <input id="submit" type="submit" value='등록'>
                    
                    
                     {{csrf_field()}}
                   </form>
               </div>
          </div>
        </body>
      </html>
