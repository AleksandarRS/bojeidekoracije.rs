<?php
    $title_label = get_sub_field('title_label');
    $main_title = get_sub_field('main_title');
    $contact_details_description = get_sub_field('contact_details_description');

    $title = get_field('title', 'option');
    $phone_number = get_field('phone_number', 'option');
    $email = get_field('email', 'option');
    $title_s = get_field('title_s', 'option');
    $phone_number_s = get_field('phone_number_s', 'option');
    $phone_number_tr = get_field('phone_number_tr', 'option');
    $email_s = get_field('email_cs', 'option');

    $lokacija = get_field('lokacija', 'option');
    $link_mapa_lokacija = get_field('link_mapa_lokacija', 'option');

    $contact_label = get_field('contact_label', 'option');
    $contact_title = get_field('contact_title', 'option');
    $contact_section_text_description = get_field('contact_section_text_description', 'option');
    $contact_form_section = get_field('contact_form_section', 'option');
?>
<section class="two-column-section">
    <div class="two-column-section-wrapper">
        <div class="container">
            <div class="row two-column-row">
                
                    <div class="col-md-12 main-title-section-heading align-center">
                        <header class="entry-header">
                            <?php if ( $title_label ) : ?>
                                <span class="title-label"><?php echo $title_label; ?></span>
                            <?php else: ?>
                                <span class="title-label"><?php echo $contact_label; ?></span>
                            <?php endif; ?>
                            <?php if ( $main_title ) : ?>
                                <h2 class="entry-title"><?php echo $main_title; ?></h2>
                            <?php else: ?>
                                <h2 class="entry-title"><?php echo $contact_title; ?></h2>
                            <?php endif; ?>
                        </header>
                    </div>
                
                    <div class="col-md-6 main-content-section">
                        <?php if ( $title ) : ?>
                            <div class="contact-ddetails-title-wrap">
                                <h3 class="contact-details-title"><?php echo $title; ?></h3>
                            </div>
                        <?php endif; ?>
                        <?php if ( $phone_number || $email ) : ?>
                            <div class="contact-details-phone-email-wrapper">
                                <?php if ( $phone_number ) : ?>
                                    <div class="contact-details-phone">
                                        <i class="icon icon-phone"></i>
                                        <a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $email ) : ?>
                                    <div class="contact-details-email">
                                        <i class="icon icon-envelope"></i>
                                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $email ) : ?>
                                    <div class="contact-details-location">
                                        <i class="icon icon-map-marker-alt"></i>
                                        <a href="<?php echo $link_mapa_lokacija; ?>" target="_blank"><?php echo $lokacija; ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( $title_s ) : ?>
                            <div class="contact-ddetails-title-wrap">
                                <h3 class="contact-details-title"><?php echo $title_s; ?></h3>
                            </div>
                        <?php endif; ?>
                        <?php if ( $phone_number_s || $phone_number_tr || $email_s ) : ?>
                            <div class="contact-details-phone-email-wrapper">
                                <?php if ( $phone_number_s ) : ?>
                                    <div class="contact-details-phone">
                                        <i class="icon icon-phone"></i>
                                        <a href="tel:<?php echo $phone_number_s; ?>"><?php echo $phone_number_s; ?></a>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $phone_number_tr ) : ?>
                                    <div class="contact-details-phone">
                                        <i class="icon icon-phone"></i>
                                        <a href="tel:<?php echo $phone_number_tr; ?>"><?php echo $phone_number_tr; ?></a>
                                    </div>
                                <?php endif; ?>
                                <?php if ( $email_s ) : ?>
                                    <div class="contact-details-email">
                                        <i class="icon icon-envelope"></i>
                                        <a href="mailto:<?php echo $email_s; ?>"><?php echo $email_s; ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ( $contact_details_description ) : ?>
                                <div class="theme-contact-details-text-wrapper">
                                    <?php echo $contact_details_description; ?>
                                </div>
                            <?php else: ?>
                                <div class="theme-contact-details-text-wrapper">
                                    <?php echo $contact_section_text_description; ?>
                                </div>
                        <?php endif; ?>
                    </div>
                
                
                    <div class="col-md-6 main-content-section">
                        <?php if ( $contact_form_section ) : ?>
                            <?php echo $contact_form_section; ?>
                        <?php endif; ?>
                    </div>
                
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.two-column-section-wrapper -->
</section> <!-- /.two-column-section -->