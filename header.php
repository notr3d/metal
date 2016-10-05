<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="profile" href="http://gmpg.org/xfn/11">-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
	<link href='https://fonts.googleapis.com/css?family=Exo+2:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header class="site-header">
			<div class="site-header__wrapper lcw">
				<a href="<?php echo get_permalink( get_page_by_title('Главная')->ID ); ?>" class="site-header__logo"></a>
				<div class="site-nav">
					<div class="site-nav__item">
						<a href="<?php echo get_permalink( get_page_by_title('О компании')->ID ); ?>" class="site-nav__link site-nav__link--has-children">Компания</a>
						<div class="my-sub-menu my-sub-menu--1">
							<div class="my-sub-menu__wrapper lcw">
								<div class="my-sub-menu__item my-sub-menu__item--heading">
									<h3 class="my-sub-menu__header">Компания</h3>
									<p class="my-sub-menu__note">Многолетний опыт строительства быстровозводимых зданий, собственные заводы изготовители и сотни благодарных клиентов</p>
								</div>
								<div class="my-sub-menu__item my-sub-menu__item--link">
									<a href="<?php echo get_permalink( get_page_by_title('О компании')->ID ); ?>" class="my-sub-menu__link">
										<img src="<?php echo get_template_directory_uri(); ?>/img/header/menu/1.png" alt="" class="my-sub-menu__img">
										<span class="my-sub-menu__text">О нас</span>
									</a>
								</div>
								<div class="my-sub-menu__item my-sub-menu__item--link">
									<a href="<?php echo get_permalink( get_page_by_title('Производство')->ID ); ?>" class="my-sub-menu__link">
										<img src="<?php echo get_template_directory_uri(); ?>/img/header/menu/2.png" alt="" class="my-sub-menu__img">
										<span class="my-sub-menu__text">Производство</span>
									</a>
								</div>
								<!--<div class="my-sub-menu__item my-sub-menu__item--link">
									<a href="<?php echo get_permalink( get_page_by_title('Заказчики')->ID ); ?>" class="my-sub-menu__link">
										<img src="<?php echo get_template_directory_uri(); ?>/img/header/menu/3.png" alt="" class="my-sub-menu__img">
										<span class="my-sub-menu__text">Сотрудничество</span>
									</a>
								</div>-->								
							</div>
						</div>
					</div>
					<div class="site-nav__item">
						<a href="<?php echo get_permalink( get_page_by_title('Полнокомплектные здания')->ID ); ?>" class="site-nav__link site-nav__link--has-children">Продукция</a>
						<div class="my-sub-menu my-sub-menu--2">
							<div class="my-sub-menu__wrapper lcw">
								<div class="my-sub-menu__item my-sub-menu__item--heading">
									<h3 class="my-sub-menu__header">Продукция</h3>
									<p class="my-sub-menu__note">Многолетний опыт строительства быстровозводимых зданий, собственные заводы изготовители и сотни благодарных клиентов</p>
								</div>
								<div class="my-sub-menu__item my-sub-menu__item--link">
									<a href="<?php echo get_permalink( get_page_by_title('Полнокомплектные здания')->ID ); ?>" class="my-sub-menu__link">
										<img src="<?php echo get_template_directory_uri(); ?>/img/header/menu/4.png" alt="" class="my-sub-menu__img">
										<span class="my-sub-menu__text">Полнокомплектные</span>
										<span class="my-sub-menu__text">здания</span>
									</a>
								</div>
								<div class="my-sub-menu__item my-sub-menu__item--link">
									<a href="<?php echo get_permalink( get_page_by_title('Металлоконструкции')->ID ); ?>" class="my-sub-menu__link">
										<img src="<?php echo get_template_directory_uri(); ?>/img/header/menu/5.png" alt="" class="my-sub-menu__img">
										<span class="my-sub-menu__text">Металлоконструкции</span>
									</a>
								</div>								
							</div>
						</div>
					</div>
					<div class="site-nav__item">
						<a href="<?php echo get_permalink( get_page_by_title('Проектирование')->ID ); ?>" class="site-nav__link site-nav__link--has-children">Услуги</a>
						<div class="my-sub-menu my-sub-menu--3">
							<div class="my-sub-menu__wrapper lcw">
								<div class="my-sub-menu__item my-sub-menu__item--heading">
									<h3 class="my-sub-menu__header">Услуги</h3>
									<p class="my-sub-menu__note">Многолетний опыт строительства быстровозводимых зданий, собственные заводы изготовители и сотни благодарных клиентов</p>
								</div>
								<div class="my-sub-menu__item my-sub-menu__item--link">
									<a href="<?php echo get_permalink( get_page_by_title('Проектирование')->ID ); ?>" class="my-sub-menu__link">
										<img src="<?php echo get_template_directory_uri(); ?>/img/header/menu/6.png" alt="" class="my-sub-menu__img">
										<span class="my-sub-menu__text">Проектирование</span>
									</a>
								</div>
								<div class="my-sub-menu__item my-sub-menu__item--link">
									<a href="<?php echo get_permalink( get_page_by_title('Монтаж')->ID ); ?>" class="my-sub-menu__link">
										<img src="<?php echo get_template_directory_uri(); ?>/img/header/menu/7.png" alt="" class="my-sub-menu__img">
										<span class="my-sub-menu__text">Монтаж</span>
									</a>
								</div>
								<div class="my-sub-menu__item my-sub-menu__item--link">
									<a href="<?php echo get_permalink( get_page_by_title('Доставка')->ID ); ?>" class="my-sub-menu__link">
										<img src="<?php echo get_template_directory_uri(); ?>/img/header/menu/8.png" alt="" class="my-sub-menu__img">
										<span class="my-sub-menu__text">Доставка</span>
									</a>
								</div>								
							</div>
						</div>
					</div>
					<div class="site-nav__item">
						<a href="<?php echo get_permalink( get_page_by_title('конструктор')->ID ); ?>" class="site-nav__link">Конструктор</a>
					</div>
					<div class="site-nav__item">
						<a href="<?php echo get_permalink( get_page_by_title('контакты')->ID ); ?>" class="site-nav__link">Контакты</a>
					</div>
				</div>
				<?php get_search_form(); ?>
				<button id="search" class="site-header__button site-header__button--search"></button>
				<button id="site-map" class="site-header__button site-header__button--site-map"></button>				
			</div>
			<div class="site-map">
				<div class="site-map__wrapper lcw">
					<?php 						
						wp_nav_menu(array(
							'theme_location' => 'site-map',
							'menu_class' => 'site-map__container'
						));
					?>
				</div>
			</div>
		</header>
		<div class="site-content">
			<div class="site-content__wrapper">