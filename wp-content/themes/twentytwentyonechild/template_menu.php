<?php

/**
 * Template Name: Menu Page
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


<div class="container menu-background">
	<h2 id="menu-categories-title" class="text-center menu-header-name">Menu categories</h2>
	<div class="text-center menu-header-name">Substituting white rice with brown rice or fried rice after 3:00pm will be $1.50 for a pint and $2.50 for a quart.</div>
</div>
<section class="row menu-background">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<a href="#">
			<div class="category-tile">
				<img width="200" height="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/F.jpg" alt="">
				<span>lunch</span>
			</div>
		</a>
	</div>
</section>

<?php
/* Start the Loop */
while (have_posts()) :
	the_post();
	// get_template_part('template-parts/content/content-page');

	// If comments are open or there is at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
