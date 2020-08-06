<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="responsive.css">
  <script src="http://code.jquery.com/jquery-1.12.3.min.js" charset="utf-8"></script>
  <script src="responsive.js" defer="defer"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta charset="utf-8">
  <title></title>
  <script>
  function login(){
    // alert("");
    window.open("login.php","로그인","width=400,height=200");
  }
  </script>
</head>
<body>
  <div id="wrap">
    <header>
      <a href="#" class="logo">
        <h1>LOGO</h1>
      </a>
      <a href="#" class="gnb_menu"></a>
      <nav>
        <a href="#">MENU1</a>
        <a href="#">MENU2</a>
        <a href="#">MENU3</a>
        <a href="#">MENU4</a>
        <a href="#">MENU5</a>
        <a href="#">MENU6</a>
        <a href="#">MENU7</a>
        <a href="#">MENU8</a>
      </nav>
      <div class="login123">
        <?php
        if(isset($_SESSION["id"])) {
            echo "<a href='logout.php' class='login'>로그아웃</a>&nbsp;&nbsp;";
            echo "<a href='logout.php' class='login'>회원정보수정</a>&nbsp;&nbsp;";
            echo "<a href='logout.php' class='login'>회원탈퇴</a>";
        ?>
      <?php }else {
        echo "<a href='javascript:login()' class='login'>LOGIN</a>&nbsp;&nbsp;";
        echo "<a href='join.php' class='login'>JOIN</a>&nbsp;&nbsp;";
        echo "<a href='search.php' class='login'>ID/PW</a>";
      } ?>
      </div>
    </header>
    <section>
      <ul class="list">
        <li><a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.jpeg">
            </div>
            <div class="title">
              타이틀 제목1은 좀더 길게하자
            </div>
          </a>
        </li>
        <li><a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.jpeg">
            </div>
            <div class="title">
              타이틀 제목2
            </div>
          </a>
        </li>
        <li><a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.jpeg">
            </div>
            <div class="title">
              타이틀 제목3
            </div>
          </a>
        </li>
        <li><a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.jpeg">
            </div>
            <div class="title">
              타이틀 제목4
            </div>
          </a>
        </li>
        <li><a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.jpeg">
            </div>
            <div class="title">
              타이틀 제목5
            </div>
          </a>
        </li>
        <li><a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.jpeg">
            </div>
            <div class="title">
              타이틀 제목6
            </div>
          </a>
        </li>
        <li><a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.jpeg">
            </div>
            <div class="title">
              타이틀 제목7
            </div>
          </a>
        </li>
        <li><a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.jpeg">
            </div>
            <div class="title">
              타이틀 제목8
            </div>
          </a>
        </li>
        <li><a href="#" class="inner">
            <div class="thumb">
              <img src="thumb.jpeg">
            </div>
            <div class="title">
              타이틀 제목9
            </div>
          </a>
        </li>
      </ul>
    </section>
    <footer>
      Copyright &#169;shoppinggmaill.com All
      rights reserved since 2020 by web edior.
    </footer>
  </div>
</body>

</html>
