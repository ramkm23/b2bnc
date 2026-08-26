<?php if( get_sub_field( 'include-services' ) == 'Yes' ) :?>
<!--==========================
   Services Section
   ============================-->
<section id="services">
   <div class="container">
      <div class="row"> 
         <div class="col-sm-12">
               <div class="section-header">
                  <?php if(!empty(get_sub_field('services-heading'))): ?>
                  <h2><?php echo get_sub_field('services-heading'); ?></h2>
                  <hr>
                  <?php endif; ?>
                  <?php if(!empty(get_sub_field('services-text'))): ?>
                  <p><?php echo get_sub_field('services-text'); ?></p>
                  <?php endif; ?>
               </div>
         </div>
         <?php if(have_rows('service-items')):?>
         <?php while(have_rows('service-items')): the_row(); ?>
         <div class="col-lg-4">
            <div class="servicetext box wow fadeInLeft">
               <div class="icon">
                  <img src="<?php echo get_sub_field( 'service-item-icons' )[ 'url' ]; ?>" class="text-images igure-img img-fluid" alt="<?php echo get_sub_field( 'service-item-icons' )[ 'alt' ]; ?>">
               </div>
               <?php if(!empty(get_sub_field('service-item-heading'))): ?>
                  <h3 class="title"><?php echo get_sub_field('service-item-heading'); ?></h3>
               <?php endif; ?>
               
               <?php if(!empty(get_sub_field('service-item-text'))): ?>
                  <div class="service-text"><?php echo get_sub_field('service-item-text'); ?></div>
               <?php endif; ?>

               <?php if(get_sub_field('service-item-primary-button')) : ?>  
                  <div class="servicebtn"> <a href="<?php echo get_sub_field('service-item-primary-button')['url']; ?>" target="<?php echo get_sub_field('service-item-primary-button')['target']; ?>" class="btn"><?php echo get_sub_field('service-item-primary-button')['title']; ?></a></div>
               <?php endif; ?>

               <?php if(get_sub_field('service-item-secondary-button')) : ?>  
                  <div class="servicebtn"> <a href="<?php echo get_sub_field('service-item-secondary-button')['url']; ?>" target="<?php echo get_sub_field('service-item-secondary-button')['target']; ?>" class="btn secondary-button"><?php echo get_sub_field('service-item-secondary-button')['title']; ?></a></div>
               <?php endif; ?>
            </div>
         </div>
         <?php endwhile; ?>
         <?php endif; ?>    
      </div>
   </div>
</section>
<!-- #services -->
<?php endif; ?>