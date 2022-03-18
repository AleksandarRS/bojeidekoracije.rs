<?php
$title_label = get_sub_field('title_label');
$main_title = get_sub_field('main_title');
?>

<section class="all-projects-posts-section">
    <div class="all-projects-posts-section-wrapper">
        <div class="container">
            <div class="row">
                <?php if ( $title_label || $main_title ) : ?>
                    <div class="col-md-12 main-title-section-heading align-center">
                        <header class="entry-header">
                            <span class="title-label"><?php echo $title_label; ?></span>
                            <h1 class="entry-title"><?php echo $main_title; ?></h1>
                        </header>
                    </div>
                <?php endif; ?>
                <div class="all-projects-related-to-taxomony col-md-12">
                    <?php 
                        // get posts
                        $topics = get_sub_field('projects_items');
                        if ($topics) {
                        if (!is_array($topics)) {
                            $topics = array($topics);
                        }
                        $args = array(
                            'post_type' => 'projekat',
                            'posts_per_page' => -1,
                            'orderby' => 'rand',
                            'tax_query' => array(
                            array(
                                'taxonomy' => 'kategorija-projekta',
                                'terms' => $topics,
                            ),
                            ),
                        );
                        $quote_query = new WP_Query($args);
                        if ($quote_query->have_posts()) { ?>
                            <div class="our-potfolio-projects-logos-items all-projects-related-to-taxomony-our-potfolio-projects-logos-items row">
                                <?php while($quote_query->have_posts()) {
                                $quote_query->the_post(); ?>
                                    <?php get_template_part( 'template-parts/content', 'project-card' ); ?>
                                <?php } ?>
                            </div>
                        <?php }
                        wp_reset_postdata();
                    } ?>
						
				</div>
            </div> <!-- /.row -->
        </div> <!-- /.container container -->
    </div> <!-- /.image-text-section-wrapper -->
</section>