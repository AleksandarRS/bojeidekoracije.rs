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
		}
    },

};
jQuery(window).on("load", function () {
    jQuery(".page-loader-wrapper").fadeOut("slow", function () {
        jQuery('body').addClass('page-loaded')
    });
    jQuery("body").css("overflow-y", "visible");
});


  