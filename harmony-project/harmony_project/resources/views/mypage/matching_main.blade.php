
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/earlyaccess/hanna.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
      @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    .button1 {
      	display: inline-block;
      	outline: none;
      	cursor: pointer;
      	text-align: center;
      	text-decoration: none;
      	font: 20px/100% Arial, Helvetica, sans-serif;
      	padding: 1px 163px 1px;
      	text-shadow: 0 1px 1px rgba(0,0,0,.3);
      	-webkit-border-radius: .5em; 
      	-moz-border-radius: .5em;
      	border-radius: .5em;
      	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
      	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
      	box-shadow: 0 1px 2px rgba(0,0,0,.2);
    }
    .button1:hover {
    	text-decoration: none;
    }
    .button1:active {
    	position: relative;
    	top: 1px;
    }
    
    
    
    .button2 {
      	display: inline-block;
      	outline: none;
      	cursor: pointer;
      	text-align: center;
      	text-decoration: none;
      	font: 20px/100% Arial, Helvetica, sans-serif;
      	padding: 1px 113px 1px;
      	text-shadow: 0 1px 1px rgba(0,0,0,.3);
      	-webkit-border-radius: .5em; 
      	-moz-border-radius: .5em;
      	border-radius: .5em;
      	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
      	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
      	box-shadow: 0 1px 2px rgba(0,0,0,.2);
      	margin-top: 383px;
      	margin-left: 250px;
    }
    .button2:hover {
    	text-decoration: none;
    }
    .button2:active {
    	position: relative;
    	top: 1px;
    }
      /*
    **************************************************************************
    | SVG 위치 및 text 폰트 크기 그리고 밑에 그래프 설명 이미지까지 포함
    |**************************************************************************
    */
      svg {
        position: absolute;
        top: 200px; left: 10px;
      }
      
      .topSlice{
        width:100px; height: 100px;
      }

      svg text.percent{
         fill:white;
         text-anchor:middle;
         font-family: 'Nanum Gothic', serif;
         font-size: 20px;
      }
      
      
      #myImage {
        position: absolute;
        top: 560px; left: 760px;
      }
      
      
      /*
    **************************************************************************
    | revision 버튼 속성 <D3 변경> matching 버튼 속성 <매칭하기>
    |**************************************************************************
    */
      
      
      #revision{
        position: absolute;
        top: 605px; left: 720px;
      }
      
      
      
      /*#matching{*/
      /*  margin-top: 550px;*/
      /*  margin-left: 330px;*/
      /*  font-family: 'Nanum Gothic', serif;*/
      /*  font-size: 20px;*/
      /*  width: 650px;*/
      /*}*/
      
      
      button{
        cursor:pointer;
        font-family: 'Nanum Gothic', serif;
        font-size: 20px;
      }
      
      /*
    **************************************************************************
    | lately 가장 최근 연주했던 작품 리스트 이미지
    |**************************************************************************
    */
      
      #lately{
        width: 80px; height: 80px;
        margin-left: 20px;
        margin-top: 10px;
      }
      
      
      /*
    **************************************************************************
    | center0 ~ 2 가장 최근 연주했던 작품 리스트 글자
    |**************************************************************************
    */
      
      
      #center0{
        position: absolute;
        top: 600px; left: 40px;
      }
      #center1{
        position: absolute;
        top: 600px; left: 310px;
      }
      #center2{
        position: absolute;
        top: 600px; left: 475px;
      }
      
       /*
    **************************************************************************
    | #main div:after 개인 프로필 전체 div
    |**************************************************************************
    */


    #main div:after{
        position: absolute;
        top:0; left:0;
        background-image: url("/img/q2.jpg");
        background-repeat:no-repeat;
        background-size: 610px 290px;
        opacity:0.5!important;
        filter:alpha(opacity=50);
        z-index:-1;
        content:"";
        border-top:none;
        border-left:1px solid #7FC7AF;
        border-right:1px solid #7FC7AF;
        border-bottom:1px solid #7FC7AF;
        width:368px;
        height:383px;
    }
      
      
      /*
    **************************************************************************
    | Group 유저 이미지와 글자
    |**************************************************************************
    */
    
    
    #Group{
        position:absolute;
        top: 225px; left: 210px;
        font-family: 'Nanum Gothic', serif;
        font-size: 20px;
    }
    
      
      /*
    **************************************************************************
    | userimg 유저 이미지와 글자 묶음 태그
    |**************************************************************************
    */
      
      #userimg{
        padding: 105px 5px 5px 135px;
        position:relative;
        z-index:1;
    }
    
      
    /*
    **************************************************************************
    | listuser 유저 개인프로필
    |**************************************************************************
    */  
    
    
    #listuser{
         background-color: rgba( 255, 255, 255, 0.5 );
         padding: 0px 5px 5px 30px;
         margin-top: 20px;
         margin-left: -134px;
         margin-right: 292px;
         font-family: 'Nanum Gothic', serif;
         font-size: 10px;
         width:440px;
    }
    
    
    /*
    **************************************************************************
    | Album의 버튼
    |**************************************************************************
    */  
    
    
    #Album{
        border-radius: 20px;
        margin-left: 150px;
        margin-top: -25px;
        margin-bottom: 5px;
        padding:1px;
        text-align: center;
        border: 1px solid #BAC8D1;
        width: 150px;
        font-family: 'Nanum Gothic', serif;
        font-size: 13px;
    }
    
    
    
    
    #imgs{
        margin-left: 45.5px;
        margin-bottom: 0px;
    }
    #imgs img{
        margin-right: 20px;
        margin-bottom: 0px;
    }
    
    
    /*
    **************************************************************************
    | circle 둥그런 원 프로필 사진
    |**************************************************************************
    */  
    
    
    #circle{
        width:150px;
        height:150px;
        border-radius:75px;
        margin-top: -70px;
        margin-left: -27px;
    }
    
    
    /*
    **************************************************************************
    | name 개인사용자 유저 프로필
    |**************************************************************************
    */  
    
    #name{
        font-family: 'Nanum Gothic', serif;
        font-size: 20px;
        margin-top: 5px;
        margin-bottom: -10px;
        margin-left: 10px;
    }
    #username{
      margin: 14px 0px 0px 250px;
      width: 368px; height: 60px;
      font-size: 18px;
      text-align: center;
      font-family: 'Nanum Gothic', serif;
    }
    #userGraph{
      margin: -60px 0px 0px 732px;
      width: 368px; height: 60px;
      font-size: 18px;
      text-align: center;
      font-family: 'Nanum Gothic', serif;
    }
    

