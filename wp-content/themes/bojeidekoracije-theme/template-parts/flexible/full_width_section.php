<?php
$title_label = get_sub_field('title_label');
$main_title = get_sub_field('main_title');
$main_content = get_sub_field('main_content');
?>
<section class="full-width-section">
    <div class="full-width-section-wrapper">
        <div class="container">
            <div class="row full-width-row">
                <?php if ( $title_label || $main_title ) : ?>
                    <div class="col-md-12 main-title-section-heading align-center">
                        <header class="entry-header">
                            <span class="title-label"><?php echo $title_label; ?></span>
                            <h1 class="entry-title"><?php echo $main_title; ?></h1>
                        </header>
                    </div>
                <?php endif; ?>
                <?php if ( $main_content ) : ?>
                    <div class="col-md-12 main-content-section">
                        <?php echo $main_content; ?>
                    </div>
                <?php endif; ?>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.full-width-section-wrapper -->
</section> <!-- /.full-width-section -->