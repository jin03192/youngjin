<?php

namespace App\Http\Controllers\bandChallenge;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BandAudioParticipants;
use App\BandAudios;
use App\MidiInstruments;
use App\Midis;
use App\News;
use DB;
use App\User;
use App\BandVideos;
use App\BandVideoParticipants;

class BandChallengeController extends Controller
{
    function midiList(){
        $midi = Midis::all();

        return view('board.BandChallenge_Record_Album')->with('midis',$midi);
    }
    
    function midiGood($id){
        $midi = Midis::find($id);
        $goods_cnt = $midi['goods'];
       $goods_cnt++;
        
      DB::table('midis')->where('id',$id)->update(['goods' => $goods_cnt]);
       
        
        echo json_encode($goods_cnt);
    }
    
    function audioHarmony($midi_id){

        $user_id = session()->get('user_id', '');   //유저 세션정보
        
        // 로그인 off시 에러발생
          if(is_null($user_id)){
            // Header("Location:/login");
            echo '<script> alert("로그인이 필요한 서비스입니다."); </script>';
            echo "<script> location.replace('/login'); </script>"; 
            
            exit;
          }
        
        $midi = Midis::find($midi_id);
        $midi_inst = MidiInstruments::all()->where('midi_id','=',$midi_id);//악기 리스트

        return view('board.BandChallenge_Record_Albumn_View')->with('insts',$midi_inst)->with('midi',$midi);
    }   //미디 음원 악기 리스트 선택
    /* return view('bandChallenge.bandAudio')->with('insts',$midi_inst)->with('midi',$midi);
     }   //미디 음원 악기 리스트 선택*/

    function audioRecord(Request $request){
        

        $inst_lists = explode(",", $request->all()['music_checked_list']);
        $partici_lists = (isset($request->all()['partici_checked_list']))?explode(",", $request->all()['partici_checked_list']):'';
        $midi = Midis::find($request->all()['midi_id']);
        $band_board_id = ( isset($request->all()['band_board_id']) )?$request->all()['band_board_id']:'';
        
        return view('board.BandChallenge_Record_Work')->with('insts',$inst_lists)
                ->with('particis',$partici_lists)->with('midi',$midi)->with('band_board_id',$band_board_id);
    }   //선택한 악기 레이어와 녹음
    /*
    return view('bandChallenge.bandAudioRecord')->with('insts',$inst_lists)
                ->with('particis',$partici_lists)->with('midi',$midi)->with('band_board_id',$band_board_id);
    }   //선택한 악기 레이어와 녹음*/

    function audioBefore($id=null){
        if($id != null){
            $band_audio_board = BandAudios::find($id);
            $band_audio_particis = BandAudioParticipants::all()->where('band_audio_id','=',$id);
            
            
            
             $user_id = session('user_id');
            
             // 로그인 off시 에러발생
          if(is_null($user_id)){
            echo '<script> alert("로그인이 필요한 서비스입니다."); </script>';
            echo "<script> location.replace('/login'); </script>"; 
            
            exit;
          }


            $midi = Midis::find($band_audio_board['midi_id']);
            return view('board.BandChallenge_Record_Before')->with('id',$id)->with('midi',$midi)
                    ->with('band_audio_board',$band_audio_board)
                    ->with('band_audio_particis',$band_audio_particis);
        }

       $boards = [];
       $partici_name = array();
        $band_audio_boards = BandAudios::orderBy('created_at','desc')->get();
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
    $user_picture[$i] = DB::table('users')->where('user_id',substr($partici_name[key($partici_name)],0,-1))->get();
    
}