#footer{
      margin-bottom : 2%;
      
    }
    
    #footer_text{
      font-family: 'Nanum Gothic', serif;
      font-size: 10px;
      
    }

    </style>
<!--<script src="/js/d3.v3.min.js"></script>-->
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="/js/Dount3D.js"></script>

</head>
<body>
  <header class="navbar navbar-inverse">
    @include('menu.topmenu')
  </header>
  
  <script>
  var instrumentsData=[
     {label:"Basic", value:"<?php echo $instruments["ピアノ"] ?>" ,color:"#3366CC"},
     {label:"Plus", value:"<?php echo $instruments["ドラム"] ?>", color:"#DC3912"},
     {label:"Lite", value:"<?php echo $instruments["ギター"] ?>", color:"#FF9900"},
     {label:"Elite", value:"<?php echo $instruments["シンセサイザー"] ?>", color:"#109618"}
     // {label:"Delux", color:"#990099"}
  ];

  var genresData=[
     {label:"Basic", value:"<?php echo $genres["POP"] ?>", color:"#3366CC"},
     {label:"Plus", value:"<?php echo $genres["DANCE"] ?>", color:"#DC3912"},
     {label:"Lite", value:"<?php echo $genres["CLASSIC"] ?>", color:"#FF9900"},
     {label:"Elite", value:"<?php echo $genres["ROCK"] ?>", color:"#109618"}
     // {label:"Delux", color:"#990099"}
  ];


  var svg = d3.select("body").append("svg").attr("width",1200).attr("height",350);


  var mangkiroze = 1;
  svg.append("g").attr("id","salesDonut");
  // svg.append("g").attr("id","quotesDonut");

  // width 1050, height 150, 먼저 장르데이터 시각화
  Donut3D.draw("salesDonut", genreData(), 900, 200, 150, 150, 0, 0.4);
  // Donut3D.draw("quotesDonut", genreData(), 450, 150, 130, 100, 30, 0);

  //
  function changeData(){
    if(mangkiroze % 2 == 1){

    Donut3D.transition("salesDonut", instrumentData(), 150, 150, 0, 0.4);
    document.getElementById('myImage').src='/d3Images/instrument.png';
    }else{

    Donut3D.transition("salesDonut", genreData(), 150, 150, 0, 0.4);
    document.getElementById('myImage').src='/d3Images/genre2.png';
    }
    this.mangkiroze++;
  }

  function instrumentData(){
     return instrumentsData.map(function(d){
          return {label:d.label, value:d.value, color:d.color};});
  }
  function genreData(){
     return genresData.map(function(d){
             return {label:d.label, value:d.value, color:d.color};});
  }
  </script>

  <div id="username" class="well">ユーザプロフィル</div>
  <div id="userGraph" class="well">ユーザ分析グラフ</div>
  <div id="Group">
    <div id="main">
        <ul>
            <div id="userimg">
                <img src="/img/<?php echo $userImage; ?>" id="circle">
                <p id="name"><?php echo $user_id ?></p>
                <p id="listuser">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $countInstrument ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $genres[$textGenres] ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $instruments[$textInstruments] ?><br>
                &emsp;&emsp;&emsp;&emsp;&emsp;演奏した曲水&emsp;&emsp;&emsp;<?php echo $textGenres; ?>&emsp;&emsp;&emsp;&emsp; <?php echo $textInstruments; ?>
                </p>
            </div>
        </ul>
    </div>
    <div id="Album">
        Album
    </div>
    <div id="imgs">
      <?php
        if(count($subjectList) < 3){
            $i = 0;
        for($count = 0; $count < count($subjectList); $count++){
           echo "<img id='lately' src ='/midi/{$subjectList[$count]->path}/{$subjectList[$count]->img}'>";
            // echo "<div id='center$i'>".$subjectList[$count]->subject."</div>";
      $i++;
    }
  }else{
    $i = 0;
    for($count = count($subjectList)-1; $count >= count($subjectList)-3; $count--){
      echo "<img id='lately' src ='/midi/{$subjectList[$count]->path}/{$subjectList[$count]->img}'>";
      // echo "<div id='center$i'>".$subjectList[$count]->subject."</div>";
      $i++;
    }
  }
  ?>
    </div>
</div>


  
  <img id="myImage" src="/d3Images/genre2.png" style="width:300px">
  <div id="revision"><button onClick="changeData()" class="button1">変更</button></div>
  <!-- <a href="/">통계 더 보기</a> -->
  <button onClick="location.href='/matching/result';" class="button2">マッチングする</button>
  </div>
  <p id = 'footer'>
  <pre id = 'footer_text'>
      <img src = "/img/logo2.png" width="60" height="30" align="left">                                                                                                                                                                                                                                               김대호 교수님(PM), 조나훔(조장), 박현경, 장민호, 김진영, 김혜진, 주성민
                                                                                                                                                                                                                                                     Copyright&copy; 2017 YoungjinCollege Harmony Team All rights reserved</pre>
                                                                                  
</p>
</body>
</html>