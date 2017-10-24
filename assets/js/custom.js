
jQuery(function($){
	$(".phone-mask").inputmask("999-999-9999");		
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

//----------Ageny form validation------------------------------

$(document).on('keypress', "#agency-name,#contat_ageny",function (event) {
    var theEvent = event || window.event;
    var key = theEvent.keyCode || theEvent.which;

    if ((key === 9) || (key === 8) || (key === 46) || (key === 36) || (key === 35 )) { //TAB was pressed
        return;
     }
    var regex = new RegExp("^[a-zA-Z0-9 ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$(document).on('keypress', "#agency-address,#contact_name,#licensed,#business,#meg",function (event) {
    var theEvent = event || window.event;
    var key = theEvent.keyCode || theEvent.which;

    if ((key === 9) || (key === 8) || (key === 46) || (key === 36) || (key === 35 )|| (key === 173)|| (key === 55)|| (key === 53)|| (key === 57)|| (key === 48)) { //TAB was pressed
        return;
     }
    var regex = new RegExp("^[a-zA-Z0-9 ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$(document).on('keypress', "#city",function (event) {
    var theEvent = event || window.event;
    var key = theEvent.keyCode || theEvent.which;

    if ((key === 9) || (key === 8) || (key === 46) || (key === 36) || (key === 35 )|| (key === 173)|| (key === 55)|| (key === 53)|| (key === 57)|| (key === 48)) { //TAB was pressed
        return;
     }
    var regex = new RegExp("^[a-zA-Z0-9 ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$(document).on('keypress', "#state",function (event) {
    var theEvent = event || window.event;
    var key = theEvent.keyCode || theEvent.which;

    if ((key === 9) || (key === 8) || (key === 46) || (key === 36) || (key === 35 )|| (key === 173)|| (key === 55)|| (key === 53)|| (key === 57)|| (key === 48)) { //TAB was pressed
        return;
     }
    var regex = new RegExp("^[a-zA-Z0-9 ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$(document).on('keypress', "#zip",function (event) {
    var theEvent = event || window.event;
    var key = theEvent.keyCode || theEvent.which;

    if ((key === 9) || (key === 8) || (key === 46) || (key === 36) || (key === 35 )|| (key === 173)) { //TAB was pressed
        return;
     }
    var regex = new RegExp("^[a-zA-Z0-9 ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$(document).on('submit', "#agency_form",function (event) {
    
   if($('#agency-name').val().length<3){
       alert('Agency name  must be at least 3 characters ');
      return false; 
       
   }else if(!/(.*[a-zA-Z]){2}/i.test($('#contat_ageny').val()))
   {
       alert('Agency name must contain at least 2 alphabetic characters ');
       return false;
   }
        var string = $('#agency-address').val();
        var fields = string.split(/ /);
        var address = fields[1];
      
     if ( (address!= '') && (address.length<3) )
     {
          alert('Agency Address second word must be at least 3 characters ');
       return false;
     }else if(!/(.*[a-zA-Z]){2}/i.test(address))
      {
           alert('Agency Address second word must be at least 2 alphabetic characters ');
       return false;
      }
      
    if($('#city').val().length<2){
       alert('City overall length must be at least 2 characters ');
      return false; 
       
   }; 
   if($('#state').val().length<2){
       alert('City overall length must be at least 2 characters ');
      return false; 
       
   }; 
   
   if($('#why_appointment').val().length<2){
       alert('Why are you requesting an agency appointment overall length must be at least 2 characters ');
      return false; 
       
   }; 
   return true;
});


//--------------------contact us page --------------
$(document).on('keypress', "#contact_name",function (event) {
    var theEvent = event || window.event;
    var key = theEvent.keyCode || theEvent.which;

    if ((key === 9) || (key === 8) || (key === 46) || (key === 36) || (key === 35 )|| (key === 173)|| (key === 55)|| (key === 53)|| (key === 57)|| (key === 48)) { //TAB was pressed
        return;
     }
    var regex = new RegExp("^[a-zA-Z0-9 ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});

$(document).on('keypress', "#contact_agency",function (event) {
    var theEvent = event || window.event;
    var key = theEvent.keyCode || theEvent.which;

    if ((key === 9) || (key === 8) || (key === 46) || (key === 36) || (key === 35 )) { //TAB was pressed
        return;
     }
    var regex = new RegExp("^[a-zA-Z0-9 ]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
});


$(document).on('submit', "#contact_form",function (event) {
   
   if ( $('#contact_name').val()!=''){
      if($('#contact_name').val().length<3){
        alert('Name must contain at least 3 characters ');
       return false; 
      }
    
   }
   
   if($('#contat_ageny').val()!=''){
    if($('#contat_ageny').val().length<3){
        alert('Agency name must contain at least 3 characters ');
       return false; 
    }
    else if(!/(.*[a-zA-Z]){2}/i.test($('#contat_ageny').val()))
      {
           alert('Agency name must contain at least 2 alpha characters ');
       return false;
      }
   }
   
    if($('#licensed').val()!=''){
     if($('#licensed').val().length<2){
       alert('State Agency Licensed in must contain at least 2 characters ');
      return false; 
     }
    }
   
   if($('#business').val()!=''){
    if($('#business').val().length<2){
       alert('State(s) Agency does business in must contain at least 2 characters ');
      return false; 
    } 
   }
    if($('#meg').val()!=''){
        if($('#meg').val().length<2){
          alert('Message in must contain at least 2 characters ');
         return false; 
        }
   }
   
   /*var s = 'john smith';
var fields = s.split(/ /);
var name = fields[0];alert(name);*/
   return true;
});
