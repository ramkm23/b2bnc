<section class="image_component">
   <div class="container">
      <?php if(get_sub_field('image')): ?>
         <img src="<?php echo get_sub_field('image')['url']; ?>" alt="<?php echo get_sub_field('image')['alt']; ?>" class="img-fluid">
      <?php endif; ?>
      <?php if(!empty(get_sub_field('caption'))): ?>
         <p class="caption"><?php echo get_sub_field('caption'); ?></p>
      <?php endif; ?>
   </div>
</section>