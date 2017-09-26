
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
        width:700px;
        position:absolute;
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
        left:10%;
        width:20%;
        text-align:center;
        margin-right:30px;
        margin-top:55%;
    }
    
    .record {background-color: #4CAF50;} /* Green */
    .record:hover {background-color: #46a049;}
    
    .stop {background-color: #f44336;} /* Red */ 
    .stop:hover {background: #da190b;}
    
    .sound-clips>input{
        position:absolute;
        top:100px;
    }
</style>
 <header class="navbar navbar-inverse">
    @include('menu.topmenu')
  </header>

    <section class="main-controls">
        <div>
            <canvas class="visualizer"></canvas>
            <div name="count_label" style="">
    
            </div>
        </div>
        <button name="btn" class="record">Record</button>
        <button name="btn" class="stop">Stop</button>
    </section>


    <section class="sound-clips">

    </section>

    <?php
    echo "<input name='midi_id' type='hidden' value=$midi[id]>";
    echo "<input name='band_board_id' type='hidden' value=$band_board_id>";

    foreach ($insts as $inst){
        $inst_src = '/midi/'.$midi['path'].'/'.$inst;

        echo "<input name='instruments[]' type='hidden' value='$inst'>
                <audio name='music_inst[]' controls style='display: none'>
                    <source src='$inst_src' type='audio/mpeg'>
                </audio><br>";
    }

    if( !empty($particis) ){

        foreach ($particis as $partici){
            $partici_src = '/uploads/bandChallenge/audio/'.$partici;

            echo "<input name='participants[]' type='hidden' value='$partici'>
                <audio name='music_partici[]' controls style='display: none'>
                    <source src='$partici_src' type='audio/mpeg'>
                </audio><br>";
        }
    }
    //선택된 악기 태그들 생성
    ?>

    <script src="/scripts/playrtc.js"></script>
    <script src="/scripts/app.js"></script>


@endsection

