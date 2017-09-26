
@extends('layouts.layout')

@section('content')
    <script src="/scripts/same_time_play.js"></script>
    
    <style>
        /*
        |**************************************************************************
        | 음원에 대한 정보들의 위치를 지정해주고 경계선을 그어준다.
        |**************************************************************************
        */
        .imgbox{
            width:30%;
            font-family: Mouse Memoirs, Hanna, gulim;
            position: absolute;
            top: 35%; left: 27%;
            border: 8px solid #7ABA66;
            border-radius: 10px;
            background-color: white;
          }
          .imgbox>img{
            float:left;
            margin: 20px;
            width:50%;
            height:50%;
          }
          /*
          |**************************************************************************
          | p태그의 padding 및 글자크기 지정
          |**************************************************************************
          */
          .font{
            padding-top:15%;
            padding-bottom:10%;
            font-size: 30px;
           }
           /*
            |**************************************************************************
            | 버튼의 이미지와 이벤트 및 글자크기를 지정해준다
            |**************************************************************************
            */
            form>#buttonBox{
              margin-top: 0px;
              margin-left: 5px;
              background:#1AAB8A;
              color:white;
              border:none;
              position:relative;
              height:30px;
              font-size:20px;
              padding:0 0.8em;
              cursor:pointer;
              /*transition:400ms ease all;*/
              /*outline:none;*/
            }
            /*
            |**************************************************************************
            | 마우스가 올려 졌을 때의 색상을 지정
            |**************************************************************************
            */
            form>#buttonBox:hover{
              background:#fff;
              color:#1AAB8A;
            }
            /*
            |**************************************************************************
            | 마우스가 올려 졌을 때 위아래 나타나는 선의 위치를 지정해준다.
            |**************************************************************************/
            form>#buttonBox:before,form>#buttonBox:after{
              content:'';    /*선택 요소의 앞이나 뒤에 컨텐트를 붙인다.*/
              position:absolute;
              top:0;
              right:0;
              height:2px;
              width:0;
              background: #1AAB8A;
              text-decoration: none;
              /*transition:400ms ease all;*/
            }
            /*
            |**************************************************************************
            |  마우스가 버튼에 올려졌을 때 선을 나타나게 해주는 css
            |**************************************************************************
            */
            form>#buttonBox:after{
              top:inherit;
              left: 0;
              bottom:0;
            }
            /*
            |**************************************************************************
            | 마우스를 올렸을때 선의 길이를 지정해줄 때 사용한다
            | transition:800ms ease all; = 선이 나타나는 시간을 조정해준다.
            |**************************************************************************
            */
            form>#buttonBox:hover:before,form>#buttonBox:hover:after{
              width:100%;
              transition:800ms ease all;
            }
            /*
            |**************************************************************************
            | button의 위치를 padding을 통해 지정해준다.
            |**************************************************************************
            */
            #buttonBox{
              padding-left: 40px;
              padding-top: 40px;
            }
            .styled-select{
                overflow:auto;
                height:400px;
                border-radius: 5px; 
                border: 1px solid black; 
                position: absolute; 
                top:10px;
                left: 800px;
            }
            .styled-select>div{
                text-align: center; 
                font-size: 25px
            }
    </style>

<div class="top">
    @include('menu.topmenu')
</div>

<div class="imgbox">
    <img id="img1" src="<?php echo '/midi/'.$midi['path'].'/'.$midi['img'];?>">

    <div class="font">
        <p>음원명 : <?php echo $midi['music_name'];?></p>
        <p>작곡가 : <?php echo $midi['composer'];?></p>
        <p>장르 : <?php echo $midi['genre'];?></p>
    </div>{{--contents 의 div--}}

    <div class="styled-select" style="">
        <div style="">악기 리스트</div>
        <?php
      foreach ($insts as $inst){
          $inst_src = '/midi/'.$midi['path'].'/'.$inst['inst_name'];

          echo "<div style='border-radius: 5px;margin: 5px;padding: 5px;border: 1px solid black'>".substr($inst['inst_name'],0,-4)." : <input type='checkbox' checked name='musics[]' value='$inst[inst_name]'/><br>";
          echo "<audio name='my_audio[]' controls preload='none'>
                    <source src='$inst_src' type='audio/mpeg'>
                </audio></div>";
      }
    ?>
    </div>{{--layer의 div--}}
    <div>
        <form name="recordForm" action="/BandChallenge/audioRecord" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="music_checked_list" value="">
            <input type="hidden" name="midi_id" value="{{ $midi['id'] }}">
            <button id="buttonBox" onclick="recordPage();">연주하기</button>
            <button id="buttonBox" onclick="allCheck();">전체선택</button>
            <input id="buttonBox"type="button" name="listen_btn" onclick="init();" value="▶">
        </form>
    </div>
</div>  {{--music의 div--}}
@endsection

