$(".menu>li").mouseover(function(){
	$("#submenu").stop().slideDown();
});
$("#submenu").mouseleave(function(){
	$(this).stop().slideUp();
});

$(".inq").mouseover(function(){
	$(".inq_back").stop().slideDown();
});
$(".inq").mouseleave(function(){
	$(".inq_back").stop().slideUp();
});

//index.php 스크롤!
$(window).scroll(function(){
	if($(this).scrollTop()>0){
		$("header").css({"background-color":"black"});
		$(".top_btn").fadeIn(300);
	}else{
		$("header").css({"background-color":"transparent"});
		$(".top_btn").fadeOut(300);
	}
	if($(this).scrollTop()>350){
		$(".f1").fadeIn(400);
		$(".f1").css("top", 0);
	}
	if($(this).scrollTop()>1200){
		$(".imgslide2_btn_prev").fadeIn();
		$(".imgslide2_btn_prev").css("top", "55%");
		$(".imgslide2_btn_next").fadeIn();
		$(".imgslide2_btn_next").css("top", "55%");
	}
	if($(this).scrollTop()>2020){
		$(".index_suc>img").fadeIn();
		$(".index_suc").css("top","33%");
	}
	if($(this).scrollTop()>2300){
		$(".hard_img>img").fadeIn();
	}
	if($(this).scrollTop()>2600){
		$(".hard_text").fadeIn();
		$(".hard_text").css("right", 0);
		$(".hard_text").css("bottom", 0);
	}
	if($(this).scrollTop()>3250){
		$(".sys1").fadeIn();
		$(".sys1").css("top", 0);
	}
	if($(this).scrollTop()>3850){
		$(".pro3_box1").fadeIn();
		$(".pro3_box2").fadeIn();
		$(".pro3_box3").fadeIn();
		$(".pro3_box1").css("top",0);
		$(".pro3_box2").css("top",0);
		$(".pro3_box3").css("top",0);
	}
	if($(this).scrollTop()>4480){
		$(".idx_smart").fadeIn();
		$(".idx_smart").css("top",0);
	}
	if($(this).scrollTop()>4700){
		$(".sm_2").fadeIn();
		$(".sm_2").css("top",5);
	}
});

//story.php 스크롤!
$(window).scroll(function(){
	if($(this).scrollTop()>550){
		$(".imgs_br").fadeIn();
		$(".imgs_br").css("top","40%");
	}
	if($(this).scrollTop()>1550){
		$(".suc_img1").fadeIn();
		$(".suc_img1").css("top","0%");

		$(".suc_img2").css({"opacity":"1"}); // 딜레이로 위치조정은 css 안 먹는구나!
		$(".suc_img2").delay(400).animate({"top":"0%"}); // 딜레이로 위치조정은 css 안 먹는구나!

		$(".suc_img3").css({"opacity":"1"}); // 딜레이로 위치조정은 css 안 먹는구나!
		$(".suc_img3").delay(800).animate({"top":"0%"}); // 딜레이로 위치조정은 css 안 먹는구나!

		$(".suc_img4").css({"opacity":"1"}); // 딜레이로 위치조정은 css 안 먹는구나!
		$(".suc_img4").delay(1200).animate({"top":"0%"}); // 딜레이로 위치조정은 css 안 먹는구나!
	}
	if($(this).scrollTop()>2560){
		$(".st_per3").fadeIn();
		$(".st_per3").css("top","0%");
	}
});
//vision.php 스크롤!
$(window).scroll(function(){
	if($(this).scrollTop()>880){
		$(".vision_img>img").fadeIn();
		$(".vision_img>img").css("top","0%");
	}
	if($(this).scrollTop()>1800){
		$(".vi_con2_img_back>img").fadeIn();
		$(".vi_con2_img_back>img").css("top","0%");
	}
});

