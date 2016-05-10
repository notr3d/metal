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
					<form method="POST" id="form" action="javascript:void(null);" onsubmit="sendMail()" class="constructor__container">
						<fieldset class="step step--first structure-type">
							<h2 class="step__title">Назначение</h2>
							<h3 class="step__subtitle">This is step 1</h3>
							<div class="step__input-area">
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-1" value="Склад" checked>
									<label for="structure-type-1">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/1.png" alt="">
										<div class="structure-type__title">Склад</div>
										<!--<div class="structure-type__subtitle">Спайдер</div>-->
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-2" value="Логистический центр">
									<label for="structure-type-2">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/2.png" alt="">
										<div class="structure-type__title">Логистический центр</div>
										<!--<div class="structure-type__subtitle">Кондор</div>-->
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-3" value="Производственное здание">
									<label for="structure-type-3">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/3.png" alt="">
										<div class="structure-type__title">Производственное здание</div>
										<!--<div class="structure-type__subtitle">Спайдер</div>-->
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-4" value="Промышленный корпус">
									<label for="structure-type-4">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/4.png" alt="">
										<div class="structure-type__title">Промышленный корпус</div>
										<!--<div class="structure-type__subtitle">Кондор</div>-->
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-5" value="Многопролетное здание">
									<label for="structure-type-5">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/5.png" alt="">
										<div class="structure-type__title">Многопролетное здание</div>
										<!--<div class="structure-type__subtitle">Спайдер</div>-->
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-6" value="Здание птицекомплекса">
									<label for="structure-type-6">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/6.png" alt="">
										<div class="structure-type__title">Здание птицекомплекса</div>
										<!--<div class="structure-type__subtitle">Спайдер</div>-->
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-7" value="Здание для КРС">
									<label for="structure-type-7">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/7.png" alt="">
										<div class="structure-type__title">Здание для КРС</div>
										<!--<div class="structure-type__subtitle">Спайдер</div>-->
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-8" value="Сервисный центр">
									<label for="structure-type-8">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/8.png" alt="">
										<div class="structure-type__title">Сервисный центр</div>
										<!--<div class="structure-type__subtitle">Спайдер</div>-->
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-9" value="Гараж">
									<label for="structure-type-9">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/9.png" alt="">
										<div class="structure-type__title">Гараж</div>
										<!--<div class="structure-type__subtitle">Кондор</div>-->
									</label>
								</div>								
								<div class="structure-type__item">
									<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-10" value="Спортивное помещение">
									<label for="structure-type-10">
										<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/10.png" alt="">
										<div class="structure-type__title">Спортивное помещение</div>
										<!--<div class="structure-type__subtitle">Кондор</div>-->
									</label>
								</div>								
							</div>	
							<div class="step__controls-area">
								<button type="button" name="next" id="to-dimension-button" class="control-button control-button--next">Размеры</button>
							</div>							
						</fieldset>
												
						<fieldset class="step dimension">
							<h2 class="step__title">Размеры</h2>
							<h3 class="step__subtitle">This is step 2</h3>
							<div class="step__input-area container">
								<div class="row">
									<div class="dimension__item col-sm-3">
										<div class="dimension__settings">
											<h4 class="dimension__header">Ширина</h4>
											<button type="button" id="widthMinus" class="dimension__button dimension__button--minus"></button>
											<input type="number" name="widthInput" id="widthInput" class="dimension__input" min="0" max="100">
											<button type="button" id="widthPlus" class="dimension__button dimension__button--plus"></button>
										</div>
										<div class="dimension__slider">
											<span id="widthMin" class="dimension__limit"></span>
											<input type="range" name="widthRange" id="widthRange">
											<span id="widthMax" class="dimension__limit"></span>
										</div>									
									</div>
									<div class="dimension__item col-sm-3">
										<div class="dimension__settings">
											<h4 class="dimension__header">Длина</h4>
											<button type="button" id="lengthMinus" class="dimension__button dimension__button--minus"></button>
											<input type="number" name="lengthInput" id="lengthInput" class="dimension__input" min="0" max="100">
											<button type="button" id="lengthPlus" class="dimension__button dimension__button--plus"></button>
										</div>
										<div class="dimension__slider">
											<span id="lengthMin" class="dimension__limit"></span>
											<input type="range" name="lengthRange" id="lengthRange">
											<span id="lengthMax" class="dimension__limit"></span>	
										</div>
									</div>
									<div class="dimension__item col-sm-3">
										<div class="dimension__settings">
											<h4 class="dimension__header">Высота</h4>
											<button type="button" id="heightMinus" class="dimension__button dimension__button--minus"></button>
											<input type="number" name="heightInput" id="heightInput" class="dimension__input" min="0" max="100">	
											<button type="button" id="heightPlus" class="dimension__button dimension__button--plus"></button>
										</div>
										<div class="dimension__slider">
											<span id="heightMin" class="dimension__limit"></span>
											<input type="range" name="heightRange" id="heightRange">
											<span id="heightMax" class="dimension__limit"></span>
										</div>									
									</div>
									<div class="dimension__item dimension__output col-sm-3">
										<h4>Площадь здания:</h4>
										<output id=areaOutput></output>
										<h4>Строительный объем:</h4>
										<output id="volumeOutput"></output>
									</div>
								</div>								
								<div class="row">									
									<div class="dimension__snow-area col-sm-4">
										<h4>Снеговой район строительства:</h4>
										<input type="radio" name="snow" id="snow-3" class="snow-area-input" value="3" checked>
										<label for="snow-3">3</label>
										<input type="radio" name="snow" id="snow-4" class="snow-area-input" value="4">
										<label for="snow-4">4</label>
										<input type="radio" name="snow" id="snow-5" class="snow-area-input" value="5">
										<label for="snow-5">5</label>
									</div>									
									<div class="col-sm-4">
										<h4>Стеновая обшивка</h4>
										<select name="wall-shealthing" id="wall-shealthing">
											<option value="Стеновые сэндвич-панели 200м">Стеновые сэндвич-панели 200мм</option>
											<option value="Стеновые сэндвич-панели 180мм">Стеновые сэндвич-панели 180мм</option>
											<option value="Стеновые сэндвич-панели 150мм">Стеновые сэндвич-панели 150мм</option>
											<option value="Стеновые сэндвич-панели 120мм">Стеновые сэндвич-панели 120мм</option>
											<option value="Стеновые сэндвич-панели 100мм">Стеновые сэндвич-панели 100мм</option>
											<option value="Стеновые сэндвич-панели 80мм">Стеновые сэндвич-панели 80мм</option>
											<option value="Профнастил 18">Профнастил 18</option>
											<option value="Профнастил 18 + утеплитель 100мм + профнастил 18">Профнастил 18 + утеплитель 100мм + профнастил 18</option>
											<option value="Профнастил 18 + утеплитель 150мм + профнастил 18">Профнастил 18 + утеплитель 150мм + профнастил 18</option>
										</select>
									</div>
									<div class="col-sm-4">
										<h4>Кровельная обшивка</h4>
										<select name="roof-shealthing" id="roof-shealthing">
											<option value="Кровельные сэндвич-панели 200мм">Кровельные сэндвич-панели 200мм</option>
											<option value="Кровельные сэндвич-панели 180мм">Кровельные сэндвич-панели 180мм</option>
											<option value="Кровельные сэндвич-панели 150мм">Кровельные сэндвич-панели 150мм</option>
											<option value="Кровельные сэндвич-панели 120мм">Кровельные сэндвич-панели 120мм</option>
											<option value="Кровельные сэндвич-панели 100мм">Кровельные сэндвич-панели 100мм</option>
											<option value="Кровельные сэндвич-панели 80мм">Кровельные сэндвич-панели 80мм</option>
											<option value="Профнастил 45">Профнастил 45</option>
											<option value="Профнастил 45 + утеплитель 100мм + профнастил 18">Профнастил 45 + утеплитель 100мм + профнастил 18</option>
											<option value="Профнастил 45 + утеплитель 150мм + профнастил 18">Профнастил 45 + утеплитель 150мм + профнастил 18</option>
										</select>
									</div>										
								</div>
								<div class="additional row">
									<div class="additional__header">
										<input type="checkbox" id="additional-input">
										<label for="additional-input" >Дополнительные параметры</label>
									</div>									
									<div id="additional-container" class="additional__container container">
										<div class="additional__row col-sm-12">
											<div class="additional__item col-sm-6">
												<label for="city">Город: </label>
												<input type="text" name="city" id="city" placeholder="Выберите город">
											</div>
											<div class="additional__item col-sm-6">
												<label for="t-in">Внутренняя температура: </label>
												<input type="number" name="t-in" id="t-in" min="0" max="50" value="0" disabled>
											</div>
										</div>
										<div class="additional__column col-sm-4">
											<div class="additional__item">
												<label for="t-out">Внешняя температура: </label>
												<input type="number" name="t-out" id="t-out" disabled>
											</div>
											<div class="additional__item">
												<label for="Rtr-wall">R<sub>тр</sub>: </label>
												<input type="text" name="Rtr-wall" id="Rtr-wall" disabled>
											</div>	
										</div>
										<div class="additional__column col-sm-4">
											<h3>Стены</h3>
											<div class="additional__item">
												<label for="Rpr-wall">R<sub>пр</sub>: </label>
												<input type="text" name="Rpr-wall" id="Rpr-wall" disabled>
											</div>
											<div class="additional__item">
												<label for="thickness-wall">Толщина: </label>
												<input type="text" name="thickness-wall" id="thickness-wall" disabled>
											</div>
											<div class="additional__item">
												<label for="thickness-wall-rec">Рекомендованная толщина: </label>
												<input type="text" name="thickness-wall-rec" id="thickness-wall-rec" disabled>
											</div>
										</div>
										<div class="additional__column col-sm-4">
											<h3>Кровля</h3>
											<div class="additional__item">
												<label for="Rpr-roof">R<sub>пр</sub>: </label>
												<input type="text" name="Rpr-roof" id="Rpr-roof" disabled>
											</div>
											<div class="additional__item">
												<label for="thickness-roof">Толщина: </label>
												<input type="text" name="thickness-roof" id="thickness-roof" disabled>
											</div>
											<div class="additional__item">
												<label for="thickness-roof-rec">Рекомендованная толщина: </label>
												<input type="text" name="thickness-roof-rec" id="thickness-roof-rec" disabled>
											</div>
										</div>
