<?php
/**
 * Template part for displaying single posts.
 *
 * @package Starter
 */

?>
<?php 
$portfolio_logo = get_field('portfolio_logo');
$project_excerpt = get_field('project_excerpt');
?>
<div class="our-potfolio-projects-item">
	<a href="<?php the_permalink() ?>" class="our-potfolio-projects-link">
		<?php if( get_the_post_thumbnail() ): ?>
			<div class="our-potfolio-projects-featured-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
			</div>
		<?php else: ?>
			<div class="our-potfolio-projects-featured-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
			</div>
		<?php endif; ?>
		<div class="project-description-reference-logo-wrapper">
			<div class="project-description<?php if( !$project_excerpt ): ?> no-logo<?php endif; ?>">
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
			<div class="project-reference-logo">
				<img src="<?php echo esc_url($portfolio_logo['url']); ?>" alt="<?php echo esc_attr($portfolio_logo['alt']); ?>" />
			</div>
		</div>
	</a>
	<div class="slick-slider-dots-projects"></div>
</div> <!-- /.our-potfolio-projects-item -->

