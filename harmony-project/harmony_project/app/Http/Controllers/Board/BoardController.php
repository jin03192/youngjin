<?php

namespace App\Http\Controllers\Board;

use App\Board;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//게시판 컨트롤러
class BoardController extends Controller
{
   // 게시판 글 쓰기
    public function writeAction(Request $request){
      $title = $request->input('title');
      $message = $request->input('message');

      $board = new Board;
      $board->title = $title;
      $board->message = $message;
      $board->save();


      echo "<script>location.href='list';</script>";
    }

    //게시판 글 리스트
    public function listAction(){
      $boards=Board::all();
      return view('board/list', compact('boards'));

    }

    //게시판 글 내용보기
    public function readAction($id){
      $boards = Board::where('id',$id)->get();
      return view('board/read', compact('boards'));

    }

    //게시판 글 삭제
    public function deleteAction($id){
      $boards = Board::where('id',$id)->delete();
      $boards = Board::all();

      return view('board/list', compact('boards'));
    }

    // 게시판 글 수정
    public function modifyAction(Request $request, $id){

      $title = $request->input('title');
      $message = $request->input('message');


      Board::where('id',$id)->update(array('title'=>$title,'message'=>$message));
      $boards=Board::all();

      return view('board/list',compact('boards'));

    }
    public function main()
    {
      return view('board/bandChallengeMain');
    }


}
?>
