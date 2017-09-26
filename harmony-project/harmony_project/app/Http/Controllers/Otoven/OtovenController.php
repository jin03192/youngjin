<?php

namespace App\Http\Controllers\Otoven;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\OtovenAudios;
use App\OtovenAudioParticipants;
use App\OtovenVideos;
use App\OtovenVideoParticipants;
use App\User;


class OtovenController extends Controller
{
     public function otoven_video_collaborate_wait(){
         
     $otoven_videos_all = OtovenVideos::orderBy('id','desc')->get();
  
     $user_image = [];
     $file_name = [];
     
     $boards = [];
     $partici_name = array();
     
     $k = 0;
     for($i=0; $i<count($otoven_videos_all); $i++){
         $board_id = $otoven_videos_all[$i]['id'];
         $otoven_video_particis = OtovenVideoParticipants::all()->where('otoven_video_id',$board_id);
         if(count($otoven_video_particis)<2){
             array_push($boards, $otoven_videos_all[$i]);
             
             for($j=0; $j<count($otoven_video_particis);$j++){
                 $current_key = key(current($otoven_video_particis));
                 $name=User::where('id',$otoven_video_particis[$current_key]['user_id'])->value('user_id').',';
                 $instrum = OtovenVideoParticipants::where('user_id',$otoven_video_particis[$current_key]['instruments'])->get();
                
                 $partici_name[$k] = $name;
                 $partici_instrum[$k] = $instrum;
             }
             $k++;
         }
     }
     
     foreach($otoven_videos_all as $otoven_video){
         
       array_push($user_image, User::where('id',$otoven_video['writer_id'])->value('userImage'));
       array_push($file_name, OtovenVideoParticipants::where('otoven_video_id', $otoven_video['id'])->value('file_name'));
         
     }
   
    $otoven_video_parti = new OtovenVideoParticipants;
    $user = new User;
     
      return view('otoven/video_collaborate_wait')
      ->with("otoven_video_partis",$otoven_video_parti)
      ->with('user',$user)
      ->with("otoven_video_all",$boards)
      ->with('partici_name',$partici_name);
    //->with('partici_instrum',$partici_instrum);
      
    }
    
    public function otoven_video_collaborate_complete(){
        $boards = [];
        $partici_name = [];
        $otoven_video_all = OtovenVideos::orderBy('id','desc')->get();
        $k = 0;
        for($i=0; $i<count($otoven_video_all); $i++){
           
            $board_id = $otoven_video_all[$i]['id'];
            $otoven_video_particis = OtovenVideoParticipants::all()->where('otoven_video_id',$board_id);
            if(count($otoven_video_particis)>1){
                array_push($boards, $otoven_video_all[$i]);
                $current_key = key(current($otoven_video_particis));
                

                for($j=0; $j<count($otoven_video_particis); $j++){
                    
                    $name = User::where('id',$otoven_video_particis[$current_key]['user_id'])->value('user_id');
                    $instrum = OtovenVideoParticipants::where('user_id',$otoven_video_particis[$current_key]['instruments'])->get();
                    
                    if($j==0){
                        $partici_name[$k] = $name;
                        $partici_instrum[$k] = $instrum;
                    }
                    else{
                        $partici_name[$k] = $partici_name[$k].','.$name;
                        $partici_instrum[$k] = $partici_instrum[$k].','.$instrum;
                    }
                    $current_key++;
                    
                 
               
            }
            $k++;
          }
        }
        $user = new User;
        $otoven_video_parti = new OtovenVideoParticipants;
        return view('otoven/video_collaborate_complete')
        ->with('otoven_video_all',$boards)
        ->with('user',$user)
        ->with("otoven_video_parti",$otoven_video_parti)
        ->with('partici_name',$partici_name);
        // ->with('partici_instrum',$partici_instrum);
    }
    
