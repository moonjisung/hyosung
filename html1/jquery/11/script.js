$(".btn_prev").addClass("off");
$(".btn_next").click(function(){
  if(!$("#slides li").last().is(":visible")){
      $("#slides li:visible").hide().next("li").fadeIn("slow");
      $(".btn_prev").removeClass("off");
  }
  //이동한후에 이리스트가 마지막이라면 btn_next off.
  if($("#slides li").last().is(":visible")){
    $(".btn_next").addClass("off");
  }
});

$(".btn_prev").click(function(){
  if(!$("#slides li").first().is(":visible")){
      $("#slides li:visible").hide().prev("li").fadeIn("slow");
      $(".btn_next").removeClass("off");
  }
  //이동한후에 이리스트가 첫번째이라면 btn_prev off.
  if($("#slides li").first().is(":visible")){
    $(".btn_prev").addClass("off");
  }
});
