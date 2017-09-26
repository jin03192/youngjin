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

class ChatBoxController extends Controller
{
    public function chatmain($h,$users){
        
          DB::table('userlist')->insert([
          	['name' => $users]
          ]);        
        
          $mes = DB::table('chatbox')->where('time', '=', $h)->pluck('speak');
          $userIDs = DB::table('chatbox')->where('time', '=', $h)->pluck('user_id');
          // $listuser = $users;
       
         
        //   $price = DB::table('userlist')->max('number');
        //   $userM = DB::table('userlist')->where('number', $price)->value('name');
        // $userM = DB::table('userlist')->where('number', '13')->first();
          
          
          $user_Information = [];
          array_push($user_Information,$userIDs);
          array_push($user_Information,$mes);
          /*array_push($user_Information,$userM);*/
          
          echo json_encode($user_Information);
    }
}
