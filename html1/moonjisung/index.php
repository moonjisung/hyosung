<?php
include "dbconn.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer="defer"></script>
    <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
    <title></title>
    <script>
      function login(){
        window.open("login.php","로그인","width=400,height=200");
      }
    </script>
  </head>
  <body>
	<header>
		<div class="logo"><a href="index.php">MJ International</a></div>
		<ul class="menu">
			<li>
				회사소개
				<ul class="submenu">
					<li><a href="ceo.php">CEO 인사말</a></li>
					<li><a href="vision.php">비전</a></li>
					<li><a href="way.php">오시는 길</a></li>
				</ul>
			</li>
			<li>
				차소개
				<ul class="submenu">
					<li><img src="mark/lamborghini.png" class="mark"><div class="i"><a href="lam.php">&nbsp;&nbsp;Lamborghini</a></div></li>
					<li><img src="mark/bentley.png" class="mark"><div class="i"><a href="bentley.php"></a>&nbsp;&nbsp;Bentley</div></li>
          <li><img src="mark/rolls.png" class="mark"><div class="i"><a href="rolls.php"></a>&nbsp;&nbsp;Rolls-Royce</div></li>
          <li><img src="mark/maserati.png" class="mark"><div class="i"><a href="mase.php"></a>&nbsp;&nbsp;Maserati</div></li>
          <li><img src="mark/porsche.png" class="mark"><div class="i"><a href="porsche.php"></a>&nbsp;&nbsp;Porsche</div></li>
          <li><img src="mark/benz.png" class="mark"><div class="i"><a href="benz.php"></a>&nbsp;&nbsp;Benz</div></li>
          <li><img src="mark/ferrari.png" class="mark"><div class="i"><a href="ferrari.php"></a>&nbsp;&nbsp;Ferrari</div></li>
				</ul>
			</li>
			<li>
				커뮤니티
				<ul class="submenu">
					<li><a href="news.php">뉴스&공지</a></li>
					<li><a href="event.php">이벤트</a></li>
					<li><a href="qna.php">고객문의</a></li>
					<li><a href="board.php">게시판</a></li>
				</ul>
			</li>
			<li>
				<a href="Recruitment.php">채용안내</a>
			</li>
		</ul>

    <div class="login123">
      <?php
      if(isset($_SESSION["id"])) {
          echo "<a href='logout.php' class='login'>Logout</a>&nbsp;&nbsp;";
          echo "<a href='logout.php' class='login'>Membership</a>&nbsp;&nbsp;";
          echo "<a href='logout.php' class='login'>withdrwal</a>";
      ?>
    <?php }else {
      echo "<a href='javascript:login()' class='login'><font class='d'>Login</font></a>&nbsp;|&nbsp;";
      echo "<a href='join.php' class='login'><font class='d'>Sign Up</font></a>&nbsp;|&nbsp;";
      echo "<a href='search.php' class='login'><font class='d'>ID/PW Search</font></a>";
    } ?>
    </div>
</header>
<section>
  <div id="imgslide">
    <div class="imgs">
      <img src="imgs/maserati.jpg">
      <img src="imgs/rolls.jpg">
      <img src="imgs/amg.jpg">
      <img src="imgs/svj12.jpg">
      <img src="imgs/bentley1.jpg">
      <img src="imgs/porsche.jpg">

    </div>
    <div class="btn_prev">
      <a href="#">&#8249;</a>
    </div>
    <div class="btn_next">
      <a href="#">&#8250;</a>
    </div>
    <div id ="btnid"style="width: 120px; display: flex;"> <!-- flex를 주면 자식요소들을 수평으로 나란히 배치 -->
      <div class="btn_play">|  |</div>
      <div class="btn_stop">▶</div>
      <div id="btn_dot">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
  </div>
