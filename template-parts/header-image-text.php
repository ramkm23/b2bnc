<?php if( get_sub_field( 'header-image-text-include' ) == 'Yes' ) :?>
<!-- Start Hero Area -->
<section class="header-image-text">
    <div class="container ep-container">
    <div class="row align-items-center">
        <div class="col-lg-12 col-xl-6 col-12">
            <div class="style2">
                <?php if(get_sub_field('header-image-text-heading')) : ?>
                    <h2 class="header-text  left"><?php echo get_sub_field('header-image-text-heading'); ?></h2>
                <?php endif; ?>

                <?php if(get_sub_field('header-image-text-description')) : ?>
                    <p class="ep-header-text"><?php echo get_sub_field('header-image-text-description'); ?></p>
                <?php endif; ?>
            </div>
            <div class="ep-course_-student">
                <?php if(get_sub_field( 'header-image-text-cta-button' )) : ?>  
                    <a class="btn ep-btn ep5-bg" href="<?php echo get_sub_field( 'header-image-text-cta-button' )['url']; ?>" target="<?php echo get_sub_field('header-image-text-cta-button')['target']; ?>" ><?php echo get_sub_field('header-image-text-cta-button')['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-12 offset-xl-1 col-xl-5 col-12 order-top">
            <div class="position-relative">
                <div class="header-right-img">
                    <img src="<?php echo get_sub_field( 'header-image-text-rightimages' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( 'header-image-text-rightimages' )[ 'alt' ]; ?>">
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End Start Hero Area -->
 <?php endif; ?>
 
 
 <style>
     
@media(max-width:768px) {
    .header-right-img img {
        width: 100%;
    }
    
    .header-text {
        font-size: 25px;
        line-height: 1.2em !important;
    }
    
    .header-image-text .ep-course_-student {
        margin-bottom: 20px;
    }
}     
     
 </style>