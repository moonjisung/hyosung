$(".menu>li").mouseover(function () {
    $(".submenu").stop().slideDown();
});
$(".submenu").mouseleave(function () {
    $(".submenu").stop().slideUp();
});
$(".btn_prev").addClass("off");
$(".btn_next").click(function(){
  if(!$(".imgs li").last().is(":visible")){
      $(".imgs li:visible").hide().next("li").fadeIn("slow");
      $(".btn_prev").removeClass("off");
  }
  //이동한후에 이리스트가 마지막이라면 btn_next off.
  if($(".imgs li").last().is(":visible")){
    $(".btn_next").addClass("off");
  }
});

$(".btn_prev").click(function(){
  if(!$(".imgs li").first().is(":visible")){
      $(".imgs li:visible").hide().prev("li").fadeIn("slow");
      $(".btn_next").removeClass("off");
  }
  //이동한후에 이리스트가 첫번째이라면 btn_prev off.
  if($(".imgs li").first().is(":visible")){
    $(".btn_prev").addClass("off");
  }å
});

$(".dd").click(function(){
  $(this).siblings(".mov_up").fadeIn(1000);
});
$(".mov_up img").click(function(){
  // alert("Test");
  $(".mov_up").fadeOut(2000);
});
