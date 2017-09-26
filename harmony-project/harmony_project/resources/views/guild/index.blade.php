
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SocketChat</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan|Ravi+Prakash" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald|Ravi+Prakash" rel="stylesheet">
 
 
  <style>
  @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font: 14px Lato; }
    #console { background-color: #eee; padding: 4px; position: fixed; bottom: 0; width: 100%; top:340px;}
    form { width: 100%;}
    form input { border: 0; padding: 10px; width: 100%; }
    #info { font-size: 9px; color: #888; padding: 6px; height: 22px;}
    #messages { list-style-type: none; margin: 0; padding: 0;}
    #messages li { padding: 5px 10px;}
    #messages li:nth-child(odd) { background: #efefef; }
    
    #userlist{
      /*border: 1px solid gray;*/
      /*width: 730px; height: 100px;*/
      font-size: 30px;
      margin-bottom: 20px;
      color:darkgreen;      
      text-align:center;
      /*font-family: 'Baloo Bhaijaan', cursive;*/
      font-family: 'Nanum Gothic', serif;
    }
    
    #scroll_div{
      font-family: 'Oswald', sans-serif;
      width: 1200px; height:280px;
      border:1px solid #FFFFFF;
      /*border-radius:5px;*/
      overflow:scroll;
      overflow-x:hidden;
      font-size: 20px;
    }
    .imgSelect {
       cursor: pointer;
    }  

    .popupLayer {
       position: absolute;
       display: none;
       background-color: #ffffff;
       border: solid 2px #d0d0d0;
       width: 350px;
       height: 150px;
       padding: 10px;
    }
    .popupLayer div {
       position: absolute;
       top: 5px;
       right: 5px
    }
    #chatText{
      /*margin-top:200px;*/
      /*padding-top: 200px;*/
    }
    
    /*///////////*/
    .content{
      border: 1px solid;
      width:300px; height:300px;
    }
    
  </style>
</head>



<body id="app">
  <div id="userlist"><!--길드 채팅룸-->ギルドチャットルーム</div>
  
  <div id="scroll_div" style="overflow:auto" >
  <!--<ul id="messages">-->
  <!--  <li v-for="message in messages" v-text="message"></li>-->
  <!--</ul>-->
  <p v-for="message in messages" v-text="message"></p>
  </div>
  
  <div id="console">
    <form @submit.prevent="send">
      <input type="text"
             class="form-control"
             v-model="message"
             @keyup="send('Someone starts to typing a message...', $event)"
             placeholder="Chat message here..."
             id="chatText"
      >
    </form>
  <div id="info" v-text="info">&nbsp;</div>
  
  </div>
  <!--<div class="content">hello world<div>-->

  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.8/socket.io.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script>
//   var times;
  
//   function startTime() {
//     var today = new Date();
//     var h = today.getHours();
//     var m = today.getMinutes();
//     var s = today.getSeconds();

//     m = checkTime(m);
//     s = checkTime(s);
//     times = h;
//     t = setTimeout(function () {
//         startTime()
//     }, 500);
//   }

// // 10보다 작을때 앞에 0 생성
// function checkTime(i) {
//     if (i < 10) {
//         i = "0" + i;
//     }
//     return i;
// }

// times = startTime();
  
  
  $(function(){
  //   var users;
  //   users = "<?php
  //       $user_s = session()->all();
  //       $user_st = $user_s["user_id"];
  //       echo $user_st;
  //     ?>";
  //   $("#userlist").append(users);
  // });
  </script>
  
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script>
  var user  = "<?php
          $user_s = session()->all();
          $user_st = $user_s["user_id"];
            echo $user_st;
        ?>";
  var times;
  // var users;
  
  function startTime() {
    var today = new Date();
    var h = today.getHours();
    // var m = today.getMinutes();
    // var s = today.getSeconds();
    // m = checkTime(m);
    // s = checkTime(s);
    
    times = h;
    t = setTimeout(function () {
        startTime()
    }, 500);
  }

// 10보다 작을때 앞에 0 생성
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

times = startTime();

  
  var soko ='21';
  var socket = io('https://harmony-project-chonahoom.c9users.io:8082');
  var userID = 'main'; 
   
    // $(function(){
    //     $('.content').click(function(){
    //     });
    // });
  
    
  
    new Vue({
      el: '#app',

      data: {
        messages: [],
        message: '',
        info: ''
      },
      
      ready: function () {
 
        socket.on('chatMes', function(){
        var today = new Date();
        var h = today.getHours();
        // alert(user);
        
        $.ajax({
          type : 'get',
          // processData: false,
          // contentType: false,
          // url:'json/guildmember_infolist',
          url:'/chats/tion/'+h+'/'+user,
          dataType:'json',
          data:{
            // _token:  $('meta[name="csrf-token"]').attr('content'),
            // '_token' : "{{csrf_token()}}",
            /*msgo : message,
            users : user,*/
          },
          success: function(data) {
            // var userID = [];
            // userID = data;
            // alert(userID);
            
            //  alert(userID);
            var userID = data[0];
            var userMes = data[1];
            // users = data[2];
            // alert("Hello");
            
            for(var i =0; i<userID.length; i++ ) {
              $('#scroll_div').append(userID[i]+": "+userMes[i]+"<br>");
            };
            
            
            // $('#scroll_div').append(userID+"<br>");
          },
          error: function (request, status, error) {
            alert("error:"+error);
          },
        });
      });
        
        
        socket.on('chat.message', function (message) {
        var msg = message;
         
        $.ajax({
          type : 'get',
          // processData: false,
          // contentType: false,
          // url:'json/guildmember_infolist',
          url:'/chatbox/Information/'+msg+'/'+user+'/'+times,
          dataType:'json',
          data:{
            // _token:  $('meta[name="csrf-token"]').attr('content'),
            // '_token' : "{{csrf_token()}}",
            /*msgo : message,
            users : user,*/
          },
          success: function() {
            // var userID = [];
            // userID = data;
            // alert(userID);
            //  alert(userID);
            // var messg = data[0];
            // $('#scroll_div').append(messg);
            // var userIDd = data[0];
            // var messags = data[1];
            
            
            $('#scroll_div').append(user+": "+message+"<br>");
            $('#scroll_div').scrollTop($('#scroll_div')[0].scrollHeight);
          },
          error: function (request, status, error) {
            alert("error:"+error);
          },
        });
        
          // Now all clients listen for an 'chat.message' event.
          // When that happens, a client update the 'messages' array,
          // $('#scroll_div').append(user+": "+message+"<br>");
          // this.messages.push(message);
          // $("#scroll_div").scrollTop($("#scroll_div")[0].scrollHeight+20);
          // $('#scroll_div').scrollTop($('#scroll_div').prop('scrollHeight'));
        }.bind(this));

        // socket.on('chat.info', function (info) {
        //   this.info = info;

        //   setTimeout(function () {
        //     this.info = '';
        //   }.bind(this), 1000);
        // }.bind(this));
      },
       
     
     
     
      
      methods: {
        send: function (info, event) {
          if (typeof event !== 'undefined') {
            // By checking the existence of second args,
            // We can safely assume the first argument is information message.
            socket.emit('chat.info', info);
            return;
          }

          // Send message to the server.
          // Upon receiving the server will broadcast this message to all clients.
          socket.emit('chat.message', this.message);
          this.message = '';
        }
      }
    });

  </script>
  
</body>
</html>