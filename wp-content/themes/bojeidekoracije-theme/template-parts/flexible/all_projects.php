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
                <?php
                    $args = array(
                        'post_type' 		=> 'projekat',
                        'posts_per_page'	=> -1
                    );
                    $queryall = new WP_Query( $args );
                ?>
                <?php if ( $queryall->have_posts() ) : ?>
                    <div class="col-md-12 all-projects-posts-items">
                        <div class="row">
                            <?php while ( $queryall->have_posts() ) : $queryall->the_post(); ?>
                                <div class="all-projects-posts-item our-potfolio-projects-item col-md-4">
                                    <div class="all-projects-posts-item-inner">
                                        <?php $portfolio_logo = get_field('portfolio_logo');
                                            // $project_excerpt = get_field('project_excerpt');
                                        ?>
                                        <a href="<?php the_permalink() ?>" class="our-potfolio-projects-link">
                                            <?php if( get_the_post_thumbnail() ): ?>
                                                <div class="our-potfolio-projects-featured-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                                </div>
                                            <?php else: ?>
                                                <div class="our-potfolio-projects-featured-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                                </div>
                                            <?php endif; ?>
                                            <div class="project-description-reference-logo-wrapper">
                                                <div class="project-description<?php if( !$portfolio_logo ): ?> no-logo<?php endif; ?>">
                                                    <header class="entry-header">
                                                        <h2 class="entry-title our-potfolio-projects-title">
                                                            <?php the_title(); ?>
                                                        </h2>
                                                        <?php //if( $project_excerpt ): ?>
                                                            <!-- <div class="entry-content portfolio-excerpt">
                                                                <?php // echo $project_excerpt; ?>
                                                            </div> -->
                                                        <?php //endif; ?>
                                                    </header>
                                                    <span class="link link-white link-arrow"><?php _e('Pogledajte projekat', 'arteco') ?> <i class="icon icon-arrow-right"></i></span>
                                                </div>
                                                <?php if( $portfolio_logo ): ?>
                                                    <div class="project-reference-logo">
                                                        <img src="<?php echo esc_url($portfolio_logo['url']); ?>" alt="<?php echo esc_attr($portfolio_logo['alt']); ?>" />
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div> <!-- /.row -->
        </div> <!-- /.container container -->
    </div> <!-- /.image-text-section-wrapper -->
</section>