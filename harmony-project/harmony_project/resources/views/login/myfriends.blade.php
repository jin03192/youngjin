<meta name="csrf_token" content="{{ csrf_token() }}"/>

<style type="text/css">
        /*
        |**************************************************************************
        | guild main page member style
        |**************************************************************************
        */
        .align{
          width:1500px;
        }
        div.frsearch > table{
          width: 100%;
          text-align: center;
          border:1px solid black;
        }
        .agreetable th {
            background-color: lightseagreen;
            color: white;
            text-align: center;
            
        }
        .agreetable tr:hover {background-color: #f5f5f5}
        .agreetable td {
            border-bottom: 1px solid lightsteelblue;
        }
        .user_view{
          width:100%;
          margin:50px auto;
          text-align:center;
        }
        .user_view<img{
          width:200px;
          height:200px;
        }
        #friendform{
          width:500px;
          height:150px;
          font-size: 20px; /* Increase font-size */
          text-align:center;
          margin:0px auto;
        }
        .frsearch{
          width:100%;
          margin:0px auto;
          border:1px solid  #ddd;
          text-align:center;
        }
        .userinfo{
          width:40%;
          float:left;
          margin-left:50px;
        }
        .friendlist{
          border:1px solid black;
          margin:100px;
          width:40%;
          float:left;
        }
        .viewfriend{
          width:100%;
        }
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

</script>
<body>
  <div class="top">
    @include('menu.topmenu')
  </div>
  <div class="align">
    <div class="userinfo">
      
      <div class="user_view">
        <img src='../img/<?php echo $myid[0]->userImage; ?>' style="width:300px;"></img><br/>
        
        <h2><strong><?php echo $myid[0]->user_id; ?></strong> 님 어서오세요!</h2>
        <form class='' action='/logoutAction' method='post'>
        <input type="hidden" id="token" value="{{ csrf_token() }}">
        <input type='submit' value=로그아웃>
        {{csrf_field()}}
        </form>
      </div>
      <div class="frsearch">
        <form id="friendform" action="/myfriends" method="post" >
        친구검색 : 
        <input type="text" id="friendsearch">
        <input type="button" value="친구찾기" id="search">
        {{csrf_field()}}
        </form>
        <table class="agreetable">
              <tr>
              <th>닉네임</th>
              <th>이미지</th>
              <th>길드</th>
              <th>email</th>
              <th>신청수락</th>
              </tr>
              <?php 
              $k = 0;
              foreach($friends as $friend){
                
                echo "
                <tr>
                  <td>{$friend[0]->user_id}</td>
                  <td><img src='/img/{$friend[0]->userImage}' style='width:100;height:100;'></td>
                  <td>{$friend[0]->guild_name}</td>
                  <td>{$friend[0]->email}</td>
                  <td>
                  <form id='agree' action='/myfriends' method='post' name='SearchBar'>
                  
                  <input type='hidden' name='friendagree[]' value='{$friend[0]->id}'>
                  <input type='button' value='수락' onclick='agreeok($k);'>
                  <input type='button' value='거절' name='agreeno'>
                </tr>
                ";
                 $k++;
              }
              ?>
              <input type='hidden' name='_token' value='{{ csrf_token() }}'>
            </form>
          </table>
        </div>
    </div>
    <?php 
    if(!empty($friendlists->user_id)){
    
    ?>
    <div class="friendlist">
      <table class="viewfriend">
          <tr>
          <th>닉네임</th>
          <th>이미지</th>
          <th>길드</th>
          <th>email</th>
          </tr>
          <?php 
          foreach($friendlists as $friendlist){
            
            echo "
            <tr>
              <td>{$friendlist[0]->user_id}</td>
              <td><img src='/img/{$friendlist[0]->userImage}' style='width:100;height:100;'></td>
              <td>{$friendlist[0]->guild_name}</td>
              <td>{$friendlist[0]->email}</td>
              <td>
            </tr>
            ";
          }
          ?>
      </table>
  </div>
  <?php
    }
    ?>
  </div>
  
</body>
<script>
var searchfriends = document.getElementsByName("friendagree[]");
function agreeok(id){
		$.ajax({
			type : "post",
			url : "json/agree",
		  datatype : "json",
			data : {
			  '_token' : "{{csrf_token()}}",
				// agree : $("input[id=agreeok]").attr("name")
				agree : searchfriends[id].value,
			},
			success : function(data) {
			  
			  
				$(".viewfriends").html("<tr><th>닉네임</th><th>이미지</th><th>길드</th><th>email</th></tr>");
                    
        var show = "";
        
        $.each(data,function(index, item){
            alert(data);
            
            show += "<tr><td>"+(index+1)+"</td>";
            show += "<td>"+item.name+"</td>";
            show += "<td>"+item.age+"</td>";
            show += "<td>"+item.loc+"</td></tr>";
            
            
        });
        
        $("table").append(show);
			}
			/*
			complete : function(data) {// 응답이 종료되면 실행, 잘 사용하지않는다
				console.log(data);
			},
			error : function(xhr, status, error) {
				alert("ERROR!!!");
			}*/
		});
		
  }
  
$(function(){
  $("#search").click(function(){
    var mywin = $('#friendsearch').val();
    window.open('search/'+mywin,'친구찾기','width=1000,height=700');
  });
  
});

</script>