<?php
$num=$_POST["num"];
$name=$_POST["name"];
$rk=$_POST["rk"];
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
   $ad=$_POST["ad"]*2;
$total=$nomal+$ad;
 $conn=mysqli_connect("localhost","root","123456","testdb");
 $query="insert into michin
 (num,name,rk,nomal,ad,total)
 values($num,'$name','$rk',$nomal,$ad,$total)";
 mysqli_query($conn,$query);
 ?>
 <meta http-equiv="refresh" content="0;url=index.php">
