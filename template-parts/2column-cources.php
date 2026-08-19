<?php if( get_sub_field( 'include-2column-cources' ) == 'Yes' ) :?>
<!-- Start Course Details Area -->
    <div class="twocolumn-cources">
        <div class="container ep-container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">                           
                        <?php if(have_rows('2column-cources-left-items')):?>
                            <?php while(have_rows('2column-cources-left-items')): the_row(); ?>
                                <div class="col-sm-12">
                                    <div class="ep-course-leftsection-data">
                                        <?php if(!empty(get_sub_field('2column-cources-heading'))): ?>
                                            <h2><?php echo get_sub_field('2column-cources-heading'); ?></h2>
                                        <?php endif; ?> 
                                    
                                        <div class="leftsection">
                                            <div class="course-image">
                                                <img src="<?php echo get_sub_field( '2column-cources-image' )[ 'url' ]; ?>" alt="<?php echo get_sub_field( '2column-cources-image' )[ 'alt' ]; ?>">                                        
                                            </div>
                                        <div class="cource-details">
                                                <?php if(!empty(get_sub_field('2column-cources-text'))): ?>
                                                    <?php echo get_sub_field('2column-cources-text'); ?>
                                                <?php endif; ?>  
                                                <?php if(get_sub_field('2column-cources-button')) : ?>  
                                                    <div class="courcesbutton"><a href="<?php echo get_sub_field('2column-cources-button')['url']; ?>" target="<?php echo get_sub_field('2column-cources-button')['target']; ?>" class="btn"><?php echo get_sub_field('2column-cources-button')['title']; ?></a></div>
                                                <?php endif; ?> 
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>    
                        
                    </div>
                </div>
                <div class="col-sm-6 rightsection">
                        <div class="row">                           
                            <?php if(have_rows('2column-cources-right-items')):?>
                                <div class="ep-course-rightsection-data">
                                <?php while(have_rows('2column-cources-right-items')): the_row(); ?>
                                    <?php if(!empty(get_sub_field('2column-cources-heading'))): ?>
                                         <h2><?php echo get_sub_field('2column-cources-heading'); ?></h2>
                                     <?php endif; ?> 

                                    <?php if(!empty(get_sub_field('2column-cources-text'))): ?>
                                        <?php echo get_sub_field('2column-cources-text'); ?>
                                    <?php endif; ?>  

                                    <?php if(get_sub_field('2column-cources-button')) : ?>  
                                        <div class="courcesbutton"><a href="<?php echo get_sub_field('2column-cources-button')['url']; ?>" target="<?php echo get_sub_field('2column-cources-button')['target']; ?>" class="btn"><?php echo get_sub_field('2column-cources-button')['title']; ?></a></div>
                                    <?php endif; ?>   
                                <?php endwhile; ?>
                            <?php endif; ?>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Course Details Area -->
<?php endif;?>
