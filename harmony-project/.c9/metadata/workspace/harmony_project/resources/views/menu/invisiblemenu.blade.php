{"filter":false,"title":"invisiblemenu.blade.php","tooltip":"/harmony_project/resources/views/menu/invisiblemenu.blade.php","undoManager":{"mark":9,"position":9,"stack":[[{"start":{"row":128,"column":31},"end":{"row":129,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":129,"column":0},"end":{"row":129,"column":6},"action":"insert","lines":["      "]}],[{"start":{"row":127,"column":12},"end":{"row":129,"column":6},"action":"insert","lines":["","      ","      "],"id":3,"ignore":true}],[{"start":{"row":129,"column":6},"end":{"row":199,"column":11},"action":"insert","lines":["<input type=\"hidden\" name=\"session_user\" value=\"{{Session::get('user_id')}}\"/>","  <div name=\"notice\" style=\"display:none; position:fixed; bottom:0; right:0; height: 80px; width: 300px; border:5px solid black; z-index:1; overflow-x:hidden;\">","    ","  </div>","      <audio name='my_news' style='display:none;' src='https://harmony-project-chonahoom.c9users.io/news.mp3' controls>","      </audio>","  <script>","    var my_news = document.getElementsByName(\"my_news\");","    var tnum =[];","    var notice = document.getElementsByName('notice');","    var session_user = document.getElementsByName('session_user');","    notice[0].style.display = 'none';","   ","    if(session_user[0].value){","      notice_update();","    }","     ","    function notice_update(){","      var user_name = session_user[0].value;","      var notice_table = document.createElement('table');","      notice_table.setAttribute('style','border:1px solid black;');","      var notice_tr = document.createElement('tr');","      var notice_td = document.createElement('td');","    ","      notice_td.setAttribute('style','height:80px;width:300px;');","      ","     ","      $.ajax({","        url: \"/noticeTest/\"+user_name,","        type: \"get\",","        processData: false,","        contentType: false,","        data: '',","        ","        success:function(data){","           var ss = '';","          if(data == 4){","            return ;","          }","          ","          tnum = data.split(',');","          var tn = ''+tnum[0];","          var tp = ''+tnum[1];","          ss = tp.replace('/','');","          var name = tn.substring(2, (tn.length-1));","          var path = ss.substring(1, (ss.length-2));","         my_news[0].play();","          notice_td.innerHTML = \"<a href='https://harmony-project-chonahoom.c9users.io/\"+path+\"'>\"+name+\" 様があなたの作品と合奏しました。</a>\";","          notice_td.style.background =\"white\";","          notice_tr.appendChild(notice_td);","          notice_table.appendChild(notice_tr);","          notice[0].removeChild(notice[0].firstChild);","          notice[0].appendChild(notice_table);","         ","            notice[0].style.display = 'block';","            ","            setTimeout(function (){","              notice[0].style.display = 'none';","            }, 100000);","","        },","        error: function (){","          ","        }","    });","      ","      ","      setTimeout(\"notice_update();\", 1000);","    }","    ","  </script>"],"id":4,"ignore":true}],[{"start":{"row":128,"column":6},"end":{"row":135,"column":6},"action":"insert","lines":["","      ","      ","      ","      ","      ","      ","      "],"id":5,"ignore":true}],[{"start":{"row":2,"column":4},"end":{"row":5,"column":2},"action":"insert","lines":["","  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>","  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>","  "],"id":6,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":7,"ignore":true},{"start":{"row":1,"column":84},"end":{"row":2,"column":0},"action":"insert","lines":["",""]},{"start":{"row":4,"column":4},"end":{"row":7,"column":2},"action":"remove","lines":["","  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>","  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>","  "]}],[{"start":{"row":0,"column":0},"end":{"row":3,"column":2},"action":"insert","lines":["","  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>","  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>","  "],"id":8,"ignore":true}],[{"start":{"row":0,"column":0},"end":{"row":7,"column":95},"action":"insert","lines":["<!-- 합쳐지고 최소화된 최신 CSS -->","    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">","    ","    <!-- 부가적인 테마 -->","    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css\">","    ","    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->","    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>"],"id":9}],[{"start":{"row":8,"column":1},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":9,"column":0},"end":{"row":9,"column":1},"action":"insert","lines":[" "]}],[{"start":{"row":0,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":["<!-- 합쳐지고 최소화된 최신 CSS -->","    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">","    ","    <!-- 부가적인 테마 -->","    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css\">","    ","    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->","    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>"," "],"id":12}]]},"ace":{"folds":[],"scrolltop":420,"scrollleft":0,"selection":{"start":{"row":48,"column":6},"end":{"row":50,"column":7},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":40,"state":"css-start","mode":"ace/mode/php"}},"timestamp":1506307129638,"hash":"d880aac06db0b06d026518fc6c5d332dc98967c6"}