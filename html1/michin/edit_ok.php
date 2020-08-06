<?php
$num=$_POST["num"];
$name=$_POST["name"];
$rk=$_POST["rk"];
$nomal=$_POST["nomal"];
$ad=$_POST["ad"];
$total=$_POST["total"];
if($rk=="사장"){
      $nomal=400;
   } else if($rk=="부장"){
      $nomal=250;
   } else if($rk=="과장"){
      $nomal=200;
   } else if($rk=="대리"){
      $nomal=180;
   } else{
      $nomal=150;
   }
   $ad=$_POST["ad"];
$total=$nomal+$ad;
   $conn=mysqli_connect("localhost","root","123456","testdb");
   $query="update michin set name='$name',rk='$rk',nomal='$nomal',ad='$ad',total='$total'";
   mysqli_query($conn,$query);
 ?>
 <meta http-equiv="refresh" content="0;url=index.php">
