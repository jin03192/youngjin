<?php

namespace App\Http\Controllers\ionic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BandAudioParticipants;
use App\BandAudios;
use App\MidiInstruments;
use App\Midis;
use DB;
use Input;
use App\Album;
use App\User;
use App\MusicBoard;
use App\Albums;
class IonicController extends Controller
{
        function test(){
                $midi = Midis::all();
                echo json_encode($midi);
        }   //원곡
        
         function instrument($albumn_id){
                $midi_inst = MidiInstruments::where('midi_id',$albumn_id)->get();//악기 리스트
                echo json_encode($midi_inst);
        }   //원곡에 맞는 midi files
        
        
        //합주전 게시물
       /* function audioBefore($id=null){
        if($id != null){
            $band_audio_board = BandAudios::find($id);
            $band_audio_particis = BandAudioParticipants::all()->where('band_audio_id','=',$id);
            $midi = Midis::find($band_audio_board['midi_id']);
            echo json_encode($band_audio_particis);
            return ;
        }
        
        $boards                 = [];
        $midi_arr               = [];
        $record_before_arr      = [];
        $partici_name           = array();
        $midi                   = Midis::all();
        $band_audio_boards      = BandAudios::all();
        $k = 0;
        for($i=0; $i<count($band_audio_boards) ;$i++){
            $board_id = $band_audio_boards[$i]['id'];
            $band_audio_particis = BandAudioParticipants::all()->where('band_audio_id','=',$board_id);
            $band_audio_boards = BandAudios::orderBy('goods','desc')->get();
            
            if( count($band_audio_particis) < 2 ){
                array_push($boards,$band_audio_boards[$i]);
               array_push($midi_arr,$midi->where('id','=',$band_audio_boards[$i]['midi_id']));
            
                for($j = 0; $j<count($band_audio_particis) ;$j++){
                    $current_key = key(current( $band_audio_particis ));
                    $name = DB::table('users')->where('id','=',$band_audio_particis[$current_key]['user_id'])->value('user_id').',';
                    $partici_name[$k] = $name;
               
                }
                $k++;
            }
        }   //합주자 수
        
        
        array_push($record_before_arr,$boards);
        array_push($record_before_arr,$midi_arr);
        array_push($record_before_arr,$partici_name);
        
        echo json_encode($record_before_arr);
    }   */
    function audioBefore($id=null){
        if($id != null){
            $band_audio_board = BandAudios::find($id);
            $band_audio_particis = DB::table('band_audio_participants')->where('band_audio_id',$id)->first();
             
            
            
             $user_id = session('user_id');
            
            $midi = Midis::find($band_audio_board['midi_id']);
            
     
         $record_before_id_arr      = [];
         array_push($record_before_id_arr,$id);
         array_push($record_before_id_arr,$midi);
         array_push($record_before_id_arr,$band_audio_board);
         array_push($record_before_id_arr,$band_audio_particis);
         echo json_encode($record_before_id_arr);
            return;
        }

       $boards = [];
       $partici_name = array();
        $band_audio_boards = BandAudios::orderBy('goods','desc')->get();
        $k = 0;
        for($i=0; $i<count($band_audio_boards) ;$i++){
            $board_id = $band_audio_boards[$i]['id'];
            $band_audio_particis = BandAudioParticipants::all()->where('band_audio_id','=',$board_id);
            if( count($band_audio_particis) < 2 ){
                array_push($boards,$band_audio_boards[$i]);
               
                for($j = 0; $j<count($band_audio_particis) ;$j++){
                    $current_key = key(current( $band_audio_particis ));
                    $name = DB::table('users')->where('id','=',$band_audio_particis[$current_key]['user_id'])->value('user_id').',';
                    $partici_name[$k] = $name;
               
                }
                $k++;
            }
        }   //합주자 수
        
        $midi = Midis::all();
        $m = 0;
        for($n=(count($boards)-1) ;$n >= 0; $n--){
            $temp = $boards[$m];
            $boards[$m] = $boards[$n];
            $boards[$n] = $temp;
            $m++;
            
        }
        
        $user_picture = [];
        for($i = 0; $i < count($partici_name); $i++){
            $user_picture[$i] = DB::table('users')->get();
            
        }

        $record_before_arr      = [];
         array_push($record_before_arr,$midi);
         array_push($record_before_arr,$boards);
         array_push($record_before_arr,DB::table('users')->get());
         echo json_encode($record_before_arr);

    }   //합주전 오디오 게시물
    
    
    public function ionicAlbumList() // POST 모드
    {
      // 섹션으로 값가져오기
      $user_id = "nahoom";
      $myAlbum = Album::where('user_id',$user_id)->get();
      echo json_encode($myAlbum);
    }
    
    public function ionicAddAlbum(Request $request)
    {
      // 경로
      $destinationPath = public_path().'/albumImages/';

      // 파일명
      $name = Input::file('album_picture')->getClientOriginalName();
      $sessionID = $request->session()->get('user_id','');
      $userMusics = Album::where('user_id',$sessionID)->get();

      // $userMusics에 있는 앨범 리스트에 + 1을 해서 새로운 앨범 라우팅을 만들기 위한 변수
      $album_number = count($userMusics) + 1;

      // 앨범 생성시 제목, 내용, 사진 내용을 담아두기 위한 변수
      $album_title = $request->input('album_title');
      $album_content = $request->input('album_content');
      $album_picture = $name;


      DB::table('albums')->insert([
        ['album_number' => $album_number, 'user_id' => $sessionID, 'album_title' => $album_title,
         'album_picture' => $album_picture, 'album_content' => $album_content]
      ]);

      Input::file('album_picture')->move($destinationPath, $name);

      // 완료 후 앨범 리스트로 이동
      echo "<script>location.href='ionic/myalbum';</script>";
    }
    
    //합주전 오디오 게시물
        // function Album(){
        //         $midi_array = [];
        //         $albums
        //         $midi_inst = MidiInstruments::all();//악기 리스트
        //         array_push($midi_array,$midi);
        //         array_push($midi_array,$midi_inst);
        //         echo json_encode($midi_array);
        // }   // 앨범
        
}
    

