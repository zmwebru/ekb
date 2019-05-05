$(document).ready(function(){

  $("#tel").mask("+7(999) 99-999-99");

	$('.gallery').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				}
			}
		]
	});
	//changeCounter
	function changeCounter() {
		var element = $(this);
		var counterVal = element.attr('data-value');

		$('#counters-price-list li').removeClass('active');
		element.addClass('active');

		$('#counters-value-total').text(counterVal);

		if ($(window).width() < 1366) {
			$("html, body").animate({ scrollTop: 50 }, 500);
		}
	}

	$('#counters-price-list li').on('click', changeCounter);

	function calcLosses() {
		var counter = 1;
		var $calcNum = $('#calk-num');
		var $plusButton = $('#calc-plus');
		var $minusButton = $('#calc-minus');

		function changeCounter(direction) {
			if (direction === 'plus' && counter < 20) {
				counter++;
			} else if (direction === 'minus' && counter > 1) {
				counter--;
			}

			$calcNum.text(counter);
			changeTotal(counter);
		};

		function changeTotal(counter) {
			var $price = $('#calc-price span');
			monthEconomy = counter * 400;
			yearEconomy = monthEconomy * 12;

			$price.text(monthEconomy);

			$('#calc-month').on('click', function(e) {
				e.preventDefault();
				$price.text(monthEconomy);
			});

			$('#calc-year').on('click', function(e) {
				e.preventDefault();
				$price.text(yearEconomy);
			});
		}

		changeTotal(counter);

		$plusButton.on('click', changeCounter.bind(null, 'plus'));

		$minusButton.on('click', changeCounter.bind(null, 'minus'));
	}

	calcLosses();

	//drop menu
	$(".opener").click(function () {
		$('.nav-bar ul').fadeToggle(250);
		return false;
	});

	//fixed header
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 158 && ($(window).width() > 768)) {
			$('.nav-bar').addClass('fixed-header');
		}
		else {
			$('.nav-bar').removeClass('fixed-header');
		}
	});

	//modals
	var overlay = $('#overlay');
	var open_modal = $('.open-modal');
	var close = $('.close, #overlay');
	var modal = $('.popup');

	open_modal.click( function(event){

		event.preventDefault();
		$(".popup").css('display', 'none')
		var div = $(this).attr('href');
		overlay.fadeIn(400,
			function(){
				$(div)
					.css('display', 'block')
					.animate({opacity: 1, top: '50%'}, 200);
			});
	});

	close.click( function(){
		modal
			.animate({opacity: 0, top: '45%'}, 200,
			function(){
				$(this).css('display', 'none');
				overlay.fadeOut(400);
			}
		);
	});

});
