<?php
$no=$_GET["no"];
$conn=mysqli_connect("localhost","root","123456","testdb");
$query="select *from notice where no='$no'";
$rs=mysqli_query($conn,$query);
$row=mysqli_fetch_array($rs);
?>
<script>
function ss(){
  document.frm1.submit();
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
      <form name="frm1" method="post" action="edit_ok.php">
        <br>
        <table class="table" width=600px>
          <tr>
            <td colspan="2" align="center">수정</td>
          </tr>
          <tr>
            <td>글번호</td>
            <td><input type="text" name="no" size="50"value="<?php echo $row["no"]?>"readonly>수정불가</td>
          </tr>
          <tr>
            <td>제목</td>
            <td><input type="text" name="title" size="50"value="<?php echo $row["title"]?>"></td>
          </tr>
          <tr>
            <td>작성자</td>
            <td><input type="text" name="writer" size="50"value="<?php echo $row["writer"]?>"readonly>수정불가</td>
          </tr>
          <tr>
            <td>작성일</td>
            <td><input type="text" name="writeday" size="50"value="<?php echo $row["writeday"]?>"readonly>수정불가</td>
          </tr>
          <tr>
            <td>내용</td>
            <td>
              <textarea name="content" rows="8" cols="80"><?php echo $row["content"]?></textarea>
            </td>
            <tr>
              <td colspan="2" align="center">
                <input type="button" value="추가 완료" class="bt" onclick="ss()">
              </td>
            </tr>
          </tr>
        </table>
    </section>
  </body>
</html>
