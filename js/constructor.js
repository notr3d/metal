//constructor-------------------------------------------------------

var current_fs, next_fs, previous_fs; 
var left, opacity, scale; 
var animating; 

//Анимация переходов 
$(".control-button--next").click(function(){
	current_fs = $(this).parent().parent();
	next_fs = $(this).parent().parent().next();	
	$(".progress__bar li").eq($("fieldset").index(next_fs)).addClass("active");
	next_fs.slideDown(300); 
	current_fs.slideUp(300); 
	$('body').animate({scrollTop: 250}, 300);
});

$(".control-button--prev").click(function(){	
	current_fs = $(this).parent().parent();
	previous_fs = $(this).parent().parent().prev();
	$(".progress__bar li").eq($("fieldset").index(current_fs)).removeClass("active");
	previous_fs.slideDown(300); 
	current_fs.slideUp(300);
	$('body').animate({scrollTop: 250}, 300);
});
 	
//главные параметры
var	width = 18, //ширина, длина и высота
	widthMin = 0,
	widthMax = 0,
	widthStep = 1,
	
	length = 40, 
	lengthMin = 0,
	lengthMax = 0,
	lengthStep = 1,
	
	height = 6,
	heightMin = 0,
	heightMax = 0,
	heightStep = 1,
	
	area = width * length, //подсчет площади и объема
	volume = area * height,
	
	//находим все элементы на странице
	structureTypeInput = $('.structure-type__input'), //выбор типа здания
	currentStructureType = 'structure-type-1', //по умолчанию выбран первый тип
	toDimensionButton = $('#to-dimension-button'), //по нажатию на эту кнопку все будет расчитываться
	//ширина
	widthInput = $('#widthInput'), //число, основное поле
	widthRange = $('#widthRange'), //слайдер
	widthMinusButton = $('#widthMinus'), //кнопки плюс и минус
	widthPlusButton = $('#widthPlus'),
	widthOutput = $('.result__value--width'),
	//длина
	lengthInput = $('#lengthInput'), 
	lengthRange = $('#lengthRange'),
	lengthMinusButton = $('#lengthMinus'),
	lengthPlusButton = $('#lengthPlus'),
	lengthOutput = $('.result__value--length'),
	//высота
	heightInput = $('#heightInput'), 
	heightRange = $('#heightRange'), 
	heightMinusButton = $('#heightMinus'),
	heightPlusButton = $('#heightPlus'),
	heightOutput = $('.result__value--height'),

	areaOutput = $('#areaOutput'), //площадь и объем
	ResultAreaOutput = $('.result__value--area'),	
	
	volumeOutput = $('#volumeOutput'), 
	ResultVolumeOutput = $('.result__value--volume'),		

	calcDimension = function(){ //основная функция подсчета	
		widthInput.val(width);
		lengthInput.val(length);
		heightInput.val(height);

		widthRange.val(width);
		lengthRange.val(length);
		heightRange.val(height);

		widthOutput.text(width);
		lengthOutput.text(length);
		heightOutput.text(height);			

		area = Math.round(width * length);
		areaOutput.text(area + ' м').append('<sup>2</sup>');
		ResultAreaOutput.text(area + ' м').append('<sup>2</sup>');
		
		volume = Math.round(area * height);
		volumeOutput.text(volume + ' м').append('<sup>3</sup>');
		ResultVolumeOutput.text(volume + ' м').append('<sup>3</sup>');
	},
	init = function(){
		switch (currentStructureType) {
		case 'structure-type-1':
			width = 18; 
			length = 39; 
			height = 6;
			widthMin = 6;
			widthMax = 21;
			lengthMin = 9;
			lengthMax = 99;
			heightMin = 3;
			heightMax = 6;
			widthStep = 3;
			lengthStep = 5; //4.5
			heightStep = 0.5; //0.6
			break;
		case 'structure-type-2':
			width = 48; 
			length = 77; 
			height = 9; //9.6
			widthMin = 6;
			widthMax = 18;
			lengthMin = 23;
			lengthMax = 122;
			heightMin = 4.5; //4.8
			heightMax = 12;
			widthStep = 6;
			lengthStep = 9;
			heightStep = 1; //1.2
			break;
		case 'structure-type-3':
			width = 21; 
			length = 39; 
			height = 4; //4.2
			widthMin = 6;
			widthMax = 21;
			lengthMin = 9;
			lengthMax = 99;
			heightMin = 3;
			heightMax = 6;
			widthStep = 3;
			lengthStep = 3;
			heightStep = 0.5; //0.6
			break;
		case 'structure-type-4':
			width = 30; 
			length = 59; 
			height = 7; //7.2
			widthMin = 18;
			widthMax = 60;
			lengthMin = 23;
			lengthMax = 122;
			heightMin = 4.5; //4.8
			heightMax = 12;
			widthStep = 6;
			lengthStep = 9;
			heightStep = 1; //1.2
			break;
		case 'structure-type-5':
			width = 15; 
			length = 40; //40
			height = 6;
			widthMin = 6;
			widthMax = 21;
			lengthMin = 9;
			lengthMax = 99;
			heightMin = 3;
			heightMax = 6;
			widthStep = 3;
			lengthStep = 3;
			heightStep = 0.5; //0.6
			break;
		case 'structure-type-6':
			width = 18; //18.8
			length = 42; 
			height = 3;
			widthMin = 18; //18.8
			widthMax = 24; //24.8
			lengthMin = 18;
			lengthMax = 96;
			heightMin = 3;
			heightMax = 6;
			widthStep = 3;
			lengthStep = 6;
			heightStep = 0.5; //0.6
			break;
		case 'structure-type-7':
			width = 28;  //28.8
			length = 36; 
			height = 3;
			widthMin = 28; //28.8
			widthMax = 35;
			lengthMin = 10; //10.8
			lengthMax = 97; //97.2
			heightMin = 3;
			heightMax = 5; //5
			widthStep = 2.5; //2.6
			lengthStep = 3.5; //3.6
			heightStep = 0.5; //0.6
			break;
		case 'structure-type-8':
			width = 18; 
			length = 40; 
			height = 6;
			widthMin = 6;
			widthMax = 21;
			lengthMin = 9;
			lengthMax = 99;
			heightMin = 3;
			heightMax = 6;
			widthStep = 3;
			lengthStep = 4;
			heightStep =0.5; //0.6
			break;
		case 'structure-type-9':
			width = 24; 
			length = 41; 
			height = 6;
			widthMin = 18;
			widthMax = 60;
			lengthMin = 23;
			lengthMax = 122;
			heightMin = 4.5; //4.8
			heightMax = 12;
			widthStep = 6;
			lengthStep = 9;
			heightStep = 1; //1.2
			break;
		case 'structure-type-10':
			width = 30; 
			length = 32; 
			height = 4.5; //4.8
			widthMin = 18;
			widthMax = 60;
			lengthMin = 23;
			lengthMax = 122;
			heightMin = 4.5; //4.8
			heightMax = 12;
			widthStep = 6;
			lengthStep = 9;
			heightStep = 1; //1.2
			break;
	};
	
	widthInput.attr('min', widthMin);
	widthInput.attr('max', widthMax);
	widthInput.attr('step', widthStep);
	lengthInput.attr('min', lengthMin);
	lengthInput.attr('max', lengthMax);
	lengthInput.attr('step', lengthStep);
	heightInput.attr('min', heightMin);
	heightInput.attr('max', heightMax);	
	heightInput.attr('step', heightStep);	
	
	widthRange.attr('min', widthMin);
	widthRange.attr('max', widthMax);
	widthRange.attr('step', widthStep);
	lengthRange.attr('min', lengthMin);
	lengthRange.attr('max', lengthMax);
	lengthRange.attr('step', lengthStep);
	heightRange.attr('min', heightMin);
	heightRange.attr('max', heightMax);	
	heightRange.attr('step', heightStep);	
	
	$('#widthMin').text(widthMin);
	$('#widthMax').text(widthMax);
	$('#lengthMin').text(lengthMin);
	$('#lengthMax').text(lengthMax);
	$('#heightMin').text(heightMin);
	$('#heightMax').text(heightMax);
	
	calcDimension();
	};


