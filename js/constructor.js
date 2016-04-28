//constructor-------------------------------------------------------

var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".control-button--next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent().parent();
	next_fs = $(this).parent().parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$(".progress__bar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.slideDown(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 600, 
		complete: function(){
			current_fs.slideUp();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".control-button--prev").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent().parent();
	previous_fs = $(this).parent().parent().prev();
	
	//de-activate current step on progressbar
	$(".progress__bar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.slideDown(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 600, 
		complete: function(){
			current_fs.slideUp();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
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

	calc = function(){ //основная функция подсчета	
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
	
	calc();
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
		calc();
	} else if (widthInput.val() < widthMin) {
		alert('Ширина не может быть меньше минимального значения (' + widthMin + 'м)');			
		width = widthMin;
		calc();
	} else if (widthInput.val() > widthMax) {
		alert('Ширина не может превышать максимальное значение (' + widthMax + 'м)');			
		width = widthMax;
		calc();
	} else {
		width = widthInput.val();
		calc();
	}		
});
lengthInput.change(function(){
	if (lengthInput.val() < 0) {
		alert('Длина не может быть меньше нуля. Минимальное значение: ' + lengthMin + 'м');				
		length = lengthMin;
		calc();
	} else if (lengthInput.val() < lengthMin) {
		alert('Длина не может быть меньше минимального значения (' + lengthMin + 'м)');				
		length = lengthMin;
		calc();
	} else if (lengthInput.val() > lengthMax) {
		alert('Длина не может превышать максимальное значение (' + lengthMax + 'м)');						
		length = lengthMax;
		calc();
	} else {
		length = lengthInput.val();
		calc();
	}		
});
heightInput.change(function(){
	if (heightInput.val() < 0) {
		alert('Высота не может быть меньше нуля. Минимальное значение: ' + heightMin + 'м');				
		height = heightMin;
		calc();
	} else if (heightInput.val() < heightMin) {
		alert('Высота не может быть меньше минимального значения (' + heightMin + 'м)');							
		height = heightMin;
		calc();
	} else if (heightInput.val() > heightMax) {
		alert('Высота не может превышать максимальное значение (' + heightMax + 'м)');									
		height = heightMax;
		calc();
	} else {
		height = heightInput.val();
		calc();
	}		
});	

//слайдеры
widthRange.change(function(){
	width = +widthRange.val();
	calc();
});
lengthRange.change(function(){
	length = +lengthRange.val();
	calc();
});
heightRange.change(function(){
	height = +heightRange.val();
	calc();
});

//кнопки + -		
widthMinusButton.click(function(){
	if (width > widthMin) {
		width -=widthStep;
		calc();
	} 
});
widthPlusButton.click(function(){
	if (width < widthMax) {
		width +=widthStep;
		calc();
	}
});
lengthMinusButton.click(function(){		
	if (length > lengthMin) {
		length -=lengthStep;
		calc();
	}
});
lengthPlusButton.click(function(){
	if (length < lengthMax) {
		length +=lengthStep;
		calc();
	}
});
heightMinusButton.click(function(){;
	if (height > heightMin) {
		height -=heightStep;
		calc();
	}
});
heightPlusButton.click(function(){
	if (height < heightMax) {
		height +=heightStep;
		calc();
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
		inputs.prop('disabled', true);
		appearanceInput.prop('disabled', false);
	}
})

//-------plus/minus--------
var buttonMinus = $('.count-button--minus'),
	buttonPlus = $('.count-button--plus');

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

//-------------дополнительные параметры-------------
var additionalInput = $('#additional-input'),
	additionalContainer = $('#additional-container'),
	additionalInputs = additionalContainer.find('*');

additionalInput.click(function(){
	if ($(this).prop('checked') == true) {
		additionalContainer.slideDown();
		additionalInputs.prop('disabled', false);
		
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
		additionalContainer.slideUp();
		additionalInputs.prop('disabled', true);
	}
});

//------autocomplete------

var	cities = [
		'Актюбинск',
		'Баку',
		'Вильнюс',
		'Омск'
    ],	
	
 	cityInput = $('#city'),	
	tInInput = $('#t-in'),
	RtrOutput = $('#Rtr'),
	GSOPOuput = $('#GSOP'),
	RprOutput = $('#Rpr'),
	thicknessoutput  = $('#thickness'),
	
	tIn = tInInput.val(),
	tOut = 0,
	warm = 0,
	time = 0,
	
	n = 1,
	delTOut = 5,
	alfaIn = 8.7,
	alfaOut = 23,
	lambda = 0.05,
	
	RArray = [[2000, 1.4], [4000, 1.8], [6000, 2.2], [8000, 2.6], [10000, 3.0], [12000, 3.4]];

var GSOPMin = RArray[0][0];
	RstMin  = RArray[0][1];
	GSOPMax = RArray[0][0];
	RstMax  = RArray[0][1];
	
var calc2 = function(){
	var cityValue = cityInput.val();			
	switch (cityValue) {
		case 'Актюбинск':
			tOut = -31;
			warm = -7.3;
			time = 203;
			break;
		case 'Баку': 
			tOut = -4;
			warm = 5.1;
			time = 119;
			break;
		case 'Вильнюс': 
			tOut = -23;
			warm = -0.9;
			time = 194;
			break;	
		case 'Омск': 
			tOut = -37;
			warm = -9.5;
			time = 220;
			break;	
		
	};			

	var	Rtr = (n * (tIn - tOut)) / (delTOut * alfaIn),	
		GSOP = (tIn - warm) * time;

	RtrOutput.val(Rtr.toFixed(2));
	GSOPOuput.val(GSOP.toFixed(2));	
	
	for (var i = 0; i < RArray.length; i++) {
		if (GSOP > RArray[i][0]) {
			GSOPMin = RArray[i][0];
			RstMin  = RArray[i][1];
			GSOPMax = RArray[i + 1][0];
			RstMax  = RArray[i + 1][1];
		}
	};
	
 	var Rpr = RstMin + (GSOP - GSOPMin) / (GSOPMax - GSOPMin) * (RstMax - RstMin);
	
	RprOutput.val(Rpr.toFixed(2));
	
	var thickness = lambda * (Rpr - (1 / alfaIn) - (1 / alfaOut));
	thicknessoutput.val(thickness.toFixed(2));
	alert(GSOPMin + ', ' +RstMin + '; ' +GSOPMax + ', ' +RstMax);
};

cityInput.autocomplete({
	source: cities,
	close: calc2
});

tInInput.change(function(){
	tIn = tInInput.val();
	calc2();
})
