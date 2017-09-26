<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>회원 가입</title>

 </head>
 <!--
  |**************************************************************************
  | 페이지로고/상단우측메뉴/주메뉴 표시 view/menu/topmenu.blade.php
  |**************************************************************************
   -->
  <nav class="navbar navbar-inverse">
    @include('menu.topmenu')
  </nav>
 <body>
    <!-- 아이디 중복체크 함수 -->
     <script language=javascript>
       function IdCheck(){
         var mywin = document.writeStore.user_id.value;
         window.open('idCheck/'+mywin,'IdCheck','width=250,height=100');
         mywin.focus();
       }
       function nickCheck(){
         var mywin = document.writeStore.nick.value;
         window.open('nickCheck/'+mywin,'nickCheck','width=250,height=100');
         mywin.focus();
       }
       function mailCheck(){
         var mywin = document.writeStore.email.value;
         window.open('mailCheck/'+mywin,'mailCheck','width=250,height=100');
         mywin.focus();
       }
     </script>

 <!-- 회원가입 폼 -->
 <form action="/store" name="writeStore" method="post" enctype="multipart/form-data">
   <table width="940" style="padding:5px 0 5px 0; ">
      <tr height="2" bgcolor="#FFC8C3"><td colspan="2"></td></tr>
      <tr>
         <th> 이름</th>
         <td><input type="text" name="user_name"></td>
      </tr>
       <tr>
         <th>아이디</th>
         <td>
         <input type="text" name="user_id">
         <input type="button" value="중복 체크" onclick="IdCheck();">
         </td>
       </tr>
       <tr>
         <th>닉네임</th>
         <td>
         <input type="text" name="nick">
         <input type="button" value="중복 체크" onclick="nickCheck();">
         </td>
       </tr>
       <tr>
         <th>주소</th>
         <td>
         <input type="text" name="address">
         </td>
       </tr>
       <tr>
         <th>전화번호</th>
         <td>
         <input type="text" name="phone">
         </td>
       </tr>
       <tr>
         <th>이메일</th>
         <td>
         <input type="text" name="email">
         <input type="button" value="중복 체크" onclick="mailCheck();">
         </td>
       </tr>
       <tr>
         <th>비밀번호</th>
         <td><input type="password" name="user_pass"> 영문/숫자포함 6자 이상</td>
       </tr>
       <tr>
         <th>비밀번호 확인</th>
         <td><input type="password" name="user_pass2"></td>
       </tr>
       <tr>
         <th>프로필 사진</th>
         <td><input type="file" name="myimg"></td>
       </tr>
       <tr height="2" bgcolor="#FFC8C3"><td colspan="2"></td></tr>
       <tr>
         <td colspan="2" align="center">
           <input type="submit" value="회원가입">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <input type="reset" value="취소">
        </td>
       </tr>
     </table>
   </form>
 </body>
</html>
