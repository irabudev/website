/* ========================================================================= */
/*	Preloader
/* ========================================================================= */

jQuery(window).load(function(){

	$("#preloader").fadeOut("slow");

});

$(document).ready(function(){

	$(window).scroll(function () {
			if ($(window).scrollTop() > 400) {
					$(".navbar-brand a").css("color","#fff");
					$("#navigation").removeClass("animated-header");
			} else {
					$(".navbar-brand a").css("color","inherit");
					$("#navigation").addClass("animated-header");
			}
	});

	$('#nav').singlePageNav({
		offset: jQuery('#nav').outerHeight(),
		filter: ':not(.external)',
		speed: 2000,
		currentClass: 'current',
		easing: 'easeInOutExpo',
		updateHash: true,
		beforeStart: function() {
			console.log('begin scrolling');
		},
		onComplete: function() {
			console.log('done scrolling');
		}
	});

  $(".owl-carousel").owlCarousel({
		 loop:true,
	 margin:10,
	 nav:true,


	 responsiveClass:true,
	 responsive:{
			 0:{
					 items:1,
					//  nav:true
			 },
			 600:{
					 items:3,
					//  nav:false
			 },
			 1000:{
					 items:5,
					//  nav:true,
					 loop:false
			 }

	}
})

});


var wow = new WOW ({
	offset:       75,          // distance to the element when triggering the animation (default is 0)
	mobile:       false,       // trigger animations on mobile devices (default is true)
});
wow.init();
