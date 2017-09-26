<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template');
});

Route::get('auth/login', function(){
  $credentials = [
    'email'
  ];
});

Auth::routes();


/*
|--------------------------------------------------------------------------
| 혜진 - LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/login', function(){
    return view('login/login');
});

// Route::get('login/login', 'Login\LoginController@userview');

Route::post('/loginAction', 'Login\LoginController@loginAction');

Route::get('/logoutAction', 'Login\LoginController@logout');
Route::post('/logoutAction', 'Login\LoginController@logout');
Route::post('/store','Login\LoginController@store');


Route::get('/store', function(){
    return view('login/store');
});


Route::get('/idCheck/{user_id}', 'Login\LoginController@idCheck');
Route::get('/nickCheck/{nick}', 'Login\LoginController@nickCheck');
Route::get('/mailCheck/{mail}', 'Login\LoginController@mailCheck');








Route::get('/write', function(){
    return view('board/write');
});

Route::post('/writeAction', 'Board\BoardController@writeAction');

Route::get('/list', 'Board\BoardController@listAction');

Route::get('/bandChallengeMain', 'Board\BoardController@main');

Route::get('/read/{id?}', 'Board\BoardController@readAction');

Route::get('/deleteAction/{id?}', 'Board\BoardController@deleteAction');



Route::get('/mody/{id}', function($id){
  return view('board/mody')->with('id',$id);
});

Route::put('/modyAction/{id}', 'Board\BoardController@modyAction');



Route::get('/video', function(){
  return view('video/index');

});

/*
|--------------------------------------------------------------------------
| 혜진 - BandChallenge
|--------------------------------------------------------------------------
*/
Route::get('/video', function(){
  return view('video/Videomain');
});
Route::get('/videoworkset', function(){
  return view('video/videoworkset');
});
Route::get('/band_VideoUpload', function(){
  return view('board/BandChallenge_Video_Upload');
});
Route::get('/band_VideoWork', function(){
  return view('board/BandChallenge_Video_Work');
});
Route::get('/band_VideoWorkset', function(){
  return view('board/BandChallenge_Video_Workset');
});
Route::get('/recordalbum','bandChallenge\BandChallengeController@midiList');
//음원 악기레이어 체크선택 페이지

Route::get('/albumview/{midi_id?}','bandChallenge\BandChallengeController@audioHarmony');
//음원 악기레이어 체크선택 페이지

Route::get('/videobefore',function(){
  return view('board/BandChallenge_Video_Before');
});
Route::get('/videoBView',function(){
  return view('board/BandChallenge_Video_Before_View');
});
Route::get('/videoafter',function(){
  return view('board/BandChallenge_Video_After');
});
Route::get('/videoAView',function(){
  return view('board/BandChallenge_Video_After_View');
});

Route::get('/recordbefore/{id?}','bandChallenge\BandChallengeController@audioBefore');
//오디오 음원합주 합주전 게시물

Route::get('/recordafter/{id?}','bandChallenge\BandChallengeController@audioAfter');
//오디오 음원합주 합주후 게시물

Route::get('/band_main',function(){
  return view('board/BandChallenge_Main');
});

Route::post('/recordwork','bandChallenge\BandChallengeController@audioRecord');

//*******************************나훔나훔한 근육땡땡이 나훔이*****************************
// Route::get('/videoRecordwork',function(){
//   return view('board/BandChallenge_Main');
// });
//녹화페이지
//*****************************************************************************



Route::post('blobTest','bandChallenge\BandChallengeController@blobTrans');
//녹음파일 ajax로 업로드

Route::post('volumeTest','bandChallenge\BandChallengeController@volumeChange');
//녹음파일 볼륨 변경

Route::post('/recordupload','bandChallenge\BandChallengeController@writeBoard');
//글쓰기

Route::post('BandChallenge/recordingInsert','bandChallenge\BandChallengeController@insertBoard');
//글저장

Route::get('/recordmody',function(){
  return view('board/BandChallenge_Record_Mody');
});
Route::post('/asd/video_upload','bandChallenge\BandChallengeController@bandChallenge_video_upload');
/*
|--------------------------------------------------------------------------
| 혜진 - Guild
|--------------------------------------------------------------------------
*/

/*Guild 메인페이지*/
Route::get('/guildmain','Guild\GuildController@guildlist');

/*Guild 창설 페이지*/
Route::get('guild/create', 'Guild\GuildController@guildinfo');


Route::post('/create','Guild\GuildController@guildcreate');

/*Guild 상세페이지*/
Route::get('guild/guild_view/{guild_id?}','Guild\GuildController@guildview');

/*Guild 가입 신청 페이지*/
Route::get('guild/guild_view/join/{id}','Guild\GuildController@guildjoin');

/*Guild 내 길드 페이지*/
Route::get('guild/myguild/{guild_name}','Guild\GuildController@myguildview');

