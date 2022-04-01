<?php

/**
 * Template part for displaying single posts.
 *
 * @package arteco
 */

?>
<?php
$hero_image = get_field('hero_image');

$portfolio_logo = get_field('portfolio_logo');
$project_excerpt = get_field('project_excerpt');

$project_short_description = get_field('project_short_description');
$project_large_description = get_field('project_large_description');

$project_gallery_short_description = get_field('project_gallery_short_description');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ($hero_image) : ?>
		<div class="single-project-hero-wrapper">
			<div class="single-post-main-image-wrapper hero-section-small-image-wrap" style="background-image: url('<?php echo esc_url($hero_image['url']); ?>')">
				<div class="single-post-main-image-inner">
					<header class="entry-header">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<?php the_title('<h1 class="main-hero-title main-title">', '</h1>'); ?>
									<?php if ($project_excerpt) : ?>
										<div class="hero-project-excrept main-hero-description">
											<?php echo $project_excerpt; ?>
										</div>
									<?php endif; ?>
									<?php if (get_the_date()) : ?>
										<div class="post-date-published">
											<?php _e('Članak objavljen:', 'arteco') ?> <span><?php the_date(); ?></span>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</header><!-- .entry-header -->
				</div>
			</div> <!-- /.single-post-main-image-wrapper -->
		</div>
	<?php else : ?>
		<div class="single-project-hero-wrapper">
			<div class="single-post-main-image-wrapper hero-section-small-image-wrap" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
				<div class="single-post-main-image-inner">
					<header class="entry-header">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<?php the_title('<h1 class="main-hero-title main-title">', '</h1>'); ?>
									<?php if ($project_excerpt) : ?>
										<div class="hero-project-excrept main-hero-description">
											<?php echo $project_excerpt; ?>
										</div>
									<?php endif; ?>
									<?php if (get_the_date()) : ?>
										<div class="post-date-published">
											<?php _e('Članak objavljen:', 'arteco') ?> <span><?php the_date(); ?></span>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</header><!-- .entry-header -->
				</div>
			</div> <!-- /.single-post-main-image-wrapper -->
		</div>
	<?php endif; ?>



	<?php if ($project_short_description || $portfolio_logo) : ?>
		<div class="container">
			<div class="entry-content single-project-row single-project-logo-description-wrapper row">
				<div class="col-md-2 single-project-logo">
					<div class="single-project-logo-inner">
						<img src="<?php echo esc_url($portfolio_logo['url']); ?>" alt="<?php echo esc_attr($portfolio_logo['alt']); ?>">
					</div>
				</div>
				<div class="col-md-10 single-project-short-content-description">
					<?php echo $project_short_description; ?>
				</div> <!-- /.col-md-9 single-project-short-content-description -->
			</div><!-- .entry-content -->
		</div>
	<?php endif; ?>

	<?php if ($project_large_description) : ?>
		<div class="container">
			<div class="entry-content single-project-row row">
				<div class="col-md-12 single-project-content-full-width">
					<?php echo $project_large_description; ?>
				</div> <!-- /.col-md-12 single-project-content-full-width -->
			</div><!-- .entry-content -->
		</div>
	<?php endif; ?>

	<?php if (have_rows('project_gallery')) : ?>
		<div class="project-gallery-wrapper">
			<div class="container">
				<header class="project-title entry-header align-center">
					<!-- <span class="title-label"><?php // _e('Galerija', 'arteco') ?></span> -->
					<?php $term_list = wp_get_post_terms($post->ID, 'kategorija-projekta', ['fields' => 'all']);
						foreach($term_list as $term) {
							if( get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-projekta',true) == $term->term_id ) { ?>
								<span class="title-label"><?php print $term->name ; ?></span>
							<?php }
						}
					?>
					<h2 class="entry-title"><?php _e('Pogledajte galeriju', 'arteco') ?></h2>
					<div class="products-description entry-content">
						<?php if ($project_gallery_short_description) : ?>
							<?php echo $project_gallery_short_description; ?>
						<?php else : ?>
							<p><?php _e('Pogledajte galeriju i proces našega rada', 'arteco') ?></p>
						<?php endif; ?>
					</div>
				</header>
				<div class="project-gallery-slider-wrapper">
					<div class="project-gallery-slider">
						<?php while (have_rows('project_gallery')) : the_row(); ?>
							<?php $gallery_image = get_sub_field('project_gallery_images'); ?>
							<div class="project-gallery-slider-item">
								<a class="project-gallery-lightbox-link" href="<?php echo esc_url($gallery_image['url']); ?>">
									<div class="project-gallery-slider-item-image" style="background-image: url('<?php echo esc_url($gallery_image['url']); ?>')" area-label="<?php echo esc_attr($gallery_image['alt']); ?>"></div>
								</a>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	<?php else : ?>

	<?php endif; ?>

</article><!-- #post-## -->
<div class="all-products-section col-md-12">
	<div class="all-products-section-wrapper">
		<div class="main-title-section-heading button-heading-wrap col-md-12">
			<header class="entry-header">
				<span class="title-label"><?php _e('Projekti', 'arteco'); ?></span>
				<h1 class="entry-title"><?php _e('Slični projekti', 'arteco'); ?></h1>
			</header>
		</div>

		<?php
		// get the custom post type's taxonomy terms

		$cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-projekta', true);

		$args = array(
			'post_type' => 'projekat',
			'post_status' => 'publish',
			'posts_per_page' => 4, // you may edit this number
			'orderby' => 'rand',
			'post__not_in' => array($post->ID),
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts' => true,
			'tax_query' => array(
				array(
					'taxonomy' => 'kategorija-projekta',
					'field' => 'id',
					'terms' => [$cat_id]
				)
			)
		);
		$related_items = new WP_Query($args);
		// loop over query
		if ($related_items->have_posts()) : ?>

			<div class="product-cards-wrapper category-cards-wrapper col-md-12">
				<div class="row category-row">

					<?php while ($related_items->have_posts()) : $related_items->the_post(); ?>
						<div class="col-md-3 item-wrapper">
							<?php get_template_part('template-parts/content', 'project-card'); ?>
						</div>
					<?php endwhile; ?>

				</div>
			</div>

		<?php endif; ?>
		<?php wp_reset_query(); ?>

	</div> <!-- /.all-products-section-wrapper -->
</div> <!-- /.all-products-section col-md-12 -->