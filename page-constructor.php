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
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-1" value="Склад" checked>
									<label for="structure-type-1">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/1.png" alt="">
										<div class="structure-type__title">Склад</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-2" value="Склад">
									<label for="structure-type-2">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/2.png" alt="">
										<div class="structure-type__title">Логистический центр</div>
										<div class="structure-type__subtitle">Кондор</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-3" value="Склад">
									<label for="structure-type-3">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/3.png" alt="">
										<div class="structure-type__title">Производственное здание</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-4" value="Склад">
									<label for="structure-type-4">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/4.png" alt="">
										<div class="structure-type__title">Промышленный корпус</div>
										<div class="structure-type__subtitle">Кондор</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-5" value="Склад">
									<label for="structure-type-5">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/5.png" alt="">
										<div class="structure-type__title">Многопролетное здание</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-6" value="Склад">
									<label for="structure-type-6">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/6.png" alt="">
										<div class="structure-type__title">Здание птицекомплекса</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-7" value="Склад">
									<label for="structure-type-7">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/7.png" alt="">
										<div class="structure-type__title">Здание для КРС</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-8" value="Склад">
									<label for="structure-type-8">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/8.png" alt="">
										<div class="structure-type__title">Сервисный центр</div>
										<div class="structure-type__subtitle">Спайдер</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-9" value="Склад">
									<label for="structure-type-9">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/9.png" alt="">
										<div class="structure-type__title">Гараж</div>
										<div class="structure-type__subtitle">Кондор</div>
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-10" value="Склад">
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
										<div class="dimension__settings">
											<h4 class="dimension__header">Ширина</h4>
											<button id="widthMinus" class="dimension__button"></button>
											<input type="number" name="widthInput" id="widthInput" class="dimension__input" min="6" max="21" value="18">
											<button id="widthPlus" class="dimension__button"></button>
										</div>
										<div class="dimension__slider">
											<span id="widthMin" class="dimension__limit"></span>
											<input type="range" name="widthRange" id="widthRange">
											<span id="widthMax" class="dimension__limit"></span>
										</div>									
									</div>
									<div class="dimension__item col-sm-4">
										<div class="dimension__settings">
											<h4 class="dimension__header">Длина</h4>
											<button id="lengthMinus" class="dimension__button"></button>
											<input type="number" name="lengthInput" id="lengthInput" class="dimension__input" min="9" max="96" value="40">
											<button id="lengthPlus" class="dimension__button"></button>
										</div>
										<div class="dimension__slider">
											<span id="lengthMin" class="dimension__limit"></span>
											<input type="range" name="lengthRange" id="lengthRange">
											<span id="lengthMax" class="dimension__limit"></span>	
										</div>
									</div>
									<div class="dimension__item col-sm-4">
										<div class="dimension__settings">
											<h4 class="dimension__header">Высота</h4>
											<button id="heightMinus" class="dimension__button"></button>
											<input type="number" name="heightInput" id="heightInput" class="dimension__input" min="3" max="6" value="6">	
											<button id="heightPlus" class="dimension__button"></button>
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
								<div class="snow-area">
									<h4>Снеговой район строительства</h4>
									<input type="radio" name="snow" id="snow-3" class="snow-area-input" checked>
									<label for="snow-3">3</label>
									<input type="radio" name="snow" id="snow-4" class="snow-area-input">
									<label for="snow-4">4</label>
									<input type="radio" name="snow" id="snow-5" class="snow-area-input">
									<label for="snow-5">5</label>
								</div>
								<div>
									<h4>Стеновая обшивка</h4>
									<select name="wall-shealthing" id="wall-shealthing">
										<option value="Профнастил 18 + утеплитель 100мм">Профнастил 18 + утеплитель 100мм</option>
										<option value="Профнастил 18 + утеплитель 150мм">Профнастил 18 + утеплитель 150мм</option>
										<option value="Стеновые 'сэндвич'-панели 200м">Стеновые 'сэндвич'-панели 200мм</option>
										<option value="Стеновые 'сэндвич'-панели 180мм">Стеновые 'сэндвич'-панели 180мм</option>
										<option value="Стеновые 'сэндвич'-панели 150мм">Стеновые 'сэндвич'-панели 150мм</option>
										<option value="Стеновые 'сэндвич'-панели 120мм">Стеновые 'сэндвич'-панели 120мм</option>
										<option value="Стеновые 'сэндвич'-панели 100мм">Стеновые 'сэндвич'-панели 100мм</option>
										<option value="Стеновые 'сэндвич'-панели 80мм">Стеновые 'сэндвич'-панели 80мм</option>
										<option value="Профнастил 18">Профнастил 18</option>
										<option value="Профнастил 18 + утеплитель 100мм + профнастил 18">Профнастил 18 + утеплитель 100мм + профнастил 18</option>
										<option value="Профнастил 18 + утеплитель 150мм + профнастил 18">Профнастил 18 + утеплитель 150мм + профнастил 18</option>
									</select>
								</div>
								<div>
									<h4>Кровельная обшивка</h4>
									<select name="roof-shealthing" id="roof-shealthing">
										<option value="Профнастил 45 + утеплитель 150мм">Профнастил 45 + утеплитель 150мм</option>
										<option value="Профнастил 45 + утеплитель 200мм">Профнастил 45 + утеплитель 200мм</option>
										<option value="Кровельные 'сэндвич'-панели 200мм">Кровельные 'сэндвич'-панели 200мм</option>
										<option value="Кровельные 'сэндвич'-панели 180мм">Кровельные 'сэндвич'-панели 180мм</option>
										<option value="Кровельные 'сэндвич'-панели 150мм">Кровельные 'сэндвич'-панели 150мм</option>
										<option value="Кровельные 'сэндвич'-панели 120мм">Кровельные 'сэндвич'-панели 120мм</option>
										<option value="Кровельные 'сэндвич'-панели 100мм">Кровельные 'сэндвич'-панели 100мм</option>
										<option value="Кровельные 'сэндвич'-панели 80мм">Кровельные 'сэндвич'-панели 80мм</option>
										<option value="Профнастил 45">Профнастил 45</option>
										<option value="Профнастил 45 + утеплитель 100мм + профнастил 18">Профнастил 45 + утеплитель 100мм + профнастил 18</option>
										<option value="Профнастил 45 + утеплитель 150мм + профнастил 18">Профнастил 45 + утеплитель 150мм + профнастил 18</option>
									</select>
								</div>								
							</div>
							<div class="step__controls-area">
								<input type="button" name="previous" class="control-button control-button--prev" value="Назначение">
								<input type="button" name="next" class="control-button  control-button--next" value="Внешний вид">
							</div>
						</fieldset>
						<fieldset class="step color">
							<h2 class="step__title">Внешний вид здания</h2>
							<h3 class="step__subtitle">This is step 3</h3>
							<div class="step__input-area">
								<h4>Светопрозрачные участки кровли</h4>
								<div>
									<input type="radio" name="translucentRoof" id="translucentRoof-yes">
									<label for="translucentRoof-yes">Да</label>
									<input type="radio" name="translucentRoof" id="translucentRoof-no" checked>
									<label for="translucentRoof-no">Нет</label>
								</div>									
								<h4>Водосток</h4>
								<div>
									<input type="radio" name="drain" id="drain-yes">
									<label for="drain-yes">Да</label>
									<input type="radio" name="drain" id="drain-no" checked>
									<label for="drain-no">Нет</label>
								</div>
								<h4>Цвет</h4>
								<div class="color__item col-sm-3">
									<button class="color__button"><span class="color__span"></span>Стены</button>
									<div class="color__container">
										<input type="radio" name="wallColor" id="wall-ral-5012" class="color__input" checked>
										<label for="wall-ral-5012" class="color__label color__label--ral-5012">RAL 5012 Голубой</label>
										<input type="radio" name="wallColor" id="wall-ral-1014" class="color__input">
										<label for="wall-ral-1014" class="color__label color__label--ral-1014">RAL 1014 Слоновая кость</label>
										<input type="radio" name="wallColor" id="wall-ral-1015" class="color__input">
										<label for="wall-ral-1015" class="color__label color__label--ral-1015">RAL 1015 Светлая слоновая кость</label>
										<input type="radio" name="wallColor" id="wall-ral-1018" class="color__input">
										<label for="wall-ral-1018" class="color__label color__label--ral-1018">RAL 1018 Цинково-желтый</label>
										<input type="radio" name="wallColor" id="wall-ral-3003" class="color__input">
										<label for="wall-ral-3003" class="color__label color__label--ral-3003">RAL 3003 Рубиново-красный</label>
										<input type="radio" name="wallColor" id="wall-ral-5005" class="color__input">
										<label for="wall-ral-5005" class="color__label color__label--ral-5005">RAL 5005 Сигнальный синий</label>
										<input type="radio" name="wallColor" id="wall-ral-6002" class="color__input">
										<label for="wall-ral-6002" class="color__label color__label--ral-6002">RAL 6002 Лиственно-зеленый</label>
										<input type="radio" name="wallColor" id="wall-ral-7004" class="color__input">
										<label for="wall-ral-7004" class="color__label color__label--ral-7004">RAL 7004 Сигнальный серый</label>
										<input type="radio" name="wallColor" id="wall-ral-7047" class="color__input">
										<label for="wall-ral-7047" class="color__label color__label--ral-7047">RAL 7047 Телегрей 4</label>
										<input type="radio" name="wallColor" id="wall-ral-9002" class="color__input">
										<label for="wall-ral-9002" class="color__label color__label--ral-9002">RAL 9002 Светло-серый</label>
										<input type="radio" name="wallColor" id="wall-ral-9003" class="color__input">
										<label for="wall-ral-9003" class="color__label color__label--ral-9003">RAL 9003 Сигнальный белый</label>
										<input type="radio" name="wallColor" id="wall-ral-9006" class="color__input">
										<label for="wall-ral-9006" class="color__label color__label--ral-9006">RAL 9006 Бело-алюминиевый</label>
										<input type="radio" name="wallColor" id="wall-rr-20" class="color__input">
										<label for="wall-rr-20" class="color__label color__label--rr-20">RR 20 Белый</label>
										<input type="radio" name="wallColor" id="wall-rr-21" class="color__input">
										<label for="wall-rr-21" class="color__label color__label--rr-21">RR 21 Светло-серый</label>
										<input type="radio" name="wallColor" id="wall-rr-35" class="color__input">
										<label for="wall-rr-35" class="color__label color__label--rr-35">RR 35 Синий</label>
									</div>			
								</div>
								<div class="color__item col-sm-3">
									<button class="color__button"><span class="color__span"></span>Кровля</button>
									<div class="color__container">
										<input type="radio" name="roofColor" id="roof-ral-5012" class="color__input" checked>
										<label for="roof-ral-5012" class="color__label color__label--ral-5012">RAL 5012 Голубой</label>
										<input type="radio" name="roofColor" id="roof-ral-1014" class="color__input">
										<label for="roof-ral-1014" class="color__label color__label--ral-1014">RAL 1014 Слоновая кость</label>
										<input type="radio" name="roofColor" id="roof-ral-1015" class="color__input">
										<label for="roof-ral-1015" class="color__label color__label--ral-1015">RAL 1015 Светлая слоновая кость</label>
										<input type="radio" name="roofColor" id="roof-ral-1018" class="color__input">
										<label for="roof-ral-1018" class="color__label color__label--ral-1018">RAL 1018 Цинково-желтый</label>
										<input type="radio" name="roofColor" id="roof-ral-3003" class="color__input">
										<label for="roof-ral-3003" class="color__label color__label--ral-3003">RAL 3003 Рубиново-красный</label>
										<input type="radio" name="roofColor" id="roof-ral-5005" class="color__input">
										<label for="roof-ral-5005" class="color__label color__label--ral-5005">RAL 5005 Сигнальный синий</label>
										<input type="radio" name="roofColor" id="roof-ral-6002" class="color__input">
										<label for="roof-ral-6002" class="color__label color__label--ral-6002">RAL 6002 Лиственно-зеленый</label>
										<input type="radio" name="roofColor" id="roof-ral-7004" class="color__input">
										<label for="roof-ral-7004" class="color__label color__label--ral-7004">RAL 7004 Сигнальный серый</label>
										<input type="radio" name="roofColor" id="roof-ral-7047" class="color__input">
										<label for="roof-ral-7047" class="color__label color__label--ral-7047">RAL 7047 Телегрей 4</label>
										<input type="radio" name="roofColor" id="roof-ral-9002" class="color__input">
										<label for="roof-ral-9002" class="color__label color__label--ral-9002">RAL 9002 Светло-серый</label>
										<input type="radio" name="roofColor" id="roof-ral-9003" class="color__input">
										<label for="roof-ral-9003" class="color__label color__label--ral-9003">RAL 9003 Сигнальный белый</label>
										<input type="radio" name="roofColor" id="roof-ral-9006" class="color__input">
										<label for="roof-ral-9006" class="color__label color__label--ral-9006">RAL 9006 Бело-алюминиевый</label>
										<input type="radio" name="roofColor" id="roof-rr-20" class="color__input">
										<label for="roof-rr-20" class="color__label color__label--rr-20">RR 20 Белый</label>
										<input type="radio" name="roofColor" id="roof-rr-21" class="color__input">
										<label for="roof-rr-21" class="color__label color__label--rr-21">RR 21 Светло-серый</label>
										<input type="radio" name="roofColor" id="roof-rr-35" class="color__input">
										<label for="roof-rr-35" class="color__label color__label--rr-35">RR 35 Синий</label>
									</div>			
								</div>
								<div class="color__item col-sm-3">
									<button class="color__button"><span class="color__span"></span>Нащельники</button>
									<div class="color__container">
										<input type="radio" name="lippingColor" id="lipping-ral-5012" class="color__input" checked>
										<label for="lipping-ral-5012" class="color__label color__label--ral-5012">RAL 5012 Голубой</label>
										<input type="radio" name="lippingColor" id="lipping-ral-1014" class="color__input">
										<label for="lipping-ral-1014" class="color__label color__label--ral-1014">RAL 1014 Слоновая кость</label>
										<input type="radio" name="lippingColor" id="lipping-ral-1015" class="color__input">
										<label for="lipping-ral-1015" class="color__label color__label--ral-1015">RAL 1015 Светлая слоновая кость</label>
										<input type="radio" name="lippingColor" id="lipping-ral-1018" class="color__input">
										<label for="lipping-ral-1018" class="color__label color__label--ral-1018">RAL 1018 Цинково-желтый</label>
										<input type="radio" name="lippingColor" id="lipping-ral-3003" class="color__input">
										<label for="lipping-ral-3003" class="color__label color__label--ral-3003">RAL 3003 Рубиново-красный</label>
										<input type="radio" name="lippingColor" id="lipping-ral-5005" class="color__input">
										<label for="lipping-ral-5005" class="color__label color__label--ral-5005">RAL 5005 Сигнальный синий</label>
										<input type="radio" name="lippingColor" id="lipping-ral-6002" class="color__input">
										<label for="lipping-ral-6002" class="color__label color__label--ral-6002">RAL 6002 Лиственно-зеленый</label>
										<input type="radio" name="lippingColor" id="lipping-ral-7004" class="color__input">
										<label for="lipping-ral-7004" class="color__label color__label--ral-7004">RAL 7004 Сигнальный серый</label>
										<input type="radio" name="lippingColor" id="lipping-ral-7047" class="color__input">
										<label for="lipping-ral-7047" class="color__label color__label--ral-7047">RAL 7047 Телегрей 4</label>
										<input type="radio" name="lippingColor" id="lipping-ral-9002" class="color__input">
										<label for="lipping-ral-9002" class="color__label color__label--ral-9002">RAL 9002 Светло-серый</label>
										<input type="radio" name="lippingColor" id="lipping-ral-9003" class="color__input">
										<label for="lipping-ral-9003" class="color__label color__label--ral-9003">RAL 9003 Сигнальный белый</label>
										<input type="radio" name="lippingColor" id="lipping-ral-9006" class="color__input">
										<label for="lipping-ral-9006" class="color__label color__label--ral-9006">RAL 9006 Бело-алюминиевый</label>
										<input type="radio" name="lippingColor" id="lipping-rr-20" class="color__input">
										<label for="lipping-rr-20" class="color__label color__label--rr-20">RR 20 Белый</label>
										<input type="radio" name="lippingColor" id="lipping-rr-21" class="color__input">
										<label for="lipping-rr-21" class="color__label color__label--rr-21">RR 21 Светло-серый</label>
										<input type="radio" name="lippingColor" id="lipping-rr-35" class="color__input">
										<label for="lipping-rr-35" class="color__label color__label--rr-35">RR 35 Синий</label>	
									</div>			
								</div>
								<div class="color__item col-sm-3">
									<button id="drainColorButton" class="color__button"><span class="color__span"></span>Водосток</button>
									<div class="color__container">
										<input type="radio" name="drainColor" id="drain-ral-5012" class="color__input" checked>
										<label for="drain-ral-5012" class="color__label color__label--ral-5012">RAL 5012 Голубой</label>
										<input type="radio" name="drainColor" id="drain-ral-1014" class="color__input">
										<label for="drain-ral-1014" class="color__label color__label--ral-1014">RAL 1014 Слоновая кость</label>
										<input type="radio" name="drainColor" id="drain-ral-1015" class="color__input">
										<label for="drain-ral-1015" class="color__label color__label--ral-1015">RAL 1015 Светлая слоновая кость</label>
										<input type="radio" name="drainColor" id="drain-ral-1018" class="color__input">
										<label for="drain-ral-1018" class="color__label color__label--ral-1018">RAL 1018 Цинково-желтый</label>
										<input type="radio" name="drainColor" id="drain-ral-3003" class="color__input">
										<label for="drain-ral-3003" class="color__label color__label--ral-3003">RAL 3003 Рубиново-красный</label>
										<input type="radio" name="drainColor" id="drain-ral-5005" class="color__input">
										<label for="drain-ral-5005" class="color__label color__label--ral-5005">RAL 5005 Сигнальный синий</label>
										<input type="radio" name="drainColor" id="drain-ral-6002" class="color__input">
										<label for="drain-ral-6002" class="color__label color__label--ral-6002">RAL 6002 Лиственно-зеленый</label>
										<input type="radio" name="drainColor" id="drain-ral-7004" class="color__input">
										<label for="drain-ral-7004" class="color__label color__label--ral-7004">RAL 7004 Сигнальный серый</label>
										<input type="radio" name="drainColor" id="drain-ral-7047" class="color__input">
										<label for="drain-ral-7047" class="color__label color__label--ral-7047">RAL 7047 Телегрей 4</label>
										<input type="radio" name="drainColor" id="drain-ral-9002" class="color__input">
										<label for="drain-ral-9002" class="color__label color__label--ral-9002">RAL 9002 Светло-серый</label>
										<input type="radio" name="drainColor" id="drain-ral-9003" class="color__input">
										<label for="drain-ral-9003" class="color__label color__label--ral-9003">RAL 9003 Сигнальный белый</label>
										<input type="radio" name="drainColor" id="drain-ral-9006" class="color__input">
										<label for="drain-ral-9006" class="color__label color__label--ral-9006">RAL 9006 Бело-алюминиевый</label>
										<input type="radio" name="drainColor" id="drain-rr-20" class="color__input">
										<label for="drain-rr-20" class="color__label color__label--rr-20">RR 20 Белый</label>
										<input type="radio" name="drainColor" id="drain-rr-21" class="color__input">
										<label for="drain-rr-21" class="color__label color__label--rr-21">RR 21 Светло-серый</label>
										<input type="radio" name="drainColor" id="drain-rr-35" class="color__input">
										<label for="drain-rr-35" class="color__label color__label--rr-35">RR 35 Синий</label>	
									</div>			
								</div>
							</div>							
							<div class="step__controls-area">
								<input type="button" name="previous" class="control-button control-button--prev" value="Размеры">
								<input type="button" name="next" class="control-button  control-button--next" value="Результат">
							</div>
						</fieldset>
						<fieldset class="step result">
							<h2 class="step__title">Результат</h2>
							<h3 class="step__subtitle">This is step 4</h3>
							<div class="step__input-area">
								<div class="result__container">
									<div class="result__item">
										<span class="result__feature">Применение: </span>
										<span class="result__value result__value--type"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Тип продукта: </span>
										<span class="result__value result__value--subtype"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Ширина: </span>
										<span class="result__value result__value--width"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Длина: </span>
										<span class="result__value result__value--length"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Высота: </span>
										<span class="result__value result__value--height"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Площадь здания: </span>
										<span class="result__value result__value--area"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Объем здания: </span>
										<span class="result__value result__value--volume"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Снеговой район строительства: </span>
										<span class="result__value result__value--snow-area"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Стеновая обшивка: </span>
										<span class="result__value result__value--wall-shealthing"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Кровельная обшивка: </span>
										<span class="result__value result__value--roof-shealthing"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Стены: </span>
										<span class="result__value result__value--wall-color"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Кровля: </span>
										<span class="result__value result__value--roof-color"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Нащельники: </span>
										<span class="result__value result__value--lipping-color"></span>
									</div>
									<div class="result__item">
										<span class="result__feature">Водосток: </span>
										<span class="result__value result__value--drain-color"></span>
									</div>
								</div>
							</div>
							<div class="step__controls-area">
								<input type="button" name="previous" class="control-button control-button--prev" value="Внешний вид">
								<input type="button" name="next" class="control-button  control-button--next" value="Контактная информация">
							</div>
						</fieldset>						
						
						<fieldset class="step step--last info">
							<h2 class="step__title">Контактная информация</h2>
							<h3 class="step__subtitle">This is step 5</h3>
							<div class="step__input-area">
								<div>
									<h4>Контактная информация</h4>
									<div class="info__item col-sm-3">
										<label for="name">Имя: *</label>
										<input name="name" id="name" required>
									</div>
									<div class="info__item col-sm-3">
										<label for="company-name">Компания: *</label>
										<input type="text" name="company-name" id="company-name" required>
									</div>
<!--
									<div class="info__item">
										<label for="address">Адрес: *</label>
										<input name="address" id="address" required>
									</div>
									<div class="info__item">
										<label for="index">Почтовый индекс: *</label>
										<input name="index" id="index" required>
									</div>
									<div class="info__item">
										<label for="construction-area">Район строительства: *</label>
										<input name="construction-area" id="construction-area" required>
									</div>
-->
									<div class="info__item col-sm-3">
										<label for="tel">телефон: *</label>
										<input name="tel" id="tel" type="tel" required>
									</div>
									<div class="info__item col-sm-3">
										<label for="mail">электронная почта: *</label>
										<input name="mail" id="mail" type="email" required>
									</div>
								</div>
								<div class="info__item col-sm-12">
									<h4>Сообщение</h4>
									<textarea name="" id="" cols="30" rows="10"></textarea>									
								</div>
								<div class="info__item col-sm-6">
									<label for="file">Добавить вложение: </label>
									<input type="file" name="file" id="file">
								</div>
								<div class="info__item col-sm-6">
									<label for="period">Желаемый срок исполнения: </label>
									<select name="period" id="period">
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
