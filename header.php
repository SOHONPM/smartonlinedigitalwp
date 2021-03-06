<?php

/**
 * Theme Header
 *
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @since   1.0.0
 * @package themezero
 *
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


	<?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?>>
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<span class="fa fa-spinner fa-spin" aria-hidden="true"></span>
		</div>
	</div>
	<!-- ./Preloader -->
	<!-- Site-header -->
	<header id="masthead" class="site-header" itemscope itemtype="http://schema.org/WPHeader">
		<div class="site-header__top">
			<div class="container">
				<div class="grid">
					<div class="col--left">
						<?php if (get_theme_mod('header_info')) : ?>
							<span><?php echo get_theme_mod('header_info') ?></span>
						<?php endif; ?>
					</div>
					<div class="col--right">
						<?php if (get_theme_mod('header_info_2')) : ?>
							<?php echo get_theme_mod('header_info_2') ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="site-header__middle">
			<div class="container">

				<!-- Site-logo -->
				<div class="wrapper">
					<div class="site-logo">
						<a href="<?php echo site_url() ?>"><?php themezero_get_logo() ?></a>
					</div>
					<!-- ./Site-logo -->
					<div class="call-now">
						<p class="call">Call Now</p>
						<p class="phone-number">+61 23 993 343</p>
					</div>
				</div>
				<?php if (has_nav_menu('top')) : ?>
					<!-- Site Nav -->
					<div class="site-nav">
						<?php get_template_part('template-parts/navigation/main', 'menu'); ?>
						<!-- <?php //if( get_theme_mod('header_button') ) : 
								?>
			 	 		<?php //echo get_theme_mod('header_button') 
							?>
								
			 	 	<?php //endif; 
						?> -->
					</div>
					<!-- . Site Nav -->
				<?php endif; ?>
			</div>
		</div>
	</header>
	<!-- ./Site-header -->
	<!-- Accessibility -->
	<div class="container screen-reader-text">
		<a href="#main"><?php __('Skip to main content', 'themezero') ?></a>
	</div>
	<!-- ./Accessibility -->