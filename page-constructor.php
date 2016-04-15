<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

	<main class="container" role="main">
		<?php the_title( sprintf( '<h1 class="page-header">', esc_url( get_permalink() ) ), '</h1>' ); ?>
		<div class="content-area col-sm-12">
		<div class="constructor">
			<div class="constructor__wrapper">
				<!--<?php echo do_shortcode('[contact-form-7 title="Конструктор"]'); ?>-->
				<div class="constructor__form">
					<ul class="progress__bar">
						<li class="progress__item active">Назначение</li>
						<li class="progress__item">Размеры</li>
						<li class="progress__item">Внешний вид здания</li>
						<li class="progress__item">Результат</li>
						<li class="progress__item">Контактная информация</li>
					</ul>
					<div class="constructor__container">
						<fieldset class="step step--first">
							<h2 class="step__title">Назначение</h2>
							<h3 class="step__subtitle">This is step 1</h3>
							<div class="step__input-area">
								<label><input type="radio" name="type" value="Склад">Склад</label>
								<label><input type="radio" name="type" value="Логистический центр">Логистический центр</label>
								<label><input type="radio" name="type" value="Производственное здание">Производственное здание</label>
								<label><input type="radio" name="type" value="Промышленный корпус">Промышленный корпус</label>
								<label><input type="radio" name="type" value="Многопролетное здание">Многопролетное здание</label>
								<label><input type="radio" name="type" value="Здание прицекомплекса/свинокомплекса">Здание прицекомплекса/свинокомплекса</label>
								<label><input type="radio" name="type" value="Здание для КРС">Здание для КРС</label>
								<label><input type="radio" name="type" value="Сервисный центр">Сервисный центр</label>
								<label><input type="radio" name="type" value="Гараж">Гараж</label>
								<label><input type="radio" name="type" value="Спортивное помещение">Спортивное помещение</label>
							</div>	
							<div class="step__controls-area">
								<input type="button" name="next" class="control-button control-button--next" value="Next" />
							</div>							
						</fieldset>
												
						<fieldset class="step">
							<h2 class="step__title">Размеры</h2>
							<h3 class="step__subtitle">This is step 2</h3>
							<div class="step__input-area">
								<div>
									<input type="range" id="widthRange" min="6" max="21" value="18"><input type="number" id="widthInput" min="6" max="21">ширина
									<input type="range" id="lengthRange" min="9" max="96" value="40"><input type="number" id="lengthInput" min="9" max="96">длина
									<input type="range" id="heightRange" min="3" max="6" value="6"><input type="number" id="heightInput" min="3" max="6">высота
								</div>
								<div>
									площадь <output id=areaOutput></output>
									объем (без учета крыши)<output id="volumeOutput"></output>
								</div>
								<div>
									<h4>Снеговой район строительства</h4>
									<label><input type="radio" name="snow" checked>3</label>
									<label><input type="radio" name="snow">4</label>
									<label><input type="radio" name="snow">5</label>
								</div>
								<div>
									<h4>Стеновая обшивка</h4>
									<select name="" id="">
										<option value="1">Профнастил 18 + утеплитель 100мм</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="1">4</option>
										<option value="2">5</option>
										<option value="3">6</option>						
									</select>
								</div>
								<div>
									<h4>Кровельная обшивка</h4>
									<select name="" id="">
										<option value="1">Профнастил 18 + утеплитель 100мм</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="1">4</option>
										<option value="2">5</option>
										<option value="3">6</option>						
									</select>
								</div>
								
							</div>
							<div class="step__controls-area">
								<input type="button" name="previous" class="control-button control-button--prev" value="Previous" />
								<input type="button" name="next" class="control-button  control-button--next" value="Next" />
							</div>
						</fieldset>
						<fieldset class="step">
							<h2 class="step__title">Внешний вид здания</h2>
							<h3 class="step__subtitle">This is step 3</h3>
							<div class="step__input-area">
							
							</div>
							<div class="step__controls-area">
								<input type="button" name="previous" class="control-button control-button--prev" value="Previous" />
								<input type="button" name="next" class="control-button  control-button--next" value="Next" />
							</div>
						</fieldset>
						<fieldset class="step">
							<h2 class="step__title">Результат</h2>
							<h3 class="step__subtitle">This is step 4</h3>
							<div class="step__input-area">
							
							</div>
							<div class="step__controls-area">
								<input type="button" name="previous" class="control-button control-button--prev" value="Previous" />
								<input type="button" name="next" class="control-button  control-button--next" value="Next" />
							</div>
						</fieldset>						
						
						<fieldset class="step step--last">
							<h2 class="step__title">Контактная информация</h2>
							<h3 class="step__subtitle">This is step 5</h3>
							<div class="step__input-area">
							
							</div>
							<div class="step__controls-area">
								<input type="button" name="previous" class="control-button control-button--prev" value="Previous" />
								<input type="submit" name="submit" class="submit control-button" value="Submit" />
							</div>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
		</div><!-- #primary -->
	</main><!-- #main -->

<?php get_footer(); ?>
