<?php
  $dog_name=$_POST["dog_name"];
  $bMonth=$_POST["bMonth"];
  $price=$_POST["price"];
  $pic=$_POST["pic"];
  $gendar=$_POST["gendar"];
  $memo=$_POST["memo"];

  $uploaddir=$_SERVER["DOCUMENT_ROOT"]."/0611/fileServer";
  $uploadfile=$uploaddir.$fname;

  move_uploaded_file($_FILES["pic"]["tmp_name"],$uploadfile);

  $conn=mysqli_connect("localhost","root","123456","testdb");
  $query="insert into dog (name,birth,)"
?>
<meta http-equiv="refresh" conten"0;url=index.php">
