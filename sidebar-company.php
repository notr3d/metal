<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="widget-area col-sm-3" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	123
</div><!-- #secondary -->
