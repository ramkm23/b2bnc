<?php if( get_sub_field('form-text-include') == 'Yes' ) : ?>

<section id="video-text-cmp" class="video-text wow fadeInUp">
    <div class="container">
        <div class="row">

            <?php
            if ( get_sub_field('form-text-position') == 'Left' ) {
                $form_class = 'col-md-5  order-md-1';
                $text_class = 'col-md-7 order-md-2';
            } else {
                $form_class = 'col-md-5 order-md-2';
                $text_class = 'col-md-7 order-md-1';
            }
            ?>

            <!-- Form -->
            <div class="<?php echo $form_class; ?>">
                <div class="formssection">
                    <div class="form-heading">
                        <div class="heading">
                            <?php echo do_shortcode(get_sub_field('form-heading')); ?>
                        </div>
                        <div class="sub-heading">
                            <?php echo do_shortcode(get_sub_field('form-sub-heading')); ?>
                        </div>
                    </div>
                    
                    <?php echo do_shortcode(get_sub_field('form-id')); ?>
                </div>
            </div>

            <!-- Text -->
            <div class="<?php echo $text_class; ?>">
                <h2 class="content-heading"><?php the_sub_field('heading-form-text'); ?></h2>
                <div>
                    <?php the_sub_field('form-text'); ?>
                </div>

                <?php if ( get_sub_field('cta-primary-button-link') ) : 
                    $button = get_sub_field('cta-primary-button-link');
                ?>
                    <a href="<?php echo esc_url($button['url']); ?>"
                       target="<?php echo esc_attr($button['target']); ?>"
                       class="btn">
                        <?php echo esc_html($button['title']); ?>
                    </a>
                <?php endif; ?>
                <?php if ( get_sub_field('cta-secondary-button-link') ) : 
                    $button = get_sub_field('cta-secondary-button-link');
                ?>
                    <a href="<?php echo esc_url($button['url']); ?>"
                       target="<?php echo esc_attr($button['target']); ?>"
                       class="btn secondary-button">
                        <?php echo esc_html($button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<?php endif; ?>