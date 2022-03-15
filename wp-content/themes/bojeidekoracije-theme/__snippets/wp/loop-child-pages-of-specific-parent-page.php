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
        <?php while ( $childrens->have_posts() ) : $childrens->the_post(); ?>
            <div class="children" id="child-<?php the_ID(); ?>">
            <a href="<?php the_permalink(); ?>" class="child-page-link">    
                <h2><?php the_title(); ?></h2>
                <span class="link link-white link-arrow"><?php _e('Pogledajte uslugu', 'arteco') ?><i class="icon icon-arrow-right"></i></span>
            </a>
            </div>
        <?php endwhile;
    endif;
    wp_reset_query();
?>