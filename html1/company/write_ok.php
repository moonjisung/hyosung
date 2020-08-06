<?php
    $nb=$_POST["nb"];
    $name=$_POST["name"];
    $dp=$_POST["dp"];
    $ranks=$_POST["ranks"];
    $tel=$_POST["tel"];
    $addr=$_POST["addr"];
    $email=$_POST["email"];
    $marry=$_POST["marry"];
    $gendar=$_POST["gendar"];
    $money=$_POST["money"];
    $br=$_POST["br"];
    $g=$_POST["g"];
    $grade=$_POST["grade"];
    $major=$_POST["major"];
 $conn=mysqli_connect("localhost","root","123456","testdb");
 $query="insert into company
        (nb,name,dp,ranks,tel,addr,email,marry,gendar,money,br,g,grade,major)
        values('$nb','$name','$dp','$ranks','$tel','$addr','$email','$marry','$gendar','$money','$br','$g','$grade','$major')";
    mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">