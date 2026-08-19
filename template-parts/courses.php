<?php if( get_sub_field( 'include-courses' ) == 'Yes' ) :?>
<!-- Start Course Area -->
<section class="ep-course ep-course--style2 section-gap  position-relative">
    <div class="container ep-container">
        <div class="col-12">
            <div class="ep-section-head ep-section-head--style2">
                    <?php if(get_sub_field('course-heading')) : ?>
                    <h2 class="ep-section-head__color-title ep1-color ep1-border-color"><?php echo get_sub_field('course-heading'); ?></h2>
                    <?php endif; ?>
                <?php if(get_sub_field('course-text')) : ?>
                    <p class="ep-section-head__big-title ep-split-text left"><?php echo get_sub_field('course-text'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="ep-course__wrapper position-relative mg-top-30">
                    <div class="ep-course__cover-img">

                    <img src="<?php echo get_sub_field( 'course-image' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( 'course-image' )[ 'alt' ]; ?>">
                        
                    </div>
                    <div class="owl-carousel ep-course__slider">

                        <?php if(have_rows('course-details-items')):?>
                            <?php while(have_rows('course-details-items')): the_row(); ?>
                               <div class="ep-course__slider-item">
                                    <div class="ep-course__slider-content">
                                        
                                        <?php if(get_sub_field('course-details-item-heading')) : ?>
                                            <h3><?php echo get_sub_field('course-details-item-heading'); ?></h3>
                                        <?php endif; ?>
                                        
                                        <span class="ep-course__price"><?php echo get_sub_field('course-details-price'); ?> <del><?php echo get_sub_field('course-details-item-discount'); ?></del>
                                        </span>
                                        <?php if(get_sub_field('course-details-item-text')) : ?>
                                            <p class="ep-course__text"><?php echo get_sub_field('course-details-item-text'); ?></p>
                                        <?php endif; ?>
                                        <div class="ep-course__rattings">
                                            <ul>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                                <li><i class="icofont-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="ep-course__lesson">
                                            <div class="ep-course__student">
                                                <i class="fi fi-rs-book-alt"></i>
                                                <?php if(get_sub_field('course-first-icon-text')) : ?>
                                                    <p><?php echo get_sub_field('course-first-icon-text'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="ep-course__student">
                                                <i class="fi-rr-user"></i>
                                                <?php if(get_sub_field('course-first-icon-text')) : ?>
                                                    <p><?php echo get_sub_field('course-second-icon-text'); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="ep-course__student">
                                                <?php if(get_sub_field('course-details-item-ctabutton')) : ?>  
                                                    <a class="btn ep-btn ep5-bg" href="<?php echo get_sub_field('course-details-item-ctabutton')['url']; ?>" target="<?php echo get_sub_field('course-details-item-ctabutton')['target']; ?>" ><?php echo get_sub_field('course-details-item-ctabutton')['title']; ?><i class="fi fi-rs-arrow-small-right"></i></a>
                                                    <a href="#" class="enqbtn button ep-video__btn open-cf7-popup enquiry-now-btn shop-enquiry-btn">Enquiry Now</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End  Course Area -->
<?php endif; ?>