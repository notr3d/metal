<?php get_header(); ?>
<main class="contacts">		
	<div class="contacts__wrapper">		
		<div class="content-area">
			<div class="contacts__container">
				<div class="contacts__inner">
					<h1 class="contacts__header">Контакты</h1>
					<div class="address">
						<div class="address__item">
							<h2>Телефон</h2>
							<p>+7 (495) 726-57-22</p>
						</div>
						<!--<div class="address__item">
							<h2>Эл. почта</h2>
							<a href="mailto:info@bigmsk.ru">info@bigmsk.ru</a>
						</div>-->						
						<div class="address__item">
							<h2>Адрес</h2>
							<p>г. Москва, ул. Ибрагимова,<!--<br>--> д. 31<!--, офис 308--></p>
						</div>
					</div>
					<form action="" id="contacts-form" class="contacts__form">
						<div class="contacts__item">
							<input type="text" name="contacts-name" placeholder="Ваше имя*" required>		
						</div>
						<div class="contacts__item">
							<input type="email" name="contacts-email" placeholder="Ваш email*" required>
						</div>
						<div class="contacts__item">
							<input type="tel" name="contacts-tel" placeholder="Ваш телефон">
						</div>
						<div class="contacts__item">
							<textarea rows="1" name="contacts-message" placeholder="Ваше сообщение..."></textarea>
						</div>
						<div class="contacts__item">
							<input type="file" name="contacts-file">
						</div>						
						<div class="contacts__item">
							<button type="submit" class="my-fancy-button">Отправить</button>
						</div>						
					</form>
				</div>
			</div>
			<div class="map">
				<div id="map" class="map__container"></div>
			</div>
		</div>
	</div>	
</main>
<?php get_footer(); ?>
