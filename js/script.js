//слайдеры
$(document).ready(function () {
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
		dots: true,
		//centerMode: true,
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
});

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