//location.php 스크롤!
$(window).scroll(function(){
	if($(this).scrollTop()>450){
		$(".lo4>img").fadeIn();
		$(".lo4>img").css("top","0%");
	}
	if($(this).scrollTop()>2250){
		$(".l_bot").css("opacity","1");
		$(".l_bot").css("top","0%");
	}
});
//feature.php 스크롤!
$(window).scroll(function(){
	if($(this).scrollTop()>1750){
		$(".fe_con3_img_back>img").fadeIn();
		$(".fe_con3_img_back>img").css("top","0%");
	}
});
//space.php 스크롤!
$(window).scroll(function(){
	if($(this).scrollTop()>450){
		$(".sp_img1").fadeIn();
		$(".sp_img2").delay(300).fadeIn();
		$(".sp_img3").delay(600).fadeIn();
		$(".sp_img4").delay(900).fadeIn();
	}
});
//facility.php 스크롤!
$(window).scroll(function(){
	if($(this).scrollTop()>250){
		$(".fa_table_1_img").fadeIn();
		$(".fa_table_1_img").css("top","0%");
	}
	if($(this).scrollTop()>550){
		$(".fa_table_1_img2").fadeIn();
		$(".fa_table_1_img2").css("top","15%");
	}
	if($(this).scrollTop()>550){
		$(".fa_table_1_img2").fadeIn();
		$(".fa_table_1_img2").css("top","15%");
	}
	if($(this).scrollTop()>1150){
		$(".fa_table_1_img3").fadeIn();
		$(".fa_table_1_img4").delay(400).fadeIn();
		$(".fa_table_1_img5").delay(800).fadeIn();
	}
	if($(this).scrollTop()>1750){
		$(".fa_table_1_img6").fadeIn();
		$(".fa_table_1_img6").css("top","55%");
	}
	if($(this).scrollTop()>2250){
		$(".fa_table_1_img7").fadeIn();
		$(".fa_table_1_img7").css("top","68%");
	}
	if($(this).scrollTop()>2650){
		$(".fa_table_1_img8").fadeIn();
		$(".fa_table_1_img8").css("top","83%");
	}
});
// reason.php
$(window).scroll(function(){
	if($(this).scrollTop()>600){
		$(".re_img_wrap").fadeIn();
		$(".re_img_wrap").css("top","0%");
	}
});
$(".an_img_wrap").mouseover(function(){
	$(".an_top").css("left","100%");
	$(".an_bottom").css("left","-100%");
});
$(".an_img_wrap").mouseleave(function(){
	$(".an_top").css("left","-100%");
	$(".an_bottom").css("left","100%");
});
// analysis.php
$(window).scroll(function(){
	if($(this).scrollTop()>1450){
		$(".an_con2_s>li").eq(0).animate({"opacity":"1"});
		$(".an_con2_s>li").delay(500).eq(2).animate({"opacity":"1"});
		$(".an_con2_s>li").delay(1000).eq(4).animate({"opacity":"1"});

		$(".an_con2_s1>li").delay(500).eq(0).animate({"opacity":"1"});
		$(".an_con2_s1>li").delay(1000).eq(2).animate({"opacity":"1"});
		$(".an_con2_s1>li").delay(1000).eq(4).animate({"opacity":"1"});
	}
});
// edu.php
$(window).scroll(function(){
	if($(this).scrollTop()>300){
		$(".ed_lec1_2").fadeIn();
		$(".ed_lec1_2").css("top","0%");
	}
});



//	if($(this).scrollTop()>1700){}

$(".top_btn").click(function(){
	$("body, html").animate({scrollTop: 0}, 500);
});

$(".f1>div").mouseover(function(){
	$(".f1_top").css("display","block");
	$(".f1_right").css("display","block");
	$(".f1_bottom").css("display","block");
	$(".f1_left").css("display","block");
	$(this).children(".f1_top").css({"left":450}); // animate는 무조건 중괄호로 써야한다!
	$(this).children(".f1_right").css({"top":-450});
	$(this).children(".f1_bottom").css({"left":-450});
	$(this).children(".f1_left").css({"top":450});
});
$(".f1>div").mouseleave(function(){
	$(this).children(".f1_top").css({"left":-450,"display":"none"});
	$(this).children(".f1_right").css({"top":450,"display":"none"});
	$(this).children(".f1_bottom").css({"left":450,"display":"none"});
	$(this).children(".f1_left").css({"top":-450,"display":"none"});
});

var imgs=3;
var now=0;
var previndex=0;
var play;
start();
function start(){
	$(".imgs img").eq(0).css({"left":-3376});
	$(".imgs img").eq(1).css({"left":-1688});
	$(".imgs img").eq(2).css({"left":0});
	$(".imgs img").eq(3).css({"left":1688});

	$(".imgs_btn").children().eq(0).css({"background-color":"#ce9218"});

	$(".main_text1").css("top",0);
	play=setInterval(function(){slide();}, 4000);
}

$(".imgs_prev").click(function(){
	if(now==0){
		now=3;
	}else{
		now--;
	}
	clearInterval(play);
	curr_slide(now);
	previndex=now;
	play=setInterval(function(){slide();}, 4000);
});
$(".imgs_next").click(function(){
	if(now==imgs){
		now=0;
	}else{
		now++;
	}
	clearInterval(play);
	curr_slide(now);
	previndex=now;
	play=setInterval(function(){slide();}, 4000);
});

$(".imgs_btn1").click(function(){
	now=$(this).index();
	clearInterval(play);
	curr_slide(now);
	previndex=now;
	play=setInterval(function(){slide();}, 4000);
});

function slide(){
	if(now==imgs){
		now=0;
	}else{
		now=now+1;
	}
	curr_slide(now);
}

