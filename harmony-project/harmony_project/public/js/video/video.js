'use strict';

var count = 6;   // setInterval 시간초(카운트 다운) 변수
var record // setInterval 제어 변수
var mediaSource = new MediaSource();
mediaSource.addEventListener('sour
ceopen', handleSourceOpen, false);
var mediaRecorder;
var recordedBlobs;
var sourceBuffer;
var music_arr = [];

var countLabel=document.getElementsByName('countLabel')[0];



//video 버튼 이름
var gumVideo = document.querySelector('video#gum');
var recordedVideo = document.querySelector('video#recorded');

var recordButton = document.querySelector('button#record');
var pauseButton = document.querySelector('button#pause');
var playButton = document.querySelector('button#play');
var downloadButton = document.querySelector('button#download');
var uploadButton = document.querySelector('button#upload');

var soundPlayButton = document.querySelector('button#soundPlay');
var ensembleButton = document.querySelector('button#ensemble');
var bandChallengeUploadButton = document.querySelector('button#bandChallengeUpload');


var board_id = document.getElementsByName("board_id");
var before_play = document.getElementById("before_play");
var myVideo = document.getElementsByName("video[]");
var anotherVideo = document.getElementsByName("anotherVideo[]");
var slider_value_view = document.getElementById("slider_value_view");
var slider_volume_view = document.getElementById("slider_volume_view");

var midi_id = document.getElementsByName("midi_id");  
var band_board_id = document.getElementsByName("band_board_id");
var instruments = document.getElementsByName("instruments[]");
var participants = document.getElementsByName("participants[]");
var music_checked_list = document.getElementsByName("music_checked_list");
var musics = document.getElementsByName("musics[]"); 
var musics_test = document.getElementsByName("my_audio[]");
var music_insts = document.getElementsByName("music_inst[]"); 
var music_particis = document.getElementsByName("music_partici[]");



var selected_insts = [];
var selected_particis = [];

for (var i = 0; i<instruments.length ;i++){
    selected_insts.push(instruments[i].value);
}
for (var i = 0; i<participants.length ;i++){
    selected_particis.push(participants[i].value);
}

(recordButton == undefined)?recordButton=null:recordButton.onclick = toggleRecording;
(playButton == undefined)?playButton=null:playButton.onclick = play;
(pauseButton == undefined)?pauseButton=null:pauseButton.onclick = pause;
(downloadButton == undefined)?downloadButton=null:downloadButton.onclick = download;
(uploadButton == undefined)?uploadButton=null:uploadButton.onclick = upload;
(before_play == undefined)?before_play=null:before_play.onclick = beforePlay;
(soundPlayButton == undefined)?soundPlayButton=null:soundPlayButton.onclick = toggleSoundPlay;
(ensembleButton == undefined)?ensembleButton=null:ensembleButton.onclick = videoSelect;
(bandChallengeUploadButton == undefined)?bandChallengeUploadButton=null:bandChallengeUploadButton.onclick = bandChallengeUpload;





// window.isSecureContext could be used for Chrome
var isSecureOrigin = location.protocol === 'https:' ||
location.host === 'localhost';
if (!isSecureOrigin) {
  alert('getUserMedia() must be run from a secure origin: HTTPS or localhost.' +
    '\n\nChanging protocol to HTTPS');
  // location.protocol = 'HTTPS';
}


navigator.getUserMedia = navigator.getUserMedia ||
  navigator.webkitGetUserMedia || navigator.mozGetUserMedia;
  

var constraints = {
  audio: true,
  video: true
};

navigator.getUserMedia(constraints, successCallback, errorCallback);

function successCallback(stream) {
  console.log('getUserMedia() got stream: ', stream);
  window.stream = stream;
  if (window.URL) {
    gumVideo.src = window.URL.createObjectURL(stream);
  } else {
    gumVideo.src = stream;
  
  }
}

function errorCallback(error) {
  console.log('navigator.getUserMedia error: ', error);
}

// navigator.mediaDevices.getUserMedia(constraints)
// .then(function(stream) {
//   console.log('getUserMedia() got stream: ', stream);
//   window.stream = stream; // make available to browser console
//   if (window.URL) {
//     gumVideo.src = window.URL.createObjectURL(stream);
    
//   } else {
//     gumVideo.src = stream;
//   }
// }).catch(function(error) {
//   console.log('navigator.getUserMedia error: ', error);
// });




function handleSourceOpen(event) {
  console.log('MediaSource opened');
  sourceBuffer = mediaSource.addSourceBuffer('video/webm; codecs="vp8"');
  console.log('Source buffer: ', sourceBuffer);
}

function handleDataAvailable(event) {
  if (event.data && event.data.size > 0) {
    recordedBlobs.push(event.data);
  }
}

function handleStop(event) {
  console.log('Recorder stopped: ', event);
}

function toggleRecording() {
  
    record = setInterval(countDown,500);
    setTimeout("startRecording()",3200);
　　
}

// The nested try blocks will be simplified when Chrome 47 moves to Stable
function startRecording() {
  var options = {mimeType: 'video/webm', bitsPerSecond: 100000};
  recordedBlobs = [];
  try {
    mediaRecorder = new MediaRecorder(window.stream, options);
  } catch (e0) {
    console.log('Unable to create MediaRecorder with options Object: ', e0);
    try {
      options = {mimeType: 'video/webm,codecs=vp9', bitsPerSecond: 100000};
      mediaRecorder = new MediaRecorder(window.stream, options);
    } catch (e1) {
      console.log('Unable to create MediaRecorder with options Object: ', e1);
      try {
        options = 'video/vp8'; // Chrome 47
        mediaRecorder = new MediaRecorder(window.stream,options);
      } catch (e2) {
        alert('MediaRecorder is not supported by this browser.\n\n' +
            'Try Firefox 29 or later, or Chrome 47 or later, with Enable experimental Web Platform features enabled from chrome://flags.');
        console.error('Exception while creating MediaRecorder:', e2);
        return;
      }
    }
  }
  //console.log('Created MediaRecorder', mediaRecorder, 'with options', options);
  mediaRecorder.onstop = handleStop;
  mediaRecorder.ondataavailable = handleDataAvailable;
  mediaRecorder.start(10); // collect 10ms of data
  midi_start();
  samePlay();
  //console.log('MediaRecorder started', mediaRecorder);
  recordButton.textContent = "다시하기";
 
  metronomeStop(video_bpm,video_volume);
  
}

function stopRecording() {
  mediaRecorder.stop();
 
  console.log('Recorded Blobs: ', recordedBlobs);
  recordedVideo.controls = true;
  

}

function play() {
  var superBuffer = new Blob(recordedBlobs, {type: 'video/webm'});
  recordedVideo.src = window.URL.createObjectURL(superBuffer);
  recordedVideo.controls = true;
  stop_event(recordedVideo.src);
   bpmStop();
   midi_stop();
}

function download() {
  var blob = new Blob(recordedBlobs, {type: 'video/webm'});
  var url = window.URL.createObjectURL(blob);
  var a = document.createElement('a');
  a.style.display = 'none';
  a.href = url;
  a.download = 'test.webm';
  document.body.appendChild(a);
  a.click();
  setTimeout(function() {
    document.body.removeChild(a);
    window.URL.revokeObjectURL(url);
  }, 100);
}


//게시판 동영상 업로드
function upload(){
  var blob = new Blob(recordedBlobs, {type: 'video/webm'});
  var fd = new FormData();
  fd.append('data', blob);
  $.ajax({
      url:'/otoven_in_one_video_upload',
      type:'POST',
      data: fd,
      dataType:'json',
      processData: false,
      contentType: false,
      success: function(result) {
          if(result) {
 
                post_to_url('/otoven_video_recording_write_send',{
                              "_token":  $('meta[name="csrf-token"]').attr('content'),
                              'result':result,
                              'board_id':board_id[0].value,
                              'slider_value_view':slider_value_view.innerHTML,
                              'slider_volume_view':slider_volume_view.innerHTML
                        
                          });
                          
                          
          } else {
              alert("잠시 후에 시도해주세요.");
          }
      },
      error: function() {
          alert("에러 발생");
      }
  });
}

function bandChallengeUpload(){
  var blob = new Blob(recordedBlobs, {type: 'video/webm'});
  var fd = new FormData();
  fd.append('data', blob);
  $.ajax({
      url:'/bandChallenge_video_upload',
      type:'POST',
      data: fd,
      dataType:'json',
      processData: false,
      contentType: false,
      
      success: function(result) {
          if(result) {

                post_to_url('/bandChallenge_video_write',{
                              "_token":  $('meta[name="csrf-token"]').attr('content'),
                              'result':result,
                              'board_id':board_id[0].value,
                              'slider_value_view':slider_value_view.innerHTML,
                              'slider_volume_view':slider_volume_view.innerHTML
                        
                          });
                          
                          
          } else {
              alert("잠시 후에 시도해주세요.");
          }
      },
      error: function() {
          alert("에러 발생");
      }
  });
}


//녹화 전 카운트 다운
function countDown() {
  count--;
  countLabel.innerHTML=count;
  if(count==0){
    clearInterval(record);
    countLabel.innerHTML='';
        count=6;


  }

}
//soundplay 버튼 누르면 soundstop으로 바뀜
function toggleSoundPlay(){
  if(soundPlayButton.textContent === 'Sound Play'){
    soundPlay();
    soundPlayButton.textContent ='Sound Stop';
  }else {
    soundStop();
    soundPlayButton.textContent = 'Sound Play';
  }

}





// |*************************************************************************************
// | 비디오 선택 재생
// |*************************************************************************************

function samePlay(){
  var anotherVideo2 = [];
 
  for(var i=0; i<anotherVideo.length; i++){
    anotherVideo2.push(anotherVideo[i]);
    anotherVideo2[i].play();
  }
  
}


function beforePlay(){
  var anotherVideo2 = [];
  if(before_play.textContent === '▶'){
  for(var i=0; i<anotherVideo.length; i++){
    anotherVideo2.push(anotherVideo[i]);
    anotherVideo2[i].play();
    before_play.textContent = '||';
   }
  }else{
    stopPlay();
    before_play.textContent = '▶';
  }
  
}

// 비디오 일시 정지
function stopPlay(){
  var anotherVideo2 = [];
  for(var i=0; i<anotherVideo.length; i++){
    anotherVideo2.push(anotherVideo[i]);
    anotherVideo2[i].pause();
    }
}
// |*************************************************************************************
// | 비디오 선택
// |*************************************************************************************
function videoSelect(){
  var videos = [];
  for(var i = 0 ;i<myVideo.length; i++){
    if(myVideo[i].checked == true){
      videos.push(myVideo[i].value);
    }
  }
  post_to_url('/ensemble',{
                  "_token":  $('meta[name="csrf-token"]').attr('content'),
                  'videos':videos,
              });
}

function post_to_url(path, params) {

    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", path);

    for(var key in params) {
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", key);
        hiddenField.setAttribute("value", params[key]);
        form.appendChild(hiddenField);
    }
    document.body.appendChild(form);
    form.submit();
}

function videoRecordPage(){ 
    var musics = document.getElementsByName("musics[]");
    var participants = document.getElementsByName("participants[]");
    
    if(musics.length != 0){
        for(var i=0; i<musics.length; i++) {
            if (musics[i].checked == true) {
                music_arr.push(musics[i].value);
            }
        }       //악기 리스트 배열
      
    }

    if(participants.length != 0){

        for(var i=0; i<participants.length; i++) {
            if (participants[i].checked == true) {
                participant_arr.push(participants[i].value);
            }
        }
        
    }
    
    post_to_url('/bandChallenge_video_recording_one',{
                  "_token":  $('meta[name="csrf-token"]').attr('content'),
                  'music_checked_list':music_arr,
                  'partici_checked_list':participant_arr,
                  'midi_id':midi_id[0].value,
              });
}   //녹화하기


function midi_start(){
  
   for(var i = 0; i<music_insts.length;i++){
            if(music_insts[i].readyState != 4){
                console.log("fail");
                return ;
            }
    }
    
    for(var i = 0; i<music_particis.length;i++){
            if(music_particis[i].readyState != 4){
                console.log("fail");
                return ;
            }
    }
                
    for(var i = 0;i<music_insts.length;i++){
        music_insts[i].play();
    }
    for(var i = 0;i<music_particis.length;i++){
        music_particis[i].play();
    }
}

function midi_stop() {
  
  for(var i = 0;i<music_insts.length;i++){
                 music_insts[i].pause();
                 music_insts[i].currentTime = 0;
             }
             for(var i = 0;i<music_particis.length;i++){
                 music_particis[i].pause();
                 music_particis[i].currentTime = 0;
             }
  
}

      



