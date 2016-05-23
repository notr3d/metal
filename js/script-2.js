var siteNavLink = $('.site-nav__link');
siteNavLink.hover(function(){
	if (!siteMap.hasClass('opened')) {
		$(this).addClass('hover');
		var siteNavSubMenu = $(this).next();
		siteNavSubMenu.fadeIn();
		siteNavSubMenu.show();
	}
}, function(){
	$(this).removeClass('hover');
	var siteNavSubMenu = $(this).next();
	siteNavSubMenu.hide();
});

var siteNavSubMenu = $('.my-sub-menu');
siteNavSubMenu.hover(function(){
	$(this).show();
	$(this).prev().addClass('hover');
}, function(){
	$(this).fadeOut();
	$(this).prev().removeClass('hover');
})

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

var menuItem = $('.menu-item-has-children');
menuItem.append('<button class="my-sub-menu__open">');
var subMenuButton = $('.my-sub-menu__open');
subMenuButton.click(function(){
	$(this).prev().slideToggle(300);
	$(this).parent().parent().parent().parent().siblings().find('.sub-menu').slideUp(300);
});

var searchBtn = $('#search');
var searchField =$('.search-form__search-field');
searchBtn.click(function(){
	searchField.toggleClass('search-form__search-field--active');
})
