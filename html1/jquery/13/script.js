var imgs = 4;
var now = 0;
var sp  = screen.width;
var prevIndex;
var play;
var mode = true;  //true값은 움직이는 모드  false값은 멈춤


$(".btn_prev a").click(function() {
  if(now == 0) {
    now=4;
  } else {
    now--;
  }
  clearInterval(play);
  curr_slide(now);
  if(mode==true) {
    play = setInterval(function() {
      slide();
    }, 3000);
  }
  prevIndex = now;
});
$(".btn_next a").click(function() {
  if(imgs==now) {
    now=0;
  } else {
    now++;
  }
  clearInterval(play);
  curr_slide(now);
  if(mode==true) {
    play = setInterval(function() {
      slide();
    }, 2000);
  }
  prevIndex = now;
})

$(".btn_play").click(function() {
  clearInterval(play);
  $(this).css("display","none");
  $(".btn_stop").css("display","block");
  mode = false;
});

$(".btn_stop").click(function() {
  play=setInterval(function() {
    slide();
  }, 2000);
  $(this).css("display", "none");
  $(".btn_play").css("display","block");
    mode = true;
});

$("#btn_dot .dot").click(function() {
  now = $(this).index();
  //일단 이미지슬라이드의 setInterval함수를 멈춘다.
  clearInterval(play);
  curr_slide(now);
  if(mode == true) {
    play = setInterval(function() {
      slide();
    }, 3000)
  }
  prevIndex = now;
});

function start() {
  $(".btn_play").css("display","block");
  $(".imgs>img").eq(0).css({"left": -sp*2});
  $(".imgs>img").eq(1).css({"left": -sp});
  $(".imgs>img").eq(2).css({"left": 0});
  $(".imgs>img").eq(3).css({"left": sp});
  $(".imgs>img").eq(4).css({"left": sp*2});
  $("#btn_dot").children().eq(0).css({"background-color":"purple"});
  prevIndex=0;

  play = setInterval(function() {
    slide();
  }, 2000);
}

function slide() {
  if(imgs == now) {
    now = 0;
  } else {
    now++;
  }
  curr_slide(now);
}

function curr_slide(e) {
  if(e == 1) {
    $(".imgs>img").eq(1).css({"left": -sp*2});
    $(".imgs>img").eq(2).css({"left": -sp});
    $(".imgs>img").eq(3).css({"left": 0});
    $(".imgs>img").eq(4).css({"left": sp});
    $(".imgs>img").eq(0).css({"left": sp*2});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(1).css({"background-color":"purple"});
    prevIndex=1;
  } else if(e==2) {
    $(".imgs>img").eq(2).css({"left": -sp*2});
    $(".imgs>img").eq(3).css({"left": -sp});
    $(".imgs>img").eq(4).css({"left": 0});
    $(".imgs>img").eq(0).css({"left": sp});
    $(".imgs>img").eq(1).css({"left": sp*2});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(2).css({"background-color":"purple"});
    prevIndex=2;
  } else if(e==3) {
    $(".imgs>img").eq(3).css({"left": -sp*2});
    $(".imgs>img").eq(4).css({"left": -sp});
    $(".imgs>img").eq(0).css({"left": 0});
    $(".imgs>img").eq(1).css({"left": sp});
    $(".imgs>img").eq(2).css({"left": sp*2});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(3).css({"background-color":"purple"});
    prevIndex=3;
  } else if(e==4){
    $(".imgs>img").eq(4).css({"left": -sp*2});
    $(".imgs>img").eq(0).css({"left": -sp});
    $(".imgs>img").eq(1).css({"left": 0});
    $(".imgs>img").eq(2).css({"left": sp});
    $(".imgs>img").eq(3).css({"left": sp*2});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(4).css({"background-color":"purple"});
    prevIndex=4;
  } else {
    $(".imgs>img").eq(0).css({"left": -sp*2});
    $(".imgs>img").eq(1).css({"left": -sp});
    $(".imgs>img").eq(2).css({"left": 0});
    $(".imgs>img").eq(3).css({"left": sp});
    $(".imgs>img").eq(4).css({"left": sp*2});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(0).css({"background-color":"purple"});
    prevIndex=0;
  }
}

start();
