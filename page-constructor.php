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
				<div class="constructor__form">
					<div>
						<ul class="progress__bar">
							<li class="progress__item active">Назначение</li>
							<li class="progress__item">Размеры</li>
							<li class="progress__item">Внешний вид здания</li>
							<li class="progress__item">Результат</li>
							<li class="progress__item">Контактная информация</li>
						</ul>
					</div>					
					<div class="constructor__container">
						<fieldset class="step step--first structure-type">
							<h2 class="step__title">Назначение</h2>
							<h3 class="step__subtitle">This is step 1</h3>
							<div class="step__input-area">
								<div class="structure-type__item">
									<input type="radio" name="structure-type" id="structure-type-1" value="Склад" checked>
									<label for="structure-type-1">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/1.png" alt="">
										<div class="structure-type__title">Склад</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" id="structure-type-2" value="Склад">
									<label for="structure-type-2">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/2.png" alt="">
										<div class="structure-type__title">Логистический центр</div>
										<div class="structure-type__subtitle">Кондор</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" id="structure-type-3" value="Склад">
									<label for="structure-type-3">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/3.png" alt="">
										<div class="structure-type__title">Производственное здание</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" id="structure-type-4" value="Склад">
									<label for="structure-type-4">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/4.png" alt="">
										<div class="structure-type__title">Промышленный корпус</div>
										<div class="structure-type__subtitle">Кондор</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" id="structure-type-5" value="Склад">
									<label for="structure-type-5">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/5.png" alt="">
										<div class="structure-type__title">Многопролетное здание</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" id="structure-type-6" value="Склад">
									<label for="structure-type-6">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/6.png" alt="">
										<div class="structure-type__title">Здание птицекомплекса</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" id="structure-type-7" value="Склад">
									<label for="structure-type-7">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/7.png" alt="">
										<div class="structure-type__title">Здание для КРС</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" id="structure-type-8" value="Склад">
									<label for="structure-type-8">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/8.png" alt="">
										<div class="structure-type__title">Сервисный центр</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" id="structure-type-9" value="Склад">
									<label for="structure-type-9">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/9.png" alt="">
										<div class="structure-type__title">Гараж</div>
										<div class="structure-type__subtitle">Кондор</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" id="structure-type-10" value="Склад">
									<label for="structure-type-10">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/10.png" alt="">
										<div class="structure-type__title">Спортивное помещение</div>
										<div class="structure-type__subtitle">Кондор</div>
									</label>
								</div>								
							</div>	
							<div class="step__controls-area">
								<input type="button" name="next" class="control-button control-button--next" value="Размеры">
							</div>							
						</fieldset>
												
						<fieldset class="step dimension">
							<h2 class="step__title">Размеры</h2>
							<h3 class="step__subtitle">This is step 2</h3>
							<div class="step__input-area">
								<div>
									<div class="dimension__item col-sm-4">
										<h4 class="dimension__header">Ширина</h4>
										<div class="dimension__settings">
											<button id="widthMinus" class="dimension__button">-</button>
											<input type="number" name="widthInput" id="widthInput" class="dimension__input" min="6" max="21" value="18">
											<button id="widthPlus" class="dimension__button">+</button>
										</div>										
										<div class="dimension__slider">
											<span id="widthMin" class="dimension__limit"></span>
											<input type="range" name="widthRange" id="widthRange">
											<span id="widthMax" class="dimension__limit"></span>
										</div>									
									</div>
									<div class="dimension__item col-sm-4">
										<h4 class="dimension__header">Длина</h4>
										<div class="dimension__settings">
											<button id="lengthMinus" class="dimension__button">-</button>
											<input type="number" name="lengthInput" id="lengthInput" class="dimension__input" min="9" max="96" value="40">
											<button id="lengthPlus" class="dimension__button">+</button>
										</div>										
										<div class="dimension__slider">
											<span id="lengthMin" class="dimension__limit"></span>
											<input type="range" name="lengthRange" id="lengthRange">
											<span id="lengthMax" class="dimension__limit"></span>	
										</div>
									</div>
									<div class="dimension__item col-sm-4">
										<h4 class="dimension__header">Высота</h4>
										<div class="dimension__settings">
											<button id="heightMinus" class="dimension__button">-</button>
											<input type="number" name="heightInput" id="heightInput" class="dimension__input" min="3" max="6" value="6">	
											<button id="heightPlus" class="dimension__button">+</button>
										</div>										
										<div class="dimension__slider">
											<span id="heightMin" class="dimension__limit"></span>
											<input type="range" name="heightRange" id="heightRange">
											<span id="heightMax" class="dimension__limit"></span>
										</div>									
									</div>
								</div>
								<div>
									<h4>Площадь</h4>
									<output id=areaOutput></output>
									<h4>Объем (без учета крыши)</h4>
									<output id="volumeOutput"></output>
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
								<input type="button" name="previous" class="control-button control-button--prev" value="Назначение">
								<input type="button" name="next" class="control-button  control-button--next" value="Внешний вид">
							</div>
						</fieldset>
						<fieldset class="step">
							<h2 class="step__title">Внешний вид здания</h2>
							<h3 class="step__subtitle">This is step 3</h3>
							<div class="step__input-area">								
								<h4>Светопрозрачные участки кровли</h4>
								<div>
									<label><input type="radio" name="translucentRoof">Да</label>
									<label><input type="radio" name="translucentRoof" checked>Нет</label>
								</div>									
								<h4>Водосток</h4>
								<div>
									<label><input type="radio" name="drain">Да</label>
									<label><input type="radio" name="drain" checked>Нет</label>
								</div>
								<h4>Цвет</h4>
								<div>
									<h5>Стены</h5>
									<label><input type="radio" name="wallColor" checked>RAL 5012 Голубой</label>
									<label><input type="radio" name="wallColor">RAL 1014 Слоновая кость</label>
									<label><input type="radio" name="wallColor">RAL 1015 Светлая слоновая кость</label>
									<label><input type="radio" name="wallColor">RAL 1018 Цинково-желтый</label>
									<label><input type="radio" name="wallColor">RAL 3003 Рубиново-красный</label>
									<label><input type="radio" name="wallColor">RAL 5005 Сигнальный синий</label>
									<label><input type="radio" name="wallColor">RAL 6002 Лиственно-зеленый</label>
									<label><input type="radio" name="wallColor">RAL 7004 Сигнальный серый</label>
									<label><input type="radio" name="wallColor">RAL 7047 Телегрей 4</label>
									<label><input type="radio" name="wallColor">RAL 9002 Светло-серый</label>
									<label><input type="radio" name="wallColor">RAL 9003 Сигнальный белый</label>
									<label><input type="radio" name="wallColor">RAL 9006 Бело-алюминиевый</label>
									<label><input type="radio" name="wallColor">RR 20 Белый</label>
									<label><input type="radio" name="wallColor">RR 21 Светло-серый</label>
									<label><input type="radio" name="wallColor">RR 35 Синий</label>									
								</div>
								<div>
									<h5>Кровля</h5>
									<label><input type="radio" name="roofColor" checked>RAL 5012 Голубой</label>
									<label><input type="radio" name="roofColor">RAL 1014 Слоновая кость</label>
									<label><input type="radio" name="roofColor">RAL 1015 Светлая слоновая кость</label>
									<label><input type="radio" name="roofColor">RAL 1018 Цинково-желтый</label>
									<label><input type="radio" name="roofColor">RAL 3003 Рубиново-красный</label>
									<label><input type="radio" name="roofColor">RAL 5005 Сигнальный синий</label>
									<label><input type="radio" name="roofColor">RAL 6002 Лиственно-зеленый</label>
									<label><input type="radio" name="roofColor">RAL 7004 Сигнальный серый</label>
									<label><input type="radio" name="roofColor">RAL 7047 Телегрей 4</label>
									<label><input type="radio" name="roofColor">RAL 9002 Светло-серый</label>
									<label><input type="radio" name="roofColor">RAL 9003 Сигнальный белый</label>
									<label><input type="radio" name="roofColor">RAL 9006 Бело-алюминиевый</label>
									<label><input type="radio" name="roofColor">RR 20 Белый</label>
									<label><input type="radio" name="roofColor">RR 21 Светло-серый</label>
									<label><input type="radio" name="roofColor">RR 35 Синий</label>									
								</div>
								<div>
									<h5>Нащельники</h5>
									<label><input type="radio" name="lipColor" checked>RAL 5012 Голубой</label>
									<label><input type="radio" name="lipColor">RAL 1014 Слоновая кость</label>
									<label><input type="radio" name="lipColor">RAL 1015 Светлая слоновая кость</label>
									<label><input type="radio" name="lipColor">RAL 1018 Цинково-желтый</label>
									<label><input type="radio" name="lipColor">RAL 3003 Рубиново-красный</label>
									<label><input type="radio" name="lipColor">RAL 5005 Сигнальный синий</label>
									<label><input type="radio" name="lipColor">RAL 6002 Лиственно-зеленый</label>
									<label><input type="radio" name="lipColor">RAL 7004 Сигнальный серый</label>
									<label><input type="radio" name="lipColor">RAL 7047 Телегрей 4</label>
									<label><input type="radio" name="lipColor">RAL 9002 Светло-серый</label>
									<label><input type="radio" name="lipColor">RAL 9003 Сигнальный белый</label>
									<label><input type="radio" name="lipColor">RAL 9006 Бело-алюминиевый</label>
									<label><input type="radio" name="lipColor">RR 20 Белый</label>
									<label><input type="radio" name="lipColor">RR 21 Светло-серый</label>
									<label><input type="radio" name="lipColor">RR 35 Синий</label>									
								</div>
								<div>
									<h5>Водосток</h5>
									<label><input type="radio" name="drainColor" checked>RAL 5012 Голубой</label>
									<label><input type="radio" name="drainColor">RAL 1014 Слоновая кость</label>
									<label><input type="radio" name="drainColor">RAL 1015 Светлая слоновая кость</label>
									<label><input type="radio" name="drainColor">RAL 1018 Цинково-желтый</label>
									<label><input type="radio" name="drainColor">RAL 3003 Рубиново-красный</label>
									<label><input type="radio" name="drainColor">RAL 5005 Сигнальный синий</label>
									<label><input type="radio" name="drainColor">RAL 6002 Лиственно-зеленый</label>
									<label><input type="radio" name="drainColor">RAL 7004 Сигнальный серый</label>
									<label><input type="radio" name="drainColor">RAL 7047 Телегрей 4</label>
									<label><input type="radio" name="drainColor">RAL 9002 Светло-серый</label>
									<label><input type="radio" name="drainColor">RAL 9003 Сигнальный белый</label>
									<label><input type="radio" name="drainColor">RAL 9006 Бело-алюминиевый</label>
									<label><input type="radio" name="drainColor">RR 20 Белый</label>
									<label><input type="radio" name="drainColor">RR 21 Светло-серый</label>
									<label><input type="radio" name="drainColor">RR 35 Синий</label>									
								</div>								
							</div>							
							<div class="step__controls-area">
								<input type="button" name="previous" class="control-button control-button--prev" value="Размеры">
								<input type="button" name="next" class="control-button  control-button--next" value="Результат">
							</div>
						</fieldset>
						<fieldset class="step">
							<h2 class="step__title">Результат</h2>
							<h3 class="step__subtitle">This is step 4</h3>
							<div class="step__input-area">
							
							</div>
							<div class="step__controls-area">
								<input type="button" name="previous" class="control-button control-button--prev" value="Внешний вид" />
								<input type="button" name="next" class="control-button  control-button--next" value="Контактная информация" />
							</div>
						</fieldset>						
						
						<fieldset class="step step--last">
							<h2 class="step__title">Контактная информация</h2>
							<h3 class="step__subtitle">This is step 5</h3>
							<div class="step__input-area">
								<div>
									<h4>Контактная информация</h4>
									<label>Компания: *<inputrequired></label>
									<label>Имя: *<input required></label>
									<label>Адрес: *<input required></label>
									<label>Почтовый индекс: *<input required></label>
									<label>Район строительства: *<input required></label>
									<label>телефон: *<input type="tel" required></label>
									<label>электронная почта: *<input type="email" required></label>
								</div>
								<div>
									<h4>Сообщение</h4>
									<textarea name="" id="" cols="30" rows="10"></textarea>
									<input type="file">
								</div>
								<div>
									<h4>Желаемый срок исполнения</h4>
									<select name="" id="">
										<option value="24 недели">24 недели</option>
										<option value="25 недель">25 недель</option>
										<option value="26 недель">26 недель</option>
										<option value="27 недель">27 недель</option>
										<option value="28 недель">28 недель</option>
										<option value="29 недель">29 недель</option>
										<option value="30 недель">30 недель</option>
										<option value="31 неделя">31 неделя</option>
										<option value="32 недели">32 недели</option>
										<option value="Больше 32 недель">Больше 32 недель</option>
									</select>
								</div>
							</div>
							<div class="step__controls-area">
								<input type="button" name="previous" class="control-button control-button--prev" value="Результат">
								<input type="submit" name="submit" class="control-button control-button--submit" value="Отправить">
							</div>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
		</div><!-- #primary -->
	</main><!-- #main -->

<?php get_footer(); ?>
