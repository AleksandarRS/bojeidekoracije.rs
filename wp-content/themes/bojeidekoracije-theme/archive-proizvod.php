<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package arteco
 */

get_header(); ?>

<?php
    // $term = get_queried_object();
    // $image = get_field('category_image', $term);
    // $short_category_description = get_field('short_category_description', $term);
    $main_title = get_field('main_title', 'option');
    $image = get_field('hero_image', 'option');
    $short_description = get_field('short_description', 'option');

    $products_content_label = get_field('products_content_label', 'option');
    $products_content_title = get_field('products_content_title', 'option');
?>

<section class="hero-section hero-section-small">
    <div class="hero-section-small-media-wrap">
        
        <div class="hero-section-small-image-wrap" style="background-image: url(<?php echo $image; ?>)">
            <div class="main-title-section-heading">
                <header class="entry-header page-header align-center">
                    <?php if( $main_title): ?>
                        <h1 class="page-title main-hero-title main-title"><?php echo $main_title; ?></h1>
                    <?php else:?>
                        <?php echo arteco_archive_title('<h1 class="page-title main-hero-title main-title">', '</h1>'); ?>
                    <?php endif;?>
                    <div class="col-md-12 main-hero-description align-center">
                        <?php echo $short_description; ?>
                    </div>
                </header><!-- .entry-header page-header align-center -->
            </div> <!-- /.main-title-section-heading -->
        </div> <!-- /.hero-section-small-image-wrap -->
    </div> <!-- /.hero-section-small-media-wrap -->
</section>
<div class="breadcrumbs-wrapper">
<?php if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('
        <div class="site-content">
            <div class="container">
                <div class="full-width">
                <div id="breadcrumbs">', '</div>
                </div>
            </div>
        </div>
    ');
    } ?>
</div>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area col-md-12">
            <main id="main" class="site-main " role="main">
                <?php if (have_posts()) : ?>
                    <section class="page-children-section">
                        <div class="archive-products-wrapper">
                            <?php if( $main_title): ?>
                                <header class="entry-header page-header main-title-section-heading">
                                    <span class="title-label"><?php echo $products_content_label; ?></span>
                                    <h1 class="entry-title"><?php echo $products_content_title; ?></h1>
                                </header><!-- .entry-header page-header main-title-section-heading -->
                            <?php endif;?>
                            
                            <?php /* Start the Loop */ ?>
                            <?php $terms = get_terms( array( 
                                    'taxonomy' => 'kategorija-proizvoda',
                                    'parent'   => 0
                                ) );
                                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
                                    <div class="product-cards-wrapper category-cards-wrapper col-md-12">
                                        <div class="row category-row main-page-children-items">
                                            <?php foreach ( $terms as $term ) { ?>
                                                <div class="main-page-children-item product-card-item category-card-item">
                                                    <a class="category-card-link child-page-link" href="<?php echo get_term_link($term->term_id); ?>">
                                                        <?php if ( ! empty( get_field('category_image', $term) ) ) { ?>
                                                            <div class="term-featured-image" style="background-image: url('<?php the_field('category_image', $term); ?>')">
                                                                <div class="child-page-card">
                                                                    <div class="child-page-card-header-link-wrap">
                                                                        <h2 class="child-page-title"><?php echo $term->name; ?></h2>
                                                                        <span class="link link-white link-arrow"><?php _e('Pogledajte uslugu', 'arteco') ?><i class="icon icon-arrow-right"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="term-featured-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg')">
                                                                <div class="child-page-card">
                                                                    <div class="child-page-card-header-link-wrap">
                                                                        <h2 class="child-page-title"><?php echo $term->name; ?></h2>
                                                                        <span class="link link-white link-arrow"><?php _e('Pogledajte uslugu', 'arteco') ?><i class="icon icon-arrow-right"></i></span>
                                                                    </div>
                                                                </div>    
                                                            </div>
                                                        <?php } ?>
                                                    </a>
                                                </div>
                                            <?php  } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div> <!-- /.archive-products-wrapper -->
                        <?php else : ?>
                            <?php get_template_part('template-parts/content', 'none'); ?>
                    </section>
                <?php endif; ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
