@extends('layouts.layout')

@section('content')
    <style>
    /*
     |**************************************************************************
     | 주파수 상자
     |**************************************************************************
    */
    .main-controls{
        position:relative
    }
    .visualizer{
        top: 200px;
        left:700px;
        width:400px;
        position:absolute;
        height:300px;
    }
    .oto{
        position:absolute;
        left:50px;
        top:200px;
    }
    .oto img{
        width:200px;
        border-radius:70px;
    }
    div[name="count_label"]{
        position:absolute;
        top: 300px;
        right:950px;
        font-size:80px;
        
    }
    /*
     |**************************************************************************
     | 버튼 스타일
     |**************************************************************************
    */
    
    button[name="btn"]{
        border: none; /* Remove borders */
        color: white; /* Add a text color */
        padding: 14px 28px; /* Add some padding */
        cursor: pointer; /* Add a pointer cursor on mouse-over */
        position:relative;
        left:570px;
        width:150px;
        text-align:center;
        margin-right:20px;
        margin-top:600px;
        font-size:20px;
    }
    
    .record {background-color: #4CAF50;} /* Green */
    .record:hover {background-color: #46a049;}
    
    .pause {background-color: #FF8224;} /* orange */
    .pause:hover {background-color: #ED4C00;}
    
    .stop {background-color: #f44336;} /* Red */ 
    .stop:hover {background: #da190b;}
    
    .back {background-color: #DBDBDB;} /* Green */
    .back:hover {background-color: #939393;}
    
    section.sound-clips{
        position:absolute;
        top:1000px;
        left:190px;
        width:500px;
    }
    .sound-clips>article{
        position:relative;
        top:50%;
        width:700px;
        margin-top:20px;
    }
    .sound-clips audio{
        width:400px;
    }
    .sound-clips button{
        border: none; /* Remove borders */
        color: white; /* Add a text color */
        padding: 14px 0; /* Add some padding */
        cursor: pointer; /* Add a pointer cursor on mouse-over */
        position:relative;
        width:15%;
        left:2%;
        text-align:center;
        font-size:20px;
        background-color:#1affa3;
        margin-right:15px;
    }
    .sound-clips button:hover{
        background-color:#00663d;
    }
</style>
  <body>
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
    | bandChallenge- Record합주_악보/BPM/주파수
    |**************************************************************************
     -->
    <section class="main-controls">
        <div>
            <div class="oto">
                <img src="/img/KHJ_Profile_Picture.png" alt="userimg"></img>
            </div>
            <canvas class="visualizer"></canvas>
            <div name="count_label">
    
            </div>
        </div>
        
    <!--
    |**************************************************************************
    | bandChallenge- Record합주_버튼
    |**************************************************************************
     -->
        <button name="btn" class="record">녹음시작</button>
        <button name="btn" class="pause">일시정지</button>
        <button name="btn" class="stop">정지</button>
        <button name="btn" class="back">돌아가기</button>
        <button name="btn" class="stop">업로드</button>
    </section>
    
    
    <section class="sound-clips">

    </section>
    
    <?php
    echo "<input name='otoven_board_id' type='hidden' value=$otoven_board_id>";

    if( !empty($particis) ){

        foreach ($particis as $partici){
            $partici_src = '/uploads/otoven/audio/'.$partici;

            echo "<input name='participants[]' type='hidden' value='$partici'>
                <audio name='music_partici[]' controls style='display: none'>
                    <source src='$partici_src' type='audio/mpeg'>
                </audio><br>";
        }
    }
    //선택된 악기 태그들 생성
    ?>
  
        
    <script src="/scripts/playrtc.js"></script>
    <script src="/scripts/otoven_app.js"></script>
@endsection