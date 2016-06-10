//constructor-------------------------------------------------------

//Анимация переходов 
var currentFS, nextFS, previousFS; 

$('.control-button--next').click(function(){
	currentFS = $(this).parent().parent();
	nextFS = $(this).parent().parent().next();	
	$('.prog__bar li').eq($('fieldset').index(nextFS)).addClass('active');
	nextFS.slideDown(300); 
	currentFS.slideUp(300); 
	$('html, body').animate({scrollTop: 0}, 300);	
});

$('.control-button--prev').click(function(){	
	currentFS = $(this).parent().parent();
	previousFS = $(this).parent().parent().prev();
	$('.prog__bar li').eq($('fieldset').index(currentFS)).removeClass('active');
	previousFS.slideDown(300); 
	currentFS.slideUp(300);
	$('body').animate({scrollTop: 0}, 300);
});

//paginator----------------------------------------------------------
var paginator = $('.paginator');
var pagBtn = paginator.children();

pagBtn.attr('disabled', true);
pagBtn.each(function(){
	if ($(this).hasClass('paginator__button--enabled')) {
		$(this).attr('disabled', false);
	}
});

pagBtn.click(function(){
	var currentFS = $(this).parent().parent().parent();
	currentFS.slideUp(300);
	var currentIndex = $(this).index() + 1;
	var neededFS = currentFS.siblings(':nth-child(' + currentIndex + ')');
	neededFS.slideDown();
})

//главные параметры---------------------------------------------------
var	width = 18, //ширина, длина и высота
	widthMin = 0,
	widthMax = 100,
	widthStep = 1,
	
	length = 40, 
	lengthMin = 0,
	lengthMax = 100,
	lengthStep = 1,
	
	height = 6,
	heightMin = 0,
	heightMax = 100,
	heightStep = 1,
	
	//находим все элементы на странице
	structureTypeInput = $('.structure-type__input'), //выбор типа здания
	currentStructureType = 'structure-type-1', //по умолчанию выбран первый тип
	//ширина
	widthInput = $('#widthInput'), //число, основное поле
	widthRange = $('#widthRange'), //слайдер
	widthMinusButton = $('#widthMinus'), //кнопки плюс и минус
	widthPlusButton = $('#widthPlus'),
	widthOutput = $('#r-width'),
	//длина
	lengthInput = $('#lengthInput'), 
	lengthRange = $('#lengthRange'),
	lengthMinusButton = $('#lengthMinus'),
	lengthPlusButton = $('#lengthPlus'),
	lengthOutput = $('#r-length'),
	//высота
	heightInput = $('#heightInput'), 
	heightRange = $('#heightRange'), 
	heightMinusButton = $('#heightMinus'),
	heightPlusButton = $('#heightPlus'),
	heightOutput = $('#r-height'),

	areaOutput = $('#areaOutput'), //площадь и объем
	roofAreaOutput = $('#roofAreaOutput'),
	ResultAreaOutput = $('#r-area'),	
	
	volumeOutput = $('#volumeOutput'), 
	ResultVolumeOutput = $('#r-volume'),
	
	ResultRoofAreaOutput = $('#r-area-roof');
	
	roofAngle = 20, //угол крыши (пока константа, плюс крыша ровная)
	
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
		
		area = width * length;
		
		wallArea = (2 * (width * height) + 2 * (length * height)).toFixed(2);
		areaOutput.text(wallArea + ' м').append('<sup>2</sup>');
		ResultAreaOutput.text(wallArea + ' м').append('<sup>2</sup>');
		
		botRoofAngle = Math.sin(roofAngle * (Math.PI / 180)); //переводим угол (20) в градусы
		topRoofAngle = Math.sin((180 - roofAngle * 2) * (Math.PI / 180)); //верхний угол крыши
		roofWidth = width / topRoofAngle * botRoofAngle; //находим ширину крыши
		roofArea = (roofWidth * length * 2).toFixed(2);
		roofAreaOutput.text(roofArea + ' м').append('<sup>2</sup>');
		
		roofHeight = roofWidth * botRoofAngle;
		roofVolume = width * roofHeight / 2;
		volume = (area * height + roofVolume).toFixed(2);
		volumeOutput.text(volume + ' м').append('<sup>3</sup>');
		ResultVolumeOutput.text(volume + ' м').append('<sup>3</sup>');
		
		ResultRoofAreaOutput.text(roofArea + ' м').append('<sup>3</sup>');
	},
	StructureTypeInit = function(){
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
	StructureTypeInit();
});

