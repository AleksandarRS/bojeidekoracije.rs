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
                        <?php get_template_part( 'template-parts/content', 'blog-posts' ); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div> <!-- /.row -->
        </div> <!-- /.container container -->
    </div> <!-- /.image-text-section-wrapper -->
</section>