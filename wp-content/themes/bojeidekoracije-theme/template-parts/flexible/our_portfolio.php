<?php

$title_label = get_sub_field('title_label');
$main_title = get_sub_field('main_title');
$section_description = get_sub_field('section_description');
$link = get_sub_field('button_section');
?>
<section class="our-potfolio-projects-section">
    <div class="our-potfolio-projects-section-wrapper">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-12 our-potfolio-projects-description-part align-center">
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

                <?php  $choose_favorite_projects = get_sub_field('choose_favorite_projects');
                    if( $choose_favorite_projects ): ?>
                        <div class="col-md-12 our-potfolio-projects-logos-items our-potfolio-projects-logos-slider">
                                <?php foreach( $choose_favorite_projects as $post ): 
                                    setup_postdata($post);
                                    $portfolio_logo = get_field('portfolio_logo');
                                    $project_excerpt = get_field('project_excerpt'); ?>
                                        <div class="our-potfolio-projects-item">
                                            <a href="<?php the_permalink() ?>" class="our-potfolio-projects-link">
                                                <?php if( get_the_post_thumbnail() ): ?>
                                                    <div class="our-potfolio-projects-featured-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                                    </div>
                                                <?php else: ?>
                                                    <div class="our-potfolio-projects-featured-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="project-description-reference-logo-wrapper">
                                                    <div class="project-description">
                                                        <header class="entry-header">
                                                            <h2 class="entry-title our-potfolio-projects-title">
                                                                <?php the_title(); ?>
                                                            </h2>
                                                            <?php if( $project_excerpt ): ?>
                                                                <div class="entry-content portfolio-excerpt">
                                                                    <?php echo $project_excerpt; ?>
                                                                </div>
                                                            <?php endif; ?>
                                                        </header>
                                                        <span class="link link-white link-arrow"><?php _e('Pogledajte projekat', 'arteco') ?> <i class="icon icon-arrow-right"></i></span>
                                                    </div>
                                                    <div class="project-reference-logo">
                                                        <img src="<?php echo esc_url($portfolio_logo['url']); ?>" alt="<?php echo esc_attr($portfolio_logo['alt']); ?>" />
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="slick-slider-dots-projects"></div>
                                        </div> <!-- /.our-potfolio-projects-item -->
                                <?php endforeach; ?>
                        </div> <!-- /.col-md-8 our-potfolio-projects-logos-items our-potfolio-projects-logos-slider -->
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                <div class="see-all-projects-button-wrapper align-center col-md-12">
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
        </div> <!-- /.container-fluid -->
    </div> <!-- /.our-potfolio-projects-section-wrapper -->
</section>

