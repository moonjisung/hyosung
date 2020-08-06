<?php
  $conn=mysqli_connect("localhost","root","123456","testdb");
  $query="select * from notice1 order by no desc";
  $rs=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <br><br>
    <table class="table1">
      <tr>
        <th>글번호</th>
        <th>글제목</th>
        <th>작성자</th>
        <th>작성일</th>
        <th>조회수</th>
      </tr>
      <?php while($row=mysqli_fetch_array($rs)){ ?>
      <tr>
        <td><?php echo $row["no"]?></td>
        <td><?php echo $row["title"]?></td>
        <td><?php echo $row["writer"]?></td>
        <td><?php echo $row["writeday"]?></td>
        <td><?php echo $row["hit"]?></td>
      </tr>
    <?php } ?>
      <tr>
        <td colspan="5" align="center">
          <input type="button" value="공지사항 추가"
          onclick="location.href='notice_write.php'" class="bt1">
        </td>
      </tr>
    </table>
  </body>
</html>
