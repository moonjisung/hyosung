var menu=true;
$(".menu1").click(function(){
	if(menu==true){
		$("header").css({"background-color":"#fff","color":"#000"});
		$(".submenulist1").stop().slideDown();
		$(".menuplus").css("display","none");
		$(".menuminus").css("display","block");
		menu=false;
	}else{
		$("header").css({"background-color":"#fff","color":"#000"});
		$(".submenulist1").stop().slideUp();
		$(".menuminus").css("display","none");
		$(".menuplus").css("display","block");
		menu=true;
	}
});
$(".menu2").click(function(){
	if(menu==true){
		$("header").css({"background-color":"#fff","color":"#000"});
		$(".submenulist2").stop().slideDown();
		$(".menuplus2").css("display","none");
		$(".menuminus2").css("display","block");
		menu=false;
	}else{
		$("header").css({"background-color":"#fff","color":"#000"});
		$(".submenulist2").stop().slideUp();
		$(".menuminus2").css("display","none");
		$(".menuplus2").css("display","block");
		menu=true;
	}
});
$(".menu3").click(function(){
	if(menu==true){
		$("header").css({"background-color":"#fff","color":"#000"});
		$(".submenulist3").stop().slideDown();
		$(".menuplus3").css("display","none");
		$(".menuminus3").css("display","block");
		menu=false;
	}else{
		$("header").css({"background-color":"#fff","color":"#000"});
		$(".submenulist3").stop().slideUp();
		$(".menuminus3").css("display","none");
		$(".menuplus3").css("display","block");
		menu=true;
	}
});
$(".menu4").click(function(){
	if(menu==true){
		$("header").css({"background-color":"#fff","color":"#000"});
		menu=false;
	}else{
		$("header").css({"background-color":"#fff","color":"#000"});
		menu=true;
	}
});

$(".menu>li").mouseover(function(){
		$(".submenu").stop().slideDown();
		$("header").css({"background-color":"#000","color":"#fff"});
});
$(".submenu").mouseleave(function(){
	$(".submenu").stop().slideUp();
	$("header").css({"background-color":"#fff","color":"#000"});
});

$(".gnb_menu").click(function(){
	$(".menu").animate({left:0});
	$(".gnb_close").fadeIn();
});
$(".gnb_close").click(function(){
	$(".menu").delay(300).animate({left:"-60%"});
	$(".gnb_close").fadeOut();
});

var imgs=4;
var now=0;
var play;
var previmgs;
var mode=true;
start();
function start(){
	$("#imgs").css({left:0});
	$("#imgbtn").children().eq(0).css({"background-color":"#fff"});
	previmgs=0;
	play=setInterval(function(){slide();},3000);
}

function slide(){
	if(imgs==now){
		now=0;
	}else{
		now++;
	}curr_slide(now);
}

function curr_slide(e){
	if(e==1){
		$("#imgs").animate({left:"-100%"});
		$("#imgbtn").children().eq(previmgs).css({"background-color":"rgba(0,0,0,0.7)"});
		$("#imgbtn").children().eq(1).css({"background-color":"rgba(255,255,255,0.7)"});
		previmgs=1;
	}else if(e==2){
		$("#imgs").animate({left:"-200%"});
		$("#imgbtn").children().eq(previmgs).css({"background-color":"rgba(0,0,0,0.7)"});
		$("#imgbtn").children().eq(2).css({"background-color":"rgba(255,255,255,0.7)"});
		previmgs=2;
	}else if(e==3){
		$("#imgs").animate({left:"-300%"});
		$("#imgbtn").children().eq(previmgs).css({"background-color":"rgba(0,0,0,0.7)"});
		$("#imgbtn").children().eq(3).css({"background-color":"rgba(255,255,255,0.7)"});
		previmgs=3;
	}else if(e==4){
		$("#imgs").animate({left:"-400%"});
		$("#imgbtn").children().eq(previmgs).css({"background-color":"rgba(0,0,0,0.7)"});
		$("#imgbtn").children().eq(4).css({"background-color":"rgba(255,255,255,0.7)"});
		previmgs=4;
	}else{
		$("#imgs").animate({left:0});
		$("#imgbtn").children().eq(previmgs).css({"background-color":"rgba(0,0,0,0.7)"});
		$("#imgbtn").children().eq(0).css({"background-color":"rgba(255,255,255,0.7)"});
		previmgs=0;
	}
}

