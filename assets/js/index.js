/* ========================================================================= */
/*	Preloader
/* ========================================================================= */

jQuery(window).load(function(){

	$("#preloader").fadeOut("slow");

});

$(document).ready(function(){


	//
	// $(window).scroll(function () {
	// 		if ($(window).scrollTop() > 400) {
	// 				$(".navbar-brand a").css("color","#fff");
	// 				$("#navigation").removeClass("animated-header");
	// 		} else {
	// 				$(".navbar-brand a").css("color","inherit");
	// 				$("#navigation").addClass("animated-header");
	// 		}
	// });

	// $('#nav').singlePageNav({
	// 	offset: jQuery('#nav').outerHeight(),
	// 	filter: ':not(.external)',
	// 	speed: 2000,
	// 	currentClass: 'current',
	// 	easing: 'easeInOutExpo',
	// 	updateHash: true,
	// 	beforeStart: function() {
	// 		console.log('begin scrolling');
	// 	},
	// 	onComplete: function() {
	// 		console.log('done scrolling');
	// 	}
	// });

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

	var secondaryNav = $('.cd-secondary-nav'),
		secondaryNavTopPosition = secondaryNav.offset().top,
		taglineOffesetTop = $('#cd-intro-tagline').offset().top + $('#cd-intro-tagline').height() + parseInt($('#cd-intro-tagline').css('paddingTop').replace('px', '')),
		contentSections = $('.cd-section');

	$(window).scroll( function(){
		//on desktop - assign a position fixed to logo and action button and move them outside the viewport
		( $(window).scrollTop() > taglineOffesetTop ) ? $('#cd-logo, .cd-btn').addClass('is-hidden') : $('#cd-logo, .cd-btn').removeClass('is-hidden');
		console.log();
		//on desktop - fix secondary navigation on scrolling
		if($(window).scrollTop() > secondaryNavTopPosition ) {
			//fix secondary navigation
			secondaryNav.addClass('is-fixed');
			//push the .cd-main-content giving it a top-margin
			$('.cd-main-content').addClass('has-top-margin');
			//on Firefox CSS transition/animation fails when parent element changes position attribute
			//so we to change secondary navigation childrens attributes after having changed its position value
			setTimeout(function() {
	            secondaryNav.addClass('animate-children');
	            $('#cd-logo').addClass('slide-in');
				$('.cd-btn').addClass('slide-in');
	        }, 50);
		} else {
			secondaryNav.removeClass('is-fixed');
			$('.cd-main-content').removeClass('has-top-margin');
			setTimeout(function() {
	            secondaryNav.removeClass('animate-children');
	            $('#cd-logo').removeClass('slide-in');
				$('.cd-btn').removeClass('slide-in');
	        }, 50);
		}

				// console.log(taglineOffesetTop);
				// console.log(secondaryNavTopPosition);
		//on desktop - update the active link in the secondary fixed navigation
		updateSecondaryNavigation();
	});

	function updateSecondaryNavigation() {

		contentSections.each(function(){
			var actual = $(this),
				actualHeight = actual.height() + parseInt(actual.css('paddingTop').replace('px', '')) + parseInt(actual.css('paddingBottom').replace('px', '')),
				actualAnchor = secondaryNav.find('a[href="#'+actual.attr('id')+'"]');
					console.log( ( actual.offset().top ) ) ;
			if ( ( actual.offset().top - secondaryNav.height() <= $(window).scrollTop() ) && ( actual.offset().top +  actualHeight - secondaryNav.height() > $(window).scrollTop() ) ) {
				actualAnchor.addClass('active');
				console.log(actualAnchor);
			}else {
				actualAnchor.removeClass('active');
			}
		});

	}

	//on mobile - open/close secondary navigation clicking/tapping the .cd-secondary-nav-trigger
	$('.cd-secondary-nav-trigger').on('click', function(event){
		event.preventDefault();
		$(this).toggleClass('menu-is-open');
		secondaryNav.find('ul').toggleClass('is-visible');
	});

	// //smooth scrolling when clicking on the secondary navigation items
	// secondaryNav.find('ul a').on('click', function(event){
  //       event.preventDefault();
  //       var target= $(this.hash);
  //       $('body,html').animate({
  //       	'scrollTop': target.offset().top - secondaryNav.height() + 1
  //       	}, 400
  //       );
  //       //on mobile - close secondary navigation
  //       $('.cd-secondary-nav-trigger').removeClass('menu-is-open');
  //       secondaryNav.find('ul').removeClass('is-visible');
  //   });

	secondaryNav.singlePageNav({
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
    //on mobile - open/close primary navigation clicking/tapping the menu icon
	$('.cd-primary-nav').on('click', function(event){
		if($(event.target).is('.cd-primary-nav')) $(this).children('ul').toggleClass('is-visible');
	});

});


var wow = new WOW ({
	offset:       75,          // distance to the element when triggering the animation (default is 0)
	mobile:       false,       // trigger animations on mobile devices (default is true)
});
wow.init();
