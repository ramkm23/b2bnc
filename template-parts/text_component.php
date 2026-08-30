<section class="text-component">
   <div class="container">
      <?php if(!empty(get_sub_field('heading'))): ?>
         <h2><?php echo get_sub_field('heading'); ?></h2>
      <?php endif; ?>
      <?php if(!empty(get_sub_field('text'))): ?>
         <div class="text-content"><?php echo get_sub_field('text'); ?></div>
      <?php endif; ?>
   </div>
</section>