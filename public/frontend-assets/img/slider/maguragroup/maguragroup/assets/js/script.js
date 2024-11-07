(function($){
	'use script';
    $(window).on('load', function(event) {
        $('#preloader').delay(500).fadeOut(500);
    });
	// WOW JS
	new WOW().init();

	// Nice Select
	$('select').niceSelect();
	// Search
	$('.header-search-icon i.bi-search').click(function(){
        $('.header-top-search-form, .header-search-icon i.fa-times').addClass('active');
    });
    $('.header-search-icon i.fa-times').click(function(){
        $('.header-top-search-form, .header-search-icon i.fa-times').removeClass('active');
    });

 	 // /*---slider activation---*/
    var $HeroSlider = $('.hero-slider-full');
    if($HeroSlider.length > 0){
        $HeroSlider.owlCarousel({
            loop: true,
            dots:false,
            autoplay: true,
            autoplayTimeout: 20000,
            items: 1,
            nav:true,
            animateOut: 'fadeOut',
            smartSpeed: 500,
            navText:['<span class="hero-slider-nav"><i class="bi bi-arrow-left"></i></span>','<span class="hero-slider-nav"><i class="bi bi-arrow-right"></i></span>'],
            responsive:{
                    0:{
                    dots:true,
                },
                577:{
                    dots:false,
                },
            }
        });
    }
    /*---Featured Products---*/
    var $FeaturedProductSlider = $('.featured-property');
        if($FeaturedProductSlider.length > 0){
        $('.featured-property').owlCarousel({
            autoplay: true,
            loop: false,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 3,
            margin:30,
            dots:false,
            navText:['<span class="feature-slider-nav"><i class="bi bi-arrow-left"></i></span>','<span class="feature-slider-nav"><i class="bi bi-arrow-right"></i></span>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items: 1,
                    stagePadding: 0,
                    margin: 0,
                },
                600:{
                    items:2,
                },
                876:{
                    items:2,
                },
                991:{
                    items:3,
                },
            }
        });
    }
    /*---Properties Products---*/
    var $PropertiesSlider = $('.properties_Slider');
        if($PropertiesSlider.length > 0){
        $('.properties_Slider').owlCarousel({
            autoplay: true,
            loop: false,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 3,
            margin:30,
            dots:false,
            navText:['<span class="feature-slider-nav"><i class="bi bi-arrow-left"></i></span>','<span class="feature-slider-nav"><i class="bi bi-arrow-right"></i></span>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items: 1,
                    stagePadding: 0,
                    margin: 0,
                },
                600:{
                    items:2,
                },
                876:{
                    items:2,
                },
                991:{
                    items:3,
                },
            }
        });
    }
    /*---Client Testimonial---*/
    var $TestimonialSlider = $('.client-testimonial-full');
        if($TestimonialSlider.length > 0){
        $('.client-testimonial-full').owlCarousel({
            autoplay: true,
            loop: false,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 2,
            margin:30,
            dots:false,
            navText:['<span class="testimonial-slider-nav"><i class="bi bi-arrow-left"></i></span>','<span class="testimonial-slider-nav"><i class="bi bi-arrow-right"></i></span>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items: 1,
                    stagePadding: 0,
                    margin: 0,
                },
                600:{
                    items:1,
                },
                876:{
                    items:1,
                },
                992:{
                    items:2,
                },
            }
        });
    } 
    /*---Poperty Details---*/
    var $PopertyDetailsSlider = $('.poperty_details_thumbnail_full');
        if($PopertyDetailsSlider.length > 0){
        $('.poperty_details_thumbnail_full').owlCarousel({
            autoplay: true,
            loop: true,
            nav: true,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 2,
            dots:false,
            navText:['<span class="pdeta-slider-nav"><i class="bi bi-arrow-left"></i></span>','<span class="pdeta-slider-nav"><i class="bi bi-arrow-right"></i></span>'],
            responsiveClass:true,
            responsive:{
                    0:{
                    items: 1,
                    stagePadding: 0,
                    margin: 0,
                },
                600:{
                    items:1,
                    center:false,
                },
                876:{
                    items:2,
                },
                992:{
                    items:2,
                    center:true,
                },
            }
        });
    } 
    /*---Instagram Feed---*/
    var $InstagramFeedSlider = $('.instagram-feed');
        if($InstagramFeedSlider.length > 0){
        $('.instagram-feed').owlCarousel({
            autoplay: true,
            loop: false,
            nav: false,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 5,
            dots:false,
            responsiveClass:true,
            responsive:{
                    0:{
                    items: 2,
                    stagePadding: 0,
                    margin: 0,
                },
                600:{
                    items:2,
                },
                767:{
                    items:3,
                },
                876:{
                    items:4,
                },
                992:{
                    items:5,
                },
            }
        });
    } 
    /*---Instagram Feed---*/
    var $HeroVegasSlider = $('#hero_vegas_slider');
        if($HeroVegasSlider.length > 0){
	    $('#hero_vegas_slider').vegas({
		    slides: [{
		        src: "assets/img/vegas1.jpg"
		    }, {
		        src: "assets/img/vegas3.jpg"
		    }, {
		        src: "assets/img/vegas2.jpg"
		    }, {
		        src: "assets/img/vegas4.jpg"
		    }],
		    overlay: true,
		    transition: 'fade2',
		    animation: 'kenburnsDownLeft',
		    transitionDuration: 1000,
		    delay: 10000,
		    animationDuration: 10000
		});
	}
	// Scroll Area
	$(document).ready(function(){
	    $('.scroll-area').click(function(){
	      	$('html').animate({
	        	'scrollTop' : 0,
	      	},700);
	      	return false;
	    });
	    $(window).on('scroll',function(){
	      	var a = $(window).scrollTop();
	      	if(a>400){
	            $('.scroll-area').slideDown(300);
	        }else{
	            $('.scroll-area').slideUp(200);
	        }
	    });
	});
	// Counter
    var $CounterUp = $('.counter');
    if($CounterUp.length > 0){
		$('.counter').counterUp({
	        delay: 10,
	        time: 2000
	    });
	}

	$('a[data-rel^=lightcase]').lightcase({
        transition: 'elastic', /* none, fade, fadeInline, elastic, scrollTop, scrollRight, scrollBottom, scrollLeft, scrollHorizontal and scrollVertical */
        swipe: true,
        maxWidth: 1170,
        maxHeight: 600,
    });
    // Counter
    var $PortfolioMixIT = $('.portfolio-full');
    if($PortfolioMixIT.length > 0){
    	var mixer = mixitup('.portfolio-full');
    	var mixer = mixitup('.portF');
    	var mixer = mixitup('.portF', {
    		selectors: {
    			target: '.blog-item'
    		},
    		animation: {
    			duration: 100
    		}
    	});
    }
    // Quantity
    jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });


	// Sticky Menu
	$(document).ready(function(){
		$(window).on('scroll',function(){
			var scroll = $(window).scrollTop();
			if(scroll < 150){
				$('.sticky-header').removeClass('sticky');
			}else{
				$('.sticky-header').addClass('sticky');
			}
		});
	});


	



}(jQuery));