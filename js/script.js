$(document).ready(function(){
	$('.main-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.nav-slider'
	});
	$('.nav-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.main-slider',
		dots: true,
		centerMode: true,
		focusOnSelect: true
	});
});