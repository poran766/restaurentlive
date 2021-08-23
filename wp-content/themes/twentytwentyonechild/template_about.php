<?php

/**
 * Template Name: About Page
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

<div class="about-body">
	<h3>About This Website</h3>
	<p class="about-font">It may be hard to tell, but this website does much more than just help you choose a delicious dish from this cozy little restaurant. The website of this restaurant has served over 100,000 students all over the world (and counting), teaching them the skills of how to develop a website from scratch.<br><br>
		The development of this website was part of the curriculum of 2 <a href="#">Coursera.org</a> courses: <a href="#">HTML</a>, <a href="#">CSS</a>, and <a href="#">Javascript for Web Developers</a> and <a href="#">Single Page Web Applications with AngularJS</a>.<br>
		All courses have an option to be taken for free.<br><br>
		As of November, 2016, both courses made it to the #1 Top Rated Course spot (among close to 1,800 available courses).<br><br>
		To give you a little preview, here is a video from one of the courses:
	</p>
	<div>
		<iframe width="1140" height="641" src="https://www.youtube.com/embed/YR_rIjUIDeE?start=5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<p class="about-font">The courses and this site was not a labor of just one person. We owe a debt of gratitute to:</p>
		<ul>
			<li><a href="#">Moshe Chaikin</a> of <a href="#">StoryWithLight.com</a>, who not only filmed and produced the Field Trip video (featured above), but also provided food photography so the users of the site can see a picture of each dish.</li>
			<li><a href="#">Kalman Hazins</a>, who coded the backend service for this website.</li>
			<li>Finally, the owners of David Chu's China Bistro restaurant who graciously agreed to assist us in this project.</li>
		</ul>
	</div>
	<p>* The final implementation of this site is done in AngularJS. If you would like the see the version of this site without the Angular framework, <a href="#">click here</a>.</p>


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
