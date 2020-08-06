<?php
  $num=$_POST["num"];
  $name=$_POST["name"];
  $wlrrmq=$_POST["wlrrmq"];
if($wlrrmq=="사장"){
      $rlqhsrmq=400;
   } else if($wlrrmq=="부장"){
      $rlqhsrmq=250;
   } else if($wlrrmq=="과장"){
      $rlqhsrmq=200;
   } else if($wlrrmq=="대리"){
      $rlqhsrmq=180;
   } else{
      $rlqhsrmq=150;
   }
   $cnrktnekd=$_POST["cnrktnekd"]*2;

   $chdrmqdu=$rlqhsrmq+$cnrktnekd;
   $conn=mysqli_connect("localhost","root","autoset","testdb");
   $query="insert into pay
   (num,name,wlrrmq,rlqhsrmq,cnrktnekd,chdrmqdu)
    values
    ('$num','$name','$wlrrmq','$rlqhsrmq','$cnrktnekd','$chdrmqdu')";
  mysqli_query($conn,$query);
 ?>
 <meta http-equiv="refresh" content="0;url=index.php">
