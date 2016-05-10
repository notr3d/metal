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
			<div class="reviews">
				<div class="reviews__wrapper">
					<div class="reviews__item">
						<div class="reviews__inner">
							<img src="" alt="" class="reviews__img">
							<h2 class="reviews__header">ЗАО "Lorem ИНТЕРНЕШНЛ"</h2>
							<p class="reviews__text">На протяжении ряда лет ЗАО "Lorem Интернешнл" плодотворно сотрудничает с ЗАО "Lorem" в части приобретения у Вашей компании оцинкованного профнастила, используемого в качестве перекрытий при строительстве всех корпусов "Lorem СИТИ" на 65 км МКАДа. Своевременное изготовление и доставка профнастила позволяют нам организовывать строительные работы в соответствии с установленными графиками, что положительно влияет на нашу деятельность в целом. ЗАО "Lorem Интернешнл" подтверждает готовность продолжать наши партнерские отношения, в том числе и при сооружении новых объектов.</p>
						</div>
					</div>
					<div class="reviews__item">
						<div class="reviews__inner">
							<img src="" alt="" class="reviews__img">
							<h2 class="reviews__header">ЗАО "Lorem ИНТЕРНЕШНЛ"</h2>
							<p class="reviews__text">На протяжении ряда лет ЗАО "Lorem Интернешнл" плодотворно сотрудничает с ЗАО "Lorem" в части приобретения у Вашей компании оцинкованного профнастила, используемого в качестве перекрытий при строительстве всех корпусов "Lorem СИТИ" на 65 км МКАДа. Своевременное изготовление и доставка профнастила позволяют нам организовывать строительные работы в соответствии с установленными графиками, что положительно влияет на нашу деятельность в целом. ЗАО "Lorem Интернешнл" подтверждает готовность продолжать наши партнерские отношения, в том числе и при сооружении новых объектов.</p>
						</div>
					</div>
					<div class="reviews__item">
						<div class="reviews__inner">
							<img src="" alt="" class="reviews__img">
							<h2 class="reviews__header">ЗАО "Lorem ИНТЕРНЕШНЛ"</h2>
							<p class="reviews__text">На протяжении ряда лет ЗАО "Lorem Интернешнл" плодотворно сотрудничает с ЗАО "Lorem" в части приобретения у Вашей компании оцинкованного профнастила, используемого в качестве перекрытий при строительстве всех корпусов "Lorem СИТИ" на 65 км МКАДа. Своевременное изготовление и доставка профнастила позволяют нам организовывать строительные работы в соответствии с установленными графиками, что положительно влияет на нашу деятельность в целом. ЗАО "Lorem Интернешнл" подтверждает готовность продолжать наши партнерские отношения, в том числе и при сооружении новых объектов.</p>
						</div>
					</div>
					
				</div>
			</div>
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</main><!-- #main -->

<?php get_footer(); ?>