function curr_slide(e){
	if(e==1){
		$(".imgs img").eq(1).css({"left":-3376,"display":"none"});
		$(".imgs img").eq(2).css({"left":-1688,"display":"block"});
		$(".imgs img").eq(3).css({"left":0,"display":"block"});
		$(".imgs img").eq(0).css({"left":1688,"display":"block"});

		$(".imgs_btn").children().eq(previndex).css({"background-color":"#bbb19e"});
		$(".imgs_btn").children().eq(1).css({"background-color":"#ce9218"});

		$(".main_text4").css({"top":-250,"display":"none"});
		$(".main_text1").css({"top":250,"display":"block"});
		$(".main_text2").css({"top":0,"display":"block"});
		$(".main_text3").css({"display":"block"});
		$(".main_text3").css({"top":-250});

		previndex=1;
	}else if(e==2){
		$(".imgs img").eq(2).css({"left":-3376,"display":"none"});
		$(".imgs img").eq(3).css({"left":-1688,"display":"block"});
		$(".imgs img").eq(0).css({"left":0,"display":"block"});
		$(".imgs img").eq(1).css({"left":1688,"display":"block"});

		$(".imgs_btn").children().eq(previndex).css({"background-color":"#bbb19e"});
		$(".imgs_btn").children().eq(2).css({"background-color":"#ce9218"});

		$(".main_text1").css({"top":-250,"display":"none"});
		$(".main_text2").css({"top":250,"display":"block"});
		$(".main_text3").css({"top":0,"display":"block"});
		$(".main_text4").css({"display":"block"});
		$(".main_text4").css({"top":-250});

		previndex=2;
	}else if(e==3){
		$(".imgs img").eq(3).css({"left":-3376,"display":"none"});
		$(".imgs img").eq(0).css({"left":-1688,"display":"block"});
		$(".imgs img").eq(1).css({"left":0,"display":"block"});
		$(".imgs img").eq(2).css({"left":1688,"display":"block"});

		$(".imgs_btn").children().eq(previndex).css({"background-color":"#bbb19e"});
		$(".imgs_btn").children().eq(3).css({"background-color":"#ce9218"});

		$(".main_text2").css({"top":-250,"display":"none"});
		$(".main_text3").css({"top":250,"display":"block"});
		$(".main_text4").css({"top":0,"display":"block"});
		$(".main_text1").css({"display":"block"});
		$(".main_text1").css({"top":-250});

		previndex=3;
	}else{
		$(".imgs img").eq(0).css({"left":-3376,"display":"none"});
		$(".imgs img").eq(1).css({"left":-1688,"display":"block"});
		$(".imgs img").eq(2).css({"left":0,"display":"block"});
		$(".imgs img").eq(3).css({"left":1688,"display":"block"});

		$(".imgs_btn").children().eq(previndex).css({"background-color":"#bbb19e"});
		$(".imgs_btn").children().eq(0).css({"background-color":"#ce9218"});

		$(".main_text3").css({"top":-250,"display":"none"});
		$(".main_text4").css({"top":250,"display":"block"});
		$(".main_text1").css({"top":0,"display":"block"});
		$(".main_text2").css({"display":"block"});
		$(".main_text2").css({"top":-250});

		previndex=0;
	}
}

start2();
var now2=0;
var imgs2=2;
var img2_play;
function start2(){
	$(".imgs2 img").eq(0).fadeIn(300);
	img2_play=setInterval(function(){slide2();}, 3000);
}
function slide2(){
	if(now2==imgs2){
		now2=0;
	}else{
		now2=now2+1;
	}
	curr_slide2(now2);
}
function curr_slide2(e){
	if(e==1){
		$(".imgs2 img").eq(1).fadeIn(300);
		$(".imgs2 img").eq(1).siblings().fadeOut(300);
	}else if(e==2){
		$(".imgs2 img").eq(2).fadeIn(300);
		$(".imgs2 img").eq(2).siblings().fadeOut(300);
	}else{
		$(".imgs2 img").eq(0).fadeIn(300);
		$(".imgs2 img").eq(0).siblings().fadeOut(300);
	}
}
$(".imgslide2_btn_prev").click(function(){
	clearInterval(img2_play);
	if(now2==0){
		now2=2;
	}else{
		now2=now2-1;
	}
	curr_slide2(now2);
	img2_play=setInterval(function(){slide2();}, 3000);
});
$(".imgslide2_btn_next").click(function(){
	clearInterval(img2_play);
	if(now2==imgs2){
		now2=0;
	}else{
		now2=now2+1;
	}
	curr_slide2(now2);
	img2_play=setInterval(function(){slide2();}, 3000);
});



$(".fe_m1>li").click(function(){
	clearInterval(fea_play);
	fea_now=$(this).index();
	fea_curr(fea_now);
	fea_play=setInterval(function(){fea_slide();}, 3000);
});

