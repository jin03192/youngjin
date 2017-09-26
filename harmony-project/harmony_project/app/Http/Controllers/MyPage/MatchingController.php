<?php

namespace App\Http\Controllers\MyPage;

use DB;
use App\Matching;
use App\User;
use App\Midi;
use App\BandAudios;
use App\BandAudioParticipants;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/*----------------------------------------------------------------------------------------------------/
/                                           매칭 관련 컨트롤러                                         /
/----------------------------------------------------------------------------------------------------*/

class MatchingController extends Controller
{


  /*----------------------------------------------------------------------------------------------------/
  /                                     음악 악기 및 음악 장르 분석                                       /
  /----------------------------------------------------------------------------------------------------*/

  public function main()
  {

    /*----------------------------------------------------------------------------------------------------/
    /                                           음악 악기 분석                                             /
    /----------------------------------------------------------------------------------------------------*/
      $user_id = session('user_id');
      
      // 로그인 off시 에러발생
      if(is_null($user_id)){
        // Header("Location:/login");
        echo '<script> alert("로그인이 필요한 서비스입니다."); </script>';
        echo "<script> location.replace('/login'); </script>"; 
        
      }
      
      $myImage       = User::where('user_id',$user_id)->value('userImage');
      
      $sessionID    = DB::table('users')->where('user_id', $user_id)->value('id');
      
      
      // 각 악기별 연주 횟수를 담은 변수
      $myPiano       = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'piano')->value('count');
      $myDrum        = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'drum')->value('count');
      $myGuitar      = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'guitar')->value('count');
      $mySynthesizer = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'synthesizer')->value('count');

     
      // 총 연주 횟수
      $countInstrument = $myPiano + $myDrum + $myGuitar + $mySynthesizer;

      $instruments = array("ピアノ" => $myPiano,"ドラム" => $myDrum,"ギター" => $myGuitar, "シンセサイザー" => $mySynthesizer);

      // 연주 횟수 중 가장 많이 연주한 횟수
      $maxInstruments = max($instruments);

      $highInstruments = array();
      $textInstruments = "";
      foreach($instruments as $key => $value) {

        // 연관 배열의 값과 연주 최대치가 같을 경우 (최대 연주한 악기) $highInstruments에 악기 이름의 배열 값을 넣음
        if($value == $maxInstruments){
          array_unshift($highInstruments, $key);
        }
      }

      for($count = 1; $count <= count($highInstruments); $count++){
        if($count != count($highInstruments)) {
          $textInstruments .= "{$highInstruments[$count-1]} ,";
        } else {
          $textInstruments .= $highInstruments[$count-1];
        }
      }

      /*----------------------------------------------------------------------------------------------------/
      /                                           음악 장르 분석                                             /
      /----------------------------------------------------------------------------------------------------*/

      // 각 장르별 연주 횟수를 담은 변수
      $myPop         = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'pop')->value('count');
      $myDance         = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'dance')->value('count');
      $myClassic     = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'classic')->value('count');
      $myRock        = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'rock')->value('count');

      $genres = array("POP" => $myPop, "DANCE" => $myDance, "CLASSIC" => $myClassic, "ROCK" => $myRock);
      
      // 연주 횟수 중 가장 많이 연주한 횟수
        $maxGenres = max($genres);

        $highGenres = array();
        $textGenres = "";
        foreach($genres as $key => $value) {

          // 연관 배열의 값과 연주 최대치가 같을 경우 (최대 연주한 악기) $highGenres에 악기 이름의 배열 값을 넣음
          if($value == $maxGenres){
            array_unshift($highGenres, $key);
          }
        }

        for($count = 1; $count <= count($highGenres); $count++){
          if($count != count($highGenres)) {
            $textGenres .= "{$highGenres[$count-1]} ,";
          } else {
            $textGenres .= $highGenres[$count-1];
          }
        }
      /*----------------------------------------------------------------------------------------------------/
      /                                           최근 연주 3곡                                             /
      /----------------------------------------------------------------------------------------------------*/
      
      $subjectList = DB::table('band_audios')
      ->join('midis', 'band_audios.midi_id', '=', 'midis.id')
      ->select('*')
      ->where('writer_id', $sessionID)                                   
      ->get();
      
      
      return view('mypage/matching_main')->with('genres',$genres)->with('instruments',$instruments)
      ->with('countInstrument',$countInstrument)->with('user_id', $user_id)->with('userImage',$myImage)->with('subjectList',$subjectList)
      ->with('textInstruments',$textInstruments)->with('textGenres',$textGenres);
  }

  public function result(){


    /*----------------------------------------------------------------------------------------------------/
    /                                           음악 악기 분석                                             /
    /----------------------------------------------------------------------------------------------------*/


      $user_id = session('user_id');

      $userIDs = DB::table('users')
                  ->join('instrumentusers', 'users.id', '=', 'instrumentusers.id')
                  ->select('users.*')
                  ->distinct()->get();
      $sessionID    = DB::table('users')->where('user_id', $user_id)->value('id');
      
      $danceMidi = DB::table('midis')->where('genre','dance')->get();
      $rockMidi = DB::table('midis')->where('genre','rock')->get();
      $popMidi = DB::table('midis')->where('genre','pop')->get();
      $classicMidi = DB::table('midis')->where('genre','classic')->get();
      
      $danceMidis = array();
      $rockMidis = array();
      $popMidis = array();
      $classicMidis = array();
      
      for($count = 0; $count < count($danceMidi); $count++){
        $danceMidis[$count] = $danceMidi[$count];
      }
      
      for($count = 0; $count < count($rockMidi); $count++){
        $rockMidis[$count] = $rockMidi[$count];
      }
      
      for($count = 0; $count < count($popMidi); $count++){
        $popMidis[$count] = $popMidi[$count];
      }
      
      for($count = 0; $count < count($classicMidi); $count++){
        $classicMidis[$count] = $classicMidi[$count];
      }
      
      // 각 악기별 연주 횟수를 담은 변수
      $myPiano       = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'piano')->value('count');
      $myDrum        = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'drum')->value('count');
      $myGuitar      = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'guitar')->value('count');
      $mySynthesizer = DB::table('instrumentusers')->where('id',$sessionID)->where('instrument', 'synthesizer')->value('count');

      // 현재 본인의 사용자가 가장 많이 연주한 악기
      $maxInstrumentValue = DB::table('instrumentusers')->where('id',$sessionID)->max('count');
      $maxInst = DB::table('instrumentusers')->where('id',$sessionID)->where('count', $maxInstrumentValue)->get();


      $userInstruments = array();
      for($count = 0; $count < count($maxInst); $count++){
        array_push($userInstruments, $maxInst[$count]->instrument);
      }

      $myInstruments = array();
  
  
  // userMaxInstrumentValue 각각의 사용자의 음원 연주한 악기 중 가장 많이 연주한 악기를 담은 배열
        
      for($count = 1; $count <= count($userIDs); $count++){
        $userCount = 0;

        $userMaxInstrumentValue = DB::table('instrumentusers')->where('id', $count)->max('count');
        $userMaxInst = DB::table('instrumentusers')->where('id',$count)->where('count', $userMaxInstrumentValue)->get();
        

        // myInstruments 사용자 각각의 자주 연주하는 악기 이름을 담은 배열
          $myInstruments[$count-1][0] = $userMaxInst[0]->instrument;
            if(count($userMaxInst) == 2){
              $myInstruments[$count-1][1] = $userMaxInst[1]->instrument;
            }else if(count($userMaxInst) == 3){
              $myInstruments[$count-1][1] = $userMaxInst[1]->instrument;
              $myInstruments[$count-1][2] = $userMaxInst[2]->instrument;
            }else if(count($userMaxInst) == 4){
              $myInstruments[$count-1][1] = $userMaxInst[1]->instrument;
              $myInstruments[$count-1][2] = $userMaxInst[2]->instrument;
              $myInstruments[$count-1][3] = $userMaxInst[3]->instrument;
            }
        }

        $printInstruments = array();
        $instrumentArray = array();
        // 현 사용자가 즐겨 연주하는 악기와 각각 사용자간의 즐겨 연주하는 악기가 다를 경우 출력
      for($count = 0; $count < count($userIDs); $count++){
        if(count(array_diff($userInstruments, $myInstruments[$count])) == count($userInstruments)){
            // array_push($printInstruments, $userIDs[$count]->user_id);
            array_push($instrumentArray, $userIDs[$count]->id);
            $printInstruments[$count] = $userIDs[$count];
          }
        }
        
        
      /*----------------------------------------------------------------------------------------------------/
      /                                        가장 많이 연주한 악기                                          /
      /----------------------------------------------------------------------------------------------------*/

      $instruments = array("ピアノ" => $myPiano, "ドラム" => $myDrum, "ギター" => $myGuitar, "シンセサイザー" => $mySynthesizer);

      // 연주 횟수 중 가장 많이 연주한 횟수
      $maxInstruments = max($instruments);

      $highInstruments = array();
      $textInstruments = "";
      foreach($instruments as $key => $value) {

        // 연관 배열의 값과 연주 최대치가 같을 경우 (최대 연주한 악기) $highInstruments에 악기 이름의 배열 값을 넣음
        if($value == $maxInstruments){
          array_unshift($highInstruments, $key);
        }
      }

      for($count = 1; $count <= count($highInstruments); $count++){
        if($count != count($highInstruments)) {
          $textInstruments .= "{$highInstruments[$count-1]} ,";
        } else {
          $textInstruments .= $highInstruments[$count-1];
        }
      }
    
    

        /*----------------------------------------------------------------------------------------------------/
        /                                           음악 장르 분석                                             /
        /----------------------------------------------------------------------------------------------------*/


        // 각 장르별 연주 횟수를 담은 변수
        $myPop         = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'pop')->value('count');
        $myDance         = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'dance')->value('count');
        $myClassic     = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'classic')->value('count');
        $myRock        = DB::table('genreusers')->where('id',$sessionID)->where('genre', 'rock')->value('count');

        // 현재 본인의 사용자가 가장 많이 연주했던 장르
        $maxGenreValue = DB::table('genreusers')->where('id',$sessionID)->max('count');
        $maxGenre = DB::table('genreusers')->where('id',$sessionID)->where('count', $maxGenreValue)->get();


        $userGenres = array();
        $printInstrumentGenres = array();
        
        
        for($count = 0; $count < count($maxGenre); $count++){
          array_push($userGenres, $maxGenre[$count]->genre);
        }

        $myGenres = array();

        for($count = 1; $count <= count($userIDs); $count++){

          // userMaxGenreValue 각각의 사용자의 음원 연주한 악기 중 가장 많이 연주한 악기를 담은 배열
          $userMaxGenreValue = DB::table('genreusers')->where('id', $count)->max('count');
          $userMaxInst = DB::table('genreusers')->where('id',$count)->where('count', $userMaxGenreValue)->get();
          
          // myGenres 사용자 각각의 자주 연주하는 악기 이름을 담은 배열
            $myGenres[$count-1][0] = $userMaxInst[0]->genre;
              if(count($userMaxInst) == 2){
                $myGenres[$count-1][1] = $userMaxInst[1]->genre;
              }else if(count($userMaxInst) == 3){
                $myGenres[$count-1][1] = $userMaxInst[1]->genre;
                $myGenres[$count-1][2] = $userMaxInst[2]->genre;
              }else if(count($userMaxInst) == 4){
                $myGenres[$count-1][1] = $userMaxInst[1]->genre;
                $myGenres[$count-1][2] = $userMaxInst[2]->genre;
                $myGenres[$count-1][3] = $userMaxInst[3]->genre;
              }
          }
          

          $printGenres = array();
          /* 현 사용자가 즐겨 연주하는 장르와 각각 사용자간의 즐겨 연주하는 장르가 같은 경우 출력 */
            for($count = 1; $count <= count($userIDs); $count++){
              if(count(array_diff($userGenres, $myGenres[$count-1])) < count($userGenres)){
                  // array_push($printGenres, $userIDs[$count-1]->user_id);
                  if(strcasecmp($userIDs[$count-1]->user_id, $user_id) != 0){
                    $printGenres[$count-1] = $userIDs[$count-1];
                    $GenreID[$count-1] = $myGenres[$count-1];
                  }
                    
                }else{
                  $GenreID[$count-1] = NULL;
                }
                
              }
          /*                                     ここまで( ´∀｀ )                                */
      

          /* 본인의 자주 이용하는 악기의 다른 악기의 유저 중 연주하는 장르 취미가 같은 유저들    */
          for($count = 0; $count < count($instrumentArray); $count++){
            if(count(array_diff($userGenres, $myGenres[$instrumentArray[$count] - 1])) < count($userGenres)){
            $printInstrumentGenres[$instrumentArray[$count] - 1] = $userIDs[$instrumentArray[$count] - 1];
            }
          
          }
          
          /*                                  ここまで( ´∀｀ )                          */



        /*----------------------------------------------------------------------------------------------------/
        /                                        가장 많이 연주한 장르                                          /
        /----------------------------------------------------------------------------------------------------*/

        $genres = array("POP" => $myPop, "DANCE" => $myDance, "CLASSIC" => $myClassic, "ROCK" => $myRock);

        // 연주 횟수 중 가장 많이 연주한 횟수
        $maxGenres = max($genres);

        $highGenres = array();
        $textGenres = "";
        foreach($genres as $key => $value) {

          // 연관 배열의 값과 연주 최대치가 같을 경우 (최대 연주한 악기) $highGenres에 악기 이름의 배열 값을 넣음
          if($value == $maxGenres){
            array_unshift($highGenres, $key);
          }
        }

        for($count = 1; $count <= count($highGenres); $count++){
          if($count != count($highGenres)) {
            $textGenres .= "{$highGenres[$count-1]} ,";
          } else {
            $textGenres .= $highGenres[$count-1];
          }
        }
      return view('mypage/matching_result')->with('genres',$genres)->with('textInstruments', $textInstruments)
      ->with('textGenres',$textGenres)->with('user_id', $user_id)->with('printInstruments', $printInstruments)
      ->with('printInstrumentGenres',$printInstrumentGenres)->with('printGenres', $printGenres)->with('userIDs', $userIDs)
      ->with('myGenres',$myGenres)->with('myInstruments',$myInstruments)->with('danceMidis', $danceMidis)->with('classicMidis', $classicMidis)->with('rockMidis', $rockMidis)
      ->with('popMidis', $popMidis);

  }
  
    // public function userDetail($user_id){
      
    //   return view('mypage/user');
    // }
  
    public function userDetail($user_id, $now_page){
      $userNumber = DB::table('users')->where('user_id',$user_id)->value('id');
      $userData = DB::table('band_audios')->join('midis', 'band_audios.midi_id', '=', 'midis.id')
      ->where('writer_id',$userNumber)->select('band_audios.id as musicID', 'path', 'img', 'subject', 'instrument', 'created_at')->get();
      $userMusics = BandAudios::where('writer_id',$userNumber)->get();

      
      // use App\BandAudios; BandAudioParticipants; 
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
        
        $page = ceil((count($userData) / 2));
        // for($kCount = 0; $kCount <= 1; $kCount++) {
          
        //   $pageData = ($now_page-1)*2;
        //   if($now_page == $page && $now_page % 2 == 1){
        //     dump($userData[$pageData + $kCount]);
        //     echo "응 없어";
        //     break;
        //   } else {
        //   }
          
        //   echo "윽..<br>";
        // }
      return view('mypage/user')->with('userData', $userData)->with('partici_name', $partici_name)
      ->with('page', $page)->with('now_page',$now_page)->with('user_id',$user_id);
    }
    public function destroy(Matching $matching)
    {
        //
    }
}
?>