$(document).ready(function(){
	init();
});

//выбираем тип здания
structureTypeInput.click(function(){
	currentStructureType = structureTypeInput.filter(':checked').attr('id');
});

//по типу здания расчитываем все
toDimensionButton.click(function(){
	init();
})
	
//number
widthInput.change(function(){
	if (widthInput.val() < 0) {
		alert('Ширина не может быть меньше нуля. Минимальное значение: ' + widthMin + 'м');			
		width = widthMin;
		calcDimension();
	} else if (widthInput.val() < widthMin) {
		alert('Ширина не может быть меньше минимального значения (' + widthMin + 'м)');			
		width = widthMin;
		calcDimension();
	} else if (widthInput.val() > widthMax) {
		alert('Ширина не может превышать максимальное значение (' + widthMax + 'м)');			
		width = widthMax;
		calcDimension();
	} else {
		width = widthInput.val();
		calcDimension();
	}		
});
lengthInput.change(function(){
	if (lengthInput.val() < 0) {
		alert('Длина не может быть меньше нуля. Минимальное значение: ' + lengthMin + 'м');				
		length = lengthMin;
		calcDimension();
	} else if (lengthInput.val() < lengthMin) {
		alert('Длина не может быть меньше минимального значения (' + lengthMin + 'м)');				
		length = lengthMin;
		calcDimension();
	} else if (lengthInput.val() > lengthMax) {
		alert('Длина не может превышать максимальное значение (' + lengthMax + 'м)');						
		length = lengthMax;
		calcDimension();
	} else {
		length = lengthInput.val();
		calcDimension();
	}		
});
heightInput.change(function(){
	if (heightInput.val() < 0) {
		alert('Высота не может быть меньше нуля. Минимальное значение: ' + heightMin + 'м');				
		height = heightMin;
		calcDimension();
	} else if (heightInput.val() < heightMin) {
		alert('Высота не может быть меньше минимального значения (' + heightMin + 'м)');							
		height = heightMin;
		calcDimension();
	} else if (heightInput.val() > heightMax) {
		alert('Высота не может превышать максимальное значение (' + heightMax + 'м)');									
		height = heightMax;
		calcDimension();
	} else {
		height = heightInput.val();
		calcDimension();
	}		
});	