var fea_cnt=3;
var fea_now=0;
var	fea_play;
fea_start();
function fea_start(){
	$(".fe_m1>li").eq(0).css("background-color","#c1a161");
	$(".fe_m1>li").eq(0).siblings().css("background-color","transparent");

	$(".fe_con2_1").stop().fadeIn();
	fea_play=setInterval(function(){fea_slide();}, 3000);
}
function fea_slide(){
	if(fea_now==fea_cnt){
		fea_now=0;
	}else{
		fea_now++;
	}
	fea_curr(fea_now);
}
function fea_curr(e){
	if(e==1){
		$(".fe_con2_2").stop().fadeIn();
		$(".fe_con2_1").stop().fadeOut();
		$(".fe_con2_3").stop().fadeOut();
		$(".fe_con2_4").stop().fadeOut();

		$(".fe_m1>li").eq(e).css("background-color","#c1a161");
		$(".fe_m1>li").eq(e).siblings().css("background-color","transparent");
	}else if(e==2){
		$(".fe_con2_3").stop().fadeIn();
		$(".fe_con2_1").stop().fadeOut();
		$(".fe_con2_2").stop().fadeOut();
		$(".fe_con2_4").stop().fadeOut();

		$(".fe_m1>li").eq(e).css("background-color","#c1a161");
		$(".fe_m1>li").eq(e).siblings().css("background-color","transparent");
	}else if(e==3){
		$(".fe_con2_4").stop().fadeIn();
		$(".fe_con2_1").stop().fadeOut();
		$(".fe_con2_2").stop().fadeOut();
		$(".fe_con2_3").stop().fadeOut();

		$(".fe_m1>li").eq(e).css("background-color","#c1a161");
		$(".fe_m1>li").eq(e).siblings().css("background-color","transparent");
	}else{
		$(".fe_con2_1").stop().fadeIn();
		$(".fe_con2_2").stop().fadeOut();
		$(".fe_con2_3").stop().fadeOut();
		$(".fe_con2_4").stop().fadeOut();

		$(".fe_m1>li").eq(e).css("background-color","#c1a161");
		$(".fe_m1>li").eq(e).siblings().css("background-color","transparent");
	}
}

//edu.php
var ed_now=0;
var ed_icons=4;
var ed_play;
var ed_ball=false;//전역변수 위치 중요함!

$(".ed_next_btn").click(function(){
	$(".ed_play_btn>img").css('animation-play-state','running'); //이상하게 변수값은 갱신되도 이 효과는 직접 줘야하네!
	ed_ball=false;
	clearInterval(ed_play);
	if(ed_now==ed_icons){
		ed_now=0;
	}else{
		ed_now++;
	}
	ed_curr(ed_now);
	ed_play=setInterval(function(){ed_slide();}, 5000);
});
$(".ed_prev_btn").click(function(){
	$(".ed_play_btn>img").css('animation-play-state','running');
	ed_ball=false;
	clearInterval(ed_play);
	if(ed_now==0){
		ed_now=4;
	}else{
		ed_now--;
	}
	ed_curr(ed_now);
	ed_play=setInterval(function(){ed_slide();}, 5000);
});

$(".ed_play_btn>img").click(function(){
	if(ed_ball==false){
		$(this).css('animation-play-state','paused');// 움직이던 css효과를 멈추는 문법 그 자체로 암기!
		ed_ball=true;
		clearInterval(ed_play);
	}else{
		$(this).css('animation-play-state','running');// 움직이던 css효과를 움직이는 문법 그 자체로 암기!
		ed_ball=false;
		ed_play=setInterval(function(){ed_slide();}, 5000);
	}
});

ed_start();
function ed_start(){
	$(".ed_script1>li").eq(0).css("left", 0);
	$(".ed_script1>li").eq(1).css("left", 200);
	$(".ed_script1>li").eq(2).css("left", 400);
	$(".ed_script1>li").eq(3).css("left", 600);
	$(".ed_script1>li").eq(4).css("left", 800);

	$(".ed_con3").css("display","block");

	ed_play=setInterval(function(){ed_slide();}, 5000);
}
function ed_slide(){
	if(ed_now==ed_icons){
		ed_now=0;
	}else{
		ed_now++;
	}
	ed_curr(ed_now);
}
function ed_curr(e){
	if(e==1){
		$(".ed_script1>li").eq(1).css("left", 0);
		$(".ed_script1>li").eq(2).css("left", 200);
		$(".ed_script1>li").eq(3).css("left", 400);
		$(".ed_script1>li").eq(4).css("left", 600);
		$(".ed_script1>li").eq(0).css("left", 800);

		$(".ed_con1").css("display","none");
		$(".ed_con2").css("display","none");
		$(".ed_con3").css("display","none");
		$(".ed_con4").css("display","block");
		$(".ed_con5").css("display","none");
	}else if(e==2){
		$(".ed_script1>li").eq(2).css("left", 0);
		$(".ed_script1>li").eq(3).css("left", 200);
		$(".ed_script1>li").eq(4).css("left", 400);
		$(".ed_script1>li").eq(0).css("left", 600);
		$(".ed_script1>li").eq(1).css("left", 800);

		$(".ed_con1").css("display","none");
		$(".ed_con2").css("display","none");
		$(".ed_con3").css("display","none");
		$(".ed_con4").css("display","none");
		$(".ed_con5").css("display","block");

	}else if(e==3){
		$(".ed_script1>li").eq(3).css("left", 0);
		$(".ed_script1>li").eq(4).css("left", 200);
		$(".ed_script1>li").eq(0).css("left", 400);
		$(".ed_script1>li").eq(1).css("left", 600);
		$(".ed_script1>li").eq(2).css("left", 800);

		$(".ed_con1").css("display","block");
		$(".ed_con2").css("display","none");
		$(".ed_con3").css("display","none");
		$(".ed_con4").css("display","none");
		$(".ed_con5").css("display","none");
	}else if(e==4){
		$(".ed_script1>li").eq(4).css("left", 0);
		$(".ed_script1>li").eq(0).css("left", 200);
		$(".ed_script1>li").eq(1).css("left", 400);
		$(".ed_script1>li").eq(2).css("left", 600);
		$(".ed_script1>li").eq(3).css("left", 800);

		$(".ed_con1").css("display","none");
		$(".ed_con2").css("display","block");
		$(".ed_con3").css("display","none");
		$(".ed_con4").css("display","none");
		$(".ed_con5").css("display","none");
	}else{
		$(".ed_script1>li").eq(0).css("left", 0);
		$(".ed_script1>li").eq(1).css("left", 200);
		$(".ed_script1>li").eq(2).css("left", 400);
		$(".ed_script1>li").eq(3).css("left", 600);
		$(".ed_script1>li").eq(4).css("left", 800);

		$(".ed_con1").css("display","none");
		$(".ed_con2").css("display","none");
		$(".ed_con3").css("display","block");
		$(".ed_con4").css("display","none");
		$(".ed_con5").css("display","none");
	}
}

