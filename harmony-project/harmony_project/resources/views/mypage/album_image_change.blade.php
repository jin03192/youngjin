<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MUSICQUITOUS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    
  </head>
  <body>
        
        <p>현재 이미지</p>
        <img src ='/albumImages/<?php echo $int["album_picture"]; ?>' width=100px; height=100px;>
        
        <p>수정된 이미지</p>
        
        <form action='/modifyAlbumAction' method='post' enctype='multipart/form-data'>
          <input type='file' id="inputFile" name="album_image"><br>
          <img id="image_upload_preview" src="http://placehold.it/100x100" width=100px; height=100px; alt="your image" />
          <br>
          <input type="hidden" name="album_number" value="{{$int['albumNumber']}}"/>
          <input type="hidden" name="user_name" value="{{$int['sessionUser']}}"/>
          <input id="submit" type="submit" value='사진변경'>
        </form>
  <script type="text/javascript">
      function readURL(input) {
        
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#image_upload_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputFile").change(function () {
        readURL(this);
    });

    </script>      
  </body>
</html>