<?php
/**
 * Template part for displaying posts.
 *
 * @package Starter
 */

?>
<?php 
	$portfolio_logo = get_field('portfolio_logo');
	$project_excerpt = get_field('project_excerpt');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('our-potfolio-projects-item'); ?>>

	<a href="<?php the_permalink() ?>" class="our-potfolio-projects-link">
		<?php if( get_the_post_thumbnail() ): ?>
			<div class="our-potfolio-projects-featured-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
				<?php $term_list = wp_get_post_terms($post->ID, 'kategorija-projekta', ['fields' => 'all']);
					foreach($term_list as $term) {
						if( get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-projekta',true) == $term->term_id ) { ?>
							<span class="title-label"><?php print $term->name ; ?></span>
						<?php }
					}
				?>
			</div>
		<?php else: ?>
			<div class="our-potfolio-projects-featured-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
				<?php $term_list = wp_get_post_terms($post->ID, 'kategorija-projekta', ['fields' => 'all']);
					foreach($term_list as $term) {
						if( get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-projekta',true) == $term->term_id ) { ?>
							<span class="title-label"><?php print $term->name ; ?></span>
						<?php }
					}
				?>
			</div>
		<?php endif; ?>
		<div class="project-description-reference-logo-wrapper">
			<div class="project-description<?php if( !$portfolio_logo ): ?> no-logo<?php endif; ?>">
				<header class="entry-header">
					<h2 class="entry-title our-potfolio-projects-title">
						<?php the_title(); ?>
					</h2>
					<?php if( $project_excerpt ): ?>
						<div class="entry-content portfolio-excerpt">
							<?php echo $project_excerpt; ?>
						</div>
					<?php endif; ?>
				</header>
				<span class="link link-white link-arrow"><?php _e('Pogledajte projekat', 'arteco') ?> <i class="icon icon-arrow-right"></i></span>
			</div>
			<?php if( $portfolio_logo ): ?>
				<div class="project-reference-logo">
					<img src="<?php echo esc_url($portfolio_logo['url']); ?>" alt="<?php echo esc_attr($portfolio_logo['alt']); ?>" />
				</div>
			<?php endif; ?>
		</div>
	</a>
	<div class="slick-slider-dots-projects"></div>

</article><!-- #post-## -->
