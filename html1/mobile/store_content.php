<?php
  session_start();

  $no=$_GET["no"];
  echo "1 번가게의 메뉴리스트";
  echo "?????";echo "<br>";
  echo "?????";echo "<br>";
  echo "?????";echo "<br>";
  if (isset($_SESSION["id"])){
    $conn=mysqli_connect("localhost","root","123456","testdb");
    $query=" select * from manager where id='$id'";
    $rs=mysqli_query($conn,$query);
    $if(mysqli_num_rows($rs)){
      ?>

      <input type="button" value="메뉴추가"" onclick="store_content_insert.php?no=<?php echo $no?>">

      <?php
    }
  }
?>
