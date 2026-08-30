<?php
/**
 * Template Name: Blog Components Page
 *
 * @package cwt
 */

get_header();
?>

<section class="text-center breadcrumbs">
	<div class="container">
		<div class="row" style="display: block;">
			<?php if (function_exists('custom_breadcrumbs')) custom_breadcrumbs(); ?>
		</div>
	</div>
</section>

<div class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content">
                                <?php the_content(); ?>

                                <!-- Blog Components -->
                                <?php if( have_rows('blog') ): ?>
                                   <?php while ( have_rows('blog') ) : the_row(); ?>
                                      <?php
                                         $section_path = 'template-parts/'.get_row_layout();
                                         get_template_part($section_path);
                                      ?>
                                   <?php endwhile; ?>
                                <?php endif; ?>
                                <!-- End Blog Components -->

                            </div>
                        </article>
                        <?php
                    endwhile;
                endif;
            ?>
        </main>
    </div>
</div>

<?php get_footer(); ?>