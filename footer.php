		</div>
	</div>
	<footer class="site-footer" role="contentinfo">
		<div class="site-footer__wrapper lcw">
			<div class="site-footer__item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer/email.png" alt="" class="site-footer__img">
				<a href="mailto:info@bigmsk.ru" class="site-footer__link">info@bigmsk.ru</a><br>
				<a href="<?php echo get_permalink( get_page_by_title('контакты')->ID ); ?>" class="site-footer__button">Написать письмо</a>
				<!--<div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
				</div>-->
			</div>
			<div class="site-footer__item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer/tel.png" alt="" class="site-footer__img">
				<a href="skype:+74957893686" class="site-footer__link">+7 (495) 789-36-86</a><br>
				<button type="button" class="site-footer__button callback__open">Заказать звонок</button>
				<div class="callback">
					<div class="callback__wrapper">
						<div class="callback__headeing">
							<h2 class="callback__header">Заказать обратный звонок</h2>
						</div>
						<div class="callback__body">
							<form method="post" id="callback" action="javascript:void(null);" onsubmit="sendCallback()">
								<div class="callback__item">
									<input type="text" name="name" required>
									<label for="name">Имя *</label>
								</div>
								<div class="callback__item">
									<input type="tel" name="tel" required>
									<label for="tel">Телефон *</label>
								</div>
								<div class="callback__item">
									<input type="email" name="email" required>
									<label for="email">Почта *</label>
								</div>
								<div class="callback__item">
									<input type="submit" class="callback__submit" value="Отправить"> 
								</div>
							</form>
						</div>							
						<button class="callback__close">×</button>
					</div>
				</div>
			</div>
			<div class="site-footer__item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer/address.png" alt="" class="site-footer__img">
				<p class="site-footer__address">г. Москва, ул. Ибрагимова, д. 31,<br>офис 308</p>
			</div>
		</div>
		<div class="site-footer__copy">© 2014 «BIG Construction»</div>
		<button class="scrollup"></button>
	</footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
	<script  src="<?php echo get_template_directory_uri(); ?>/js/jquery.visible.js"></script>		
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script-2.js"></script>
	<?php if (is_page($page = "Конструктор")): ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/citiesArray.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/cities.js"></script>		
		<script src="<?php echo get_template_directory_uri(); ?>/js/constructor.js"></script>
	<?php endif; ?>	
	<?php if (is_page($page = "Контакты")): ?>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
			var center = new google.maps.LatLng(55.789061, 37.729310);
			var init = function(){
				var prop = {
					center: center,
					scrollwheel: false,
					zoom: 16,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					zoomControl: false,
					mapTypeControl: false,
					streetViewControl: false
				};
				var map = new google.maps.Map(document.getElementById('map'), prop);
				var marker = new google.maps.Marker({
					position: center,
					icon: '<?php echo get_template_directory_uri(); ?>/img/map-icon.png',
					size: new google.maps.Size(20, 32)
				});
				marker.setMap(map);				
			};
			google.maps.event.addDomListener(window, 'load', init);
		</script>
	<?php endif; ?>	
	<script>
		function sendCallback() {			
			var callbackForm = $('#callback');
			var callbackData = callbackForm.serialize();
			$.ajax({
				type: 'POST',
				url: '<?php echo get_template_directory_uri(); ?>/callback.php',
				data: callbackData,
				success: function(data) {
					alert('Ваше сообщение отправлено');
				},
				error: function(xhr, str){
					alert(xhr.responseCode);
				}
			});
		};
	</script>			
	<?php wp_footer(); ?>
	</body>
</html>
