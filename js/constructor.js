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
})

$(document).ready(function() {	
	//---------------------------------размеры
	//находим все элементы на странице
	//ширина
	var widthInput = $('#widthInput'), //число, основное поле
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
		
		width = widthInput.val(), //берем изначальные данные из html
		length = lengthInput.val(), 
		height = heightInput.val(),
		
		area = width * length, //подсчет площади и объема
		volume = area * height,
		
		widthMin = +widthInput.attr('min'), // у слайдеров устанавливаем такие же мин и макс как и у числового ввода (которые выставлены в html)
		widthMax = +widthInput.attr('max'),
		
		lengthMin = +lengthInput.attr('min'),
		lengthMax = +lengthInput.attr('max'),
		
		heightMin = +heightInput.attr('min'),
		heightMax = +heightInput.attr('max'),
		
		
		
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
		};	
	
	widthRange.attr('min', widthInput.attr('min'));
	widthRange.attr('max', widthInput.attr('max'));
	lengthRange.attr('min', lengthInput.attr('min'));
	lengthRange.attr('max', lengthInput.attr('max'));
	heightRange.attr('min', heightInput.attr('min'));
	heightRange.attr('max', heightInput.attr('max'));	
	
	$('#widthMin').text(widthMin);
	$('#widthMax').text(widthMax);
	$('#lengthMin').text(lengthMin);
	$('#lengthMax').text(lengthMax);
	$('#heightMin').text(heightMin);
	$('#heightMax').text(heightMax);
	
	calc();
	
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
		}
	});
	
	
	
	
	
	
	
	//------------results------------------
	//тип и подтип здания
	var structureTypeInput = $('.structure-type__input'),
		
		structureTypeOutput = $('.result__value--type'),
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
	
});

var visual = document.getElementById('visual');
var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera( 75, visual.innerWidth/visual.innerHeight, 0.1, 1000 );
var renderer = new THREE.WebGLRenderer();
renderer.setSize( visual.innerWidth, visual.innerHeight );
visual.appendChild( renderer.domElement );

var geometry = new THREE.BoxGeometry( 1, 1, 1 );
var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
var cube = new THREE.Mesh( geometry, material );
scene.add( cube );

camera.position.z = 5;

var render = function () {
	requestAnimationFrame( render );

	cube.rotation.x += 0.1;
	cube.rotation.y += 0.1;

	renderer.render(scene, camera);
};

render();