$(".imgsprev").click(function(){
	if(now==0){
		now=4;
	}else{
		now--;
	}
	clearInterval(play);
	curr_slide(now);
	if(mode==true){
		play=setInterval(function(){slide();},3000);
	}
	previmgs=now;
});
$(".imgsnext").click(function(){
	if(imgs==now){
		now=0;
	}else{
		now++;
	}
	clearInterval(play);
	curr_slide(now);
	if(mode==true){
		play=setInterval(function(){slide();},3000);
	}
	previmgs=now;
});
$("#imgbtn>.dot").click(function(){
	now=$(this).index();
	clearInterval(play);
	curr_slide(now);
	if(mode==true){
		play=setInterval(function(){slide();},3000);
	}
	previmgs=now;
});

$(".eventimg>img").click(function(){
	$(".modal").fadeIn(1000);
});
$(".modalclose").click(function(){
	$(".modal").fadeOut(1000);
});

$(".bt1").mouseover(function(){
	$(".bt1").css({"background-color":"#000","color":"#fff"});
});
$(".bt1").mouseleave(function(){
	$(".bt1").css({"background-color":"#fff","color":"#000"});
});
$(".bt2").mouseover(function(){
	$(".bt2").css({"background-color":"#000","color":"#fff"});
});
$(".bt2").mouseleave(function(){
	$(".bt2").css({"background-color":"#fff","color":"#000"});
});
$(".bt3").mouseover(function(){
	$(".bt3").css({"background-color":"#000","color":"#fff"});
});
$(".bt3").mouseleave(function(){
	$(".bt3").css({"background-color":"#fff","color":"#000"});
});

function id_ok(){
	if(frmsign.id.value=="admin"){
		alert("아이디를 사용할수 없습니다.");
		frmsign.id.focus();
		return false;
	}
}

function sign(){
	if(frmsign.id.value==""){
		alert("아이디를 입력해주세요");
		frmsign.id.focus();
		return false;
	}
	if(frmsign.id.value=="admin"){
		alert("아이디를 사용할수 없습니다.");
		frmsign.id.focus();
		return false;
	}
	if(frmsign.pw.value.length<4){
		alert("비밀번호를 4자리 이상 입력해주세요");
		frmsign.pw.focus();
		return false;
	}
	if(frmsign.pw2.value==""){
		alert("비밀번호를 한번 더 입력해주세요");
		frmsign.pw2.focus();
		return false;
	}
	if(frmsign.pw2.value!=frmsign.pw.value){
		alert("비밀번호와 일치하지 않습니다"+"\n"+"다시 한번 확인해주세요");
		frmsign.pw2.focus();
		return false;
	}
	if(frmsign.name.value==""){
		alert("이름를 입력해주세요");
		frmsign.name.focus();
		return false;
	}
	if(frmsign.ageyy.value==""){
		alert("연도를 입력해주세요");
		frmsign.ageyy.focus();
		return false;
	}
	if(frmsign.agemm.value==""){
		alert("월을 입력해주세요");
		frmsign.agemm.focus();
		return false;
	}
	if(frmsign.agedd.value==""){
		alert("일을 입력해주세요");
		frmsign.agedd.focus();
		return false;
	}
	if(frmsign.email.value==""){
		alert("이메일을 입력해주세요");
		frmsign.email.focus();
		return false;
	}document.frmsign.submit();
}

function sett(){
	if(frmsett.pw.value.length<4){
		alert("비밀번호를 4자리 이상 입력해주세요");
		frmsett.pw.focus();
		return false;
	}
	if(frmsett.pw2.value==""){
		alert("비밀번호를 한번 더 입력해주세요");
		frmsett.pw2.focus();
		return false;
	}
	if(frmsett.pw2.value!=frmsett.pw.value){
		alert("비밀번호와 일치하지 않습니다"+"\n"+"다시 한번 확인해주세요");
		frmsett.pw2.focus();
		return false;
	}document.frmsett.submit();
}

function info(){
	if(confirm("회원탈퇴를 하시겠습니까?")){
		alert("회원탈퇴가 완료되었습니다.");
		document.frminfo.submit();
	}else{
		this.close();
	}
}

function find(){
	if(frmfind.name.value==""){
		alert("이름을 입력해주세요");
		frmfind.name.focus();
		return false;
	}
	if(frmfind.email.value==""){
		alert("이메일을 입력하세요");
		frmfind.email.focus();
		return false;
	}document.frmfind.submit();
}

function adminsett(){
	if(adminset.pw.value.length<4){
		alert("비밀번호를 4자리 이상 입력해주세요");
		adminset.pw.focus();
		return false;
	}
	if(adminset.pw2.value==""){
		alert("비밀번호를 한번 더 입력해주세요");
		adminset.pw2.focus();
		return false;
	}
	if(adminset.pw2.value!=adminset.pw.value){
		alert("비밀번호와 일치하지 않습니다"+"\n"+"다시 한번 확인해주세요");
		adminset.pw2.focus();
		return false;
	}document.adminset.submit();
}

