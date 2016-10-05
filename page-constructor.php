<?php get_header(); ?>
<main class="constructor" role="main">
	<div class="constructor__wrapper">
		<div class="constructor__container">
			<div class="prog">
				<ul class="prog__bar lcw">
					<li class="prog__item active">Назначение</li>
					<li class="prog__item">Размеры</li>
					<li class="prog__item">Внешний вид здания</li>
					<li class="prog__item">Результат</li>
					<li class="prog__item">Контактная информация</li>
				</ul>
			</div>					
			<form method="POST" id="form" action="javascript:void(null);" onsubmit="sendMail()" class="constructor__form">
				<fieldset class="step step--first structure-type">
					<div class="step__heading">
						<h2 class="step__title lcw"><span>Шаг 1.</span> Назначение здания</h2>
						<!--<h3 class="step__subtitle">This is step 1</h3>-->
					</div>
					<div class="step__container">
						<div class="step__input-area lcw">
							<div class="structure-type__item">
								<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-1" value="Склад" checked>
								<label for="structure-type-1">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/1.png" alt="">
									<div class="structure-type__title">Склад</div>
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
								<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-9" value="Гараж">
								<label for="structure-type-9">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/9.png" alt="">
									<div class="structure-type__title">Гараж</div>
									<!--<div class="structure-type__subtitle">Кондор</div>-->
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
								<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-8" value="Сервисный центр">
								<label for="structure-type-8">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/8.png" alt="">
									<div class="structure-type__title">Сервисный центр</div>
									<!--<div class="structure-type__subtitle">Спайдер</div>-->
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
							<div class="structure-type__item">
								<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-7" value="Здание для КРС">
								<label for="structure-type-7">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/7.png" alt="">
									<div class="structure-type__title">Здание для КРС</div>
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
								<input type="radio" name="structure-type" class="structure-type__input" id="structure-type-5" value="Многопролетное здание">
								<label for="structure-type-5">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/constructor/5.png" alt="">
									<div class="structure-type__title">Многопролетное здание</div>
									<!--<div class="structure-type__subtitle">Спайдер</div>-->
								</label>
							</div>								
						</div>									
					</div>	
					<div class="step__controls-area lcw">
						<button type="button" name="previous" class="control-button control-button--prev" style="visibility: hidden; ">Назад</button>
						<div class="paginator">
							<button type="button" class="paginator__button paginator__button--active">1</button>
							<button type="button" class="paginator__button">2</button>
							<button type="button" class="paginator__button">3</button>
							<button type="button" class="paginator__button">4</button>
							<button type="button" class="paginator__button">5</button>
						</div>
						<button type="button" name="next" id="to-dimension-button" class="control-button control-button--next">Далее</button>
					</div>					
				</fieldset>
				<fieldset class="step dimension">
					<div class="step__heading">
						<h2 class="step__title lcw"><span>Шаг 2.</span> Размеры здания</h2>
						<!--<h3 class="step__subtitle">This is step 2</h3>-->
					</div>
					<div class="step__container">
						<div class="step__input-area lcw">
							<div class="dimension__container">
								<div class="dimension__item">
									<div class="dimension__inner">
										<h4 class="dimension__header">Ширина</h4>
										<div class="dimension__count">
											<button type="button" id="widthMinus" class="dimension__button dimension__button--minus">-</button>
											<input type="number" name="widthInput" id="widthInput" class="dimension__input" min="0" max="100">
											<button type="button" id="widthPlus" class="dimension__button dimension__button--plus">+</button>
										</div>	
										<div class="dimension__slider">
											<span id="widthMin" class="dimension__limit"></span>
											<input type="range" id="widthRange">
											<span id="widthMax" class="dimension__limit"></span>
										</div>
									</div>									
								</div>
								<div class="dimension__item">
									<div class="dimension__inner">
										<h4 class="dimension__header">Длина</h4>
										<div class="dimension__count">
											<button type="button" id="lengthMinus" class="dimension__button dimension__button--minus">-</button>
											<input type="number" name="lengthInput" id="lengthInput" class="dimension__input" min="0" max="100">
											<button type="button" id="lengthPlus" class="dimension__button dimension__button--plus">+</button>
										</div>
										<div class="dimension__slider">
											<span id="lengthMin" class="dimension__limit"></span>
											<input type="range" id="lengthRange">
											<span id="lengthMax" class="dimension__limit"></span>	
										</div>
									</div>
								</div>
								<div class="dimension__item">
									<div class="dimension__inner">
										<h4 class="dimension__header">Высота</h4>
										<div class="dimension__count">
											<button type="button" id="heightMinus" class="dimension__button dimension__button--minus">-</button>
											<input type="number" name="heightInput" id="heightInput" class="dimension__input" min="0" max="100">	
											<button type="button" id="heightPlus" class="dimension__button dimension__button--plus">+</button>
										</div>
										<div class="dimension__slider">
											<span id="heightMin" class="dimension__limit"></span>
											<input type="range" id="heightRange">
											<span id="heightMax" class="dimension__limit"></span>
										</div>	
									</div>								
								</div>
								<div class="dimension__item dimension__item--output">
									<div class="dimension__inner">
										<h4 class="dimension__header">Площадь стен:</h4>
										<output id=areaOutput></output>	
									</div>					
								</div>	
								<div class="dimension__item dimension__item--output">
									<div class="dimension__inner">
										<h4 class="dimension__header">Площадь кровли:</h4>
										<output id=roofAreaOutput></output>
										<div class="info-block">
											<span class="info-block__text">i</span>
											<div class="info-block__inner">Площадь кровли рассчитывается при уклоне крыши 20°</div>
										</div>
									</div>
								</div>
								<div class="dimension__item dimension__item--output">
									<div class="dimension__inner">
										<h4 class="dimension__header">Объем:</h4>
										<output id="volumeOutput"></output>
									</div>
								</div>
								<div class="sheathing sheathing--wall">
									<div class="sheathing__inner">
										<h3 class="sheathing__header">Стены</h4>
										<div class="sheathing__item">
											<div class="sheathing__con">
												<h4>Тип стен</h4>
												<div class="sheathing__select">
													<select name="wall-shealthing" id="wall-shealthing">
														<option selected disabled hidden>Выберите тип</option>
														<option value="Сэндвич-панели">Сэндвич-панели</option>
														<option value="Профнастил">Профнастил</option>
														<option value="Профнастил + утеплитель + профнастил">Профнастил + утеплитель + профнастил</option>
													</select>
												</div>
											</div>									
										</div>
										<div class="sheathing__item sheathing__item--disabled">
											<div class="sheathing__con">
												<h4>Тип наполнителя</h4>
												<div class="sheathing__select">
													<select name="wall-filler-type" id="wall-filler-type">
														<option value="Минеральная вата">Минеральная вата</option>
														<option value="Пенополистирол (PPS)">Пенополистирол (PPS)</option>
														<option value="Пенополиуретан (PUR)">Пенополиуретан (PUR)</option>
														<option value="Пенополиизоцианурат (PIR)">Пенополиизоцианурат (PIR)</option>
													</select>
												</div>
											</div>
										</div>
										<div class="sheathing__item sheathing__item--disabled">
											<div class="sheathing__con">
												<div class="sheathing__descr">
													<h5>Плотность, кг/м<sup>3</sup></h5>
													<span id="wall-density">100 - 120</span>
													<h5>Теплопроводность в сухом состоянии, Вт/мК</h5>
													<span id="wall-conductivity">0.042</span>
													<h5>Водопоглощение, %</h5>
													<span id="wall-absorbtion">не более 1.5%</span>			
												</div>
											</div>
										</div>
										<div class="sheathing__item sheathing__item--disabled">
											<div class="sheathing__con">
												<h4>Толщина</h4>
												<div class="sheathing__select">
													<select name="wall-shealthing-thickness" id="wall-shealthing-thickness">
														<option value="50мм">50мм</option>
														<option value="80мм">80мм</option>
														<option value="100мм">100мм</option>
														<option value="120мм">120мм</option>
														<option value="150мм">150мм</option>
														<option value="170мм">170мм</option>
														<option value="200мм">200мм</option>
														<option value="250мм">250мм</option>
													</select>
												</div>
											</div>									
										</div>
									</div>
								</div>									
								<div class="sheathing sheathing--roof">
									<div class="sheathing__inner">
										<h3 class="sheathing__header">Кровля</h4>
										<div class="sheathing__item">
											<div class="sheathing__con">
												<h4>Тип кровли</h4>
												<div class="sheathing__select">
													<select name="roof-shealthing" id="roof-shealthing">
														<option selected disabled hidden>Выберите тип</option>
														<option value="Сэндвич-панели">Сэндвич-панели</option>
														<option value="Профнастил">Профнастил</option>
														<option value="Профнастил + утеплитель + профнастил">Профнастил + утеплитель + профнастил</option>
													</select>
												</div>								
											</div>	
										</div>
										<div class="sheathing__item sheathing__item--disabled">
											<div class="sheathing__con">
												<h4>Тип наполнителя</h4>
												<div class="sheathing__select">
													<select name="roof-filler-type" id="roof-filler-type">
														<option value="Минеральная вата">Минеральная вата</option>
														<option value="Пенополистирол (PPS)">Пенополистирол (PPS)</option>
														<option value="Пенополиуретан (PUR)">Пенополиуретан (PUR)</option>
														<option value="Пенополиизоцианурат (PIR)">Пенополиизоцианурат (PIR)</option>
													</select>
												</div>	
											</div>								
										</div>
										<div class="sheathing__item sheathing__item--disabled">
											<div class="sheathing__con">
												<div class="sheathing__descr">
													<h5>Плотность, кг/м<sup>3</sup></h5>
													<span id="roof-density">120 - 150</span>
													<h5>Теплопроводность в сухом состоянии, Вт/мК</h5>
													<span id="roof-conductivity">0.042</span>
													<h5>Водопоглощение, %</h5>
													<span id="roof-absorbtion">не более 1.5%</span>			
												</div>
											</div>
										</div>
										<div class="sheathing__item sheathing__item--disabled">
											<div class="sheathing__con">
												<h4>Толщина</h4>
												<div class="sheathing__select">
													<select name="roof-shealthing-thickness" id="roof-shealthing-thickness">
														<option value="50мм">50мм</option>
														<option value="80мм">80мм</option>
														<option value="100мм">100мм</option>
														<option value="120мм">120мм</option>
														<option value="150мм">150мм</option>
														<option value="170мм">170мм</option>
														<option value="200мм">200мм</option>
													</select>
												</div>
											</div>									
										</div>
									</div>	
								</div>
							</div>	
							<div class="additional">
								<div class="additional__header additional__header--disabled">
									<input type="checkbox" id="additional-input" disabled>
									<label for="additional-input">Рассчитать толщину утеплителя</label>
									<div class="popup" id="additional-help">
										<p class="popup__text">Для рассчета толщины утеплителя укажите тип стен или кровли</p>
										<!--<button type="button" class="popup__close">×</button>-->
									</div>
								</div>									
								<div id="additional-block" class="additional__block">
									<div class="additional__container">
										<div class="additional__item">
											<div class="additional__inner">
												<label for="city">Город: </label>
												<div class="additional__con">
													<input type="text" name="city" id="city" onkeypress="convertLayout()" placeholder="Выберите город">
												</div>								
											</div>									
										</div>
										<div class="additional__item additional__item--snow-area">
											<div class="additional__inner">
												<h4>Снеговой район строительства:</h4>
												<div class="additional__con">
													<input type="radio" name="snow" id="snow-3" class="snow-area-input" value="3" checked>
													<label for="snow-3">3</label>
													<input type="radio" name="snow" id="snow-4" class="snow-area-input" value="4">
													<label for="snow-4">4</label>
													<input type="radio" name="snow" id="snow-5" class="snow-area-input" value="5">
													<label for="snow-5">5</label>
												</div>								
											</div>									
										</div>
										<div class="additional__item">
											<div class="additional__inner">
												<label for="t-in">Внутренняя температура, °C: </label>
												<div class="additional__con">
													<button type="button" id="t-in-minus" class="additional__button additional__button--minus"></button>
													<input type="number" name="t-in" id="t-in" min="0" max="35" value="0" disabled>
													<button type="button" id="t-in-plus" class="additional__button additional__button--plus"></button>
												</div>
											</div>								
										</div>
										<div class="additional__item">
											<div class="additional__inner">
												<label for="t-out">Внешняя температура, °C: </label>
												<div class="additional__con">
													<input type="number" name="t-out" id="t-out" disabled>
												</div>
											</div>
										</div>									
										<div class="additional__item">
											<div class="additional__inner">
												<label for="Rtr-wall">R<sub>тр</sub>: </label>
												<div class="additional__con">
													<input type="number" name="Rtr-wall" id="Rtr-wall" disabled>
												</div>
											</div>	
										</div>
										<div class="additional__item">
											<div class="additional__inner">
												<label for="GSOP">ГСОП</label>
												<div class="additional__con">
													<input type="number" name="GSOP" id="GSOP" disabled>
												</div>
											</div>	
										</div>	
										<div class="additional__hidden">
											<div class="additional__item">
												<div class="additional__inner">
													<label for="warm">t<sub>оп</sub>:</label>
													<div class="additional__con">
														<input type="number" name="warm" id="warm" disabled>
													</div>
												</div>
											</div>
											<div class="additional__item">
												<div class="additional__inner">
													<label for="time">Прод. от. пер.: </label>
													<div class="additional__con">
														<input type="number" name="time" id="time" disabled>
													</div>
												</div>
											</div>
										</div>
										<div class="add-output">				
											<div class="add-output__col">
												<div id="wall-block" class="add-output__inner add-output__inner--disabled">
													<h3 class="add-output__header">Стены</h3>
													<div class="add-output__item">
														<label for="Rpr-wall">R<sub>пр</sub>: </label>
														<input type="text" name="Rpr-wall" id="Rpr-wall" disabled>
													</div>
													<div class="add-output__item">
														<label for="thickness-wall">Толщина по расчету: </label>
														<input type="text" name="thickness-wall" id="thickness-wall" disabled>
													</div>
													<div class="add-output__item">
														<label for="thickness-wall-rec">Рекомендованная толщина: </label>
														<input type="text" name="thickness-wall-rec" id="thickness-wall-rec" disabled>
													</div>
												</div>
											</div>
											<div class="add-output__col">
												<div  id="roof-block" class="add-output__inner add-output__inner--disabled">
													<h3 class="add-output__header">Кровля</h3>
													<div class="add-output__item">
														<label for="Rpr-roof">R<sub>пр</sub>: </label>
														<input type="text" name="Rpr-roof" id="Rpr-roof" disabled>
													</div>
													<div class="add-output__item">
														<label for="thickness-roof">Толщина по расчету: </label>
														<input type="text" name="thickness-roof" id="thickness-roof" disabled>
													</div>
													<div class="add-output__item">
														<label for="thickness-roof-rec">Рекомендованная толщина: </label>
														<input type="text" name="thickness-roof-rec" id="thickness-roof-rec" disabled>
													</div>
												</div>	
											</div>
										</div>
									</div>									
								</div>
							</div>
						</div>
					</div>
					<div class="step__controls-area lcw">
						<button type="button" name="previous" class="control-button control-button--prev">Назад</button>
						<div class="paginator">
							<button type="button" class="paginator__button paginator__button--enabled">1</button>
							<button type="button" class="paginator__button paginator__button--active">2</button>
							<button type="button" class="paginator__button">3</button>
							<button type="button" class="paginator__button">4</button>
							<button type="button" class="paginator__button">5</button>
						</div>
						<button type="button" name="next" class="control-button  control-button--next">Далее</button>
					</div>
				</fieldset>
				<fieldset class="step appearance">
					<div class="step__heading">
						<h2 class="step__title lcw"><span>Шаг 3.</span> Внешний вид здания</h2>
						<!--<h3 class="step__subtitle">This is step 3</h3>-->
					</div>
					<div class="step__container">
						<div class="step__input-area lcw">
							<div class="appearance__container">
								<div class="appearance__item appearance__item--4">
									<div class="appearance__inner">
										<h4 class="appearance__header">Стены</h4>
										<div class="color">
											<button type="button" class="color__button"><span class="color__span"></span><span class="color__text">Не выбрано</span></button>
											<div class="color__container">
												<input type="radio" name="wallColor" id="wall-ral-5012" class="color__input" value="RAL 5012 Голубой">
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
								</div>
								<div class="appearance__item appearance__item--4">
									<div class="appearance__inner">
										<h4 class="appearance__header">Кровля</h4>
										<div class="color">
											<button type="button" class="color__button"><span class="color__span"></span><span class="color__text">Не выбрано</span></button>
											<div class="color__container">
												<input type="radio" name="roofColor" id="roof-ral-5012" class="color__input" value="RAL 5012 Голубой">
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
								</div>
								<div class="appearance__item appearance__item--4">
									<div class="appearance__inner">
										<h4 class="appearance__header">Нащельники</h4>
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
								</div>
								<div class="appearance__item appearance__item--4 appearance__item--disabled">
									<div class="appearance__inner">
										<div class="appearance__inclusion">
											<input type="checkbox" id="drain" class="appearance__input">
											<label for="drain">Водосток</label>
										</div>
										<div class="color">
											<button type="button" class="color__button" disabled><span class="color__span"></span><span class="color__text">Не выбрано</span></button>
											<div class="color__container">
												<input type="radio" name="drainColor" id="drain-ral-5012" class="color__input" value="RAL 5012 Голубой">
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
								</div>
								<div class="appearance__item appearance__item--3 appearance__item--disabled">
									<div class="appearance__inner">
										<div class="appearance__inclusion">
											<input type="checkbox" id="door" class="appearance__input">
											<label for="door">Двери</label>
										</div>
										<div class="appearance__count">
											<h4>Количество: </h4>
											<button type="button" class="count-button count-button--minus" disabled>-</button>
											<input type="number" name="door-quantity" id="door-quantity" class="count-input" min="1" max="10" disabled>
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
											<label for="reinforce-door">Не учитывать стоимость</label>
										</div>
									</div>
								</div>
								<div class="appearance__item appearance__item--3 appearance__item--disabled">
									<div class="appearance__inner">
										<div class="appearance__inclusion">
											<input type="checkbox" id="gate" class="appearance__input">
											<label for="gate">Ворота</label>
										</div>
										<div class="appearance__count">
											<h4>Количество: </h4>
											<button type="button" class="count-button count-button--minus" disabled>-</button>
											<input type="number" name="gate-quantity" id="gate-quantity" class="count-input" min="0" max="10" disabled>
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
											<label for="reinforce-gate">Не учитывать стоимость</label>
										</div>
									</div>
								</div>
								<div class="appearance__item appearance__item--3 appearance__item--disabled">
									<div class="appearance__inner">
										<div class="appearance__inclusion">
											<input type="checkbox" id="translucent" class="appearance__input">
											<label for="translucent">Светопрозрачные участки кровли</label>
										</div>
										<div class="appearance__count">
											<h4>Количество: </h4>
											<button type="button" class="count-button count-button--minus" disabled>-</button>
											<input type="number" name="translucent-roof-areas-quantity" id="translucent-quantity" class="count-input" min="0" max="10" disabled>
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
											<label for="reinforce-translucent">Не учитывать стоимость</label>
										</div>	
									</div>						
								</div>
								<div class="appearance__item appearance__item--1 appearance__item--special appearance__item--disabled">
									<div class="appearance__inner">
										<div class="appearance__inclusion">
											<input type="checkbox" id="window" class="appearance__input">
											<label for="window">Окна</label>
											<div class="appearance__count">
												<h4>Добавить позицию: </h4>
												<button type="button" class="count-button " id="window-type-minus" disabled>-</button>
												<input type="number" name="window-type-quantity" class="count-input"  id="window-type-quantity" min="1" max="10" value="1" disabled>
												<button type="button" class="count-button" id="window-type-plus" disabled>+</button>
											</div>
										</div>
										<div class="window__container">
											<div id="appearance-block-1" class="appearance__block">
												<div class="appearance__dimension">
													<div class="appearance__count">
														<h4>Ширина: </h4>
														<button type="button" class="window-button--minus" disabled>-</button>
														<input type="number" id="window-width-1" name="window-width-1" class="window-input" min="0" max="10" disabled>
														<button type="button" class="window-button--plus" disabled>+</button>
													</div>
													<div class="appearance__count">
														<h4>Высота: </h4>
														<button type="button" class="window-button--minus" disabled>-</button>
														<input type="number" name="window-height-1" id="window-height-1" class="window-input" min="0" max="10" disabled>
														<button type="button" class="window-button--plus" disabled>+</button>
													</div>
												</div>
												<div class="appearance__count">
													<h4>Количество: </h4>
													<button type="button" class="window-button--minus" disabled>-</button>
													<input type="number" name="window-quantity-1" id="window-quantity-1" class="window-input" min="0" max="10" disabled>
													<button type="button" class="window-button--plus" disabled>+</button>
												</div>							
												<div class="appearance__reinforce">
													<input type="checkbox" id="window-reinforce-1" name ="window-reinforce-1" class="window-reinforce-input" disabled>
													<label for="window-reinforce-1">Не учитывать стоимость</label>
												</div>
												<button type="button" class="appearance__delete" disabled>x</button>
											</div>
										</div>
									</div>
								</div>
							</div>								
						</div>	
					</div>						
					<div class="step__controls-area lcw">
						<button type="button" name="previous" class="control-button control-button--prev">Назад</button>
						<div class="paginator">
							<button type="button" class="paginator__button paginator__button--enabled">1</button>
							<button type="button" class="paginator__button paginator__button--enabled">2</button>
							<button type="button" class="paginator__button paginator__button--active">3</button>
							<button type="button" class="paginator__button">4</button>
							<button type="button" class="paginator__button">5</button>
						</div>
						<button type="button" name="next" class="control-button  control-button--next">Далее</button>
					</div>
				</fieldset>

				<fieldset class="step result">
					<div class="step__heading">
						<h2 class="step__title lcw"><span>Шаг 4.</span> Проверить данные</h2>
						<!--<h3 class="step__subtitle">This is step 4</h3>-->
					</div>
					<div class="step__container">
						<div class="step__input-area lcw">
							<div class="result__wrapper">
								<div class="result__column">
									<div class="result__container">
										<h3 class="result__heading">Основные параметры</h3>
										<h4 class="result__header">Характеристики:</h4>
										<div class="result__item result__item--1">
											<span class="result__feature">Тип здания:</span>
											<span class="result__value" id="r-structure-type">Склад</span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Ширина:</span>
											<span class="result__value" id="r-width"></span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Длина:</span>
											<span class="result__value" id="r-length"></span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Высота:</span>
											<span class="result__value" id="r-height"></span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Площадь стен:</span>
											<span class="result__value" id="r-area"></span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Площадь кровли:</span>
											<span class="result__value" id="r-area-roof"></span>
										</div>										
										<div class="result__item result__item--3">
											<span class="result__feature">Объем:</span>
											<span class="result__value" id="r-volume"></span>
										</div>
										<h4 class="result__header">Стены</h4>
										<div class="result__item result__item--1">
											<span class="result__feature">Тип стен:</span>
											<span class="result__value" id="r-wall-type">-</span>
										</div>
										<div class="result__item result__item--1">
											<span class="result__feature">Тип наполнителя:</span>
											<span class="result__value" id="r-wall-filler">-</span>
										</div>
										<div class="result__item result__item--1">
											<span class="result__feature">Толщина:</span>
											<span class="result__value" id="r-wall-thickness">-</span>
										</div>										
										<h4 class="result__header">Кровля</h4>
										<div class="result__item result__item--1">
											<span class="result__feature">Тип Кровли:</span>
											<span class="result__value" id="r-roof-type">-</span>
										</div>
										<div class="result__item result__item--1">
											<span class="result__feature">Тип наполнителя:</span>
											<span class="result__value" id="r-roof-filler">-</span>
										</div>
										<div class="result__item result__item--1">
											<span class="result__feature">Толщина:</span>
											<span class="result__value" id="r-roof-thickness">-</span>
										</div>
									</div>	
								</div>
								<div class="result__column">
									<div class="result__container">
										<h3 class="result__heading">Дополнительные параметры</h3>					
										<h4 class="result__header">Цвета</h4>
										<div class="result__item result__item--2">
											<span class="result__feature">Стены:</span>
											<span class="result__value" id="r-wall-color">-</span>
										</div>
										<div class="result__item result__item--2">
											<span class="result__feature">Кровля: </span>
											<span class="result__value" id="r-roof-color">-</span>
										</div>
										<div class="result__item result__item--2">
											<span class="result__feature">Нащельники:</span>
											<span class="result__value" id="r-lipping-color">-</span>
										</div>
										<div class="result__item result__item--2">
											<span class="result__feature">Водосток:</span>
											<span class="result__value" id="r-drain-color">-</span>
										</div>
										<h4 class="result__header">Двери</h4>
										<div class="result__item result__item--3">
											<span class="result__feature">Количество:</span>
											<span class="result__value" id="r-door-quantity">-</span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Размеры:</span>
											<span class="result__value" id="r-door-dimension">-</span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Не учитывать стоимость: </span>
											<span class="result__value" id="r-door-reinforce">-</span>
										</div>									
										<h4 class="result__header">Ворота</h4>
										<div class="result__item result__item--3">
											<span class="result__feature">Количество:</span>
											<span class="result__value" id="r-gate-quantity">-</span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Размеры:</span>
											<span class="result__value" id="r-gate-dimension">-</span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Не учитывать стоимость: </span>
											<span class="result__value" id="r-gate-reinforce">-</span>
										</div>	
										<h4 class="result__header">Светопрозрачные участки кровли</h4>
										<div class="result__item result__item--3">
											<span class="result__feature">Количество:</span>
											<span class="result__value" id="r-translucent-quantity">-</span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Размеры:</span>
											<span class="result__value" id="r-translucent-dimension">-</span>
										</div>
										<div class="result__item result__item--3">
											<span class="result__feature">Не учитывать стоимость: </span>
											<span class="result__value" id="r-translucent-reinforce">-</span>
										</div>	
										<h4 class="result__header">Окна</h4>
										<div id="r-window-container-1" class="result__window-container">
											<div class="result__item result__item--2">
												<span class="result__feature">Ширина:</span>
												<span class="result__value" id="r-window-width-1">-</span>
											</div>
											<div class="result__item result__item--2">
												<span class="result__feature">Высота: </span>
												<span class="result__value" id="r-window-height-1">-</span>
											</div>
											<div class="result__item result__item--2">
												<span class="result__feature">Количество:</span>
												<span class="result__value" id="r-window-quantity-1">-</span>
											</div>
											<div class="result__item result__item--2">
												<span class="result__feature">Не учитывать стоимость: </span>
												<span class="result__value" id="r-window-reinforce-1">-</span>
											</div>						
										</div>								
									</div>	
								</div>
							</div>
						</div>
					</div>
					<div class="step__controls-area lcw">
						<button type="button" name="previous" class="control-button control-button--prev">Назад</button>
						<div class="paginator">
							<button type="button" class="paginator__button paginator__button--enabled">1</button>
							<button type="button" class="paginator__button paginator__button--enabled">2</button>
							<button type="button" class="paginator__button paginator__button--enabled">3</button>
							<button type="button" class="paginator__button paginator__button--active">4</button>
							<button type="button" class="paginator__button">5</button>
						</div>
						<button type="button" name="next" class="control-button  control-button--next">Далее</button>
					</div>
				</fieldset>

				<fieldset class="step step--last info">
					<div class="step__heading">
						<h2 class="step__title lcw"><span>Шаг 5.</span> Контактная информация</h2>
						<!--<h3 class="step__subtitle">This is step 5</h3>-->
					</div>
					<div class="step__container">
						<div class="step__input-area lcw">
							<div class="info__container">
								<div class="info__item info__item--phone">
									<div class="info__inner">
										<label for="tel">Телефон: *</label>
										<input name="tel" id="tel" type="tel">
									</div>
								</div>
								<div class="info__item info__item--mail">
									<div class="info__inner">
										<label for="mail">Электронная почта: *</label>
										<input name="mail" id="mail" type="email">
									</div>
								</div>
								<div class="info__item info__item--name">
									<div class="info__inner">
										<label for="name">Имя: *</label>
										<input name="name" id="name">
									</div>
								</div>
								<div class="info__item info__item--company">
									<div class="info__inner">
										<label for="company-name">Компания</label>
										<input type="text" name="company-name" id="company-name">
									</div>
								</div>
								<div class="info__item info__item--big info__item--message">
									<div class="info__inner">
										<label for="message">Сообщение</label>
										<textarea name="message" id="message" cols="30" rows="10"></textarea>
									</div>
								</div>
								<div class="info__item info__item--big info__item--period">
									<div class="info__inner">
										<label for="period">Желаемый срок исполнения: </label>
										<div class="period">
											<div class="period__wrapper">
												<button type="button" class="period__button period__button--minus"></button>
												<input type="number" name="period" class="period__input" value="30" min="10" max="99">
												<button type="button" class="period__button period__button--plus"></button>
											</div>
										</div>
										<span class="period__week">недель</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="step__controls-area lcw">
						<button type="button" name="previous" class="control-button control-button--prev">Назад</button>
						<div class="paginator">
							<button type="button" class="paginator__button paginator__button--enabled">1</button>
							<button type="button" class="paginator__button paginator__button--enabled">2</button>
							<button type="button" class="paginator__button paginator__button--enabled">3</button>
							<button type="button" class="paginator__button paginator__button--enabled">4</button>
							<button type="button" class="paginator__button paginator__button--active">5</button>
						</div>
						<button type="submit" name="submit" class="control-button control-button--submit">Отправить</button>
					</div>
					<div class="constructor__success">
						Форма отправлена успешно
					</div>
					<div id="results"></div>
				</fieldset>
			</form>
		</div>
	</div>
</main>
<script>
	function sendMail() {			
		var form = $('#form');
		//var disabled = form.find(':input:disabled').removeAttr('disabled');
		var constructorMail = form.serialize();
		//disabled.attr('disabled','disabled');
		$.ajax({
			type: 'POST',
			url: '<?php echo get_template_directory_uri(); ?>/mail.php',
			data: constructorMail,
			success: function(data) {
				$('#results').html(data);
				//alert('Ваше сообщение отправлено');
				var successPanel = $('.constructor__success');
				successPanel.fadeIn().delay(1500).fadeOut();
			},
			error: function(xhr, str){
				alert(xhr.responseCode);
			}
		});
	};
</script>
<?php get_footer(); ?>