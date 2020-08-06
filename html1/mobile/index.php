<?php
session_start();
?>
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
	<?php
	include "jjj.php";
	$query="select * from notice order by no asc";
	$rs=mysqli_query($conn,$query);
	$cnt=mysqli_num_rows($rs);
	?>
	<br>
	<table class="table">
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
			class="bt" onclick="location.href='write.php'">
		</td>
	</tr>
<?php }
}?>
	<tr>
		<td colspan="5" align="right"><font color="red">
			<b><?php echo $cnt ?></b></font>건의 데이터가 검색되었습니다..</td>
	</tr>
	</table>
</section>
</div>
</body>
</html>
