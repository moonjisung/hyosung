$(document).ready(function(){
  alert("test");
  //문서가 스크롤될때를 의미하는 이벤트...
  $(window).scroll(function(){
    if($(this).scrollTop()>0){//스크롤움직임..
      $(".top").fadeIn();
    }else{//스크롤 상태 0;
      $(".top").fadeOut();
    }
  });
  $(".top").click(function(){
    $("body,html").animate({scrollTop:0},800);
  });
});
