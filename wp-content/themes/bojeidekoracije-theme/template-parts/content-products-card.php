<?php
/**
 * Template part for displaying single posts.
 *
 * @package Starter
 */

?>

<div class="most-popular-products-item products-item-card">
	<a href="<?php the_permalink() ?>" class="most-popular-products-link">
		<header class="entry-header">
			<?php $term_list = wp_get_post_terms($post->ID, 'kategorija-proizvoda', ['fields' => 'all']);
				foreach($term_list as $term) {
					if( get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-proizvoda',true) == $term->term_id ) { ?>
						<span class="title-label"><?php print $term->name ; ?></span>
					<?php }
				}
			?>
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
		</header>
		<div class="product-featured-image-wrapper">
			<?php if( get_the_post_thumbnail() ): ?>
				<div class="most-popular-products-featured-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
					<span class="link link-white link-arrow"><?php _e('Pogledajte proizvod', 'arteco') ?><i class="icon icon-arrow-right"></i></span>
				</div>
			<?php else: ?>
				<div class="most-popular-products-featured-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
					<span class="link link-white link-arrow"><?php _e('Pogledajte proizvod', 'arteco') ?><i class="icon icon-arrow-right"></i></span>
				</div>
			<?php endif; ?>
		</div>
	</a>
</div> <!-- /.products-slider-item -->

