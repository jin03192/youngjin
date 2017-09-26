<?php

namespace App\Http\Controllers\Guild;
use Input;
use DB;
use Session;
use Auth;
use App\Guild;
use App\GuildUser;
use App\User;
use App\Midis;
use App\BandAudios;
use App\BandAudioParticipants;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


//길드 컨트롤러
class GuildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //길드 메인페이지에 모든 길드 표시 (페이지네이션 추가 예정)
    public function guildlist(request $request)
    {
        $guilds=DB::table('guilds')->get();
        
        $user = $request->session()->get('user_id','');
        $myguild = GuildUser::where('guild_user', $user)->get();
        
        
        if(!empty($myguild[0])){
            $myguild = GuildUser::where('guild_user',$user)->get();
            
            return view('guild.Guild_Main')->with('myguild',$myguild)->with('guilds',$guilds);
        }
        
        return view('guild.Guild_Main')->with('myguild',$myguild)->with('guilds',$guilds);
    }
    //길드 클릭 시 상세페이지
    public function guildview($guild_id){
        $user_id = session('user_id');
      
          // 로그인 off시 에러발생
          if(is_null($user_id)){
            // Header("Location:/login");
            echo '<script> alert("로그인이 필요한 서비스입니다."); </script>';
            echo "<script> location.replace('/login'); </script>"; 
            
          }

        $guild = Guild::where('id', $guild_id)->get();
        return view('guild.Guild_View')->with('guild',$guild);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guildinfo(request $request){
        $user_id = session('user_id');
      
      // 로그인 off시 에러발생
      if(is_null($user_id)){
        // Header("Location:/login");
        echo '<script> alert("로그인이 필요한 서비스입니다."); </script>';
        echo "<script> location.replace('/login'); </script>"; 
        
      }
        $guild_master = $request->session()->get('user_id','');
        
        $guildinfo = Guild::where('guild_master', $guild_master)->get();
        
        
        if(!empty($guildinfo[0]['guild_master'])){
            echo "<script> 
            alert('이미 길드에 가입되어 있습니다. 확인 후 다시 시도해주시기 바랍니다.');
            window.close();
            </script>";
            
        }
        else{
            $masterid = User::where('user_id', $guild_master)->get();
            return view('guild.Guild_Create')->with('masterid',$masterid);
        }
    }
     
    public function guildcreate(request $request)
    {
        $user_id = session('user_id');
      
          // 로그인 off시 에러발생
          if(is_null($user_id)){
            // Header("Location:/login");
            echo '<script> alert("로그인이 필요한 서비스입니다."); </script>';
            echo "<script> location.replace('/login'); </script>"; 
            
          }
        //
        $guild_name = $request->input('guild_name');
        $guild_master = $request->session()->get('user_id','');
        $guild_position = 'MASTER';
        
        // 경로
        $destinationPath = public_path().'/img/guildmark';
        
        // 파일명
        $name = Input::file('mark')->getClientOriginalName();
        
        
        Input::file('mark')->move($destinationPath, $name);
        
        
        $uploads_dir = '../img/guildmark';
        $allowed_ext = array('jpg','jpeg','png','gif','bmp');
        
        // 변수 정리
        $error = $_FILES['mark']['error'];
        $f_name = $_FILES['mark']['name'];
        $test = explode('.', $f_name);
        $ext = array_pop($test);
        
        // 오류 확인
        if( $error != UPLOAD_ERR_OK ) {
          switch( $error ) {
          	case UPLOAD_ERR_INI_SIZE:
          	case UPLOAD_ERR_FORM_SIZE:
          		echo "파일이 너무 큽니다. ($error)";
          		break;
          	case UPLOAD_ERR_NO_FILE:
          		echo "파일이 첨부되지 않았습니다. ($error)";
          		break;
          	default:
          		echo "파일이 제대로 업로드되지 않았습니다. ($error)";
          }
          exit;
        }
        
        // 확장자 확인
        if( !in_array($ext, $allowed_ext) ) {
          echo "허용되지 않는 확장자입니다.";
          exit;
        }
        
        // 파일 이동
        move_uploaded_file( $_FILES['mark']['tmp_name'], "$uploads_dir");
        
        $guilds = new Guild;
        $guilds->guild_name = $guild_name;
        $guilds->guild_mark = $f_name;
        $guilds->guild_master = $guild_master;
        $guilds->guild_user = 0;
        $guilds->guild_point = 0;
        
        $guilds->save();
        
        $guildid = Guild::where('guild_name',$guild_name)->value('id');
        
        $joinuser = Guild::where('id',$guildid)->value('guild_user');
        
        Guild::where('id',$guildid)->update(['guild_user' => $joinuser = $joinuser + 1]);
        
        $guildusers = new GuildUser;
        $guildusers->guild_name = $guildid;
        $guildusers->guild_user = $guild_master;
        $guildusers->guild_position = 'MASTER';
        
        $guildusers->save();
        
        echo "<script> 
        window.close();
        location.href='http://harmony-project-chonahoom.c9users.io/guildmain';
        </script>";
        //값을 데려가지 못해서 return view()는 사용못함
        }
        
        public function guildjoin(request $request){
            $guildid = $request->id;
            
            $user = $request->session()->get('user_id','');
        
            $checkmaster = GuildUser::where('guild_user', $user)->get();
            $joinguildname = Guild::where('id', $guildid)->get();
            $joinguildname = $joinguildname[0]['id'];
            
            if(!empty($checkmaster[0]['guild_user'])){
            echo "<script> 
            alert('이미 길드에 가입되어 있습니다. 확인 후 다시 시도해주시기 바랍니다.');
            window.close();
            history.go(-1);
            </script>";
            }
            else{
                $joinuser = Guild::where('id',$guildid)->value('guild_user');
                Guild::where('id',$joinguildname)->update(['guild_user' => $joinuser = $joinuser + 1]);
                
                $guildusers = new GuildUser;
                
                $guildusers->guild_user = $user;
                $guildusers->guild_position = 'MEMBER';
                $guildusers->guild_name = $joinguildname;
                
                $guildusers->save();
                
                echo "<script>window.close();
               history.go(-1);
                </script>";
            }
            
        }
        public function myguildview($guild_name){
            $user_id = session('user_id');
            
            $userinfo = User::where('user_id',$user_id)->get();
            
            $myguild = Guild::where('id', $guild_name)->get();
            $myguildinfo = GuildUser::where('guild_name',$myguild[0]['id'])->get();
            $connect = array();
            $connection = [];
            
            for($i=0; $i<count($myguildinfo); $i++){
                $connect[$i] = $myguildinfo[$i]->guild_user;
                $connection[$i] = User::where('user_id',$connect[$i])->value('Connection');
                // $savetime[$i] = $connection[$i]['Connection'];
            }
            
            return view('guild.Guild_Myguild')->with('connections',$connection)
            ->with('guildmembers',$myguildinfo)->with('myguild',$myguild)->with('user_id', $userinfo)->with('myguildinfo', $myguildinfo);
        }
        
        public function infolist(Request $request){
            
            $meminfo = $request->input('meminfo');
            $userid = User::where('user_id',$meminfo)->value('id');
            
            $band_audio_boards = BandAudios::where('first_musician_id',$userid)
            ->orWhere('writer_id',$userid)->get();
            
            $boards = [];
            
            for($i = 0; $i < count($band_audio_boards); $i++){
                $boards[$i] = Midis::where('id',$band_audio_boards[$i]['midi_id'])->value('music_name');
            }
            
            $band_record = [];
            
            $band_record = [$boards,$band_audio_boards];
            
            echo json_encode($band_record);
        }
        // public function memberstate($guild_name){
            
        //     $guildid = Guild::where('id', $guild_name)->get();
        //     $myguildinfo = GuildUser::where('guild_name',$guildid[0]['id'])->get();
            
        //     $connect = [];
        //     $user = [];
            
        //     for($i=0; $i<count($myguildinfo); $i++){
        //         $connect = $myguildinfo[$i]['guild_user'];
        //         $connection = User::where('user_id',$connect)->value('Connection');
        //     }
            

        //     return view('guild.Guild_Myguild')->with('connections',$connection);
        // }
        
}