var es_btn1=false;
var es_btn2=false;
var es_btn3=false;
var es_btn4=false;
var es_btn5=false;
var es_btn6=false;
var es_btn7=false;

$(".es_q>li").eq(0).click(function(){
	if(es_btn1==false){
		$(this).children(".es_a1").stop().slideDown();
		es_btn1=true;

		$(".es_q>li").eq(1).children(".es_a1").stop().slideUp();
		es_btn2=false;
		$(".es_q>li").eq(2).children(".es_a1").stop().slideUp();
		es_btn3=false;
		$(".es_q>li").eq(3).children(".es_a1").stop().slideUp();
		es_btn4=false;
		$(".es_q>li").eq(4).children(".es_a1").stop().slideUp();
		es_btn5=false;
		$(".es_q>li").eq(5).children(".es_a1").stop().slideUp();
		es_btn6=false;
		$(".es_q>li").eq(6).children(".es_a1").stop().slideUp();
		es_btn7=false;
	}else{
		$(this).children(".es_a1").stop().slideUp();
		es_btn1=false;
	}
});
$(".es_q>li").eq(1).click(function(){
	if(es_btn2==false){
		$(this).children(".es_a1").stop().slideDown();
		es_btn2=true;

		$(".es_q>li").eq(0).children(".es_a1").stop().slideUp();
		es_btn1=false;
		$(".es_q>li").eq(2).children(".es_a1").stop().slideUp();
		es_btn3=false;
		$(".es_q>li").eq(3).children(".es_a1").stop().slideUp();
		es_btn4=false;
		$(".es_q>li").eq(4).children(".es_a1").stop().slideUp();
		es_btn5=false;
		$(".es_q>li").eq(5).children(".es_a1").stop().slideUp();
		es_btn6=false;
		$(".es_q>li").eq(6).children(".es_a1").stop().slideUp();
		es_btn7=false;
	}else{
		$(this).children(".es_a1").stop().slideUp();
		es_btn2=false;
	}
});
$(".es_q>li").eq(2).click(function(){
	if(es_btn3==false){
		$(this).children(".es_a1").stop().slideDown();
		es_btn3=true;

		$(".es_q>li").eq(0).children(".es_a1").stop().slideUp();
		es_btn1=false;
		$(".es_q>li").eq(1).children(".es_a1").stop().slideUp();
		es_btn2=false;
		$(".es_q>li").eq(3).children(".es_a1").stop().slideUp();
		es_btn4=false;
		$(".es_q>li").eq(4).children(".es_a1").stop().slideUp();
		es_btn5=false;
		$(".es_q>li").eq(5).children(".es_a1").stop().slideUp();
		es_btn6=false;
		$(".es_q>li").eq(6).children(".es_a1").stop().slideUp();
		es_btn7=false;
	}else{
		$(this).children(".es_a1").stop().slideUp();
		es_btn3=false;
	}
});
$(".es_q>li").eq(3).click(function(){
	if(es_btn4==false){
		$(this).children(".es_a1").stop().slideDown();
		es_btn4=true;

		$(".es_q>li").eq(0).children(".es_a1").stop().slideUp();
		es_btn1=false;
		$(".es_q>li").eq(1).children(".es_a1").stop().slideUp();
		es_btn2=false;
		$(".es_q>li").eq(2).children(".es_a1").stop().slideUp();
		es_btn3=false;
		$(".es_q>li").eq(4).children(".es_a1").stop().slideUp();
		es_btn5=false;
		$(".es_q>li").eq(5).children(".es_a1").stop().slideUp();
		es_btn6=false;
		$(".es_q>li").eq(6).children(".es_a1").stop().slideUp();
		es_btn7=false;
	}else{
		$(this).children(".es_a1").stop().slideUp();
		es_btn4=false;
	}
});
$(".es_q>li").eq(4).click(function(){
	if(es_btn5==false){
		$(this).children(".es_a1").stop().slideDown();
		es_btn5=true;

		$(".es_q>li").eq(0).children(".es_a1").stop().slideUp();
		es_btn1=false;
		$(".es_q>li").eq(1).children(".es_a1").stop().slideUp();
		es_btn2=false;
		$(".es_q>li").eq(2).children(".es_a1").stop().slideUp();
		es_btn3=false;
		$(".es_q>li").eq(3).children(".es_a1").stop().slideUp();
		es_btn4=false;
		$(".es_q>li").eq(5).children(".es_a1").stop().slideUp();
		es_btn6=false;
		$(".es_q>li").eq(6).children(".es_a1").stop().slideUp();
		es_btn7=false;
	}else{
		$(this).children(".es_a1").stop().slideUp();
		es_btn5=false;
	}
});
$(".es_q>li").eq(5).click(function(){
	if(es_btn6==false){
		$(this).children(".es_a1").stop().slideDown();
		es_btn6=true;

		$(".es_q>li").eq(0).children(".es_a1").stop().slideUp();
		es_btn1=false;
		$(".es_q>li").eq(1).children(".es_a1").stop().slideUp();
		es_btn2=false;
		$(".es_q>li").eq(2).children(".es_a1").stop().slideUp();
		es_btn3=false;
		$(".es_q>li").eq(3).children(".es_a1").stop().slideUp();
		es_btn4=false;
		$(".es_q>li").eq(4).children(".es_a1").stop().slideUp();
		es_btn5=false;
		$(".es_q>li").eq(6).children(".es_a1").stop().slideUp();
		es_btn7=false;
	}else{
		$(this).children(".es_a1").stop().slideUp();
		es_btn6=false;
	}
});
$(".es_q>li").eq(6).click(function(){
	if(es_btn7==false){
		$(this).children(".es_a1").stop().slideDown();
		es_btn7=true;

		$(".es_q>li").eq(0).children(".es_a1").stop().slideUp();
		es_btn1=false;
		$(".es_q>li").eq(1).children(".es_a1").stop().slideUp();
		es_btn2=false;
		$(".es_q>li").eq(2).children(".es_a1").stop().slideUp();
		es_btn3=false;
		$(".es_q>li").eq(3).children(".es_a1").stop().slideUp();
		es_btn4=false;
		$(".es_q>li").eq(4).children(".es_a1").stop().slideUp();
		es_btn5=false;
		$(".es_q>li").eq(5).children(".es_a1").stop().slideUp();
		es_btn6=false;
	}else{
		$(this).children(".es_a1").stop().slideUp();
		es_btn7=false;
	}
});

