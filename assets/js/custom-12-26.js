
jQuery(function($){
			
	/* ----------------------------------------------------------- */
	/*  HOVER DROPDOWN MENU
	/* ----------------------------------------------------------- */ 
	
	// for hover dropdown menu
	$('ul.nav li.dropdown').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
	});

  /* ----------------------------------------------------------- */
	/*  BOOTSTRAP ACCORDION
	/* ----------------------------------------------------------- */ 
	
	$('#accordion .panel-collapse').on('shown.bs.collapse', function () {
	$(this).prev().find(".fa").removeClass("fa-chevron-down").addClass("fa-chevron-up");
	});
	
	//The reverse of the above on hidden event:
	
	$('#accordion .panel-collapse').on('hidden.bs.collapse', function () {
	$(this).prev().find(".fa").removeClass("fa-chevron-up").addClass("fa-chevron-down");
	});	


	/* ----------------------------------------------------------- */
	/*  MIXIT SLIDER
	/* ----------------------------------------------------------- */  	

	jQuery(function(){
	    $('#mixit-container').mixItUp();
	});
		
	/* ----------------------------------------------------------- */
	/*  FANCYBOX 
	/* ----------------------------------------------------------- 

	jQuery(document).ready(function() {
		$(".fancybox").fancybox();
	});	 */

	/* ----------------------------------------------------------- */
	/*  MAIN SLIDER (SLICK SLIDER)
	/* ----------------------------------------------------------- */

	jQuery('.main-slider').slick({
		dots: true,
		prevArrow: false,
    nextArrow: false,
		infinite: true,
		speed: 500,
		autoplay: true,
		accessibility: false,
		fade: true,
		cssEase: 'linear'
	});


	/* ----------------------------------------------------------- */
	/*  TESTIMONIAL SLIDER (SLICK SLIDER)
	/* ----------------------------------------------------------- */   

	jQuery('.testimonial-slider').slick({
		dots: true,
		infinite: true,
		speed: 500,
		autoplay: true,		
		cssEase: 'linear'
	});


	/* ----------------------------------------------------------- */
	/*  CLIENTS BRAND SLIDER (SLICK SLIDER)
	/* ----------------------------------------------------------- */   

	$('.clients-brand-slide').slick({
	  dots: false,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  autoplay: true,	
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    }
	  ]
	});

	/* ----------------------------------------------------------- */
	/*  SCROLL TOP BUTTON
	/* ----------------------------------------------------------- */

	//Check to see if the window is top if not then display button

	$(window).scroll(function(){
	    if ($(this).scrollTop() > 300) {
	      $('.scrollToTop').fadeIn();
	    } else {
	      $('.scrollToTop').fadeOut();
	    }
	});	   
	   
	//Click event to scroll to top

	$('.scrollToTop').click(function(){
	    $('html, body').animate({scrollTop : 0},800);
	    return false;
	});

	/* ----------------------------------------------------------- */
	/*  PRELOADER 
	/* ----------------------------------------------------------- */ 
	
	jQuery(window).load(function() { // makes sure the whole site is loaded
      $('#status').fadeOut(); // will first fade out the loading animation
      $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
      $('body').delay(100).css({'overflow':'visible'});
    })

   
	/* ----------------------------------------------------------- */
	/*  WOW ANIMATION
	/* ----------------------------------------------------------- */ 

	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        live:         true,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init(); 
		
});