<style type="text/css">
    /* *은 전체 선택자 입니다. */ 
    *, *:after, *:before { 
        /* padding이나 border-width로 인해 전체 사이즈에 영향을 받지 않도록 선언해 줍니다. */ 
        box-sizing: border-box; 
    } 
    /* 라이언과 잘 어울리는 색상을 배경으로 넣었습니다. */ 
    body {
        background: #313654;
    } 
    /* 전체 영역을 잡아주었습니다. */ 
    
    .ryan { 
        position: relative; 
        /* 라이언 기준점 잡기 */ 
        margin: 50px auto; 
        /* 상하 50px 여백을 주고 좌우는 중앙 정렬 */
        width: 400px; 
        /* 라이언 가로 폭 */ 
        height: 380px; 
        /* 라이언 세로 폭 */ 
        
    } 
    
    .ryan:hover .eyebrow.left {
      top: 100px;
    }
    
    .ryan:hover .eyebrow.right {
      -webkit-transform: rotate(-10deg);
      transform: rotate(-10deg);
    }
    
    .ryan:hover .eye.right {
      -webkit-transform: scale(2, 0.1);
      transform: scale(2, 0.1);
    }
    
    .ryan .ear {
      position: absolute;
      top: 0;
      width: 92px;
      height: 92px;
      border: 10px solid #000;
      border-radius: 100%;
      background: #d59729;
    }
    
    .ryan .ear.left {
      left: 54px;
    }
    
    /* 다중 클래스를 이용할 때는 클래스 명 사이에 공백 없이 적어주는 것 잊지마세요! */ 
    .ryan .ear.right {
      right: 54px;
    }
    
    /* 전체 영역에서 밑에 딱 붙은 얼굴(원)를 그립니다. */ 
    .ryan .face { 
        position: absolute; 
        /* .ryan에 position: relative를 주었으므로 그 영역을 기준으로 잡습니다. */ 
        bottom: 0; 
        /* 바닥에서 0px 떨어진 곳 = 맨 아래 위치 | 0은 굳이 단위(px)를 적지 않아도 됩니다. */ 
        width: 400px; 
        height: 367px; 
        border-radius: 100%; 
        /* 원형으로 만들기 */ 
        border: 10px solid #000; 
        /* 검정색 테두리 10px */
        background: #d59729; 
        /* 라이언 얼굴 색 */ 
            
    }

    
    .ryan .eyebrow {
      position: absolute;
      top: 106px;
      width: 78px;
      height: 14px;
      border-radius: 14px;
      background: #000;
      transition: all 0.2s;
    }
    
    .ryan .eyebrow.left {
      left: 68px;
    }
    
    .ryan .eyebrow.right {
      right: 68px;
    }
    
    .ryan .eye {
      position: absolute;
      top: 147px;
      width: 26px;
      height: 26px;
      border-radius: 100%;
      background: #000;
      transition: all 0.2s;
    }
    
    .ryan .eye.left {
      left: 98px;
    }
    
    .ryan .eye.right {
      right: 98px;
    }
    
    .ryan .nose {
      position: absolute;
      top: 184px;
      left: 50%;
      margin-left: -16px;
      width: 32px;
      height: 33px;
      border-radius: 80% 80% 100% 100%;
      background: #000;
      z-index: 2;
    }
    
    .ryan .mouth {
      position: absolute;
      top: 191px;
      right: 73px;
      width: 73px;
      height: 68px;
      border: 10px solid #000;
      border-radius: 50%;
      background: #fff;
    }
    .ryan .mouth.left {
      left: 127px;
    }
    
    .ryan .mouth.right {
      right: 127px;
    }
    
    .ryan .mouth:before {
      content: "";
      position: absolute;
      width: 30px;
      height: 33px;
      background: #fff;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      z-index: 1;
    }
    
    .ryan .mouth.left:before {
      top: 2px;
      left: 29px;
    }
    
    .ryan .mouth.right:before {
      top: 2px;
      right: 31px;
    }
</style>

<div class="ryan">  
  <div class="ear left"></div>
  <div class="ear right"></div>
  
  <div class="face">
    <div class="eyebrow left"></div>
    <div class="eyebrow right"></div>
    <div class="eye left"></div>
    <div class="eye right"></div>
    <div class="nose"></div>
    <div class="mouth left"></div>
    <div class="mouth right"></div>
  </div>
</div>