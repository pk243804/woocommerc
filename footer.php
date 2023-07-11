<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fresh_Mart
 */

?>

	<div class="footer_main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">
                  <?php if (is_active_sidebar('footer-1')) { 
                      dynamic_sidebar('footer-1');
                    }  ?>
            </div>
          <div class="col-md-4 col-12 d-flex justify-content-lg-center justify-content-sm-start">
            <div class="widget widget_nav_menu">
              <div class="widget-content">
                <?php if (is_active_sidebar('footer-2')) { 
                      dynamic_sidebar('footer-2');
                    }  ?>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 d-flex justify-content-lg-end justify-content-sm-start">
            <div class="neweslatter">
              <?php if (is_active_sidebar('footer-3')) { 
                      dynamic_sidebar('footer-3');
                    }  ?>
            </div>
          </div>
        </div>

        <div class="row category_inner_links">
          <?php if (is_active_sidebar('footer-4')) { 
                      dynamic_sidebar('footer-4');
                    }  ?>
        </div>

        <div class="row brands_inner_links">
          <?php if (is_active_sidebar('footer-5')) { 
                      dynamic_sidebar('footer-5');
                    }  ?>
        </div>

        <div class="row delivery_inner_links">
          <?php if (is_active_sidebar('footer-6')) { 
                      dynamic_sidebar('footer-6');
                    }  ?>
        </div>

        <div class="row">
          <div class="col-md-6 col-12">
            <h4 class="cat_type_title">Payment Method</h4>
            <hr>
            <ul class="d-flex payment_method">
              <li>
                <img src="https://demosrvr.com/project/wp/grocery_store/wp-content/uploads/2023/06/Layer-1.png" alt="Payment Method">
              </li>
              <li>
                <img src="https://demosrvr.com/project/wp/grocery_store/wp-content/uploads/2023/06/Layer-2.png" alt="Payment Method">
              </li>
              <li>
                <img src="https://demosrvr.com/project/wp/grocery_store/wp-content/uploads/2023/06/Layer-3.png" alt="Payment Method">
              </li>
              <li>
                <img src="https://demosrvr.com/project/wp/grocery_store/wp-content/uploads/2023/06/Layer-4.png" alt="Payment Method">
              </li>
              <li>
                <img src="https://demosrvr.com/project/wp/grocery_store/wp-content/uploads/2023/06/Layer-5.png" alt="Payment Method">
              </li>
              <li>
                <img src="https://demosrvr.com/project/wp/grocery_store/wp-content/uploads/2023/06/Layer-6.png" alt="Payment Method">
              </li>
              <li>
                <img src="https://demosrvr.com/project/wp/grocery_store/wp-content/uploads/2023/06/Layer-7.png" alt="Payment Method">
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-12 d-flex justify-content-lg-end justify-content-md-end justify-content-sm-start">
            <div class="social_icon">
              <h4 class="cat_type_title">Get Social With Us</h4>
              <hr>
              <?php if (is_active_sidebar('social-icon')) { 
                      dynamic_sidebar('social-icon');
                    }  ?> 
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="copy-right text-center"><p>© <?php echo get_option('copyright_text');?></p></div>

    <!-- Bootstrap JS -->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/js/custom.js"></script>
    

<?php wp_footer(); ?>

</body>
</html>
