$(function(){

	$('.center').slick({
		centerMode: true,
		centerPadding: '150px 20px 150px',
		slidesToShow: 1,
		responsive: [
		{
			breakpoint: 849,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		},
		{
			breakpoint: 480,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}
		}
	]
	});

})