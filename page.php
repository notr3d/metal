<?php get_header(); ?>
	<main class="container" role="main">
		<?php the_title( sprintf( '<h1 class="page-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
		<div class="content-area col-sm-10">			

		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</main><!-- #main -->
<?php get_footer(); ?>
