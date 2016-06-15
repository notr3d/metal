//слайдеры
$(document).ready(function () {
	//home
	$('.main-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		dots: true,
		asNavFor: '.nav-slider',
		autoplay: true,
		swipe: true,
		autoplaySpeed: 10000
	});
	$('.nav-slider').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.main-slider',
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		responsive: [
			{
				breakpoint: 964,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}
		]
	});
	$('.showcase__slider').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 5,
		arrows: false,
		autoplay: true,
  		autoplaySpeed: 10000,
		responsive: [
			{
				breakpoint: 964,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}			
		]		
	});
	//about
	$('.about-main-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.about-nav-slider',
		autoplay: true,
		autoplaySpeed: 10000
	});
	$('.about-nav-slider').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		asNavFor: '.about-main-slider',
		dots: false,
		//centerMode: true,
		focusOnSelect: true
	});
	$('.main-reviews__slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows:true,
		fade: true,
		autoplay: true,
		autoplaySpeed: 10000
	});
	//product
	$('.mw-top-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		dots: false,
		asNavFor: '.mw-bot-slider',
		autoplay: true,
		autoplaySpeed: 10000
	});
	$('.mw-bot-slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.mw-top-slider',
		arrows: false,
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		draggable: false	
	});
	//metal
	$('.carousel-top').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: false,
		dots: false,
		draggable:false,
		//asNavFor: '.carousel-bot',
		//autoplay: true,
		//autoplaySpeed: 10000
	});
	$('.carousel-bot').slick({
		slidesToShow: 10,
		slidesToScroll: 1,
		asNavFor: '.carousel-top',
		arrows: false,
		dots: false,
		centerMode: false,
		focusOnSelect: true
	});
	$('.alfa-slider__wrapper').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: true,
		draggable: true,
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 250,
		cssEase: 'ease-in-out',
		centerMode: false
	});
	
});

$('.scrollup').click(function(){
	$('body').animate({scrollTop: 0}, 300);
	return false;
});

//кнопка вверх
{
	function init() {
		window.addEventListener('scroll', function(e){
			var distanceY = window.pageYOffset || document.documentElement.scrollTop,
				shrinkOn = 200,
				scrollup = $('.scrollup');
			if (distanceY > shrinkOn) {
				$(scrollup).addClass('scrollup--visible');
			} else {
				if (scrollup.hasClass('scrollup--visible')) {
					scrollup.removeClass('scrollup--visible');
				}
			}
		});
	}
	window.onload = init();
}

//aside
var asideLink = $('.aside-nav>ul>.page_item_has_children>a');
asideLink.click(function(){
	event.preventDefault();
});

//visible
var featureItem = $('.features__item'),
	advantagesItem = $('.advantages__item');

var scheme = $('.scheme__scheme'),
	schemeImg = $('.scheme__img'),
	schemeStep = $('.scheme__step');

$(window).scroll(function(){
	/*if (featureItem.visible()) {
		$(function() {
			$.each(featureItem, function(i, el) {
				setTimeout(function() {
					$(el).addClass('rotateY');
				}, (i * 50));
			});
		});
	};*/
	if (advantagesItem.visible()) {
		$(function() {
			$.each(advantagesItem, function(i, el) {
				setTimeout(function() {
					$(el).addClass('fadeIn');
				}, (i * 50));
			});
		});
	};
	if (scheme.visible()) {
		$(function() {
			scheme.addClass('fadeIn');
			$.each(schemeImg, function(i, el) {
				setTimeout(function() {
					$(el).addClass('fadeIn');
				}, (i * 150));
			});
			$.each(schemeStep, function(i, el) {
				setTimeout(function() {
					$(el).addClass('fadeIn');
				}, (1350 + i * 150));
			});			
		});
	};
});

//fixed nav
window.addEventListener('scroll', function(e){	
	var distanceY = window.pageYOffset || document.documentElement.scrollTop,
		shrinkOn = 160,
		heading = $('.heading__heading'),
		headingNav = $('.navigation'),
		headingNavWrapper = $('.navigation__wrapper');
	if (distanceY > shrinkOn) {
		$(headingNav).removeClass('col-sm-3');
		$(headingNav).addClass('navigation--fixed container');
		$(headingNavWrapper).addClass('col-sm-3');
		$(heading).removeClass('col-sm-9');
	} else {
		if (headingNav.hasClass('navigation--fixed')) {
			headingNav.removeClass('navigation--fixed container');
			headingNav.addClass('col-sm-3');
			$(headingNavWrapper).removeClass('col-sm-3');
			$(heading).addClass('col-sm-9');
		}
	}
});

var test = $('.page_item a');
test.click(function(e){
	$('.my-wave').remove();
	$(this).css({
		position: 'relative',
		overflow: 'hidden'
	});	
	var clickX =  e.offsetX;
    var clickY = e.offsetY;
	var elWidth = $(this).width();
	var elHeight = $(this).height();
	$(this).append('<span class="my-wave"></span');
	$('.my-wave').css({
		left: clickX - elWidth / 2,
		top:  clickY - elHeight * 2,
		width: elWidth,
		height: elWidth,
	});
});

//site-nav link
/*var navLink = $('a.dropdown-toggle');
navLink.removeClass('dropdown-toggle');
navLink.removeAttr('data-toggle');*/

