		</div>
	</div>
	<footer class="site-footer" role="contentinfo">
		<div class="site-footer__wrapper lcw">
			<div class="site-footer__item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer/email.png" alt="" class="site-footer__img">
				<a href="mailto:info@bigmsk.ru" class="site-footer__link">info@bigmsk.ru</a><br>
				<!--<a href="<?php echo get_permalink( get_page_by_title('контакты')->ID ); ?>" class="site-footer__button">Написать письмо</a>-->
				<button type="button" class="site-footer__button callback__open">Написать письмо</button>
			</div>
			<div class="site-footer__item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer/tel.png" alt="" class="site-footer__img">
				<a href="skype:+74957893686" class="site-footer__link">+7 (495) 726-57-22</a><br>
				<button type="button" class="site-footer__button callback__open">Заказать звонок</button>
				<div class="callback">
					<div class="callback__bg"></div>
					<div class="callback__wrapper">							
						<div class="callback__body">							
							<div id="contact_body">
							<h2 class="callback__header">Заказать обратный звонок</h2>
								<form class="callback__form" action="javascript:void(null);">
									<div class="callback__item">
										<input type="text" name="name" required>
										<label for="name">Имя *</label>
									</div>
									<div class="callback__item">
										<input type="tel" name="tel" maxlength="17"  required>									
										<label for="tel">Телефон *</label>
									</div>
									<div class="callback__item">
										<input type="email" name="email" required>
										<label for="email">Почта *</label>
									</div>
									<div class="callback__item">
										<textarea name="message" rows="3" placeholder="Сообщение"></textarea>
									</div>
									<div class="callback__item">
										<input type="file" name="file" id="file">
										<label for="file">Приложить файл</label>
									</div>
									<div class="callback__item">
										<input type="submit" id="callback__submit" value="Отправить">
									</div>
								</form>
							</div>
						</div>							
						<button class="callback__close">×</button>
						<div class="callback__success">
							<img src="<?php echo get_template_directory_uri(); ?>/img/callback-success.png" alt="" class="callback__img">
							<div id="callback__result"></div>
						</div>
					</div>					
				</div>
			</div>
			<div class="site-footer__item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/footer/address.png" alt="" class="site-footer__img">
				<p class="site-footer__address">г. Москва, ул. Ибрагимова, д. 31<!--,<br>офис 308--></p>
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
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD3ukqE55fjlhfvdlOgolw4O2QarP4iFDw"></script>
		<script>
			var center = new google.maps.LatLng(55.789061, 37.729310);
			var init = function(){
				var prop = {
					center: center,
					scrollwheel: true,
					zoom: 14,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					mapTypeControl: false,
					streetViewControl: false,
					zoomControl: true,
					zoomControlOptions: {
						position: google.maps.ControlPosition.RIGHT_CENTER
					}
				};
				var map = new google.maps.Map(document.getElementById('map'), prop);
				var marker = new google.maps.Marker({
					position: center,
					icon: '<?php echo get_template_directory_uri(); ?>/img/map-icon.png',
					size: new google.maps.Size(20, 32)
				});
				marker.setMap(map);	
					var contentString = '<div class="map-info">'+
											'<div class="map-info__wrapper">'+
												'<p class="map-info__text"><strong>Адрес:</strong> г. Москва, ул. Ибрагимова, д. 31, офис 308</p>'+
											'</div>'+
										'</div>';

				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				marker.addListener('click', function() {
					infowindow.open(map, marker);
				});
			};
			
			google.maps.event.addDomListener(window, 'load', init);
		</script>
		<script>
			$(document).ready(function(){				
				$('#contacts-form').submit(function(){
					var contactsData = new FormData();    
					contactsData.append('contacts-name', $('input[name=contacts-name]').val());
					contactsData.append('contacts-email', $('input[name=contacts-email]').val());
					contactsData.append('contacts-tel', $('input[name=contacts-tel]').val());
					contactsData.append('contacts-message', $('textarea[name=contacts-message]').val());
					contactsData.append('contacts-file', $('input[name=contacts-file]')[0].files[0]);
					$.ajax({
						url: '<?php echo get_template_directory_uri(); ?>/contacts.php',
						data: contactsData,
						processData: false,
						contentType: false,
						type: 'POST',
						dataType:'json',
						success: function(){
							alert(1);
						}
					});
				});
			})
		</script>
	<?php endif; ?>	
	<script>
	$(document).ready(function() {
		$(".callback__form").submit(function() { 

			var proceed = true;
			//simple validation at client's end
			//loop through each field and we simply change border color to red for invalid fields		
			/*$("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
				$(this).css('border-color',''); 
				if(!$.trim($(this).val())){ //if this field is empty 
					$(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag
				}
				//check invalid email
				var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
				if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
					$(this).css('border-color','red'); //change border color to red   
					proceed = false; //set do not proceed flag				
				}	
			});*/

			if(proceed) //everything looks good! proceed...
			{
			   //data to be sent to server         
				var data = new FormData();    
				data.append('name', $('input[name=name]').val());
				data.append('email', $('input[name=email]').val());
				data.append('tel', $('input[name=tel]').val());
				data.append('message', $('textarea[name=message]').val());
				data.append('file_attach', $('input[name=file]')[0].files[0]);

				//instead of $.post() we are using $.ajax()
				//that's because $.ajax() has more options and flexibly.
				$.ajax({
				  url: '<?php echo get_template_directory_uri(); ?>/callback.php',
				  data: data,
				  processData: false,
				  contentType: false,
				  type: 'POST',
				  dataType:'json',
				  success: function(response){
					 //load json data from server and output message     
					if(response.type == 'error'){ //load json data from server and output message     
						output = '<div class="error">'+response.text+'</div>';
					}else{
						output = '<div class="success">'+response.text+'</div>';
					}
					$('.callback__body').slideUp();
					$('.callback__success').slideDown();
					$('.callback').delay(5000).fadeOut();
					$("#callback__result").hide().html(output).slideDown();
				  }
				});
			}
		});

		//reset previously set border colors and hide all message on .keyup()
		$("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() { 
			$(this).css('border-color',''); 
			$("#result").slideUp();
		});
	});
	</script>
	<!-- Yandex.Metrika counter --> 
	<script type="text/javascript"> 
		(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39153220 = new Ya.Metrika({ id:39153220, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); 
	</script> 
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/39153220" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript> 
	<!-- /Yandex.Metrika counter -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-82843947-1', 'auto');
		ga('send', 'pageview');
	</script>		
	<?php wp_footer(); ?>
	</body>
</html>
