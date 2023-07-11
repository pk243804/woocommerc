<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fresh_Mart
 */

get_header();
?>
<main id="site-content" role="main">

	<div class="section-inner thin error404-content">
	<div class="container text-align-center">
		<div class="bg-color">
		<h1>Page note found 404</h1><hr>
		<p>We are sorry,the page you requested colud not be found. Please Go Back to Home Page</p>
		<a href="<?php echo site_url(); ?>">Home</a>
	</div>
	</div>	

	</div><!-- .section-inner -->
</main><!-- #site-content -->
<?php
get_footer();
