
var imgs=4;
var now=0;
start();
function start(){
    $(".imgs>img").eq(0).siblings().css("margin-top","-1000px");
    setInterval(function () {slide();},3000);
}
function slide(){
    if(now==imgs){
        now=0;
    }else{
        now=now+1;
    }
    $(".imgs>img").eq(now-1).css("margin-top","-1000px");
    $(".imgs>img").eq(now).css("margin-top","0px");
}
