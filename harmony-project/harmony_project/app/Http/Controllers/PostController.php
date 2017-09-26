<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function send(){
    	//resources/views디렉토리 하위에서
    	//post/send.blade.php 파일을 사용한다.
    	return view('guild.index');
    }
    public function ok(Request $request){
 
    // 	$name = $request->input('name');
    // 	//이름의 공백을 제거한다.
    // 	$name = trim($name);
    // 	if($name == ""){
    // 		//이전페이지로 돌아간다
    // 		//withErrors로 에러메세지를 포함시킨다.
    // 		return back() ->withErrors('이름을 입력해주세요');
    // 	}
    	$message = $request->input('message');
    	if($email == ""){
    		return back() ->withErrors('이메일을 입력해주세요');
    	}
    	//무사히 지나왔다면 파라미터를 바인딩하여 전달한다.
    	//resources/views디렉토리 하위에서
    	//post/ok.blade.php 파일을 사용한다.
    	return view('guild.ok') ->with(['message' => $message]);
    }
}
