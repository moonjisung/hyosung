<?php
  $conn = mysqli_connect("localhost", "root", "123456", "testdb");
  $query = "insert into dog (dog_name,bMonth,price,pic,gendar,memo)
  values ('포메','1','1','10.png','수컷','활발')";


  for($i=1;$i<=150;$i++) {
    mysqli_query($conn, $query);
  }
  echo $i."건의 데이터가 입력되었습니다";
?>
