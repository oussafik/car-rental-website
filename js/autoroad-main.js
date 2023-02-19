$(function(){
    
M.AutoInit();

$('input#input_text, textarea#textarea').characterCounter();  
    
$(window).scroll(function(){
   var x=$(this).scrollTop();
    if(x>30 && x<700){
        $(".top-nav").hide()
    }
    else{
        $(".top-nav").show()
    }
    var y=$(this).scrollTop();
    if(y>=700){
        $(".top-nav").css({"background-color":"#424242", "transition":".5s"});
    }
    else{
        $(".top-nav").css({"background-color":"transparent", "transition": ".5s"});
    }
    
    var z=$(this).scrollTop();
    if(z>50){
        $(".trip-table").fadeIn(400);
    }
    else{
        $(".trip-table").fadeOut(400);
    }
});    

$(window).load(function(){
      $(".loader-bg").delay(2000).fadeOut("slow");
      $(".loader").delay(3000).fadeOut("slow");
    
    $("html, body").animate({ scrollTop: 0 }, "slow");
}); 
    
$(".single-car").mouseover(function(){
    $(".cprice", this).css({"transform": "rotate(-30deg)"});
});

$(".single-car").mouseout(function(){
    $(".cprice", this).css({"transform": "rotate(0deg) translateY(-20px)"});
});    
    
$(".car-pic-section").mouseenter(function(){
   $(this).find("img").css({"transform":"scale(1.05)","transition":"0.4s"})
});  
    
$(".car-pic-section").mouseleave(function(){
   $(this).find("img").css({"transform":"scale(1)","transition":"0.4s"})
});     
    
$(".service").mouseover(function(){
   $(this).find("img").toggleClass("tring"); 
});
    
$(".steps").mouseover(function(){
    $(this).children(":first").css({"background-color":"#fc983c"});
    $(this).find("img").css({"transform": "scale(.8)"});
});   
    
$(".steps").mouseout(function(){
    $(this).children(":first").css({"background-color":"#fff"});
    $(this).find("img").css({"transform": "scale(1)"});
});  
    
 $(".box").mouseover(function(){
    $(this).children(":first").css({"color":"#fc983c", "transform":"scale(.9)"});
 });
    
$(".box").mouseout(function(){
    $(this).children(":first").css({"color":"#000", "transform":"scale(1)"});
});      
    
       
    $(".top-nav li a, .sidenav li a").click(function(){
       $(".top-nav li a, .sidenav li a").removeClass("act")
        $(this).addClass("act")
    });   
    
   $("[type='number']").keypress(function (evt) {
    evt.preventDefault();
}); 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});
    
    