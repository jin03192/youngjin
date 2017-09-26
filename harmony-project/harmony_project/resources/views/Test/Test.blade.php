<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
    <?php
    echo  "<script>
            var audio  = new Audio('/midi/cygne/AcoustPiano.mp3');
            var audio2 = new Audio('/midi/cygne/Cello2.mp3');
          </script>";
    ?>
    
    <script type="text/javascript">
    var currentFile = "";
    function playAudio() {
    // Check for audio element support.
        if (window.HTMLAudioElement) {
            try {
                var oAudio = document.getElementById('myaudio');
                var btn = document.getElementById('play');
                var audioURL = document.getElementById('audiofile');

                //Skip loading if current file hasn't changed.
                if (audioURL.value !== currentFile) {
                    oAudio.src = audioURL.value;
                    currentFile = audioURL.value;
                }

                // Tests the paused attribute and set state.
                if (audio.paused){
                    audio.play();
                    audio2.play();
                    // audio2.play();
                    btn.textContent = "Pause";
                }
                else {
                    audio.pause();
                    audio2.pause();
                    // audio2.pause();
                    btn.textContent = "Play";
                }
            }
            catch (e) {
                // Fail silently but show in F12 developer tools console
                 if(window.console && console.error("Error:" + e));
            }
        }
    }
    // Rewinds the audio file by 30 seconds.
    function rewindAudio() {
    // Check for audio element support.
        if (window.HTMLAudioElement) {
            try {
                var oAudio = document.getElementById('myaudio');
                oAudio.currentTime -= 30.0;
            }
            catch (e) {
                // Fail silently but show in F12 developer tools console
                 if(window.console && console.error("Error:" + e));
            }
        }
    }
    // Fast forwards the audio file by 30 seconds.
    function forwardAudio() {
         // Check for audio element support.
        if (window.HTMLAudioElement) {
            try {
                var oAudio = document.getElementById('myaudio');
                oAudio.currentTime += 30.0;
            }
            catch (e) {
                // Fail silently but show in F12 developer tools console
                 if(window.console && console.error("Error:" + e));
            }
        }
    }
    // Restart the audio file to the beginning.
    function restartAudio() {
         // Check for audio element support.
        if (window.HTMLAudioElement) {
            try {
                var oAudio = document.getElementById('myaudio');
                oAudio.currentTime = 0;
            }
            catch (e) {
                // Fail silently but show in F12 developer tools console
                 if(window.console && console.error("Error:" + e));
           }
        }
    }
    </script>
  </head>
  <body>
    <p>
      <input type="text" id="audiofile" size="80" value="Flute.mp3"/>
    </p>
    <audio id="myaudio">
      HTML5 audio not supported
    </audio>
    <button id="play" onclick="playAudio();">
      Play
    </button>
    <button onclick="rewindAudio();">
      Rewind
    </button>
    <button onclick="forwardAudio();">
      Fast forward
    </button>
    <button onclick="restartAudio();">
      Restart
    </button>
  </body>
</html>
