
@extends('layouts.layout')

@section('content')
<style>
    /*
    **************************************************************************
    | 각 태그별 가장 큰범위 속성
    |**************************************************************************
    */
    .nav{
      float: left;
      margin-top: 10%;
    }
    .section {
      position: absolute;
      top: 25%;
      left: 20%;
      display: inline-block;
      width: 70%;
      border: 8px solid white;
    }
    header>.btn{
      position: relative;
      font-size: 15px;
      padding: 10 20px;
      margin-top: 20px;
      margin-left: 20px;
      float: right;
      -webkit-transition-duration: 0.7s; /* Safari */
      transition-duration: 0.7s;
    }
    header>.btn:hover{
      background-color: white;
      color: black;
    }

    .column {
      border: 2px solid #cacaca;
      margin-top: 30px;
      margin-left: 10%;
      list-style-type: none;
      background-color:white;
      width: 70%;
    }
    .column:hover{
      list-style-type: none;
      box-shadow: 2px 2px 20px darkgray;
    }
    .list{
      padding-top: 5%;
    }
    .cover {
      position:relative;
      display:inline-block;
      padding-top:15px;
      padding-left:15px;
      padding-bottom:10px;
      padding-right:15px;
      background-color: #6d928c;
    }
    .cover img {
      width:250px;
      height:250px;
    }
    .info {
      position:relative;
      display:inline-block;
    }
    .albumtitle{
      position:relative;
      top:-70px;
      left:20%;
      font-size:200%;
    }
    .artist{
      position:relative;
      padding-left: 110px;
      top:-60px;
    }
    .foot>ul li{
      position:relative;
      left:18%;
      display:inline-block;
      margin-right: 20px;
    }
  </style>

 <script src="/scripts/same_time_play.js"></script>
 <header class="navbar navbar-inverse">
    @include('menu.topmenu')
  </header>
<div class="section"> <!-- 중앙 컨텐츠 -->
    <header>
        <a class="recommend btn" href="#">추천순</a>
        <a class="hits btn" href="#">조회순</a>
        <a class="new btn" href="#">최신순</a>
    </header>
    <div class="table">
        
 <?php
    if($id == null){
        echo "<ul class='list'>";
        foreach ($band_audio_boards as $band_audio_board){
            $current_key = key(current( $midis->where('id','=',$band_audio_board['midi_id']) ));
            $src = "https://harmony-project-chonahoom.c9users.io/midi/".$midis->where('id','=',$band_audio_board['midi_id'])[$current_key]['path'].'/'.
                    $midis->where('id','=',$band_audio_board['midi_id'])[$current_key]['img'];
            $music_name = $midis->where('id','=',$band_audio_board['midi_id'])[$current_key]['music_name'];
            $composer = $midis->where('id','=',$band_audio_board['midi_id'])[$current_key]['composer'];
//전체 밴드 오디오 게시판
 ?>
            <li class="column">
                <div class="cover">
                    <a href="/BandChallenge/audioBefore/{{$band_audio_board['id']}}">
                        <img src={{$src}}/>
                    </a>
                </div>
            <div class="info">
                <div class="tabletop">
                    <a href="/BandChallenge/audioBefore/{{$band_audio_board['id']}}">
                        {{$band_audio_board['subject']}}
                    </a>
                </div>
                <div class="albumtitle">
                    {{$music_name}}
                </div>
                <div class="artist">
                    {{$composer}}
                </div>
                <div class="foot">
                    <ul>
                        <li>{{substr($band_audio_board['created_at'],9,-3)}}</li>
                        <li>좋아요 : {{$band_audio_board['goods']}}</li>
                    </ul>
                </div>
            </div><!--info끝-->
        </li>

 <?php
         }
    echo "</ul>";
    }
    else{
 ?>
     <div name="music" style="position: relative">
         <div name = 'img' style="position: absolute;top: 50px">
             <img src="<?php echo '/midi/'.$midi['path'].'/'.$midi['img'];?>" style="width: 250px; height: 250px;"/>

         </div>{{--img 의 div--}}

         <div name = 'contents' style="position: absolute;top: 50px;left: 300px">
             <table style="width: 300px;">
                 <tr >
                     <td style="width: 50px">음원명</td><td><?php echo $midi['music_name'];?></td></td>
                 </tr>
                 <tr >
                     <td>작곡가</td><td><?php echo $midi['composer'];?></td>
                 </tr>
                 <tr >
                     <td>장르</td><td><?php echo $midi['genre'];?></td>
                 </tr>
             </table>

         </div>{{--contents 의 div--}}

         <div name="layer" style="overflow:auto;height:400px;border-radius: 5px; border: 1px solid black; margin-top: 50px; position: absolute; top:300px">
             <div style="text-align: center; font-size: 25px">악기 리스트</div>
             <?php

             $insts=explode(",", $band_audio_board['selected_instruments']);
             foreach ($insts as $inst){
                 $inst_src = '/midi/'.$midi['path'].'/'.$inst;

                 echo "<div style='border-radius: 5px;margin: 5px;padding: 5px;border: 1px solid black'>"
                     .substr($inst,0,-4)." : <input type='checkbox' checked name='musics[]' value='$inst'/><br>";
                 echo "<audio name='my_audio[]' controls preload='none'>
                    <source src='$inst_src' type='audio/mpeg'>
                </audio></div>";
             }
             ?>

         </div>{{--layer의 div--}}
         <div name="layer" style="overflow:auto;height:400px;border-radius: 5px; border: 1px solid black;margin-top: 50px; position: absolute; left: 450px;top:300px">
             <div style="text-align: center; font-size: 25px">합주자 리스트</div>
             <?php
                 foreach ($band_audio_particis as $band_audio_partici){
                     $inst_src = '/uploads/bandChallenge/audio/'.$band_audio_partici['file_name'];
                     echo "<div style='border-radius: 5px;margin: 5px;padding: 5px;border: 1px solid black'>".
                         substr($band_audio_partici['file_name'],0,-4)."
                  : <input type='checkbox' checked name='participants[]' value='$band_audio_partici[file_name]'/><br>";
                     echo "<audio name='my_participant[]' controls preload='none'>
                    <source src='$inst_src' type='audio/mpeg'>
                </audio></div>";
                 }

             ?>

         </div>{{--layer의 div--}}
         <div style="position: absolute;left: 300px;top: 250px">
             <form name="recordForm" action="/BandChallenge/audioRecord" method="post">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <input type="hidden" name="music_checked_list" value="">
                 <input type="hidden" name="partici_checked_list" value="">
                 <input type="hidden" name="band_board_id" value="{{$id}}">

                 <input type="hidden" name="midi_id" value="{{ $midi['id'] }}">
                <button id="buttonBox" onclick="recordPage();">연주하기</button>
                <button id="buttonBox" onclick="allCheck();">전체선택</button>
                <input id="buttonBox"type="button" name="listen_btn" onclick="init();" value="▶">
                <input type="button" name="listen_btn" onclick="init();" style="width:72px" value="▶">

             </form>
         </div>
     </div>  {{--music의 div--}}

 <?php
    }
 ?>

@endsection

