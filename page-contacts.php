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
							<p>+7 (495) 789-36-86</p>
						</div>
						<div class="address__item">
							<h2>Эл. почта</h2>
							<a href="mailto:info@bigmsk.ru">info@bigmsk.ru</a>
						</div>						
						<div class="address__item">
							<h2>Адрес</h2>
							<p>г. Москва, ул. Ибрагимова,<br>д. 31, офис 308</p>
						</div>
					</div>
					<form action="" class="contacts__form">
						<div class="contacts__item">
							<input type="text" placeholder="Ваше имя*" required>		
						</div>
						<div class="contacts__item">
							<input type="email" placeholder="Ваш email*" required>
						</div>
						<div class="contacts__item">
							<input type="tel" placeholder="Ваш телефон">
						</div>
						<div class="contacts__item">
							<textarea rows="1" class="form-control" placeholder="Ваше сообщение..."></textarea>
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
