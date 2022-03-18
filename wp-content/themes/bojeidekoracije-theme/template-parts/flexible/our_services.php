<?php

$title_label = get_sub_field('title_label');
$main_title = get_sub_field('main_title');
$section_description = get_sub_field('section_description');
$link = get_sub_field('button_section');
?>
<section class="our-services-section">
    <div class="our-services-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 our-services-content-part align-center">
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

                <?php
                    $args = array(
                        'post_type'      => 'page', //write slug of post type
                        'posts_per_page' => -1,
                        'post_parent'    => '16', //place here id of your parent page
                        'order'          => 'ASC',
                        'orderby'        => 'menu_order'
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) : ?>
                        <div class="our-services-children-items col-md-12">
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="our-services-children-item" id="child-<?php the_ID(); ?>">
                                    <a href="<?php the_permalink(); ?>" class="child-page-link">
                                        <?php if( get_the_post_thumbnail() ): ?>
                                            <div class="our-services-children-page-featured-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                            </div>
                                        <?php else: ?>
                                            <div class="our-services-children-page-featured-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                            </div>
                                        <?php endif; ?>
                                        <header class="entry-header our-services-header">
                                            <span class="title-label"><?php _e('Naše usluge', 'arteco') ?></span>
                                            <h2 class="entry-title"><?php the_title(); ?></h2>
                                            <span class="link link-white link-arrow"><?php _e('Pogledajte uslugu', 'arteco') ?><i class="icon icon-arrow-right"></i></span>
                                        </header>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                            
                        </div>
                    <?php endif;
                    wp_reset_query();
                ?>

                

                <div class="see-all-products-button-wrapper align-center col-md-12">
                    <?php
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button button-secondary button-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="icon icon-arrow-right"></i></a>
                    <?php endif; ?>
                </div>

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.most-popular-products-section-wrapper -->
</section>

