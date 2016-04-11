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
		<div class="content-area col-sm-9">
			<?php the_title( sprintf( '<h1 class="page-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
			<article>
				<h2>Система менеджмента качества ISO 9001</h2>
				<p>Система менеджмента качества с 2005 года во всех процессах сертифицирована на соответствие требованиям международного стандарта ISO 9001, которое постоянно подтверждается в ходе ежегодных аудитов, проводимых специалистами международной компании TUV (Германия). Наличие сертификата TUV говорит о том, что в ЗАО «Lorem» все технологические и бизнес-процессы организованы таким образом, что поставка некачественной продукции исключена. В производственных процессах ЗАО «Lorem» принят многоступенчатый контроль качества на каждом этапе производства: от входного контроля сырья до отгрузки готовой продукции потребителю.</p>
			</article>
		</div><!-- #primary -->
		<?php get_sidebar($name = 'test'); ?>
	</main><!-- #main -->

<?php get_footer(); ?>
