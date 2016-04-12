//слайдеры
$(document).ready(function () {
	//home
	$('.main-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.nav-slider',
		autoplay: true,
		autoplaySpeed: 10000
	});
	$('.nav-slider').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.main-slider',
		dots: false,
		centerMode: true,
		focusOnSelect: true
	});
	$('.showcase__slider').slick({
		infinite: true,
		slidesToShow: 6,
		slidesToScroll: 5,
		arrows: true,
		autoplay: true,
  		autoplaySpeed: 10000
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
});

//карта
{	
    var myCenter=new google.maps.LatLng(54.212438, 37.646569);
    function initialize(){
        var mapProp = {
            center:myCenter,
            scrollwheel:false,
            zoom:16,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById("footerMap"), mapProp);
        var marker=new google.maps.Marker({
            position:myCenter,
            icon:'/wp-content/themes/steel_wp/img/map-icon.png',
            size: new google.maps.Size(20, 32)
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
}

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
var asideLink = $('.aside-nav>ul>.page_item_has_children>a'),
	asideUl = $('.aside-nav>ul>.page_item_has_children>a+ul');
asideLink.click(function(){
	event.preventDefault();
});