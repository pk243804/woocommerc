<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fresh_Mart
 */

get_header();
?>

	<main id="primary" class="site-main">
     	<div class="container">
            <div class="breadcrumb"><a href="<?php echo site_url();?>">Home</a>    &gt    
             <a href="<?php echo get_post_type_archive_link('post');?>">Blog</a>    /
             <p><?php echo the_title();?></p>

             </div>


	       	
	       	</li>
               <div class="row">
		<?php
		while ( have_posts() ) :
			the_post();?>

			 
                     <h2 class="blog_title"><?php the_title(); ?></h2>
                     <ul class="blog_ul d-flex">
                      <li>Published By:<a href="<?php echo $aur=get_author_posts_url(get_the_author_meta('id')); ?>"><?php the_author(); ?></a> </li><li><?php echo get_the_date('M j, Y'); ?></li>
                      </ul>

                     <?php if ( has_post_thumbnail() ) {
                     $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                     }
                     ?>  
                  <div class="col-lg-12" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                    <div class="blog">
                    <img src="<?php echo $large_image_url[0]; ?>" width="100%"height="auto" alt="">
                     <p class="blog_content"><?php echo the_content();?>
                        
                     </p>
                     </div>
                     </div> <?php

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'fresh-mart' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'fresh-mart' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
</div>
</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
