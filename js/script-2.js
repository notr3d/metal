//новая навигация
var siteNavLink = $('.site-nav__link');
siteNavLink.hover(function(){
	if (!siteMap.hasClass('opened')) {
		$(this).addClass('hover');
		var siteNavSubMenu = $(this).next();
		siteNavSubMenu.show();
	}
}, function(){
	$(this).removeClass('hover');
	var siteNavSubMenu = $(this).next();
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

//карта сайта
var siteMapBtn = $('#site-map');
var siteMap = $('.site-map');
var siteMapClose = $('.site-map__close');
siteMapBtn.click(function(){
	if (!siteMap.hasClass('opened')) {
		siteMap.slideDown(300);
		siteMap.addClass('opened');
	} else {
		siteMap.slideUp(300);
		siteMap.removeClass('opened');
	}
});
siteMapClose.click(function(){
	siteMap.slideUp();
	siteMap.removeClass('opened');
});

//мобильное меню
var menuItem = $('.menu-item-has-children');
menuItem.append('<button class="my-sub-menu__open">');
var subMenuButton = $('.my-sub-menu__open');
subMenuButton.click(function(){
	$(this).prev().slideToggle(300);
	$(this).toggleClass('my-sub-menu__open--opened');
	$(this).parent().parent().parent().parent().siblings().find('.sub-menu').slideUp(300);	$(this).parent().parent().parent().parent().siblings().find(subMenuButton).removeClass('my-sub-menu__open--opened');
});

//поиск
var searchBtn = $('#search');
var searchField = $('#searchform');
searchBtn.click(function(){
	searchField.toggleClass('active');
	if (window.innerWidth < 768) {
		searchField.slideToggle();
	}
})



//кнлпка читать дальше
var readMoreBtn = $('.features__read-more-button');
readMoreBtn.click(function(){
	$(this).parent().next().slideToggle(300);
})