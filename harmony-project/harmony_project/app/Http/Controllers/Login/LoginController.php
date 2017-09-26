<?php

namespace App\Http\Controllers\Login;

use App\User;
use Input;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class LoginController extends Controller
{
    //사용자 확인 후 로그인 가능
    public function loginAction(Request $request) {
        $user_id = $request->input('user_id');
        $password = $request->input('password');
        session(['user_id' => $user_id]);

        // $user_id = $request->session()->get('user_id','');

        $users=User::where('user_id',$user_id)->where('password',$password)->get();

        if(!empty($users[0]['user_id'])){
          
          $connect = User::where('user_id',$user_id)->value('Connection');
          
          $data = Carbon::now();
          
          $dd = User::where('user_id',$user_id)->update(['Connection' => $data]);
          
          return view('login/login');
        }
        else {
          echo "<script>alert('로그인 실패');</script>";
          echo "<script>history.back();</script>";
        }
    }
    
    //사용자 프로필
    public function profile(Request $request){
        $user_id = session()->get('user_id',''); //내 세션 정보
        $my_id = DB::table('users')->where('user_id', $user_id)->get();

        return view('login/myfriends')->with('user',$my_id);
    }
    
    
    //사용자 페이지
    // public function userview(Request $request){
    //   $user_id = session()->get('user_id','');
    //   $usernick = DB::table('users')->where('user_id',$user_id)->select('nick')->get()[0]->nick;
    //   $userimg = DB::table('users')->where('user_id', $user_id)->select('userImage')->get()[0]->userImage;
    // }


    // 회원가입 (DB에 값넣기)
    public function store(Request $request){

      $user_name = $request->input('user_name');
      $user_id = $request->input('user_id');
      $nick = $request->input('nick');
      $email = $request->input('email');
      $address = $request->input('address');
      $phone = $request->input('phone');
      $password = $request->input('user_pass');
      $password2 = $request->input('user_pass2');
      
      
      // 경로
      $destinationPath = public_path().'/img/';
      
      // 파일명
      
      
      if(!empty($request->input('myimg'))){
        $name = Input::file('myimg')->getClientOriginalName();
        
        Input::file('myimg')->move($destinationPath, $name);

      // 완료후 로그인으로이동
      echo "<script>location.href='/login';</script>";
      
      $uploads_dir = '../img';
      $allowed_ext = array('jpg','jpeg','png','gif','bmp');
      
      // 변수 정리
      $error = $_FILES['myimg']['error'];
      $f_name = $_FILES['myimg']['name'];
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
      move_uploaded_file( $_FILES['myimg']['tmp_name'], "$uploads_dir");
      }
      if(empty($f_name)){
        $f_name = 'emptyuserimg.png';
      }

      
      

      // $user_idc는 DB user_id값과 사용자로부터 입력값이 맞을때 DB에서 가져온다
      $user_idc = User::where('user_id',$user_id)->get();


      // 공백있을경우 회원가입 불가능
      if(empty($user_name)){
        echo "<script>alert('이름 입력하세요');</script>";
        echo "<script>history.back();</script>";
      }
      elseif (empty($user_id)) {
        echo "<script>alert('아이디 입력하세요');</script>";
        echo "<script>history.back();</script>";
      }
      elseif (empty($password)) {
        echo "<script>alert('비밀번호 입력하세요');</script>";
        echo "<script>history.back();</script>";
      }
      elseif(empty($password2)) {
        echo "<script>alert('비밀번호 입력하세요');</script>";
        echo "<script>history.back();</script>";
      }
      // 아이디 중복확인 결과와 비밀번호가 맞을경우만 회원가입 가능
      if(empty($user_idc[0])){
        
        if($password == $password2){

          $users = new User;
          $users->user_id = $user_id;
          $users->password = $password;
          $users->userImage = $f_name;
          $users->nick = $nick;
          $users->email = $email;
          $users->address = $address;
          $users->phone = $phone;
 
          $users->save();
          
          return view('login/confirm');
        }
        else {
          echo "<script>alert('비밀번호 확인하세요');</script>";
          echo "<script>history.back();</script>";

        }
      }
      else {
        echo "<script>alert('아이디 확인하세요.');</script>";
        echo "<script>history.back();</script>";
      }
    }

    // 로그아웃
    public function logout(Request $request){
      $user = $request->session()->get('user_id','');
      
      $connect = User::where('user_id',$user)->value('Connection');
      User::where('user_id',$user)->update(['Connection' => null]);
      
      $session = $request->session()->put('user_id');
      return Redirect('/');
    }


  // 아이디 중복 체크
  public function idCheck($user_id){
    $userID = User::where('user_id',$user_id)->get();

    if(empty($userID[0])){
      echo "사용 할 수 있습니다.";
    }
    else{
      echo "사용 할 수 없습니다.";

    }
  }
  // 닉네임 중복 체크
  public function nickCheck($nick){
    $Nick = User::where('nick',$nick)->get();

    if(empty($Nick[0])){
      echo "사용 할 수 있습니다.";
    }
    else{
      echo "사용 할 수 없습니다.";

    }
  }
  // 메일 중복 체크
  public function mailCheck($email){
    $Mail = User::where('email',$email)->get();

    if(empty($Mail[0])){
      echo "사용 할 수 있습니다.";
    }
    else{
      echo "사용 할 수 없습니다.";

    }
  }
}