<?php
/**
 * Fresh Mart functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fresh_Mart
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fresh_mart_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Fresh Mart, use a find and replace
		* to change 'fresh-mart' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'fresh-mart', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'fresh-mart' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'fresh_mart_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'fresh_mart_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fresh_mart_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fresh_mart_content_width', 640 );
}
add_action( 'after_setup_theme', 'fresh_mart_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fresh_mart_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fresh-mart' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fresh-mart' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	// Footer #1.
	register_sidebar(
			array(
				'name'        => __( 'Footer #1', 'fresh-mart' ),
				'id'          => 'footer-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'fresh-mart' ),
			)
	);

	// Footer #2.
	register_sidebar(
			array(
				'name'        => __( 'Footer #2', 'fresh-mart' ),
				'id'          => 'footer-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'fresh-mart' ),
			)
	);

	// Footer #3.
	register_sidebar(
			array(
				'name'        => __( 'Footer #3', 'fresh-mart' ),
				'id'          => 'footer-3',
				'description' => __( 'Widgets in this area will be displayed in the third column in the footer.', 'fresh-mart' ),
			)
	);

	// Footer #4.
	register_sidebar(
			array(
				'name'        => __( 'Footer #4', 'fresh-mart' ),
				'id'          => 'footer-4',
				'description' => __( 'Widgets in this area will be displayed in the Fourth column in the footer.', 'fresh-mart' ),
			)
	);

	// Footer #5.
	register_sidebar(
			array(
				'name'        => __( 'Footer #5', 'fresh-mart' ),
				'id'          => 'footer-5',
				'description' => __( 'Widgets in this area will be displayed in the Fifth column in the footer.', 'fresh-mart' ),
			)
	);

	// Footer #6.
	register_sidebar(
			array(
				'name'        => __( 'Footer #6', 'fresh-mart' ),
				'id'          => 'footer-6',
				'description' => __( 'Widgets in this area will be displayed in the Sixth column in the footer.', 'fresh-mart' ),
			)
	);

	// Social Icon.
	register_sidebar(
			array(
				'name'        => __( 'Social Icon', 'fresh-mart' ),
				'id'          => 'social-icon',
				'description' => __( 'Widgets in this area will be displayed in the Social Icon in the footer.', 'fresh-mart' ),
			)
	);
}
add_action( 'widgets_init', 'fresh_mart_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fresh_mart_scripts() {
	wp_enqueue_style( 'fresh-mart-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fresh-mart-style', 'rtl', 'replace' );

	wp_enqueue_script( 'fresh-mart-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('my_script_1', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), true);
    wp_enqueue_script('my_script_2', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('js'), true);
    wp_enqueue_style('my_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fresh_mart_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Custom Theme Settings.
 */
include get_template_directory() . '/theme-settings/functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        //the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}



  /********* Woocommerce Starts Here *********/
 function iconic_loop_variation_add_to_cart_button(){
    global $product;
    ?>
    <div class="woocommerce-variation-add-to-cart variations_button">
    	<?php
    	// Displays the quantity box.
                   woocommerce_quantity_input(); ?>
        <button type="submit" class="custom_add_to_cart single_add_to_cart_button button"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
        <input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
        <input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>" />
        <input type="hidden" name="variation_id" class="variation_id" value="0" /> 
    </div>
    <?php
}


/**
 * Replace add to cart button in the loop.
 */
function iconic_change_loop_add_to_cart() {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
    add_action( 'woocommerce_after_shop_loop_item', 'iconic_template_loop_add_to_cart', 10 );
}

add_action( 'init', 'iconic_change_loop_add_to_cart', 10 );


/**
 * Use single add to cart button for variable products.
 */
function iconic_template_loop_add_to_cart() {
    global $product;

    if ( ! $product->is_type( 'variable' ) ) {
        woocommerce_template_loop_add_to_cart();
    return;
    }
    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
    remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );
    add_action( 'woocommerce_single_variation', 'iconic_loop_variation_add_to_cart_button', 20 );

    woocommerce_template_single_add_to_cart();
}



// Update Cart Qty Without Page Refresh
add_action( 'wp_footer', 'bbloomer_cart_refresh_update_qty' ); 
function bbloomer_cart_refresh_update_qty() {
   if (is_cart()) {
      ?>
      <script>
         jQuery('div.woocommerce').on('change', 'input.qty', function(){
            jQuery("[name='update_cart']").trigger("click");
         });

         jQuery(document).on("click", "div.woocommerce .qty_button", function(e) {
         	//alert('hello');
               jQuery("[name='update_cart']").trigger("click"); 
            });
      </script>
      <?php
   }
}
//Hide On Flash Sale
add_filter('woocommerce_sale_flash', 'lw_hide_sale_flash');
function lw_hide_sale_flash()
{
return false;
}



///****** Ajax to Mini Cart update
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	ob_start();
	?>
	<a class="cart-customlocation" href="javascript:void(0);" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
    <i class="fas fa-shopping-cart cart"></i>
    <div class="crat_count_title">
		<span class="cart_title">My Cart</span> <span class="cart_count"><?php echo sprintf(_n('%d <span class="items_res">items</span>','%d <span class="items_res">items</span>', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
    </div>
	</a>
	<?php
	$fragments['a.cart-customlocation'] = ob_get_clean();
	return $fragments;
}


//******* To change add to cart text on single product page *****************//
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'ADD', 'woocommerce' ); 
}

//********* To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'ADD', 'woocommerce' );
} 

add_filter( 'woocommerce_variable_price_html', 'bbloomer_variation_price_format_min', 9999, 2 );
function bbloomer_variation_price_format_min( $price, $product ) {
}
//add_filter( 'woocommerce_add_to_cart_redirect', 'wp_get_referer' ); 




