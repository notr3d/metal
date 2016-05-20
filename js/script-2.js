var siteNavLink = $('.site-nav__link');
siteNavLink.hover(function(){
	var siteNavSubMenu = $(this).next();
	siteNavSubMenu.show();
}, function(){
	var siteNavSubMenu = $(this).next();
	siteNavSubMenu.hide();
});

var siteNavSubMenu = $('.my-sub-menu');
siteNavSubMenu.hover(function(){
	$(this).show();
}, function(){
	$(this).hide();
})

var siteMapBtn = $('#site-map');
var siteMap = $('.site-map');
var siteMapClose = $('.site-map__close');
siteMapBtn.click(function(){
	siteMap.slideToggle(300);
});
siteMapClose.click(function(){
	siteMap.slideUp();
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
