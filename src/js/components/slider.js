$(document).ready(function () {
	$('.hero__slider').slick({
		infinite: true,
		speed: 500,
		autoplay: false,
		autoplaySpeed: 5000,
		swipe: true,
		arrows: false,
		dots: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		appendDots: $('.slider__controls-btns'),
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	})

})
