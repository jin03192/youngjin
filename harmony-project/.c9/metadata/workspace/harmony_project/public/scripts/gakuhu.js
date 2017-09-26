{"changed":false,"filter":false,"title":"gakuhu.js","tooltip":"/harmony_project/public/scripts/gakuhu.js","value":"$(document).ready(function(){\n        window.onload = function() {\n         getXML();\n        }\n    });\n    \nvar work_mode = document.getElementsByName(\"work_mode\");\n\n    function getXML(){\n        var xmlhttp=new XMLHttpRequest();\n        xmlhttp.onreadystatechange = function(){\n            if (xmlhttp.readyState === 4) {\n                if (xmlhttp.status === 200) {\n                   \n                        draw(xmlhttp.responseXML);\n                    \n               } else {\n                    alert('다시 시도해주세요. (F5)');\n                }\n            }\n        };\n        if(work_mode[0].value == 'modi'){\n            xmlhttp.open('GET', '/xml/hk.xml', true);    //파일명\n        }else {\n            xmlhttp.open('GET', '/xml/mus.xml', true);\n        }\n        xmlhttp.send();\n    }\n\n    \n\n//---------전역변수들----------------\nvar mode = document.getElementsByName(\"mode\");\n        var before_gakuhu_width = 0;\n        var after_gakuhu_width = 0;\n        var line = 1;\n        var line_gakuhu_height = 120;\n        var gakuhu_height = line_gakuhu_height;\n        var term = 36;\n        var current_pos = 36;\n        var first_space = 0;\n        var is_staff = false;\n        var te;\n        var tag;\nvar cur_img;\n        var tag_widths = {\n            'beat':13,\n            'fifths0':0,\n            'fifths1':13,\n            'fifths2':18,\n            'fifths3':26,\n            'fifths4':27,\n            'fifths5':33,\n            'fifths6':41,\n            'fifths-1':11,\n            'fifths-2':17,\n            'fifths-3':22,\n            'fifths-4':31,\n            'fifths-5':38,\n            'fifths-6':42,\n            '16th':15,\n            '-16th':9,\n            'eighth':14,\n            '-eighth':10,\n            'half':9,\n            '-half':10,\n            'quarter':9,\n            '-quarter':10,\n            '-whole':13,\n            'whole':4,\n            '/muse_img/dot.png':3,\n            '/muse_img/rest_16th.png':12,\n            '/muse_img/rest_eighth.png':8,\n            '/muse_img/rest_quarter.png':8,\n            '/muse_img/rest_half.png':8,\n            '/muse_img/rest_whole.png':10,\n    };\n\n//----------------------------------\n\nfunction getImgTag(src,left,top){\n            cur_img = src;\n            var a = document.createElement('img');\n            a.style.position = 'absolute';\n            a.src = src;\n            if(src != '/muse_img/empty.png'){\n                a.className = \"objectDrag\";\n            }\n            a.style.top = top+\"px\";\n            a.style.left = left+\"px\";\n            return a;\n                  \n}\n\n        function draw(rootNode){\n            var measures_tag = rootNode.getElementsByTagName(\"measure\");\n            var fifths = rootNode.getElementsByTagName(\"fifths\")[0].innerHTML;     //장조\n\n            var beats_tag = rootNode.getElementsByTagName(\"beats\")[0].innerHTML;\n            var beat_type_tag = rootNode.getElementsByTagName(\"beat-type\")[0].innerHTML;         //박자\n            var bpm_tag = rootNode.getElementsByTagName(\"per-minute\")[0].innerHTML;              //bpm\n\n            var step_tag = rootNode.getElementsByTagName(\"step\");\n            var mode_tag = rootNode.getElementsByTagName(\"mode\");\n            var type_tag = rootNode.getElementsByTagName(\"type\");\n            var octave_tag = rootNode.getElementsByTagName(\"octave\");\n            var duration_tag = rootNode.getElementsByTagName(\"duration\");\n            var beat_unit_tag = rootNode.getElementsByTagName(\"beat-unit\"); \n\n            var title_tag = \"<h2>♩ BPM = \" + bpm_tag + \"</h2>\";\n             $('#artCanvas').append(title_tag);\n\n            //-----------------오선지----------------------\n            \n            tag = getImgTag('/muse_img/empty.png',0,line_gakuhu_height);\n            $('#artCanvas').append(tag);\n            \n          \n            \n\n            //-----------------장조----------------------\n            tag = getImgTag('/muse_img/fifths/' + fifths + '.png',36,line_gakuhu_height);\n            $('#artCanvas').append(tag);\n            \n                first_space = tag_widths['fifths'+fifths] + 36;\n        \n\n            //-----------------박자----------------------\n            tag = getImgTag('/muse_img/beat/' + beats_tag + '.png',first_space,(line_gakuhu_height+10) );\n            $('#artCanvas').append(tag);\n\n            tag = getImgTag('/muse_img/beat/' + beats_tag + '.png',first_space,(line_gakuhu_height+80) );\n            $('#artCanvas').append(tag);\n\n            tag = getImgTag('/muse_img/beat/' + beats_tag + '.png',first_space,(line_gakuhu_height+24) );\n            $('#artCanvas').append(tag);\n\n            tag = getImgTag('/muse_img/beat/' + beats_tag + '.png',first_space,(line_gakuhu_height+94) );\n            $('#artCanvas').append(tag);\n\n            first_space += tag_widths['beat'];\n            var backup=0;\n             before_gakuhu_width = first_space;\n             after_gakuhu_width = first_space;\n            \n            first_space -= tag_widths['beat'];\n\n            for(var i=0; i<measures_tag.length ;i++){\n                before_gakuhu_width = after_gakuhu_width;\n                if(i != (measures_tag.length-1) )  {\n                    backup = parseInt(measures_tag[i + 1].getElementsByTagName('backup')[0].getElementsByTagName('duration')[0].innerHTML);\n                }\n\n                for(var j = 0; j<measures_tag[i].getElementsByTagName('note').length ;j++){\n                    //한 measure에 있는 음표 수\n                    var note = measures_tag[i].getElementsByTagName('note')[j];\n                    var duration = parseInt(note.getElementsByTagName('duration')[0].innerHTML);\n                    var staff = note.getElementsByTagName('staff')[0].innerHTML;\n                    var chord = note.getElementsByTagName('chord').length;\n\n                    if(staff == 1) {\n                        if( (j+1) < measures_tag[i].getElementsByTagName('note').length ){\n                            var next_note = measures_tag[i].getElementsByTagName('note')[j+1];\n                            if(is_chord(chord,next_note)){\n\n                            }else if(chord == 0){\n                                after_gakuhu_width += duration;\n                            }\n                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord,next_note);\n\n                        }else{\n                            after_gakuhu_width += duration;\n                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord);\n                        }\n\n\n                    }else if(!is_staff){            //마디 끝, 2번째로 다시 내려감\n                        width_temp = after_gakuhu_width;\n                        after_gakuhu_width = before_gakuhu_width;\n\n                        gakuhu_height += 70;\n                        is_staff = true;\n\n                        if( (j+1) < measures_tag[i].getElementsByTagName('note').length ){\n                            var next_note = measures_tag[i].getElementsByTagName('note')[j+1];\n                            if(is_chord(chord,next_note)){\n\n                            }else if(chord == 0){\n                                after_gakuhu_width += duration;\n                            }\n                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord,next_note);\n\n                        }else{\n                            after_gakuhu_width += duration;\n                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord);\n                        }\n                    }else {\n                        if( (j+1) < measures_tag[i].getElementsByTagName('note').length ){\n                            var next_note = measures_tag[i].getElementsByTagName('note')[j+1];\n                            if(is_chord(chord,next_note)){\n\n                            }else if(chord == 0){\n                                after_gakuhu_width += duration;\n                            }\n                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord,next_note);\n\n                        }else{\n                            after_gakuhu_width += duration;\n                            select_type(note, after_gakuhu_width, gakuhu_height,staff,chord);\n                        }\n\n                    }\n\n                }\n                gakuhu_height -= 70;\n                is_staff = false;\n\n                if(width_temp > after_gakuhu_width){\n                    after_gakuhu_width = width_temp;\n                }\n\n                if( (after_gakuhu_width+backup) > 620) {\n                    //라인갱신\n\n                    line_gakuhu_height = line_gakuhu_height + 240;\n                    gakuhu_height = line_gakuhu_height;\n                    tag = getImgTag('/muse_img/empty.png',0,line_gakuhu_height );\n                    $('#artCanvas').append(tag);\n\n                    tag = getImgTag('/muse_img/fifths/'+fifths+'.png',term,line_gakuhu_height );\n                    $('#artCanvas').append(tag);\n                    \n                    before_gakuhu_width = first_space;\n                    after_gakuhu_width = first_space;\n                    line++;\n                }else {\n\n                    after_gakuhu_width += 4;\n                    //마디막대 그리기\n                    tag = getImgTag('/muse_img/owaru.png',after_gakuhu_width,line_gakuhu_height+12 );\n                    $('#artCanvas').append(tag);\n                    if(width_temp > after_gakuhu_width){\n                            //수정..해야하는데\n                    }\n                    after_gakuhu_width += 4;\n                }\n\n            }\n                                                \n\n            // 음표가 다 그려지고 난뒤에 해야될 일들.....\n\n            // 드래그앤 드롭 복사기능\n            if(mode[0].value == 'modi'){\n             fix();   \n            }\n          \n        }\n\n        function fix(){\n            $(\".objectDrag\").draggable({\n                //helper:'clone'\n            });\n\n            //--\n            $(\".cloneOBJ\").draggable({\n                helper:'clone'\n                \n            });\n\n            // 복사기능 켄버스에 올리기 + 복사 한 후 음표 수정하게\n            $(\"#artCanvas\").droppable({\n                accept: \".cloneOBJ\",\n                drop: function(event,ui){\n                    var new_signature = $(ui.helper).clone().removeClass('cloneOBJ');\n                    new_signature.draggable();\n                    $(this).append(new_signature);\n                }\n            });\n        }\n\n    function select_type(note,w,h,staff,chord,next_note=null) {\n        var is_rest = note.getElementsByTagName('rest').length;\n        var type = note.getElementsByTagName('type')[0].innerHTML;\n        var is_pitch = note.getElementsByTagName('pitch').length;\n        var is_tie = note.getElementsByTagName('tie').length;\n        var is_dot = note.getElementsByTagName('dot').length;\n\n        if(is_rest == 1){\n            //쉼표\n            tag = getImgTag('/muse_img/rest_'+type+'.png',w,h + 18 );\n            if(type == 'half'){\n                tag = getImgTag('/muse_img/rest_whole.png',w,h + 20 );\n            }\n            $('#artCanvas').append(tag);\n\n            after_gakuhu_width += tag_widths[cur_img];\n\n        }else if(is_pitch == 1){\n            //음표\n            var pitch = note.getElementsByTagName('pitch')[0];\n            var step = pitch.getElementsByTagName('step')[0].innerHTML;\n            var octave = pitch.getElementsByTagName('octave')[0].innerHTML;\n\n            h = (line*240) -(int_type(step)*3 + (octave*21) );\n\n                    \n            if( ((staff == 2) && (octave >= 3) && !((octave==3)&&(step=='D'))) ||\n                ((staff == 1) && (octave >= 4) && !((octave==4)&&(step=='A'))) ) { \n                    tag = getImgTag('/muse_img/type/-' + type + '.png',w,h );\n            }else{\n                   tag = getImgTag('/muse_img/type/' + type + '.png',w,h );\n            }\n            $('#artCanvas').append(tag);\n\n            if( (next_note) || !(is_chord(chord,next_note)) ){\n                after_gakuhu_width += 12;\n            }\n\n            /*\n            if( (next_note) && !(is_chord(chord,next_note)) ){\n            after_gakuhu_width += 12;\n            }else if(!(next_note)){\n            after_gakuhu_width += 12;\n            }\n            */\n\n\n            if(is_tie == 1){\n                var tie = note.getElementsByTagName('tie')[0].getAttribute(\"type\");\n                if(tie == 'start'){\n                    var dur = note.getElementsByTagName('duration')[0].innerHTML;\n\n                    tag = getImgTag('/muse_img/renketu.png',after_gakuhu_width-1,h+18 );\n                    tag.width = dur-12;\n//////////////////////////////여기 연결부분/////////////////////\n                    if( !(is_chord(chord,next_note)) ){\n                        after_gakuhu_width += tag.width;\n                    }\n                    \n                    $('#artCanvas').append(tag);\n                    \n                }\n            }\n\n            if(is_dot == 1){\n                    tag = getImgTag('/muse_img/dot.png',after_gakuhu_width,h+18 );\n                    $('#artCanvas').append(tag);\n\n                if( !(is_chord(chord,next_note)) ){\n                    after_gakuhu_width += tag_widths[cur_img];\n                }\n\n            }\n\n        }\n\n\n    }\n\n        function int_type(str) {\n            //CDEFGAB\n            var num = 0;\n            switch (str) {\n                case 'C'   : num = 1;\n                    break;\n                case 'D'   : num = 2;\n                    break;\n                case 'E'   : num = 3;\n                    break;\n                case 'F'   : num = 4;\n                    break;\n                case 'G'   : num = 5;\n                    break;\n                case 'A'   : num = 6;\n                    break;\n                case 'B'   : num = 7;\n                    break;\n                default    :\n                    break;\n            }\n            return num;\n        }\n\n        function is_chord(chord,next_note) {\n            if((next_note != null)&& ((chord == 1) || (next_note.getElementsByTagName('chord').length == 1 ))){\n               \n                return true;\n            }else{\n                return false;\n            }\n        }","undoManager":{"mark":-1,"position":-1,"stack":[]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1506384908321}