//слайдеры
widthRange.change(function(){
	width = +widthRange.val();
	calcDimension();
});
lengthRange.change(function(){
	length = +lengthRange.val();
	calcDimension();
});
heightRange.change(function(){
	height = +heightRange.val();
	calcDimension();
});

//кнопки + -		
widthMinusButton.click(function(){
	if (width > widthMin) {
		width -=widthStep;
		calcDimension();
	} 
});
widthPlusButton.click(function(){
	if (width < widthMax) {
		width +=widthStep;
		calcDimension();
	}
});
lengthMinusButton.click(function(){		
	if (length > lengthMin) {
		length -=lengthStep;
		calcDimension();
	}
});
lengthPlusButton.click(function(){
	if (length < lengthMax) {
		length +=lengthStep;
		calcDimension();
	}
});
heightMinusButton.click(function(){;
	if (height > heightMin) {
		height -=heightStep;
		calcDimension();
	}
});
heightPlusButton.click(function(){
	if (height < heightMax) {
		height +=heightStep;
		calcDimension();
	}
});	

//--------------выбор цвета
var colorButton = $('.color__button'), //кнопка выбора цвета
	colorSpan = $('.color__span'), // элемент внутри кнопки для выбранного цвета

	colorContainer = $('.color__container'), // выпадающее меню с цветами
	colorInput = $('.color__input'), // скрытые инпуты для цветов
	colorLabel = $('.color__label'), // квадраты для выбора цвета
	colorText = $('.color__text'),
	
	drainYes = $('#drain-yes'), 
	drainColorButton = $('#drainColorButton'),

	wallColorOutput = $('.result__value--wall-color'),
	roofColorOutput = $('.result__value--roof-color'),
	lippingColorOutput = $('.result__value--lipping-color'),
	drainColorOutput = $('.result__value--drain-color');

colorContainer.slideUp(0); //убираем меню

colorButton.click(function(){ //по нажатию на кнопку появляется блок с цветами
	$(this).next().slideToggle();
});