    public function otoven_in_one_video_article($id){
    
     $otoven_videos_imfor = OtovenVideos::where('id','=',$id)->get();
     $users=DB::table('otoven_videos')
            ->join('users', 'otoven_videos.first_musician_id', '=', 'users.id')
            ->select('users.user_id')
            ->get();
     $user_imfor = (array)$users[0];
     $otoven_video_instrum = OtovenVideoParticipants::where('otoven_video_id', $id)->value('instruments');
     $otoven_video_parti = new OtovenVideoParticipants;
     $user = new User;
     
    return view('otoven/in_one_video_article')
    ->with('otoven_videos_imfor',$otoven_videos_imfor)
    ->with('user_imfor',$user_imfor)
    ->with('otoven_video_parti',$otoven_video_parti)
    ->with('user',$user)
    ->with('otoven_video_instrum',$otoven_video_instrum);
    }
    
    public function otoven_in_two_video_article($id){
         $otoven_videos_imfor = OtovenVideos::where('id',$id)->get();
          $bpm = OtovenVideos::where('id',$id)->value('bpm');
      
         
         $otoven_video_parti = new OtovenVideoParticipants;
         $user = new User;
         $writer = User::where('id',$otoven_videos_imfor[0]['writer_id'])->get();

         $otoven_user = OtovenVideoParticipants::where('otoven_video_id',$id)->get();
         $user_name = [];
         $user_instrum = [];
         $user_img = [];
         $user_content = [];
    
         foreach($otoven_user as $otoven_user_name){
             
      
          $name = User::where('id',$otoven_user_name['user_id'])->get();
         

          foreach($name as $u_name){
          
          array_push($user_name,$u_name['user_id']);

          $test_instrum = OtovenVideoParticipants::where('otoven_video_id',$id)->get();
         
          
          }
        }
    
        foreach ($test_instrum as $inst) {
          
            array_push($user_instrum,$inst['instruments']);
            
        }
        
        //user 이미지
        foreach($otoven_user as $user_image){
            
            $otoven_user_img = User::where('id',$user_image['user_id'])->value('userImage');
            array_push($user_img,$otoven_user_img);
            
            $otoven_user_contents = OtovenVideos::where('writer_id',$user_image['user_id'])->get();
           
            foreach($otoven_user_contents as $otoven_user_content){
            array_push($user_content,$otoven_user_content['contents']);
            }
            
            
        }
  
        
   
         return view('otoven/in_two_video_article')
         ->with('otoven_videos_imfor',$otoven_videos_imfor)
         ->with('bpm',$bpm)
         ->with('otoven_video_parti', $otoven_video_parti)
         ->with('user_img',$user_img)
         ->with('user_instrum',$user_instrum)
         ->with('user_name',$user_name)
         ->with('user_content',$user_content)
         ->with('writer',$writer);
        
    }
    
    
    public function otoven_in_one_video_upload(Request $request){

      $first_musician = $request->session()->get('user_id');

      $file = $request->all();
      $file_name = date( 'YmdHis').$first_musician.".mp4";
      $file['data']->move(public_path('uploads/otoven/video'), $file_name);


      echo json_encode($file_name);


    }
    
    public function otoven_video_ansemble_one($id){
        $user_id = session('user_id');
            
             // 로그인 off시 에러발생
          if(is_null($user_id)){
            echo '<script> alert("로그인이 필요한 서비스입니다."); </script>';
            echo "<script> location.replace('/login'); </script>"; 
            
            exit;
          }
        
        $file_name = OtovenVideoParticipants::where('otoven_video_id',$id)->value('file_name');
        $bpm = OtovenVideos::where('id',$id)->value('bpm');
        if($bpm==null){
            $bpm=0;
        }
        return view('/otoven/video_ansemble_one')
        ->with('video_file_name',$file_name)
        ->with('bpm',$bpm)
        ->with('id',$id);
    }
    
