// "use strict";

    
/**  
 * 1. Add [ "slick-carousel": "1.8.1" ], to package.json
 * 2. npm install
 * 3. Import slick scss file in assets/scss/plugins/slick.scss => @import "../../../node_modules/slick-carousel/slick/slick.scss";
 * 4. Add require('slick-carousel');
 * 5. Initialize slick
 * 
*/
require('slick-carousel');

module.exports = {
	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		slickSliderProducts: $(".products-slider-wrapper"),
		slickSliderPopularProducts: $(".most-popular-products-slider"),

		slickSliderSingleMain: $(".single-page-main-slider"),
		slickSliderSingleThumb: $(".single-page-thumbnail-slider"),

		// slickSliderPagination: $(".slick-slider-dots"),

		// slickSliderSingleThumb: $(".single-page-thumbnail-slider"),

		// slickSliderSingleinstructions: $(".instructions-slider"),

		// slickSliderHalfSection: $(".half-section-slider"),

		// slickSliderSingleinstructionsWrapper: $(".instructions-slider-wrapper"),

		// slickSliderSingleinstructionsNav: $(".title-label-slider"),
	},
	

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

		// this.$dom.slickSlider.slick({
		// 	slidesToScroll: 1,
		// 	slidesToShow: 3,
		// 	centerMode: true,
		// 	centerPadding: 100,
		// 	dots: true,
		// 	arrows: true,
		// 	prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
		// 	nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
		// });

		
		
		if ($(".products-slider-wrapper").length) {
			var currentSlide;
			var slidesCount;
			var sliderCounter = document.createElement('div');
			sliderCounter.classList.add('slider__counter');
			
			var updateSliderCounter = function(slick) {
				currentSlide = slick.slickCurrentSlide() + 1;
				slidesCount = slick.slideCount;
				$(sliderCounter).html('<span>' + currentSlide + '/</span>' + '<span>' + slidesCount + '</span>')
			};
		  
			$(".products-slider-wrapper").on('init', function(event, slick) {
				$(".products-slider-wrapper").append(sliderCounter);
				updateSliderCounter(slick);
			});
		  
			$(".products-slider-wrapper").on('afterChange', function(event, slick, currentSlide) {
				updateSliderCounter(slick, currentSlide);
			});

			$(".products-slider-wrapper").slick({
				slidesToScroll: 1,
				slidesToShow: 1,
				dots: true,
				arrows: true,
				prevArrow: "<button type='button' class='slick-prev pull-left'><i class='icon icon-angle-left' aria-hidden='true'></i></button>",
				nextArrow: "<button type='button' class='slick-next pull-right'><i class='icon icon-angle-right' aria-hidden='true'></i></button>",
				customPaging : function(slider, i) {
					var thumb = $(slider.$slides[i]).find('.slick-slider-dots');
					return thumb;
				}
			});
		}


		this.$dom.slickSliderPopularProducts.slick({
			slidesToScroll: 1,
			slidesToShow: 4,
			infinite: true,
			variableWidth: true,
			dots: false,
			arrows: true,
			prevArrow: "<button type='button' class='slick-prev pull-left'><i class='icon icon-angle-left' aria-hidden='true'></i></button>",
			nextArrow: "<button type='button' class='slick-next pull-right'><i class='icon icon-angle-right' aria-hidden='true'></i></button>",
			responsive: [
				{
					breakpoint: 1199,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 650,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			  ]
		});


		if ($(".our-potfolio-projects-logos-slider").length) {
			var currentSlidePort;
			var slidesCountPort;
			var sliderCounterPort = document.createElement('div');
			sliderCounterPort.classList.add('slider__counter__s');
			
			var updateSliderCounterPort = function(slick) {
				currentSlidePort = slick.slickCurrentSlide() + 1;
				slidesCountPort = slick.slideCount;
				$(sliderCounterPort).html('<span>' + currentSlidePort + '/</span>' + '<span>' + slidesCountPort + '</span>')
			};
		  
			$(".our-potfolio-projects-logos-slider").on('init', function(event, slick) {
				$(".our-potfolio-projects-logos-slider").append(sliderCounterPort);
				updateSliderCounterPort(slick);
			});
		  
			$(".our-potfolio-projects-logos-slider").on('afterChange', function(event, slick, currentSlidePort) {
				updateSliderCounterPort(slick, currentSlidePort);
			});
			$(".our-potfolio-projects-logos-slider").slick({
				slidesToScroll: 1,
				slidesToShow: 3,
				infinite: true,
				variableWidth: true,
				centerMode: true,
				centerPadding: 100,
				dots: true,
				arrows: true,
				prevArrow: "<button type='button' class='slick-prev pull-left'><i class='icon icon-angle-left' aria-hidden='true'></i></button>",
				nextArrow: "<button type='button' class='slick-next pull-right'><i class='icon icon-angle-right' aria-hidden='true'></i></button>",
			});
		}

		this.$dom.slickSliderSingleMain.slick({
			// speed: 800,
			arrows: false,
			// autoplay: true,
			asNavFor: ".single-page-thumbnail-slider"
		});
		this.$dom.slickSliderSingleThumb.slick({
			slidesToShow: 4,
			// speed: 800,
			// autoplay: true,
			asNavFor: ".single-page-main-slider",
			prevArrow: "<button type='button' class='slick-prev pull-left'><i class='icon icon-angle-left' aria-hidden='true'></i></button>",
			nextArrow: "<button type='button' class='slick-next pull-right'><i class='icon icon-angle-right' aria-hidden='true'></i></button>",
			focusOnSelect: true,
			responsive: [
				{
					breakpoint: 1260,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 4
					}
				},
				{
					breakpoint: 580,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 420,
					settings: {
						slidesToShow: 2
					}
				}
			  ]
		});

		if ($(".project-gallery-slider").length) {
			var currentSlideProject;
			var slidesCountProject;
			var sliderCounterProject = document.createElement('div');
			sliderCounterProject.classList.add('slider__counter__project');
			
			var updateSliderCounterProject = function(slick) {
				currentSlideProject = slick.slickCurrentSlide() + 1;
				slidesCountProject = slick.slideCount;
				$(sliderCounterProject).html('<span>' + currentSlideProject + '/</span>' + '<span>' + slidesCountProject + '</span>')
			};
		  
			$(".project-gallery-slider").on('init', function(event, slick) {
				$(".project-gallery-slider").append(sliderCounterProject);
				updateSliderCounterProject(slick);
			});
		  
			$(".project-gallery-slider").on('afterChange', function(event, slick, currentSlideProject) {
				updateSliderCounterProject(slick, currentSlideProject);
			});
			$(".project-gallery-slider").slick({
				slidesToScroll: 1,
				slidesToShow: 3,
				infinite: true,
				variableWidth: true,
				centerMode: true,
				centerPadding: 100,
				dots: true,
				arrows: true,
				prevArrow: "<button type='button' class='slick-prev pull-left'><i class='icon icon-angle-left' aria-hidden='true'></i></button>",
				nextArrow: "<button type='button' class='slick-next pull-right'><i class='icon icon-angle-right' aria-hidden='true'></i></button>",
			});
		}

		// this.$dom.slickSliderSingleinstructions.slick({
		// 	slidesToScroll: 1,
		// 	slidesToShow: 1,
		// 	infinite: false,
		// 	dots: false,
		// 	arrows: true,
		// 	adaptiveHeight: true,
		// 	prevArrow: "<button type='button' class='slick-prev pull-left'><i class='icon icon-arrow-left' aria-hidden='true'></i></button>",
		// 	nextArrow: "<button type='button' class='slick-next pull-right'><i class='icon icon-arrow-right' aria-hidden='true'></i></button>",
		// 	// asNavFor: ".title-label-slider"
		// });

		// this.$dom.slickSliderHalfSection.slick({
		// 	slidesToScroll: 1,
		// 	slidesToShow: 1,
		// 	infinite: false,
		// 	dots: false,
		// 	arrows: true,
		// 	adaptiveHeight: true,
		// 	prevArrow: "<button type='button' class='slick-prev pull-left'><i class='icon icon-arrow-left' aria-hidden='true'></i></button>",
		// 	nextArrow: "<button type='button' class='slick-next pull-right'><i class='icon icon-arrow-right' aria-hidden='true'></i></button>",
		// });

		// this.$dom.slickSliderSingleinstructionsWrapper.slick({
		// 	arrows: false,
		// 	asNavFor: ".title-label-slider"
		// });

		// this.$dom.slickSliderSingleinstructionsNav.slick({
		// 	slidesToShow: 2,
		// 	asNavFor: ".instructions-slider-wrapper"
		// });

		// $(".instructions-slider-wrapper").slick({
		// 	slidesToScroll: 1,
		// 	slidesToShow: 1,
		// 	dots: true,
		// 	arrows: false,
		// 	customPaging : function(slider, i) {
		// 		var thumbInstruction = $(slider.$slides[i]).find('.title-label-slider');
		// 		return thumbInstruction;
		// 	}
		// });

		


		// this.$dom.slickSliderSingleMain.slick({
		// 	speed: 800,
		// 	arrows: false,
		// 	autoplay: true,
		// 	asNavFor: ".single-page-thumbnail-slider"
		// });
		// this.$dom.slickSliderSingleThumb.slick({
		// 	slidesToShow: 4,
		// 	speed: 800,
		// 	autoplay: true,
		// 	asNavFor: ".single-page-main-slider",
		// 	prevArrow: "<button type='button' class='slick-prev pull-left'><i class='icon icon-arrow-left' aria-hidden='true'></i></button>",
		// 	nextArrow: "<button type='button' class='slick-next pull-right'><i class='icon icon-arrow-right' aria-hidden='true'></i></button>",
		// 	focusOnSelect: true,
		// 	responsive: [
		// 		{
		// 			breakpoint: 1260,
		// 			settings: {
		// 				slidesToShow: 3
		// 			}
		// 		},
		// 		{
		// 			breakpoint: 767,
		// 			settings: {
		// 				slidesToShow: 4
		// 			}
		// 		},
		// 		{
		// 			breakpoint: 580,
		// 			settings: {
		// 				slidesToShow: 3
		// 			}
		// 		},
		// 		{
		// 			breakpoint: 420,
		// 			settings: {
		// 				slidesToShow: 2
		// 			}
		// 		}
		// 	  ]
		// });

	}
};