$(window).scroll(function(){
	if($(this).scrollTop()>0){
		$(".quick").fadeIn(1000);
	}else{
		$(".quick").fadeOut(1000);
	}
});

$(".top").click(function(){
	$("body,html").animate({scrollTop:0},1000);
	return false;
});

var qna=true;
$(".plus1").click(function(){
	if(qna==true){
		$(".qna1").stop().slideDown();
		$(".plus1").css({"transform":"rotate(45deg)"});
		qna=false;
	}else{
		$(".qna1").stop().slideUp();
		$(".plus1").css({"transform":"rotate(0)"});
		qna=true;
	}
});
$(".plus2").click(function(){
	if(qna==true){
		$(".qna2").stop().slideDown();
		$(".plus2").css({"transform":"rotate(45deg)"});
		qna=false;
	}else{
		$(".qna2").stop().slideUp();
		$(".plus2").css({"transform":"rotate(0)"});
		qna=true;
	}
});
$(".plus3").click(function(){
	if(qna==true){
		$(".qna3").stop().slideDown();
		$(".plus3").css({"transform":"rotate(45deg)"});
		qna=false;
	}else{
		$(".qna3").stop().slideUp();
		$(".plus3").css({"transform":"rotate(0)"});
		qna=true;
	}
});
$(".plus4").click(function(){
	if(qna==true){
		$(".qna4").stop().slideDown();
		$(".plus4").css({"transform":"rotate(45deg)"});
		qna=false;
	}else{
		$(".qna4").stop().slideUp();
		$(".plus4").css({"transform":"rotate(0)"});
		qna=true;
	}
});

$(".menulist>li").mouseover(function(){
	$(this).children(".mainlist").stop().slideDown();
	$(this).children(".mainlist2").stop().slideDown();
});
$(".menulist>li").mouseleave(function(){
	$(this).children(".mainlist").stop().slideUp();
	$(this).children(".mainlist2").stop().slideUp();
});

var lalist=true;
$(".list2").click(function(){
	if(lalist==true){
		$(".mainlist").stop().slideDown();
		lalist=false;
	}else{
		$(".mainlist").stop().slideUp();
		lalist=true;
	}
});
$(".list3").click(function(){
	if(lalist==true){
		$(".mainlist2").stop().slideDown();
		lalist=false;
	}else{
		$(".mainlist2").stop().slideUp();
		lalist=true;
	}
});

$(".imgs2").css({"background-image":"url(imgs/la/1.jpg)","background-size":"cover"});
$(".subcon").children().eq(0).css("display","block");

$(".firstlist").click(function(){
	$(".imgs2").css({"background-image":"url(imgs/la/1.jpg)","background-size":"cover"});
	$(".subcon").children().eq(0).css("display","block");
	$(".subcon2").children().css("display","none");
	$(".subcon3").children().css("display","none");
});

$(".sublist").click(function(){
	$(".imgs2").css({"background-image":"url(imgs/la/jun.jpg)","background-size":"cover"});
	$(".sc").css("display","block");
	$(".sc2").css("display","none");
	$(".sc3").css("display","none");
	$(".sc4").css("display","none");
	$(".subcon").children().css("display","none");
	$(".subcon3").children().css("display","none");
});

$(".sublist2").click(function(){
	$(".imgs2").css({"background-image":"url(imgs/la/mu.jpg)","background-size":"cover"});
	$(".sc").css("display","none");
	$(".sc2").css("display","block");
	$(".sc3").css("display","none");
	$(".sc4").css("display","none");
	$(".subcon").children().css("display","none");
	$(".subcon3").children().css("display","none");
});

$(".sublist3").click(function(){
	$(".imgs2").css({"background-image":"url(imgs/la/hun.jpg)","background-size":"cover"});
	$(".sc").css("display","none");
	$(".sc2").css("display","none");
	$(".sc3").css("display","block");
	$(".sc4").css("display","none");
	$(".subcon").children().css("display","none");
	$(".subcon3").children().css("display","none");
});

$(".sublist4").click(function(){
	$(".imgs2").css({"background-image":"url(imgs/la/ma.jpg)","background-size":"cover"});
	$(".sc").css("display","none");
	$(".sc2").css("display","none");
	$(".sc3").css("display","none");
	$(".sc4").css("display","block");
	$(".subcon").children().css("display","none");
	$(".subcon3").children().css("display","none");
});

$(".sublist5").click(function(){
	$(".imgs2").css({"background-image":"url(imgs/la/raid.jpg)","background-size":"cover"});
	$(".sc5").css("display","block");
	$(".sc6").css("display","none");
	$(".sc7").css("display","none");
	$(".sc8").css("display","none");
	$(".subcon").children().css("display","none");
	$(".subcon2").children().css("display","none");
});

