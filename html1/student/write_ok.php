<?php
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
 $query="insert into student
        (hp,name,gendar,age,addr,email,grade,major,homep)
        values('$hp','$name','$gendar',$age,'$addr','$email','$grade','$major','$homep')";
    mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">