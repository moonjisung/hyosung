$(".menu>li").mouseover(function(){
  $(this).children(".submenu").stop().slideDown();
  $("header").css({"background-color":"#000","color":"#fff","transition":"0.8s"});
});
$(".menu>li").mouseleave(function(){
  $(this).children(".submenu").stop().slideUp();
  $("header").css({"background-color":"#fff","color":"#000","transition":"0.8s"});
});

// $(".menu>li").mouseover(function() {
//   $(".submenu").stop().slideDown();
// });
//
// $(".menu>li").mouseleave(function() {
//   $(".submenu").stop().slideUp();
// });

var imgs = 5;
var now = 0;
var sp  = screen.width;
var prevIndex;
var play;
var mode = true;  //true값은 움직이는 모드  false값은 멈춤

start();

$(".imgs").css("width",sp*6);
$(".imgs img").css("width",sp);


$(".btn_prev a").click(function() {
  if(now == 0) {
    now=5;
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
    }, 2000)
  }
  prevIndex = now;
});

// function start(){
// 	$(".imgs>img").eq(0).siblings().css("margin-left","-2000px");
// 	//2초단위로 slide함수를 끊임없이 호출하겠다.
// 	setInterval(function(){slide();},2000);
// }

function start() {
  $(".btn_play").css("display","block");
  $("#btn_dot").children().eq(0).css({"background-color":"white"});
  prevIndex=0;

  play = setInterval(function() {
    slide();
  }, 3000);
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

  if(e==1) {
    $(".imgs").animate({"left":-sp});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(1).css({"background-color":"white"});
    prevIndex=1;
  } else if(e==2) {
    $(".imgs").animate({"left":-sp*2});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(2).css({"background-color":"white"});
    prevIndex=2;
  } else if(e==3) {
    $(".imgs").animate({"left":-sp*3});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(3).css({"background-color":"white"});
    prevIndex=3;
  } else if(e==4){
    $(".imgs").animate({"left":-sp*4});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(4).css({"background-color":"white"});
    prevIndex=4;

  }else if(e==5){
    $(".imgs").animate({"left":-sp*5});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(5).css({"background-color":"white"});
    prevIndex=5;
  }
  else {
    $(".imgs").animate({"left":0});
    $("#btn_dot").children().eq(prevIndex).css({"background-color":"#aaa"});
    $("#btn_dot").children().eq(0).css({"background-color":"white"});
    prevIndex=0;
  }
}
$(function(){
  $(".pic_big").css("background-image","url('imgs/inner/svj.jpg')");
  $(".pic_small>li").click(function(){
     var idx=$(".pic_small>li").index(this);
     if(idx==0){
        $(".pic_big").css("background-image","url('imgs/inner/svj.jpg')");
     }else if(idx==1){
        $(".pic_big").css("background-image","url('imgs/inner/svj0.jpg')");
     }else if(idx==2){
        $(".pic_big").css("background-image","url('imgs/inner/svj1.jpg')");
     }else if(idx==3){
        $(".pic_big").css("background-image","url('imgs/inner/svj2.png')");
     }else if(idx==4){
        $(".pic_big").css("background-image","url('imgs/inner/svj3.jpg')");
     }
  });
});
$(function(){
  $(".pic_big1").css("background-image","url('imgs/inner/Rolls.jpg')");
  $(".pic_small1>li").click(function(){
     var idx=$(".pic_small1>li").index(this);
     if(idx==0){
        $(".pic_big1").css("background-image","url('imgs/inner/Rolls.jpg')");
     }else if(idx==1){
        $(".pic_big1").css("background-image","url('imgs/inner/Rolls0.jpg')");
     }else if(idx==2){
        $(".pic_big1").css("background-image","url('imgs/inner/Rolls1.jpg')");
     }else if(idx==3){
        $(".pic_big1").css("background-image","url('imgs/inner/Rolls2.jpg')");
     }else if(idx==4){
        $(".pic_big1").css("background-image","url('imgs/inner/Rolls3.jpg')");
     }
  });
});

