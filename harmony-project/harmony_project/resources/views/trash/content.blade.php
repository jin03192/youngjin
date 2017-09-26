@yield('slide')
<link rel="stylesheet" href="/dist/jquery.flipster.min.css?var<?=filemtime('./dist/jquery.flipster.min.css');?>">
<script src="/js/jquery.min.js?var=<?=filemtime('./js/jquery.min.js');?>"></script>
<script src="/js/jquery.flipster.min.js?var=<?=filemtime('./js/jquery.flipster.min.js');?>"></script>

<div class="flat-img">
    <!-- <article id="demo-flat" class="demo"> -->

        <div id="image_list_1">
        <div id="flat">
            <ul>
                <li data-flip-title="Red">
                    <img src="img/ali.jpg" width="300" height="300">
                </li>
                <li data-flip-title="Razzmatazz" data-flip-category="Purples">
                    <img src="img/fools.jpg" width="300" height="300">
                 </li>
                <li data-flip-title="Deep Lilac" data-flip-category="Purples">
                    <img src="img/goham.jpg" width="300" height="300">
                </li>
                <li data-flip-title="Daisy Bush" data-flip-category="Purples">
                    <img src="img/gpark.jpg" width="300" height="300">
                </li>
                <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                    <img src="img/yuhang.jpg" width="300" height="300">
                </li>
                <li data-flip-title="Dodger Blue" data-flip-category="Blues">
                    <img src="img/radwimps.jpg" width="300" height="300">
                </li>
                <li data-flip-title="Cyan" data-flip-category="Blues">
                    <img src="img/rookie.jpg" width="300" height="300">
                </li>
                <li data-flip-title="Robin's Egg" data-flip-category="Blues">
                    <img src="img/sane.jpg" width="300" height="300">
                </li>
                <li data-flip-title="Deep Sea" data-flip-category="Greens">
                    <img src="img/vixx.jpg" width="300" height="300">
                </li>
                <li data-flip-title="Apple" data-flip-category="Greens">
                    <img src="img/why.jpg" width="300" height="300">
                </li>
            </ul>
        </div>
      </div>

    <script>
        var flat = $("#flat").flipster({
            style: 'flat',
            spacing: -0.25
        });
        //
        // $(function(){
        //   //첫번째 배너
        //   $( "#image_list_1" ).jQBanner( {//롤링을 할 영역의 ID 값
        //   nWidth: 600,				//영역의 width
        //   nHeight: 150,				//영역의 height
        //   nCount: 10,					//돌아갈 이미지 개수
        //   isActType: "left",	//움직일 방향 (left, right, up, down)
        //   nOrderNo: 1,				//초기 이미지
        //   nDelay: 2000				//롤링 시간 타임 (1000 = 1초)
        //   });
        // });
    </script>
    <!-- </article> -->
    </div>
