
// Slick Slider //
$(document).ready(function(){
    $('.slider').slick({
    	autoplay: true,
 		autoplaySpeed: 3500,
    });

///////////////////////////////////////////////////////////////

	$('.enlace').click(function(event) {
		$('.pizza').attr('href',$(this).data('route'));
		$('.info').html($(this).data('info'));
		$('.price').html($(this).data('price'));
		$('.modal-title').html($(this).data('title'));
	});
});

