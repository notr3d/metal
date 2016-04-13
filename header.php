<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<header id="masthead" class="site-header" role="banner">
				<div class="site-header__wrapper">
					<div class="top-panel">
						<div class="top-panel__wrapper container">
							<div class="top-panel__container">
								<div class="top-panel__item hidden-xs">
									<a class="navbar-brand" href="home">Brand</a>	
								</div>
								<div class="top-panel__item email">
									<button type="button" class="top-panel__button my-hover email__button" data-toggle="modal" data-target="#email">Написать письмо</button>
									<div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="myModalLabel">Написать письмо</h4>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Имя*" required>
													</div>
													<div class="form-group">
														<input type="email" class="form-control" placeholder="Email*" required>
													</div>
													<div class="form-group">
														<input type="tel" class="form-control" placeholder="Телефон">
													</div>

													<div class="form-group">
														<textarea rows="10" class="form-control" placeholder="Сообщение..."></textarea>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary">Отправить</button>
													<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
												</div>
											</div>
										</div>
									</div>
								</div>								
								<div class="top-panel__item callback">
									<button type="button" class="top-panel__button my-hover callback__button" data-toggle="modal" data-target="#callback">Обратный звонок</button>
									<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title" id="myModalLabel">Обратный звонок</h4>
												</div>
												<div class="modal-body">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Имя*" required>
													</div>
													<div class="form-group">
														<input type="tel" class="form-control" placeholder="Телефон*" required>
													</div>
													<div class="form-group">
														<textarea rows="3" class="form-control" placeholder="Сообщение..."></textarea>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-primary">Отправить</button>
													<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
												</div>
											</div>
										</div>
									</div>
								</div>								
								<div class="top-panel__item">
									<a href="tel:+74955555555" class="top-panel__button phone my-hover">+7 (495)<span class="phone__number"> 555-55-55</span></a>
								</div>								
							</div>
						</div>
					</div>
					<div class="site-nav">
						<div class="container">
							<nav class="navbar navbar-default" role="navigation">
								<a class="skip-link screen-reader-text" href="#content">
									<?php _e( 'Skip to content', '_s' ); ?>
								</a>
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
										<span class="sr-only"><?php _e('Toggle navigation', '_s'); ?></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand visible-xs" href="home">Brand</a>
								</div>

								<div class="collapse navbar-collapse" id="navbar-collapse-main">
									<ul class="nav navbar-nav">
										<?php if( has_nav_menu( 'primary' ) ) :
												wp_nav_menu( array(
																	'theme_location'  => 'primary',
																	'container'       => false,
																	//'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
																	'walker'          => new Bootstrap_Nav_Menu(),
																	'fallback_cb'     => null,
															'items_wrap'      => '%3$s',// skip the containing <ul>
															)
													);
												else :
													wp_list_pages( array(
															'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
															'walker'          => new Bootstrap_Page_Menu(),
															'title_li'        => null,
														)
													);
											endif; ?>
									</ul>
									<?php get_search_form(); ?>
								</div>
								<!-- /.navbar-collapse -->
							</nav>
						</div>
					</div>
					<!-- #site-navigation -->
				</div>
			</header>
			<!-- #masthead -->

			<div class="site-content">
				<div class="site-content__wrapper">