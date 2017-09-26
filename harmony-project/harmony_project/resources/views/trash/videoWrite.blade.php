@extends('layouts.layout')

@section('content')
  <style>
    .hiddenform{
        position: relative;
    }
    .viewform{
        position: relative;
        top:200px;
        left:15%;
        border-radius: 15px;
        background-color: #f2f2f2;
        width:70%;
        height:1000px;
    }
    .viewform>p{
        font-size:20px;
        position:relative;
        margin-left:300px;
        top:60px;
        padding-top:10px;
    }
    #subject, textarea {
        position:relative;
        top:30px;
        width: 50%;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 30px;
        margin-left:300px;
        resize: vertical;
        font-size:20px;
    }
    #subject{
      height:50px;
    }
    .optionlist{
        position:relative;
        top:30px;
        width: 50%;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 30px;
        margin-left:300px;
        resize: vertical;
    }
    textarea{
        height:300px;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        width: 740px;
        padding:10px 0px;
        font-size:20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        position:absolute;
        top:900px;
        left:20%;
    }
    
    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>

    <!--
    |**************************************************************************
    | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
    |**************************************************************************
     -->
    <div class="top">
      @include('menu.topmenu')
    </div>
    <!--
    |**************************************************************************
    | bandChallenge- Record합주_미리듣기/악보출력
    |**************************************************************************
     -->
    
     <div class="hiddenform">
     <table border=2>
               <h2 id="titles">동영상 업로드</h2>
               <div id="boardmain" style="padding :330px;">
                   <form action='/bandChallenge_video_insert/{{$write['result']}}' method='post' enctype='multipart/form-data'>
                       <input type="hidden" name="board_id" value="{{$write['board_id']}}"/>
                     <div class="form-group">
                       <label>제목</label>
                       <input type="text" name='video_subject' class="form-control">
                     </div>
                     <div class="form-group">
      
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
        </form>
    </div>
@endsection