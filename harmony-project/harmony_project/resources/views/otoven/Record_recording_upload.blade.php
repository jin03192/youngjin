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
        <form action="/otoven/recordingInsert" method="post">
            <input name = file_name type = hidden value="{{$file['file_name']}}"/>
            <input name = selected_particis type = hidden value="{{$file['selected_particis']}}"/>
            <input name = otoven_board_id type = hidden value="{{$file['otoven_board_id']}}"/>
     {{ csrf_field() }}
    
            <div class="viewform">
                <p>제목</p>
                <input id="subject" name = subject type = text required/>
                <p>음악이름</p>
                <input id="subject" name = musicname type = text required/>
                <div class="optionlist">
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
                <p>내용</p>
                <textarea name = contents required>
                </textarea>
                <div class="upload">
                    <input type="submit" value="등록" />
                </div>
            </div>
        </form>
    </div>
@endsection