/*Guild 길드 내 랭킹 페이지*/
Route::get('guild/ranking', function(){
    return view('guild/Guild_Ranking');
});


/*Guild 길드 공지사항 게시판 페이지*/
Route::get('guild/post', function(){
    return view('guild/Guild_Post');
});


/*Guild 내 길드 페이지*/
Route::post('guild/myguild/json/guildmember_infolist','Guild\GuildController@infolist');

/*Guild멤버 상세정보 페이지*/
Route::get('/guild/{clickmember}', 'Guild\GuildController@infolist');

/*Guild멤버 상세정보 페이지 값*/
Route::post('json/agree', 'Login\FriendController@agreefriend');


/*
|--------------------------------------------------------------------------
| 혜진 - 친구목록
|--------------------------------------------------------------------------
*/

Route::get('/search/{friendsearch}', 'Login\FriendController@friendsearch');

Route::post('search/addfriends', 'Login\FriendController@addfriends');

Route::get('/myfriends', 'Login\LoginController@profile');

Route::get('/myfriends', 'Login\FriendController@myfriend_req');

//친구 신청한 유저 목록
Route::post('json/agree', 'Login\FriendController@agreefriend');

//현재 나와 친구 상태인 유저 목록
//Route::get('/myfriends', 'Login\FriendController@friendlist');

/*
|--------------------------------------------------------------------------
| 나훔 - 音Ven Routing
|--------------------------------------------------------------------------
*/

/*音Ven 메인페이지*/
Route::get('/otoven/otoven_main', function () {
    return view('otoven/otoven_main');
});

/*Record 합주를 기다려요*/
Route::get('/otoven/record_collaborate_wait', function () {
    return view('/otoven/record_collaborate_wait');
});

/*Record 합주를 기다려요 -> 게시물 클릭*/
Route::get('/otoven/in_one_record_article', function () {
    return view('/otoven/in_one_record_article');
});

/*Record 합주를 기다려요 -> 게시물 클릭 -> 연주하기 */
Route::get('/otoven/record_join', function () {
    return view('/otoven/record_join');
});

/*Record 합주를 기다려요 -> 게시물 클릭 -> 연주하기 -> 업로드*/
Route::get('/otoven/video_recording_upload', function () {
    return view('/otoven/video_recording_upload');
});

/*Record 합주를 했어요*/
Route::get('/otoven/record_collaborate_complete', function () {
    return view('/otoven/record_collaborate_complete');
});

/*Record 합주를 했어요 -> 게시물 클릭*/
Route::get('/otoven/in_two_record_article', function () {
    return view('/otoven/in_two_record_article');
});

/*Record 합주를 기다려요 -> 게시물 클릭 -> 연주하기 */
Route::get('/otoven/record_recording_one', function () {
    return view('/otoven/record_recording_one');
});

/*Video 합주를 기다려요*/
Route::get('/otoven_video_collaborate_wait', 'Otoven\OtovenController@otoven_video_collaborate_wait');


/*Video 합주를 기다려요-> 녹화하기*/
Route::get('/otoven/video_recording_one', function () {
    return view('/otoven/video_recording_one');
});

/*Video 합주를 했어요*/
Route::get('/otoven/video_collaborate_complete', function () {
    return view('/otoven/video_collaborate_complete');
});

/*Video 합주를 했어요-> 녹화하기*/
Route::get('/otoven/video_recording_two', function () {
    return view('/otoven/video_recording_two');
});

/*Video 합주를 기다려요->게시글 클릭*/
Route::get('/otoven_in_one_video_article/{id}', 'Otoven\OtovenController@otoven_in_one_video_article');

/*Video 합주를 했어요 -> 게시글 클릭 -> 합주하기*/
Route::get('/otoven/video_ansemble_one', function () {
    return view('/otoven/video_ansemble_one');
});

/*Video 합주를 했어요 -> 게시글 클릭 -> 합주하기*/
Route::get('/otoven/video_ansemble_two', function () {
    return view('/otoven/video_ansemble_two');
});

/*Video 합주 했어요->게시글 클릭*/
// Route::get('/otoven/in_two_video_article', function () {
//     return view('/otoven/in_two_video_article');
// });

Route::post('/otoven_in_one_video_upload', 'Otoven\OtovenController@otoven_in_one_video_upload');

Route::post('/otoven_video_recording_write_send', 'Otoven\OtovenController@otoven_video_recording_write_send');

Route::put('/otoven_video_recording_write/{file_name}', 'Otoven\OtovenController@otoven_video_recording_write');

Route::get('/otoven_video_ansemble_one/{id}', 'Otoven\OtovenController@otoven_video_ansemble_one');

Route::get('/otoven_video_recording_one/{id?}', 'Otoven\OtovenController@otoven_video_recording_one');

