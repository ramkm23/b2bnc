<?php if( get_sub_field( 'text-cta-box-include' ) == 'Yes' ) :?>
    <section class="text-cta-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php if(!empty(get_sub_field('text-cta-box-heading'))): ?>
                        <h2><?php echo get_sub_field('text-cta-box-heading'); ?></h2>
                    <?php endif; ?>
                    <?php if(!empty(get_sub_field('text-cta-box-heading'))): ?>
                        <p><?php echo get_sub_field('text-cta-box-text'); ?></p>
                    <?php endif; ?>
                    <?php if(get_sub_field('text-cta-box-primary-button')) : ?>  
                        <a href="<?php echo get_sub_field('text-cta-box-primary-button')['url']; ?>" target="<?php echo get_sub_field('text-cta-box-primary-button')['target']; ?>" class="btn"><?php echo get_sub_field('text-cta-box-primary-button')['title']; ?></a>
                    <?php endif; ?>
                    <?php if(get_sub_field('text-cta-box-secondary-button')) : ?>  
                        <a href="<?php echo get_sub_field('text-cta-box-secondary-button')['url']; ?>" target="<?php echo get_sub_field('text-cta-box-secondary-button')['target']; ?>" class="btn secondary-button"><?php echo get_sub_field('text-cta-box-secondary-button')['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div> 
    </section>
<?php endif; ?>