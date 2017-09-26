<?php

namespace App\Http\Controllers\MyPage;

use DB;
use App\BandAudioParticipants;
use App\BandAudios;
use App\MidiInstruments;
use App\Midis;
use App\Album;
use App\Musicboard;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/*---------------------------------z-------------------------------------------------------------------/
/                                       음악플레이어 관련 컨트롤러                                      /
/----------------------------------------------------------------------------------------------------*/

class MusicBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
    }

    /*----------------------------------------------------------------------------------------------------/
    /                                     음악 수정하기 메뉴바 함수                                         /
    /----------------------------------------------------------------------------------------------------*/

    public function modify($sessionUser, $userID)
    // public function playList()
    {
        
        
        // 섹션으로 값가져오기
        $sessionID = session('user_id');
        $id = User::where('user_id',$sessionID)->get();
        $userMusics = BandAudios::where('writer_id',$id[0]['id'])->where('album_number',$userID)->get();
        $userMusics = DB::table('band_audios')->join('midis', 'band_audios.midi_id', '=', 'midis.id')
        ->where('first_musician_id',$id[0]['id'])->where('album_number',$userID)->get();
        
        // $userMusics = DB::table('band_audios')->join('midis', 'band_audios.midi_id', '=', 'midis.id')
        // ->orWhere(function ($query) {
        //     $query->where('first_musician_id',$id[0]['id'])
        //           ->where('writer_id',$id[0]['id']);
        // })
        // ->where('album_number',$userID)->get();
        
        $allMusics = BandAudios::where('writer_id',$id[0]['id'])->where('album_number',NULL)->get();
        $allMusics = DB::table('band_audios')->join('midis', 'band_audios.midi_id', '=', 'midis.id')
        ->where('first_musician_id',$id[0]['id'])->where('album_number',NULL)->get();
        
        // $allMusics = DB::table('band_audios')->join('midis', 'band_audios.midi_id', '=', 'midis.id')
        // ->orWhere(function ($query) {
        //     $query->where('first_musician_id',$id[0]['id'])
        //           ->where('writer_id',$id[0]['id']);
        // })
        //     ->where('album_number',NULL)->get();
        $albumMusics = Album::where('user_id',$sessionUser)->get();
        
        $test = DB::table('band_audios')->join('midis', 'band_audios.midi_id', '=', 'midis.id')->get();
        $imageFile = Album::where('user_id',$sessionUser)->where('album_number',$userID)->get();
        
        
        
        
        return view('mypage/album_music_modify')->with('userMusics',$userMusics)->with('allMusics',$allMusics)
        ->with('albumNumber',$userID)->with('sessionUser',$sessionUser)->with('albumMusics',$albumMusics)
        ->with('imageFile',$imageFile);
        
    }

    /*----------------------------------------------------------------------------------------------------/
    /                                     음악 리스트 메뉴바 함수                                           /
    /----------------------------------------------------------------------------------------------------*/

    public function list($sessionUser, $userID)
    // public function playList()
    {
        
        $sessionID = session('user_id');
        $id = User::where('user_id',$sessionID)->get();
        $userMusics = BandAudios::where('first_musician_id',$id[0]['id'])->where('album_number',$userID)->get();
        $albumMusics = Album::where('user_id',$sessionUser)->get();
        
        $imageFile = Album::where('user_id',$sessionUser)->where('album_number',$userID)->get();
   
        
        $boards = [];
        $partici_name = [];
         $k = 0;
        for($i=0; $i<count($userMusics) ;$i++){
            $board_id = $userMusics[$i]['id'];
            $band_audio_particis = BandAudioParticipants::all()->where('band_audio_id','=',$board_id);
                array_push($boards,$userMusics[$i]);
                $current_key = key(current( $band_audio_particis ));
                for($j = 0; $j<count($band_audio_particis) ;$j++){

                    $name = DB::table('users')->where('id','=',$band_audio_particis[$current_key]['user_id'])->value('user_id');
                    if($j==0){
                        $partici_name[$k] = $name;
                    }else{
                        $partici_name[$k] = $partici_name[$k].','.$name;
                    }
                    $current_key++;
                }
             $k++;   
        }   //합주자 수
        
        
        return view('mypage/album_music_list')->with('userMusics',$userMusics)
        ->with('albumNumber',$userID)->with('sessionUser',$sessionUser)->with('albumMusics',$albumMusics)
        ->with('imageFile',$imageFile)->with('partici_name',$partici_name);
    }

    /*----------------------------------------------------------------------------------------------------/
    /                                     음악 재생하기 메뉴바 함수                                         /
    /----------------------------------------------------------------------------------------------------*/

    public function play($sessionUser, $userID)
    // public function playList()
    {
        
        
        // 섹션으로 값가져오기
        $sessionID = session('user_id');
        $id = User::where('user_id',$sessionID)->get();
        define("ID", $id[0]['id']);
        
        $albumMusics = DB::table('band_audios')->where('album_number', $userID)->where('first_musician_id', ID)->get();
        $midiArray = []; //유저 마다 연주한 midi 파일들
        
        for($count = 0; $count < count($albumMusics); $count++){
            $midiArray[$count] = Midis::find($albumMusics[$count]->midi_id);
        }
        
        $album_particis = DB::table('band_audio_participants')->whereIn('band_audio_id', function($query) {
                $query->select('band_audio_id')->from('band_audio_participants')->where('user_id', ID);
                })->get();
                
        // $midi = DB::table('band_audio_participants')->join('midis', 'midis.id', '=', 'band_audio_participants.user_id')
        //         ->join('band_audios', 'band_audios.id', '=', 'band_audio_participants.band_audio_id')
        //         ->whereIn('band_audio_participants.band_audio_id', function($query) {
        //         $query->select('band_audio_id')->from('band_audio_participants')->where('writer_id', ID);
        //         })
        
        $midi = DB::table('band_audios')->join('midis', 'midis.id', '=', 'band_audios.midi_id')
        ->where('album_number', $userID)->where('first_musician_id', ID)->get();
        // dump($midi);
        // exit;
        
        $userMusics = BandAudios::where('first_musician_id',$id[0]['id'])->where('album_number',$userID)->get();
        $allMusics = musicboard::where('user_id',$id[0]['id'])->where('album_number',NULL)->get();
        // $albumMusics = Album::where('user_id',$sessionUser)->get();
        $imageFile = Album::where('user_id',$sessionUser)->where('album_number',$userID)->get();
        // dump($userMusics);
        
        $boards = [];
        $partici_name = [];
        $k = 0;
        for($i=0; $i<count($userMusics) ;$i++){
            $board_id = $userMusics[$i]['id'];
            $band_audio_particis = BandAudioParticipants::all()->where('band_audio_id','=',$board_id);
                array_push($boards,$userMusics[$i]);
                $current_key = key(current( $band_audio_particis ));
                for($j = 0; $j<count($band_audio_particis) ;$j++){

                    $name = DB::table('users')->where('id','=',$band_audio_particis[$current_key]['user_id'])->value('user_id');
                    if($j==0){
                        $partici_name[$k] = $name;
                    }else{
                        $partici_name[$k] = $partici_name[$k].','.$name;
                    }
                    $current_key++;
                }
             $k++;   
        }   //합주자 수
        
       
       for($iCount = 0; $iCount < count($boards); $iCount++){
          for($jCount = 0; $jCount < count($album_particis); $jCount++){
            if($album_particis[$jCount]->band_audio_id == $boards[$iCount]['id']){
                if($boards[$iCount]['files'] == NULL){
                    $boards[$iCount]['files'] = $album_particis[$jCount]->file_name;
                }else{
                    $boards[$iCount]['files'] = $boards[$iCount]['files'].','.$album_particis[$jCount]->file_name;
                }
            }
                 
            
                
          }
       }
       
       $albumMusics2 = Album::where('user_id',$sessionUser)->get();
        
        return view('mypage/album_music_play')->with('userMusics',$userMusics)->with('allMusics',$allMusics)
        ->with('albumNumber',$userID)->with('sessionUser',$sessionUser)->with('albumMusics',$albumMusics)
        ->with('imageFile',$imageFile)->with('partici_name',$partici_name)->with('midi',$midi)->with('album_particis',$album_particis)
        ->with('boards',$boards)->with('albumMusics2',$albumMusics2);
        
       
        
        
    }
    

    /*----------------------------------------------------------------------------------------------------/
    /                                음악 수정하기 Drag & Drop 함수                                         /
    /----------------------------------------------------------------------------------------------------*/

    public function alterList(Request $request)
    {

      $int = $request->all();
      $key = explode("\\n", $int["key"]);
      $nullKey = explode("\\n", $int["nullKey"]);
      // sortable1 앨범 등록시키는 for문
      for($updateCount = 0; $updateCount < count($key); $updateCount++) {
        DB::table('band_audios')->where('subject', $key[$updateCount])
        ->update(['album_number' => $int['albumNumber']]);
      };

      // sortable1 앨범 해제시키는 for문
      for($updateCount = 0; $updateCount < count($nullKey); $updateCount++) {
        DB::table('band_audios')->where('subject', $nullKey[$updateCount])
        ->update(['album_number' => NULL]);
      };

      
        
    }

    public function destroy(Mypage $mypage)
    {
        //
    }
}
