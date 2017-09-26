<!DOCTYPE html>
<html>
    <head>
    <script type="text/javascript" src="app.js"></script>
    <style>
      .chat_log{ width: 95%; height: 200px; }
      .name{ width: 10%; }
      .message{ width: 70%; }
      .chat{ width: 10%; }
    </style>
    </head>
    <body>
        @include('menu.topmenu')
        <div>
      <textarea id="chatLog" class="chat_log" readonly></textarea>
    </div>
    <form id="chat">
      <input id="name" class="name" type="text" readonly>
      <input id="message" class="message" type="text">
      <input type="submit" class="chat" value="chat"/>
    </form>
    <div id="box" class="box">
    <script src="/socket.io/socket.io.js"></script> <!-- socket.io를 사용하기 위한 주소정의 -->
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script>
      var socket = io(); // socket변수의 초기화를 진행한다.
      $('#chat').on('submit', function(e){
        // on 은 명령 또는 데이터를 받기 위해 대기를 하고 있다가
        // submit의 속성이 들어오면 함수를 실행한다.
        socket.emit('send message', $('#name').val(), $('#message').val());
        // socket.emit는 접속한 대상에게 데이터를 전송하는 부분
        // socket.emit의 첫번째 인자값은 이벤트명,두번째는 데이터
        // 해당 이벤트명으로 데이터를 서버에 보낼때 사용
        $('#message').val("");
        e.preventDefault(); // 브라우져의 기본 이벤트를 해제 시킨다.
        // submit의 기능으로 다음페이지로 넘어가는 기본이벤트를 해제시킴으로써 서버에 단순히 전송만 하게된다.
      });
      // $('#chat') 부분부터 여기까지는 사용자에게 내가 보낸 메세지와 이름을 보내는 곳

      socket.on('receive message', function(msg){
        $('#chatLog').append(msg+"\n");
        //$(추가할내용).appendTo(클래스명); 의 형식으로도 사용가능하다.
        $('#chatLog').scrollTop($('#chatLog').prop('scrollHeight'))
        //prop('scrollHeight')은 스크롤의 높이를 구해서 넘겨준다
        //scrollTop() 조건에 일치하는 요소들의 수직 스크롤의 위치를 value값으로 세팅합니다.
      });
      socket.on('change name', function(name){
        $('#name').val(name);
      });
      socket.on('nameSaver', function(name){
        $('#chatLog').append(name+"님이 입장하셧습니다\n");
      });
    </script>
    </body>
</html>