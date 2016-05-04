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
		<div class="product">
			<div class="product__wrapper">
				<div class="heading">
					<h1>Быстровозводимые сооружения <span>Тип 1</span></h1>
					<h2>проверенное решение для строительства зданий</h2>
				</div>
				<div class="features">
					<h2 class="page-header">Мы производим и помогаем строить</h2>
					<div class="features__wrapper">
						<div class="features__item">
							<img src="" alt="">
							<p>Склады</p>
						</div>
						<div class="features__item">
							<img src="" alt="">
							<p>Сельскохозяйственные здания</p>
						</div>
						<div class="features__item">
							<img src="" alt="">
							<p>Автоцентры</p>
						</div>
						<div class="features__item">
							<img src="" alt="">
							<p>Магазины</p>
						</div>
						<div class="features__item">
							<img src="" alt="">
							<p>Производственные здания</p>
						</div>
					</div>					
				</div>
				<div class="advantages">
					<h2 class="page-header">Преимущества систем Тип 1</h2>
					<div class="advantages__wrapper">
						<div class="advantages__item">
							<img src="" alt="">
							<p>Экономия 25%</p>
						</div>
						<div class="advantages__item">
							<img src="" alt="">
							<p>Полностью готовое здание в кратчайшие сроки</p>
						</div>
						<div class="advantages__item">
							<img src="" alt="">
							<p>Комплектующие полностью готовые к сборке</p>
						</div>
						<div class="advantages__item">
							<img src="" alt="">
							<p>Длительный срок эксплуатации</p>
						</div>
						<div class="advantages__item">
							<img src="" alt="">
							<p>Готовая проектная документация</p>
						</div>
						<div class="advantages__item">
							<img src="" alt="">
							<p>Превосходные сейсмические характеристики</p>
						</div>
						<div class="advantages__item">
							<img src="" alt="">
							<p>Экологичность</p>
						</div>
						<div class="advantages__item">
							<img src="" alt="">
							<p>Антикоррозийная защита</p>
						</div>
					</div>
				</div>
				<div class="showcase">
					<h2 class="page-header">Построено более 100 объектов</h2>
					<div class="showcase__wrapper">
						<div class="showcase__item">							
							<button type="button" class="mw__open" data-toggle="modal" data-target="#mw-1">
							</button>
							<div class="showcase__mask">
								<h3 class="showcase__header">Свиноводческий комплекс</h3>
								<p class="showcase__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam blanditiis odit optio hic in tempora quisquam error, reprehenderit eaque totam quam vero, vel tempore eos doloribus eligendi, voluptatibus, facere voluptatem?</p>
							</div>							
						</div>
						<div class="mw modal fade" id="mw-1">
							<div class="mw__dialog modal-dialog">
								<div class="mw__content modal-content">
									<div class="modal-header">
										<button type="button" class="mw__close close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="mw__header modal-title">Свиноводческий комплекс</h4>
									</div>
									<div class="mw__body">
										<div class="mw__column mw__column--left">
											
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
	</main><!-- #main -->

<?php get_footer(); ?>