        return view('board.BandChallenge_Record_Before')->with('id',null)->with('midis',$midi)
                ->with('band_audio_boards',$boards)->with('partici_name',$partici_name)
                ->with('user_picture',$user_picture);
    }   //합주전 오디오 게시물
    
    function audioAfter($id=null){
        if($id != null){
            $band_audio_board = BandAudios::find($id);
            $band_audio_particis = BandAudioParticipants::all()->where('band_audio_id','=',$id);
            $midi = Midis::find($band_audio_board['midi_id']);
            return view('board.BandChallenge_Record_After')->with('id',$id)->with('midi',$midi)
                    ->with('band_audio_board',$band_audio_board)
                    ->with('band_audio_particis',$band_audio_particis);
        }

        $boards = [];
        $partici_name = [];
        $band_audio_boards = BandAudios::orderBy('created_at','desc')->get();
         $k = 0;
        for($i=0; $i<count($band_audio_boards) ;$i++){
            $board_id = $band_audio_boards[$i]['id'];
            $band_audio_particis = BandAudioParticipants::all()->where('band_audio_id','=',$board_id);
            if( count($band_audio_particis) > 1 ){
                array_push($boards,$band_audio_boards[$i]);
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
            }
        }   //합주자 수
        
        $m = 0;
        for($n=(count($boards)-1) ;$n >= 0; $n--){
            $temp = $boards[$m];
            $boards[$m] = $boards[$n];
            $boards[$n] = $temp;
            $m++;
            
        }
        
        $midi = Midis::all();
        return view('board.BandChallenge_Record_After')->with('id',null)->with('midis',$midi)
                ->with('band_audio_boards',$boards)->with('partici_name',$partici_name);
    }   //합주후 오디오 게시물
    

    function writeBoard(Request $request){
        $file = $request->all();
        
        
        return view('board.BandChallenge_Record_Upload')->with('file',$file);
    }
    /*return view('bandChallenge.write')->with('file',$file);
    }*/

    function noticeUpdate($user_name){
        $sessionID    = DB::table('users')->where('user_id', $user_name)->value('id');
        $notices = DB::table('news')->where('receiver_id','=',$sessionID)->get();
        $arr = array();

        for($i = 0; $i<count($notices) ;$i++){

            if($notices[$i]->is_realtime == true ){
                $send_name = DB::table('users')->where('id','=',$notices[$i]->sender_id)->value('user_id');
                $arr[0] = $send_name;
                $arr[1] = $notices[$i]->path;
                DB::table('news')->where('id',$notices[$i]->id)->update(['is_realtime' => false]);
                echo json_encode($arr);
                
                return ;
            }
        }
        
        echo json_encode(4);
        
    }