</section>
<article>
  <div class="s_menu">
    <div class="event">
      <div class="title">
        <a href="event.php"><img src="imgs/logo/elogo.png">이벤트</a>
      </div>
      <div class="eventmenu">
        <div class="event1">
          <a href="event1.php" class="eventimg"><img src="imgs/event/event1.png"></a>
          <p>신차 구매 혜택</p>
        </div>
        <div class="event1">
          <a href="event2.php" class="eventimg"><img src="imgs/event/event2.jpg"></a>
          <p>서비스 상품 안내</p>
        </div>
        <div class="event1">
          <a href="event3.php" class="eventimg"><img src="imgs/event/event3.jpg"></a>
          <p>시승기 이벤트</p>
        </div>
      </div>
    </div>
    <div class="notice">
      <div class="title">
        <a href="board.php"><img src="imgs/logo/glogo.png"> 게시판</a>
      </div>
      <table class="table1">
      <tr>
        <td>번호</td>
        <td>게시판명</td>
        <td>게시판유형</td>
        <td>게시판속성</td>
        <td>생성일</td>
        <td>사용여부</td>
      </tr>
      <tr>
        <td>1</td>
        <td>동호회 테스트</td>
        <td>일반게시판</td>
        <td>일반게시판</td>
        <td>2020-06-11</td>
        <td>사용</td>
      </tr>
      <tr>
        <td>2</td>
        <td>동호회 테스트</td>
        <td>일반게시판</td>
        <td>일반게시판</td>
        <td>2020-06-12</td>
        <td>사용</td>
      </tr>
      <tr>
        <td>3</td>
        <td>동호회 테스트</td>
        <td>일반게시판</td>
        <td>일반게시판</td>
        <td>2020-06-13</td>
        <td>사용안함</td>
      </tr>
      <tr>
        <td>4</td>
        <td>동호회 테스트</td>
        <td>일반게시판</td>
        <td>일반게시판</td>
        <td>2020-06-14</td>
        <td>사용</td>
      </tr>
      <tr>
        <td>5</td>
        <td>동호회 테스트</td>
        <td>일반게시판</td>
        <td>일반게시판</td>
        <td>2020-06-15</td>
        <td>사용안함</td>
      </tr>
      <tr>
        <td>6</td>
        <td>동호회 테스트</td>
        <td>일반게시판</td>
        <td>일반게시판</td>
        <td>2020-06-16</td>
        <td>사용</td>
      </tr>
      </table>
    </div>
  </div>
</article>
<div class="clear"></div>
  <div class="s_menu">
    <div class="notice">
      <div class="title">
        <a href="news.php" style="margin-left: 40px;"><img src="imgs/logo/nlogo.png" > 뉴스&공지</a>
      </div>
       <?php
    	$query="select * from notice order by no asc";
    	$rs=mysqli_query($conn,$query);
    	$cnt=mysqli_num_rows($rs);
    	?>
    	<br>
    	<table class="table">
    		<tr>
    			<td>글번호</td>
    			<td>제목</td>
    			<td>작성자</td>
    			<td>작성일</td>
    			<td>조회수</td>
    		</tr>
    		<?php
    		while($row=mysqli_fetch_array($rs)){
    		?>
    		<tr>
    			<td><?php echo $row["no"]?></td>
    			<td><a href="content.php?no=<?php echo $row["no"]?>">
    			<?php echo $row["title"]?></td>
    			<td><?php echo $row["writer"]?></td>
    			<td><?php echo $row["writeday"]?></td>
    			<td><?php echo $row["hit"]?></td>
    		</tr>
    	<?php }?>
      <?php if(isset($_SESSION["id"])) {
    		$query = "select level from member1 where id ='$_SESSION[id]'";
    		$rs2 = mysqli_query($conn,$query);
    		$row2 = mysqli_fetch_array($rs2);

    		if($row2["level"] == "ceo" || $row2["level"] == "manager"){
    	?>
    	<tr>
    		<td colspan="5" align="center">
    			<input type="button" value="공지추가"
    			class="bt" onclick="location.href='write.php'" style="cursor:pointer">
    		</td>
    	</tr>
    <?php }
    }?>
    </table>
    </div>
    <div class="partner">
      <div class="title"><a href="" style="cursor: default; margin-left: 40px;"><img src="imgs/logo/jlogo.png"> 제휴사이트</div></a>
      <a href="https://www.lamborghini.com/en-en/ownership/dealer-locator/lamborghini-seoul"><img src="imgs/Alliance/Alliance1.jpg"></a>
      <a href="https://seoul.bentleymotors.com/apac/ko/home"><img src="imgs/Alliance/Alliance2.jpg"></a>
      <a href="https://www.rolls-roycemotorcars-seoul.kr/?gclid=Cj0KCQjwirz3BRD_ARIsAImf7LNGQKRpE4IiTn1W53KAzBS0OX0njRJz7Vr6Vzoddy00G7pn0PS0DgAaAvWPEALw_wcB"><img src="imgs/Alliance/Alliance3.jpg"></a>
      <a href="https://www.maserati.com/kr/ko"><img src="imgs/Alliance/Alliance4.png"></a>
      <a href="https://www.porsche.com/korea/ko/"><img src="imgs/Alliance/Alliance5.jpg"></a>
      <a href="https://www.mercedes-benz.co.kr/passengercars.html?group=all&subgroup=see-all&view=BODYTYPE"><img src="imgs/Alliance/Alliance6.jpg"></a>
    </div>
  </div>
  <div id="inner">
    <div class="font"><font style="font-family:cursive; font-size:2em;">Interior</font></div>
    <div class="inner_pic">
    <div class="pic_big" ></div>
    <ul class="pic_small">
       <li><img src="imgs/inner/svj.jpg"></li>
       <li><img src="imgs/inner/svj0.jpg"></li>
       <li><img src="imgs/inner/svj1.jpg"></li>
       <li><img src="imgs/inner/svj2.png"></li>
       <li><img src="imgs/inner/svj3.jpg"></li>
    </ul>
