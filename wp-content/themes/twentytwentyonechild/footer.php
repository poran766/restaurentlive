<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>

<!-- Footer section starts -->
<div class="footer-section-wrap">
	<div class="container">
		<div class="row footer-allignment">
			<div class="col-md-4">
				<h5 class="footer-header-name">Hours:</h5>
				<p>Sun-Thurs: 11:15am - 10:00pm</p>
				<p>Fri: 11:15am - 2:30pm</p>
				<p>Saturday Closed</p>
				<hr>
			</div>
			
			<div class="col-md-4">
				<h5 class="footer-header-name">Address:</h5>
				<p>7105 Reisterstown Road</p>
				<p>Baltimore, MD 21215</p>
				<p class="delivary-area">* Delivery area within 3-4 miles, with minimum order of $20 plus $3 charge for all deliveries.</p>
				<hr>
			</div>

			<div class="col-md-4">
				<p class="qoute-class-1">"The best Chinese restaurant I've been to! And that's saying a lot, since I've been to many!"</p>
				<p class="qoute-class-2">"Amazing food! Great service! Couldn't ask for more! I'll be back again and again!"</p>
			</div>
		</div>
		<div class="col-md-12 copyright-china">
			<p>@ Copyright David Chu's China Bistro 2016 | Admin</p>
		</div>
	</div>
</div>
<!-- Footer section ends -->


<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if (has_nav_menu('footer')) : ?>
		<nav aria-label="<?php esc_attr_e('Secondary menu', 'twentytwentyone'); ?>" class="footer-navigation">
			<ul class="footer-navigation-wrapper">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'items_wrap'     => '%3$s',
						'container'      => false,
						'depth'          => 1,
						'link_before'    => '<span>',
						'link_after'     => '</span>',
						'fallback_cb'    => false,
					)
				);
				?>
			</ul><!-- .footer-navigation-wrapper -->
		</nav><!-- .footer-navigation -->
	<?php endif; ?>
	<div class="site-info">
		<div class="site-name">
			<?php if (has_custom_logo()) : ?>
				<div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php else : ?>
				<?php if (get_bloginfo('name') && get_theme_mod('display_title_and_tagline', true)) : ?>
					<?php if (is_front_page() && !is_paged()) : ?>
						<?php bloginfo('name'); ?>
					<?php else : ?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
		</div><!-- .site-name -->
		<div class="powered-by">
			<?php
			printf(
				/* translators: %s: WordPress. */
				esc_html__('Proudly powered by %s.', 'twentytwentyone'),
				'<a href="' . esc_url(__('https://wordpress.org/', 'twentytwentyone')) . '">WordPress</a>'
			);
			?>
		</div><!-- .powered-by -->

	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>

</html>