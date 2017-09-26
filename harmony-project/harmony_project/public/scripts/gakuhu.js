$(document).ready(function(){
        window.onload = function() {
         getXML();
        }
    });
    
var work_mode = document.getElementsByName("work_mode");

    function getXML(){
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if (xmlhttp.readyState === 4) {
                if (xmlhttp.status === 200) {
                   
                        draw(xmlhttp.responseXML);
                    
               } else {
                    alert('다시 시도해주세요. (F5)');
                }
            }
        };
        if(work_mode[0].value == 'modi'){
            xmlhttp.open('GET', '/xml/hk.xml', true);    //파일명
        }else {
            xmlhttp.open('GET', '/xml/mus.xml', true);
        }
        xmlhttp.send();
    }

    

//---------전역변수들----------------
var mode = document.getElementsByName("mode");
        var before_gakuhu_width = 0;
        var after_gakuhu_width = 0;
        var line = 1;
        var line_gakuhu_height = 120;
        var gakuhu_height = line_gakuhu_height;
        var term = 36;
        var current_pos = 36;
        var first_space = 0;
        var is_staff = false;
        var te;
        var tag;
var cur_img;
        var tag_widths = {
            'beat':13,
            'fifths0':0,
            'fifths1':13,
            'fifths2':18,
            'fifths3':26,
            'fifths4':27,
            'fifths5':33,
            'fifths6':41,
            'fifths-1':11,
            'fifths-2':17,
            'fifths-3':22,
            'fifths-4':31,
            'fifths-5':38,
            'fifths-6':42,
            '16th':15,
            '-16th':9,
            'eighth':14,
            '-eighth':10,
            'half':9,
            '-half':10,
            'quarter':9,
            '-quarter':10,
            '-whole':13,
            'whole':4,
            '/muse_img/dot.png':3,
            '/muse_img/rest_16th.png':12,
            '/muse_img/rest_eighth.png':8,
            '/muse_img/rest_quarter.png':8,
            '/muse_img/rest_half.png':8,
            '/muse_img/rest_whole.png':10,
    };

//----------------------------------

