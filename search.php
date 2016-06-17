<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _s
 */

get_header(); ?>

	<main id="search" class="site-main container" role="main">
		<header class="page-header">
			<h1 class="page-title"><?php printf( esc_html__( 'Результаты поиска для: %s', '_s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header>
		<div id="" class="content-area col-sm-9">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div>
		<?php get_sidebar($name = 'test'); ?>
	</main>

<?php get_footer(); ?>
