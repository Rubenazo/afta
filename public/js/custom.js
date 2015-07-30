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
});

