<?php
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div style="background:red;color:#fff;padding:20px; text-align:center;">
    <h1><?php echo get_the_title(); ?></h1>
</div>

<?php
include get_template_directory() . '/template-parts/breadcrumbs.php';
?>

<div class="container">
    <main id="main" class="site-main">

        <?php
        while ( have_posts() ) :
            the_post();

            the_content();

        endwhile;
        ?>

    </main>
</div>

<?php get_footer(); ?>




<style>
    
    
    .cf7-popup {
    display: none;
    position: fixed;
    z-index: 99999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
}

.cf7-popup-content {
    background: #fff;
    max-width: 500px;
    width: 90%;
    margin: 10% auto;
    padding: 30px;
    position: relative;
    border-radius: 8px;
    animation: fadeIn 0.3s ease-in-out;
}

.cf7-close {
    position: absolute;
    top: 12px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
    color: #000;
}

@keyframes fadeIn {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

    
    
</style>