colorInput.click(function(){ //красим элемент внутри кнопки выбранным цветом
	var color = $(this).attr('id').split('-'),
		colorId = 'color__label--' + color[1] + '-' + color[2],
		colorType = color[0],
		colorName = $(this).next().text();

	$(this)
		.parent()
		.prev()
		.children()
		.first()
		.attr('class', 'color__span ' + colorId);

	$(this)
		.parent()
		.prev()
		.children()
		.last()
		.text($(this).next().text());
	
	$(this).parent().slideUp();
	

	switch (colorType) {
		case 'wall':
			wallColorOutput.text(colorName);
			break;
		case 'roof':
			roofColorOutput.text(colorName);
			break;
		case 'lipping':
			lippingColorOutput.text(colorName);
			break;
		case 'drain':
			drainColorOutput.text(colorName);	
	};
});

//------------results------------------
//тип и подтип здания		
var	structureTypeOutput = $('.result__value--type'),
	structureSubTypeOutput = $('.result__value--subtype');		

structureTypeInput.click(function(){
	var structureType = $(this).next().children('.structure-type__title').text(),
		structureSubType = $(this).next().children('.structure-type__subtitle').text();

	structureTypeOutput.text(structureType);
	structureSubTypeOutput.text(structureSubType);		
});	

//снеговой район и обшивка
var snowAreaInput = $('.snow-area-input'),
	wallShealthingInput = $('#wall-shealthing'),
	roofShealthingInput = $('#roof-shealthing'),

	snowAreaOutput = $('.result__value--snow-area'),
	wallShealthingOutput = $('.result__value--wall-shealthing'),
	roofShealthingOutput = $('.result__value--roof-shealthing');

snowAreaInput.click(function(){
	var snowAreaValue = $(this).next().text();
	snowAreaOutput.text(snowAreaValue);
});
wallShealthingInput.click(function(){
	var wallShealthingValue = wallShealthingInput.val();
	wallShealthingOutput.text(wallShealthingValue);
});
roofShealthingInput.click(function(){
	var roofShealthingValue = roofShealthingInput.val();
	roofShealthingOutput.text(roofShealthingValue);
});	

//------------отключение/включение айтемов
var	appearanceInput = $('.appearance__input');
appearanceInput.click(function(){
	var appearanceItem = $(this).parent().parent(),
		inputs = appearanceItem.find('*');
	if (appearanceItem.hasClass('appearance__item--disabled')) {
		appearanceItem.removeClass('appearance__item--disabled');
		inputs.prop('disabled', false);
	} else {
		appearanceItem.addClass('appearance__item--disabled');
		inputs.val('');
		inputs.prop('checked', false);
		inputs.prop('disabled', true);
		
		appearanceInput.prop('disabled', false);
	}
})

//-------------дополнительные параметры-------------
var additionalInput = $('#additional-input'),
	additionalContainer = $('#additional-container');

