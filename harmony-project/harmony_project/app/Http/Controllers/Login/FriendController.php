<?php

namespace App\Http\Controllers\Login;
use App\User;
use App\Friend;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class FriendController extends Controller
{
    //친구 찾기 했을 때
    public function friendsearch($friendsearch){
        // $search = $request->input('friendsearch');
        $friendnames=User::where('user_id', 'like',"$friendsearch%")->get();
        if(!empty($friendnames[0]['user_id'])){
            return view('login/friend')->with('friendnames',$friendnames);
        }
        else {
          echo "<script>alert('없는 아이디 입니다. 다시 한 번 확인해주세요.');</script>";
          echo "<script>history.back();</script>";
        }
        
    }
    
    //친구 추가버튼을 눌렀을 때
    public function addfriends(Request $request){
        $friend_id = $request->input('userid');
        
        $user_id = session()->get('user_id','');
        $my_id = DB::table('users')->where('user_id', $user_id)->select('id')->get();
        
        $friend = new Friend;
        $friend->mem_id = $my_id[0]->id;
        $friend->targetmem_id = $friend_id;
        $friend->save();
        
        echo "<script>window.close();</script>";
        echo "<script>location.href='/login';</script>";
    }
    
    //마이페이지에 들어갔을 시 나에게 온 친구신청 보여줌
    public function myfriend_req(){
        $user_id = session()->get('user_id',''); //내 세션 정보
        $my_id = DB::table('users')->where('user_id', $user_id)->select('id')->get();
        
        //현재 수락인지 아닌지 상태 확인
        $friends = DB::table('friends')->where('targetmem_id',$my_id[0]->id)->where('agree',NULL)->get();
        $friendscheck = DB::table('friends')->where('targetmem_id',$my_id[0]->id)->where('agree',1)->get();

        $myprofile = DB::table('users')->where('user_id', $user_id)->get();

        $friend_users = array();
        $friend_list = array();
        $friend_id = [];
        
        if(empty($friends[0]->agree)){
            
            //나에게 친구신청한 사람들의 상세 프로필을 보여줌
            for($i = 0; $i < count($friends); $i++){
                $friend_id[$i] = $friends[$i]->mem_id;
                $friend_users[$i] = DB::table('users')->where('id','=',$friend_id[$i])->get();
                
            }
        }
        if(empty($friendscheck->agree)){
            
            for($i = 0; $i < count($friendscheck); $i++){
                $friend_id[$i] = $friendscheck[$i]->mem_id;
                $friend_list[$i] = DB::table('users')->where('id','=',$friend_id[$i])->get();
            }
        }
        else{
            return view('login.myfriends')->with('myid',$myprofile)->with('friends',$friend_users);
        }
        
            return view('login.myfriends')->with('myid',$myprofile)
            ->with('friends',$friend_users)->with('friendlists',$friend_list);
            
        
    }
    
    public function agreefriend(Request $request){
        $user_id = session()->get('user_id',''); //내 세션 정보
        $my_id = DB::table('users')->where('user_id', $user_id)->select('id')->get();
        
        //나를 친추한 사용자 불러옴
        $agreeid = $request->input('agree');
        
        //나를 추가한 사용자가 친구 신청한 신청자를 불러옴
        $agreevalue = DB::table('friends')->where('mem_id',$agreeid)->where('targetmem_id',$my_id[0]->id)->update(['agree'=>1]);
        
        //agree의 값이 1인 레코드를 불러오기
        echo json_encode($agreevalue);
        
        //만약 값이 1이면
        /*
        if($agreevalue==1){
            
            $myinfo = DB::table('friends')->where('targetmem_id',$my_id[0]->id)->where('agree','1');
            dd($myinfo);
            
            $friend_users = array();
            $friend_id = [];
            
            //나에게 친구신청한 사람들의 상세 프로필을 보여줌
            for($i = 0; $i < count($friends); $i++){
                $friend_id[$i] = $friends[$i]->mem_id;
                $friend_users[$i] = DB::table('users')->where('id','=',$friend_id[$i])->get();
            }
            
            
        }*/
        
        // $searchfriend = $request->agree;
        // $searchfriend = DB::table('friends')->where('mem_id', $agree)->select('agree')->value(true);
        
        // return \Response::json($searchfriend);
    }
    
    function friendlist(Request $request){
        $user_id = session()->get('user_id',''); //내 세션 정보
        $my_id = DB::table('users')->where('user_id', $user_id)->select('id')->get();
        
        $myinfo = DB::table('friends')->where('targetmem_id',$my_id[0]->id)->where('agree','1')->get();
        
        $friend_users = array();
        $friend_id = [];
        
        //나에게 친구신청한 사람들의 상세 프로필을 보여줌
        for($i = 0; $i < count($myinfo); $i++){
            $friend_id[$i] = $myinfo[$i]->mem_id;
            $friend_users[$i] = DB::table('users')->where('id','=',$friend_id[$i])->get();
        }
        
        return view('login.myfriends')->with('myfriendlist',$friend_users);
    }
    
}
