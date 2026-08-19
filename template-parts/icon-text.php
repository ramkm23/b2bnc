
<?php if( get_sub_field( 'include-icon-text') == 'Yes' ): ?>
    <section class="icon-text-section">
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-sm-12 text-center">
                    <?php if(!empty(get_sub_field('icon-text-top-heading'))): ?>
                        <h2><?php echo get_sub_field('icon-text-top-heading'); ?></h3>
                    <?php endif; ?>
                    <?php if(!empty(get_sub_field('icon-text-top-content'))): ?>
                        <p><?php echo get_sub_field('icon-text-top-content'); ?></p>
                    <?php endif; ?>
                </div>
                <?php if(have_rows('icon-text-items')):?>
                    <?php while(have_rows('icon-text-items')): the_row(); ?>
                        <!-- Expert Guidance -->
                        <div class="col-lg-4 col-xl-3 col-md-6 col-12">
                            <div class="ep-category__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="ep-category__icon ep2-bg">
                                    <img src="<?php echo get_sub_field( 'icon-text-image' )[ 'url' ]; ?>"
                                alt="<?php echo get_sub_field( 'icon-text-image' )[ 'alt' ]; ?>">
                                </div>
                                <div class="ep-category__info">
                                    <?php if(!empty(get_sub_field('icon-text-heading'))): ?>
                                        <h3><?php echo get_sub_field('icon-text-heading'); ?></h3>
                                    <?php endif; ?>
                                    <?php if(!empty(get_sub_field('icon-text-content'))): ?>
                                        <p><?php echo get_sub_field('icon-text-content'); ?></p>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>  
        </div>
    </section>
    <!-- #services -->
<?php endif; ?>