additionalInput.click(function(){
	if ($(this).prop('checked') == true) {
		additionalContainer.slideDown();
				
		var newWallShealthingOptions = {
			'Стеновые сэндвич-панели': 'Стеновые сэндвич-панели',
			'Профнастил': 'Профнастил',
			'Профнастил + утеплитель + профнастил': 'Профнастил + утеплитель + профнастил'
		},
			newRoofShealthingOptions  = {
			'Кровельные сэндвич-панели': 'Кровельные сэндвич-панели',
			'Профнастил': 'Профнастил',
			'Профнастил + утеплитель + профнастил': 'Профнастил + утеплитель + профнастил'
		};		
		
		wallShealthingInput.empty();
		$.each(newWallShealthingOptions, function(value,key) {
			wallShealthingInput.append($("<option></option>")
			.attr("value", value).text(key));
		});
		roofShealthingInput.empty(); 
		$.each(newRoofShealthingOptions, function(value,key) {
			roofShealthingInput.append($("<option></option>")
			.attr("value", value).text(key));
		});	
	} else {
		var oldWallShealthingOptions = {
			'Стеновые сэндвич-панели 200м': 'Стеновые сэндвич-панели 200м',
			'Стеновые сэндвич-панели 180мм': 'Стеновые сэндвич-панели 180мм',
			'Стеновые сэндвич-панели 150мм': 'Стеновые сэндвич-панели 150мм',
			'Стеновые сэндвич-панели 120мм': 'Стеновые сэндвич-панели 120мм',
			'Стеновые сэндвич-панели 100мм': 'Стеновые сэндвич-панели 100мм',
			'Стеновые сэндвич-панели 80мм': 'Стеновые сэндвич-панели 80мм',
			'Профнастил 18': 'Профнастил 18',
			'Профнастил 18 + утеплитель 100мм + профнастил 18': 'Профнастил 18 + утеплитель 100мм + профнастил 18',
			'Профнастил 18 + утеплитель 150мм + профнастил 18': 'Профнастил 18 + утеплитель 150мм + профнастил 18',
			
		},
			oldRoofShealthingOptions  = {
			'Кровельные сэндвич-панели 200мм': 'Кровельные сэндвич-панели 200мм',
			'Кровельные сэндвич-панели 180мм': 'Кровельные сэндвич-панели 180мм',
			'Кровельные сэндвич-панели 150мм': 'Кровельные сэндвич-панели 150мм',
			'Кровельные сэндвич-панели 120мм': 'Кровельные сэндвич-панели 120мм',
			'Кровельные сэндвич-панели 100мм': 'Кровельные сэндвич-панели 100мм',
			'Кровельные сэндвич-панели 80мм': 'Кровельные сэндвич-панели 80мм',
			'Профнастил 45': 'Профнастил 45',
			'Профнастил 45 + утеплитель 100мм + профнастил 18': 'Профнастил 45 + утеплитель 100мм + профнастил 18',
			'Профнастил 45 + утеплитель 150мм + профнастил 18': 'Профнастил 45 + утеплитель 150мм + профнастил 18'
		};
		
		additionalContainer.slideUp();
		
		wallShealthingInput.empty();
		$.each(oldWallShealthingOptions, function(value,key) {
			wallShealthingInput.append($("<option></option>")
			.attr("value", value).text(key));
		});
		roofShealthingInput.empty(); 
		$.each(oldRoofShealthingOptions, function(value,key) {
			roofShealthingInput.append($("<option></option>")
			.attr("value", value).text(key));
		});	 
	}
});

//------дополнительные-настройки------

var cityInput = $('#city'),	
	tInInput = $('#t-in'),
	tOutInput = $('#t-out'),
	
	RtrWallOutput = $('#Rtr-wall'),
	RprWallOutput = $('#Rpr-wall'),
	thicknessWallOutput  = $('#thickness-wall'),
	
	RtrRoofOutput = $('#Rtr-roof'),
	RprRoofOutput = $('#Rpr-roof'),
	thicknessRoofOutput  = $('#thickness-roof'),
	
	//GSOPOutput = $('#GSOP'),
	
	tIn = 18,
	tOut = 0,
	warm = 0,
	time = 0,
	
	n = 1,
	delTOut = 5,
	alfaIn = 8.7,
	alfaOut = 23,
	lambda = 0.05,
	
	RArray = [[2000, 1.4, 2], [4000, 1.8, 2.5], [6000, 2.2, 3], [8000, 2.6, 3.5], [10000, 3.0, 4], [12000, 3.4, 4.5]];

var GSOPMin = RArray[0][0];
	GSOPMax = RArray[0][0];
	RstMinWall  = RArray[0][1];
	RstMaxWall  = RArray[0][1];
	RstMinRoof  = RArray[0][2];
	RstMaxRoof  = RArray[0][2];
	