//выбираем тип здания
structureTypeInput.click(function(){
	currentStructureType = structureTypeInput.filter(':checked').attr('id');
	StructureTypeInit();	
});

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

	wallColorOutput = $('#r-wall-color'),
	roofColorOutput = $('#r-roof-color'),
	lippingColorOutput = $('#r-lipping-color'),
	drainColorOutput = $('#r-drain-color');

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
var	structureTypeOutput = $('#r-structure-type'),
	structureSubTypeOutput = $('.result__value--subtype');		

structureTypeInput.click(function(){
	var structureType = $(this)
			.next()
			.children('.structure-type__title')
			.text(),
		structureSubType = $(this)
			.next()
			.children('.structure-type__subtitle')
			.text();

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
	var appearanceItem = $(this).parent().parent().parent(),
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
var wallShealthingInput = $('#wall-shealthing');
var roofShealthingInput = $('#roof-shealthing');

wallFillerTypeInput = $('#wall-filler-type');
roofFillerTypeInput = $('#roof-filler-type');

var additionalHeader = $('.additional__header');
var additionalInput = $('#additional-input');
var additionalBlock = $('#additional-block');

wallShealthingInput.change(function(){	
	var disabledItems = $(this).parent().parent().parent().siblings('.sheathing__item--disabled');
	if ($(this).val() == 'Сэндвич-панели') {		
		if (roofShealthingInput.val() != 'Профнастил' && roofShealthingInput.val() != null) {
			additionalInput.attr('disabled', false);
			additionalHeader.removeClass('additional__header--disabled');
		};
		disabledItems.slideDown();
		wallFillerTypeInput.attr('disabled', false);		
	} else if ($(this).val() == 'Профнастил') {
		disabledItems.slideUp();
		additionalBlock.slideUp();
		additionalInput.attr('checked', false);
		additionalInput.attr('disabled', true);
		additionalHeader.addClass('additional__header--disabled');
	} else if ($(this).val() == 'Профнастил + утеплитель + профнастил') {
		if (roofShealthingInput.val() != 'Профнастил') {
			additionalInput.attr('disabled', false);
			additionalHeader.removeClass('additional__header--disabled');
		};
		disabledItems.slideDown();
		wallFillerTypeInput.attr('disabled', true);
		wallFillerTypeInput.val('Минеральная вата');
	};
	var wallTypeOutput = $('#r-wall-type');
	wallTypeOutput.text($(this).val());
});

roofShealthingInput.change(function(){	
	var disabledItems = $(this).parent().parent().parent().siblings('.sheathing__item--disabled');
	if ($(this).val() == 'Сэндвич-панели') {
		if (wallShealthingInput.val() != 'Профнастил' && wallShealthingInput.val() != null) {
			additionalInput.attr('disabled', false);
			additionalHeader.removeClass('additional__header--disabled');	
		};
		disabledItems.slideDown();
		roofFillerTypeInput.attr('disabled', false);
	} else if ($(this).val() == 'Профнастил') {
		disabledItems.slideUp();
		additionalBlock.slideUp();
		additionalInput.attr('checked', false);
		additionalInput.attr('disabled', true);
		additionalHeader.addClass('additional__header--disabled');
	} else if ($(this).val() == 'Профнастил + утеплитель + профнастил') {
		if (roofShealthingInput.val() != 'Профнастил') {
			additionalInput.attr('disabled', false);
			additionalHeader.removeClass('additional__header--disabled');
		};
		disabledItems.slideDown();
		roofFillerTypeInput.attr('disabled', true);
		roofFillerTypeInput.val('Минеральная вата');
	};
	var roofTypeOutput = $('#r-roof-type');
	roofTypeOutput.text($(this).val());
});

additionalInput.click(function(){
	if ($(this).prop('checked') == true) {
		additionalBlock.slideDown();		
	} else if ($(this).prop('checked') == false) {	
		additionalBlock.slideUp();
	};	
});
additionalInput.next().click(function(){
	var popup = $('#additional-help');
	popup.fadeIn().delay(3000).fadeOut();	
});
var popupClose = $('.popup__close');
popupClose.click(function(){
	var popup = $(this).parent();
	popup.hide();
});

//------дополнительные-настройки------

var cityInput = $('#city'),	
	tInInput = $('#t-in'),
	
	tOutInput = $('#t-out'),
	warmInput = $('#warm'),
	timeInput = $('#time'),
	
	GSOPInput = $('#GSOP'),
	
	RtrWallInput = $('#Rtr-wall'),
	RprWallOutput = $('#Rpr-wall'),
	thicknessWallOutput  = $('#thickness-wall'),
	
	RtrRoofOutput = $('#Rtr-roof'),
	RprRoofOutput = $('#Rpr-roof'),
	thicknessRoofOutput  = $('#thickness-roof'),	
	
	tIn = 18,
	tOut = 0,
	warm = 0,
	time = 0,
	
	n = 1,
	delTOut = 5,
	alfaIn = 8.7,
	alfaOut = 23,
	lambda = 0.042,
	
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

	RtrWallInput.val(RtrWall.toFixed(2));
	RtrRoofOutput.val(RtrRoof.toFixed(2));
	GSOPInput.val(GSOP.toFixed(2));	
	
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


var hiddenBlock = $('.additional__hidden');
cityInput.autocomplete({
	source: cities,	
	//minLength: 3,
	close: function(){
		var cityFound = false;
		var cityValue = cityInput.val();
		for (var i = 0; i < citiesArray.length; i++) {
			if (cityValue == citiesArray[i].city) {
				tOut = citiesArray[i].tOut;
				warm = citiesArray[i].warm;
				time = citiesArray[i].time;
				hiddenBlock.slideUp();
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
				hiddenBlock.slideUp();
				tInInput.val(tIn); 
				tInInput.attr('disabled', false); 
				tOutInput.val(tOut);
				calcThickness();
				$('.result__value--city').text(cityValue);				
				cityFound = true;
			} 		   
		};	
		if (!cityFound) {			
			hiddenBlock.slideDown();
			tInInput.attr('disabled', false); 
			tOutInput.attr('disabled', false);	
			warmInput.attr('disabled', false);	
			timeInput.attr('disabled', false);			
			tOutInput.change(function(){
				tOut = $(this).val();
				calcThickness();
			});
			GSOPInput.change(function(){
				warm = $(this).val();
				calcThickness();
			});
			RtrWallInput.change(function(){
				time = $(this).val();
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
warmInput.change(function(){
	warm = warmInput.val();
	calcThickness();
});
timeInput.change(function(){
	time = timeInput.val();
	calcThickness();
});

//добавление блоков для окон
var windowTypeQuantityMinus = $('#window-type-minus'),
	windowTypeQuantityPlus = $('#window-type-plus'),
	windowTypeQuantityInput = $('#window-type-quantity'),
	windowTypeNumber = +windowTypeQuantityInput.val();

var typeChange = function(e){
	windowBlock = '<div class="appearance__block"><div class="appearance__dimension"><div class="appearance__count"><h4>Ширина: </h4><button type="button" class="window-button--minus">-</button><input type="number" name="window-width-' + e + '" class="window-input" min="0" max="10"><button type="button" class="window-button--plus">+</button></div><div class="appearance__count"><h4>Высота: </h4><button type="button" class="window-button--minus">-</button><input type="number" name="window-height-' + e + '" class="window-input" min="0" max="10"><button type="button" class="window-button--plus">+</button></div></div><div class="appearance__count"><h4>Количество: </h4><button type="button" class="window-button--minus">-</button><input type="number" class="window-input" name="window-quantity-' + e + '" min="0" max="10"><button type="button" class="window-button--plus">+</button></div><div class="appearance__reinforce"><input type="checkbox" id="reinforce-window-' + e + '" name="reinforce-window-' + e + '"><label for="reinforce-window-' + e + '">Усилить конструкцию под проем</label></div><button type="button" class="appearance__delete">x</button></div>';
};

var windowButtonInit = function(){
	var windowBlock = $('.appearance__block').last();
	var windowButtonMinus = windowBlock.find('.window-button--minus'),
		windowButtonPlus = windowBlock.find('.window-button--plus'),
		windowCountInput = windowBlock.find('.window-input');	
	var deleteButton = windowBlock.find('.appearance__delete');
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
	deleteButton.click(function(){
		var windowCon = $('.window__container');
		var itemNumber = windowCon.children().length;
		if (itemNumber > 1) {
			var appearanceBlock = $(this).parent();
			appearanceBlock.remove();
			windowTypeNumber--;
			windowTypeQuantityInput.val(windowTypeNumber);
		}		
	})
};

windowButtonInit();

windowTypeQuantityMinus.click(function(){	
	if (windowTypeNumber > 1) {
		windowTypeNumber--;		$(this).parent().parent().next().children().last().remove();
	}
});
windowTypeQuantityPlus.click(function(){	
	if (windowTypeNumber < 10) {
		windowTypeQuantityInput.val(windowTypeNumber);
		windowTypeNumber++;
		typeChange(windowTypeNumber+1);
		$(this).parent().parent().next().append(windowBlock);
		windowButtonInit();	
	}
});
windowTypeQuantityInput.change(function(){		
	var windowCon = $('.window__container');
	var itemNumber = windowCon.children().length;
	var val = +$(this).val();
	if (val > 0 && val < 11) {
		windowTypeNumber = val;
		if (val > itemNumber) {
			var dif = val - itemNumber;
			for (var i = 0; i < dif; i++) {
				typeChange(windowTypeNumber+i);
				$(this).parent().parent().next().append(windowBlock);
				windowButtonInit();
			}
		} else {
			var dif = itemNumber - val;
			for (var i = 0; i < dif; i++) {
				$(this).parent().parent().next().children().last().remove();
			}
		}
	} else {
		alert('Значение должно быть между 0 и 10');
		windowTypeQuantityInput.val(1);
		windowTypeNumber = 1;		$(this).parent().parent().next().children().remove();
		typeChange(windowTypeNumber);
		$(this).parent().parent().next().append(windowBlock);
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
	};
	input.change();
});
buttonPlus.click(function(){
	var input = $(this).prev();
	var value = +input.val();
	var max = +input.attr('max');
	if (value < max) {
		input.val(value + 1);
	};
	input.change();
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
});

//lambda change
var wallFillerTypeInput = $('#wall-filler-type');
wallFillerTypeInput.change(function(){
	var wallDensity = $('#wall-density');
	var wallConductivity = $('#wall-conductivity');
	var wallAbsorbtion = $('#wall-absorbtion');
	if ($(this).val() === 'Минеральная вата') {
		lambda = 0.042;
		wallDensity.text('100 - 120');
		wallConductivity.text('0.042');
		wallAbsorbtion.text('не более 1.5%');
	} else if ($(this).val() === 'Пенополистирол (PPS)') {
		lambda = 0.039;
		wallDensity.text('15.1 - 25');
		wallConductivity.text('0.039');
		wallAbsorbtion.text('не более 2%');
	} else if ($(this).val() === 'Пенополиуретан (PUR)' || $(this).val() === 'Пенополиизоцианурат (PIR)') {
		lambda = 0.026;
		wallDensity.text('40±2');
		wallConductivity.text('0.026');
		wallAbsorbtion.text('не более 2%');	
	};	
	calcThickness();
	var output = $('#r-wall-filler');
	output.text($(this).val());	
});

var wallThicknessInput = $('#wall-shealthing-thickness');
wallThicknessInput.change(function(){	
	var wallThicknessOutput = $('#r-wall-thickness');
	wallThicknessOutput.text($(this).val());
});

var roofFillerTypeInput = $('#roof-filler-type');
roofFillerTypeInput.change(function(){
	var roofDensity = $('#roof-density');
	var roofConductivity = $('#roof-conductivity');
	var roofAbsorbtion = $('#roof-absorbtion');
	if ($(this).val() === 'Минеральная вата') {
		roofDensity.text('120 - 150');
		roofConductivity.text('0.042');
		roofAbsorbtion.text('не более 1.5%');
	} else if ($(this).val() === 'Пенополистирол (PPS)') {
		roofDensity.text('20 - 25');
		roofConductivity.text('0.039');
		roofAbsorbtion.text('не более 2%');
	} else if ($(this).val() === 'Пенополиуретан (PUR)' || $(this).val() === 'Пенополиизоцианурат (PIR)') {
		roofDensity.text('40±2');
		roofConductivity.text('0.026');
		roofAbsorbtion.text('не более 2%');	
	};
	
	var output = $('#r-roof-filler');
	output.text($(this).val());
});

var roofThicknessInput = $('#roof-shealthing-thickness');
roofThicknessInput.change(function(){
	var output = $('#r-roof-thickness');
	output.text($(this).val());
});

//period count block------------------------------------------------
var btnMinus = $('.period__button--minus'),
	btnPlus = $('.period__button--plus'),
	inputNumber = $('.period__input');

btnMinus.click(function(){
	var input = $(this).next();
	var value = +input.val();
	var min = input.attr('min');
	if (value > min || min == undefined) {
		input.val(value - 1);
	};
	input.change();
});
btnPlus.click(function(){
	var input = $(this).prev();
	var value = +input.val();
	var max = input.attr('max');
	if (value < max || max == undefined) {
		input.val(value + 1);
	};
	input.change();
});

inputNumber.change(function(){
	var min = $(this).attr('min');
	var max = $(this).attr('max');
	var val = +$(this).val();
	if (val < min) {
		$(this).val(min);
		alert('Минимальное значение: ' + min);
	} else if (val > max) {
		$(this).val(max);
		alert('Максимальное значение: ' + max);
	};
	var weekSpan = $('.period__week');
	var week = 'недели';
	var lastNumber = val.toString();
	lastNumber = lastNumber.substr(lastNumber.length - 1);
	switch (lastNumber) {		
		case '1': 
			week = 'неделя';
			break;
		case '2': 			
		case '3': 			
		case '4': 
			week = 'недели';
			break;
		case '5': 			
		case '6': 			
		case '7': 			
		case '8': 			
		case '9': 
		case '0': 
			week = 'недель';
			break;
	};
	weekSpan.text(week);
});

//внешний вид в результаты----------------------------------------------
var doorQuantityInput = $('#door-quantity');
doorQuantityInput.change(function(){
	var output = $('#r-door-quantity');
	output.text($(this).val());
});
var gateQuantityInput = $('#gate-quantity');
gateQuantityInput.change(function(){
	var output = $('#r-gate-quantity');
	output.text($(this).val());
});
var translucentQuantityInput = $('#translucent-quantity');
translucentQuantityInput.change(function(){
	var output = $('#r-translucent-quantity');
	output.text($(this).val());
});
//---
var reinforceDoorInput = $('#reinforce-door');
reinforceDoorInput.change(function(){
	var output = $('#r-door-reinforce');
	if ($(this).is(':checked')) {
		output.text('Да');
	} else {
		output.text('Нет');
	};	
});
var reinforceGateInput = $('#reinforce-gate');
reinforceGateInput.change(function(){
	var output = $('#r-gate-reinforce');
	if ($(this).is(':checked')) {
		output.text('Да');
	} else {
		output.text('Нет');
	};	
});
var reinforceTranslucentInput = $('#reinforce-translucent');
reinforceTranslucentInput.change(function(){
	var output = $('#r-translucent-reinforce');
	if ($(this).is(':checked')) {
		output.text('Да');
	} else {
		output.text('Нет');
	};	
});
//---
var doorDimensionInput = $('input[name="door-dim"]');
doorDimensionInput.change(function(){
	var output = $('#r-door-dimension');
	output.text($(this).val());
});
var gateDimensionInput = $('input[name="gate-dim"]');
gateDimensionInput.change(function(){
	var output = $('#r-gate-dimension');
	output.text($(this).val());
});
var translucentDimensionInput = $('input[name="tra-dim"]');
translucentDimensionInput.change(function(){
	var output = $('#r-translucent-dimension');
	output.text($(this).val());
});
