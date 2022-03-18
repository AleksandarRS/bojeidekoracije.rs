<?php

// $link = get_sub_field('see_all_posts_link');
// $choose_most_popular_products = get_sub_field('choose_most_popular_products');

?>
<section class="products-slider-section">
    <div class="products-slider-section-wrapper">
        <div class="container-wide-full">
                <?php  $featured_products_posts = get_sub_field('choose_slider_products');
                if( $featured_products_posts ): ?>
                    <div class="products-slider-wrapper">
                        <?php foreach( $featured_products_posts as $post ): 
                            setup_postdata($post); 
                            $slider_short_description = get_field('hero_short_description'); ?>
                            <div class="products-slider-item">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 product-hero-image-section">
                                            <?php if( get_the_post_thumbnail() ): ?>
                                                <div class="products-featured-img-wrap" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                                </div>
                                            <?php else: ?>
                                                <div class="products-featured-img-wrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-md-6 product-hero-text-description-section">
                                            <div class="products-heading-excerpt-wrap">
                                                <header class="products-title entry-header">
                                                    <span class="title-label">
                                                        <?php 
                                                        $terms = get_the_terms($post->ID, 'kategorija-proizvoda');
                                                            if ($terms) {
                                                                $out = array();
                                                                foreach ($terms as $term) {
                                                                    $out[] = '<a class="' .$term->slug .'" href="' .get_term_link( $term->slug, 'kategorija-proizvoda') .'">' .$term->name .'</a>';
                                                                }
                                                                echo join( ', ', $out );
                                                        } 
                                                        ?>
                                                    </span>
                                                    <h2 class="entry-title"><?php the_title(); ?></h2>
                                                    <?php
                                                        $my_excerpt = get_the_excerpt();
                                                        if($my_excerpt !='') { ?>
                                                        <div class="products-description entry-content">
                                                            <?php the_excerpt(); ?>
                                                        </div>
                                                    <?php } ?>
                                                </header>
                                                <span class="products-product-read-more read-more-button-wrap button-wrap">
                                                    <a href="<?php the_permalink(); ?>" class="button button-secondary button-arrow"><span><?php _e('Pročitaj više','arteco'); ?> <i class="icon icon-arrow-right"></i></span></a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="slick-slider-dots">
                                    <?php if( get_the_post_thumbnail() ): ?>
                                        <div class="products-featured-thumbnail" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                            <p class="pagination-title"><span><?php the_title(); ?></span></p>
                                        </div>
                                    <?php else: ?>
                                        <div class="products-featured-thumbnail" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                            <p class="pagination-title"><span><?php the_title(); ?></span></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div> <!-- /.products-slider-item -->
                            
                        <?php endforeach; ?>
                        
                    </div> <!-- /.products-slider-wrapper -->
                    
                        <?php 
                        // Reset the global post object so that the rest of the page works correctly.
                        wp_reset_postdata(); ?>
                <?php endif; ?>

        
        </div> <!-- /.container-wide -->
    </div> <!-- /.products-slider-section-wrapper -->
</section>

