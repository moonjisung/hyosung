<?php
include "dbconn.php";
?>
<script>
function tt(){
  if(frm1.title.value==""){
    alert("제목을 입력해주세요");
    frm1.title.focus();
    return false;
  }
  if(frm1.writer.value==""){
    alert("작성자를 입력해주세요");
    frm1.writer.focus();
    return false;
  }
  if(frm1.content.value==""){
    alert("내용을 입력해주세요");
    frm1.content.focus();
    return false;
  }
  document.frm1.submit();
}
</script>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="script.js" defer="defer"></script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="">
      <form name="frm1" method="post" action="write_ok.php">
        <br>
        <table class="table3">
          <tr>
            <td colspan="2" align="center">공지 추가</td>
          </tr>
          <tr>
            <td style="width: 30%;">제목</td>
            <td><input type="text" name="title" size="50"></td>
          </tr>
          <tr>
            <td>작성자</td>
            <td><input type="text" name="writer" size="50"></td>
          </tr>
          <tr>
            <td>내용</td>
            <td>
              <textarea name="content" rows="8" cols="80"></textarea>
            </td>
            <?php if(isset($_SESSION["id"])) {
          		$query = "select level from member1 where id ='$_SESSION[id]'";
          		$rs2 = mysqli_query($conn,$query);
          		$row2 = mysqli_fetch_array($rs2);

          		if($row2["level"] == "ceo" || $row2["level"] == "manager"){
          	?>
            <tr>
              <td colspan="2" align="center">
                <input type="button" value="추가 완료" class="bt" onclick="tt()">
              </td>
            </tr>
          <?php }
        }?>
          </tr>
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
