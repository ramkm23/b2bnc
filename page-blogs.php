<?php
/**
 * Template Name: Blog Page
 *
 * @package cwt
 */

get_header();
?>

<div class="breadcrumb">
    <div class="container">
        <?php get_template_part('template-parts/breadcrumbs'); ?>
        <?php the_breadcrumb(); ?>
    </div>
</div>

<div class="single-page-template">
    <div class="container">
        <div class="row">

            <div class="col-sm-12">
                <h1 class="blogpage-title"><?php the_title(); ?></h1>
            </div>

            <!-- Blog Posts -->
            <div class="col-sm-9">

                <div class="row">

                    <?php
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 6,
                        'paged'          => $paged
                    );

                    $blog_query = new WP_Query($args);

                    if ( $blog_query->have_posts() ) :

                        while ( $blog_query->have_posts() ) :
                            $blog_query->the_post();
                    ?>

                        <div class="col-sm-6">

                            <a href="<?php the_permalink(); ?>">
                                <div class="bloglistpage">

                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>

                                    <h2><?php the_title(); ?></h2>

                                    <p class="publish-date">
                                        <span>Publish Date:</span>
                                        <?php echo get_the_date(); ?>
                                    </p>

                                </div>
                            </a>

                            <div class="post-shortcontent">
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>">Read More</a>
                            </div>

                        </div>

                    <?php
                        endwhile;
                    else :
                        echo '<div class="col-12"><p>No blog posts found.</p></div>';
                    endif;
                    ?>

                </div>

                <!-- Pagination -->
                <div class="pagination-wrapper">

                    <?php
                    echo paginate_links( array(
                        'base'      => str_replace(
                            999999999,
                            '%#%',
                            esc_url( get_pagenum_link(999999999) )
                        ),
                        'format'    => '?paged=%#%',
                        'current'   => max(1, $paged),
                        'total'     => $blog_query->max_num_pages,
                        'prev_text' => __('« Previous'),
                        'next_text' => __('Next »'),
                    ) );
                    ?>

                </div>

                <?php wp_reset_postdata(); ?>

            </div>

            <!-- Sidebar -->
            <div class="col-sm-3">

                <h2 class="categoryname">
                    <span>Recent Blogs</span>
                </h2>

                <?php

                $sidebar_query = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 6
                ));

                if ( $sidebar_query->have_posts() ) :

                    while ( $sidebar_query->have_posts() ) :
                        $sidebar_query->the_post();
                ?>

                    <a href="<?php the_permalink(); ?>">

                        <div class="recent-popular-post">

                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php endif; ?>

                            <p><?php the_title(); ?></p>

                        </div>

                    </a>

                <?php
                    endwhile;
                endif;

                wp_reset_postdata();
                ?>

            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>