//----------------------------------인서트 부분---------------------------------------------

    function insertBoard(Request $request){
        
        
        $message = $request->input('instrument');    

        
        $location = 'recordbefore';
        $user_id = session('user_id');
        $sessionID    = DB::table('users')->where('user_id', $user_id)->value('id');
        
        $file = $request->all();
        $band_audio_board = new BandAudios;
        
        $band_audio_board->subject = $file['subject'];
        $band_audio_board->goods = 0;
        $band_audio_board->instrument = $message;
        $band_audio_board->selected_instruments = $file['selected_insts'];
        $band_audio_board->midi_id = $file['midi_id'];
        if( isset($file['selected_particis']) ){    //합주자 있다는 건
            $participants_arr = explode(",", $file['selected_particis']);
            $band_audio_first_board = BandAudios::find($file['band_board_id']);
            $band_audio_board->first_musician_id = $band_audio_first_board['first_musician_id'];
            $band_audio_board->writer_id = $sessionID;        //<---- 현재 사용자 id 수정 필요
            $band_audio_board->save();
            $is_final = false;
            $load_partici = BandAudioParticipants::all()->where('band_audio_id','=',$file['band_board_id']);
//확인 필요!!


            for($i = 0 ;$i<count($participants_arr) ; $i++){
                $band_audio_participants = new BandAudioParticipants;
                $current_key = key(current( $load_partici->where('file_name','=',$participants_arr[$i]) ));
                $band_audio_participants->user_id =
                    $load_partici->where('file_name','=',$participants_arr[$i])[$current_key]['attributes']['user_id'];
                $band_audio_participants->file_name = $participants_arr[$i];

                $band_audio_participants->instrument = 
                    $load_partici->where('file_name','=',$participants_arr[$i])[$current_key]['attributes']['instrument'];
                    
                if( (($i+1)==count($participants_arr)) && (!$is_final)) {
                    $is_final = true;
                    $i -= 1;
                }
                
                if( $is_final && (($i+1)==count($participants_arr)) ) {
                    $band_audio_participants->file_name = $file['file_name'];
                    $band_audio_participants->user_id = $sessionID;  //<---- 현재 사용자 id 수정 필요
                    $band_audio_participants->instrument = $message;
                }

                $band_audio_participants->band_audio_id = $band_audio_board['id'];
                
                $band_audio_participants->save();
            }
            $location = 'recordafter';
            
            //채팅
            
            $news = new News;
            $news->receiver_id = $band_audio_first_board['first_musician_id'];
            $news->sender_id = $sessionID;
            $news->is_read = false;
            $news->is_realtime = true;
            $news->path = 'recordafter/'.$band_audio_board['id'];
            
            $news->save();
            
            
            
        }       //처음 연주 아님 (참여자 저장)
        
        else{
            $band_audio_board->first_musician_id = $sessionID;       //<----------- 현재 사용자id 수정필요
            $band_audio_board->writer_id = $sessionID;               //<----------- 현재 사용자id 수정필요
            $band_audio_board->save();

            $band_audio_participants = new BandAudioParticipants;
            $band_audio_participants->user_id = $sessionID;          //<---- 현재 사용자 id 수정 필요
            $band_audio_participants->file_name = $file['file_name'];
            $band_audio_participants->band_audio_id = $band_audio_board['id'];
            $band_audio_participants->instrument = $message;
            $band_audio_participants->save();

        }       //처음 연주

      /*----------------------------------------------------------------------------------------------------/
      /                         (jinyoung)     추천 매칭 기능 (글 등록시 카운터 부분)                     　/
      /----------------------------------------------------------------------------------------------------*/  
      $title = $band_audio_board['subject'];
      $genre = DB::table('midis')->where('id', $file['midi_id'])->value('genre');
      
    
      
      /*                                             악기 카운트 횟수                                             */
      $myPiano = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'piano')->value('count');              //<----------- 현재 사용자id 수정필요
      $myDrum = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'drum')->value('count');                //<----------- 현재 사용자id 수정필요
      $myGuitar = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'guitar')->value('count');            //<----------- 현재 사용자id 수정필요   
      $mySynthesizer = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'synthesizer')->value('count');  //<----------- 현재 사용자id 수정필요
      /*                                                 ここまで                                                  */


      /*                                             장르 카운트 횟수                                             */
      $myPop = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'pop')->value('count');              //<----------- 현재 사용자id 수정필요
      $myDance = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'dance')->value('count');              //<----------- 현재 사용자id 수정필요
      $myClassic = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'classic')->value('count');      //<----------- 현재 사용자id 수정필요
      $myRock = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'rock')->value('count');            //<----------- 현재 사용자id 수정필요
      /*      

    //   /*----------------------------------------------------------------------------------------------------/
    //   /                                        악기 테이블 카운터 값 오르는 구문 (악기가 들어갈 필드가 아직 없음                          　/
    //   /----------------------------------------------------------------------------------------------------*/

      if($message == "기타"){
        if(is_null($myGuitar)){
          DB::table('instrumentusers')->where('id',$band_audio_board["writer_id"])->insert(['id' => $band_audio_board["writer_id"], 'instrument' => 'guitar', 'count' => 1]);
        
            
        }else{
          DB::table('instrumentusers')->where('id',$band_audio_board["writer_id"])->where('instrument', 'guitar')->update(['count' => $myGuitar = $myGuitar + 1]);
        }
      }else if($message == "드럼"){
        if(is_null($myDrum)){
          DB::table('instrumentusers')->where('id',$band_audio_board["writer_id"])->insert(['id' => $band_audio_board["writer_id"], 'instrument' => 'drum', 'count' => 1]);
        }else{
          DB::table('instrumentusers')->where('id',$band_audio_board["writer_id"])->where('instrument', 'drum')->update(['count' => $myDrum = $myDrum + 1]);
        }
      }else if($message == "피아노"){
        if(is_null($myPiano)){
          DB::table('instrumentusers')->where('id',$band_audio_board["writer_id"])->insert(['id' => $band_audio_board["writer_id"], 'instrument' => 'piano', 'count' => 1]);
        }else{
          DB::table('instrumentusers')->where('id',$band_audio_board["writer_id"])->where('instrument', 'piano')->update(['count' => $myPiano = $myPiano + 1]);
        }
      }else if($message == "신디사이저"){
        if(is_null($mySynthesizer)){
          DB::table('instrumentusers')->where('id',$band_audio_board["writer_id"])->insert(['id' => $band_audio_board["writer_id"], 'instrument' => 'synthesizer', 'count' => 1]);
        }else{
          DB::table('instrumentusers')->where('id',$band_audio_board["writer_id"])->where('instrument', 'synthesizer')->update(['count' => $mySynthesizer = $mySynthesizer + 1]);
        }
      }
      /*                                                              ここまで                                                    */


      /*----------------------------------------------------------------------------------------------------/
      /                                        장르 테이블 카운터 값 오르는 구문                               /
      /----------------------------------------------------------------------------------------------------*/
      if($genre == "pop"){
        if(is_null($myPop)){
          DB::table('genreusers')->where('id',$sessionID)->insert(['id' => $sessionID, 'genre' => 'pop', 'count' => 1]);
        }else{
          DB::table('genreusers')->where('id',$sessionID)->where('genre', 'pop')->update(['count' => $myPop = $myPop + 1]);
        }
      }else if($genre == "dance"){
        if(is_null($myDance)){
          DB::table('genreusers')->where('id',$sessionID)->insert(['id' => $sessionID, 'genre' => 'dance', 'count' => 1]);
        }else{
          DB::table('genreusers')->where('id',$sessionID)->where('genre', 'dance')->update(['count' => $myDance = $myDance + 1]);
        }
      }else if($genre == "classic"){
        if(is_null($myClassic)){
          DB::table('genreusers')->where('id',$sessionID)->insert(['id' => $sessionID, 'genre' => 'classic', 'count' => 1]);
        }else{
          DB::table('genreusers')->where('id',$sessionID)->where('genre', 'classic')->update(['count' => $myClassic = $myClassic + 1]);
        }
      }else if($genre == "rock"){
        if(is_null($myRock)){
          DB::table('genreusers')->where('id',$sessionID)->insert(['id' => $sessionID, 'genre' => 'rock', 'count' => 1]);
        }else{
          DB::table('genreusers')->where('id',$sessionID)->where('genre', 'rock')->update(['count' => $myRock = $myRock + 1]);
        }
      }
      

      /*                                                              ここまで                                                    */


    //   $highInstruments = array();
    //   $highGenres = array();

    //   $instruments = array("피아노" => $myPiano,"드럼" => $myDrum,"기타" => $myGuitar, "신디사이저" => $mySynthesizer);
    //   $genres = array("pop" => $myPop,"dance" => $myDance,"classic" => $myClassic, "rock" => $myRock);

    //   // 연주 횟수 중 가장 많이 연주한 횟수
    //   $maxInstruments = max($instruments);
    //   $maxGenres = max($genres);

    //   foreach($instruments as $key => $value) {
    //     // 연관 배열의 값과 연주 최대치가 같을 경우 (최대 연주한 악기) $highInstruments에 악기 이름의 배열 값을 넣음
    //     if($value == $maxInstruments){
    //       array_unshift($highInstruments, $key);
    //     }
    //   }

    //   foreach($genres as $key => $value) {
    //     // 연관 배열의 값과 연주 최대치가 같을 경우 (최대 연주한 장르) $highGenres에 장르 이름의 배열 값을 넣음
    //     if($value == $maxGenres){
    //       array_unshift($highGenres, $key);
    //     }
    //   }



        echo("<script>location.href='/$location';</script>");
    }
   



