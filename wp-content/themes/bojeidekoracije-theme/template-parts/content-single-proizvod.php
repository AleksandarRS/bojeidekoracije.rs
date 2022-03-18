<?php
/**
 * Template part for displaying single posts.
 *
 * @package mwns
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
							<p><span><i class="icon icon-check-solid"></i> <?php _e('Ima na stanju','mwns') ?></span></p>
						</div>
					<?php else: ?>
						<div class="stocks-information">
							<p><span><i class="icon icon-times"></i> <?php _e('Nema na stanju','mwns') ?></span></p>
						</div>
					<?php endif; ?>

				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php echo $page_main_content_description; ?>

					<?php if( $order_product_option == true ): ?>
						<div class="single-page-button-wrap order-product-button">
							<a href="#order-form" id="order-product-button" class="button button-secondary"><?php _e('Naručite proizvod', 'mwns'); ?></a>
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
							<div class="row row-order-form col-md-12">
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
						
					</div> <!-- /.single-page-order-form-inner -->
				</div> <!-- /#order-form /.single-page-order-form-wrapper col-md-12 -->
			<?php endif; ?>


		</div>
	</div>
</article>