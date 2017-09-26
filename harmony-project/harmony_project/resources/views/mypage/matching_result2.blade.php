<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style type="text/css">
    .font{
        font-size:40px;
        text-align:center;
    }
    .matching-content{
        width:1700px;
        height:700px;
        border:4px solid black;
        position:relative;
        left:100px;
    }
    .musician-border{
        position:relative;
        top:20px;
        left:15px;
    }
    .musician{
        width:800px;
        height:400px;
        border:5px solid #7FC7AF;
        position:relative;
        border-radius:30px;
    }
    .musician>img{
        width:150px;
        height:150px;
        border-radius:75px;
        margin-left:90px;
        position:relative;
        top:50px;
        box-shadow: 5px 5px 5px grey;
    }
    p[title="toptitle"]{
        font-size:30px;
        text-align:center;
    }
    p[title="user-musician"]{
        font-size:30px;
        text-align:left;
        display:inline-block;
    }
    p[title="user-instrument"]{
        font-size:30px;
        text-align:left;
        display:inline-block;
    }
    p[title="inst-title1"]{
        font-size:30px;
        text-align:left;
        display:inline-block;
        position:relative;
        left:150px;
        top:20px;
    }
    p[title="inst-title2"]{
        font-size:30px;
        text-align:left;
        display:inline-block;
        position:relative;
        left:350px;
        top:20px;
    }
    p[title="inst-title3"]{
        font-size:30px;
        text-align:left;
        display:inline-block;
        position:relative;
        left:550px;
        top:20px;
    }
    .instrument-border{
        position:absolute;
        float:right;
        top:-10px;
        left:870px;
    }
    .instrument{
        width:800px;
        height:400px;
        border:5px solid #7FC7AF;
        position:absolute;
        border-radius:30px;
    }
    .instrument img{
        width:200px;
        height:200px;
        margin-left:50px;
        position:relative;
        top:50px;
        box-shadow: 5px 5px 5px grey;
    }
    .inst-img1,.inst-img2,.inst-img3{
        list-style-type:none;
    }
    select {
      width: 120px; 
      /* 원하는 너비설정 */ 
      padding: .3em .5em; 
      /* 여백으로 높이 설정 */ 
      font-family: inherit; 
      /* 폰트 상속 */ 
      background: url(https://farm1.staticflickr.com/379/19928272501_4ef877c265_t.jpg) no-repeat 95% 50%; 
      /* 네이티브 화살표 대체 */ 
      border: 1px solid #999; 
      border-radius: 0px; /* iOS 둥근모서리 제거 */ 
      -webkit-appearance: none; /* 네이티브 외형 감추기 */ 
      -moz-appearance: none;
      appearance: none;
    }
    .musicbtn {
        background-color:white;
        width:100px;
        height:100px;
        border: none;
        cursor: pointer;
        position:relative;
        left:30px;
    }
    .musicbtn>img{
        width:150px;
        height:150px;
        border-radius:75px;
        position:relative;
        box-shadow: 5px 5px 5px grey;
    }
    
    .musicdrop {
        position: relative;
        display: inline-block;
        top:50px;
        left:50px;
    }
    img[alt="musician1"]{
        width:100px;
        position:relative;
        top:100px;
    }
    img[alt="musician2"]{
        width:100px;
        position:relative;
        top:100px;
    }
    
    .music-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }
    
    .music-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    
    .music-content a:hover {background-color: #f1f1f1}
    
    .show {display:block;}
</style>
<script>
    $(document).ready(function(){
        $("#musicbtn").click(function(){
            $("#musicdown").toggle();
        });
        $("#musicbtn2").click(function(){
            $("#musicdown2").toggle();
        });
        $("#musicbtn3").click(function(){
            $("#musicdown3").toggle();
        });
    });
</script>
<body>
    @include('menu.topmenu')
  <div class = "font">
      <h2>Matching 결과</h2>
  </div>
  <div class="matching-content">
      <p title="toptitle">haejin 님이 자주 연주하는 음악의 장르는 'CLASSIC' 이며 자주 연주하는 악기는 '피아노'입니다.</p>
    <div class="musician-border">
        <p title="user-musician">haejin님과 취향이 맞는 합주자</p>
        <select id="sel">
            <option id="sel1">pop</option>
            <option id="sel2">rock</option>
            <option id="sel3">classic</option>
            <option id="sel4">dance</option>
        </select>
        <div class="musician">
          
            <!--<img src="/img/JNH.png" alt="user1"></img>-->
          
            <!--<img src="/img/JNH.png" alt="user2"></img>-->
          
            <!--<img src="/img/JNH.png" alt="user3"></img>-->
        <div class="musicdrop">
            <button id="musicbtn" class="musicbtn">
                <img src="/img/JNH.png"></img>
            </button>
            <div id="musicdown" class="music-content">
                <a href="#">합주결과 더보기</a>
            </div>
            <div>
                <img src="/img/gitar.png" alt="musician1"></img>
                <img src="/img/gitar.png" alt="musician2"></img>
            </div>
        </div>
        
        <div class="musicdrop">
            <button id="musicbtn2" class="musicbtn">
                <img src="/img/JNH.png"></img>
            </button>
            <div id="musicdown2" class="music-content">
                <a href="#">합주결과 더보기</a>
            </div>
            <div>
                <img src="/img/gitar.png" alt="musician1"></img>
                <img src="/img/gitar.png" alt="musician2"></img>
            </div>
        </div>
        
        <div class="musicdrop">
            <button id="musicbtn3" class="musicbtn">
                <img src="/img/JNH.png"></img>
            </button>
            <div id="musicdown3" class="music-content">
                <a href="#">합주결과 더보기</a>
            </div>
            <div>
                <img src="/img/gitar.png" alt="musician1"></img>
                <img src="/img/gitar.png" alt="musician2"></img>
            </div>
        </div>
    </div>
    <div class="instrument-border">
        <p title="user-instrument">haejin님과 취향이 맞는 음원</p>
        <select id="sel">
            <option id="sel1">pop</option>
            <option id="sel2">rock</option>
            <option id="sel3">classic</option>
            <option id="sel4">dance</option>
        </select>
        <div class="instrument">
            <img src="/img/ali.jpg" alt="inst1"></img>
              
            <img src="/img/ali.jpg" alt="inst1"></img>
              
            <img src="/img/ali.jpg" alt="inst1"></img>
            <p title="inst-title1">Ali</p>
            <p title="inst-title2">Ali</p>
            <p title="inst-title3">Ali</p>
        </div>
    </div>
  </div>
</body>