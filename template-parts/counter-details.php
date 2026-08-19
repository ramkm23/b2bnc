<?php if( get_sub_field( 'include-counter-details' ) == 'Yes' ) :?>
<!--==========================
   Services Section
   ============================-->
<section id="counter-details">
   <div class="container">
      <div class="row"> 
         <?php if(have_rows('counter-details-items')):?>
         <?php while(have_rows('counter-details-items')): the_row(); ?>
         <div class="col-lg-3">
            <div class="iconbox wow fadeInLeft"> 
               <div class="icon">
                  <?php if(!empty(get_sub_field('counter-details-icon-image'))): ?>
                     <img src="<?php echo get_sub_field( 'counter-details-icon-image' )[ 'url' ]; ?>" class="clientlogo" alt="<?php echo get_sub_field( 'counter-details-icon-image' )[ 'alt' ]; ?>">
                  <?php endif; ?>                 
               </div>
               <div class="icondescription">
                  <?php if(!empty(get_sub_field('counter-details-item-heading'))): ?>
                  <h3 class="title"><?php echo get_sub_field('counter-details-item-heading'); ?></h3>
                  <?php endif; ?>
                  <?php if(!empty(get_sub_field('counter-details-item-text'))): ?>
                     <p class="description">
                        <?php echo get_sub_field('counter-details-item-text'); ?>
                     </p>
                  <?php endif; ?>
               </div>
            </div>
         </div>
         <?php endwhile; ?>
         <?php endif; ?>    
      </div>
   </div>
</section>
<!-- #services -->
<?php endif; ?>