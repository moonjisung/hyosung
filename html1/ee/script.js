$(".topmenu>li").mouseover(function(){
   $(this).children(".submenu").stop().css("display","block");
});
$(".topmenu>li").mouseleave(function(){
   $(this).children(".submenu").stop().css("display","none");
});
