var siteNavLink = $('.site-nav__link');
siteNavLink.hover(function(){
	var siteNavSubMenu = $(this).next();
	siteNavSubMenu.show();
}, function(){
	var siteNavSubMenu = $(this).next();
	siteNavSubMenu.hide();
});

var siteNavSubMenu = $('.sub-menu');
siteNavSubMenu.hover(function(){
	$(this).show();
}, function(){
	$(this).hide();
})

var siteMapBtn = $('#site-map');
var siteMap = $('.site-map');
var siteMapClose = $('.site-map__close');
siteMapBtn.click(function(){
	siteMap.slideDown();
});
siteMapClose.click(function(){
	siteMap.slideUp();
});