<!--
										<div class="additional__item">
											<label for="Rtr-roof">R<sub>тр</sub></label>
											<input type="text" name="Rtr-roof" id="Rtr-roof" disabled>
										</div>								
-->
										<!--<div class="additional__item col-sm-4">
											<label for="GSOP">ГСОП</label>
											<input type="text" name="GSOP" id="GSOP" disabled>
										</div>-->
									</div>
								</div>
<!--
								<div id="visual" class="visual col-sm-8">
								</div>	
-->
							</div>
							<div class="step__controls-area">
								<button type="button" name="previous" class="control-button control-button--prev">Назначение</button>
								<button type="button" name="next" class="control-button  control-button--next">Внешний вид</button>
							</div>
						</fieldset>
						<fieldset class="step appearance">
							<h2 class="step__title">Внешний вид здания</h2>
							<h3 class="step__subtitle">This is step 3</h3>
							<div class="step__input-area container">
								<div class="appearance__item col-sm-3">
									<h4>Стены</h4>
									<div class="color">
										<button type="button" class="color__button"><span class="color__span"></span><span class="color__text">Не выбрано</span></button>
										<div class="color__container">
											<input type="radio" name="wallColor" id="wall-ral-5012" class="color__input" value="RAL 5012 Голубой" checked>
											<label for="wall-ral-5012" class="color__label color__label--ral-5012">RAL 5012 Голубой</label>
											<input type="radio" name="wallColor" id="wall-ral-1014" class="color__input" value="RAL 1014 Слоновая кость">
											<label for="wall-ral-1014" class="color__label color__label--ral-1014">RAL 1014 Слоновая кость</label>
											<input type="radio" name="wallColor" id="wall-ral-1015" class="color__input" value="RAL 1015 Светлая слоновая кость">
											<label for="wall-ral-1015" class="color__label color__label--ral-1015">RAL 1015 Светлая слоновая кость</label>
											<input type="radio" name="wallColor" id="wall-ral-1018" class="color__input" value="RAL 1018 Цинково-желтый">
											<label for="wall-ral-1018" class="color__label color__label--ral-1018">RAL 1018 Цинково-желтый</label>
											<input type="radio" name="wallColor" id="wall-ral-3003" class="color__input" value="RAL 3003 Рубиново-красный">
											<label for="wall-ral-3003" class="color__label color__label--ral-3003">RAL 3003 Рубиново-красный</label>
											<input type="radio" name="wallColor" id="wall-ral-5005" class="color__input" value="RAL 5005 Сигнальный синий">
											<label for="wall-ral-5005" class="color__label color__label--ral-5005">RAL 5005 Сигнальный синий</label>
											<input type="radio" name="wallColor" id="wall-ral-6002" class="color__input" value="RAL 6002 Лиственно-зеленый">
											<label for="wall-ral-6002" class="color__label color__label--ral-6002">RAL 6002 Лиственно-зеленый</label>
											<input type="radio" name="wallColor" id="wall-ral-7004" class="color__input" value="RAL 7004 Сигнальный серый">
											<label for="wall-ral-7004" class="color__label color__label--ral-7004">RAL 7004 Сигнальный серый</label>
											<input type="radio" name="wallColor" id="wall-ral-7047" class="color__input" value="RAL 7047 Телегрей 4">
											<label for="wall-ral-7047" class="color__label color__label--ral-7047">RAL 7047 Телегрей 4</label>
											<input type="radio" name="wallColor" id="wall-ral-9002" class="color__input" value="RAL 9002 Светло-серый">
											<label for="wall-ral-9002" class="color__label color__label--ral-9002">RAL 9002 Светло-серый</label>
											<input type="radio" name="wallColor" id="wall-ral-9003" class="color__input" value="RAL 9003 Сигнальный белый">
											<label for="wall-ral-9003" class="color__label color__label--ral-9003">RAL 9003 Сигнальный белый</label>
											<input type="radio" name="wallColor" id="wall-ral-9006" class="color__input" value="RAL 9006 Бело-алюминиевый">
											<label for="wall-ral-9006" class="color__label color__label--ral-9006">RAL 9006 Бело-алюминиевый</label>
											<input type="radio" name="wallColor" id="wall-rr-20" class="color__input" value="RR 20 Белый">
											<label for="wall-rr-20" class="color__label color__label--rr-20">RR 20 Белый</label>
											<input type="radio" name="wallColor" id="wall-rr-21" class="color__input" value="RR 21 Светло-серый">
											<label for="wall-rr-21" class="color__label color__label--rr-21">RR 21 Светло-серый</label>
											<input type="radio" name="wallColor" id="wall-rr-35" class="color__input" value="RR 35 Синий">
											<label for="wall-rr-35" class="color__label color__label--rr-35">RR 35 Синий</label>
										</div>
									</div>
								</div>
								<div class="appearance__item col-sm-3">
									<h4>Кровля</h4>
									<div class="color">
										<button type="button" class="color__button"><span class="color__span"></span><span class="color__text">Не выбрано</span></button>
										<div class="color__container">
											<input type="radio" name="roofColor" id="roof-ral-5012" class="color__input" value="RAL 5012 Голубой" checked>
											<label for="roof-ral-5012" class="color__label color__label--ral-5012">RAL 5012 Голубой</label>
											<input type="radio" name="roofColor" id="roof-ral-1014" class="color__input" value="RAL 1014 Слоновая кость">
											<label for="roof-ral-1014" class="color__label color__label--ral-1014">RAL 1014 Слоновая кость</label>
											<input type="radio" name="roofColor" id="roof-ral-1015" class="color__input" value="RAL 1015 Светлая слоновая кость">
											<label for="roof-ral-1015" class="color__label color__label--ral-1015">RAL 1015 Светлая слоновая кость</label>
											<input type="radio" name="roofColor" id="roof-ral-1018" class="color__input" value="RAL 1018 Цинково-желтый">
											<label for="roof-ral-1018" class="color__label color__label--ral-1018">RAL 1018 Цинково-желтый</label>
											<input type="radio" name="roofColor" id="roof-ral-3003" class="color__input" value="RAL 3003 Рубиново-красный">
											<label for="roof-ral-3003" class="color__label color__label--ral-3003">RAL 3003 Рубиново-красный</label>
											<input type="radio" name="roofColor" id="roof-ral-5005" class="color__input" value="RAL 5005 Сигнальный синий">
											<label for="roof-ral-5005" class="color__label color__label--ral-5005">RAL 5005 Сигнальный синий</label>
											<input type="radio" name="roofColor" id="roof-ral-6002" class="color__input" value="RAL 6002 Лиственно-зеленый">
											<label for="roof-ral-6002" class="color__label color__label--ral-6002">RAL 6002 Лиственно-зеленый</label>
											<input type="radio" name="roofColor" id="roof-ral-7004" class="color__input" value="RAL 7004 Сигнальный серый">
											<label for="roof-ral-7004" class="color__label color__label--ral-7004">RAL 7004 Сигнальный серый</label>
											<input type="radio" name="roofColor" id="roof-ral-7047" class="color__input" value="RAL 7047 Телегрей 4">
											<label for="roof-ral-7047" class="color__label color__label--ral-7047">RAL 7047 Телегрей 4</label>
											<input type="radio" name="roofColor" id="roof-ral-9002" class="color__input" value="RAL 9002 Светло-серый">
											<label for="roof-ral-9002" class="color__label color__label--ral-9002">RAL 9002 Светло-серый</label>
											<input type="radio" name="roofColor" id="roof-ral-9003" class="color__input" value="RAL 9003 Сигнальный белый">
											<label for="roof-ral-9003" class="color__label color__label--ral-9003">RAL 9003 Сигнальный белый</label>
											<input type="radio" name="roofColor" id="roof-ral-9006" class="color__input" value="RAL 9006 Бело-алюминиевый">
											<label for="roof-ral-9006" class="color__label color__label--ral-9006">RAL 9006 Бело-алюминиевый</label>
											<input type="radio" name="roofColor" id="roof-rr-20" class="color__input" value="RR 20 Белый">
											<label for="roof-rr-20" class="color__label color__label--rr-20">RR 20 Белый</label>
											<input type="radio" name="roofColor" id="roof-rr-21" class="color__input" value="RR 21 Светло-серый">
											<label for="roof-rr-21" class="color__label color__label--rr-21">RR 21 Светло-серый</label>
											<input type="radio" name="roofColor" id="roof-rr-35" class="color__input" value="RR 35 Синий">
											<label for="roof-rr-35" class="color__label color__label--rr-35">RR 35 Синий</label>
										</div>
									</div>
								</div>
								<div class="appearance__item col-sm-3">
									<h4>Нащельники</h4>
									<div class="color">
										<button type="button" class="color__button"><span class="color__span"></span><span class="color__text">Не выбрано</span></button>
										<div class="color__container">
											<input type="radio" name="lippingColor" id="lipping-ral-5012" class="color__input" value="RAL 5012 Голубой" checked>
											<label for="lipping-ral-5012" class="color__label color__label--ral-5012">RAL 5012 Голубой</label>
											<input type="radio" name="lippingColor" id="lipping-ral-1014" class="color__input" value="RAL 1014 Слоновая кость">
											<label for="lipping-ral-1014" class="color__label color__label--ral-1014">RAL 1014 Слоновая кость</label>
											<input type="radio" name="lippingColor" id="lipping-ral-1015" class="color__input" value="RAL 1015 Светлая слоновая кость">
											<label for="lipping-ral-1015" class="color__label color__label--ral-1015">RAL 1015 Светлая слоновая кость</label>
											<input type="radio" name="lippingColor" id="lipping-ral-1018" class="color__input" value="RAL 1018 Цинково-желтый">
											<label for="lipping-ral-1018" class="color__label color__label--ral-1018">RAL 1018 Цинково-желтый</label>
											<input type="radio" name="lippingColor" id="lipping-ral-3003" class="color__input" value="RAL 3003 Рубиново-красный">
											<label for="lipping-ral-3003" class="color__label color__label--ral-3003">RAL 3003 Рубиново-красный</label>
											<input type="radio" name="lippingColor" id="lipping-ral-5005" class="color__input" value="RAL 5005 Сигнальный синий">
											<label for="lipping-ral-5005" class="color__label color__label--ral-5005">RAL 5005 Сигнальный синий</label>
											<input type="radio" name="lippingColor" id="lipping-ral-6002" class="color__input" value="RAL 6002 Лиственно-зеленый">
											<label for="lipping-ral-6002" class="color__label color__label--ral-6002">RAL 6002 Лиственно-зеленый</label>
											<input type="radio" name="lippingColor" id="lipping-ral-7004" class="color__input" value="RAL 7004 Сигнальный серый">
											<label for="lipping-ral-7004" class="color__label color__label--ral-7004">RAL 7004 Сигнальный серый</label>
											<input type="radio" name="lippingColor" id="lipping-ral-7047" class="color__input" value="RAL 7047 Телегрей 4">
											<label for="lipping-ral-7047" class="color__label color__label--ral-7047">RAL 7047 Телегрей 4</label>
											<input type="radio" name="lippingColor" id="lipping-ral-9002" class="color__input" value="RAL 9002 Светло-серый">
											<label for="lipping-ral-9002" class="color__label color__label--ral-9002">RAL 9002 Светло-серый</label>
											<input type="radio" name="lippingColor" id="lipping-ral-9003" class="color__input" value="RAL 9003 Сигнальный белый">
											<label for="lipping-ral-9003" class="color__label color__label--ral-9003">RAL 9003 Сигнальный белый</label>
											<input type="radio" name="lippingColor" id="lipping-ral-9006" class="color__input" value="RAL 9006 Бело-алюминиевый">
											<label for="lipping-ral-9006" class="color__label color__label--ral-9006">RAL 9006 Бело-алюминиевый</label>
											<input type="radio" name="lippingColor" id="lipping-rr-20" class="color__input" value="RR 20 Белый">
											<label for="lipping-rr-20" class="color__label color__label--rr-20">RR 20 Белый</label>
											<input type="radio" name="lippingColor" id="lipping-rr-21" class="color__input" value="RR 21 Светло-серый">
											<label for="lipping-rr-21" class="color__label color__label--rr-21">RR 21 Светло-серый</label>
											<input type="radio" name="lippingColor" id="lipping-rr-35" class="color__input" value="RR 35 Синий">
											<label for="lipping-rr-35" class="color__label color__label--rr-35">RR 35 Синий</label>	
										</div>
									</div>
								</div>
								<div class="appearance__item appearance__item--disabled col-sm-3">
									<div class="appearance__inclusion">
										<input type="checkbox" id="drain" class="appearance__input">
										<label for="drain">Водосток</label>
									</div>
									<div class="color">
										<button type="button" class="color__button" disabled><span class="color__span"></span><span class="color__text">Не выбрано</span></button>
										<div class="color__container">
											<input type="radio" name="drainColor" id="drain-ral-5012" class="color__input" value="RAL 5012 Голубой" checked>
											<label for="drain-ral-5012" class="color__label color__label--ral-5012">RAL 5012 Голубой</label>
											<input type="radio" name="drainColor" id="drain-ral-1014" class="color__input" value="RAL 1014 Слоновая кость">
											<label for="drain-ral-1014" class="color__label color__label--ral-1014">RAL 1014 Слоновая кость</label>
											<input type="radio" name="drainColor" id="drain-ral-1015" class="color__input" value="RAL 1015 Светлая слоновая кость">
											<label for="drain-ral-1015" class="color__label color__label--ral-1015">RAL 1015 Светлая слоновая кость</label>
											<input type="radio" name="drainColor" id="drain-ral-1018" class="color__input" value="RAL 1018 Цинково-желтый">
											<label for="drain-ral-1018" class="color__label color__label--ral-1018">RAL 1018 Цинково-желтый</label>
											<input type="radio" name="drainColor" id="drain-ral-3003" class="color__input" value="RAL 3003 Рубиново-красный">
											<label for="drain-ral-3003" class="color__label color__label--ral-3003">RAL 3003 Рубиново-красный</label>
											<input type="radio" name="drainColor" id="drain-ral-5005" class="color__input" value="RAL 5005 Сигнальный синий">
											<label for="drain-ral-5005" class="color__label color__label--ral-5005">RAL 5005 Сигнальный синий</label>
											<input type="radio" name="drainColor" id="drain-ral-6002" class="color__input" value="RAL 6002 Лиственно-зеленый">
											<label for="drain-ral-6002" class="color__label color__label--ral-6002">RAL 6002 Лиственно-зеленый</label>
											<input type="radio" name="drainColor" id="drain-ral-7004" class="color__input" value="RAL 7004 Сигнальный серый">
											<label for="drain-ral-7004" class="color__label color__label--ral-7004">RAL 7004 Сигнальный серый</label>
											<input type="radio" name="drainColor" id="drain-ral-7047" class="color__input" value="RAL 7047 Телегрей 4">
											<label for="drain-ral-7047" class="color__label color__label--ral-7047">RAL 7047 Телегрей 4</label>
											<input type="radio" name="drainColor" id="drain-ral-9002" class="color__input" value="RAL 9002 Светло-серый">
											<label for="drain-ral-9002" class="color__label color__label--ral-9002">RAL 9002 Светло-серый</label>
											<input type="radio" name="drainColor" id="drain-ral-9003" class="color__input" value="RAL 9003 Сигнальный белый">
											<label for="drain-ral-9003" class="color__label color__label--ral-9003">RAL 9003 Сигнальный белый</label>
											<input type="radio" name="drainColor" id="drain-ral-9006" class="color__input" value="RAL 9006 Бело-алюминиевый">
											<label for="drain-ral-9006" class="color__label color__label--ral-9006">RAL 9006 Бело-алюминиевый</label>
											<input type="radio" name="drainColor" id="drain-rr-20" class="color__input" value="RR 20 Белый">
											<label for="drain-rr-20" class="color__label color__label--rr-20">RR 20 Белый</label>
											<input type="radio" name="drainColor" id="drain-rr-21" class="color__input" value="RR 21 Светло-серый">
											<label for="drain-rr-21" class="color__label color__label--rr-21">RR 21 Светло-серый</label>
											<input type="radio" name="drainColor" id="drain-rr-35" class="color__input" value="RR 35 Синий">
											<label for="drain-rr-35" class="color__label color__label--rr-35">RR 35 Синий</label>	
										</div>
									</div>
								</div>
								<div class="appearance__item appearance__item--disabled col-sm-4">
									<div class="appearance__inclusion">
										<input type="checkbox" id="door" class="appearance__input">
										<label for="door">Двери</label>
									</div>
									<div class="appearance__count">
										<h4>Количество: </h4>
										<button type="button" class="count-button count-button--minus" disabled>-</button>
										<input type="number" name="door-quantity" min="1" max="10" disabled>
										<button type="button" class="count-button count-button--plus" disabled>+</button>
									</div>
									<div class="appearance__dimension">
										<h4>Размеры:</h4>
										<input type="radio" name="door-dim" id="door-2x1" value="2x1" disabled>
										<label for="door-2x1">2x1</label>
										<input type="radio" name="door-dim" id="door-3x1" value="3x1" disabled>
										<label for="door-3x1">3x1</label>
										<input type="radio" name="door-dim" id="door-4x1" value="4x1" disabled>
										<label for="door-4x1">4x1</label>
									</div>
									<div class="appearance__reinforce">
										<input type="checkbox" id="reinforce-door" name ="reinforce-door" disabled>
										<label for="reinforce-door">Усилить конструкцию под проем</label>
									</div>
								</div>
								<div class="appearance__item appearance__item--disabled col-sm-4">
									<div class="appearance__inclusion">
										<input type="checkbox" id="gate" class="appearance__input">
										<label for="gate">Ворота</label>
									</div>
									<div class="appearance__count">
										<h4>Количество: </h4>
										<button type="button" class="count-button count-button--minus" disabled>-</button>
										<input type="number" name="gate-quantity" min="0" max="10" disabled>
										<button type="button" class="count-button count-button--plus" disabled>+</button>
									</div>
									<div class="appearance__dimension">
										<h4>Размеры:</h4>
										<input type="radio" name="gate-dim" id="gate-2x1" value="2x1" disabled>
										<label for="gate-2x1">2x1</label>
										<input type="radio" name="gate-dim" id="gate-3x1" value="3x1" disabled>
										<label for="gate-3x1">3x1</label>
										<input type="radio" name="gate-dim" id="gate-4x1" value="4x1" disabled>
										<label for="gate-4x1">4x1</label>
									</div>
									<div class="appearance__reinforce">
										<input type="checkbox" id="reinforce-gate" name ="reinforce-gate" disabled>
										<label for="reinforce-gate">Усилить конструкцию под проем</label>
									</div>
								</div>
								<div class="appearance__item appearance__item--disabled col-sm-4">
									<div class="appearance__inclusion">
										<input type="checkbox" id="translucent" class="appearance__input">
										<label for="translucent">Светопр. участки кровли</label>
									</div>
									<div class="appearance__count">
										<h4>Количество: </h4>
										<button type="button" class="count-button count-button--minus" disabled>-</button>
										<input type="number" name="translucent-roof-areas-quantity" min="0" max="10" disabled>
										<button type="button" class="count-button count-button--plus" disabled>+</button>
									</div>	
									<div class="appearance__dimension">
										<h4>Размеры:</h4>
										<input type="radio" name="tra-dim" id="tra-2x1" value="2x1" disabled>
										<label for="tra-2x1">2x1</label>
										<input type="radio" name="tra-dim" id="tra-3x1" value="3x1" disabled>
										<label for="tra-3x1">3x1</label>
										<input type="radio" name="tra-dim" id="tra-4x1" value="4x1" disabled>
										<label for="tra-4x1">4x1</label>
									</div>	
									<div class="appearance__reinforce">
										<input type="checkbox" id="reinforce-translucent" name ="reinforce-translucent" disabled>
										<label for="reinforce-translucent">Усилить конструкцию под проем</label>
									</div>							
								</div>
								<div class="appearance__item appearance__item--special appearance__item--disabled col-sm-12">
									<div class="appearance__inclusion">
										<input type="checkbox" id="window" class="appearance__input">
										<label for="window">Окна</label>
										<div class="appearance__count">
											<h4>Добавить позицию: </h4>
											<button type="button" class="count-button count-button--minus" id="window-type-minus" disabled>-</button>
											<input type="number" name="window-type-quantity" id="window-type-quantity" min="1" max="10" value="1" disabled>
											<button type="button" class="count-button count-button--plus" id="window-type-plus" disabled>+</button>
										</div>
									</div>
									<div class="appearance__block">
										<div class="appearance__dimension">
											<div class="appearance__count">
												<h4>Ширина: </h4>
												<button type="button" class="count-button count-button--minus" disabled>-</button>
												<input type="number" name="window-width-1" min="0" max="10" disabled>
												<button type="button" class="count-button count-button--plus" disabled>+</button>
											</div>
											<div class="appearance__count">
												<h4>Высота: </h4>
												<button type="button" class="count-button count-button--minus" disabled>-</button>
												<input type="number" name="window-height-1" min="0" max="10" disabled>
												<button type="button" class="count-button count-button--plus" disabled>+</button>
											</div>
										</div>
										<div class="appearance__count">
											<h4>Количество: </h4>
											<button type="button" class="count-button count-button--minus" disabled>-</button>
											<input type="number" name="window-quantity-1" min="0" max="10" disabled>
											<button type="button" class="count-button count-button--plus" disabled>+</button>
										</div>									
										<div class="appearance__reinforce">
											<input type="checkbox" id="reinforce-window-1" name ="reinforce-window" disabled>
											<label for="reinforce-window-1">Усилить конструкцию под проем</label>
										</div>
									</div>
								</div>								
							</div>							
							<div class="step__controls-area">
								<button type="button" name="previous" class="control-button control-button--prev">Размеры</button>
								<button type="button" name="next" class="control-button  control-button--next">Результат</button>
							</div>
						</fieldset>
						<fieldset class="step result">
							<h2 class="step__title">Результат</h2>
							<h3 class="step__subtitle">This is step 4</h3>
							<div class="step__input-area">
								<div class="result__container container">
									<div class="result__column col-sm-6">
										<div class="result__block">
											<h3 class="result__header">Тип здания</h3>
											<div class="result__item">
												<span class="result__feature">Применение: </span>
												<span class="result__value result__value--type">Склад</span>
											</div>
											<div class="result__item">
												<span class="result__feature">Продукт: </span>
												<span class="result__value result__value--subtype">Спайдер</span>
											</div>
										</div>
										<div class="result__block">
											<h3 class="result__header">Размеры</h3>
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
										</div>	
									</div>
									<div class="result__column col-sm-6">
										<div class="result__block">
											<h3 class="result__header">Характеристики</h3>
											<div class="result__item">
												<span class="result__feature">Снеговой район строительства: </span>
												<span class="result__value result__value--snow-area">3</span>
											</div>
											<div class="result__item">
												<span class="result__feature">Стеновая обшивка: </span>
												<span class="result__value result__value--wall-shealthing">Профнастил 18 + утеплитель 100мм</span>
											</div>
											<div class="result__item">
												<span class="result__feature">Кровельная обшивка: </span>
												<span class="result__value result__value--roof-shealthing">Профнастил 45 + утеплитель 150мм</span>
											</div>
										</div>								
										<div class="result__block">
											<h3 class="result__header">Цвета</h3>
											<div class="result__item">
												<span class="result__feature">Стены: </span>
												<span class="result__value result__value--wall-color" value="">Не выбрано</span>
											</div>
											<div class="result__item">
												<span class="result__feature">Кровля: </span>
												<span class="result__value result__value--roof-color">Не выбрано</span>
											</div>
											<div class="result__item">
												<span class="result__feature">Нащельники: </span>
												<span class="result__value result__value--lipping-color">Не выбрано</span>
											</div>
											<div class="result__item">
												<span class="result__feature">Водосток: </span>
												<span class="result__value result__value--drain-color">Не выбрано</span>
											</div>
										</div>	
									</div>
								</div>
							</div>
							<div class="step__controls-area">
								<button type="button" name="previous" class="control-button control-button--prev">Внешний вид</button>
								<button type="button" name="next" class="control-button  control-button--next">Контактная информация</button>
							</div>
						</fieldset>						
						
						<fieldset class="step step--last info">
							<h2 class="step__title">Контактная информация</h2>
							<h3 class="step__subtitle">This is step 5</h3>
							<div class="step__input-area container">
								<div class="info__item info__item--name col-sm-3">
									<label for="name">Имя: *</label>
									<input name="name" id="name">
								</div>
								<div class="info__item info__item--company col-sm-3">
									<label for="company-name">Компания: *</label>
									<input type="text" name="company-name" id="company-name">
								</div>
								<div class="info__item info__item--phone col-sm-3">
									<label for="tel">Телефон: *</label>
									<input name="tel" id="tel" type="tel">
								</div>
								<div class="info__item info__item--mail col-sm-3">
									<label for="mail">Электронная почта: *</label>
									<input name="mail" id="mail" type="email">
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
								<div class="info__item info__item--message col-sm-12">
									<label for="message">Сообщение</label>
									<textarea name="message" id="message" cols="30" rows="10"></textarea>									
								</div>
								<div class="info__item info__item--file col-sm-6">
<!--
									<label for="file">Добавить вложение</label>
									<input type="file" name="file" id="file">
-->
								</div>
								<div class="info__item info__item--period col-sm-6">
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
								<button type="button" name="previous" class="control-button control-button--prev">Результат</button>
								<button type="submit" name="submit" class="control-button control-button--submit">Отправить</button>
							</div>
							<div id="results"></div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		</div><!-- #primary -->
	</main><!-- #main -->
	<script>
		function sendMail() {
			var form = $('#form');
			var disabled = form.find(':input:disabled').removeAttr('disabled');
        	var constructorMail = form.serialize();
			disabled.attr('disabled','disabled');
        	$.ajax({
        		type: 'POST',
        		url: '<?php echo get_template_directory_uri(); ?>/mail.php',
        		data: constructorMail,
        		success: function(data) {
        			$('#results').html(data);
					//alert('Ваше сообщение отправлено');
        		},
        		error: function(xhr, str){
        			alert(xhr.responseCode);
        		}
        	});
        };
	</script>
<?php get_footer(); ?>
