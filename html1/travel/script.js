$(".menu>li").mouseover(function () {
	$(this).children(".submenu").stop().slideDown();
});
$(".menu>li").mouseleave(function () {
	$(this).children(".submenu").stop().slideUp();
});
//프로그래밍 언어
//변수;,함수,조건문,반복문,요리
//변수:임시로 보관하는 장소
//함수:실행해야할 문장의 조합들
//함수나 변수를 개발자가 원하는 형태로 조합하기 위해 필요함 if,for,
//라면을 끓인다 1~8번행위의 집합을 함수로 정의
//제목:나만의 필살 레시피 라면//->함수명
//1.물을 끓인다.
//2.펄펄끓는물에 스프를 먼저 넣는다.
//3.면을 넣는다.
//4.파,김치를 넣고 약2분간 계속 끓인다.-반복문
//5.면이 퍼지지 않게 젓가락으로 들었다 놨다를 열번 반복한다. -반복문
//6.계란을 터트리지 않고 넣는다.
//7.이쁜 그릇에 담는다.-변수//앞접시(변수)에다가 호호불며 면을 건져 먹는다.
//8.만약 싱거우면 고춧가루를 팍팍 뿌려 먹는다. -if 조건문
var cnt = 0;
start();
//함수를 만든다.
//이미지중에서 첫번쨰이미지의 현제요소들을
//슴겨버리는 함수를 만든다.
function start() {
	$(".imgs>img").eq(0).siblings().css("margin-left", "-2000px");
	//2초단위로 slide함수를 끊임없이 호출하겟다.
	setInterval(function () { slide(); }, 2000);
}
function slide() {
	cnt++;
	if(cnt ==5){
		cnt = 0;
	}
	$(".imgs>img").eq(cnt).siblings().css("margin-left","-2000px");
	$(".imgs>img").eq(cnt).css("margin-left","0px");
}
