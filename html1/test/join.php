<script>
function send(){
if(frm1.id.value==""){
alert("아이디를 입력하세요");
frm1.id.focus();
return false;
}
if(frm1.id.value != frm1.hid.value){
  alert("아이디 중복체크를 해주세요");
  return false;
}
if(frm1.pw1.value ==""){
  alert("비밀번호를 입력해주세요");
  frm1.pw1.focus();
  return false;
}
if(frm1.pw2.value ==""){
  alert("비밀번호를 입력해주세요");
  frm1.pw2.focus();
  return false;
}
if(frm1.pw1.value != frm1.pw2.value){
  alert("비밀번호가 일치하지 않습니다.");
  frm1.pw1.focus();
  return false;
}
if(frm1.pw1.value != frm1.pw2.value){
  alert("비밀번호 불일치");
  frm1.pw1.select();
  return false;
}
if(frm1.name.value==""){
  alert("이름을 입력하세요");
  frm1.name.focus();
  return false;
}
if(frm1.hp1.value==""){
  alert("연락처1을 입력하세요");
  frm1.hp1.focus();
  return false;
}
if(frm1.hp2.value==""){
  alert("연락처2를 입력하세요");
  frm1.hp2.focus();
  return false;
}
if(frm1.hp3.value==""){
  alert("연락처3을 입력하세요");
  frm1.hp3.focus();
  return false;
}
document.frm1.submit();
}
  function idcheck(){
    if(frm1.id.value==""){
    alert("아이디를 입력하세요");
    frm1.id.focus();
    return false;
  }
    window.open("idcheck.php?id="+frm1.id.value,"frm1idcheck","width=400,height=150");
}
</script>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Luxury tea</title>
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="script.js" defer="defer"></script>
</head>
<body>
<header>
    <div class="logo"><a href="index.php">
        <img src="logo/22.jpg"></a>
    </div>
    <div class="topmenu">
        <?php if(isset($_SESSION["id"])) { ?>
    <a href="logout.php">로그아웃</a> |&nbsp;
    <a href="join.php">회원수정</a> |&nbsp;
    <a href="#">회원탈퇴</a>
        <?php }else{?>
    <a href="javascript:login()"><font class="d">Login</font></a> |&nbsp;
    <a href="login.php"><font class="d">Sign Up</font></a> |&nbsp;
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
<section>
<form name="frm1" action="join_ok.php" method="post">
  <br><br>
  <table class="table2" width="800px" height="600px">
    <tr>
      <td colspan="2" align="center">회원가입 양식</td>
    </tr>
    <tr>
      <td align="right">아이디</td>
      <td>
        <input type="text" name="id" size="10">&nbsp;
        <input type="hidden" name="hid">
        <input type="button" value="중복확인" class="bt" onclick="idcheck()" >
      </td>
    </tr>
    <tr>
    <td align="right">비밀번호</td>
    <td>
      <input type="password" name="pw1">
      <font color="">(6자리 이상 입력)</font>
    </td>
  </tr>
  <tr>
  <td align="right">비밀번호 확인</td>
  <td>
    <input type="password" name="pw2">
  </td>
</tr>
<tr>
  <td align="right">이름</td>
  <td>
    <input type="text" name="name">
  </td>
</tr>
<tr>
  <td align="right">연락처</td>
  <td>
    <input type="text" name="hp1" size="5" maxlength="3">-
    <input type="text" name="hp2" size="5" maxlength="4">-
    <input type="text" name="hp3" size="5" maxlength="4">
  </td>
</tr>
<tr>
  <td align="right">이메일</td>
  <td>
    <input type="text" name="email1" size="15">@
    <select name="email2">
      <option value="naver.com">naver.com</option>
      <option value="daum.net">daum.net</option>
      <option value="gmail.com">gmail.com</option>
      <option value="nate.com">nate.com</option>
      <option value="naver.com">naver.com</option>
    </select>
  </td>
</tr>
<tr>
  <td align="right">취미</td>
  <td class="f">
    <input type="checkbox" name="hoby1" value="여행">여행
    <input type="checkbox" name="hoby2" value="등산">등산
    <input type="checkbox" name="hoby3" value="드라이브">드라이브
    <input type="checkbox" name="hoby4" value="음악감상">음악감상
    <input type="checkbox" name="hoby5" value="영화시청">영화시청
  </td>
</tr>
<tr>
  <td colspan="2" align="center">
    <input type="button" value="가입완료" class="bt" onclick="send()">&nbsp;
    <input type="reset" value="새로작성" class="bt">
  </td>
</tr>
  </table>
</form>
</section>
<footer>

</footer>
</body>
</html>
