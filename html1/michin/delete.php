<?php
 $num=$_GET["num"];
 $conn=mysqli_connect("localhost","root","123456","testdb");
 $query="delete from michin where num='$num'";
 mysqli_query($conn,$query);
?>
<script>
    alert("데이터가 삭제되었습니다..bye~~~~");
    </script>
    <meta http-equiv="refresh" content="0;url=index.php">
