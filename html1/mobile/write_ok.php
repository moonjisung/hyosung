<?php
  $writer=$_POST["writer"];
  $title=$_POST["title"];
  $content=$_POST["content"];
  $writeday=date("y/m/d[h:i:s]");

  $conn=mysqli_connect("localhost","root","123456","testdb");
  $query="insert into notice
  (writer,title,content,writeday)
  values('$writer','$title','$content','$writeday')";
  mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">
