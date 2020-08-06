$(".menu>li").mouseover(function(){
	$(this).children(".submenu").css("display","block");
});
$(".menu>li").mouseleave(function(){
	$(this).children(".submenu").css("display","none");
});

$("#korea").css("display","block");
$("#k").click(function(){
	$("#korea").css("display","block");
	$("#busan").css("display","none");
});
$("#b").click(function(){
	$("#busan").css("display","block");
	$("#korea").css("display","none");
});
var cnt=0;
start();
function start(){
   $(".slide1>img").eq(0).siblings().css("margin-top","-2000px");
   //2초단위로 slide함수를 끊임없이 호출하겠다.
   setInterval(function(){slide();},2000);
}
function slide(){
   cnt++;
   if(cnt==3){cnt=0;}
   $(".slide1>img").eq(cnt).siblings().css("margin-top","-2000px");
   $(".slide1>img").eq(cnt).css("margin-top","0px");
}
