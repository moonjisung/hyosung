$(".menu>li").mouseover(function() {
  var idx=$(this).index();
  $(".submenu").eq(idx).css("display","block");
  $(".submenu").eq(idx).siblings().css("display","none");
});
