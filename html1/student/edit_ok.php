<?php
 //전화번호,이름,성별,나이,주소,이메일,최종학력,전공,홈페이지
 $hp=$_POST["hp"];
 $name=$_POST["name"];
 $gendar=$_POST["gendar"];
 $age=$_POST["age"];
 $addr=$_POST["addr"];
 $email=$_POST["email"];
 $grade=$_POST["grade"];
 $major=$_POST["major"];
 $homep=$_POST["homep"];
 $conn=mysqli_connect("localhost","root","123456","testdb");
 $query="update student set name='$name',gendar='$gendar',age=$age,addr='$addr',email='$email',grade='$grade',major='$major',homep='$homep' where hp='$hp'";
 mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">