var calcThickness = function(){
	var	RtrWall = (n * (tIn - tOut)) / (delTOut * alfaIn),
		RtrRoof = (n * (tIn - tOut)) / (delTOut * alfaIn),		
		GSOP = (tIn - warm) * time;

	RtrWallOutput.val(RtrWall.toFixed(2));
	RtrRoofOutput.val(RtrRoof.toFixed(2));
	//GSOPOutput.val(GSOP.toFixed(2));	
	
	for (var i = 0; i < RArray.length; i++) {
		if (GSOP > RArray[i][0]) {
			GSOPMin = RArray[i][0];
			GSOPMax = RArray[i + 1][0];
			RstMinWall  = RArray[i][1];
			RstMaxWall  = RArray[i + 1][1];
			RstMinRoof  = RArray[i][2];
			RstMaxRoof  = RArray[i + 1][2];			
		}
	};
	
 	var RprWall = RstMinWall + (GSOP - GSOPMin) / (GSOPMax - GSOPMin) * (RstMaxWall - RstMinWall),
		RprRoof = RstMinRoof + (GSOP - GSOPMin) / (GSOPMax - GSOPMin) * (RstMaxRoof - RstMinRoof);
	
	RprWallOutput.val(RprWall.toFixed(2));
	RprRoofOutput.val(RprRoof.toFixed(2));
	
	var thicknessWall = lambda * (RprWall - (1 / alfaIn) - (1 / alfaOut)),
		thicknessRoof = lambda * (RprRoof - (1 / alfaIn) - (1 / alfaOut));
	
	thicknessWall = thicknessWall * 1000;
	thicknessRoof = thicknessRoof * 1000;
	
	var thicknessWallRecInput = $('#thickness-wall-rec'),
		thicknessRoofRecInput = $('#thickness-roof-rec'),
		thicknessWallRec = 50,
		thicknessRoofRec = 50,
		thicknessWallRecArray = [50, 80, 100, 120, 150, 170, 200, 250],
		thicknessRoofRecArray = [50, 80, 100, 120, 150, 170, 200];
	
	
	for (var i = 0; i < thicknessWallRecArray.length; i++) {
		if (thicknessWall > thicknessWallRecArray[i]) {
			thicknessWallRec = thicknessWallRecArray[i + 1];
		};		
	};	
	for (var i = 0; i < thicknessRoofRecArray.length; i++) {
		if (thicknessRoof > thicknessRoofRecArray[i]) {
			thicknessRoofRec = thicknessRoofRecArray[i + 1];
		};			
	};
	
	
	
	thicknessWall = thicknessWall.toFixed(0) + ' мм';
	thicknessRoof = thicknessRoof.toFixed(0) + ' мм';	
	thicknessWallOutput.val(thicknessWall);
	thicknessRoofOutput.val(thicknessRoof);
	
	thicknessWallRec = thicknessWallRec.toFixed(0) + ' мм';
	thicknessRoofRec = thicknessRoofRec.toFixed(0) + ' мм';	
	thicknessWallRecInput.val(thicknessWallRec);
	thicknessRoofRecInput.val(thicknessRoofRec);
};

cityInput.autocomplete({
	source: cities,	
	close: function(){
		var cityFound = false;
		var cityValue = cityInput.val();
		for (var i = 0; i < citiesArray.length; i++) {
			if (cityValue == citiesArray[i].city) {
				tOut = citiesArray[i].tOut;
				warm = citiesArray[i].warm;
				time = citiesArray[i].time;
				
				tInInput.val(tIn); 
				tInInput.attr('disabled', false); 
				tOutInput.val(tOut);
				calcThickness();
				$('.result__value--city').text(cityValue);				
				cityFound = true;
			} 		   
		};
	},
	change: function(){
		var cityFound = false;
		var cityValue = cityInput.val();
		for (var i = 0; i < citiesArray.length; i++) {
			if (cityValue == citiesArray[i].city) {
				tOut = citiesArray[i].tOut;
				warm = citiesArray[i].warm;
				time = citiesArray[i].time;
				
				tInInput.val(tIn); 
				tInInput.attr('disabled', false); 
				tOutInput.val(tOut);
				calcThickness();
				$('.result__value--city').text(cityValue);				
				cityFound = true;
			} 		   
		};	
		if (!cityFound) {
			//alert('Город не найден');
			var cityParam = $('.additional__city-param');
			cityParam.slideDown();
			var tOutInput = $('#tOut');
			var warmInput = $('#warm');
			var timeInput = $('#time');
			tOutInput.change(function(){
				tOut = tOutInput.val();
				calcThickness();
			});
			warmInput.change(function(){
				warm = warmInput.val();
				calcThickness();
			});
			timeInput.change(function(){
				time = timeInput.val();
				calcThickness();
			});			
		}
	}
});

tInInput.change(function(){
	tIn = tInInput.val();
	calcThickness();
});

tOutInput.change(function(){
	tOut = tOutInput.val();
	calcThickness();
});

//добавление блоков для окон
var windowTypeQuantityMinus = $('#window-type-minus'),
	windowTypeQuantityPlus = $('#window-type-plus'),
	windowTypeQuantityInput = $('#window-type-quantity'),
	windowTypeNumber = +windowTypeQuantityInput.val();

