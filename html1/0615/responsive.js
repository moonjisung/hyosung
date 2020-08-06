var dispMenu=false;

$(".gnb_menu").click(function(){
  if(dispMenu==false){
    $("nav").css("display","block");
    dispMenu=true;
  }else{//dispMenu가 true인 경우
    $("nav").css("display","none");
    dispMenu=false;
  }
});
