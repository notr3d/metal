//новая навигация
var siteNavLink = $('.site-nav__link');
siteNavLink.hover(function(){
	if (!siteMap.hasClass('opened')) {
		$(this).addClass('hover');
		var siteNavSubMenu = $(this).next().next();
		siteNavSubMenu.show();
	}
}, function(){
	$(this).removeClass('hover');
	var siteNavSubMenu = $(this).next().next();
	siteNavSubMenu.hide();
});

//ховер для сабменю
var siteNavSubMenu = $('.my-sub-menu');
siteNavSubMenu.hover(function(){
	$(this).show();
	$(this).prev().addClass('hover');
}, function(){
	$(this).hide();
	$(this).prev().removeClass('hover');
})

//site map
var siteMap = $('.site-map');
var siteMapBtn = $('#site-map');
siteMapBtn.click(function(){
	siteMap.slideToggle(300);
	siteMap.toggleClass('opened');
	siteMap.parent().prev().toggleClass('active');
})
//мобильное меню
var mobileMenu = $('.mobile-menu');
var mobileMenuBtn = $('#mobile-menu');
mobileMenuBtn.click(function(){
	if (!mobileMenu.hasClass('opened')) {
		mobileMenu.slideDown(300);
		mobileMenu.addClass('opened');
	} else {
		mobileMenu.slideUp(300);
		mobileMenu.removeClass('opened');
	}
});

//мобильное меню
var menuItem = $('.menu-item-has-children');
menuItem.append('<button class="my-sub-menu__open">');
var subMenuButton = $('.my-sub-menu__open');
subMenuButton.click(function(){
	$(this)
		.prev()
		.slideToggle(300);
	
	$(this)
		.toggleClass('my-sub-menu__open--opened');
	
	$(this)
		.parent()
		.parent()
		.parent()
		.parent()
		.siblings()
		.find('.sub-menu')
		.slideUp(300);
	
	$(this)
		.parent()
		.parent()
		.parent()
		.parent()
		.siblings()
		.find(subMenuButton)
		.removeClass('my-sub-menu__open--opened');
});

//поиск
var searchBtn = $('#search');
var searchField = $('#searchform');
searchBtn.click(function(){
	searchField.toggleClass('active');
	if (window.innerWidth < 768) {
		searchField.slideToggle();
	}
});

//кнопка читать дальше
var readMoreBtn = $('.features__read-more-button');
readMoreBtn.click(function(){
	$(this).parent().next().slideToggle(300);
});

//красим сайт хедер
$(window).bind('scroll', function(){ 		
	var siteHeader = $('.site-header');
	var scrollTop = $(window).scrollTop(); 
	if (scrollTop > 420) {
		siteHeader.addClass('site-header--active');
	} else {
		siteHeader.removeClass('site-header--active');
	};
});

//parallax effect
$(window).bind('scroll', function(){
	var pageHeading = $('.page-heading'),
		start = 0,
		end = 500,
		offset = $(document).scrollTop(),
		opacity = 0;
    if (offset <= start) {
        opacity = 1;
    } else if (offset <= end) {
        opacity = 1 - offset / end;
    }
    pageHeading.css('opacity', opacity);
});