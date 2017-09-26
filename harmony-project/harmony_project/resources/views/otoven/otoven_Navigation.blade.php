  <!-- 사이드메뉴 관련 css 및 js -->
  <link href="/css/otoven_sidemenu/demo.css?var=<?=filemtime('./css/otoven_sidemenu/demo.css');?>" rel="stylesheet" type="text/css" />
  <link href="/css/otoven_sidemenu/boxymenu.css?var=<?=filemtime('./css/otoven_sidemenu/boxymenu.css');?>" rel="stylesheet" type="text/css" />
  <script src="/js/otoven_sidemenu/jquery.min.js?var=<?=filemtime('./js/otoven_sidemenu/jquery.min.js');?>" type="text/javascript"></script>
  <script src="/js/otoven_sidemenu/boxymenu.js?var=<?=filemtime('./js/otoven_sidemenu/boxymenu.js');?>" type="text/javascript"></script>
  <!-- -------------------------------------------------------------- -->
  
  <!--좌측 사이드메뉴 시작-->
 <div id="menu-wrapper">
        <ul class="boxy-menu">
            <li>
                <a href="{{ url('/otoven/record_before') }}" style="text-decoration:none">
                <div class="boxy-menu-item-top">
                    Record 합주를 기다려요
                </div>
                <div class="boxy-menu-item-bottom">
                    <ul class="items">
                        <p>Solo Mode</p>
                        <p>오디오 인터페이스 or 마이킹을 통한 녹음작곡</p>
                    </ul>
                </div>
                </a>
            </li>


            <li>
                <a href="{{ url('/otoven/record_collaborate_after') }}" style="text-decoration:none">
                <div class="boxy-menu-item-top">
                    Record 합주를 했어요
                </div>
                <div class="boxy-menu-item-bottom">
                    <ul class="items">
                        <p>Multi Mode</p>
                        <p>다른사람의 작곡녹음 게시물을 보고, 직접 작곡에 참여할 수 있습니다.</p>
                    </ul>
                </div>
                </a>
            </li>
            
            <li>
                <a href="{{ url('/otoven_video_collaborate_wait') }}" style="text-decoration:none">
                <div class="boxy-menu-item-top">
                    Video 합주를 기다려요
                </div>
                <div class="boxy-menu-item-bottom">
                    <ul class="items">
                        <p>Solo Mode</p>
                        <p>오디오 인터페이스 or Cam을 통한 녹화작곡</p>
                    </ul>
                </div>
                </a>
            </
            li>
            
            <li>
                <a href="{{ url('/otoven_video_collaborate_complete') }}" style="text-decoration:none">
                <div class="boxy-menu-item-top">
                    Video 합주를 했어요
                </div>
                <div class="boxy-menu-item-bottom">
                    <ul class="items">
                        <p>Multi Mode</p>
                        <p>다른사람의 작곡녹화 게시물을 보고, 직접 작곡에 참여할 수 있습니다.</p>
                    </ul>
                </div>
                </a>
            </li>
        </ul>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#menu-wrapper').boxymenu();
        });
    </script>
    
    <!--좌측 사이드메뉴 끝-->