$(function(){
  $(".pic_big2").css("background-image","url('imgs/inner/bentley.jpg')");
  $(".pic_small2>li").click(function(){
     var idx=$(".pic_small2>li").index(this);
     if(idx==0){
        $(".pic_big2").css("background-image","url('imgs/inner/bentley.jpg')");
     }else if(idx==1){
        $(".pic_big2").css("background-image","url('imgs/inner/bentley0.jpg')");
     }else if(idx==2){
        $(".pic_big2").css("background-image","url('imgs/inner/bentley1.jpg')");
     }else if(idx==3){
        $(".pic_big2").css("background-image","url('imgs/inner/bentley2.jpg')");
     }else if(idx==4){
        $(".pic_big2").css("background-image","url('imgs/inner/bentley3.jpg')");
     }
  });
});
$(function(){
  $(".pic_big3").css("background-image","url('imgs/inner/maserati.jpg')");
  $(".pic_small3>li").click(function(){
     var idx=$(".pic_small3>li").index(this);
     if(idx==0){
        $(".pic_big3").css("background-image","url('imgs/inner/maserati.jpg')");
     }else if(idx==1){
        $(".pic_big3").css("background-image","url('imgs/inner/maserati0.jpg')");
     }else if(idx==2){
        $(".pic_big3").css("background-image","url('imgs/inner/maserati1.jpg')");
     }else if(idx==3){
        $(".pic_big3").css("background-image","url('imgs/inner/maserati2.jpg')");
     }else if(idx==4){
        $(".pic_big3").css("background-image","url('imgs/inner/maserati3.jpg')");
     }
  });
});
$(function(){
  $(".pic_big4").css("background-image","url('imgs/inner/panamera.jpg')");
  $(".pic_small4>li").click(function(){
     var idx=$(".pic_small4>li").index(this);
     if(idx==0){
        $(".pic_big4").css("background-image","url('imgs/inner/panamera.jpg')");
     }else if(idx==1){
        $(".pic_big4").css("background-image","url('imgs/inner/panamera0.jpg')");
     }else if(idx==2){
        $(".pic_big4").css("background-image","url('imgs/inner/panamera1.png')");
     }else if(idx==3){
        $(".pic_big4").css("background-image","url('imgs/inner/panamera2.png')");
     }else if(idx==4){
        $(".pic_big4").css("background-image","url('imgs/inner/panamera3.jpg')");
     }
  });
});
$(function(){
  $(".pic_big5").css("background-image","url('imgs/inner/Benz.jpg')");
  $(".pic_small5>li").click(function(){
     var idx=$(".pic_small5>li").index(this);
     if(idx==0){
        $(".pic_big5").css("background-image","url('imgs/inner/Benz.jpg')");
     }else if(idx==1){
        $(".pic_big5").css("background-image","url('imgs/inner/Benz0.jpg')");
     }else if(idx==2){
        $(".pic_big5").css("background-image","url('imgs/inner/Benz1.jpg')");
     }else if(idx==3){
        $(".pic_big5").css("background-image","url('imgs/inner/Benz2.jpg')");
     }else if(idx==4){
        $(".pic_big5").css("background-image","url('imgs/inner/Benz3.jpg')");
     }
  });
});
$(".ceo").click(function() {
	$(".ceosub").css("display", "block");
  $(".ceo1sub").css("display", "none");
  $(".ceo").css("background-color","#0c2340");
  $(".ceo").css("color","#ffffff");
  $(".ceo1").css("background-color","white");
  $(".ceo1").css("color","black");
});
$(".ceo1").click(function() {
	$(".ceosub").css("display", "none");
  $(".ceo1sub").css("display", "block");
  $(".ceo1").css("background-color","#0c2340");
  $(".ceo1").css("color","#ffffff");
  $(".ceo").css("background-color","white");
  $(".ceo").css("color","black");
});
