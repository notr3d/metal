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
		<div class="content-area">
			<?php the_title( sprintf( '<h1 class="page-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
			<div class="products">
				<div class="products__wrapper">
					<div class="products__item">
						<a href="#" class="products__inner">
							<h3 class="products__header">Header</h3>
							<p class="products__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quos sapiente ipsa, rerum nemo, iure assumenda in ipsam iusto, quia distinctio voluptas similique harum nesciunt placeat totam doloribus dignissimos ullam!</p>
						</a>
					</div>
					<div class="products__item">
						<a href="#" class="products__inner">
							<h3 class="products__header">Header</h3>
							<p class="products__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quos sapiente ipsa, rerum nemo, iure assumenda in ipsam iusto, quia distinctio voluptas similique harum nesciunt placeat totam doloribus dignissimos ullam!</p>
						</a>
					</div>
					<div class="products__item">
						<a href="#" class="products__inner">
							<h3 class="products__header">Header</h3>
							<p class="products__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quos sapiente ipsa, rerum nemo, iure assumenda in ipsam iusto, quia distinctio voluptas similique harum nesciunt placeat totam doloribus dignissimos ullam!</p>
						</a>
					</div>
					<div class="products__item">
						<a href="#" class="products__inner">
							<h3 class="products__header">Header</h3>
							<p class="products__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quos sapiente ipsa, rerum nemo, iure assumenda in ipsam iusto, quia distinctio voluptas similique harum nesciunt placeat totam doloribus dignissimos ullam!</p>
						</a>
					</div>
					<div class="products__item">
						<a href="#" class="products__inner">
							<h3 class="products__header">Header</h3>
							<p class="products__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quos sapiente ipsa, rerum nemo, iure assumenda in ipsam iusto, quia distinctio voluptas similique harum nesciunt placeat totam doloribus dignissimos ullam!</p>
						</a>
					</div>
					<div class="products__item">
						<a href="#" class="products__inner">
							<h3 class="products__header">Header</h3>
							<p class="products__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quos sapiente ipsa, rerum nemo, iure assumenda in ipsam iusto, quia distinctio voluptas similique harum nesciunt placeat totam doloribus dignissimos ullam!</p>
						</a>
					</div>					
				</div>
			</div>
		</div><!-- #primary -->
	</main><!-- #main -->

<?php get_footer(); ?>
