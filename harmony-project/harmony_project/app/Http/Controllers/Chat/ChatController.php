<?php
use DateTime;
namespace App\Http\Controllers\Chat;
use App\ModelName;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use LRedis;
use App\User;
use DB;
class ChatController extends Controller {
	// public function __construct()
	// {
	// 	$this->middleware('guest');
	// }
	// public function sendMessage(){
	// 	$redis = LRedis::connection();
	// 	$data = ['message' => Request::input('message'), 'user' => Request::input('user')];
	// 	$redis->publish('message', json_encode($data));
	// 	return response()->json([]);
	// }
	// public function userlist(request $request){
 //           $my_id=DB::table('users')->get();
 //           return view('guild/index')->with('guilduser',$my_id);
	// }
	
	public function chatInformation($message,$user,$times){
          //$morai = $request->all();
         // $msg = $request->input('msg');
         // $user = $request->input('user');
         //   $user_id = session('user_id');
         // $todo = new ModelName();
    	  //$todo->msg = $msg;
    	  //$todo->save();
    	  
          ////$data= $request->id;
          ////     return $data;
          ////$userid = chatbox::where('speak',$msg)->value('msg');
          //$band_audio_particis    = BandAudioParticipants::all()->where('band_audio_id','=',$board_id);
          
          
          DB::table('chatbox')->insert([
          	['user_id' => $user, 'speak' => $message, 'time' => $times]
          ]);

          return 0;
          
          
          
          
        // $price = DB::table('chatbox')->('name');  
        //   $price = DB::table('userlist')->max('name');
          
        //   $mes = DB::table('chatbox')->where('time', '=', $times)->pluck('speak');
        //   $userID = DB::table('chatbox')->where('time', '=', $times)->pluck('user_id');
        //   $user_Information = [];
        //   array_push($user_Information,$user);
        //   array_push($user_Information,$message);
          
        //   echo json_encode($user_Information);
          
	}
}