<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="/css/Connection.css" type="text/css" />
    <script type="text/javascript" src="/js/Connection.js?var=<?=filemtime('./js/Connection.js');?>"></script>
    <script type="text/javascript">
      function Return() {
        var content = confirm("");
        if(content == true){
          location.href = "/Recommend/user";
        }
      };
    </script>
    
    <script type="text/javascript">
        function move_box(an, box) {
    //링크된 위치에서 부터의 설정값 지정
     var cleft = 120;  //왼쪽마진
     var ctop = -10;  //상단마진
     var obj = an;
         while (obj.offsetParent) {
      cleft += obj.offsetLeft;
      ctop += obj.offsetTop;
      obj = obj.offsetParent;
    }
     box.style.left = cleft + 'px';
     ctop += an.offsetHeight + 8;
     if (document.body.currentStyle &&
       document.body.currentStyle['marginTop']) {
       ctop += parseInt(
       document.body.currentStyle['marginTop']);
    }
     box.style.top = ctop + 'px';
}

function show_hide_box(an, width, height, borderStyle) {
  var href = an.href;
  var boxdiv = document.getElementById(href);

  if (boxdiv != null) {
    if (boxdiv.style.display=='none') {
      move_box(an, boxdiv);
      boxdiv.style.display='block';
    } else
      boxdiv.style.display='none';
    return false;
  }

  boxdiv = document.createElement('div');
  boxdiv.setAttribute('id', href);
  boxdiv.style.display = 'block';
  boxdiv.style.position = 'absolute';
  boxdiv.style.width = width + 'px';
  boxdiv.style.height = height + 'px';
  boxdiv.style.border = borderStyle;
  boxdiv.style.backgroundColor = '#fff';

  var contents = document.createElement('p');
  contents.innerHTML = "<a href='/Recommend/user'><p>연주곡 보기</p></a>";
  contents.innerHTML +="<p>쪽지 보내기</p>";
  contents.innerHTML +="<p>차단하기</p>";
  contents.setAttribute("id", "Launch");
  boxdiv.appendChild(contents);
  document.body.appendChild(boxdiv);
  move_box(an, boxdiv);

  return false;
}
    </script>
    

    <style>
      #moreMenu{
        border: 4px outset;
        width:130px; height:130px;
      }
      #p_list{
        margin-left: 25px;
      }
      #moreMenu{
        display: none;
      }
        #Launch{
            margin-left: 36px;
      }
    </style>
</head>
<body>
  @include('menu.topmenu')
  <div id="div1">

    <p id="maintext">Admain님이 자주 연주하는 음악의 장르는 '발라드' 이며 자주 연주하는 악기는 '기타'입니다.</p>
    <div id="div2"></div>
    <div id="div5">
    <p id="text">Admain님과 취향이 맞는 음원</p>
		   <select id="sel">
			   <option id="sel1">노래별</option>
			   <option id="sel2">가수별 </option>
		   </select>
    </div>
    <div id="div3">
      <p>허각 - 하늘을 달리다</p>
      <p>김범수 - 제발</p>
      <p>김흥국 - 호랑나비</p>
    </div>

    <div id="div4">
      <p>매일 아침 새롭게 </p>
      <p>자유롭게 !</p>
      <p>소녀시대의 다시만단세계</p>
    </div>
      <p>Admain님과 취향이 맞는 합주자</p>
    <div id="div6">
      <p onClick="return show_hide_box(this,170,140,'4px outset')">주성민(주요 악기: 드럼)</p>
      <p onClick="return show_hide_box(this,170,140,'4px outset')">김진영(주요 악기: 피아노)</p>
      <p onClick="return show_hide_box(this,170,140,'4px outset')">조나훔(주요 악기: 기타)</p>
    </div>
    
    <button id="Redo" type="button" onclick="Return();">재매칭</button>
  </div>
</body>
</html>