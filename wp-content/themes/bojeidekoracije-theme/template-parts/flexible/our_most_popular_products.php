<?php

$title_label = get_sub_field('title_label');
$main_title = get_sub_field('main_title');
$section_description = get_sub_field('section_description');
$link = get_sub_field('button_section');
?>
<section class="most-popular-products-section">
    <div class="most-popular-products-section-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 most-popular-products-description-part align-center">
                    <?php if ( $title_label || $main_title ) : ?>
                        <header class="entry-header">
                            <span class="title-label"><?php echo $title_label; ?></span>
                            <h1 class="entry-title"><?php echo $main_title; ?></h1>
                        </header>
                    <?php endif; ?>
                    <?php if ( $section_description ) : ?>
                        <div class="entry-content main-content">
                            <?php echo $section_description; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php  $choose_most_popular_products = get_sub_field('choose_most_popular_products');
                    if( $choose_most_popular_products ): ?>
                        <div class="col-md-12 most-popular-products-items most-popular-products-slider">
                            <?php foreach( $choose_most_popular_products as $post ): 
                                setup_postdata($post);
                                $slider_short_description = get_field('hero_short_description'); ?>
                                    
                                    <?php get_template_part( 'template-parts/content', 'products-card' ); ?>
                                
                            <?php endforeach; ?>
                        </div> <!-- /.products-slider-wrapper -->
                    <?php  wp_reset_postdata(); ?>
                <?php endif; ?>
                
                <?php
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="see-all-products-button-wrapper align-center col-md-12">
                        <a class="button button-secondary button-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="icon icon-arrow-right"></i></a>
                    </div>
                <?php endif; ?>

            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.most-popular-products-section-wrapper -->
</section>

