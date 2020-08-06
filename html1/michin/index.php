<?php
    $conn=mysqli_connect("localhost","root","123456","testdb");
    $query="select * from michin";
    $rs=mysqli_query($conn,$query);
    $cnt=mysqli_num_rows($rs);
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
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
  <section>
    <table class="table" width="600px">
    <tr>
        <td>사번</td>
        <td>이름</td>
        <td>직급</td>
        <td>기본급</td>
        <td>추가수당</td>
        <td>총급여</td>
    </tr>
    <?php
    while($row=mysqli_fetch_array($rs)){ ?>
    <tr>
        <td><?php echo $row["num"]?></td>
        <td><a href="content.php?num=<?php echo $row["num"]?>">
        <?php echo $row["name"]?></a></td>
        <td><?php echo $row["rk"]?></td>
        <td><?php echo $row["nomal"]?></td>
        <td><?php echo $row["ad"]?></td>
        <td><?php echo $row["total"]?></td>
    </tr>
<?php }?>
<tr>
    <td colspan="6" align="center">
    <input type="button" value="사원 추가"
    class="bt"
    onclick="location.href='write.php'">
    </td>
</tr>
<tr>
  <td colspan="9" align="right"><font color="red"><b><?php echo $cnt ?></font>건의 데이터가 검새되었습니다.</td>
</tr>
    </table>
    </section>
</body>
</html>
