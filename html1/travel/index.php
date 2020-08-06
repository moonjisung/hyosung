<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="index.css">
	<script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
	<script src="script.js" defer="defer"></script>
</head>
<body>
	<header>
	<div class="logo"><a href="#">
		<img src="logo/logo.png"></a>
	</div>
	</header>
	<nav>
		<ul class="menu">
			<li><a href="#">여행 가이드 소개</a></li>
			<li><a href="#">국내 여행지</a>
			<ul class="submenu">
				<li>경기도/강원</li>
				<li>서울</li>
				<li>전라도</li>
				<li>개성</li>
				<li>서울</li>
			</ul>
			</li>
			<li><a href="#">해외 여행지</a>
			<ul class="submenu">
				<li>동남아</li>
				<li>유럽</li>
				<li>오세아니아</li>
				<li>북중미</li>
				<li>남태평양</li>
			</ul></li>
		</ul>
	</nav>
	<div id="wrap">
		<div id="imgslide">
			<div class="welcome">
				여행가이드에 오신것을 환영합니다.
			</div>
		<div class="imgs">
		<img src="images/slide/images(1).jpg">
		<img src="images/slide/images(2).jpg">
		<img src="images/slide/images(3).jpg">
		<img src="images/slide/images(4).jpg">
		<img src="images/slide/images(5).jpg">
		</div>
		<div id="content">
                <div class="notice">
                    <div class="title">
                        <img src="images/flight.png" width="20" height="20">
                        공지사항
                    </div>
                    <table class="table1">
                        <tr>
                            <th>제목</th>
                            <th>작성일</th>
                        </tr>
                        <tr>
                            <td>다대포 해안을 한바퀴 돌고나니 속이 뻥 뚫리는구나...</td>
                            <td>2019.5.25</td>
                        </tr>
                        <tr>
                            <td>해운대 해안을 한바퀴 돌고나니 속이 뻥 뚫리는구나...</td>
                            <td>2019.5.24</td>
                        </tr>
                        <tr>
                            <td>광안리 해안을 한바퀴 돌고나니 속이 뻥 뚫리는구나...</td>
                            <td>2019.5.23</td>
                        </tr>
                        <tr>
                            <td>이기대 해안을 한바퀴 돌고나니 속이 뻥 뚫리는구나...</td>
                            <td>2019.5.22</td>
                        </tr>
                        <tr>
                            <td>송정 해안을 한바퀴 돌고나니 속이 뻥 뚫리는구나...</td>
                            <td>2019.5.21</td>
                        </tr>
                    </table>
                </div>
                <div class="partner">
                    <div class="title">
                        <img src="images/flight.png" width="20" height="20">
                        정보나눔
					</div>
					<img src="images/partner/info.png">
				</div>
				<div class="clear"></div>
				<div class="bg">
					<img src="images/bg.png">
				</div>
				<div class="icons">
					<div class="imgbtn">
					<img src="images/icons/새소식.png">
					<input type="button" class="bt" value="새소식">
					</div>
					<div class="imgbtn">
					<img src="images/icons/여행음악.png">
					<input type="button" class="bt" value="여행음악">
					</div>
					<div class="imgbtn">
					<img src="images/icons/여행메뉴얼.png">
					<input type="button" class="bt" value="여행메뉴얼">
					</div>
				<div class="clear"></div>
				<br>
				<br>
				<p style="width:500px;text-align:left;color:#999;font-size:0.9em;
				margin-top:50px;">
					Copyright admin@test.com all rights reserved sine 2020
				</p>
				</div>
			</div>
	<footer>
		<div style="width: 1000px">
		<div class="foot_left">
			이메일 무단수집거부
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			개인정보 처리방침
		</div>
		<div class="foot_right">
			<p style="margin-top:10px;margin-left:70pxline-height:25px;">
			상호명:여행을 사랑하는 사람들(주)
			<br>
			대표자:홍길동
			<br>
			개인정보책임자:유관순
			<br>
			상담전화:1588-9000
			<br>
			주소:부산광역시 해운대구 우동 정릉빌딩 503호
		</p>
		</div>
		</div>
	</footer>
</body>
</html>