{"filter":false,"title":"gakuhu_load.blade.php","tooltip":"/harmony_project/resources/views/board/gakuhu_load.blade.php","undoManager":{"mark":56,"position":56,"stack":[[{"start":{"row":0,"column":0},"end":{"row":44,"column":6},"action":"insert","lines":["<meta name=\"csrf_token\" content=\"{{ csrf_token() }}\"/>","<head>","   <!-- 합쳐지고 최소화된 최신 CSS -->","    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">","    ","    <!-- 부가적인 테마 -->","    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css\">","    ","    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->","    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>","<style>","    body{","        background:url(\"/img/wood.png\");","    }","    .upload{","        position:absolute;","        right:120px;","        top:500px;","    }","    .upload input{","        width:100px;","        height:110px;","        border-radius:50px;","        background:url(\"/img/prev.png\");","        background-size:100px;","        border:none;","    }","    .parpbg{","        background:url(\"/img/parp.png\");","        height:700px;","        width:800px;","        margin-left:50px;","    }","    #artCanvas{","        z-index:1;","        position: absolute; ","        overflow-x:hidden; ","    }","    ::-webkit-scrollbar {","        display:none;","    } ","</style>","<div class=\"\">","    @include('menu.topmenu')","</div>"],"id":1}],[{"start":{"row":44,"column":6},"end":{"row":45,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":45,"column":0},"end":{"row":46,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":46,"column":0},"end":{"row":60,"column":15},"action":"insert","lines":[" <form action=\"\" name=\"uploadForm\" method=\"post\" >","        <input type=\"hidden\" name=\"work_mode\" value=\"modi\"/>","        <input type=\"hidden\" name=\"mode\" value=\"modi\"/>","            <input name = file_name type = hidden value=\"{{$file['file_name']}}\"/>","            <input name = selected_insts type = hidden value=\"{{$file['selected_insts']}}\"/>","            <input name = selected_particis type = hidden value=\"{{$file['selected_particis']}}\"/>","            <input name = midi_id type = hidden value=\"{{$file['midi_id']}}\"/>","            <input name = band_board_id type = hidden value=\"{{$file['band_board_id']}}\"/>","            ","                      ","                <div class=\"upload\">","                    <input type=\"button\" onclick=\"ad();\" value=\"\" />","                </div>","                ","        </form>"],"id":4}],[{"start":{"row":60,"column":15},"end":{"row":61,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":61,"column":0},"end":{"row":61,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":61,"column":8},"end":{"row":62,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":62,"column":0},"end":{"row":62,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":62,"column":8},"end":{"row":100,"column":9},"action":"insert","lines":["<script>","","    var file_name = document.getElementsByName(\"file_name\");","    var instruments = document.getElementsByName(\"selected_insts\");","    var selected_particis = document.getElementsByName(\"selected_particis\");","    var midi_id = document.getElementsByName(\"midi_id\");","    var band_board_id = document.getElementsByName(\"band_board_id\");","","    function ad(){","        ","        post_to_url('/recordupload',{","            \"_token\":  $('meta[name=\"csrf-token\"]').attr('content'),","            'file_name' : file_name[0].value,","            'selected_insts':instruments[0].value,","            'selected_particis':selected_particis[0].value,","            'midi_id':midi_id[0].value,","            'band_board_id':band_board_id[0].value,","        });","        ","    }","    ","    function post_to_url(path, params) {","","        var form = document.createElement(\"form\");","        form.setAttribute(\"method\", \"post\");","        form.setAttribute(\"action\", path);","        ","        for(var key in params) {","            var hiddenField = document.createElement(\"input\");","            hiddenField.setAttribute(\"type\", \"hidden\");","            hiddenField.setAttribute(\"name\", key);","            hiddenField.setAttribute(\"value\", params[key]);","            form.appendChild(hiddenField);","        }","    ","        document.body.appendChild(form);","        form.submit();","    }","</script>"],"id":7}],[{"start":{"row":62,"column":0},"end":{"row":62,"column":8},"action":"remove","lines":["        "],"id":8}],[{"start":{"row":61,"column":8},"end":{"row":62,"column":0},"action":"insert","lines":["",""],"id":9},{"start":{"row":62,"column":0},"end":{"row":62,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":62,"column":8},"end":{"row":63,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":63,"column":0},"end":{"row":63,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":63,"column":8},"end":{"row":64,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":64,"column":0},"end":{"row":64,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":64,"column":8},"end":{"row":65,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":65,"column":0},"end":{"row":65,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":65,"column":8},"end":{"row":66,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":66,"column":0},"end":{"row":66,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":66,"column":8},"end":{"row":67,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":67,"column":0},"end":{"row":67,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":55,"column":16},"end":{"row":58,"column":22},"action":"remove","lines":["      ","                <div class=\"upload\">","                    <input type=\"button\" onclick=\"ad();\" value=\"\" />","                </div>"],"id":15}],[{"start":{"row":54,"column":12},"end":{"row":55,"column":16},"action":"remove","lines":["","                "],"id":16}],[{"start":{"row":71,"column":0},"end":{"row":72,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":72,"column":0},"end":{"row":73,"column":0},"action":"insert","lines":["",""],"id":18}],[{"start":{"row":72,"column":0},"end":{"row":72,"column":35},"action":"insert","lines":["setTimeout('record_start()', 3000);"],"id":19}],[{"start":{"row":72,"column":12},"end":{"row":72,"column":24},"action":"remove","lines":["record_start"],"id":20},{"start":{"row":72,"column":12},"end":{"row":72,"column":14},"action":"insert","lines":["ad"]}],[{"start":{"row":72,"column":19},"end":{"row":72,"column":20},"action":"remove","lines":["3"],"id":21},{"start":{"row":72,"column":19},"end":{"row":72,"column":20},"action":"insert","lines":["5"]}],[{"start":{"row":76,"column":22},"end":{"row":76,"column":34},"action":"remove","lines":["recordupload"],"id":22},{"start":{"row":76,"column":22},"end":{"row":76,"column":33},"action":"insert","lines":["gakuhu_modi"]}],[{"start":{"row":59,"column":8},"end":{"row":59,"column":9},"action":"insert","lines":["악"],"id":25}],[{"start":{"row":59,"column":9},"end":{"row":59,"column":10},"action":"insert","lines":["보"],"id":27}],[{"start":{"row":59,"column":10},"end":{"row":59,"column":11},"action":"insert","lines":[" "],"id":28}],[{"start":{"row":59,"column":11},"end":{"row":59,"column":12},"action":"insert","lines":["출"],"id":31}],[{"start":{"row":59,"column":12},"end":{"row":59,"column":13},"action":"insert","lines":["력"],"id":34}],[{"start":{"row":59,"column":13},"end":{"row":59,"column":14},"action":"insert","lines":["."],"id":35}],[{"start":{"row":59,"column":14},"end":{"row":59,"column":15},"action":"insert","lines":["."],"id":36}],[{"start":{"row":59,"column":15},"end":{"row":59,"column":16},"action":"insert","lines":["."],"id":37}],[{"start":{"row":7,"column":4},"end":{"row":7,"column":48},"action":"insert","lines":["<link rel=\"stylesheet\" href=\"css/style.css\">"],"id":38}],[{"start":{"row":7,"column":33},"end":{"row":7,"column":34},"action":"insert","lines":["/"],"id":39}],[{"start":{"row":59,"column":7},"end":{"row":59,"column":16},"action":"remove","lines":[" 악보 출력..."],"id":40},{"start":{"row":59,"column":7},"end":{"row":70,"column":0},"action":"insert","lines":["<div id=\"container\">","<div class=\"stick\"></div>","<div class=\"stick\"></div>","<div class=\"stick\"></div>","<div class=\"stick\"></div>","<div class=\"stick\"></div>","<div class=\"stick\"></div>","","<h1>Music Note Printing...</h1>","","</div>",""]}],[{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "],"id":41},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "]},{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "]},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"insert","lines":["    "]},{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"insert","lines":["    "]},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"insert","lines":["    "]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"insert","lines":["    "]},{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "]},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "],"id":42},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "]},{"start":{"row":63,"column":0},"end":{"row":63,"column":4},"action":"insert","lines":["    "]},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"insert","lines":["    "]},{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"insert","lines":["    "]},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"insert","lines":["    "]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"insert","lines":["    "]},{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "]},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":72,"column":8},"end":{"row":72,"column":43},"action":"insert","lines":["<script src=\"js/index.js\"></script>"],"id":43}],[{"start":{"row":72,"column":21},"end":{"row":72,"column":23},"action":"remove","lines":["js"],"id":44}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":23},"action":"insert","lines":["d"],"id":45}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":23},"action":"remove","lines":["d"],"id":46}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":23},"action":"insert","lines":["l"],"id":47}],[{"start":{"row":72,"column":23},"end":{"row":72,"column":24},"action":"insert","lines":["o"],"id":48}],[{"start":{"row":72,"column":24},"end":{"row":72,"column":25},"action":"insert","lines":["a"],"id":49}],[{"start":{"row":72,"column":25},"end":{"row":72,"column":26},"action":"insert","lines":["d"],"id":50}],[{"start":{"row":72,"column":26},"end":{"row":72,"column":27},"action":"insert","lines":["_"],"id":51}],[{"start":{"row":7,"column":38},"end":{"row":7,"column":39},"action":"insert","lines":["l"],"id":52}],[{"start":{"row":7,"column":39},"end":{"row":7,"column":40},"action":"insert","lines":["o"],"id":53}],[{"start":{"row":7,"column":40},"end":{"row":7,"column":41},"action":"insert","lines":["a"],"id":54}],[{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"insert","lines":["d"],"id":55}],[{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"insert","lines":["_"],"id":56}],[{"start":{"row":72,"column":21},"end":{"row":72,"column":22},"action":"insert","lines":["s"],"id":57}],[{"start":{"row":72,"column":22},"end":{"row":72,"column":23},"action":"insert","lines":["c"],"id":58}],[{"start":{"row":72,"column":23},"end":{"row":72,"column":24},"action":"insert","lines":["r"],"id":59}],[{"start":{"row":72,"column":24},"end":{"row":72,"column":25},"action":"insert","lines":["i"],"id":60}],[{"start":{"row":72,"column":25},"end":{"row":72,"column":26},"action":"insert","lines":["p"],"id":61}],[{"start":{"row":72,"column":26},"end":{"row":72,"column":27},"action":"insert","lines":["t"],"id":62}],[{"start":{"row":72,"column":27},"end":{"row":72,"column":28},"action":"insert","lines":["s"],"id":63}],[{"start":{"row":72,"column":21},"end":{"row":72,"column":22},"action":"insert","lines":["/"],"id":64}]]},"ace":{"folds":[],"scrolltop":600,"scrollleft":0,"selection":{"start":{"row":66,"column":8},"end":{"row":66,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":24,"state":"css-ruleset","mode":"ace/mode/php"}},"timestamp":1506301257896,"hash":"17cc3f50cfaa050c206cef8a8f035f6361db94c5"}