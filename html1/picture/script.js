
var imgs=4;
var now=0;
start();
function start(){
    $(".imgs>img").eq(0).siblings().css("margin-top","-800px");
    setInterval(function () {slide();},2000);
}
function slide(){
    if(now==imgs){
        now=0;
    }else{
        now=now+1;
    }
    $(".imgs>img").eq(now-1).css("margin-top","-800px");
    $(".imgs>img").eq(now).css("margin-top","0px");
}

var amg=1;
var tom=0;
start1();
function start1(){
    $(".partimg>img").eq(0).siblings().css("margin-left","800px");
    setInterval(function () {slide1();},2000);
}
function slide1(){
    if(tom==amg){
        tom=0;
    }else{
        tom=tom+1;
    }
    $(".partimg>img").eq(tom-1).css("margin-left","800px");
    $(".partimg>img").eq(tom).css("margin-left","0px");
}