</div>
  <div class="inner_pic1">
      <div class="pic_big1"></div>
      <ul class="pic_small1">
         <li><img src="imgs/inner/Rolls.jpg"></li>
         <li><img src="imgs/inner/Rolls0.jpg"></li>
         <li><img src="imgs/inner/Rolls1.jpg"></li>
         <li><img src="imgs/inner/Rolls2.jpg"></li>
         <li><img src="imgs/inner/Rolls3.jpg"></li>
      </ul>
    </div>
    <div class="inner_pic2">
        <div class="pic_big2"></div>
        <ul class="pic_small2">
           <li><img src="imgs/inner/bentley.jpg"></li>
           <li><img src="imgs/inner/bentley0.jpg"></li>
           <li><img src="imgs/inner/bentley1.jpg"></li>
           <li><img src="imgs/inner/bentley2.jpg"></li>
           <li><img src="imgs/inner/bentley3.jpg"></li>
        </ul>
      </div>
      <div class="inner_pic3">
          <div class="pic_big3"></div>
          <ul class="pic_small3">
             <li><img src="imgs/inner/maserati.jpg"></li>
             <li><img src="imgs/inner/maserati0.jpg"></li>
             <li><img src="imgs/inner/maserati1.jpg"></li>
             <li><img src="imgs/inner/maserati2.jpg"></li>
             <li><img src="imgs/inner/maserati3.jpg"></li>
          </ul>
        </div>
        <div class="inner_pic4">
            <div class="pic_big4"></div>
            <ul class="pic_small4">
               <li><img src="imgs/inner/panamera.jpg"></li>
               <li><img src="imgs/inner/panamera0.jpg"></li>
               <li><img src="imgs/inner/panamera1.png"></li>
               <li><img src="imgs/inner/panamera2.png"></li>
               <li><img src="imgs/inner/panamera3.jpg"></li>
            </ul>
          </div>
          <div class="inner_pic5">
              <div class="pic_big5"></div>
              <ul class="pic_small5">
                 <li><img src="imgs/inner/Benz.jpg"></li>
                 <li><img src="imgs/inner/Benz0.jpg"></li>
                 <li><img src="imgs/inner/Benz1.jpg"></li>
                 <li><img src="imgs/inner/Benz2.jpg"></li>
                 <li><img src="imgs/inner/Benz3.jpg"></li>
              </ul>
            </div>
  </div>
<footer>
  <div class="foottop">
    <a href="https://ko.wikipedia.org/wiki/%EA%B0%9C%EC%9D%B8%EC%A0%95%EB%B3%B4%EC%B2%98%EB%A6%AC%EB%B0%A9%EC%B9%A8"><font style="font-weight: bold;color: ivory;">개인정보처리방침</font></a>&nbsp;&nbsp;|&nbsp;
    <a href="https://ko.wikipedia.org/wiki/%EC%B2%AD%EC%86%8C%EB%85%84%EB%B3%B4%ED%98%B8%EC%A0%95%EC%B1%85">청소년 보호 정책</a>&nbsp;&nbsp;|&nbsp;
    <a href="qna.php">고객문의</a>&nbsp;&nbsp;|&nbsp;
    <a href="#">광고/제휴문의</a>
  </div>
  <div class="footmid">
    회사명 : ㈜MJ International&nbsp;&nbsp;|&nbsp;&nbsp;대표자 : 문지성&nbsp;&nbsp;|&nbsp;&nbsp;사업자 등록번호 : 222-22-222222<br>
    주소 : 부산시 해운대구 좌동 엘시티&nbsp;&nbsp;|&nbsp;&nbsp;E-mail : zpfhfh1537@naver.com&nbsp;&nbsp;|&nbsp;&nbsp;대표번호 : 010-5814-5341
    <br><br>
    Copyright &#169; All rights reserved.
  </div>
</footer>
  </body>
</html>
