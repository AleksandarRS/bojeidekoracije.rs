<section class="latest-posts-section">
    <div class="latest-posts-section-wrapper">
        <div class="container">
            <div class="row latest-posts-row latest-posts-items">
                <div class="col-md-12">
                    <header class="entry-header">
                        <h1 class="entry-title"><?php _e('Blog', 'arteco') ?></h1>
                    </header>
                </div>
                <?php
                    $args = array(
                        'post_type' 		=> 'post',
                        'posts_per_page'	=> 4
                    );
                    $query = new WP_Query( $args );
                ?>
                <?php if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="latest-posts-item col-md-3">
                            <div class="latest-posts-item-inner">
                                    <a href="<?php the_permalink() ?>" class="latest-posts-item-link">
                                        <?php if( get_the_post_thumbnail() ): ?>
                                            <div class="latest-posts-item-featured-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                            </div>
                                        <?php else: ?>
                                            <div class="latest-posts-item-featured-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                            </div>
                                        <?php endif; ?>
                                        <div class="latest-posts-main-content-wrapper">
                                            <div class="latest-posts-description">
                                                <header class="entry-header">
                                                    <h2 class="entry-title latest-posts-item-title">
                                                        <?php the_title(); ?>
                                                    </h2>
                                                    <div class="entry-content latest-posts-item-excerpt">
                                                        <?php the_excerpt(); ?>
                                                    </div>
                                                </header>
                                                <span class="link link-primary link-arrow"><?php _e('Pogledajte projekat', 'arteco') ?> <i class="icon icon-arrow-right"></i></span>
                                            </div>
                                        </div>
                                    </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div> <!-- /.row -->
        </div> <!-- /.container container -->
    </div> <!-- /.image-text-section-wrapper -->
</section>