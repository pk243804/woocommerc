<?php 
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fresh_Mart
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/slick-theme.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/slick.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/assets/css/custom.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'fresh-mart' ); ?></a>
  
  <?php $top = get_option('top_bar');?>
	<div class="top_bar" style="display:<?php if($top == 'yes'){echo 'block';} else{echo 'none';} ?>;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <p class="top_left"><?php echo get_option('notification');?></p>
          </div>
          <div class="col-md-4 col-sm-12 d-flex align-items-center justify-content-end signin-signup">
            <div class="top_right">
              <svg class="user" viewBox="-42 0 512 512.001">
                <path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"></path>
                <path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"></path>
              </svg>
              <!-- <a class="signin" href="#"> Sign In </a>&nbsp;|&nbsp; <a class="register" href="#">Sign Up</a> -->
              <a class="signin" href="<?php if(is_user_logged_in()){ echo $lgurl=wp_logout_url( get_permalink( wc_get_page_id( 'myaccount' ) ) );}else{echo site_url().'/my-account/';}?>" <?php if(is_user_logged_in()){ }else{?><?php } ?>>
                <?php if(is_user_logged_in()){ echo 'Sign Out';}else{echo 'Sign In';} ?>
                </a>&nbsp;|&nbsp;
                 <?php if(is_user_logged_in()){?>
              <a class="register" href="<?php echo site_url().'/my-account/' ?>">My Account</a>
                <?php } else{ ?>
              <a class="register" href="<?php echo site_url().'/my-account/' ?>">Sign Up</a> 
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <header id="masthead" class="site-header"> 
	<div class="main-header">
      <div class="header_part">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-3 col-6 ">
              <a href="<?= home_url();?>" class="logo_site">
                <?php $image = wp_get_attachment_image_url(get_option('rudr_img'), 'small');?>
                <img src="<?php echo $image;?>" alt="Grocery Store">
               </a>
             </div>
             <div class="col-lg-5 col-md-6 text-center">
              <div class="header_form">
                <form method="post">
                  <div class="form-group">
                    <input type="search" class="form-control" placeholder="What are you Looking for ?">
                    <input type="submit" value="SEARCH" class="btn_submit">
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-4 col-md-3 d-flex justify-content-end align-items-center cart-call-main">
              <div class="phone_call">
                <a class="d-flex align-items-center" href="tel:+91123-456-7890">
                  <span class="call">
                    <svg class="call" version="1.1" x="0px" y="0px" viewBox="0 0 51.413 51.413" style="enable-background:new 0 0 51.413 51.413;" xml:space="preserve">
                      <g>
                        <path d="M25.989,12.274c8.663,0.085,14.09-0.454,14.823,9.148h10.564c0-14.875-12.973-16.88-25.662-16.88
                         c-12.69,0-25.662,2.005-25.662,16.88h10.482C11.345,11.637,17.398,12.19,25.989,12.274z"></path>
                        <path d="M5.291,26.204c2.573,0,4.714,0.154,5.19-2.377c0.064-0.344,0.101-0.734,0.101-1.185H10.46H0
                         C0,26.407,2.369,26.204,5.291,26.204z"></path>
                        <path d="M40.88,22.642h-0.099c0,0.454,0.039,0.845,0.112,1.185c0.502,2.334,2.64,2.189,5.204,2.189
                         c2.936,0,5.316,0.193,5.316-3.374H40.88z"></path>
                        <path d="M35.719,20.078v-1.496c0-0.669-0.771-0.711-1.723-0.711h-1.555c-0.951,0-1.722,0.042-1.722,0.711
                         v1.289v1h-11v-1v-1.289c0-0.669-0.771-0.711-1.722-0.711h-1.556c-0.951,0-1.722,0.042-1.722,0.711v1.496v1.306
                         C12.213,23.988,4.013,35.073,3.715,36.415l0.004,8.955c0,0.827,0.673,1.5,1.5,1.5h40c0.827,0,1.5-0.673,1.5-1.5v-9
                         c-0.295-1.303-8.493-12.383-11-14.987V20.078z M19.177,37.62c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458
                         s1.458,0.652,1.458,1.458S19.982,37.62,19.177,37.62z M19.177,32.62c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458
                         s1.458,0.652,1.458,1.458S19.982,32.62,19.177,32.62z M19.177,27.621c-0.805,0-1.458-0.652-1.458-1.458
                         c0-0.805,0.653-1.458,1.458-1.458s1.458,0.653,1.458,1.458C20.635,26.969,19.982,27.621,19.177,27.621z M25.177,37.62
                         c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458c0.806,0,1.458,0.652,1.458,1.458S25.983,37.62,25.177,37.62z
                         M25.177,32.62c-0.805,0-1.458-0.652-1.458-1.458s0.653-1.458,1.458-1.458c0.806,0,1.458,0.652,1.458,1.458
                         S25.983,32.62,25.177,32.62z M25.177,27.621c-0.805,0-1.458-0.652-1.458-1.458c0-0.805,0.653-1.458,1.458-1.458
                         c0.806,0,1.458,0.653,1.458,1.458C26.635,26.969,25.983,27.621,25.177,27.621z M31.177,37.62c-0.806,0-1.458-0.652-1.458-1.458
                         s0.652-1.458,1.458-1.458s1.458,0.652,1.458,1.458S31.983,37.62,31.177,37.62z M31.177,32.62c-0.806,0-1.458-0.652-1.458-1.458
                         s0.652-1.458,1.458-1.458s1.458,0.652,1.458,1.458S31.983,32.62,31.177,32.62z M31.177,27.621c-0.806,0-1.458-0.652-1.458-1.458
                         c0-0.805,0.652-1.458,1.458-1.458s1.458,0.653,1.458,1.458C32.635,26.969,31.983,27.621,31.177,27.621z"></path>
                      </g>
                    </svg>
                  </span>
                  <span class="col-num"><?php echo get_option('phone_number');?></span>
                </a>
              </div>
              <div class="wish_list">
                <a href="<?php echo site_url();?>/favorite/">
                  <i class="fa fa-heart-o"></i>
                  <span> 
                    <span class="yith-wcwl-items-count"><?php echo count(favorite_id_array()); ?></span>
                    </span>
                </a>
              </div>


          <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>
              <div class="cart_count_box d-flex">
                <a class="cart-customlocation" href="javascript:void(0);" title="View your shopping cart">
                  <i class="fa fa-shopping-cart cart"></i>
                  <div class="crat_count_title"> 
                    <span class="cart_title"><?php echo get_option('cart_text'); ?></span>
                    <span class="cart_count"> <?php echo count( WC()->cart->get_cart() ); ?> <span class="items_res">items</span></span>
                  </div>
                </a>
                <div class="widget_shopping_cart_content">
                   <!-- <p class="woocommerce-mini-cart__empty-message"></p> -->
                    <?php woocommerce_mini_cart(); ?>
                </div>
              </div>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
      

  <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {  ?>
      <div class="category">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-6">
              <ul class="category_ul d-flex align-items-center">
                <li class="all_category_show_button d-flex align-items-center">
                  <div class="togle_menu">
                    <div class="togale_icon">
                      <div class="bar1"></div>
                      <div class="bar2"></div>
                      <div class="bar3"></div>
                    </div>
                    <span class="all-cat-btn">All Categories</span>
                  </div>
                </li>
                <?php
                  $taxonomy     = 'product_cat';
                  $orderby      = 'name';  
                  $show_count   = 0;     
                  $pad_counts   = 0;      
                  $hierarchical = 1;      
                  $title        = '';  
                  $empty        = 0;

                  $args = array(
                         'taxonomy'     => $taxonomy,
                         'orderby'      => $orderby,
                         'show_count'   => $show_count,
                         'pad_counts'   => $pad_counts,
                         'hierarchical' => $hierarchical,
                         'title_li'     => $title,
                         'hide_empty'   => $empty,
                         'offset'        => 6
                  );
                 $all_categories = get_categories( $args );
                 $all_cate = array_slice($all_categories, 9);
                 foreach ($all_cate as $cat) {
                    if($cat->category_parent == 0) {
                        $category_id = $cat->term_id;   
                        $cat_url = get_category_link($cat->term_id);  ?>  
                    <li class="">
                      <a href="<?php echo $cat_url; ?>"><?php echo $cat->name; ?></a>
                    </li>      
                <?php  }       
                 }  ?>
                </ul>
            </div>
          </div>
        </div>
        <div class="all_categories_show" id="all_categories_show" style="display: none;">
          <div class="all_categories_show_main">
        <?php $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
          );
         $all_categories = get_categories( $args );
         foreach ($all_categories as $cat) {
            if($cat->category_parent == 0) {
                $category_id = $cat->term_id;  ?>   
            <div class="main_categoris">
              <h5><?php echo $cat->name; ?></h5>
              <ul>
            <?php  $args2 = array(
                        'taxonomy'     => $taxonomy,
                        'child_of'     => 0,
                        'parent'       => $category_id,
                        'orderby'      => $orderby,
                        'show_count'   => 0,
                        'pad_counts'   => $pad_counts,
                        'hierarchical' => $hierarchical,
                        'title_li'     => $title,
                        'hide_empty'   => $empty
                );
                $sub_cats = get_categories( $args2 );
                if($sub_cats) {
                    foreach($sub_cats as $sub_category) {  
                      $sub_category_link = get_category_link($sub_category->term_id);?>
                    <li>
                      <a href="<?php echo $sub_category_link; ?>"><?php echo $sub_category->name; ?></a>
                    </li>
                <?php }   
                }  ?>
              </ul>
            </div>
          <?php  }       
            }  ?>
          </div>
        </div>
      </div>
      <?php  } ?>
    </div>
  
	<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'fresh-mart' ); ?></button>
			<?php
		/*	wp_nav_menu(
			array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			); */
			?>
		</nav>-->

	</header><!-- #masthead -->