// branch_content
var conli;
$(".br_con2>li").click(function(){
	$("#br_modal").fadeIn(0);
	conli=$(this).index();
	if(conli==0){
		$(".big_img2").fadeIn(0);

		$(".big_img3").fadeOut(0);
		$(".big_img4").fadeOut(0);
		$(".big_img5").fadeOut(0);
		$(".big_img6").fadeOut(0);
	}else if(conli==1){
		$(".big_img3").fadeIn(0);

		$(".big_img2").fadeOut(0);
		$(".big_img4").fadeOut(0);
		$(".big_img5").fadeOut(0);
		$(".big_img6").fadeOut(0);
	}else if(conli==2){
		$(".big_img4").fadeIn(0);

		$(".big_img2").fadeOut(0);
		$(".big_img3").fadeOut(0);
		$(".big_img5").fadeOut(0);
		$(".big_img6").fadeOut(0);
	}else if(conli==3){
		$(".big_img5").fadeIn(0);

		$(".big_img2").fadeOut(0);
		$(".big_img3").fadeOut(0);
		$(".big_img4").fadeOut(0);
		$(".big_img6").fadeOut(0);
	}else if(conli==4){
		$(".big_img6").fadeIn(0);

		$(".big_img2").fadeOut(0);
		$(".big_img3").fadeOut(0);
		$(".big_img4").fadeOut(0);
		$(".big_img5").fadeOut(0);
	}
});
$(".br_con3").click(function(){
	$("#br_modal").fadeIn(0);
	$(".big_img1").fadeIn(0);
});

$(".br_exit").click(function(){
	$("#br_modal").fadeOut(0);
	$(".big_img1").fadeOut(0);
	$(".big_img2").fadeOut(0);
	$(".big_img3").fadeOut(0);
	$(".big_img4").fadeOut(0);
	$(".big_img5").fadeOut(0);
	$(".big_img6").fadeOut(0);
});

$(".br_s1_img").click(function(){
	if(br_frm.name.value==""){
		alert("검색어를 입력해주세요");
		br_frm.name.focus();
		return false; //if식에 해당됐으면 아래까지 실행 안 한다!
	}
	document.br_frm.submit();
});


