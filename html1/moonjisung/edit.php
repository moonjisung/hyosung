<!-- <?php
include "dbconn.php";
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
    </header> -->
    <?php
    $no=$_GET["no"];
    // $query="update notice set hit=hit+1 where no=$no";
    // mysqli_query($conn,$query);
    $query="select * from notice where no=$no";
    $rs=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($rs);
    ?>
    <script>

    function ss (){
      document.frm1.submit();
    }
      function del(){
        if(confirm("정말 삭제하시겠습니까.")){
          location.href="delete.php?no=<?php echo $no?>";
        }
      }
    </script>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="script.js" defer="defer"></script>
    </head>
    <body>

    <div class="">
      <form name="frm1" method="post" action="edit_ok.php">
        <br>
        <table class="table3" width=600px>
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
            <?php if(isset($_SESSION["id"])) {
          		$query = "select level from member1 where id ='$_SESSION[id]'";
          		$rs2 = mysqli_query($conn,$query);
          		$row2 = mysqli_fetch_array($rs2);

          		if($row2["level"] == "ceo" || $row2["level"] == "manager"){
          	?>
            <tr>
              <td colspan="2" align="center">
                <input type="button" value="수정 완료" class="bt" onclick="ss()">
              </td>
            </tr>
          </tr>
        <?php }
      }?>
        </table>
    </div>
    <footer style="position:absolute; bottom:0;">
      <div class="foottop">
        <a href="policy.php"><font style="font-weight: bold;color: orange;">개인정보처리방침</font></a>&nbsp;&nbsp;|&nbsp;
        <a href="youth.php">청소년 보호 정책</a>&nbsp;&nbsp;|&nbsp;
        <a href="qna.php">고객문의</a>&nbsp;&nbsp;|&nbsp;
        <a href="ad.php">광고/제휴문의</a>
      </div>
      <div class="footmid">
        회사명 : ㈜MJ International&nbsp;&nbsp;|&nbsp;&nbsp;대표자 : 문지성&nbsp;&nbsp;|&nbsp;&nbsp;사업자 등록번호 : 222-22-222222<br>
        주소 : 부산시 해운대구 좌동 엘시티&nbsp;&nbsp;|&nbsp;&nbsp;E-mail : zpfhfh1537@naver.com&nbsp;&nbsp;|&nbsp;&nbsp;대표번호 : 010-5814-5341
        <br><br>
        Copyright &#169; All rights reserved.
      </div>
    </footer>
  </body>
</html>
