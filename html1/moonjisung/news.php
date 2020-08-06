<?php
include "dbconn.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
    <script src="script.js" defer="defer"></script>
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <title></title>
    <script>
      function login(){
        window.open("login.php","로그인","width=400,height=200");
      }
    </script>
  </head>
  <body>
    <div style="width: 100%; height: 900px;">
  <div class="s_menu">
    <div class="notice">
      <div class="title">
        <a href="news.php" style="margin-left: 40px;"><img src="imgs/logo/nlogo.png" > 뉴스&공지</a>
      </div>
       <?php
    	$query="select * from notice order by no asc";
    	$rs=mysqli_query($conn,$query);
    	$cnt=mysqli_num_rows($rs);
    	?>
    	<br>
    	<table class="ntable">
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
    			<?php echo $row["title"]?></td>
    			<td><?php echo $row["writer"]?></td>
    			<td><?php echo $row["writeday"]?></td>
    			<td><?php echo $row["hit"]?></td>
    		</tr>
    	<?php }?>
      <?php if(isset($_SESSION["id"])) {
    		$query = "select level from member1 where id ='$_SESSION[id]'";
    		$rs2 = mysqli_query($conn,$query);
    		$row2 = mysqli_fetch_array($rs2);

    		if($row2["level"] == "ceo" || $row2["level"] == "manager"){
    	?>
    	<tr>
    		<td colspan="5" align="center">
    			<input type="button" value="공지추가"
    			class="bt" onclick="location.href='write.php'" style="cursor:pointer">
    		</td>
    	</tr>
    <?php }
    }?>
    </table>
    </div>
      </div>
      </div>
<footer>
  <div class="foottop">
    <a href="https://ko.wikipedia.org/wiki/%EA%B0%9C%EC%9D%B8%EC%A0%95%EB%B3%B4%EC%B2%98%EB%A6%AC%EB%B0%A9%EC%B9%A8"><font style="font-weight: bold;color: ivory;">개인정보처리방침</font></a>&nbsp;&nbsp;|&nbsp;
    <a href="https://ko.wikipedia.org/wiki/%EC%B2%AD%EC%86%8C%EB%85%84%EB%B3%B4%ED%98%B8%EC%A0%95%EC%B1%85">청소년 보호 정책</a>&nbsp;&nbsp;|&nbsp;
    <a href="qna.php">고객문의</a>&nbsp;&nbsp;|&nbsp;
    <a href="#">광고/제휴문의</a>
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
