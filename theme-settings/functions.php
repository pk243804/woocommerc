<?php

    function enqueue_admin_styles_smm() {
        wp_enqueue_style( 'admin-style-1', get_template_directory_uri() . '/theme-settings/css/admin-style.css' );
        wp_enqueue_style( 'admin-style-2', get_template_directory_uri() . '/theme-settings/css/bootstrap.min.css' );
        wp_enqueue_script( 'admin-script-1', get_template_directory_uri() . '/theme-settings/js/bootstrap.min.js', array( 'jquery' ), '1.0', true );
        wp_enqueue_script( 'admin-script-2', get_template_directory_uri() . '/theme-settings/js/admin-script.js', array( 'jquery' ), 'null', false );
        wp_enqueue_media();
    }
    add_action( 'admin_enqueue_scripts', 'enqueue_admin_styles_smm' );



    function wp_freshmart_custom_menu() {
        add_menu_page(
            __( 'grocery store', 'fresh-mart' ),
            __( 'Grocery Store', 'fresh-mart' ),'manage_options','freshmart-setting',
            'freshmart_settings_page', 'dashicons-store',80);
    }
    add_action( 'admin_menu', 'wp_freshmart_custom_menu' );

    /**
     * Display a custom menu page
     */
    function freshmart_settings_page(){
          
            if(isset($_POST['submit']))
                {   //Start Header Options
                    update_option('top_bar', $_POST['top_bar']);
                    if($_POST['notification'] != ''){
                      update_option('notification', $_POST['notification']);
                    }
                    if($_POST['site_title'] != ''){ 
                      update_option('site_title', $_POST['site_title']);
                    }
                    if($_POST['rudr_img'] != '') {
                      update_option('rudr_img', $_POST['rudr_img']);
                    }
                    if($_POST['icon_img'] != '') {
                      update_option('icon_img', $_POST['icon_img']);
                    }
                    if($_POST['phone_number'] != '') {
                      update_option('phone_number', $_POST['phone_number']);
                    }
                    if($_POST['cart_text'] != '') {
                      update_option('cart_text', $_POST['cart_text']);
                    }
                    

                    //Start Footer Options
                    if($_POST['copyright_text'] != ''){
                      update_option('copyright_text', $_POST['copyright_text']);
                    }



                    //Start Theme Colors Options 
                    update_option('header_textcolor', $_POST['header_textcolor']);
                    update_option('header_bgcolor', $_POST['header_bgcolor']);
                    
                    update_option('body_textcolor', $_POST['body_textcolor']);
                    update_option('body_bgcolor', $_POST['body_bgcolor']);
                    
                    update_option('button_textcolor', $_POST['button_textcolor']);
                    update_option('button_bgcolor', $_POST['button_bgcolor']);
                    update_option('button_hovercolor', $_POST['button_hovercolor']);

                    update_option('footer_textcolor', $_POST['footer_textcolor']);
                    update_option('footer_bgcolor', $_POST['footer_bgcolor']);

                    
                   //Start Front Page Options
                    $banner_image=array_filter($_POST['banner_image']);
                    if($banner_image != ''){   
                        update_option('banner_image', $banner_image);
                    }
                    $banner_title=array_filter($_POST['banner_title']);
                    if($banner_title != ''){   
                        update_option('banner_title', $banner_title);
                    }
                    $banner_desc=array_filter($_POST['banner_desc']);
                    if($banner_desc != ''){   
                        update_option('banner_desc', $banner_desc);
                    }           

    }   

     include 'dashboard.php';
   // echo get_template_part('dashboard'); 
}
       


// Register all shortcodes here
add_action( 'init', 'register_shortcodes' );
function register_shortcodes() {
    add_shortcode( 'home_banner_slider', 'homepage_banner_slider' );
}


function homepage_banner_slider ( $atts ) {  ?>
    <div class="slider-wrapper">
         <?php $bnn_image=get_option('banner_image'); 
               $bnn_title = get_option('banner_title');
                  if($bnn_title!=''){ 
                  $tt = count($bnn_title); 
                  for($i=0; $i<$tt; $i++){ ?>
         <div class="slider single-item <?php if($i==0){echo 'active';} ?>">
            <?php if($bnn_image[$i] != ''){ ?>
            <img src="<?php echo (wp_get_attachment_image_url($bnn_image[$i], 'full')); ?>" >
            <?php } else { ?>
            <img src="https://demosrvr.com/project/wp/grocery_store/wp-content/uploads/woocommerce-placeholder.png" > <?php } ?>
         </div>
        <?php } } ?>
    </div>

    
<?php } 




