<?php
$title_label = get_sub_field('title_label');
$main_title = get_sub_field('main_title');
$add_sidebar_filter_shortcode = get_sub_field('add_sidebar_filter_shortcode');
$add_filter_results_shortcode = get_sub_field('add_filter_results_shortcode');
?>
<section class="filter-section">
    <div class="filter-section-wrapper">
        
        <div class="container">
            <div class="row filter-row">
                <?php if ( $title_label || $main_title ) : ?>
                    <div class="col-md-12 main-title-section-heading align-center">
                        <header class="entry-header">
                            <span class="title-label"><?php echo $title_label; ?></span>
                            <h1 class="entry-title"><?php echo $main_title; ?></h1>
                        </header>
                    </div>
                <?php endif; ?>
                <?php if ( $add_sidebar_filter_shortcode ) : ?>
                    <div class="col-md-4 sidebar-shortcode-section filter-section-list filter-pro-content">
                        <?php echo $add_sidebar_filter_shortcode; ?>
                    </div>
                <?php endif; ?>
                <?php if ( $add_filter_results_shortcode ) : ?>
                    <div class="col-md-8 main-shortcode-section filter-section-content filter-pro-content">
                        <?php echo $add_filter_results_shortcode; ?>
                    </div>
                <?php endif; ?>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.filter-section-wrapper -->
</section> <!-- /.filter-section -->