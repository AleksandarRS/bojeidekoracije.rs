<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starter
 */

get_header(); ?>

        <div id="primary" class="content-area projekat-archive">
            <main id="main" class="site-main" role="main">

                <?php if (have_posts()) : ?>

                    <header class="page-header">
                        <?php
                        echo arteco_archive_title('<h1 class="page-title">', '</h1>');
                        the_archive_description('<div class="taxonomy-description">', '</div>');
                        ?>
                    </header><!-- .page-header -->

                    <?php /* Start the Loop */ ?>
                    <div class="our-potfolio-projects-logos-items our-all-potfolio-projects-logos-items">
                        <?php while (have_posts()) : the_post(); ?>

                            <?php

                            /*
                            * Include the Post-Format-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                            */
                            // get_template_part('template-parts/content', get_post_format());
                            ?>
                            <?php get_template_part('template-parts/content', 'projekat'); ?>

                        <?php endwhile; ?>
                    </div>
                    <?php arteco_post_navigation(); ?>

                <?php else : ?>

                    <?php get_template_part('template-parts/content', 'none'); ?>

                <?php endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->

<?php get_footer(); ?>
