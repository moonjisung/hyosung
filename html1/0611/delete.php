<?php
  $no=$_GET["no"];
  // $filename=$_GET["fname"];
  // $file_dir=$_SERVER["DOCUMENT_ROOT"]."/fileServer/".$filename;

  // //파일서버의 파일부터 삭제...
  // if(file_exists($file_dir)){
  // unlink($file_dir);
  // }

  //디비서버의 파일정보 레코드 삭제 ..
  $conn=mysqli_connect("localhost","root","123456","testdb");
  $query="delete from dog where no=$no";
  mysqli_query($conn,$query);
?>
<meta http-equiv="refresh" content="0;url=index.php">
