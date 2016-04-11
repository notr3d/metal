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

	<main class="about container" role="main">
		<div class="content-area col-sm-9">
		<?php the_title( sprintf( '<h1 class="page-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
			<div class="about__slider-area">
				<div class="about-main-slider">
					<div class="about-main-slider__item">1</div>
					<div class="about-main-slider__item">2</div>
					<div class="about-main-slider__item">3</div>
					<div class="about-main-slider__item">4</div>
					<div class="about-main-slider__item">5</div>
					<div class="about-main-slider__item">6</div>
				</div>
				<div class="about-nav-slider">
					<div class="about-nav-slider__item">1</div>
					<div class="about-nav-slider__item">2</div>
					<div class="about-nav-slider__item">3</div>
					<div class="about-nav-slider__item">4</div>
					<div class="about-nav-slider__item">5</div>
					<div class="about-nav-slider__item">6</div>
				</div>
			</div>
			<article>
				<h2>Компания Lorem</h2>
				<p>Компания Lorem зарегистрирована 11 июля 1997 года. Начинала свою деятельность компания в качестве оптового торговца металлопродукцией. В настоящее время компания превратилась в своеобразный холдинг, объединяющий крупного оптового поставщика металлопродукции, производителя изделий из оцинкованной стали и стали с покрытиями, проектировщика и изготовителя полнокомплектных зданий, теплоизоляционных изделий, а также разветвленную сбытовую сеть, включающую собственные торговые предприятия и долгосрочные договоры с магазинами строительных материалов.</p>
				<p>За прошедшие годы ЗАО «Lorem» снискало у потребителей репутацию добросовестного партнера, строго соблюдающего сроки поставки и обеспечивающего высокое качество производимой продукции. Компания стремится поддерживать и укреплять свой положительный имидж, и поэтому очень тщательно подходит к выбору поставщиков по всем направлениям. Для изготовления продукции ЗАО «Lorem» использует только высококачественные материалы крупнейших российских и зарубежных производителей.</p>
				<p>Стратегия развития компании «Lorem» направлена на обеспечение всех отраслей народного хозяйства комплектными зданиями различного назначения, а также полным спектром продукции, изготавливаемой из стали оцинкованной и стали оцинкованной с полимерным покрытием и теплоизоляционными изделиями. Динамичное движение вперед позволило компании «Lorem» выйти на лидирующие позиции в России в категории Сервисных металлоцентров и поставщиков полнокомплектных зданий различного назначения.</p>
			</article>
		</div><!-- #primary -->
		<?php get_sidebar($name='test'); ?>
	</main><!-- #main -->

<?php get_footer(); ?>
