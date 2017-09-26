@include('menu.subweb')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/board.css">
    <style media="screen">
    table.list {
        border-collapse: separate;
        border-spacing: 1px;
        text-align: center;
        line-height: 1.5;
        margin: 20px 10px;
      }
      table.list th {
        padding: 10px;
        color: #168;
        border-bottom: 3px solid #168;
        text-align: left;
      }
      table.list td {
        color: #669;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        border-right: 1px solid #ddd;
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
      form{
        float:right;
      }
    </style>
  </head>
  <body>
<?php
echo "<table class='table table-striped table-bordered table-hover' style='width:1000px'>
  <thead>
    <th width='10%' style='text-align:center'>글번호</th>
    <th width='40%' style='text-align:center'>제목</th>
    <th width='15%' style='text-align:center'>글내용</th>
    <th width='15%' style='text-align:center'>날짜</th></thead> ";
foreach ($boards as $board) {
  echo "<tr>";
  echo "<td>{$board['id']}</td>";
  echo "<td><a href='/read/{$board['id']}'>{$board['title']}</td></a>";
  echo "<td>{$board['message']}</td>";
  echo "<td>{$board['updated_at']}</td>";
  echo "</tr>";
}
echo "</table>";
echo "<form class='' action='/write' method='get'>";
echo " <input id='sub' type='submit' name='' value='글쓰기'></form>";

 ?>
</body>
</html>
