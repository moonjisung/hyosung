// var y = screen.width;
// var x = screen.height;
//
// alert(x);
// alert(y);

$(".menu>li").mouseover(function(){
    $(this).children(".submenu").stop().slideDown();
    $(this).css("background-color", "#fff");
    $(this).css("color", "#000");
});
$(".menu>li").mouseleave(function(){
    $(this).children(".submenu").stop().slideUp();
});

var imgs=2;
var now=0;
start();
function start(){
    $(".imgs>img").eq(0).siblings().css("margin-top","-800px");
    setInterval(function () {slide();},2000);
}
function slide(){
    if(now==imgs){
        now=0;
    }else{
        now=now+1;
    }
    $(".imgs>img").eq(now-1).css("margin-top","-800px");
    $(".imgs>img").eq(now).css("margin-top","0px");
}
var dispMenu=false;
$(".gnb_menu").click(function(){
	if(dispMenu==false){
		$("nav").css("display","block");
		dispMenu=true;
	}else{
		$("nav").css("display","none");
		dispMenu=false;
	}
});
