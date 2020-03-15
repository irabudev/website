$(document).ready(function() {

	$("#mg-part-logos").owlCarousel({
		items : 3,
		itemsDesktop: [1199,3],
		navigation : true,
		pagination: false,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],

	});

	/*
	 * Owl Carousel for Client Logo (Full 5 items Only)
	 */
	$("#mg-part-logos-full").owlCarousel({
		items : 5,
		navigation : true,
		pagination: false,
		navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],

	});

});
