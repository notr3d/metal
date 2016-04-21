//constructor-------------------------------------------------------

/*var current_fs, next_fs, previous_fs; //fieldsets
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
});*/

$(".submit").click(function(){
	return false;
});
 	
//главные параметры
var	width = 18, //ширина, длина и высота
	widthMin = 0,
	widthMax = 0,
	
	length = 40, 
	lengthMin = 0,
	lengthMax = 0,
	
	height = 6,
	heightMin = 0,
	heightMax = 0,
	
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

		area = width * length;
		areaOutput.text(area);
		ResultAreaOutput.text(area);

		volume = area * height;
		volumeOutput.text(volume);
		ResultVolumeOutput.text(volume);
		
		geometry.parameters.width = width;
		geometry.parameters.height = height;
		geometry.parameters.depth = length;
		render();
	};

$(document).ready(function(){
	calc();
});

//выбираем тип здания
structureTypeInput.click(function(){
	currentStructureType = structureTypeInput.filter(':checked').attr('id');
});

//по типу здания расчитываем все
toDimensionButton.click(function(){
	switch (currentStructureType) {
		case 'structure-type-1':
			width = 18; 
			length = 40, 
			height = 6,
			widthMin = 6;
			widthMax = 21;
			lengthMin = 9;
			lengthMax = 99;
			heightMin = 3;
			heightMax = 6;
			break;
		case 'structure-type-2':
			width = 48; 
			length = 77, 
			height = 10, //9.6
			widthMin = 6;
			widthMax = 18;
			lengthMin = 23;
			lengthMax = 122;
			heightMin = 5; //4.8
			heightMax = 12;
			break;
		case 'structure-type-3':
			width = 21; 
			length = 39, 
			height = 4, //4.2
			widthMin = 6;
			widthMax = 21;
			lengthMin = 9;
			lengthMax = 99;
			heightMin = 3;
			heightMax = 6;
			break;
		case 'structure-type-4':
			width = 30; 
			length = 59, 
			height = 7, //7.2
			widthMin = 18;
			widthMax = 60;
			lengthMin = 23;
			lengthMax = 122;
			heightMin = 5; //4.8
			heightMax = 12;
			break;
		case 'structure-type-5':
			width = 15; 
			length = 40, //40.5 
			height = 6,
			widthMin = 6;
			widthMax = 21;
			lengthMin = 9;
			lengthMax = 99;
			heightMin = 3;
			heightMax = 6;
			break;
		case 'structure-type-6':
			width = 19; //18.8 
			length = 42, 
			height = 3,
			widthMin = 19; //18.8
			widthMax = 25; //24.8
			lengthMin = 18;
			lengthMax = 96;
			heightMin = 3;
			heightMax = 6;
			break;
		case 'structure-type-7':
			width = 29; //28.8 
			length = 36, 
			height = 3,
			widthMin = 29; //28.8
			widthMax = 35;
			lengthMin = 11; //10.8
			lengthMax = 97; //97.2;
			heightMin = 3;
			heightMax = 5; //4.8
			break;
		case 'structure-type-8':
			width = 18; 
			length = 40, 
			height = 6,
			widthMin = 6;
			widthMax = 21;
			lengthMin = 9;
			lengthMax = 99;
			heightMin = 3;
			heightMax = 6;
			break;
		case 'structure-type-9':
			width = 24; 
			length = 41, 
			height = 6,
			widthMin = 18;
			widthMax = 60;
			lengthMin = 23;
			lengthMax = 122;
			heightMin = 5; //4.8
			heightMax = 12;
			break;
		case 'structure-type-10':
			width = 30; 
			length = 32, 
			height = 5, //4.8
			widthMin = 18;
			widthMax = 60;
			lengthMin = 23;
			lengthMax = 122;
			heightMin = 5; //4.8
			heightMax = 12;
			break;
	};
	
	widthInput.attr('min', widthMin);
	widthInput.attr('max', widthMax);
	lengthInput.attr('min', lengthMin);
	lengthInput.attr('max', lengthMax);
	heightInput.attr('min', heightMin);
	heightInput.attr('max', heightMax);	
	
	widthRange.attr('min', widthMin);
	widthRange.attr('max', widthMax);
	lengthRange.attr('min', lengthMin);
	lengthRange.attr('max', lengthMax);
	heightRange.attr('min', heightMin);
	heightRange.attr('max', heightMax);	
	
	$('#widthMin').text(widthMin);
	$('#widthMax').text(widthMax);
	$('#lengthMin').text(lengthMin);
	$('#lengthMax').text(lengthMax);
	$('#heightMin').text(heightMin);
	$('#heightMax').text(heightMax);
	
	calc();
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
	width = widthRange.val();
	calc();
});
lengthRange.change(function(){
	length = lengthRange.val();
	calc();
});
heightRange.change(function(){
	height = heightRange.val();
	calc();
});

