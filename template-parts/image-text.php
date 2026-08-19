<?php if( get_sub_field( 'image-text-include' ) == 'Yes' ) :?>
<!-- Start Image + Text -->
<section id="image-text-cmp" class="image-text wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <figure>
                    <img src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>" class="text-images igure-img img-fluid"  alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>">
                </figure>                
            </div>

            <div class="col-sm-6">
                <h2><?php echo get_sub_field( 'heading' );?></h2>
                <p><?php echo get_sub_field( 'text' );?></p>
                <?php if(get_sub_field('cta-button-link')) : ?>  
                    <a href="<?php echo get_sub_field('cta-button-link')['url']; ?>" target="<?php echo get_sub_field('cta-button-link')['target']; ?>" class="btn"><?php echo get_sub_field('cta-button-link')['title']; ?></a>
                    <a href="#" class="enqbtn button ep-video__btn open-cf7-popup enquiry-now-btn shop-enquiry-btn">Enquiry Now</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Image + Text -->
<?php endif; ?>

<style>

    .image-text a {
        float: left;
        margin-right: 10px;
    }
</style>