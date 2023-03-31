<?php
/**
 * Template part for displaying single posts.
 *
 * @package Starter
 */

?>

<div class="archive-filter-products-item products-item-card col-md-4">
	<a href="<?php the_permalink() ?>" class="archive-filter-products-link">
		
		<div class="product-featured-image-wrapper">
			<?php if( get_the_post_thumbnail() ): ?>
				<div class="archive-filter-products-featured-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
					<?php //$term_list = wp_get_post_terms($post->ID, 'kategorija-proizvoda', ['fields' => 'all']);
						// foreach($term_list as $term) {
						// 	if( get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-proizvoda',true) == $term->term_id ) { ?>
						 		<!-- <span class="title-label"><?php //print $term->name ; ?></span> -->
						 	<?php //}
						// }
					?>
				</div>
			<?php else: ?>
				<div class="archive-filter-products-featured-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
					<?php //$term_list = wp_get_post_terms($post->ID, 'kategorija-proizvoda', ['fields' => 'all']);
						// foreach($term_list as $term) {
						// 	if( get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-proizvoda',true) == $term->term_id ) { ?>
						 		<!-- <span class="title-label"><?php //print $term->name ; ?></span> -->
						 	<?php //}
						// }
					?>
				</div>
			<?php endif; ?>
		</div>
		<div class="product-post-title-cat-wrapper">
			<header class="entry-header">
				<h2 class="entry-title most-popular-products-title product-title">
					<?php the_title(); ?>
				</h2>
				<?php
					$my_excerpt = get_the_excerpt();
					if($my_excerpt !='') { ?>
					<div class="products-description entry-content">
						<?php the_excerpt(); ?>
					</div>
				<?php } ?>
				<div class="see-more-wrapper">
					<span class="link link-white link-arrow"><?php _e('Pogledajte proizvod', 'arteco') ?><i class="icon icon-arrow-right"></i></span>
				</div>
			</header>
		</div>
	</a>
</div> <!-- /.products-slider-item -->

