<section class="accordion-component">
   <div class="container">
      <?php if(!empty(get_sub_field('heading'))): ?>
         <h2><?php echo get_sub_field('heading'); ?></h2>
      <?php endif; ?>

      <?php if(have_rows('accordion_items')): ?>
         <div class="accordion" id="accordionBlock">
            <?php $i = 0; while(have_rows('accordion_items')): the_row(); $i++; ?>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading-<?php echo $i; ?>">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $i; ?>">
                        <?php echo get_sub_field('question'); ?>
                     </button>
                  </h2>
                  <div id="collapse-<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionBlock">
                     <div class="accordion-body">
                        <?php echo get_sub_field('answer'); ?>
                     </div>
                  </div>
               </div>
            <?php endwhile; ?>
         </div>
      <?php endif; ?>
   </div>
</section>