Route::get('/otoven_video_collaborate_complete', 'Otoven\OtovenController@otoven_video_collaborate_complete');

Route::get('/otoven_in_two_video_article/{id}', 'Otoven\OtovenController@otoven_in_two_video_article');

Route::get('/otoven_video_ansemble_two/{id}', 'Otoven\OtovenController@otoven_video_ansemble_two');

/*
|--------------------------------------------------------------------------
| 혜진 - 音Ven Record
|--------------------------------------------------------------------------
*/

/*Record 합주를 기다려요*/
Route::get('/otoven/record_collaborate_before', function () {
    return view('/otoven/Record_Collaborate_before');
});
/*Record 합주를 기다려요 -> 게시물클릭 후 페이지*/


/*Record 합주를 했어요*/


/*Record 합주를 했어요 -> 게시물클릭 후 페이지*/
Route::get('/otoven/record_collaborate_afterview', function () {
    return view('/otoven/Record_collaborate_afterView');
});

/*Record 합주를 기다려요 -> 게시물 클릭 -> 연주하기 */
Route::get('/otoven/Record_recording_work', function () {
    return view('/otoven/Record_recording_work');
});

/*Record 합주를 기다려요 -> 게시물 클릭 -> 연주하기 -> 업로드*/
Route::get('/otoven/Record_recording_upload', function () {
    return view('/otoven/Record_recording_upload');
});

/*
|--------------------------------------------------------------------------
| 앞니 기타리스트 성민 - BandChallenge
|--------------------------------------------------------------------------
*/

Route::get('/board/Early', function(){
  return view('/board/Early');
});
Route::get('/board/bandRecordChoice', function(){
  return view('/board/bandRecordChoice');
});
Route::get('/Recommend/MatchMain', function() {
  return view('/Recommend/MatchMain');
});
Route::get('/Recommend/Connection', function() {
  return view('/Recommend/Connection');
});
Route::get('/mypage/user', function() {
  return view('/mypage/user');
});
Route::get('/board/BandChallenge_Record_Participation', function(){
  return view('/board/BandChallenge_Record_Participation');
});
Route::get('/bandChallenge/BandAudioRecording', function(){
  return view('/bandChallenge/BandAudioRecording');
});
Route::get('/bandChallenge/bandAudioStop', function(){
  return view('/bandChallenge/bandAudioStop');
});
/*
|--------------------------------------------------------------------------
| 오토벤 함께하기 부분을 바꿈
|--------------------------------------------------------------------------
*/
Route::get('/Test/Test', function(){
  return view('/Test/Test');
});

Route::get('guild/test', function(){
  return view('guild/Guild_chile');
});

Route::get('testnode/index',function(){
  return view('testnode/index');
});

Route::get('/chat/testo', function(){
  return view('/guild/test');
});

Route::get('/chat', function(){
  return view('/guild/index');
});

Route::get('/chatbox/Information/{message}/{user}/{times}', 'Chat\ChatController@chatInformation');
Route::get('/chats/tion/{h}/{users}', 'Chat\ChatBoxController@chatmain');


//Route::get('/chatbox/Information/{request}', 'Chat\ChatController@chatInformation');
// Route::post('/chatbox/Information', 'testController@chatInformation');
// Route::get('/chatbox/Information', 'chatController@chatInformation');



// Route::get('/test', 'SomeController@testfunction');
// RoutE::post('/test', 'SomeController@testfunction');


// Route::post('/chatbox/Information', function () {
//     return 'Hello World';
// });


/*
|--------------------------------------------------------------------------
| 주성민 - 채팅
|--------------------------------------------------------------------------
*/

// Route::group(['middleware' => 'web'], function () {
//     Route::post('/loginAction', 'Login\LoginController@loginAction');
//     Route::get('/logoutAction', 'Login\LoginController@logout');
//     Route::post('/store','Login\LoginController@store');
//     // Route::auth();
//     // Route::get('/home', 'HomeController@index');
    
// });

// Route::post('sendmessage', 'chatController@sendMessage');

/*
|--------------------------------------------------------------------------
|  현경 - bandChallengeAudio
|--------------------------------------------------------------------------
*/

Route::post('/gakuhu_modi','bandChallenge\BandChallengeController@gakuhu');

Route::post('/gakuhu_loading','bandChallenge\BandChallengeController@gakuhu_loading');

Route::get('/midigoods/{id}','bandChallenge\BandChallengeController@midiGood');

Route::post('/otoven_recordwork','Otoven\OtovenController@audioRecord');

Route::post('/otoven_recordupload','Otoven\OtovenController@writeBoard');

Route::post('/otoven_blobTest','Otoven\OtovenController@blobTrans');

Route::post('/otoven/recordingInsert','Otoven\OtovenController@insertBoard');