//query.php
$(".query_btn1").click(function(){
	if(qu_frm.name.value==""){
		alert("이름을 입력해주세요");
		qu_frm.name.focus();
		return false;
	}else if(qu_frm.tel.value==""){
		alert("전화번호를 입력해주세요");
		qu_frm.tel.focus();
		return false;
	}else if(qu_frm.local.value==""){
		alert("희망지역을 입력해주세요");
		qu_frm.local.focus();
		return false;
	}else if(qu_frm.width.value==""){
		alert("희망평수를 입력해주세요");
		qu_frm.width.focus();
		return false;
	}else if($('input').is(":checked") == false){
		alert("개인정보처리방침에 동의해주세요");
		qu_frm.check.focus();
		return false;
	}else if(confirm("지금 접수를 하시겠습니까?")){
		document.qu_frm.submit();
		alert("정상적으로 접수가 되었습니다");
	}
});


/*
$(".query_btn1").click(function(){
	if(qu_frm.name.value==""){
		alert("이름을 입력해주세요");
		qu_frm.name.focus();
		return false;
	}else if(qu_frm.tel.value==""){
		alert("전화번호를 입력해주세요");
		qu_frm.tel.focus();
		return false;
	}else if(qu_frm.local.value==""){
		alert("희망지역을 입력해주세요");
		qu_frm.local.focus();
		return false;
	}else if(qu_frm.width.value==""){
		alert("희망평수를 입력해주세요");
		qu_frm.width.focus();
		return false;
	}else if($('input').is(":checked") == false){
		alert("개인정보처리방침에 동의해주세요");
		qu_frm.check.focus();
		return false;
	}else{
		document.qu_frm.submit();
		alert("정상적으로 접수가 되었습니다"+"\n";
	}
});
*/

$(".query_btn2").click(function(){
	if(confirm("정말로 취소하시겠습니까?")){
		alert("이전화면으로 돌아갑니다");
		history.back();
	}
});

function win_open(){
	 window.open("login.php","pop1","width=500, height=500, resizable=no");
}

$(".login_btn").click(function(){
	if(login_frm.id.value==""){
		alert("아이디를 입력해주세요");
		login_frm.id.focus();
		return false;
	}else if(login_frm.pw.value==""){
		alert("패스워드를 입력해주세요");
		login_frm.pw.focus();
		return false;
	}
	document.login_frm.submit();
});

$(".clause").click(function(){
	$("#foot_modal").fadeIn();
});
$(".foot_modal_btn").click(function(){
	$("#foot_modal").fadeOut();
});

$(".ft_btn").click(function(){
	if(foot_frm.name.value==""){
		alert("이름을 입력해주세요");
		foot_frm.name.focus();
		return false;
	}else if(foot_frm.tel.value==""){
		alert("전화번호를 입력해주세요");
		foot_frm.tel.focus();
		return false;
	}else if(foot_frm.lc.value==""){
		alert("희망 지역을 입력해주세요");
		foot_frm.lc.focus();
		return false;
	}else if(foot_frm.place.value==""){
		alert("희망 평수를 입력해주세요");
		foot_frm.place.focus();
		return false;
	}else if($('input').is(":checked") == false){
		alert("개인정보처리방침에 동의해주세요");
		foot_frm.ch.focus();
		return false;
	}else if(confirm("지금 접수를 하시겠습니까?")){
		document.foot_frm.submit();
		alert("정상적으로 접수가 되었습니다");
	}
});

$(".br_add_btn").click(function(){
	if(br_add_frm.name.value==""){
		alert("이름을 입력해주세요");
		br_add_frm.name.focus();
		return false;
	}else if(br_add_frm.tel.value==""){
		alert("전화번호를 입력해주세요");
		br_add_frm.tel.focus();
		return false;
	}else if(br_add_frm.addr.value==""){
		alert("주소를 입력해주세요");
		br_add_frm.addr.focus();
		return false;
	}else if(br_add_frm.run.value==""){
		alert("운영시간을 입력해주세요");
		br_add_frm.run.focus();
		return false;
	}else if(br_add_frm.fac.value==""){
		alert("시설안내를 입력해주세요");
		br_add_frm.fac.focus();
		return false;
	}else if(confirm("등록 하시겠습니까?")){
		document.br_add_frm.submit();
		alert("정상적으로 등록 되었습니다");
	}
});

$(".br_ed_btn").click(function(){
	if(confirm("수정하시겠습니까?")){
		document.br_ed_frm.submit();
	}
});

$(".br_ed_img_btn").click(function(){
	if(confirm("수정하시겠습니까?")){
		document.br_ed_img_frm.submit();
	}
});
$(".br_acoment_btn1").click(function(){
	if(br_acoment_frm.name.value==""){
		alert("이름이나 닉네임을 써주세요");
		br_acoment_frm.name.focus();
		return false;
	}else if(br_acoment_frm.coment.value==""){
		alert("한줄평을 써주세요");
		br_acoment_frm.coment.focus();
		return false;
	}else if(confirm("등록하시겠습니까?")){
		document.br_acoment_frm.submit();
	}
});

$(".ccc").change(function(){
	if($(this).is(":checked")){
   		alert("약관을 먼저 읽어주세요");
	}
});

$(".reply_btn1").click(function(){
	$(".reply_cancel").fadeIn(0);
	$(this).children(".br_acoment_table2").fadeIn(0);
});
$(".reply_cancel").click(function(){
	$(".br_acoment_table2").fadeOut(0);
});

