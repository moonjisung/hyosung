<?php
 $no=$_GET["no"];
 $conn=mysqli_connect("localhost","root","123456","testdb");
 $query="delete from notice where no='$no'";
 mysqli_query($conn,$query);
?>
<script>
    alert("데이터가 삭제되었습니다.");
    </script>
    <meta http-equiv="refresh" content="0;url=notice.php">
