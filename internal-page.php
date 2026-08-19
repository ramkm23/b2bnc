<?php
    /*Template Name: Internal Page  */
    get_header();
?>

<section class="text-center breadcrumbs internal-page">
	<div class="container">
		<div class="row" style="display: block;">
			<?php if (function_exists('custom_breadcrumbs')) custom_breadcrumbs(); ?>
		</div>
	</div>
</section>

<!-- Get Basic Content Template -->
<div id="content" role="main">
	<?php while ( have_posts() ) : the_post(); ?>     
		<?php // Get Standard Comp	onents
			if( have_rows('internal-page') ):

				while ( have_rows('internal-page') ) : the_row();

					$section_path = 'template-parts/'.get_row_layout();

					get_template_part($section_path);

				endwhile;

			endif;
		?>	
	<?php endwhile; // end of the loop. ?>
	<?php //get_template_part('template-parts/full-width-blogs'); ?>
	
</div><!-- #content -->
<?php get_footer(); ?>