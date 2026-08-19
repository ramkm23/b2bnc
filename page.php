<?php get_header(); ?>
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
			if( have_rows('default-page-content') ):

				while ( have_rows('default-page-content') ) : the_row();

					$section_path = 'template-parts/'.get_row_layout();

					get_template_part($section_path);

				endwhile;

			endif;
		?>	
	<?php endwhile; // end of the loop. ?>
	<?php //get_template_part('template-parts/full-width-blogs'); ?>
	
</div><!-- #content -->


<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            // Start the Loop
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div><!--entry-content -->
                        <?php
                    endwhile;
                else :
                    // If no content is found
                    get_template_part( 'template-parts/content', 'none' );
                endif;
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div>
<style>
    .StripeElement {
        height: auto !important;
    }
</style>

<?php get_footer(); ?>