$(".sublist6").click(function(){
	$(".imgs2").css({"background-image":"url(imgs/la/sang.jpg)","background-size":"cover"});
	$(".sc5").css("display","none");
	$(".sc6").css("display","block");
	$(".sc7").css("display","none");
	$(".sc8").css("display","none");
	$(".subcon").children().css("display","none");
	$(".subcon2").children().css("display","none");
});

$(".sublist7").click(function(){
	$(".imgs2").css({"background-image":"url(imgs/la/hang.jpg)","background-size":"cover"});
	$(".sc5").css("display","none");
	$(".sc6").css("display","none");
	$(".sc7").css("display","block");
	$(".sc8").css("display","none");
	$(".subcon").children().css("display","none");
	$(".subcon2").children().css("display","none");
});

$(".sublist8").click(function(){
	$(".imgs2").css({"background-image":"url(imgs/la/su.jpg)","background-size":"cover"});
	$(".sc5").css("display","none");
	$(".sc6").css("display","none");
	$(".sc7").css("display","none");
	$(".sc8").css("display","block");
	$(".subcon").children().css("display","none");
	$(".subcon2").children().css("display","none");
});

$(".iconbt1_1").click(function(){
	$(".modal1_1").css("display","block");
});
$(".modalclose1_1").click(function(){
	$(".modal1_1").css("display","none");
});

$(".iconbt1_2").click(function(){
	$(".modal1_2").css("display","block");
});
$(".modalclose1_2").click(function(){
	$(".modal1_2").css("display","none");
});

$(".iconbt1_3").click(function(){
	$(".modal1_3").css("display","block");
});
$(".modalclose1_3").click(function(){
	$(".modal1_3").css("display","none");
});

$(".iconbt1_4").click(function(){
	$(".modal1_4").css("display","block");
});
$(".modalclose1_4").click(function(){
	$(".modal1_4").css("display","none");
});

$(".iconbt2_1").click(function(){
	$(".modal2_1").css("display","block");
});
$(".modalclose2_1").click(function(){
	$(".modal2_1").css("display","none");
});

$(".iconbt2_2").click(function(){
	$(".modal2_2").css("display","block");
});
$(".modalclose2_2").click(function(){
	$(".modal2_2").css("display","none");
});

$(".iconbt2_3").click(function(){
	$(".modal2_3").css("display","block");
});
$(".modalclose2_3").click(function(){
	$(".modal2_3").css("display","none");
});

$(".iconbt2_4").click(function(){
	$(".modal2_4").css("display","block");
});
$(".modalclose2_4").click(function(){
	$(".modal2_4").css("display","none");
});

$(".iconbt3_1").click(function(){
	$(".modal3_1").css("display","block");
});
$(".modalclose3_1").click(function(){
	$(".modal3_1").css("display","none");
});

$(".iconbt3_2").click(function(){
	$(".modal3_2").css("display","block");
});
$(".modalclose3_2").click(function(){
	$(".modal3_2").css("display","none");
});

$(".iconbt3_3").click(function(){
	$(".modal3_3").css("display","block");
});
$(".modalclose3_3").click(function(){
	$(".modal3_3").css("display","none");
});

$(".iconbt4_1").click(function(){
	$(".modal4_1").css("display","block");
});
$(".modalclose4_1").click(function(){
	$(".modal4_1").css("display","none");
});

$(".iconbt4_2").click(function(){
	$(".modal4_2").css("display","block");
});
$(".modalclose4_2").click(function(){
	$(".modal4_2").css("display","none");
});

$(".iconbt4_3").click(function(){
	$(".modal4_3").css("display","block");
});
$(".modalclose4_3").click(function(){
	$(".modal4_3").css("display","none");
});

$("#sang2").children().eq(0).css("display","block");
$("#sang>li").click(function(){
	var sangidx=$("#sang>li").index(this);
	$("#sang2").children().eq(sangidx).css("display","block");
	$("#sang2").children().eq(sangidx).siblings().css("display","none");
});

$("#hang2").children().eq(0).css("display","block");
$("#hang>li").click(function(){
	var hangidx=$("#hang>li").index(this);
	$("#hang2").children().eq(hangidx).css("display","block");
	$("#hang2").children().eq(hangidx).siblings().css("display","none");
});

$("#soojip2").children().eq(0).css("display","block");
$("#soojip>li").click(function(){
	var soojipidx=$("#soojip>li").index(this);
	$("#soojip2").children().eq(soojipidx).css("display","block");
	$("#soojip2").children().eq(soojipidx).siblings().css("display","none");
});

$(".bg2").children().eq(0).css("display","block");
$(".bg>li").click(function(){
	var bgidx=$(".bg>li").index(this);
	$(".bg2").children().eq(bgidx).css("display","block");
	$(".bg2").children().eq(bgidx).siblings().css("display","none");
});
