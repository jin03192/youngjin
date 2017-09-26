<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>
    <a href="/videoPlay">짠짜라</a>
    <?php
    echo "<table class='table'>
      <thead>
        <th>글번호</th>
        <th>제목</th>
        <th>작성자</th>
        <th>날짜</th>";


    foreach ($band_videos_all as $band_v_a) {
      echo "<tr>";
      echo "<td>{$band_v_a['id']}</td>";
      echo "<td><a href='/video_read/{$band_v_a['id']}'>{$band_v_a['subject']}</td></a>";
      echo "<td>{$band_v_a['user_id']}</td>";
      echo "<td>{$band_v_a['updated_at']}</td>";
      echo "</tr>";

    } ?>
    <input type="button" value="연주하기" onclick="location.href='/video';">

  </body>
</html>
