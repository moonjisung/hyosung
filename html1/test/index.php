<?php
session_start();
$conn=mysqli_connect("localhost","root","123456","testdb");
$query="select * from notice order by no asc";
$rs=mysqli_query($conn,$query);
$cn=mysqli_num_rows($rs);
// echo $_SESSION["id"];
?>
<script>
  function login(){
    window.open("login.php","login","width=400,height=150");
  }
</script>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Luxury tea</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="script.js" defer="defer"></script>
    <script>
        document.getElementById('vid').play();
    </script>
</head>
<body>
<header>
    <div class="logo"><a href="#">
        <img src="logo/22.jpg"></a>
    </div>
    <div class="topmenu">
        <?php if(isset($_SESSION["id"])) { ?>
    <a href="logout.php">로그아웃</a> |&nbsp;
    <a href="join.php">회원수정</a> |&nbsp;
    <a href="#">회원탈퇴</a>
        <?php }else{?>
    <a href="javascript:login()"><font class="d">Login</font></a> |&nbsp;
    <a href="join.php"><font class="d">Sign Up</font></a> |&nbsp;
    <a href="#"><font class="d">ID/PW Search</font></a>
        <?php } ?>
    </div>
</header>
<nav>
    <ul class="menu">
        <li><p class="e">Vehicle introduction</p></li>
        <li><p class="e">Models</p>
        <ul class="submenu">
            <li><p class="e">Aventador</p></li>
            <li><p class="e">Huracan</p></li>
            <li><p class="e">Urus</p></li>
            <li><p class="e">Limted Edition</p></li>
            <li><p class="e">Concept</p></li>
        </ul>
        </li>
        <li><p class="e">Branch location</p>
        <ul class="submenu">
            <li><p class="e">Seoul</p></li>
            <li><p class="e">Busan</p></li>
            <li><p class="e">Gangwondo</p></li>
            <li><p class="e">Gyeonggi-do</p></li>
            <li><p class="e">Jeolla-do</p></li>
        </ul>
    </li>
        <li><p class="e">Service center</p></li>
</nav>
<div id="wrap">
    <div id="imgslide">
        <div class=>
    </div>
    <div class="video">
    <video width="900px" height="500px" loop="loop" muted="muted" controls="controls" autoplay="autoplay">
    <source src="img/aven1.mp4"  type="video/mp4"></video>
    </div>
    </div>
    <div id="content">
        <div class="notice">
            <div class="title">
                <img src="img/flight.png" width="20" height="20">
            공지사항
            </div>
            <table class="table1">
            <tr>
                <th>제목</th>
                <th>작성일</th>
            </tr>
            <?php while($row=mysqli_fetch_array($rs)){?>
            <tr>
                <td width="80%"><a href="#"><?php echo $row["title"]?></a></td>
                <td width="20%"><?php echo $row ["writeday"]?></td>
            </tr>
          <?php }?>
            <tr>
            <td align="center" colspan="2">
              <input type="button" value="추가" class="bt" onclick="location.href='wrtie.php'">
            </td>
            </tr>
            <tr>
              <td colspan="2" align="right"><font color="red">
                <b><?php echo $cn?></b></font>건의 데이터가 검색되었습니다.
              </td>
            </tr>
            </table>
        </div>
        <div class="partner">
            <div class="title">
            <img src="img/flight.png" width="20" height="20">
            오토 갤러리-<a href="#">바로가기</a>
            <div class="imgs">
    <img src="img/svj.jpg">
    <img src="img/svj2.jpeg">
    <img src="img/svj3.jpeg">
    <img src="img/svj4.jpeg">
    <img src="img/svj5.jpg">
    <img src="img/nabu.jpg">
    <img src="img/nabu1.jpg">
    <img src="img/nabu2.jpg">
    </div>
            </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="bg">
         <img src="img/bg.jpg">
        </div>
    </div>
<footer>

</footer>
</body>
</html>
