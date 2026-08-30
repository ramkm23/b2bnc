<section class="cta-button-component">
   <div class="container">
      <?php if(!empty(get_sub_field('heading'))): ?>
         <h2><?php echo get_sub_field('heading'); ?></h2>
      <?php endif; ?>
      <?php if(!empty(get_sub_field('text'))): ?>
         <p><?php echo get_sub_field('text'); ?></p>
      <?php endif; ?>

      <?php if(get_sub_field('primary_button')) : ?>
         <a href="<?php echo get_sub_field('primary_button')['url']; ?>" target="<?php echo get_sub_field('primary_button')['target']; ?>" class="btn"><?php echo get_sub_field('primary_button')['title']; ?></a>
      <?php endif; ?>

      <?php if(get_sub_field('secondary_button')) : ?>
         <a href="<?php echo get_sub_field('secondary_button')['url']; ?>" target="<?php echo get_sub_field('secondary_button')['target']; ?>" class="btn secondary-button"><?php echo get_sub_field('secondary_button')['title']; ?></a>
      <?php endif; ?>
   </div>
</section>