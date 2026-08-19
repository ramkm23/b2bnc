<!-- Bootstrap 5 Accordion -->

<?php if( get_sub_field( 'include-accordions' ) == 'Yes' ) :?>
<!--==========================
   Services Section
   ============================-->
<section class="accordions">
   <div class="container">
      <div class="row"> 
         <div class="col-sm-12">
               <div class="comptitle">
                  <h2><?php if(!empty(get_sub_field('three-column-components-heading'))): ?>
                  <span><?php echo get_sub_field('three-column-components-heading'); ?></span>
                  <?php endif; ?>
                  </h2>
                  <p><?php if(!empty(get_sub_field('three-column-components-text'))): ?>
                  <?php echo get_sub_field('three-column-components-text'); ?>
                  <?php endif; ?></p>
               </div>
         </div>
         <?php if(have_rows('accordions-items')):?>
         <?php while(have_rows('accordions-items')): the_row(); ?>
         <div class="col-lg-12">

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
       <?php echo get_sub_field('accordions-items-heading'); ?>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
         <?php echo get_sub_field('accordions-items-text'); ?>
      </div>
    </div>
  </div>

</div>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
         </div>
         <?php endwhile; ?>
         <?php endif; ?>    
      </div>
   </div>
</section>
<!-- #services -->
<?php endif; ?>