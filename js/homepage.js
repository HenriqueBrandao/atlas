



















	(function($) {


		if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
		} else {
				x.innerHTML = "Geolocation is not supported by this browser.";
		}


		function showPosition(position) {
		// x.innerHTML = "Latitude: " + position.coords.latitude +
		//  "<br>Longitude: " + position.coords.longitude;
		var latFinal = position.coords.latitude;
		var lonFinal = position.coords.longitude;
		console.log(latFinal);
		console.log(lonFinal);

		var JsonWeather = 'https://api.openweathermap.org/data/2.5/weather?lat='+ latFinal +'&lon='+ lonFinal +'&units=metric&appid=ab85ba57bbbb423fb62bfb8201126ede';
		// console.log(JsonWeather);
		$.getJSON(JsonWeather, function(data) {
		console.log(data);
		var temp = Math.floor(data.main.temp);
		//var weather = data.weather[0].main;

		var city = data.name;
			//	console.log(city);

		var wind = data.wind.speed;
		$(".temp").append(temp  + ' &#186; C' );
		$(".wind").append(wind + 'm/s');
		$(".city").append(city );
		});
		}


















	/*
			$('body').scrollspy({
					target: '#mainnav',
					offset: 000
			});

	*/







})( jQuery );





$(document).ready(function() {

	init();
	function init(){
		'use strict';
		var $isAnimatedSecond = $('.second .is-animated'),
		$isAnimatedSecondSingle = $('.second .is-animated__single'),
		$isAnimatedThird = $('.third .is-animated'),
		$isAnimatedThirdSingle = $('.third .is-animated__single'),
		$isAnimatedFourth = $('.fourth .is-animated'),
		$isAnimatedFourthSingle = $('.fourth .is-animated__single'),
		$isAnimatedFive = $('.fifth .is-animated'),
		$isAnimatedFiveSingle = $('.fifth .is-animated__single'),
		$isAnimatedSix = $('.sixth .is-animated'),
		$isAnimatedSixSingle = $('.sixth .is-animated__single'),
		$isAnimatedSeven = $('.seven .is-animated'),
		$isAnimatedSevenSingle = $('.seven .is-animated__single');


		$('#fullpage').fullpage({
				navigation: true,
			//	setMouseWheelScrolling: true,
				scrollOverflow: true,
			//	bigSectionsDestination: top,
				onLeave: function(index, nextIndex, direction) {





					if( ( index == 2 || index == 3 || index == 4 || index == 5 || index == 6 || index == 7 || index == 8) && nextIndex == 1 ) {
						document.getElementById('myvideo').play();
					}



						else if( ( index == 1 || index == 3 || index == 4 || index == 5 || index == 6 || index == 7 || index == 8) && nextIndex == 2 ) {

						$isAnimatedSecond.addClass('animated fadeInUp');
						$isAnimatedSecond.eq(0).css('animation-delay', '.2s');
						$isAnimatedSecond.eq(1).css('animation-delay', '.4s');
						$isAnimatedSecond.eq(2).css('animation-delay', '.6s');
						$isAnimatedSecondSingle.addClass('animated fadeIn').css('animation-delay', '.9s');
						$isAnimatedSecondSingle.eq(0).css('animation-delay', '.2s');
						$isAnimatedSecondSingle.eq(1).css('animation-delay', '.4s');
						$isAnimatedSecondSingle.eq(3).css('animation-delay', '.6s');
						 }

						else if( ( index == 1 || index == 2 || index == 4 || index == 5 || index == 6 || index == 7 || index == 8 ) && nextIndex == 3 ) {

						$isAnimatedThird.addClass('animated fadeInUp');
						$isAnimatedThird.eq(0).css('animation-delay', '.1s');
						$isAnimatedThird.eq(1).css('animation-delay', '.3s');
						$isAnimatedThird.eq(2).css('animation-delay', '.4s');
						$isAnimatedThird.eq(3).css('animation-delay', '.5s');
						$isAnimatedThird.eq(4).css('animation-delay', '.6s');
						$isAnimatedThird.eq(5).css('animation-delay', '.7s');
						$isAnimatedThird.eq(6).css('animation-delay', '.8s');
						$isAnimatedThird.eq(7).css('animation-delay', '.9s');
						$isAnimatedThird.eq(8).css('animation-delay', '1s');
						$isAnimatedThird.eq(9).css('animation-delay', '1.1s');
						$isAnimatedThird.eq(10).css('animation-delay', '1.2s');
						$isAnimatedThird.eq(11).css('animation-delay', '1.25s');
						$isAnimatedThirdSingle.addClass('animated fadeIn').css('animation-delay', '1.2s');

						}



						else if( ( index == 1 || index == 2 || index == 3 || index == 5 || index == 6 || index == 7 || index == 8 ) && nextIndex == 4 ) {
								$isAnimatedFourth.addClass('animated fadeInUp');
								$isAnimatedFourth.eq(0).css('animation-delay', '.1s');
								$isAnimatedFourth.eq(1).css('animation-delay', '.3s');
								$isAnimatedFourth.eq(2).css('animation-delay', '.5s');
								$isAnimatedFourth.eq(3).css('animation-delay', '.6s');
								$isAnimatedFourth.eq(4).css('animation-delay', '.7s');
								$isAnimatedFourth.eq(5).css('animation-delay', '.8s');
								$isAnimatedFourthSingle.addClass('animated fadeIn').css('animation-delay', '.3s');
						}

						else if( ( index == 1 || index == 3 || index == 4 || index == 2 || index == 6 || index == 7 || index == 8 ) && nextIndex == 5 ) {
								$isAnimatedFive.addClass('animated fadeInUp');
								$isAnimatedFive.eq(0).css('animation-delay', '.1s');
								$isAnimatedFive.eq(1).css('animation-delay', '.3s');
								$isAnimatedFive.eq(2).css('animation-delay', '.4s');
								$isAnimatedFive.eq(3).css('animation-delay', '.5s');
								$isAnimatedFive.eq(4).css('animation-delay', '.6s');
								$isAnimatedFive.eq(5).css('animation-delay', '.7s');
								$isAnimatedFive.eq(5).css('animation-delay', '.8s');
								$isAnimatedFiveSingle.addClass('animated fadeIn').css('animation-delay', '.9s');
						}


						else if( ( index == 1 || index == 3 || index == 4 || index == 5 || index == 2 || index == 7 || index == 8 ) && nextIndex == 6 ) {
								$isAnimatedSix.addClass('animated fadeInUp');
								$isAnimatedSix.eq(0).css('animation-delay', '.1s');
								$isAnimatedSix.eq(1).css('animation-delay', '.3s');
								$isAnimatedSix.eq(2).css('animation-delay', '.4s');
								$isAnimatedSix.eq(3).css('animation-delay', '.5s');
								$isAnimatedSix.eq(4).css('animation-delay', '.6s');
								$isAnimatedSix.eq(5).css('animation-delay', '.7s');
								$isAnimatedSix.eq(5).css('animation-delay', '.8s');
								$isAnimatedSixSingle.addClass('animated fadeIn').css('animation-delay', '.9s');
						}

						else if( ( index == 1 || index == 3 || index == 4 || index == 5 || index == 6 || index == 2 || index == 8 ) && nextIndex == 7 ) {
								$isAnimatedSeven.addClass('animated fadeInUp');
								$isAnimatedSeven.eq(0).css('animation-delay', '.1s');
								$isAnimatedSeven.eq(1).css('animation-delay', '.3s');
								$isAnimatedSeven.eq(2).css('animation-delay', '.4s');
								$isAnimatedSeven.eq(3).css('animation-delay', '.5s');
								$isAnimatedSeven.eq(4).css('animation-delay', '.6s');
								$isAnimatedSeven.eq(5).css('animation-delay', '.7s');
								$isAnimatedSeven.eq(5).css('animation-delay', '.8s');
								$isAnimatedSevenSingle.addClass('animated fadeIn').css('animation-delay', '.9s');
						}
				}
		});

		//adding a section dynamically



		/*
		if ($(window).width() < 768) {
			var e = $("#noticias");
			var a = $("#atlas");
			var h = $("#home");
			var s = $("#solucoes1");
			var slide = $('#documentos');
			// move up:
			//e.insertAfter(h);
			a.insertAfter(s);
			slide.remove();
			var activeSectionIndex = $('.fp-section.active').index();
			var activeSlideIndex = $('.fp-section.active').find('.slide.active').index();
			$.fn.fullpage.destroy('all');
			$('.section').eq(activeSectionIndex).addClass('active');
			if(activeSlideIndex > -1){
					$('.section.active').find('.slide').eq(activeSlideIndex).addClass('active');
			}
			init();
		}
		*/




	}
	$('#scrollDown').click(function(){
		$.fn.fullpage.moveSectionDown();
	});
});