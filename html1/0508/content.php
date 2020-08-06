<?php
$no=$_GET["no"];
$conn=mysqli_connect("localhost","root","123456","testdb");
$query="update notice set hit=hit+1 where no=$no";
mysqli_query($conn,$query);
$query="select * from notice where no=$no";
$rs=mysqli_query($conn,$query);
$row=mysqli_fetch_array($rs);
?>
<script>
function del(){
  if(confirm("정말 삭제하겠습니가")){
    location.href="delete.php?no=<?php echo $no?>";
  }
}
</script>
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
        <br>
        <table class="table" width=600px>
          <tr>
            <td colspan="2" align="center">공지 보기</td>
          </tr>
          <tr>
            <td>제목</td>
            <td><?php echo $row["title"]?></td>
          </tr>
          <tr>
            <td>작성자</td>
            <td><?php echo $row["writer"]?></td>
          </tr>
          <tr>
            <td>작성일</td>
            <td><?php echo $row["writeday"]?></td>
          </tr>
          <tr>
            <td>내용</td>
            <td><?php echo nl2br($row["content"])?></td>
            <tr>
              <td>조회수</td>
              <td><?php echo $row["hit"]?></td>
            </tr>
            <tr>
              <td colspan="2" align="center">
                <input type="button" value="수정" class="bt" onclick="location.href='edit.php?no=<?php echo $no?>'">
                <input type="button" value="삭제" class="bt" onclick="del()">
              </td>
            </tr>
          </tr>
        </table>
    </section>
  </body>
</html>
