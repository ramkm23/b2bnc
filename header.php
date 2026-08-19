<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.png" rel="icon">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">
  <?php wp_head(); ?>
  <script>
	<?php if( !empty( get_field( 'other-site-head-script', 'option') ) ): ?>
		<?php echo get_field( 'other-site-head-script', 'option' ); ?>
	<?php endif; ?>

</script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
</head>
<?php get_template_part( 'template-parts/top-bar' );?>
 <body>
     
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2DB4967"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
	<?php if( !empty( get_field( 'other-site-body-script', 'option') ) ): ?>
	  <?php echo get_field( 'other-site-body-script', 'option' ); ?>
	<?php endif; ?>
  <?php get_template_part( 'template-parts/type-of-header' );?>
  <!-- #header -->



 
 
 <!-- WhatsApp Support Button -->
 <div class="whatsapp-support-container">
     <a href="tel:02046340001"
         target="_blank"
         rel="noopener noreferrer"
         class="whatsapp-float"
         aria-label="Call Us">
         <img src="https://b2bnctraining.co.uk/wp-content/themes/b2bnc/img/phone-call.png" alt="WhatsApp Support" />
     </a>
     <div class="whatsapp-message">
        Call Us!
     </div>
</div>
 
 