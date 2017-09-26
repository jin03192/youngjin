<meta name="csrf_token" content="{{ csrf_token() }}"/>
<head>
   <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/load_style.css">
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style>
    body{
        background:url("/img/wood.png");
    }
    .upload{
        position:absolute;
        right:120px;
        top:500px;
    }
    .upload input{
        width:100px;
        height:110px;
        border-radius:50px;
        background:url("/img/prev.png");
        background-size:100px;
        border:none;
    }
    .parpbg{
        background:url("/img/parp.png");
        height:700px;
        width:800px;
        margin-left:50px;
    }
    #artCanvas{
        z-index:1;
        position: absolute; 
        overflow-x:hidden; 
    }
    ::-webkit-scrollbar {
        display:none;
    } 
</style>
<div class="">
    @include('menu.topmenu')
</div>

 <form action="" name="uploadForm" method="post" >
        <input type="hidden" name="work_mode" value="modi"/>
        <input type="hidden" name="mode" value="modi"/>
            <input name = file_name type = hidden value="{{$file['file_name']}}"/>
            <input name = selected_insts type = hidden value="{{$file['selected_insts']}}"/>
            <input name = selected_particis type = hidden value="{{$file['selected_particis']}}"/>
            <input name = midi_id type = hidden value="{{$file['midi_id']}}"/>
            <input name = band_board_id type = hidden value="{{$file['band_board_id']}}"/>
            
                
        </form>
        
        
       <div id="container">
        <div class="stick"></div>
        <div class="stick"></div>
        <div class="stick"></div>
        <div class="stick"></div>
        <div class="stick"></div>
        <div class="stick"></div>
        
        <h1>Music Note Printing...</h1>
        
        </div>

        
        <script src="/scripts/load_index.js"></script>
        
        
<script>

    var file_name = document.getElementsByName("file_name");
    var instruments = document.getElementsByName("selected_insts");
    var selected_particis = document.getElementsByName("selected_particis");
    var midi_id = document.getElementsByName("midi_id");
    var band_board_id = document.getElementsByName("band_board_id");

setTimeout('ad()', 5000);

    function ad(){
        
        post_to_url('/gakuhu_modi',{
            "_token":  $('meta[name="csrf-token"]').attr('content'),
            'file_name' : file_name[0].value,
            'selected_insts':instruments[0].value,
            'selected_particis':selected_particis[0].value,
            'midi_id':midi_id[0].value,
            'band_board_id':band_board_id[0].value,
        });
        
    }
    
    function post_to_url(path, params) {

        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", path);
        
        for(var key in params) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);
            form.appendChild(hiddenField);
        }
    
        document.body.appendChild(form);
        form.submit();
    }
</script>