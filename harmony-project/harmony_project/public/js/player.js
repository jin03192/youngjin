// Global variable to track current file name.
    var inst_src = <?php echo json_encode($inst_src) ?>;
    alert(inst_src[2]);
    var audio  = new Audio(inst_src[0]);
    var audio2 = new Audio(inst_src[1]);
    var audio3 = new Audio(inst_src[2]);
    var audio4 = new Audio(inst_src[3]);
    
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
                    audio3.play();
                    audio4.play();
                    // audio2.play();
                    btn.textContent = "Pause";
                }
                else {
                    audio.pause();
                    audio2.pause();
                    audio3.pause();
                    audio4.pause();
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