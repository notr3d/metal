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
	next_fs.show(); 
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
			current_fs.hide();
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
	previous_fs.show(); 
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
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

$(document).ready(function() {
	//находим все элементы на странице
	//ширина
	var widthInput = $('#widthInput'), //число, основное поле
		widthRange = $('#widthRange'), //слайдер
		widthMinusButton = $('#widthMinus'), //кнопки плюс и минус
		widthPlusButton = $('#widthPlus'),
		//длина
		lengthInput = $('#lengthInput'), 
		lengthRange = $('#lengthRange'),
		lengthMinusButton = $('#lengthMinus'),
		lengthPlusButton = $('#lengthPlus'),
		//высота
		heightInput = $('#heightInput'), 
		heightRange = $('#heightRange'), 
		heightMinusButton = $('#heightMinus'),
		heightPlusButton = $('#heightPlus'),
	
		volumeOutput = $('#volumeOutput'), //площадь и объем
		areaOutput = $('#areaOutput'),
			
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
			
			area = width * length;
			areaOutput.text(area);
			
			volume = area * height;
			volumeOutput.text(volume);
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
	
	//range
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
	
	//buttons		
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
	
});



