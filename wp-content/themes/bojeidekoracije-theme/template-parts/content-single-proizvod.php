<?php
/**
 * Template part for displaying single posts.
 *
 * @package arteco
 */

?>
<?php
$order_product_option = get_field('order_product_option');

$page_main_content_description = get_field('page_main_content_description');
// $product_description = get_field('product_description');
// $insert_your_price = get_field('insert_your_price');

$order_product_description = get_field('order_the_product_description');

$order_product_text_content = get_field('order_product_text_content', 'option');
$order_product_form_content = get_field('order_product_form_content', 'option');

$slider_or_text = get_field('slider_or_text');

$half_section_f = get_field('half_section_f');
$half_section_s = get_field('half_section_s');

$background_image = get_field('background_image');
$main_content = get_field('main_content');


?>

<div class="breadcrumbs-wrapper">
	<?php if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('
        <div class="site-content">
            <div class="container">
                <div class="full-width">
                <div id="breadcrumbs">', '</div>
                </div>
            </div>
        </div>
    ');
    } ?>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<div class="<?php if( have_rows('slider_images') ): ?>container-fluid<?php  else : ?>container<?php endif;?>">
		<div class="row row-single-page single-post-product-content-wrapper">
			<?php if( have_rows('slider_images') ): ?>
				<div class="single-page-main-slider-wrapper col-md-6">
					<div class="single-page-main-slider">
						<?php while ( have_rows('slider_images') ) : the_row(); ?>
							<?php $add_image = get_sub_field('add_image'); ?>
							<?php if( $add_image ): ?>
								<div class="single-page-img-wrap">
									<a class="featherlight-gallery-init" href="<?php echo esc_url($add_image['url']); ?>">
										<div class="single-page-img" style="background-image: url(<?php echo esc_url($add_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($add_image['alt']); ?>">
										</div>
									</a>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div> <!-- /.single-page-main-slider -->
					<div class="single-page-thumbnail-slider">
						<?php while ( have_rows('slider_images') ) : the_row(); ?>
							<?php $add_image = get_sub_field('add_image'); ?>
							<?php if( $add_image ): ?>
								<div class="single-page-thumbnail-wrap">
									<div class="single-page-thumbnail" style="background-image: url(<?php echo esc_url($add_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($add_image['alt']); ?>">
									</div>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div> <!-- /.single-page-thumbnail-slider -->
				</div>
			<?php endif;?>


			<div class="single-page-main-content single-page-entry-content<?php if( have_rows('slider_images') ): ?> col-md-6 right-calc<?php  else : ?> col-md-12<?php endif;?>">
				<header class="main-title-section-heading entry-header">
					<?php $term_list = wp_get_post_terms($post->ID, 'kategorija-proizvoda', ['fields' => 'all']);
						foreach($term_list as $term) {
							if( get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-proizvoda',true) == $term->term_id ) { ?>
								<span class="title-label"><?php print $term->name ; ?></span>
							<?php }
						}
					?>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<?php if( $order_product_option == true ): ?>
						<div class="stocks-information">
							<p><span><i class="icon icon-arrow-trend-up-solid"></i> <?php _e('Ima na stanju','arteco') ?></span></p>
						</div>
					<?php else: ?>
						<div class="stocks-information">
							<p><span><i class="icon icon-arrow-trend-down-solid"></i> <?php _e('Nema na stanju','arteco') ?></span></p>
						</div>
					<?php endif; ?>

				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php echo $page_main_content_description; ?>

					<?php if( $order_product_option == true ): ?>
						<div class="single-page-button-wrap order-product-button">
							<a href="#order-form" id="order-product-button" class="button button-secondary"><?php _e('Naručite proizvod', 'arteco'); ?></a>
						</div>
					<?php endif; ?>
					
				</div><!-- .entry-content -->
			</div> <!-- /.single-page-main-content single-page-entry-content col-md-6 -->

			<?php if( $order_product_option == true ): ?>
				<div id="order-form" class="single-page-order-form-wrapper col-md-12">
					<div class="single-page-order-form-inner">
						<div class="container">
							<div class="row">
								<div class="order-product-close col-md-12">
									<i class="icon icon-times order-product-close-button"></i>
								</div>
								<div class="col-md-12">
									<div class="row row-order-form">
										<?php if( $order_product_description ): ?>
											<div class="order-text-wrapper col-md-6">
												<?php echo $order_product_description; ?>
											</div>
										<?php else: ?>
											<div class="order-text-wrapper col-md-6">
												<?php echo $order_product_text_content; ?>
											</div>
										<?php endif; ?>
										<div class="col-md-6 order-form-wrapper">
											<?php echo $order_product_form_content; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div> <!-- /.single-page-order-form-inner -->
				</div> <!-- /#order-form /.single-page-order-form-wrapper col-md-12 -->
			<?php endif; ?>

			<?php if( $half_section_f || $half_section_s ): ?>
				<div class="single-half-section-wrapper col-md-12">
					<div class="single-half-section-inner<?php if( have_rows('slider_images_half') ): ?> half-slider-activated<?php endif;?>">
						<div class="container">
							<div class="row row-half-sectction">
								<?php if( $half_section_f ): ?>
									<div class="single-half-item col-md-6">
										<?php echo $half_section_f; ?>
									</div>
								<?php endif;?>
								
								<?php if( $half_section_s || get_field('slider_images_half') ): ?>
									<div class="single-half-item col-md-6">
										<?php if( $slider_or_text == true ): ?>
											<?php echo $half_section_s; ?>
										<?php else: ?>
											<?php if( have_rows('slider_images_half') ): ?>
												<div class="half-section-slider">
													<?php while ( have_rows('slider_images_half') ) : the_row(); ?>
														<?php
															$images_for_slider_half = get_sub_field('images_for_slider_half');
														?>
														<div class="half-section-slider-item">
														<!-- <div class="slider-half-image" style="background-image: url('<?php // echo esc_url($images_for_slider_half['url']); ?>')"></div> -->
															<img src="<?php echo esc_url($images_for_slider_half['url']); ?>" alt="<?php echo esc_attr($images_for_slider_half['alt']); ?>" />
														</div>
													<?php endwhile; ?>
												</div>
											<?php  else : ?>
												
											<?php endif;?>
										<?php endif;?>
										
									</div>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div> <!-- /.single-half-section-wrapper col-md-12 -->
			<?php endif;?>


			<?php if( $background_image && $main_content ): ?>
				</div> <!-- /.row row-single-page row row-single-page single-post-product-content-wrapper -->
			</div><!-- .container -->
			<div class="single-bg-img-section-wrapper">
				<div class="single-bg-img-section-inner" style="background-image: url('<?php echo esc_url($background_image['url']); ?>');" role="img" aria-label="<?php echo esc_attr($background_image['alt']); ?>">
					<div class="container">
						<div class="row row-bg-img-section">
							<?php if( $main_content ): ?>
								<div class="single-bg-img-item col-md-6">
									<div class="single-bg-img-item-inner">
										<?php echo $main_content; ?>
									</div>
								</div>
							<?php endif;?>
						</div>
					</div> <!-- .container -->
				</div>
			</div> <!-- /.single-bg-img-section-wrapper -->
			<div class="container">
				<div class="row row-single-page row row-single-page single-post-product-content-wrapper">
			<?php endif;?>

			<div class="all-products-section col-md-12">
    			<div class="all-products-section-wrapper">
                    <div class="main-title-section-heading button-heading-wrap col-md-12">
                        <header class="entry-header">
                            <span class="title-label"><?php _e('Proizvodi', 'arteco'); ?></span>
                            <h1 class="entry-title"><?php _e('Slični proizvodi', 'arteco'); ?></h1>
                        </header>
                    </div>
					
					<?php
						// get the custom post type's taxonomy terms

						$cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_kategorija-proizvoda',true);
				
						$args = array(
							'post_type' => 'proizvod',
							'post_status' => 'publish',
							'posts_per_page' => 4, // you may edit this number
							'orderby' => 'rand',
							'post__not_in' => array ( $post->ID ),
							'update_post_meta_cache' => false,
							'update_post_term_cache' => false,
							'ignore_sticky_posts' => true,
							'tax_query' => array(
								array(
									'taxonomy' => 'kategorija-proizvoda',
									'field' => 'id',
									'terms' => [$cat_id]
								)
							)
						);
						$related_items = new WP_Query( $args );
						// loop over query
						if ( $related_items->have_posts() ) : ?>
							
							<div class="product-cards-wrapper category-cards-wrapper col-md-12">
								<div class="row category-row">
						
									<?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
										<div class="col-md-3 item-wrapper">
										<?php get_template_part( 'template-parts/content', 'products-card' ); ?>
										</div>
									<?php endwhile; ?>
						
								</div>
							</div>

						<?php endif; ?>
					<?php wp_reset_query(); ?>

				</div>  <!-- /.all-products-section-wrapper -->
			</div>  <!-- /.all-products-section col-md-12 -->
		</div>
	</div>
</article>