function getImgTag(src,left,top){
            cur_img = src;
            var a = document.createElement('img');
            a.style.position = 'absolute';
            a.src = src;
            if(src != '/muse_img/empty.png'){
                a.className = "objectDrag";
            }
            a.style.top = top+"px";
            a.style.left = left+"px";
            return a;
                  
}

        function draw(rootNode){
            var measures_tag = rootNode.getElementsByTagName("measure");
            var fifths = rootNode.getElementsByTagName("fifths")[0].innerHTML;     //장조

            var beats_tag = rootNode.getElementsByTagName("beats")[0].innerHTML;
            var beat_type_tag = rootNode.getElementsByTagName("beat-type")[0].innerHTML;         //박자
            var bpm_tag = rootNode.getElementsByTagName("per-minute")[0].innerHTML;              //bpm

            var step_tag = rootNode.getElementsByTagName("step");
            var mode_tag = rootNode.getElementsByTagName("mode");
            var type_tag = rootNode.getElementsByTagName("type");
            var octave_tag = rootNode.getElementsByTagName("octave");
            var duration_tag = rootNode.getElementsByTagName("duration");
            var beat_unit_tag = rootNode.getElementsByTagName("beat-unit"); 

            var title_tag = "<h2>♩ BPM = " + bpm_tag + "</h2>";
             $('#artCanvas').append(title_tag);

            //-----------------오선지----------------------
            
            tag = getImgTag('/muse_img/empty.png',0,line_gakuhu_height);
            $('#artCanvas').append(tag);
            
          
            

            //-----------------장조----------------------
            tag = getImgTag('/muse_img/fifths/' + fifths + '.png',36,line_gakuhu_height);
            $('#artCanvas').append(tag);
            
                first_space = tag_widths['fifths'+fifths] + 36;
        

            //-----------------박자----------------------
            tag = getImgTag('/muse_img/beat/' + beats_tag + '.png',first_space,(line_gakuhu_height+10) );
            $('#artCanvas').append(tag);

            tag = getImgTag('/muse_img/beat/' + beats_tag + '.png',first_space,(line_gakuhu_height+80) );
            $('#artCanvas').append(tag);

            tag = getImgTag('/muse_img/beat/' + beats_tag + '.png',first_space,(line_gakuhu_height+24) );
            $('#artCanvas').append(tag);

            tag = getImgTag('/muse_img/beat/' + beats_tag + '.png',first_space,(line_gakuhu_height+94) );
            $('#artCanvas').append(tag);

            first_space += tag_widths['beat'];
            var backup=0;
             before_gakuhu_width = first_space;
             after_gakuhu_width = first_space;
            
            first_space -= tag_widths['beat'];

            for(var i=0; i<measures_tag.length ;i++){
                before_gakuhu_width = after_gakuhu_width;
                if(i != (measures_tag.length-1) )  {
                    backup = parseInt(measures_tag[i + 1].getElementsByTagName('backup')[0].getElementsByTagName('duration')[0].innerHTML);
                }

                for(var j = 0; j<measures_tag[i].getElementsByTagName('note').length ;j++){
                    //한 measure에 있는 음표 수
                    var note = measures_tag[i].getElementsByTagName('note')[j];
                    var duration = parseInt(note.getElementsByTagName('duration')[0].innerHTML);
                    var staff = note.getElementsByTagName('staff')[0].innerHTML;
                    var chord = note.getElementsByTagName('chord').length;

                    if(staff == 1) {
                        if( (j+1) < measures_tag[i].getElementsByTagName('note').length ){
                            var next_note = measures_tag[i].getElementsByTagName('note')[j+1];
                            if(is_chord(chord,next_note)){

                            }else if(chord == 0){
                                after_gakuhu_width += duration;
                            }
                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord,next_note);

                        }else{
                            after_gakuhu_width += duration;
                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord);
                        }


                    }else if(!is_staff){            //마디 끝, 2번째로 다시 내려감
                        width_temp = after_gakuhu_width;
                        after_gakuhu_width = before_gakuhu_width;

                        gakuhu_height += 70;
                        is_staff = true;

                        if( (j+1) < measures_tag[i].getElementsByTagName('note').length ){
                            var next_note = measures_tag[i].getElementsByTagName('note')[j+1];
                            if(is_chord(chord,next_note)){

                            }else if(chord == 0){
                                after_gakuhu_width += duration;
                            }
                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord,next_note);

                        }else{
                            after_gakuhu_width += duration;
                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord);
                        }
                    }else {
                        if( (j+1) < measures_tag[i].getElementsByTagName('note').length ){
                            var next_note = measures_tag[i].getElementsByTagName('note')[j+1];
                            if(is_chord(chord,next_note)){

                            }else if(chord == 0){
                                after_gakuhu_width += duration;
                            }
                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord,next_note);

                        }else{
                            after_gakuhu_width += duration;
                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord);
                        }

                    }

                }
                gakuhu_height -= 70;
                is_staff = false;

                if(width_temp > after_gakuhu_width){
                    after_gakuhu_width = width_temp;
                }

                if( (after_gakuhu_width+backup) > 620) {
                    //라인갱신

                    line_gakuhu_height = line_gakuhu_height + 240;
                    gakuhu_height = line_gakuhu_height;
                    tag = getImgTag('/muse_img/empty.png',0,line_gakuhu_height );
                    $('#artCanvas').append(tag);

                    tag = getImgTag('/muse_img/fifths/'+fifths+'.png',term,line_gakuhu_height );
                    $('#artCanvas').append(tag);
                    
                    before_gakuhu_width = first_space;
                    after_gakuhu_width = first_space;
                    line++;
                }else {

                    after_gakuhu_width += 4;
                    //마디막대 그리기
                    tag = getImgTag('/muse_img/owaru.png',after_gakuhu_width,line_gakuhu_height+12 );
                    $('#artCanvas').append(tag);
                    if(width_temp > after_gakuhu_width){
                            //수정..해야하는데
                    }
                    after_gakuhu_width += 4;
                }

            }
                                                

            // 음표가 다 그려지고 난뒤에 해야될 일들.....

            // 드래그앤 드롭 복사기능
            if(mode[0].value == 'modi'){
             fix();   
            }
          
        }

        function fix(){
            $(".objectDrag").draggable({
                //helper:'clone'
            });

            //--
            $(".cloneOBJ").draggable({
                helper:'clone'
                
            });

            // 복사기능 켄버스에 올리기 + 복사 한 후 음표 수정하게
            $("#artCanvas").droppable({
                accept: ".cloneOBJ",
                drop: function(event,ui){
                    var new_signature = $(ui.helper).clone().removeClass('cloneOBJ');
                    new_signature.draggable();
                    $(this).append(new_signature);
                }
            });
        }

    function select_type(note,w,h,staff,chord,next_note=null) {
        var is_rest = note.getElementsByTagName('rest').length;
        var type = note.getElementsByTagName('type')[0].innerHTML;
        var is_pitch = note.getElementsByTagName('pitch').length;
        var is_tie = note.getElementsByTagName('tie').length;
        var is_dot = note.getElementsByTagName('dot').length;

        if(is_rest == 1){
            //쉼표
            tag = getImgTag('/muse_img/rest_'+type+'.png',w,h + 18 );
            if(type == 'half'){
                tag = getImgTag('/muse_img/rest_whole.png',w,h + 20 );
            }
            $('#artCanvas').append(tag);

            after_gakuhu_width += tag_widths[cur_img];

        }else if(is_pitch == 1){
            //음표
            var pitch = note.getElementsByTagName('pitch')[0];
            var step = pitch.getElementsByTagName('step')[0].innerHTML;
            var octave = pitch.getElementsByTagName('octave')[0].innerHTML;

            h = (line*240) -(int_type(step)*3 + (octave*21) );

                    
            if( ((staff == 2) && (octave >= 3) && !((octave==3)&&(step=='D'))) ||
                ((staff == 1) && (octave >= 4) && !((octave==4)&&(step=='A'))) ) { 
                    tag = getImgTag('/muse_img/type/-' + type + '.png',w,h );
            }else{
                   tag = getImgTag('/muse_img/type/' + type + '.png',w,h );
            }
            $('#artCanvas').append(tag);

            if( (next_note) || !(is_chord(chord,next_note)) ){
                after_gakuhu_width += 12;
            }

            /*
            if( (next_note) && !(is_chord(chord,next_note)) ){
            after_gakuhu_width += 12;
            }else if(!(next_note)){
            after_gakuhu_width += 12;
            }
            */


            if(is_tie == 1){
                var tie = note.getElementsByTagName('tie')[0].getAttribute("type");
                if(tie == 'start'){
                    var dur = note.getElementsByTagName('duration')[0].innerHTML;

                    tag = getImgTag('/muse_img/renketu.png',after_gakuhu_width-1,h+18 );
                    tag.width = dur-12;
//////////////////////////////여기 연결부분/////////////////////
                    if( !(is_chord(chord,next_note)) ){
                        after_gakuhu_width += tag.width;
                    }
                    
                    $('#artCanvas').append(tag);
                    
                }
            }

            if(is_dot == 1){
                    tag = getImgTag('/muse_img/dot.png',after_gakuhu_width,h+18 );
                    $('#artCanvas').append(tag);

                if( !(is_chord(chord,next_note)) ){
                    after_gakuhu_width += tag_widths[cur_img];
                }

            }

        }


    }

        function int_type(str) {
            //CDEFGAB
            var num = 0;
            switch (str) {
                case 'C'   : num = 1;
                    break;
                case 'D'   : num = 2;
                    break;
                case 'E'   : num = 3;
                    break;
                case 'F'   : num = 4;
                    break;
                case 'G'   : num = 5;
                    break;
                case 'A'   : num = 6;
                    break;
                case 'B'   : num = 7;
                    break;
                default    :
                    break;
            }
            return num;
        }

        function is_chord(chord,next_note) {
            if((next_note != null)&& ((chord == 1) || (next_note.getElementsByTagName('chord').length == 1 ))){
               
                return true;
            }else{
                return false;
            }
        }