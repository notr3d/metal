<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
		</div>
	</div>
	<!-- #content -->
	<?php if ( is_page($page = "contacts") ) : ?>
		<div class="contacts__map" id="map"></div>
	<?php endif; ?>
	<footer class="site-footer" role="contentinfo">
		<div class="site-footer__wrapper">
			<div class="container">
				<div class="site-footer__nav">
					<?php wp_page_menu(); ?>					
				</div>
				<div class="site-footer__info">
					<div class="site-footer__item col-sm-4">
							<a href="mailto:#" class="email__button">first.last@example.com</a>		
						<button type="button" class="my-fancy-button" data-toggle="modal" data-target="#email">Написать письмо</button>
					</div>
					<div class="site-footer__item col-sm-4">
							<a href="tel:+74955555555" class="callback__button">+7 (495)<span class="phone__number"> 555-55-55</span></a>					
						<button type="button" class="my-fancy-button" data-toggle="modal" data-target="#callback">Обратный звонок</button>
					</div>
					<div class="site-footer__item col-sm-4">
						<address>
							<strong>Lorem, Inc.</strong>
							<br>1355 Market Street, Suite 900
							<br>San Francisco, CA 94103
						</address>
					</div>
				</div>
			</div>
		</div>
		<?php if (! is_page($page = "contacts") ) : ?>
			<div class="site-footer__map" id="map"></div>
		<?php endif; ?>		
		<div class="site-footer__copy container">
			© 2016 Lorem. All rights reserved.
		</div>	
		<button class="scrollup"></button>
	</footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
	<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script>
		var myCenter=new google.maps.LatLng(55.789061, 37.729310);
    function initialize(){
        var mapProp = {
            center:myCenter,
            scrollwheel:false,
            zoom:16,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map=new google.maps.Map(document.getElementById('map'), mapProp);
        var marker=new google.maps.Marker({
            position:myCenter,
            icon:'<?php echo get_template_directory_uri(); ?>/img/map-icon.png',
            size: new google.maps.Size(20, 32)
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.visible.js"></script>	
	<!--
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/three.js"></script>	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/OrbitControls.js"></script>-->				
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/citiesArray.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cities.js"></script>		
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/constructor.js"></script>	
	<?php wp_footer(); ?>
	</body>
</html>