//--------------------------------경현 민호---------------------------------//

    public function bandChallenge_video_recording_one(Request $request){
        
        $inst_lists = explode(",", $request->all()['music_checked_list']);
        $partici_lists = (isset($request->all()['partici_checked_list']))?explode(",", $request->all()['partici_checked_list']):'';
        $midi = Midis::find($request->all()['midi_id']);
        
        return view('/bandChallenge/video_recording_one')
        ->with('insts',$inst_lists)
        ->with('particis',$partici_lists)
        ->with('midi',$midi)
        ->with('id',0);
    }

    function blobTrans(Request $request){
        $file = $request->all();
        $user_id = session('user_id');
        $user_file = date( 'YmdHis')."_".$user_id.".mp3";
        
        $file['data']->move(public_path('uploads/bandChallenge/audio'), $user_file);

        echo json_encode($user_file);

    }   //Ajax로 파일 업로드
    
    function gakuhu(Request $request){
        $file = $request->all();
        
        return view('/board/gakuhu_modi')->with('file',$file);

    }
    
     function gakuhu_loading(Request $request){
        $file = $request->all();
        
        return view('/board/gakuhu_load')->with('file',$file);

    }
    
     function volumeChange(Request $request){
        $file = $request->all();
        $volume = $file['volume'];
        $volume = 256 + 7*($volume);
        $file_name = $file['data'];
        $version = $file['version'];
        if($version == 10){
            $version = 9;
            $temp_name = substr($file_name,0,-4).$version.substr($file_name,-4);
            echo system("rm $temp_name");
            $version = 1;
       
        }
        
        $temp_name = substr($file_name,0,-4).$version.substr($file_name,-4);
        chdir('uploads/bandChallenge/audio');
        echo system("ffmpeg -i $file_name -vol $volume -acodec libmp3lame -aq 4 -c:v copy $temp_name -y");
        
        sleep(1);
        $version--;
         $temp_name = substr($file_name,0,-4).$version.substr($file_name,-4);
        echo system("rm $temp_name");
        $version++;
         $temp_name = substr($file_name,0,-4).$version.substr($file_name,-4);
        echo json_encode($temp_name);

    }
    function video_upload(Request $request){
    
      $first_musician = $request->session()->get('user_id');
      
      $file = $request->all();
      $file_name = date( 'YmdHis').$first_musician.".mp4";
      $file['data']->move(public_path('uploads/bandChallenge/video'), $file_name);
   
      echo json_encode($file_name);

}

  function video_write_send(Request $request){
     $wt = $request->all();
     return view('/bandChallenge/videoWrite')->with('write',$wt);

    }
    
    function video_insert(Request $request, $video_file_name){
        $file = $request->all();
        
        $user_id = session('user_id');
        $sessionID    = DB::table('users')->where('user_id', $user_id)->value('id');
        $video_subject = $request->input('video_subject');
        $video_content = $request->input('video_content'); 
        $video_instrument = $request->input('instrument');
        $video_genre = $request->input('genre');
        $video_bpm = $request->input('bpm');
        $video_volume = $request->input('volume');
        
        $band_video = new BandVideos;
        
    }
}

 
    