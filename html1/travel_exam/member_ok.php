<?php
  include "dbconn.php";
  $id=$_POST["id"];
  $pw=$_POST["pw1"];
  $name=$_POST["name"];
  $hp=$_POST["hp1"]."-".$_POST["hp2"]."-".$_POST["hp3"];
  $email=$_POST["email1"]."@".$_POST["email2"];
  $gendar=$_POST["gendar"];
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
  $hoby3=$_POST["hoby3"];
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
  $comment=$_POST["comment"];
  $query="insert into member2
  (id,pw,name,hp,email,gendar,hoby1,hoby2,hoby3,hoby4,hoby5,comment)
  values ('$id','$pw','$name','$hp','$email','$gendar','$hoby1','$hoby2','$hoby3','$hoby4','$hoby5','$comment')";
  // echo $query; exit;
  mysqli_query($conn,$query);
  // $_SESSION["id"]=$id;
?>
 <script>
   alert("회원가입을 축하드립니다"+"\n"+"인덱스창으로 이동하여 로그인 후 사용바랍니다");
 </script>
 <meta http-equiv="refresh" content="0;url=index.php">
