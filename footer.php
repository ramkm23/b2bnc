<?php get_template_part( 'template-parts/footer' );?>   
<footer id="footer">
    <div class="container">
      <div class="copyright">
          <small>We (B2BNC Training Ltd) are not associated with or part of <a href="https://www.cscs.uk.com/" target="blank" style="color:white;    text-decoration: underline;">CSCS</a> or CITB.</small></br>
        &copy; Copyright <?php echo date("Y"); ?> <strong>B2BNC Training</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.js"></script>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/custom-files/js/magnific-popup.min.js"></script>
<!-- CounterUp  JS -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/custom-files/js/jquery.counterup.min.js"></script>
<!-- Nice Select JS -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/custom-files/js/nice-select.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/custom-files/js/active.js"></script>
<!-- Jquery JS -->

<!-- Bootstrap JS -->
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/custom-files/js/bootstrap.min.js"></script>

  <style>
  
  
  .cf7-popup-content input, textarea {
    width: 100%;
    margin: 4px 0px;
    color: black;
    padding: 5px 10px;
}


@media(min-width:768px)
{
    .cf7-popup-content .wpcf7-submit {
    width: 33%;
    margin: 0;
    color: white;
    font-weight: bold;
    margin-left: 71px;
}
}
  
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
    text-align: center;
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
  
      .woocommerce-ordering {
    display: none;
    }
    
    .woocommerce-result-count {
        display: none;
    }
    
    .entry-content {
        margin-top: 30px;
    }
    
    .wc-block-cart__submit-button {
        background: #f16c37;
        color: white !important ;
        border-radius: 10px;
    }
    
    .wc-block-components-checkout-place-order-button {
        padding: 8px 20px;
        color:white !important;
        background: #f16c37;
        border: 2px solid;
        border-radius: 7px;
    }
    
    .wc-block-cart-item__product {
        font-size: 18px !important;
    }
    
    .wc-block-components-product-name {
        font-size: 1em !important;
    }
    
    .wc-block-components-product-price {
        font-size: 16px !important;
    }
    
    .enqbtn {
        background: #1f1c35;
        color: white !important;
        padding: 4px 10px;
        border-radius: 6px;
    }
    .enqbtn-likes{
    border-radius: 4px;
    padding: 4px 10px;
    margin-top: 0;
    position: absolute;
    margin-left: 10px;
    background: #1f1c35;
    color: white !important;
    }
  </style>
  
<script>
document.addEventListener("DOMContentLoaded", function () {

    const popup = document.getElementById("cf7-popup");
    const closeBtn = document.querySelector(".cf7-close");

    // OPEN POPUP (works for shop + single product)
    document.body.addEventListener("click", function (e) {
        const trigger = e.target.closest(".open-cf7-popup");
        if (!trigger) return;

        e.preventDefault();
        popup.style.display = "block";
    });

    // CLOSE POPUP (X button)
    closeBtn.addEventListener("click", function () {
        popup.style.display = "none";
    });

    // CLOSE POPUP (click outside)
    window.addEventListener("click", function (e) {
        if (e.target === popup) {
            popup.style.display = "none";
        }
    });

});
</script>

<script>
document.addEventListener('wpcf7mailsent', function () {
    document.getElementById('cf7-popup').style.display = 'none';
}, false);
</script>



<div id="cf7-popup" class="cf7-popup">
    <div class="cf7-popup-content">
        <span class="cf7-close">&times;</span>

        <?php echo do_shortcode('[contact-form-7 id="8561ddd" title="Enquery Now"]'); ?>

    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
