<?php
  $no=$_POST["no"];
  $writer=$_POST["writer"];
  $title=$_POST["title"];
  $content=$_POST["content"];
  $writeday=date("y/m/d[h:i:s]");

  $conn=mysqli_connect("localhost","root","123456","testdb");
  $query="update notice set
  title='$title',writer='$writer',writeday='$writeday',content='$content'
  where no='$no'";
  mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">
