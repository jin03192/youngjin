'use strict';

navigator.getUserMedia = ( navigator.getUserMedia ||
                       navigator.webkitGetUserMedia ||
                       navigator.mozGetUserMedia ||
                       navigator.msGetUserMedia);
var test;
var blobAudio;
var app;
var record = document.querySelector('.record');
var stop = document.querySelector('.stop');
var soundClips = document.querySelector('.sound-clips');
var canvas = document.querySelector('.visualizer');
var count_label = document.getElementsByName('count_label')[0];
var timer_label = document.getElementsByName('timer_label')[0];
var count = 5;
var count_thread;
var audioCtx = new (window.AudioContext || webkitAudioContext)();
var canvasCtx = canvas.getContext("2d");
var mediaRecorder;

var music_insts = document.getElementsByName("music_inst[]");       //audio 태그
var instruments = document.getElementsByName("instruments[]");      //input hidden 태그
var music_particis = document.getElementsByName("music_partici[]"); //audio 태그
var participants = document.getElementsByName("participants[]");    //input hidden 태그
var midi_id = document.getElementsByName("midi_id");                //input hidden 태그
var band_board_id = document.getElementsByName("band_board_id");    //input hidden 태그
var input_data = document.getElementsByName("data"); 
var selected_insts = [];
var selected_particis = [];
var timerStop; // 민호가 만든 변수

for (var i = 0; i<instruments.length ;i++){
    selected_insts.push(instruments[i].value);
}
for (var i = 0; i<participants.length ;i++){
    selected_particis.push(participants[i].value);
}

var isRecording = false;



if (navigator.getUserMedia) {
   navigator.getUserMedia (
      {
         audio: true
      },
      // Success callback
      function(stream) {
      	 mediaRecorder = new MediaRecorder(stream);
        
    
          app = new PlayRTC({
              projectKey: '60ba608a-e228-4530-8711-fa38004719c1',
              localMediaTarget: 'localVideo',
              mimeType: 'audio/mpeg',
              video: false
          });
          app.createChannel();

      	 visualize(stream);

      	 record.onclick = function() {
            if(!isRecording) {
                count = 5;
                record.disabled = true;
                stop.disabled = true;
                count_thread = setInterval("counting()", 500);
                setTimeout('record_start()', 3000);
               
               
            }
      	 }

      	 stop.onclick = function() {
      	     metronomeStart();
      	     timeStop();
             isRecording = false;
             for(var i = 0;i<music_insts.length;i++){
                 music_insts[i].pause();
                 music_insts[i].currentTime = 0;
             }
             for(var i = 0;i<music_particis.length;i++){
                 music_particis[i].pause();
                 music_particis[i].currentTime = 0;
             }
      	 	mediaRecorder.stop();
             app.getMedia().recordStop();

      	 	record.style.background = "";
      	 	record.style.color = "";
      	 }

      	 mediaRecorder.ondataavailable = function(e) {



      	   var clipContainer = document.createElement('article');

           var audio = document.createElement('audio');
           var deleteButton = document.createElement('button');
           var saveButton = document.createElement('button');
            var playButton = document.createElement('button');
            var stopButton = document.createElement('button');

           clipContainer.classList.add('clip');
           audio.setAttribute('controls', '');
           deleteButton.innerHTML = "Delete";
           saveButton.innerHTML = "Save";
            playButton.innerHTML = "Play";
            stopButton.innerHTML = "Stop";
            
            playButton.onclick = function(){
               audio.play();
                for(var i = 0;i<music_insts.length;i++){
                    music_insts[i].play();
                }
                for(var i = 0;i<music_particis.length;i++){
                    music_particis[i].play();
                }
            }
            
            stopButton.onclick = function(){
               audio.pause();
               audio.currentTime = 0;
                for(var i = 0;i<music_insts.length;i++){
                     music_insts[i].pause();
                     music_insts[i].currentTime = 0;
                 }
                 for(var i = 0;i<music_particis.length;i++){
                     music_particis[i].pause();
                     music_particis[i].currentTime = 0;
                 }
            }

           clipContainer.appendChild(audio);
           clipContainer.appendChild(deleteButton);
           clipContainer.appendChild(saveButton);
           
           clipContainer.appendChild(playButton);
           clipContainer.appendChild(stopButton);
           soundClips.appendChild(clipContainer);

           var audioURL = window.URL.createObjectURL(e.data);
           var te = e.data;
           var fr = new FileReader();


           audio.src = audioURL;

             saveButton.onclick = function (e) {
                    blobAudio = te;
                     send(blobAudio,'/gakuhu_loading');

             }


           deleteButton.onclick = function(e) {
             var evtTgt = e.target;
             evtTgt.parentNode.parentNode.removeChild(evtTgt.parentNode);
           }


      	 }
      },

      // Error callback
      function(err) {

      }
   );
}