    public function otoven_video_ansemble_two($id){
        
        $otoven_videos_imfor = OtovenVideos::where('id',$id)->get();
        $bpm = OtovenVideos::where('id',$id)->value('bpm');
      
        
        $file_name = [];
        
        foreach($otoven_videos_imfor as $content){
           
           $otoven_video_parti = OtovenVideoParticipants::all()->where('otoven_video_id',$content['id']);
           
           foreach($otoven_video_parti as $otoven_video_file){
            array_push($file_name,$otoven_video_file['file_name']);
          
         }
       
        
        }
        
        
        return view('/otoven/video_ansemble_two')
        ->with('id',$id)
        ->with('bpm',$bpm)
        ->with('file_name',$file_name);
       
    }
    
    public function otoven_video_recording_one($id=0){
        $user_id = session('user_id');
            
             // 로그인 off시 에러발생
          if(is_null($user_id)){
            echo '<script> alert("로그인이 필요한 서비스입니다."); </script>';
            echo "<script> location.replace('/login'); </script>"; 
            
            exit;
          }

        
        $bpm=0;
        return view('otoven/video_recording_one')
        ->with('id',$id)
        ->with('bpm',$bpm);
    }

    public function otoven_video_recording_write_send(Request $request){
     $wt = $request->all();
     return view('/otoven/video_recording_write')->with('write',$wt);

    }
    
