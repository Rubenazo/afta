$(document).ready(function(){

	// Slick Slider //
    $('.slider').slick({
    	autoplay: true,
 		autoplaySpeed: 3500,
    });

///////////////////////////////////////////////////////////////

	// Modal //
	$('.program').click(function(event) {
		$('.pizza').attr('href',$(this).data('route'));
		$('.info').html($(this).data('info'));
		$('.price').html($(this).data('price'));
		$('.modal-title').html($(this).data('title'));
	});

///////////////////////////////////////////////////////////////

	// Material Design for Bootstrap //
	$.material.init()	

///////////////////////////////////////////////////////////////

	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav',  
	});

	$('.slider-nav').slick({
	    slidesToShow: 8,
	    slidesToScroll: 1,
	    asNavFor: '.slider-for',
	    focusOnSelect: true,
	    rows: 2,
	    slidesPerRow: 4,
	});		
});

