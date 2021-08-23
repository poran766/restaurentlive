<?php

/**
 * Template Name: Home Page
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */


get_header();
?>
<div class="main-body">
	<div class="container">
		<div class="gylophone d-lg-none">
			<a href="tel:123456789" class="btn-body">
				<span><i class="fas fa-phone-alt"></i> 1234567890</span>
			</a>
			<p>* We Deliver</p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="main-image">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/jumbotron_1200.jpg" alt="">
		</div>
		<div class="row row-section">
			<div class="col-md-4">
				<a href="#">
					<div class="category-tile">
						<img width="100%" height="250" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
						<span>lunch</span>
					</div>
				</a>
			</div>
			
			<div class="col-md-4">
				<a href="#">
					<div class="category-tile">
						<img width="100%" height="250" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
						<span>SPECIALS</span>
					</div>
				</a>
			</div>
			
			<div class="col-md-4">
				<a href="#">
					<div class="category-tile">
						<img width="100%" height="250" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
						<span>MAP</span>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<?php

/* Start the Loop */
while (have_posts()) :
	the_post();
	get_template_part('template-parts/content/content-page');

	// If comments are open or there is at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
