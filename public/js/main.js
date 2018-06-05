(function ($) {
 "use strict";
    
/*-----------------------------
	Menu Stick
---------------------------------*/
    if ($(".sticker")[0]){
        $('.sticker');
        $(window).scroll(function(){
            var wind_scr = $(window).scrollTop();
            var window_width = $(window).width();
            var head_w = $('.sticker').height();
            if (window_width >= 10) {
                if(wind_scr < 400){
                    if($('.sticker').data('stick') === true){
                        $('.sticker').data('stick', false);
                        $('.sticker').stop(true).animate({opacity : 0}, 300, function(){
                            $('.sticker').removeClass('stick slideDown');
                            $('.sticker').stop(true).animate({opacity : 1}, 300);
                        });
                    }
                } else {
                    if($('.sticker').data('stick') === false || typeof $('.sticker').data('stick') === 'undefined'){
                        $('.sticker').data('stick', true);
                        $('.sticker').stop(true).animate({opacity : 0},300,function(){
                            $('.sticker').addClass('stick slideDown');
                            $('.sticker.stick').stop(true).animate({opacity : 1}, 300);
                        });
                    }
                }
            }
        });
    };	
    
/*----------------------------
    Toogle Search
------------------------------ */
    // Handle click on toggle search button
    $('.header-search').on('click', function() {
        $('.search').toggleClass('open');
        return false;
    });
    
    // Handle click on search submit button
    $('#search-form input[type=submit]').on('click', function() {
        $('.search').toggleClass('open');
        return true;
    });
    
    // Clicking outside the search form closes it
    $(document).on('click', function(event) {
        var target = $(event.target);
        
        if (!target.is('.header-search') && !target.closest('.search').size()) {
            $('.search').removeClass('open');
        }
    });
    
/*----------------------------
    jQuery MeanMenu
------------------------------ */
	jQuery('nav#dropdown').meanmenu();	
	
/*----------------------------
    Wow js active
------------------------------ */
    new WOW().init();
 
///*----------------------------
//    Single Latest Carousel
//------------------------------ */  
//    $('.latest-carousel').owlCarousel({
//		loop:true,
//		margin:0,
//		nav:true,		
//		autoplay:false,
//		smartSpeed:2000,
//		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
//		responsive:{
//			0:{
//				items:1
//			},
//			600:{
//				items:2
//			},
//			1000:{
//				items:2
//			}
//		}
//	});	 
//    
///*----------------------------
//    Single Product Carousel
//------------------------------ */  
//    $('.single-product-carousel').owlCarousel({
//		loop:true,
//		margin:0,
//		nav:true,		
//		autoplay:false,
//		smartSpeed:2000,
//		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
//		responsive:{
//			0:{
//				items:1
//			},
//			600:{
//				items:3
//			},
//			1000:{
//				items:4
//			}
//		}
//	});	
//    
/*--------------------------
    ScrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 	   
    
/*--------------------------
    Counter Up
---------------------------- */	
    $('.counter').counterUp({
        delay: 70,
        time: 5000
    }); 
    
/*--------------------------------
	Testimonial Slick Carousel
-----------------------------------*/
    $('.testimonial-text-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
/*------------------------------------
	Testimonial Slick Carousel as Nav
--------------------------------------*/
    $('.testimonial-image-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.testimonial-text-slider',
        dots: false,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '10px',
        responsive: [
            {
              breakpoint: 450,
              settings: {
                dots: false,
                slidesToShow: 3,  
                centerPadding: '0px',
                }
            },
            {
              breakpoint: 420,
              settings: {
                autoplay: true,
                dots: false,
                slidesToShow: 1,
                centerMode: false,
                }
            }
        ]
    });
 
})(jQuery); 