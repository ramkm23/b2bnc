<?php if( get_sub_field( 'include-faqs' ) == 'Yes' ) :?>
<!-- Start Faq Area -->
<section
    class="ep-faq ep-faq--style2 section-gap position-relative">
    <div class="ep-faq__pattern-3 updown-ani">
    <img src="<?php echo get_sub_field( 'faqs-right-image' )[ 'url' ]; ?>"  alt="<?php echo get_sub_field( 'faqs-right-image' )[ 'alt' ]; ?>">
    </div>
    <div class="container ep-container">
    <div class="row">
        <div class="col-12">
        <div class="ep-section-head ep-section-head--style2">
            <?php if(get_sub_field('faqs-left-heading')) : ?>
                <h2 class="ep-section-head__color-title ep7-color ep7-border-color"><?php echo get_sub_field('faqs-left-heading'); ?></h2>
            <?php endif; ?>
        </div>
        </div>
    </div>
    <div class="row g-0 align-items-center">
        <div class="col-lg-6 col-12">
        <div class="ep-faq__img">

        <img src="<?php echo get_sub_field( 'faqs-left-image' )[ 'url' ]; ?>"  alt="<?php echo get_sub_field( 'faqs-left-image' )[ 'alt' ]; ?>">
            
        </div>
        </div>
        <div class="col-lg-6 col-12">
        <div class="ep-faq__content">
            <div class="ep-section-head">
            <?php if(get_sub_field('faqs-text')) : ?>
                <h3 class="ep-section-head__big-title fs-28 ep-split-text left"><?php echo get_sub_field('faqs-text'); ?></h3>
            <?php endif; ?>
            </div>
            <div
            class="ep-faq__accordion faq-inner accordion"
            id="accordionExample">
            <?php $contactform = do_shortcode(get_sub_field('faq-shortcode')); ?>
            <?php echo $contactform; ?>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- End Faq Area -->



<?php endif; ?>



