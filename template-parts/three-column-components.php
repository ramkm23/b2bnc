<?php if( get_sub_field( 'include-three-column-components' ) == 'Yes' ) :?>
<!--==========================
   Services Section
   ============================-->
<section class="three-coloumn-components">
   <div class="container">
      <div class="row"> 
         <?php if(have_rows('three-column-components-items')):?>
            <?php while(have_rows('three-column-components-items')): the_row(); ?>
               <div class="col-lg-4">
                  <div class="box wow fadeInLeft">
                     <?php if(!empty(get_sub_field('three-column-components-item-image'))): ?>
                        <div class="image">
                        <img src="<?php echo get_sub_field( 'three-column-components-item-image' )[ 'url' ]; ?>" class="text-images igure-img img-fluid"   alt="<?php echo get_sub_field( 'three-column-components-item-image' )[ 'alt' ]; ?>">         
                        </div>
                     <?php endif; ?>   

                     <?php if(!empty(get_sub_field('three-column-components-item-heading'))): ?>
                        <h3 class="title"><?php echo get_sub_field('three-column-components-item-heading'); ?></h3>
                     <?php endif; ?>

                     <div class="
                        <?php if (get_sub_field( 'three-column-item-background-color' ) == 'Dark' ):
                           echo 'itembackground';
                        else :
                           echo 'bg-white';
                        endif;
                        ?> ">
                        <?php if(!empty(get_sub_field('three-column-components-item-text'))): ?>
                           
                           <?php echo get_sub_field('three-column-components-item-text'); ?>
                        
                        <?php endif; ?>
                        <?php if(get_sub_field('three-column-components-item-primary-button')) : ?>  
                           <a href="<?php echo get_sub_field('three-column-components-item-primary-button')['url']; ?>" target="<?php echo get_sub_field('three-column-components-item-primary-button')['target']; ?>" class="btn"><?php echo get_sub_field('three-column-components-item-primary-button')['title']; ?></a>
                        <?php endif; ?>
                        <?php if(get_sub_field('three-column-components-item-secondary-button')) : ?>  
                           <a href="<?php echo get_sub_field('three-column-components-item-secondary-button')['url']; ?>" target="<?php echo get_sub_field('three-column-components-item-secondary-button')['target']; ?>" class="btn secondary-button"><?php echo get_sub_field('three-column-components-item-secondary-button')['title']; ?></a>
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