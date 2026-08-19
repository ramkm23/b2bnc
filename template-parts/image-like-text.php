<?php if( get_sub_field( 'image-like-text-include' ) == 'Yes' ) :?>
<!-- Start Image + Text -->
<section id="image-text-cmp" class="image-text wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <figure >
                    <img src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>"
                        class="text-images igure-img img-fluid"
                        alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>">
                </figure>
                <div class="overview-card updown-ani">
                    <div class="overview-card__icon">
                        <img src="<?php echo get_sub_field( 'left-like-icon' )[ 'url' ]; ?>"
                        alt="<?php echo get_sub_field( 'left-like-icon' )[ 'alt' ]; ?>">
                    </div>
                    <div class="overview-card__info">
                        <p class="count"><?php echo get_sub_field( 'left-like-count' );?></p>
                        <p><?php echo get_sub_field( 'left-like-text' );?></p>
                    </div>
                </div>
                
            </div>

            <div class="col-sm-6">
                <h2><?php echo get_sub_field( 'heading' );?></h2>
                <p><?php echo get_sub_field( 'text' );?></p>
                <?php if(get_sub_field('cta-button-link')) : ?>  
                    <a href="<?php echo get_sub_field('cta-button-link')['url']; ?>" target="<?php echo get_sub_field('cta-button-link')['target']; ?>" class="btn"><?php echo get_sub_field('cta-button-link')['title']; ?></a>
                    <a href="#" class="enqbtn-likes button ep-video__btn open-cf7-popup enquiry-now-btn shop-enquiry-btn">Enquiry Now</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Image + Text -->
<?php endif; ?>