//intro
$(".intro_btn2").click(function(){
	$(".intro_why_img_left").fadeOut();
	$(".intro_why_img_right").delay(400).fadeIn()
});
$(".intro_btn1").click(function(){
	$(".intro_why_img_right").fadeOut();
	$(".intro_why_img_left").delay(400).fadeIn()
});

$(".intro_btn1_1").click(function(){
	$(".intro_why_img_right_1").fadeOut()
	$(".intro_why_img_left_1").delay(400).fadeIn()
	$(".intro_refer2").fadeOut();
	$(".intro_refer1").delay(400).fadeIn();
});
$(".intro_btn2_1").click(function(){
	$(".intro_why_img_left_1").fadeOut()
	$(".intro_why_img_right_1").delay(400).fadeIn()
	$(".intro_refer1").fadeOut();
	$(".intro_refer2").delay(400).fadeIn();
});


var intro_img=false;
$(".intro_cur").click(function(){
	if(intro_img==false){
		$(this).css("transform","scale(2)");
		intro_img=true;
	}else{
		$(this).css("transform","scale(1)");
		intro_img=false;
	}
});

var intro_move=0;
$(".intro_next").click(function(){
	if(intro_move==3){
		intro_move=3;
	}else{
		intro_move++;
	}
	if(intro_move==1){
		$(".intro_ul").css("margin-left","-1300px");
	}else if(intro_move==2){
		$(".intro_ul").css("margin-left","-2600px");
	}else if(intro_move==3){
		$(".intro_ul").css("margin-left","-3900px");
	}
	if(intro_move!=0){
		$(".intro_prev").css("color","black");
	}else{
		$(".intro_prev").css("color","#ccc");
	}
	if(intro_move==3){
		$(".intro_next").css("color","#ccc");
		$(".last_intro").fadeIn(0);
		$(".intro_option").delay(600).animate({"opacity":"1"});
	}else{
		$(".intro_next").css("color","black");
		$(".last_intro").fadeOut(0);
		$(".intro_option").animate({"opacity":"0"});
	}
});
$(".intro_prev").click(function(){
	if(intro_move==0){
		intro_move=0;
	}else{
		intro_move--;
	}
	if(intro_move==0){
		$(".intro_ul").css("margin-left","0px");
	}else if(intro_move==1){
		$(".intro_ul").css("margin-left","-1300px");
	}else if(intro_move==2){
		$(".intro_ul").css("margin-left","-2600px");
	}
	if(intro_move!=3){
		$(".intro_next").css("color","black");
		$(".last_intro").fadeOut(0);
	}else{
		$(".intro_next").css("color","#ccc");
		$(".last_intro").fadeIn(0);
		$(".intro_option").delay(600).animate({"opacity":"1"});
	}
	if(intro_move==0){
		$(".intro_prev").css("color","#ccc");
	}else{
		$(".intro_prev").css("color","black");
	}
});

$(document).ready(function(){// 시스템 하드디스크와 연결 준비되면!
	if($.cookie("nopopup1") != "Y"){
		$("#intro_modal").show();
	}else{
		$("#intro_modal").hide();
	}
});

$(".intro_exit").click(function(){
	if(document.frm_intro.intro_exit.value=="exit"){ // 꼭 checkbox 안 써도 된다 !
		$.cookie("nopopup1","Y",{expires: 1}); //형식 기억해두기! $.cookie("변수명","값",{날짜});
						//checked 돼 있으면 하루동안 소멸한다
	}
	$("#intro_modal").hide();
});
/*
$(".popup1").draggable({
	opacity:0.8,
	cursor: "pointer"
});
$(".popup2").draggable({
	opacity:0.8,
	cursor: "pointer"
});
*/






/*
var reply_on=false;
$(".reply_btn1").click(function(){
	if(reply_on==false){
		$(this).children(".br_acoment_table2").fadeIn(0);
		reply_on=true;
	}else{
		$(this).children(".br_acoment_table2").fadeOut(0);
		reply_on=false;
	}
});
*/

/*
$("#아이디").is(":checked")

( 예시 )

if($(".ccc").is(":checked")){

$("#bbb").attr("disabled",true);

$("#ccc").attr("disabled",false);

}else{

$("#bbb").attr("disabled",false);

$("#ccc").attr("disabled",true);

}
*/



/*
							    $(".ccc").change(function(){
							        if($(this).is(":checked")){
							        	var power=false;
							        	if(power==true){
								            alert("약관을 먼저 읽어주세요");
											$("input:checkbox[class='ccc']").attr("checked", false);
											// 체크박스 리셋 제어문 !!
							        	}else{
											power=true;
							        	}
									}
							    });

						    $(".clause").click(function(){
							    $(".ccc").change(function(){
							        if($(this).is(":checked")){
										// 체크박스 리셋 제어문 !!
									}
							    });
						    });


*/
/*


function del(){
	if(confirm("정말로 삭제하시겠습니까?")){
		location.href="delete01.php? no="+"<?php echo $no ?>";
		//delete01.php? no=0004; <- 이런 식으로 나온다.
	}
}
*/
