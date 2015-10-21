$(document).ready(function(){


   $("#current").click(function(){

     /*  $(".main-nav ul").fadeOut(2000);  */
       $(".main-nav ul").toggleClass("vivsibleNone");

     });
   $("#UpButton").click(function(){

     var curPos=$(document).scrollTop();
     var scrollTime=curPos/1.73;
     $("body,html").animate({"scrollTop":0},scrollTime);

     });
     /* Липучка для меню
========================*/
        var $menu = $("#primary-menu");

        $(window).scroll(function(){
            if ((document.body.clientWidth) > 859) {
			if ( $(this).scrollTop() > 350 && $menu.hasClass("nav-menu")){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("nav-menu")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                   /**/ $("#UpButton").removeClass("UpButtonn").addClass("UppBtn").fadeIn('fast');
                   $("#headerlogo").removeClass("headerlogo").addClass("headerlogoFixed").fadeIn('fast');

                });
            } else if($(this).scrollTop() <= 350 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("nav-menu")
                           .fadeIn('fast');
                    $("#UpButton").removeClass("UppBtn").addClass("UpButtonn").fadeIn('fast'); /**/
                    $("#headerlogo").removeClass("headerlogoFixed").addClass("headerlogo").fadeIn('fast');
                });
            }
			}
        });//scroll

        $menu.hover(
            function(){
                if( $(this).hasClass('fixed') ){
                   /* $(this).removeClass('transbg');  */
                }
            },
            function(){
                if( $(this).hasClass('fixed') ){
                   /* $(this).addClass('transbg'); */
                }
            });//hover
/* Липучка для меню
========================*/



});