function ace_product_page_ajax_add_to_cart_js() {
    ?>
    <script>
		jQuery(function($) {

			$('form.cart').on('submit', function(e) {
				e.preventDefault();

				var form = $(this);
				form.block({ message: null, overlayCSS: { background: '#fff', opacity: 0.6 } });

				var formData = new FormData(form[0]);
				formData.append('add-to-cart', form.find('[name=add-to-cart]').val() );

				// Ajax action.
				$.ajax({
					url: wc_add_to_cart_params.wc_ajax_url.toString().replace( '%%endpoint%%', 'ace_add_to_cart' ),
					data: formData,
					type: 'POST',
					processData: false,
					contentType: false,
					complete: function( response ) {
						response = response.responseJSON;

						if ( ! response ) {
							return;
						}

						if ( response.error && response.product_url ) {
							window.location = response.product_url;
							return;
						}

						// Redirect to cart option
						if ( wc_add_to_cart_params.cart_redirect_after_add === 'yes' ) {
							window.location = wc_add_to_cart_params.cart_url;
							return;
						}

						var $thisbutton = form.find('.single_add_to_cart_button'); 
					    var $thisbutton = null; 

						// Trigger event so themes can refresh other areas.
						$( document.body ).trigger( 'added_to_cart', [ response.fragments, response.cart_hash, $thisbutton ] );

						// Remove existing notices
						$( '.woocommerce-error, .woocommerce-message, .woocommerce-info' ).remove();

						// Add new notices
						form.closest('.product').before(response.fragments.notices_html)
						form.unblock();
					}
				});
			});
		});
	</script>
	<?php
	}
	add_action( 'wp_footer', 'ace_product_page_ajax_add_to_cart_js' );



	function ace_ajax_add_to_cart_handler() {
		WC_Form_Handler::add_to_cart_action();
		WC_AJAX::get_refreshed_fragments();
	}
	add_action( 'wc_ajax_ace_add_to_cart', 'ace_ajax_add_to_cart_handler' );
	add_action( 'wc_ajax_nopriv_ace_add_to_cart', 'ace_ajax_add_to_cart_handler' );

	remove_action( 'wp_loaded', array( 'WC_Form_Handler', 'add_to_cart_action' ), 20 );




//******* Quantity input box Plus Minus ******//
add_filter( 'woocommerce_loop_add_to_cart_link', 'mukto_qty_inputs_add_to_cart', 10, 2 );
function mukto_qty_inputs_add_to_cart( $html, $product ) {
    if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
        $html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
        $html .= woocommerce_quantity_input( array(), $product, false );
        $html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
        $html .= '</form>';
    }
    return $html;
}

add_action( 'woocommerce_after_quantity_input_field', 'mukto_display_quantity_plus' );
function mukto_display_quantity_plus() {
   echo '<button type="button" class="plus">+</button>';
}
add_action( 'woocommerce_before_quantity_input_field', 'mukto_display_quantity_minus' );
function mukto_display_quantity_minus() {
   echo '<button type="button" class="minus">-</button>';
}



/******  Jquery for Quantity Plus-Minus Button ***********/
add_action( 'wp_footer', 'mukto_add_cart_quantity_plus_minus' );
function mukto_add_cart_quantity_plus_minus() {
   wc_enqueue_js( "   
           
      $(document).on( 'click', 'button.plus, button.minus', function() {
  
         var qty = $( this ).parent( '.quantity' ).find( '.qty' );
         var val = parseFloat(qty.val());
         var max = parseFloat(qty.attr( 'max' ));
         var min = parseFloat(qty.attr( 'min' ));
         var step = parseFloat(qty.attr( 'step' ));
 
         if ( $( this ).is( '.plus' ) ) {
            if ( max && ( max <= val ) ) {
               qty.val( max ).change();
            } else {
               qty.val( val + step ).change();
            }
         } else {
            if ( min && ( min >= val ) ) {
               qty.val( min ).change();
            } else if ( val > 1 ) {
               qty.val( val - step ).change();
            }
         }
 
      });
        
   " );
}




//favorite posts array
    function favorite_id_array() { 
        if (!empty( $_COOKIE['favorite_post_ids'])) {
            return explode(',', $_COOKIE['favorite_post_ids']);
        }
        else {
            return array();
        }
    }
    
    
    
    //add to favorite function
    function add_favorite() {
        $post_id = (int)$_POST['post_id'];
        if (!empty($post_id)) {
            $new_post_id = array(
                $post_id
            );
            $post_ids = array_merge($new_post_id, favorite_id_array());
            $post_ids = array_diff($post_ids, array(
                ''
            ));
            $post_ids = array_unique($post_ids);
            setcookie('favorite_post_ids', implode(',', $post_ids) , time() + 3600 * 24 * 365, '/');
            echo count($post_ids);
        }
        die();
    }
    add_action('wp_ajax_favorite', 'add_favorite');
    add_action('wp_ajax_nopriv_favorite', 'add_favorite');
    
    
    
    //delete from favorite function
    function delete_favorite() {
        $post_id = (int)$_POST['post_id'];
        if (!empty($post_id)) {
            $favorite_id_array = favorite_id_array();
            if (($delete_post_id = array_search($post_id, $favorite_id_array)) !== false) {
                unset($favorite_id_array[$delete_post_id]);
            }
            setcookie('favorite_post_ids', implode(',', $favorite_id_array) , time() + 3600 * 24 * 30, '/');
            echo count($favorite_id_array);
        }
        die();
    }
    add_action('wp_ajax_delfavorite', 'delete_favorite');
    add_action('wp_ajax_nopriv_delfavorite', 'delete_favorite');
