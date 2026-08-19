<?php if( get_sub_field( 'include-client-logo-slider' ) == 'Yes' ) :?>


<!-- Start Brand -->
<section id="clients" class="ep-brand section-gap" >
    <div class="container ep-container">

    <div class="section-header">
        <?php if(get_sub_field('client-slider-heading')) : ?>
            <h2><?php echo get_sub_field('client-slider-heading'); ?></h2>
        <?php endif; ?>
        <?php if(get_sub_field('client-slider-text')) : ?>
            <p><?php echo get_sub_field('client-slider-text'); ?></p>
        <?php endif; ?>
    </div>

    <div class="row">
        <div class="col-12">
        <div class="owl-carousel ep-brand__slider">
        <!-- Single Brand -->

            <?php if(have_rows('client-logo')):?>
                <?php while(have_rows('client-logo')): the_row(); ?>
                    <a href="#" class="ep-brand__logo ep-brand__logo--style2"> <img src="<?php echo get_sub_field( 'logo-images' )[ 'url' ]; ?>" class="clientlogo" alt="<?php echo get_sub_field( 'logo-images' )[ 'alt' ]; ?>"> </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- End Start Brand -->








<?php endif;?>




