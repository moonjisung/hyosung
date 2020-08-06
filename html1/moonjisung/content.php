<?php
include "dbconn.php";
$no=$_GET["no"];
// $query="update notice set hit=hit+1 where no=$no";
// mysqli_query($conn,$query);
$query="select * from notice where no=$no";
$rs=mysqli_query($conn,$query);
$row=mysqli_fetch_array($rs);
?>
<script>
  function del(){
    if(confirm("정말 삭제하시겠습니까.")){
      location.href="notice_delete.php?no=<?php echo $no?>";
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
<div id="wrap">
<div class="">
  <br>
  <table class="table3" width=600px>
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
      <?php if(isset($_SESSION["id"])) {
    		$query = "select level from member1 where id ='$_SESSION[id]'";
    		$rs2 = mysqli_query($conn,$query);
    		$row2 = mysqli_fetch_array($rs2);

    		if($row2["level"] == "ceo" || $row2["level"] == "manager"){
    	?>
      <tr>
        <td colspan="2" align="center">
          <input type="button" value="수정" class="bt" onclick="location.href='edit.php?no=<?php echo $no?>'">
          <input type="button" value="삭제" class="bt" onclick="del()">
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
