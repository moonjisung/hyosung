<?php
session_start();
include "jjj.php";
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
<div id="wrap">
<header>
	<div class="gnb_menu"></div>
	<div class="logo">
    <a href="index.php">
		<img src="logo/LOGO.jpeg"></a>
	</div>
	<nav>
	<?php
		include "jjj.php";
		$query4="select * from menu";
		$rs4=mysqli_query($conn,$query4);
	?>
		<ul class="menu">
<?php while($row4=mysqli_fetch_array($rs4)){ ?>
			<li><a href="#"><?php echo $row4["name"] ?></a>
				<ul class="submenu">
 <?php
	$pcode=$row4["code"];
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
</section>
</body>
</html>
