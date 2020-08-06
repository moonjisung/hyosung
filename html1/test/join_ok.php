<?php
include "dbconn.php";
$id=$_POST["id"];
$pw=$_POST["pw1"];
$name=$_POST["name"];
$hp=$_POST["hp1"]."-".$_POST["hp2"]."-".$_POST["hp3"];
$email=$_POST["email1"]."@".$_POST["email2"];
if(isset($_POST["hoby1"])){
  $hoby1=$_POST["hoby1"];
}else{
  $hoby1="";
}
if(isset($_POST["hoby2"])){
  $hoby2=$_POST["hoby2"];
}else{
  $hoby2="";
}
if(isset($_POST["hoby3"])){
  $hoby1=$_POST["hoby3"];
}else{
  $hoby3="";
}
if(isset($_POST["hoby4"])){
  $hoby4=$_POST["hoby4"];
}else{
  $hoby4="";
}
if(isset($_POST["hoby5"])){
  $hoby5=$_POST["hoby5"];
}else{
  $hoby5="";
}
$query="insert into member2
(id,pw,name,email,hoby1,hoby2,hoby3,hoby4,hoby5)
values('$id','$pw','$name','$hp','$email','$hoby1','$hoby2','$hoby3','$hoby4','$hoby5')";
// echo $query; exit;
mysqli_query($conn,$query);
?>
<script>
  alert("회원가입을 축하드립니다"+"\n"+"메인 홈페이지로이동하여 로그인 하시기바랍니다.");
</script>
<meta http-equiv="refresh" content="10;url=index.php">
