<?php
session_start();
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
    <header>
    	<div class="gnb_menu"></div>
    	<div class="logo">
    		<a href="index.php">
    		<img src="logo/LOGO.jpeg"></a>
    	</div>
    	<nav>
    	<?php
    		include "jjj.php";
    		$query="select * from menu";
    		$rs=mysqli_query($conn,$query);
    	?>
    		<ul class="menu">
    <?php while($row=mysqli_fetch_array($rs)){ ?>
    			<li><a href="#"><?php echo $row["name"] ?></a>
    				<ul class="submenu">
     <?php
    	$pcode=$row["code"];
    	$query2="select * from submenu where pcode='$pcode'";
    	$rs2=mysqli_query($conn,$query2);
    	while($row2=mysqli_fetch_array($rs2)){
    		$code=$row2["code"];
     ?>
    				<li><a href="store.php?code=<?php echo $code ?>"><?php echo $row2["name"] ?></a></li>
    	<?php }?>
    				</ul>
    			</li>
    <?php } ?>
    		</ul>
    	</nav>
    </header>
    <section>
      <form name="frm1" method="post" action="write_ok.php">
        <br>
        <table class="table" width=600px>
          <tr>
            <td colspan="2" align="center">공지 추가</td>
          </tr>
          <tr>
            <td>제목</td>
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
    </section>
  </body>
</html>
