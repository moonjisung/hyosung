$(".menu>li").mouseover(function(){
  $(this).children(".submenu").stop().css("display","block");
});
$(".menu>li").mouseleave(function(){
  $(this).children(".submenu").stop().css("display","none");
});
