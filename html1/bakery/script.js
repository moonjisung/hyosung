$(".menu>li").mouseover(function () {
    $(".submenu").stop().slideDown();
});
$(".menu>li").mouseleave(function () {
    $(".submenu").stop().slideUp();
});

var imgs=4;
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
$("#partner").click(function(){
  $("#partner_up").addClass("active");
});
$("#partner_up .btnClose").click(function(){
  $("#partner_up").removeClass("active");
});
