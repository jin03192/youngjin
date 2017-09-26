@include('menu.subweb')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    table, td, th {
        border: 1px solid #ddd;
        text-align: left;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 15px;
    }
    </style>
  </head>
  <body>
    <?php
    echo "<form class='' action='/deleteAction/{$boards[0]['id']}' method='get'>";


      echo "<table class='table'>
          <th>글번호</th>
          <th>제목</th>
          <th>작성자</th>
          <th>내용</th>
          <th>날짜</th>";


        echo "<tr>";
        echo "<td>{$boards[0]['id']}</a>";
        echo "<td>{$boards[0]['title']}</a>";
        echo "<td>{$boards[0]['message']}</a>";
        echo "<td>{$boards[0]['message']}</a>";
        echo "<td>{$boards[0]['updated_at']}</td>";
        echo "</tr></table>";




    echo "<input type='submit' name='' value='글 삭제하기'>";
    echo "<input type='button' name='' value='글 수정하기' onclick=location.href='/modify/{$boards[0]['id']}'>";
    // echo "<input type='hidden' name='_token' value='{{ csrf_token() }}'>";
    echo "</form>";
    ?>

  </body>

</html>
