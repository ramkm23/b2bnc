<?php
    /*Template Name: Level 1  */
    get_header();
?>
<!-- Get Basic Content Template -->
 <section class="text-center breadcrumbs">
	<div class="container">
		<div class="row" style="display: block;">
			<?php if (function_exists('custom_breadcrumbs')) custom_breadcrumbs(); ?>
		</div>
	</div>
</section>
<div id="content" role="main">
	<?php while ( have_posts() ) : the_post(); ?>     
		<?php // Get Standard Comp	onents
			if( have_rows('level1-content') ):

				while ( have_rows('level1-content') ) : the_row();

					$section_path = 'template-parts/'.get_row_layout();

					get_template_part($section_path);

				endwhile;

			endif;
		?>	
	<?php endwhile; // end of the loop. ?>
	<?php //get_template_part('template-parts/full-width-blogs'); ?>
	
</div><!-- #content -->
<?php get_footer(); ?>