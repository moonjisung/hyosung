<?php
if(isset($_GET["page"])){
  $page=$_GET["page"];
  $group=ceil($page/5);
}else{
  $page=1;
  $group=1;
}
$startRow=($page-1)*10;
$conn=mysqli_connect("localhost","root","123456","testdb");
$query="select * from notice1 order by no desc limit $startRow,10";
$rs=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br><br>
    <table class="table1">
    <tr>
      <td>글번호</td>
      <td>글제목</td>
      <td>작성자</td>
      <td>작성일</td>
      <td>조회수</td>
    </tr>
    <tr>
      <?php while($row=mysqli_fetch_array($rs)) {?>
      <td><?php echo $row["no"]?></td>
      <td><?php echo $row["title"]?></td>
      <td><?php echo $row["writer"]?></td>
      <td><?php echo $row["writeday"]?></td>
      <td><?php echo $row["hit"]?></td>
    </tr>
  <?php }?>
  <?php {
  $query1="select count(*) as cnt from notice1";
  $rs1=mysqli_query($conn,$query1);
  $row1=mysqli_fetch_array($rs1);
  $pageCount=ceil($row1["cnt"]/10);
  $groupCount=ceil($pageCount/5);
  }
  ?>
  <tr>

  <td colspan="5" align="center">
    <?php
    if($group != 1){
      $firstPage=1;
    echo "<a href='notice.php?page=$firstPage'>FIRST</a>";
    echo "&nbsp;&nbsp;";
    }
    if($group != 1){
      $prevPage=($group-2)*5+1;
    echo "<a href='notice.php?page=$prevPage'>PREV</a>";
    echo "&nbsp;&nbsp;";
    }
    $startPage=($group-1)*5+1;
    $endPage=$startPage+4;
    for($i=$startPage;$i<=$endPage;$i++){
      if($i>$pageCount){break;}
      if($i==$page){
        echo "<a href='notice_exam.php?page=$i'>
        <font color='blue'>[$i]</font></a>";
      }else{
        echo "<a href='notice_exam.php?page=$i'>[$i]</a>";
      }
    }
    echo "&nbsp;&nbsp;";
    if($group<$groupCount){
      $nextPage=$group*5+1;
    echo "<a href='notice.php?page=$nextPage'>NEXT</a>";
  }
  echo "&nbsp;&nbsp;";
  if($group<$groupCount){
    $lastPage=$pageCount;
  echo "<a href='notice.php?page=$lastPage'>LAST</a>";
}
   ?>
  </td>
  </tr>
  <tr>
    <td colspan="5" align="center">
      <input type="button" value="공지사항 추가"
      onclick="location.href='notice_write.php'" class="bt1">
    </td>
  </tr>
  </table>
  </body>
</html>
