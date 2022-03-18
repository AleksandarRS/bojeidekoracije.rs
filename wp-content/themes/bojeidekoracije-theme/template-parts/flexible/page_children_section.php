<?php
$title_label = get_sub_field('title_label');
$main_title = get_sub_field('main_title');
// $main_content = get_sub_field('main_content');
?>
<section class="page-children-section">
    <div class="page-children-section-wrapper">
        <div class="container">
            <div class="row page-children-row">
                <?php if ( $title_label || $main_title ) : ?>
                    <div class="col-md-12 main-title-section-heading align-center">
                        <header class="entry-header">
                            <span class="title-label"><?php echo $title_label; ?></span>
                            <h1 class="entry-title"><?php echo $main_title; ?></h1>
                        </header>
                    </div>
                <?php endif; ?>
                <div class="col-md-12 main-content-section">
                    <?php 
                       $args = array(
                        'post_type'      => 'page', //write slug of post type
                        'posts_per_page' => -1,
                        'post_parent'    => '16', //place here id of your parent page
                        'order'          => 'ASC',
                        'orderby'        => 'menu_order'
                    );
                    $childrens = new WP_Query( $args );
                    if ( $childrens->have_posts() ) : ?>
                        <div class="main-page-children-items row">
                            <?php while ( $childrens->have_posts() ) : $childrens->the_post(); ?>
                                <div class="main-page-children-item" id="child-<?php the_ID(); ?>">
                                    <a href="<?php the_permalink(); ?>" class="child-page-link">
                                        <div class="child-page-card" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                                            <div class="child-page-card-header-link-wrap">
                                                <h2 class="child-page-title"><?php the_title(); ?></h2>
                                                <span class="link link-white link-arrow"><?php _e('Pogledajte uslugu', 'arteco') ?><i class="icon icon-arrow-right"></i></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php  endif;
                    
                    wp_reset_query();
                    ?>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.page-children-section-wrapper -->
</section> <!-- /.page-children-section -->