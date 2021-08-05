<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/nhrrob-css-helper.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/ee8379839a.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'twentytwentyone'); ?></a>

		<?php //get_template_part('template-parts/header/site-header'); 
		?>

		<!-- Header section starts -->

		<!-- Navigation  starts-->

		<nav class="navbar navbar-expand-lg navbar-light navbar-background">
			<div class="container">
				<div class="navbar-header">
					<a href="#" class="pull-left visible-md visible-lg">
						<div class="logo-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/restaurant-logo_large.png" alt="Bistro-logo"></div>
					</a>
					<div class="navbar-brand">
						<a href="#">
							<h2>DAVID CHU'S CHINA BISTRO</h2>
							<p><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/star-k-logo.png" alt=""><span>KOSHER CERTIFIED</span></p>
						</a>
					</div>
				</div>
				<div>

				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse chaina-bistro-header" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link menu" href="#"> <span><i class="fas fa-utensils"></i>
									<p>Menu</p>
								</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu" href="#"><span><i class="fas fa-info-circle"></i>
									<p>About</p>
								</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link menu" href="#"><span><i class="fas fa-certificate"></i>
									<p>Awards</p>
								</span></a>
						</li>
						<li class="nav-item right-side-header">
							<a class="nav-link" href="#">
								<h3 class="header-phone-number"> 410-602-5008 </h3>
								<p class="we-deliver">* We Deliver</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Navigation ends -->


		<!-- Header section starts -->

		<!-- <div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main"> -->