var typeChange = function(e){
	windowBlock = '<div class="appearance__block"><div class="appearance__dimension"><div class="appearance__count"><h4>Ширина: </h4><button type="button" class="window-button--minus">-</button><input type="number" name="window-width-'+e+'" class="window-input" min="0" max="10"><button type="button" class="window-button--plus">+</button></div><div class="appearance__count"><h4>Высота: </h4><button type="button" class="window-button--minus">-</button><input type="number" name="window-height-'+e+'" class="window-input" min="0" max="10"><button type="button" class="window-button--plus">+</button></div></div><div class="appearance__count"><h4>Количество: </h4><button type="button" class="window-button--minus">-</button><input type="number" class="window-input" name="window-quantity-'+e+'" min="0" max="10"><button type="button" class="window-button--plus">+</button></div><div class="appearance__reinforce"><input type="checkbox" id="reinforce-window-'+e+'" name="reinforce-window-'+e+'"><label for="reinforce-window-'+e+'">Усилить конструкцию под проем</label></div><button class="appearance__delete">x</button></div>';
};

windowTypeQuantityMinus.click(function(){	
	if (windowTypeNumber > 1) {
		windowTypeNumber--;		$(this).parent().parent().parent().children().last().remove();
	}
});
windowTypeQuantityPlus.click(function(){
	if (windowTypeNumber < 10) {
		windowTypeQuantityInput.val(windowTypeNumber);
		windowTypeNumber++;
		$(this).parent().parent().parent().children('.appearance__block').remove();
		for (var i = 0; i < windowTypeNumber; i++) {
			typeChange(i+1);
			$(this).parent().parent().parent().append(windowBlock);	
		};
		windowButtonInit();
	}
});
windowTypeQuantityInput.change(function(){					  	
	$(this).parent().parent().parent().children('.appearance__block').remove();
	if (windowTypeQuantityInput.val() > 0 && windowTypeQuantityInput.val() < 11) {		
		windowTypeNumber = $(this).val();
		for (var i = 0; i < windowTypeNumber; i++) {
			typeChange(i+1);
			$(this).parent().parent().parent().append(windowBlock);	
		};
		windowButtonInit();
	} else {
		alert('Значение должно быть между 0 и 10');
		windowTypeQuantityInput.val(1);
		windowTypeNumber = 1;
		typeChange();
		$(this).parent().parent().parent().append(windowBlock);
		windowButtonInit();
	}
});

//-------plus/minus--------

var buttonMinus = $('.count-button--minus'),
	buttonPlus = $('.count-button--plus'),
	numberInput = $('.count-input');
buttonMinus.click(function(){
	var input = $(this).next();
	var value = +input.val();
	var min = +input.attr('min');
	if (value > min) {
		input.val(value - 1);
	}
});
buttonPlus.click(function(){
	var input = $(this).prev();
	var value = +input.val();
	var max = +input.attr('max');
	if (value < max) {
		input.val(value + 1);
	}
});

numberInput.change(function(){
	var min = +$(this).attr('min');
	var max = +$(this).attr('max');
	var val = $(this).val();
	if (val < min) {
		$(this).val(min);
	} else if (val > max) {
		$(this).val(max);
	};
})

var windowButtonInit = function(){
	var windowButtonMinus = $('.window-button--minus'),
		windowButtonPlus = $('.window-button--plus'),
		windowCountInput = $('.window-input');
	windowButtonMinus.click(function(){
		var input = $(this).next();
		var value = +input.val();
		var min = +input.attr('min');
		if (value > min) {
			input.val(value - 1);
		}
	});
	windowButtonPlus.click(function(){
		var input = $(this).prev();
		var value = +input.val();
		var max = +input.attr('max');
		if (value < max) {
			input.val(value + 1);
		}
	});
	windowCountInput.change(function(){
		var min = +$(this).attr('min');
		var max = +$(this).attr('max');
		var val = $(this).val();
		if (val < min) {
			$(this).val(min);
		} else if (val > max) {
			$(this).val(max);
		};
	});
	var deleteButton = $('.appearance__delete');
	deleteButton.click(function(){
		var appearanceBlock = $(this).parent();
		appearanceBlock.remove();
		windowTypeNumber--;
		windowTypeQuantityInput.val(windowTypeNumber);
	})
};

windowButtonInit();

