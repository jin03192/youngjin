<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class testController extends Controller
{
    public function chatInformation(Request $request){
          //$morai = $request->all();
          $msg = $request->input('msg');
          $user = $request->input('user');
          ////$data= $request->id;
          ////     return $data;
          ////$userid = chatbox::where('speak',$msg)->value('msg');
          DB::table('chatbox')->insert([
          	['user_id' => $user, 'speak' => $msg]
          ]);
          return "I you ";
	}
    
}
