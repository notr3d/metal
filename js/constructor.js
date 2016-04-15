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
	var width = 0, length = 0, height = 0;
	
	var widthRange = $('#widthRange'),
		lengthRange = $('#lengthRange'),
		heightRange = $('#heightRange'),

		widthInput = $('#widthInput'),
		lengthInput = $('#lengthInput'),
		heightInput = $('#heightInput');

	widthInput.val(widthRange.val());
	lengthInput.val(lengthRange.val());
	heightInput.val(heightRange.val());
	
	width = widthRange.val();
	length = lengthRange.val();
	height = heightRange.val();

	widthRange.change(function(){
		widthInput.val(widthRange.val());
		width = widthRange.val();
		calc();
	});
	lengthRange.change(function(){
		lengthInput.val(lengthRange.val());
		length = lengthRange.val();
		calc();
	});
	heightRange.change(function(){
		heightInput.val(heightRange.val());
		height = heightRange.val();
		calc();
	});
	
	widthInput.change(function(){
		widthRange.val(widthInput.val());
		width = widthInput.val();
		calc();
	});
	lengthInput.change(function(){
		lengthRange.val(lengthInput.val());
		length = lengthInput.val();
		calc();
	});
	heightInput.change(function(){
		heightRange.val(heightInput.val());
		height = heightInput.val();
		calc();
	});
	
	var volume = 0, area = 0;
	var volumeOutput = $('#volumeOutput'),
		areaOutput = $('#areaOutput'),
		calc = function(){
			area = width * length;
			volume = area * height;
			areaOutput.text(area);
			volumeOutput.text(volume);
		};	
	calc();
});



