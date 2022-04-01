"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		toggleOrderForm: $('#order-product-button'),
		toggleOrderFormClose: $('.order-product-close-button'),

		archiveFilter: $('.archive-filter-inner'),
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			this.$dom.toggleOrderForm.click(function() {
				// $( this ).parent('.hero-decription-icon-animate-wrap').toggleClass( "toggled-content" );
				$( this ).parents('.single-post-product-content-wrapper').find('#order-form').addClass("order-form-activated").slideToggle( "slow" );
			});
			this.$dom.toggleOrderFormClose.click(function() {
				$( this ).parents('.single-post-product-content-wrapper').find('#order-form').removeClass("order-form-activated").slideToggle( "slow" );
			});

			this.$dom.archiveFilter.click(function() {
				$('.archive-sidebar-wrapper form.searchandfilter').slideToggle('slow');
			})
		}
    },

};
jQuery(window).on("load", function () {
	setTimeout(function() {
		jQuery(".page-loader-wrapper").fadeOut("slow", function () {
			jQuery('body').addClass('page-loaded');
		});
		jQuery("body").css("overflow-y", "visible");
	}, 1000);
});


  