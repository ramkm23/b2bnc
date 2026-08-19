<?php if( get_sub_field( 'include-2column-section' ) == 'Yes' ) :?>
<!-- Start Course Details Area -->
    <section class="ep-course__details section-gap position-relative">
        <div class="container ep-container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 col-12">
                    <div class="ep-course__sidebar-data">
                        <div class="row">
                            <div class="col-12">
                                <?php if(!empty(get_sub_field('2column-section-left-text'))): ?>
                                    <p><?php echo get_sub_field('2column-section-left-text'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-4 col-md-8 col-12">
                    <div class="ep-course__sidebar-data-list">
                        <?php if(!empty(get_sub_field('2column-section-right-images'))): ?>
                            <div class="image">
                                <img src="<?php echo get_sub_field( '2column-section-right-images' )[ 'url' ]; ?>" class="text-images igure-img img-fluid"   alt="<?php echo get_sub_field( '2column-section-right-images' )[ 'alt' ]; ?>">         
                            </div>
                        <?php endif; ?>
                    </div>    
                    <div class="ep-course__sidebar">
                        <?php $bg = get_sub_field('2column-section-right-video-thumbnail'); ?>
                        <div class="ep-video__bg background-image position-relative" 
                            style="background-image: url('<?php echo esc_url($bg['url']); ?>');">
                            <a
                                href="https://www.youtube.com/watch?v=<?php echo get_sub_field('2column-section-right-youtube-video-id'); ?>"
                                class="ep-video__btn popup-video">
                                <i class="fi fi-sr-play"></i>
                            </a>
                        </div>
                        <div class="ep-course__sidebar-data">
                             <?php if(get_sub_field( '2column-section-right-course-heading' )) : ?>
                                <h4 class="ep-course__sidebar-title"><?php echo get_sub_field( '2column-section-right-course-heading' ); ?></h4>
                            <?php endif; ?>                             
                            <ul class="ep-course__sidebar-data-list">
                                <?php if(have_rows('2column-section-right-course-items')):?>
                                    <?php while(have_rows('2column-section-right-course-items')): the_row(); ?>
                                        <li>
                                            <span><?php echo get_sub_field( '2column-section-right-course-items-heading' ); ?></span>
                                            <strong style="font-size: 0.9rem;"><?php echo get_sub_field( '2column-section-right-course-items-text' ); ?></strong>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>                                 
                                
                            </ul>
                            <div class="ep-course__student">
                                <?php if(get_sub_field( '2column-section-right-course-items-button' )) : ?>  
                                    <a class="btn ep-btn ep5-bg" href="<?php echo get_sub_field( '2column-section-right-course-items-button' )['url']; ?>" target="<?php echo get_sub_field('2column-section-right-course-items-button')['target']; ?>" ><?php echo get_sub_field('2column-section-right-course-items-button')['title']; ?><i class="fi fi-rs-arrow-small-right"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Course Details Area -->
<?php endif;?>
