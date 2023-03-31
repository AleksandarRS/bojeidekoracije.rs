<?php
$title_label = get_sub_field('title_label');
$main_title = get_sub_field('main_title');
$choose_image_text_postion = get_sub_field('choose_image_text_postion');

$add_main_content = get_sub_field('add_main_content');
$main_image = get_sub_field('add_main_image');

$add_page_link = get_sub_field('add_page_link');
?>
<section class="image-text-section<?php if ( $choose_image_text_postion == true ): ?> image-first-text-second<?php else: ?> text-first-image-second<?php endif; ?>">
    <div class="image-text-section-wrapper">
        <div class="container">
            <div class="row image-text-row">
                <?php if ( $main_image ) : ?>
                    <div class="col-md-6 image-text-section-main-image" style="background-image: url('<?php echo esc_url($main_image['url']); ?>')" rel="img" aria-label="<?php echo esc_attr($main_image['alt']); ?>">
                    </div>
                <?php endif; ?>
                <?php if ( $add_main_content || $add_page_link ) : ?>
                    <div class="col-md-6 image-text-section-main-text-content-description">
                        <div class="image-text-section-main-text-content-description-inner">
                        <?php if ( $title_label || $main_title ) : ?>
                            <header class="entry-header">
                                <span class="title-label"><?php echo $title_label; ?></span>
                                <h2 class="entry-title"><?php echo $main_title; ?></h2>
                            </header>
                        <?php endif; ?>
                            <?php echo $add_main_content; ?>
                        </div> <!-- /.image-text-section-main-image -->
                        <?php if ( $add_page_link ) : ?>
                            <div class="image-text-section-read-more-button-wrap read-more-button-wrap">
                                <a class="button button-secondary button-arrow" href="<?php echo $add_page_link; ?>"><?php _e('Saznaj više','arteco'); ?> <i class="icon icon-arrow-right"></i></a>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div> <!-- /.row -->
        </div> <!-- /.container container -->
    </div> <!-- /.image-text-section-wrapper -->
</section>