"use strict";
    
/**  
 * 1. Add [ "featherlight": "1.7.14" ], to package.json
 * 2. npm install
 * 3. Import scss file in assets/scss/plugins/featherlight.scss => @import '../../../node_modules/featherlight/release/featherlight.min';
 * 4. Add require('featherlight/src/featherlight')($);
 * 5. Initialize featherlight
 * 
*/

require('featherlight/src/featherlight')($);
require('featherlight/src/featherlight.gallery')($);

module.exports = {
	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		lightboxSingleProduct: $('.featherlight-gallery-init'),
		lightboxGallery: $('.project-gallery-slider .project-gallery-lightbox-link'),
	},
	

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

		// this.$dom.lightbox.featherlight();
		if ($(".featherlight-gallery-init").length) {
			this.$dom.lightboxSingleProduct.featherlightGallery();
		}
		// this.$dom.lightbox.featherlightGallery();
		if ($(".project-gallery-slider .project-gallery-lightbox-link").length) {
			this.$dom.lightboxGallery.featherlightGallery();
		}
	}
};