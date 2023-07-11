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
<div class="container">
<div class="breadcrumb"><?php get_breadcrumb(); ?></div>
</div>
<div class="container inner_pages_content">
	
<h1 class="page_heading"><?php the_title();?></h1>
<p><?php the_content();?></p>	
</div>

<?php

get_footer();