    public function otoven_video_recording_write(Request $request, $video_file_name){
       
       
        $board_id = $request->all();
        $user_id = $request->session()->get('user_id');
        $session_id=DB::table('users')->where('user_id', $user_id)->value('id');
       
        $video_subject = $request->input('video_subject');
        $video_music_name = $request->input('video_music_name');
        $video_content = $request->input('video_content'); 
        $video_instrument = $request->input('instrument');
        $video_genre = $request->input('genre');
        $video_bpm = $request->input('bpm');
        $video_volume = $request->input('volume');
      
    
        
        $otoven_videos = new OtovenVideos;
        $otoven_video_participants = new OtovenVideoParticipants;
        
        $otoven_videos->subject = $video_subject;
        $otoven_videos->music_name = $video_music_name;
        $otoven_videos->contents = $video_content;
        $otoven_videos->goods = 0;
        $otoven_videos->genre = $video_genre;
        $otoven_videos->bpm = $video_bpm;
        $otoven_videos->volume = $video_volume;
        
        
        
        // $otoven_video_participants->user_id = $session_id;
        // $otoven_video_participants->otoven_video_id = $otoven_videos['id'];
        // $otoven_video_participants->file_name = $video_file_name;
        // $otoven_video_participants->save();
        
        
        if($board_id['board_id']==0){
    
            $otoven_videos->writer_id = $session_id;
            $otoven_videos->first_musician_id = $session_id;

            $otoven_video_participants->user_id = $session_id;
            $otoven_video_participants->file_name = $video_file_name;
            $otoven_videos->save();
            $otoven_video_participants->otoven_video_id = $otoven_videos['id'];
            $otoven_video_participants->instruments = $video_instrument;
            $otoven_video_participants->save();
            echo "<script>location.href='/otoven_video_collaborate_wait';</script>";
            
        }else{
           
            $otoven_video_id = OtovenVideoParticipants::where('otoven_video_id',$board_id['board_id'])->get();
            $otoven_video_first_board = OtovenVideos::find($board_id['board_id']);
            $otoven_videos->first_musician_id = $otoven_video_first_board['first_musician_id'];
            $otoven_videos->writer_id = $session_id;
            $otoven_videos->save();
            
            
            foreach($otoven_video_id as $otoven_video){
                $otoven_video_participants = new OtovenVideoParticipants;
                $otoven_video_participants->user_id = $otoven_video['user_id'];
                $otoven_video_participants->file_name = $otoven_video['file_name'];
                $otoven_video_participants->otoven_video_id = $otoven_videos['id'];
                $otoven_video_participants->instruments = $otoven_video['instruments'];
                $otoven_video_participants->save();
                
            }
                $otoven_video_participants = new OtovenVideoParticipants;
                $otoven_video_participants->user_id = $session_id;
                $otoven_video_participants->file_name = $video_file_name;
                $otoven_video_participants->otoven_video_id = $otoven_videos['id'];
                $otoven_video_participants->instruments = $video_instrument;
                $otoven_video_participants->save();
                
            
            // echo "<script>location.href='/otoven_video_collaborate_complete';</script>";
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //현경's
    
    function audioRecord(Request $request){
        $user_id = session('user_id');
            
             // 로그인 off시 에러발생
          if(is_null($user_id)){
            echo '<script> alert("로그인이 필요한 서비스입니다."); </script>';
            echo "<script> location.replace('/login'); </script>"; 
            
            exit;
          }
        
        $partici_lists = (isset($request->all()['partici_checked_list']))?explode(",", $request->all()['partici_checked_list']):'';
        $otoven_board_id = ( isset($request->all()['otoven_board_id']) )?$request->all()['otoven_board_id']:'';
        
        return view('otoven.Record_recording_work')->with('particis',$partici_lists)
                ->with('otoven_board_id',$otoven_board_id);
    }
    
     function writeBoard(Request $request){
        $file = $request->all();
        
        return view('otoven.Record_recording_upload')->with('file',$file);
    }
    
    function blobTrans(Request $request){
        $file = $request->all();
        $user_file = date( 'YmdHis')."oa.mp3";
        
        $file['data']->move(public_path('uploads/otoven/audio'), $user_file);

        echo json_encode($user_file);

    }
    
    function audioBefore(){
       
       $boards = [];
       $partici_name = array();
        $otoven_audio_boards = OtovenAudios::all();
        $k = 0;
        for($i=0; $i<count($otoven_audio_boards) ;$i++){
            $board_id = $otoven_audio_boards[$i]['id'];
            $otoven_audio_particis = OtovenAudioParticipants::all()->where('otoven_audio_id','=',$board_id);
            if( count($otoven_audio_particis) < 2 ){
                array_push($boards,$otoven_audio_boards[$i]);
               
                for($j = 0; $j<count($otoven_audio_particis) ;$j++){
                    $current_key = key(current( $otoven_audio_particis ));
                    $name = DB::table('users')->where('id','=',$otoven_audio_particis[$current_key]['user_id']);
                    $partici_name[$k] = $name;
               
                }
                $k++;
            }
        }   //합주자 수
        

        return view('otoven.Record_Collaborate_before')
                ->with('otoven_audio_boards',$boards)->with('partici_name',$partici_name);
    }   //합주전 오디오 게시물
    
    function audioBeforeView($id){
       
        $otoven_audio_board = OtovenAudios::find($id);
        $otoven_audio_particis = OtovenAudioParticipants::all()->where('otoven_audio_id','=',$id);
        $participants = [];
        for($i = 0; $i<count($otoven_audio_particis) ;$i++){
            $current_key = key(current( $otoven_audio_particis ));
            $particis = User::find($otoven_audio_particis[$current_key]['user_id']);
            array_push($participants, $particis);
            
        }
        
        
        return view('/otoven/Record_collaborate_beforeView')->with('id',$id)->with('participants',$participants)
                    ->with('otoven_audio_board',$otoven_audio_board)->with('otoven_audio_particis',$otoven_audio_particis);
       
    }
    
    function audioAfter(){
       
       $boards = [];
       $partici_name = [];
       $partici_img = [];
        $otoven_audio_boards = OtovenAudios::all();
        $k = 0;
        for($i=0; $i<count($otoven_audio_boards) ;$i++){
            $board_id = $otoven_audio_boards[$i]['id'];
            $otoven_audio_particis = OtovenAudioParticipants::all()->where('otoven_audio_id','=',$board_id);
            if( count($otoven_audio_particis) >= 2 ){
                array_push($boards,$otoven_audio_boards[$i]);
               
                for($j = 0; $j<count($otoven_audio_particis) ;$j++){
                    $current_key = key(current( $otoven_audio_particis ));
                    $name = DB::table('users')->where('id','=',$otoven_audio_particis[$current_key]['user_id'])->value('user_id').',';
                    $img = DB::table('users')->where('id','=',$otoven_audio_particis[$current_key]['user_id'])->value('userImage').',';
                    if($j==0){
                        $partici_name[$k] = $name;
                        $partici_img[$k] = $img;
                    }else{
                        $partici_name[$k] = $partici_name[$k].','.$name;
                        $partici_img[$k] = $partici_img[$k].','.$img;
                    }
                }
                $k++;
            }
        }   //합주자 수
        

        return view('otoven.Record_Collaborate_after')
                ->with('otoven_audio_boards',$boards)->with('partici_name',$partici_name)->with('partici_img',$partici_img);
    }   //합주후 오디오 게시물
    
    function audioAfterView($id){
       
        $otoven_audio_board = OtovenAudios::find($id);
        $otoven_audio_particis = OtovenAudioParticipants::all()->where('otoven_audio_id','=',$id);
        $participants = [];
        for($i = 0; $i<count($otoven_audio_particis) ;$i++){
            $current_key = key(current( $otoven_audio_particis ));
            $particis = User::find($otoven_audio_particis[$current_key]['user_id']);
            array_push($participants, $particis);
            
        }
        
        
        return view('/otoven/Record_collaborate_afterView')->with('id',$id)->with('participants',$participants)
                    ->with('otoven_audio_board',$otoven_audio_board)->with('otoven_audio_particis',$otoven_audio_particis);
       
    }
    
    //////////////////////////////////////////
    
    function insertBoard(Request $request){
        $location = 'otoven/record_before';
        $user_id = session('user_id');
        $sessionID    = DB::table('users')->where('user_id', $user_id)->value('id');
        
        $file = $request->all();
        $otoven_audio_board = new OtovenAudios;
        $otoven_audio_board->subject = $file['subject'];
        $otoven_audio_board->goods = 0;
        if( isset($file['selected_particis']) ){    //합주자 있다는 건
            $participants_arr = explode(",", $file['selected_particis']);
            $otoven_audio_first_board = OtovenAudios::find($file['otoven_board_id']);
            $otoven_audio_board->first_musician_id = $otoven_audio_first_board['first_musician_id'];
            $otoven_audio_board->writer_id = $sessionID ;        //<---- 현재 사용자 id 수정 필요
            $otoven_audio_board->save();
            $is_final = false;
            $load_partici = OtovenAudioParticipants::all()->where('otoven_audio_id','=',$file['otoven_board_id']);
//확인 필요!!


            for($i = 0 ;$i<count($participants_arr) ; $i++){
                $otoven_audio_participants = new OtovenAudioParticipants;
                $current_key = key(current( $load_partici->where('file_name','=',$participants_arr[$i]) ));
                $otoven_audio_participants->user_id =
                    $load_partici->where('file_name','=',$participants_arr[$i])[$current_key]['attributes']['user_id'];
                $otoven_audio_participants->file_name = $participants_arr[$i];

                if( ($i+1)==count($participants_arr) && (!$is_final)) {
                    $is_final = true;
                    $i -= 1;
                }

                if( $is_final && (($i+1)==count($participants_arr)) ) {
                    $otoven_audio_participants->file_name = $file['file_name'];
                    $otoven_audio_participants->user_id = $sessionID;  //<---- 현재 사용자 id 수정 필요
                }

                $otoven_audio_participants->otoven_audio_id = $otoven_audio_board['id'];
                $otoven_audio_participants->save();
            }
            $location = 'otoven/record_collaborate_after';
        }       //처음 연주 아님 (참여자 저장)
        
        else{
            $otoven_audio_board->first_musician_id = $sessionID;       //<----------- 현재 사용자id 수정필요
            $otoven_audio_board->writer_id = $sessionID;               //<----------- 현재 사용자id 수정필요
            $otoven_audio_board->save();

            $otoven_audio_participants = new OtovenAudioParticipants;
            $otoven_audio_participants->user_id = $sessionID;          //<---- 현재 사용자 id 수정 필요
            $otoven_audio_participants->file_name = $file['file_name'];
            $otoven_audio_participants->otoven_audio_id = $otoven_audio_board['id'];
            $otoven_audio_participants->save();

        }       //처음 연주

        echo("<script>location.href='/$location';</script>");
    }
}