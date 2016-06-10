<?php get_header(); ?>
	<main class="contacts" role="main">		
		<div class="contacts__wrapper lcw">
			<?php the_title( sprintf( '<h1 class="page-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
			<div class="content-area">
				<form action="" class="contacts__form">
					<div class="contacts__item">
						<input type="text" class="form-control" placeholder="Ваше имя*" required>		
					</div>
					<div class="contacts__item">
						<input type="email" class="form-control" placeholder="Ваш email*" required>
					</div>
					<div class="contacts__item">
						<input type="tel" class="form-control" placeholder="Ваш телефон">
					</div>
					<div class="contacts__item contacts__item--big">
						<textarea rows="1" class="form-control" placeholder="Ваше сообщение..."></textarea>
					</div>
					<div class="contacts__item contacts__item--big">
						<button type="button" class="my-fancy-button">Отправить</button>
					</div>						
				</form>	
			</div>
		</div>
		<div class="contacts__map" id="map"></div>
	</main>
<?php get_footer(); ?>
