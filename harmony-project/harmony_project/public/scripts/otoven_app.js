'use strict';

navigator.getUserMedia = ( navigator.getUserMedia ||
                       navigator.webkitGetUserMedia ||
                       navigator.mozGetUserMedia ||
                       navigator.msGetUserMedia);

var blobAudio;
var app;
var record = document.querySelector('.record');
var stop = document.querySelector('.stop');
var soundClips = document.querySelector('.sound-clips');
var canvas = document.querySelector('.visualizer');
var count_label = document.getElementsByName('count_label')[0];
var count = 5;
var count_thread;
var audioCtx = new (window.AudioContext || webkitAudioContext)();
var canvasCtx = canvas.getContext("2d");
var mediaRecorder;

var music_particis = document.getElementsByName("music_partici[]"); //audio 태그
var participants = document.getElementsByName("participants[]");    //input hidden 태그
var otoven_board_id = document.getElementsByName("otoven_board_id");    //input hidden 태그
var selected_particis = [];

for (var i = 0; i<participants.length ;i++){
    selected_particis.push(participants[i].value);
}

var isRecording = false;

canvas.style.border = "1px solid black";

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
             isRecording = false;
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


           clipContainer.classList.add('clip');
           audio.setAttribute('controls', '');
           deleteButton.innerHTML = "Delete";
           saveButton.innerHTML = "Save";

           clipContainer.appendChild(audio);

           clipContainer.appendChild(deleteButton);
           clipContainer.appendChild(saveButton);
           soundClips.appendChild(clipContainer);

           var audioURL = window.URL.createObjectURL(e.data);
           var te = e.data;
           var fr = new FileReader();


           audio.src = audioURL;

             saveButton.onclick = function (e) {
                    blobAudio = te;
                     send(blobAudio);

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

    canvasCtx.fillStyle = 'rgb(255, 255, 255)';
    canvasCtx.fillRect(0, 0, WIDTH, HEIGHT);

    canvasCtx.lineWidth = 2;
    canvasCtx.strokeStyle = 'rgb(255, 255, 0)';

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

//-----------------------------

function record_start() {
    
    for(var i = 0; i<music_particis.length;i++){
            if(music_particis[i].readyState != 4){
                console.log(music_particis[0].readyState);
                return ;
            }
    }
    
    for(var i = 0;i<music_particis.length;i++){
        music_particis[i].play();
    }

    stop.disabled = false;
    mediaRecorder.start();
    app.getMedia().record();

    record.style.background = "#229";
    record.style.color = "#fff";

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
var ass;

function send(data) {
    var fd = new FormData();
    fd.append('fname', 'audioBlob');
    fd.append('data',data);
    fd.append('mimeType',"audio/mpeg");

ass = fd;
    $.ajax({
        url: "https://harmony-project-chonahoom.c9users.io/otoven_blobTest",
        type: "POST",
        processData: false,
        contentType: false,
        data: fd,
        dataType: 'json',
        success:function(data){

            post_to_url('https://harmony-project-chonahoom.c9users.io/otoven_recordupload',{
                "_token":  $('meta[name="csrf-token"]').attr('content'),
                'selected_particis':selected_particis,
                'file_name' : data,
                'otoven_board_id':otoven_board_id[0].value,
            });

        },
        error: function () {
            alert('오류가 발생하였습니다.');
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


