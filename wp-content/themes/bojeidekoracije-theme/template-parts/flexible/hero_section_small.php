<?php
$main_hero_title = get_sub_field('main_hero_title');
// $hero_small_description = get_sub_field('hero_small_description');
$hero_image = get_sub_field('hero_image');
?>
<section class="hero-section hero-section-small">
    <div class="hero-section-small-media-wrap left-calc">
        <div class="hero-section-small-image-wrap" style="background-image: url(<?php echo esc_url($hero_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($hero_image['alt']); ?>">
            <div class="container">
                <div class="row image-text-row">
                    <div class="col-md-12 main-title-section-heading align-center">
                        <header>
                            <?php if ( $main_hero_title ) : ?>
                                <h1 class="main-hero-title main-title"><?php echo $main_hero_title; ?></h1>
                            <?php else: ?>
                                <h1 class="main-hero-title main-title"><?php the_title(); ?></h1>
                            <?php endif; ?>
                            <?php // if ( $hero_small_description ) : ?>
                                <div class="col-md-12 main-hero-description align-center">
                                    <?php // echo $hero_small_description; ?>
                                    <?php the_excerpt(); ?>
                                </div>
                            <?php // endif; ?>
                        </header>
                    </div>
                    
                </div>
            </div>
            <div class="hero-section-small-image-wrap-inner">
            </div> <!-- /.hero-section-image-wrap-inner -->
        </div> <!-- /.hero-section-image-wrap -->
    </div> <!-- /.hero-section-media-wrap -->
</section>