function visualize(stream) {
  var source = audioCtx.createMediaStreamSource(stream);

  var analyser = audioCtx.createAnalyser();
  analyser.fftSize = 2048;
  var bufferLength = analyser.frequencyBinCount;
  var dataArray = new Uint8Array(bufferLength);

  source.connect(analyser);
  //analyser.connect(audioCtx.destination);
  
  var WIDTH = canvas.width;
  var HEIGHT = canvas.height;

  draw();

  function draw() {

    requestAnimationFrame(draw);

    analyser.getByteTimeDomainData(dataArray);

    canvasCtx.fillStyle = 'rgba(255, 255, 255,0.5)';
    canvasCtx.fillRect(0, 0, WIDTH, HEIGHT);

    canvasCtx.lineWidth = 2;
    canvasCtx.strokeStyle = 'rgb(255, 0, 0)';

    canvasCtx.beginPath();

    var sliceWidth = WIDTH * 1.0 / bufferLength;
    var x = 0;


    for(var i = 0; i < bufferLength; i++) {
 
      var v = dataArray[i] / 128.0;
      var y = v * HEIGHT/2;

      if(i === 0) {
        canvasCtx.moveTo(x, y);
      } else {
        canvasCtx.lineTo(x, y);
      }

      x += sliceWidth;
    }

    canvasCtx.lineTo(canvas.width, canvas.height/2);
    canvasCtx.stroke();

  }

}



//***************************나훔 BPM**********************************//
var arg_volume = 0;
function ShowSliderValue(sVal){
         var obValueView = document.getElementById("slider_value_view");
         obValueView.innerHTML = sVal
    }
function ShowVolume(sVal){
         var obValueView = document.getElementById("slider_volume_view");
         obValueView.innerHTML = sVal
    }
function metronomeStop(bpm,volume){
	if(bpm){
		drop = (60/bpm)*1000;
	}else{
	    var temp = document.getElementById("bpm_bar").value;
	    drop = (60/temp)*1000;
	}
	if(volume != 0){
		arg_volume = volume/100;
	}else{
		arg_volume = 0;

	}
	if(volume)
	    volume_save = arg_volume;
	
	setitval=setInterval("metronome(volume_save)", drop); //시간 값 동적으로 받기
}
function metronomeStart(){
	if(setitval){clearInterval(setitval);}
}

function metronome(arg_volume){
	var volume;
	if(arg_volume==0 || arg_volume>0 && arg_volume <=100){
		volume = arg_volume;
	}else if(!arg_volume){
		volume = 0.7;
	}
	var metronome = new Audio('../metronome/metronome.wav');

	metronome.volume = volume;		//볼룸값 동적으로 받기
	metronome.play();
}

function bpmStop(){
    if(setitval){clearInterval(setitval);}
}
//***************************나훔 BPM 끝**********************************//




//-----------------------------

function record_start() {
    metronomeStop(118);
    timerStop = setInterval(time,1000);
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

    stop.disabled = false;
    mediaRecorder.start();
    app.getMedia().record();

   
}

function counting() {
    count_label.innerHTML = count;
    count -= 1;
    if(count == -1){
        isRecording = true;
        clearInterval(count_thread);
        count_label.innerHTML = '';
        record.disabled = false;
    }
}
var modi_url;

function file_up(){
    
   if(input_data[0].value == ''){
       alert('파일을 선택해주세요.');
       return ;
   }
   
    send(input_data[0]['files'][0],null);
}

function send(data,modi=null) {
    var fd = new FormData();
    fd.append('fname', 'audioBlob');
    fd.append('data',data);
    fd.append('mimeType',"audio/mpeg");
modi_url = modi;
    $.ajax({
        url: "/blobTest",
        type: "POST",
        processData: false,
        contentType: false,
        data: fd,
        dataType: 'json',
        success:function(data){

            if(modi_url == null){
                
        
                post_to_url('/recordupload',{
                    "_token":  $('meta[name="csrf-token"]').attr('content'),
                    'file_name' : data,
                    'selected_insts':selected_insts,
                    'selected_particis':selected_particis,
                    'midi_id':midi_id[0].value,
                    'band_board_id':band_board_id[0].value,
                });
                
            }else{
                 post_to_url(modi_url,{
                    "_token":  $('meta[name="csrf-token"]').attr('content'),
                    'file_name' : data,
                    'selected_insts':selected_insts,
                    'selected_particis':selected_particis,
                    'midi_id':midi_id[0].value,
                    'band_board_id':band_board_id[0].value,
                });
            }

        },
        error: function () {
            alert('Errorがでました。');
        }
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

/*---------------------민호--------------------*/
var countt = 0;
var count3 = 0;
var count4 = 0;
var count5 = 0;
var bun = 1;
function time(){
 countt++;
 timer_label.innerHTML=countt;
 if(countt>=60){
     timer_label.innerHTML=bun+':'+count3;
     count3++;
     if(count3>=60){
         bun=2;
         timer_label.innerHTML=bun+':'+count4;
         count4++;
         if(count4>=60){
             bun=3;
            timer_label.innerHTML=bun+':'+count5;
            count5++;
         
         }
     }
     
     
 }
 
 
}
function timeStop(){
    clearInterval(timerStop);
    timer_label.innerHTML=countt;
    countt=0;
    count3=0;
    count4=0;
    count5=0;
    bun=0;
    
}






