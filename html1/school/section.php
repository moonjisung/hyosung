<!DOCTYPE html>
<?php session_start();
?>
<script>
    function login(){
        window.open("login.php","login","width=400,height=150");
    }
</script>
<head>
    <link rel="stylesheet" href="section.css">
    <meta charset="UTF-8">
    <title>수업내용</title>
</head>
<body>
    <header>
    <div class="topmenu">
        <?php if(isset($_SESSION["id"])) { ?>
    <a href="logout.php">로그아웃</a> |&nbsp;
    <a href="join.php">회원수정</a> |&nbsp;
    <a href="#">회원탈퇴</a>
        <?php }else{?>
    <a href="javascript:login()">Login</a> |&nbsp;
    <a href="join.php">Sign Up</a> |&nbsp;
    <a href="#">ID/PW 찾기</a>
        <?php } ?>
    </div>
    </header>
    <section>
        <?php if(isset($_SESSION["id"])) { ?>
        <input type="button" value="추가하기" onclick="" class="bt">
        <?php }?>
    </section>
</body>
</html>