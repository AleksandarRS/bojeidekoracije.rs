<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starter
 */

get_header(); ?>
<div class="archive-section-wrapper">
    <div id="primary" class="content-area">
        <div class="archive-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 main-title-section-heading align-center">
                        <header class="entry-header">
                            <span class="title-label"><?php _e('Naši proizvodi', 'arteco') ?></span>
                            <h1 class="entry-title"><?php echo arteco_archive_title() ?></h1>
                            <div class="entry-content main-category-content">
                                <?php the_archive_description('<div class="taxonomy-description">', '</div>'); ?>
                            </div>
                        </header>
                    </div>
                    <div class="archive-sidebar-wrapper col-md-3">
                        <?php echo do_shortcode('[searchandfilter id="335"]'); ?>
                    </div>
                    <main id="main" class="archive-main-wrapper site-main col-md-9" role="main">
                    <?php
                                //  get_template_part('template-parts/content', 'product-cards');
                                echo do_shortcode('[searchandfilter id="335" show="results"]');
                                // echo do_shortcode('[custom-layout id="369"]');
                                ?>
                        <?php //if (have_posts()) : ?>
                            
                            <?php /* Start the Loop */ ?>
                            <?php  //while (have_posts()) : the_post(); ?>
                                
                            <?php // endwhile; ?>
                            <?php //arteco_post_navigation(); ?>
                        <?php //else : ?>
                            <?php //get_template_part('template-parts/content', 'none'); ?>
                        <?php // endif; ?>
                    </main><!-- #main -->
                </div>
            </div><!-- #primary -->
        </div><!-- .row -->
    </div><!-- .container -->
</div>
<?php get_footer(); ?>
