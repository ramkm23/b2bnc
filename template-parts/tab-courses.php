<?php if( get_sub_field( 'include-tab-courses' ) == 'Yes' ) :?>
<!-- Start Course Details Area -->
    <section class="ep-course__details section-gap position-relative">
        <div class="container ep-container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 col-12">
                    <div class="ep-course__details-tab">
                        <div class="row">
                            <div class="col-12">
                                <!-- Tab Menu -->

                                <div class="ep-course__tab-menu tab-menu">
                                    <div class="list-group " id="list-tab" role="tablist">


                                        <?php if(have_rows('tab-menu-list')):?>
                                            <?php while(have_rows('tab-menu-list')): the_row(); ?>
                                                <a class="list-group-item d-flex align-items-center" data-bs-toggle="list" href="#<?php echo get_sub_field('tab-slug'); ?>" role="tab">
                                                    <?php echo get_sub_field('tab-menu'); ?>
                                                </a>
                                            <?php endwhile; ?>
                                        <?php endif; ?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <!-- Tab Details -->
                                <div class="ep-course__tab-details tab-details">
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- Overview -->

                                        <?php if(have_rows('tab-menu-list')):?>
                                            <?php while(have_rows('tab-menu-list')): the_row(); ?>
                                                <div class="tab-pane fade show" id="<?php echo get_sub_field('tab-slug'); ?>" role="tabpanel">
                                                    <div class="ep-course__overview">
                                                        <div class="ep-course__overview-widget">
                                                            <?php if(get_sub_field('tab-menu-item-heading')) : ?>
                                                                <h3 class="ep-course__overview-title"><?php echo get_sub_field('tab-menu-item-heading'); ?></h3>
                                                            <?php endif; ?> 
                                                            <?php if(get_sub_field('tab-menu-item-text')) : ?>
                                                                <?php echo get_sub_field('tab-menu-item-text'); ?>
                                                            <?php endif; ?> 
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>  
                                    </div>
                                </div>
                                <!-- End Tab Details -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-4 col-md-8 col-12">

                    <div class="ep-course__sidebar-data-list">
                        <?php if(!empty(get_sub_field('right-image'))): ?>
                            <div class="image">
                                <img src="<?php echo get_sub_field( 'right-image' )[ 'url' ]; ?>" class="text-images igure-img img-fluid"   alt="<?php echo get_sub_field( 'right-image' )[ 'alt' ]; ?>">         
                            </div>
                        <?php endif; ?>
                    </div> 
                    <div class="ep-course__sidebar">
                    
                        <?php $bg = get_sub_field('right-video-thumbnail'); ?>
                        <div class="ep-video__bg background-image position-relative" 
                            style="background-image: url('<?php echo esc_url($bg['url']); ?>');">
                            <a
                                href="https://www.youtube.com/watch?v=<?php echo get_sub_field('right-youtube-video-id'); ?>"
                                class="ep-video__btn popup-video">
                                <i class="fi fi-sr-play"></i>
                            </a>
                        </div>
                        <div class="ep-course__sidebar-data">
                             <?php if(get_sub_field( 'right-course-heading' )) : ?>
                                <h4 class="ep-course__sidebar-title"><?php echo get_sub_field( 'right-course-heading' ); ?></h4>
                            <?php endif; ?>                             
                            <ul class="ep-course__sidebar-data-list">
                                <?php if(have_rows('right-course-items')):?>
                                    <?php while(have_rows('right-course-items')): the_row(); ?>
                                        <li>
                                            <span><?php echo get_sub_field('right-course-items-heading'); ?></span>
                                            <strong style="font-size: 0.9rem;"><?php echo get_sub_field('right-course-items-text'); ?></strong>
                                        </li>
                                    <?php endwhile; ?>
                                <?php endif; ?>                                 
                                
                            </ul>
                            <div class="ep-course__student">
                                <?php if(get_sub_field('right-course-items-button')) : ?>  
                                    <a class="btn ep-btn ep5-bg" href="<?php echo get_sub_field('right-course-items-button')['url']; ?>" target="<?php echo get_sub_field('right-course-items-button')['target']; ?>" ><?php echo get_sub_field('right-course-items-button')['title']; ?><i class="fi fi-rs-arrow-small-right"></i></a>
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



<script>
document.addEventListener('DOMContentLoaded', function () {
    const menuLinks = document.querySelectorAll('.list-group-item');
    const tabPanes  = document.querySelectorAll('.tab-pane');

    if (menuLinks.length > 0) {
        menuLinks[0].classList.add('active');
        menuLinks[0].setAttribute('aria-selected', 'true');
    }

    if (tabPanes.length > 0) {
        tabPanes[0].classList.add('active', 'show');
    }
});
</script>
