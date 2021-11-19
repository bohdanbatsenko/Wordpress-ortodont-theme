
//document.addEventListener('DOMContentLoaded', () => {
	$(document).ready(function(){
	// Custom JS
	//jQuery.noConflict();
	//;(function($){



	$(function($) {
		//$('body').hide();

		jQuery(window).scroll(function(){
			var sticky = $('.site-header'),
					scroll = $(window).scrollTop();
			if (scroll >= 100) sticky.addClass('fixed-header');
			else sticky.removeClass('fixed-header');
		});
		


    $('.js_owl').owlCarousel({
        nav: false,
        responsive:{
            0: {
                autoplayTimeout:4000,
                autoplay:true,
                dots: true,
                loop: true,
                items: 1,
								nav: false,
            },
            650: {
                autoplayTimeout:4000,
                autoplay:true,
                dots: true,
                loop: true,
                items: 2,
								nav: false,
            },
            992: {
                autoplayTimeout:4000,
                autoplay:true,
                dots: true,
                loop: true,
                items: 3
            }
        }
    });

    $('.js_owl_cert').owlCarousel({
        nav: false,
        responsive:{
            0: {
                autoplayTimeout:4000,
                autoplay:true,
                dots: true,
                items: 1
            },
            500: {
                autoplayTimeout:4000,
                autoplay:true,
                dots: true,
                items: 3
            },
            992: {
                autoplayTimeout:4000,
                autoplay:true,
                dots: true,
                items: 6
            }
        }
    });

    // if ($('#carousel').length) {
    //     $('#carousel').carousel({
    //         interval: 10000,
    //         keyboard: false,
    //         pause: 'hover',
    //         ride: 'carousel',
    //         wrap: true
    //     });
    // }


		//https://codepen.io/CortY/pen/GRWPgBL

    $('.js-move-slider').click(function() {
        var link = $(this).data([href]);
        $('.detail-area-carousel .item' + link).click();
        $(document).scrollTop( $("#carousel-body").offset().top - 95 ); 
        return false;
    });
    // $('.js-move-slider').click(function() {
    //     var index = $(this).data('slide-to');
    //     $('.slide-' + index).click();
    //     $(document).scrollTop( $("#carousel-body").offset().top - 95 ); 
    //     return false;
    // });


// my carousel
$('.detail-area-carousel').owlCarousel({
	loop: true,
	nav: true,
	items: 1,
	margin: 10,
	callbacks: true,
  //autoWidth: true,
	dots: false,
	URLhashListener: true,
	//navigation: true,
  navText: ["<div class='prev-slide'></div>","<div class='next-slide'></div>"],
  //navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive: {
		0:{
			items:1
	},
	600:{
			items:1
	},
	1000:{
			items:1
	}		
	},	
});



    $('.js-read-bio').on('click', function() {
        $(this).hide();
        $('.text.no-display').removeClass('no-display');
        return false;
    });

});

// $(window).on('scroll', function() {
//     var urlHash = window.location.hash.slice(1);
//     $('.header .menu a').removeClass('active');
//     $('.header .menu').find('[href="#'+ urlHash +'"]').addClass('active');
// });








});

