<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<main class="container" role="main">
		<?php the_title( sprintf( '<h1 class="page-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
		<div class="content-area col-sm-10">			
			<div class="portfolio">
				<div class="portfolio__wrapper">
					<div class="portfolio__item">
						<div class="portfolio__inner">							
							<div class="portfolio__mask">
								<h3 class="portfolio__header">Объект №1</h3>
								<p class="portfolio__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam blanditiis odit optio hic in tempora quisquam error, reprehenderit eaque totam quam vero, vel tempore eos doloribus eligendi, voluptatibus, facere voluptatem?</p>
							</div>							
							<button type="button" class="mw__open" data-toggle="modal" data-target="#mw-1">
								<img src="" alt="">
							</button>
							<div class="mw modal fade" id="mw-1" tabindex="-1">
								<div class="mw__dialog modal-dialog">
									<div class="mw__content modal-content">
										<div class="modal-header">
											<button type="button" class="mw__close close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="mw__header modal-title">Объект №1</h4>
										</div>
										<div class="mw__body">
											<div class="mw__column mw__column--left">
												<div class="mw-top-slider">
													<div class="mw-top-slider__item">
														<img src="" alt="">
													</div>
													<div class="mw-top-slider__item">
														<img src="" alt="">
													</div>
													<div class="mw-top-slider__item">
														<img src="" alt="">
													</div>
														<div class="mw-top-slider__item">
														<img src="" alt="">
													</div>
														<div class="mw-top-slider__item">
														<img src="" alt="">
													</div>
												</div>
												<div class="mw-bot-slider">
													<div class="mw-bot-slider__item">
														<img src="" alt="">
													</div>
													<div class="mw-bot-slider__item">
														<img src="" alt="">
													</div>
													<div class="mw-bot-slider__item">
														<img src="" alt="">
													</div>
													<div class="mw-bot-slider__item">
														<img src="" alt="">
													</div>
													<div class="mw-bot-slider__item">
														<img src="" alt="">
													</div>
												</div>
											</div>
											<div class="mw__column mw__column--right">
												<div class="mw__item">
													<p>Тип:</p>
													<p>Сельское хозяйство</p>
												</div>
												<div class="mw__item mw__item--small">
													<p>Страна:</p>
													<p>Россия</p>
												</div>
												<div class="mw__item mw__item--small">
													<p>Год:</p>
													<p>2016</p>
												</div>
												<div class="mw__item">
													<p>Поставка:</p>
													<p>Каркас, дополнительные комплектующие (проемы под окна, двери)</p>
												</div>									
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
														
				</div>
			</div>
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</main><!-- #main -->

<?php get_footer(); ?>
