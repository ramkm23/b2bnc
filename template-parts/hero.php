<?php if( get_sub_field( 'hero-include' ) == 'Yes' ) :?>
<!-- Start Hero Area -->
<section
    class="ep-hero ep-hero--style2 hero-bg background-image"
    style="background-image: url('assets/images/hero/home-2/bg.png')">
    <div class="container ep-container">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-6 col-12">
        <div class="ep-hero__content ep-hero__content--style2">

            <?php if(get_sub_field('hero-header')) : ?>
                <h1 class="ep-hero__title  left" ><?php echo get_sub_field('hero-header'); ?></h1>
            <?php endif; ?>

            <?php if(get_sub_field('hero-text')) : ?>
                <p class="ep-hero__text"><?php echo get_sub_field('hero-text'); ?></p>
            <?php endif; ?>
        </div>
                <div class="ctabutton">
            <?php if(get_sub_field('hero-primary-button')) : ?>  
                <a href="<?php echo get_sub_field('hero-primary-button')['url']; ?>" target="<?php echo get_sub_field('hero-primary-button')['target']; ?>" class="hero-button-primary"><?php echo get_sub_field('hero-primary-button')['title']; ?></a>
            <?php endif; ?>
            <?php if(get_sub_field('hero-secondary-button')) : ?>  
                <a href="<?php echo get_sub_field('hero-secondary-button')['url']; ?>" target="<?php echo get_sub_field('hero-secondary-button')['target']; ?>" class="hero-button-secondary scrollto"><?php echo get_sub_field('hero-secondary-button')['title']; ?></a>
            <?php endif; ?>    
        </div>
        
        </div>
        <div class="col-lg-12 offset-xl-1 col-xl-5 col-12 order-top">
        <div class="ep-hero__widget ep-hero__widget-style2 position-relative">
            <div class="ep-hero__img">
                <img src="<?php echo get_sub_field( 'hero-right-images' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( 'hero-right-images' )[ 'alt' ]; ?>">
            </div>
            <div class="ep-hero__overview-card updown-ani">
            <h4><span>5</span>+</h4>
            <p>Years Of Experience</p>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- End Start Hero Area -->
 <?php endif; ?>