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

	<main class="contacts container" role="main">
		<?php the_title( sprintf( '<h1 class="page-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
		<div class="content-area">
			<form action="" class="contacts__form">
				<div class="contacts__item col-sm-4">
					<input type="text" class="form-control" placeholder="Ваше имя*" required>		
				</div>
				<div class="contacts__item col-sm-4">
					<input type="email" class="form-control" placeholder="Ваш email*" required>
				</div>
				<div class="contacts__item col-sm-4">
					<input type="tel" class="form-control" placeholder="Ваш телефон">
				</div>
				<div class="contacts__item col-sm-12">
					<textarea rows="1" class="form-control" placeholder="Ваше сообщение..."></textarea>
				</div>
				<div class="contacts__item col-sm-12 text-center">
					<button type="button" class="my-fancy-button">Отправить</button>
				</div>		
			</form>	
		</div><!-- #primary -->
	</main><!-- #main -->

<?php get_footer(); ?>
