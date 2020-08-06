<?php
 //전화번호,이름,성별,나이,주소,이메일,최종학력,전공,홈페이지
 $hark=$_POST["hark"];
 $name=$_POST["name"];
 $kor=$_POST["kor"];
 $en=$_POST["en"];
 $math=$_POST["math"];

 $al=$kor+$en+$math;
    $av=$al/3;
    if($av>=90){
      $bego="우등";
    }else if($av<=60){
      $bego="보충";
    }else{
      $bego="보통";
    }

 $conn=mysqli_connect("localhost","root","123456","testdb");
 $query="update school set name='$name',kor='$kor',en='$en',math='$math',al='$al',av='$av',bego='$bego' where hark='$hark'";
 mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">