//кнопки + -		
widthMinusButton.click(function(){
	if (width > widthMin) {
		width--;
		calc();
	} 
});
widthPlusButton.click(function(){
	if (width < widthMax) {
		width++;
		calc();
	}
});
lengthMinusButton.click(function(){		
	if (length > lengthMin) {
		length--;
		calc();
	}
});
lengthPlusButton.click(function(){
	if (length < lengthMax) {
		length++;
		calc();
	}
});
heightMinusButton.click(function(){;
	if (height > heightMin) {
		height--;
		calc();
	}
});
heightPlusButton.click(function(){
	if (height < heightMax) {
		height++;
		calc();
	}
});	

//--------------выбор цвета
var colorButton = $('.color__button'), //кнопка выбора цвета
	colorSpan = $('.color__span'), // элемент внутри кнопки для выбранного цвета

	colorContainer = $('.color__container'), // выпадающее меню с цветами
	colorInput = $('.color__input'), // скрытые инпуты для цветов
	colorLabel = $('.color__label'), // квадраты для выбора цвета

	drainYes = $('#drain-yes'), // выбрать цвет нельзя если он не включен
	drainNo = $('#drain-no'),
	drainColorButton = $('#drainColorButton'),

	wallColorOutput = $('.result__value--wall-color'),
	roofColorOutput = $('.result__value--roof-color'),
	lippingColorOutput = $('.result__value--lipping-color'),
	drainColorOutput = $('.result__value--drain-color');

colorContainer.slideUp(); //убираем меню
//colorLabel.text(''); // убираем текст внутри квадратов
drainColorButton.attr('disabled', true); // по умолчанию водосток не включен
drainColorButton.addClass('color__button--disabled');

colorButton.click(function(){ //по нажатию на кнопку появляется блок с цветами
	$(this).next().slideToggle();
});

drainYes.click(function(){ //включаем блок с выбором цвета водостока если он вклчюен
	drainColorButton.removeAttr('disabled');
	drainColorButton.removeClass('color__button--disabled');
});

drainNo.click(function(){ //убираем блок цвета водостока если он выключен
	drainColorButton.attr('disabled', true);
	drainColorButton.next().slideUp();	
	drainColorButton.next().children().removeAttr('checked');
	drainColorButton.addClass('color__button--disabled');
});	

colorInput.click(function(){ //красим элемент внутри кнопки выбранным цветом
	var color = $(this).attr('id').split('-'),
		colorId = 'color__label--' + color[1] + '-' + color[2],
		colorType = color[0],
		colorName = $(this).next().text();

	$(this)
		.parent()
		.prev()
		.children(colorLabel)
		.attr('class', 'color__span ' + colorId);

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
	
//-------------------3d-version-------------------
var visual = document.getElementById('visual'); //место для отрисовки

var scene = new THREE.Scene(); //сцена
var camera = new THREE.PerspectiveCamera( 60, visual.offsetWidth/visual.offsetHeight, 0.1, 10000 ); //камера (fov, aspect ratio, near and far clipping plane)

var renderer = new THREE.WebGLRenderer(); //канвас

renderer.setClearColor(new THREE.Color(0xffffff, 1.0)); //общий цвет фона
renderer.setSize( visual.offsetWidth*2, visual.offsetHeight*2, false ); //окно рендера на все доступоне место
visual.appendChild( renderer.domElement );

var geometry = new THREE.BoxGeometry( 1, 1, 1); //width, height, length
var material = new THREE.MeshBasicMaterial( { color: 0xdddddd } );

var cube = new THREE.Mesh( geometry, material );

camera.position.y = height + 15;
if (width > length) {
	camera.position.z = width + 45;
} else {
	camera.position.z = length + 45;
}

var render = function () {
	scene.remove(cube);
	requestAnimationFrame( render );
	scene.add( cube );
	
	cube.scale.x = width; 
	cube.scale.y = height; 
	cube.scale.z = length;
	
	cube.rotation.y += 0.001;	
	
	renderer.render(scene, camera);
};