Route::get('/otoven/record_before','Otoven\OtovenController@audioBefore');

Route::get('/otoven/record_collaborate_beforeview/{id}', 'Otoven\OtovenController@audioBeforeView');

Route::get('/otoven/record_collaborate_after', 'Otoven\OtovenController@audioAfter');

Route::get('/noticeTest/{user_name}','bandChallenge\BandChallengeController@noticeUpdate');

/*
|--------------------------------------------------------------------------
| 진영 - myPage
|--------------------------------------------------------------------------
*/


// 임시 마이페이지 매칭 라우터(앨범 메인)
Route::get('/myPage/album', 'MyPage\AlbumController@albumList');

// 임시 마이페이지 매칭 라우터(앨범 추가) Route
Route::get('/myPage/album/add', function(){
    return view('mypage/album_add');
});

// 앨범추가할때 input값 넣는 액션명
Route::post('/addAlbumAction', 'MyPage\AlbumController@addAlbum');

// 앨범삭제 액션(07/06)
Route::get('/deleteAlbumAction', 'MyPage\AlbumController@deleteAlbum');

// 앨범 이미지 변경 페이지 (07/10)
Route::get('/imageChange', 'MyPage\AlbumController@imageChangeAlbum');

// 앨범이미지변경 액션(07/10)
Route::post('/modyAlbumAction', 'MyPage\AlbumController@imageChange');




// 레코드 노래 수정
Route::get('/myPage/album/record/modify/{session_user}/{user_id}', 'MyPage\MusicBoardController@modify');

// 레코드 노래 리스트
Route::get('/myPage/album/record/list/{session_user}/{user_id}', 'MyPage\MusicBoardController@List');

// 레코드 노래 재생
Route::get('/myPage/album/record/play/{session_user}/{user_id}', 'MyPage\MusicBoardController@play');

// 비디오 노래 수정
Route::get('/myPage/album/video/mody/{session_user}/{user_id}', 'MyPage\MusicBoardController@mody');

// 비디오 노래 리스트
Route::get('/myPage/album/video/list/{session_user}/{user_id}', 'MyPage\MusicBoardController@List');

// 비디오 노래 재생
Route::get('/myPage/album/video/play/{session_user}/{user_id}', 'MyPage\MusicBoardController@play');

// 앨범 노래 내용 수정
Route::get('/alterAlbumListAction', 'MyPage\MusicBoardController@alterList');

// 추천 리스트 메인
Route::get('/matching/main', 'MyPage\MatchingController@main');

// 추천 매칭 상대방 음악 정보
Route::get('/matching/music/{user_id}', 'MyPage\MatchingController@userMatching');

// 매칭하기 결과
Route::get('/matching/result', 'MyPage\MatchingController@result');
Route::get('/matching/result2', function(){
    return view('mypage/matching_result2');
});


// 매칭유자 상세보기 페이지
Route::get('/matching/user/{user_id}/{page}','MyPage\MatchingController@userDetail');
 


// 채팅 테스트

Route::get('/home', 'HomeController@index');
Route::post('/sendmessage', 'chatController@sendMessage');



/*                            BandChallenge Video 녹화                          */

Route::post('/bandChallenge_video_recording_one', 'bandChallenge\BandChallengeController@bandChallenge_video_recording_one');
Route::post('/bandChallenge_video_upload', 'bandChallenge\BandChallengeController@video_upload');
Route::post('/bandChallenge_video_write', 'bandChallenge\BandChallengeController@video_write_send');



/*
|--------------------------------------------------------------------------
| IONIC - 나훔
|--------------------------------------------------------------------------
*/

Route::get('/ionic_bandchallenge', 'ionic\IonicController@test');
Route::get('/ionic_bandchallenge/{albumn_id}', 'ionic\IonicController@instrument');
Route::get('/ionic_bandchallenge_record_before/{board_id?}','ionic\IonicController@audioBefore');
Route::get('/ionic/myalbum', 'ionic\IonicController@ionicAlbumList');
Route::get('/ionic/album/add', function(){
    return view('IONIC/album_add');
});
Route::post('/IonicAddAlbumAction', 'ionic\IonicController@ionicAddAlbum');
Route::get('/ionic/album/record/list/{session_user}/{user_id}', 'ionic\IonicMusicController@ionicList');
Route::get('/ionic/login', function(){
    return view('IONIC/login');
});
Route::post('/ionic/loginAction', 'ionic\LoginController@loginAction');
Route::post('/ionic/logoutAction', 'ionic\LoginController@logoutAction');
Route::get('/ionic/myPage/album/record/play/{session_user}/{user_id}', 'ionic\IonicMusicController@play');
Route::get('/testest', function(){
    return view('test');
});

Route::get('/ionic/boardgoods/{id}','ionic\IonicMusicController@boardGood');

?>