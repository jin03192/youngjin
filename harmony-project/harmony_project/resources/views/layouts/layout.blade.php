<!Doctype html>
<html lang="ko">
<header>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Harmony</title>
    <script src="/js/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
    <!--      rel="stylesheet">-->
    <link href=""
          rel="stylesheet">
    {{--jquery: src='/js/s~.js'--}}
    
    <!--
    |**************************************************************************
    | http -> https 전환
    |**************************************************************************
    -->
    <script type="text/javascript">
    if (document.location.protocol == 'http:') {
    document.location.href = document.location.href.replace('http:', 'https:');
    }
    </script>


</header>
<body>

<div class="container">
    @yield('content')
    
</div>

</body>
</html>