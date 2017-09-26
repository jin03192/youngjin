<?php

namespace App\Http\Controllers\MyPage;


use DB;
use Input;
use App\Album;
use App\User;
use App\MusicBoard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/*----------------------------------------------------------------------------------------------------/
/                                           앨범 관련 컨트롤러                                         /
/----------------------------------------------------------------------------------------------------*/

class AlbumController extends Controller
{


    /*----------------------------------------------------------------------------------------------------/
    /                                        앨범 리스트 출력 액션                                         /
    /----------------------------------------------------------------------------------------------------*/


    // public function albumList(Request $request) // GET 모드
    public function albumList() // POST 모드
    {
      // 섹션으로 값가져오기
      $user_id = session('user_id');
      
      // 로그인 off시 에러발생
      if(is_null($user_id)){
        // Header("Location:/login");
        echo '<script> alert("로그인이 필요한 서비스입니다."); </script>';
        echo "<script> location.replace('/login'); </script>"; 
        
        exit;
      }
      
      $myAlbum = Album::where('user_id',$user_id)->get();
      return view('mypage/album', compact('myAlbum', 'user_id'));
    }

    /*----------------------------------------------------------------------------------------------------/
    /                                           앨범 생성 액션                                             /
    /----------------------------------------------------------------------------------------------------*/


    public function addAlbum(Request $request)
    {
      // 경로
      $destinationPath = public_path().'/albumImages/';
      
      
      
      // 파일명
      $name = Input::file('album_picture')->getClientOriginalName();
      $sessionID = $request->session()->get('user_id','');
      $userMusics = Album::where('user_id',$sessionID)->get();

      $fileType = Input::file('album_picture')->getclientoriginalextension();
      
      $allowed_ext = array('jpg','jpeg','png','gif','bmp');
      
      if( !in_array($fileType, $allowed_ext) ) {
          echo "<script>alert('이미지 파일만 넣어주세요.');</script>";
          echo "<script> 
                document.location.href='/myPage/album/add'; 
                </script>"; 
          exit;
        }

      // $userMusics에 있는 앨범 리스트에 + 1을 해서 새로운 앨범 라우팅을 만들기 위한 변수
      $album_number = count($userMusics) + 1;

      // 앨범 생성시 제목, 내용, 사진 내용을 담아두기 위한 변수
      $album_title = $request->input('album_title');
      $album_content = $request->input('album_content');
      $album_picture = $name;
      


      DB::table('albums')->insert([
        ['album_number' => $album_number, 'user_id' => $sessionID, 'album_title' => $album_title,
         'album_picture' => $album_picture, 'album_content' => $album_content]
      ]);

      Input::file('album_picture')->move($destinationPath, $name);

      // 완료 후 앨범 리스트로 이동
      echo "<script>location.href='myPage/album';</script>";
    }
    
    // 앨범 삭제, 앨범안에 있는 노래들 NULL레코드로 변경
    public function deleteAlbum(Request $request)
    {
      $int = $request->all();
      DB::table('albums')->where('album_number', $int['albumNumber'])->where('user_id', $int['sessionUser'])->delete();
      $userID = DB::table('users')->where('user_id', $int['sessionUser'])->value('id');
      DB::table('band_audios')->where('writer_id', $userID)->where('album_number',$int["albumNumber"])->update(['album_number' => NULL]);
      
    }
    
    
    //
    public function imageChangeAlbum(Request $request)
    {
      $int = $request->all();
      return view('mypage/album_image_change', compact('int'));
    }
    
    public function imageChange(Request $request)
    {
      
      $int = $request->all();
      dump($int);
       // 경로
      $destinationPath = public_path().'/albumImages/';
      
      
      
      // 파일명
      $name = Input::file('album_image')->getClientOriginalName();
      
      
      $fileType = Input::file('album_image')->getclientoriginalextension();
      
      $allowed_ext = array('jpg','jpeg','png','gif','bmp');
      
      if( !in_array($fileType, $allowed_ext) ) {
          echo "<script>alert('이미지 파일만 넣어주세요.');</script>";
          echo "<script> 
                document.location.href='/myPage/album/add'; 
                </script>"; 
          exit;
        }
      dump($int['album_number']);
      dump($int['user_name']);
      DB::table('albums')->where('album_number',$int['album_number'])
      ->where('user_id',$int['user_name'])
      ->update(['album_picture' => $name]);  
        
      Input::file('album_image')->move($destinationPath, $name);  
      
      echo "<script>window.close();
             </script>";
      
      
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        //
    }
}

?>
