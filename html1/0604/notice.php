<?php
if(isset($_GET["page"])){
  $page=$_GET["page"];
  $group=ceil($page/5);
}else{
  $page=1;
  $group=1;
}
//읽어온 페이지값을 기준으로 startRow를 구한다.
$startRow=($page-1)*10;
$conn=mysqli_connect("localhost","root","123456","testdb");
$query="select * from notice1 order by no desc limit $startRow,10";
$rs=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <br><br>
    <table class="table1">
      <tr>
        <th>글번호</th>
        <th>글제목</th>
        <th>작성자</th>
        <th>작성일</th>
        <th>조회수</th>
      </tr>
      <?php while($row=mysqli_fetch_array($rs)){?>
      <tr>
        <th><?php echo $row["no"]?></th>
        <th><?php echo $row["title"]?></th>
        <th><?php echo $row["writer"]?></th>
        <th><?php echo $row["writeday"]?></th>
        <th><?php echo $row["hit"]?></th>
      </tr>
    <?php } ?>
    <?php
    $query1="select count(*) as cnt from notice1";
    $rs1= mysqli_query($conn,$query1);
    $row1= mysqli_fetch_array($rs1);
    $pageCount=ceil($row1["cnt"]/10);
    $groupCount=ceil($pageCount/5);
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
            //1그룹:1~5 2그룹:6~10 3그룹: 11~15
            $startPage=($group-1)*5+1;
            $endPage=$startPage+4;
            for($i=$startPage;$i<=$endPage;$i++){
              if($i>$pageCount){break;}
              if($i==$page){
              echo "<a href='notice.php?page=$i'>
              <b><font color='orange'>[$i]</font></b></a>";
            }else{
              echo"<a href='notice.php?page=$i'>[$i]</a>";
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
