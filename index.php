<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fresh_Mart
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

?>
<div class="blog_page_section">

         <div class="container">
            <div class="breadcrumb"><a href="<?php echo site_url();?>">Home</a>     &gt;
        <h5>Blog</h5>  </div>
      <div class="row">
        <div class="col-md-9 col-12">
	       	
               <div class="row">
               	<?php
    $paged = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
    query_posts( 
        array ( 
            'post_type' => 'post', 
           
            'posts_per_page' => 2,
            'paged' => $paged ) 
        );   
			while ( have_posts() ) :
				the_post();

				

                     if ( has_post_thumbnail() ) {
                     $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                     }
                     ?>  
                  <div class="col-lg-12" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                    <div class="blog">
                     <a href="<?php the_permalink(); ?>"><img src="<?php echo $large_image_url[0]; ?>" width="100%"height="auto" alt=""></a>
                     <h2 class="blog_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                     <ul class="blog_ul d-flex">
                      <li>Published By:<a href="<?php echo $aur=get_author_posts_url(get_the_author_meta('id')); ?>"><?php the_author(); ?></a> </li><li><?php echo get_the_date('M j, Y'); ?></li>
                      </ul>
                     <p class="blog_content"><?php echo wp_trim_words( get_the_content(),130, '' );?>
                        <a class="read_more_btn" href="<?php echo get_post_permalink()?>">Read more</a>
                     </p>
                     </div>
                     </div> <?php

			endwhile;?>
                 <div class="pagination">
<?php
                echo "<div class='fz-pagination'>" . paginate_links(array(
                   
                    'prev_text' => __('<div class="preious-page">&lt;</div>'),
                    'next_text' => __('<div class="next-page">&gt;</div>')
                )) . "</div>";
            ?>
</div>
</div>
			</div>
 <div class="col-md-3 col-12 order-md-last order-lg-last order-first">
<h3 class="cat_title">Categories</h3>
<div class="cat_show">	
<?php   $args = array(
               'taxonomy' => 'category',
               'orderby' => 'name',
               'order'   => 'ASC'
           );

   $cats = get_categories($args);

   foreach($cats as $cat) {
?>
<ul> 
    <li>
      <a aria-current="page"  href="<?php echo get_term_link( $cat->term_id ) ?>">
           <?php echo $cat->name; ?>
<?php
   }?>
      </a>
  </li>

  </ul>
</div>
<div class="cat_show">  

<h3>Archive</h3>
<a href="<?php echo get_post_type_archive_link('post');?>">June 2023</a> 
</div>
<div class="cat_show">
  <h4 class="cat_type_us">Follow Us</h4>
<ul>
    <li>
 <?php if (is_active_sidebar('social-icon')) { 
        dynamic_sidebar('social-icon');
         }  ?> 
         </li>
</ul>
    </div>
</div>
</div>
</div>
</div>
<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>




	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
