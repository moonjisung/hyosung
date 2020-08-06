<?php
include "dbconn.php";
//패스워드,,이름,전화번호,이메일,성별,취미,남기는말...
$id=$_SESSION["id"];
$pw=$_POST["pw1"];
$name=$_POST["name"];
$hp=$_POST["hp1"]."-".$_POST["hp2"]."-".$_POST["hp3"];
$email=$_POST["email1"]."@".$_POST["email2"];
$gendar=$_POST["gendar"];
if(isset($_POST["hoby1"])){
  $hoby1=$_POST["hoby1"];
}else {
  $hoby1="";
}
if(isset($_POST["hoby2"])){
  $hoby2=$_POST["hoby2"];
}else {
  $hoby2="";
}
if(isset($_POST["hoby3"])){
  $hoby1=$_POST["hoby3"];
}else {
  $hoby3="";
}
if(isset($_POST["hoby4"])){
  $hoby4=$_POST["hoby4"];
}else {
  $hoby4="";
}
if(isset($_POST["hoby5"])){
  $hoby5=$_POST["hoby5"];
}else {
  $hoby5="";
}
$comment=$_POST["comment"];
$query="Update member2 set pw='$pw',name='$name',hp='$hp',email='$email'
,gendar='$gendar',hoby1='$hoby1',hoby2='$hoby2',hoby3='$hoby3',hoby4='$hoby4',hoby5='$hoby5'
,comment='$comment' where id='$id'";
mysqli_query($conn,$query);
?>
<script>
  alert("회원수정을 축하드립니다"+"\n"+"인덱스창으로 이동하여 로그인 후 사용바랍니다.");
</script>
<meta http-equiv="refresh" content="6;url=index.php">
