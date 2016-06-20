<?php get_header(); ?>
<main class="contacts">		
	<div class="contacts__wrapper">		
		<div class="content-area">
			<div class="contacts__container">
				<div class="contacts__inner">
					<h1 class="contacts__header">Контакты</h1>
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
