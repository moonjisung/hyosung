<?php
$conn=mysqli_connect("localhost","root","123456","testdb");
$query="select * from notice order by no asc";
$rs=mysqli_query($conn,$query);
$cnt=mysqli_num_rows($rs);
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
    </header>
    <section>
        <div class="notice">
          <table class="table" width="600px">
            <tr>
              <td>글번호</td>
              <td>제목</td>
              <td>작성자</td>
              <td>작성일</td>
              <td>조회수</td>
            </tr>
            <?php
            while($row=mysqli_fetch_array($rs)){
            ?>
            <tr>
              <td><?php echo $row["no"]?></td>
              <td><a href="content.php?no=<?php echo $row["no"]?>">
                <?php echo $row["title"]?></a></td>
              <td><?php echo $row["writer"]?></td>
              <td><?php echo $row["writeday"]?></td>
              <td><?php echo $row["hit"]?></td>
            </tr>
          <?php } ?>
          <tr>
            <td colspan="5" align="center">
              <input type="button" value="공지 추가"
              class="bt" onclick="location.href='write.php'">
            </td>
          </tr>
          <tr>
            <td colspan="5" align="right"><font color="red">
              <b><?php echo $cnt ?></b></font>건의 데이터가 검색되었습니다..</td>
          </tr>
          </table>
        </div>
    </section>
  </body>
</html>
