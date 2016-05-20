		</div>
	</div>
	<footer class="site-footer" role="contentinfo">
		<div class="site-footer__wrapper lcw">
			<div class="site-footer__item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer/email.png" alt="" class="site-footer__img">
				<a href="mailto:info@bigmsk.ru" class="site-footer__link">info@bigmsk.ru</a><br>
				<button type="button" class="site-footer__button" data-toggle="modal" data-target="#email">Написать письмо</button>
				<div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Написать письмо</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Имя*" required>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email*" required>
								</div>
								<div class="form-group">
									<input type="tel" class="form-control" placeholder="Телефон">
								</div>

								<div class="form-group">
									<textarea rows="10" class="form-control" placeholder="Сообщение..."></textarea>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary">Отправить</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="site-footer__item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer/tel.png" alt="" class="site-footer__img">
				<a href="skype:+74957893686" class="site-footer__link">+7 (495) 789-36-86</a><br>
				<button type="button" class="site-footer__button" data-toggle="modal" data-target="#callback">Заказать звонок</button>
				<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="myModalLabel">Обратный звонок</h4>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Имя*" required>
								</div>
								<div class="form-group">
									<input type="tel" class="form-control" placeholder="Телефон*" required>
								</div>
								<div class="form-group">
									<textarea rows="3" class="form-control" placeholder="Сообщение..."></textarea>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary">Отправить</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="site-footer__item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer/address.png" alt="" class="site-footer__img">
				<p class="site-footer__address">г. Москва, ул. Ибрагимова, д. 31,<br>офис 308</p>
			</div>
		</div>
		<div class="site-footer__copy">© 2014 «BIG Constructions»</div>
		<?php if ( is_page($page = "contacts") ) : ?>
			<div class="contacts__map" id="map"></div>
		<?php endif; ?>	
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
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/citiesArray.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cities.js"></script>		
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/constructor.js"></script>	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script-2.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>
