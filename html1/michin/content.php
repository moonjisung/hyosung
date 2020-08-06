<?php
  $num=$_GET["num"];
  $conn=mysqli_connect("localhost","root","123456","testdb");
  $query="select from * michin where num='$num'";
  $rs=mysqli_query($conn,$query);
  $row=mysqli_fetch_array($rs);
 ?>
 <script>
     function del(){
         if(confirm("정말로 삭제하겠습니가")){
             location.href="delete.php?num=<?php echo $num?>";
         }
     }
     </script>
<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form name="frm1">
    <header>
      <div class="topmenu">
        <?php if(isset($_SESSION["id"])) {?>
          <a href="loguout.php">로그아웃</a></td> |&nbsp;
          <a href="#">회원수정</a> |&nbsp;
          <a href="#">회원탈퇴</a>
        <?php }else{?>
        <a href="javascript:login()">로그인</a></td> |&nbsp;
        <a href="join.php">회원가입</a> |&nbsp;
        <a href="#">ID/PW찾기</a>
      <?php }?>
      </div>
    </header>
    <form name="frm1">
      <br><br>
      <table class="table" width="600px">
          <tr>
            <td colspan="2" align="center">정보 보기</td>
          </tr>
          <tr>
            <td>사원번호</td>
            <td><?php echo $row["num"]?></td>
          </tr>
          <tr>
            <td>이름</td>
            <td><?php echo $row["name"]?></td>
          </tr>
          <tr>
            <td>직급</td>
            <td><?php echo $row["rk"]?></td>
          </tr>
          <tr>
            <td>기본급</td>
            <td><?php echo $row["nomal"]?></td>
          </tr>
          <tr>
            <td>추가수당</td>
            <td><?php echo $row["ad"]?></td>
          </tr>
          <tr>
            <td>총급여</td>
            <td><?php echo $row["total"]?></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
            <input type="button" value="수정" class="bt" onclick="location.href='edit.php?num=<?php echo $num ?>'">
            <input type="button" value="삭제" class="bt" onclick="del()">
          </tr>
      </table>
      </form>
  </body>
</html>
