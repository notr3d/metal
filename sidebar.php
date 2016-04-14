<div class="widget-area col-sm-2 hidden-xs" role="complementary">
	<h2 class="aside-header">Навигация</h2>
	<?php $args = array(
        'depth'       => 0,
		'menu_class'  => 'aside-nav');
	
	wp_page_menu( $args ); ?>
</div><!-- #secondary -->
