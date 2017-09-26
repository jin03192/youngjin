      var i = 0;
      var z = 0;
      var setitval;
      var drop;
      var volume_save;
      
    function toggle_object(post_id){
        i = i + post_id;
        var obj2 = document.getElementById('imgVen');
        var obj = document.getElementById('motoven');
        if(i%2!=0)
        {
            obj2.src="/img/dday.jpg";
            obj.src="/img/c.jpg";
        }
        else
        {
            obj2.src="/img/c.jpg";
            obj.src="/img/dday.jpg";
        }
    }
    function toggle_object2(post_idi){
        z = z + post_idi;
        var obj = document.getElementById('motoven');
        var obj2 = document.getElementById('imgVen2');
        if(z%2!=0)
        {
            obj.src="/img/fools.jpg";
            obj2.src="/img/ali.jpg";
        }
        else
        {
            obj.src="/img/ali.jpg";
            obj2.src="/img/fools.jpg";
        }
    }
    
    
    
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
    function Return(){
        var content = confirm("지금 돌아가시면 지금까지 녹음했던 모든 내용을 잃을 수 있습니다.        그래도 BandChallenge Main페이지로 이동하시겠습니까?");
        if(content == true){
            location.href = "/otoven/otoven_main";
        }
    };

