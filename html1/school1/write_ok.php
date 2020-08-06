<?php
    $hark=$_POST["hark"];
    $name=$_POST["name"];
    $kor=$_POST["kor"];
    $en=$_POST["en"];
    $math=$_POST["math"];

    $al=$kor+$en+$math;
    $av=$al/3;
    if($av>=90){
        $bego="우등";
    }else if($av<60){
        $bego="보통";
    }else{
        $bego="보충";
    }
$conn=mysqli_connect("localhost","root","123456","testdb");
$query="insert into school
        (hark,name,kor,en,math,al,av,bego)
        values('$hark','$name','$kor','$en','$math','$al','$av','$bego')";
        mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">