<style>
    input[type=text] {
        width: 800px;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
    }
    
    input[type=text]:focus {
        border: 3px solid #555;
    }
    html, body{
        width:100%;
    }
    p[name=master]{
        font-size:30px;
    }
    #annai{
        margin-bottom:100px;
    }
    .forms{
        font-size:20px;
        border:1px solid black;
        width:80%;
        margin:0px auto;
        padding:50px;
    }
    .forms p:first-child	{
        color:red;
    }
    .guildform{
        width:100%;
    }
</style>

</head>
<body>
<!--
|**************************************************************************
| 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
|**************************************************************************
-->

<form class="guildform" action="/create" method="post" enctype="multipart/form-data">
    
    <p name="master">길드 창설자 : <?php echo $masterid[0]->user_id; ?>님</p>
    <p id="annai">창설을 위해 아래를 작성해주세요.</p>
    
    <div class="forms">
        길드명 : <input type="text" name="guild_name"/><br/>
        길드마크 : <input type="file" name="mark"/><br/>
        <p>※주의사항※</p>
        <p >
        길드 창설은 합주곡 100곡 이상의 유저만 가능합니다.
        창설 후 1주일간은 길드를 해지할 수 없습니다. 
        해지 시 길드정보는 3일간 보관되며 
        이 기간이 지나면 복구가 불가능합니다.
        </p>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="길드창설"/>
</form>
</div>