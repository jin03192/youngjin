@include('menu.subweb')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>글쓰기</title>
    <style media="screen">
    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
    }
    #sub{
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
    }
    #sub:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    }
    </style>
    <script language="javascript">
    function check_submit(){

      if(document.writeForm.title.value=="title"){
        alert('제목을 입력하세요');
        document.writeForm.title.focus();
        return;
      }
      else if(document.writeForm.message.value=="message"){
        alert('내용을 입력하세요');
        document.writeForm.message.focus();
        return;
      }
      else{
        document.wirteForm.action="/writeAction";
        document.writeForm.submit();
      }
    }

    </script>
  </head>
  <body>

      <div class="os">
      <table>
             <form action="/writeAction" method="post" name="writeForm" enctype="multipart/form-data">
                 <tr>
                     <th>제목: </th>
                     <td><input type="text" placeholder="제목을 입력하세요. " name="title" size="30"></td>
                 </tr>
                 <tr>
                     <th>내용: </th>
                     <td><textarea cols="75" rows="18" placeholder="내용을 입력하세요. " name="message"></textarea></td>
                 </tr>
                 </table>
                 <a href="javascript:check_submit();"></a>
                 <input id="sub" type="submit" value='글등록' class="right">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
             </form>
      </div>
    </body>
</html>
