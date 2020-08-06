
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
		<a href="index.php"><img src="logo/LOGO.jpeg"></a>
	</div>
	<nav>
	<?php
		$gcode=$_GET["code"];
		$conn=mysqli_connect("localhost","root","123456","testdb");
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
<ul class="list">

	<?php
	$query3="select * from store where pcode='$gcode'";
	$rs3= mysqli_query($conn,$query3);
	?>
  <?php while($row3 = mysqli_fetch_array($rs3)) { ?>
    <li>
      <a href=""class="inner">
        <div class="thumb">
          <img src="../fileServer/<?php echo $row3["pic"] ?>">
        </div>
        <div class="title">
          <?php echo $row3["store_name"] ?>
        </div>
      </a>
    </li>
  <?php } ?>
</ul>
</div>
</body>
</html>
