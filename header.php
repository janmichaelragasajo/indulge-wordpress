<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>

<!--[if lt IE 9]>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<nav class="navbar navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			<!-- 
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../navbar/" class="active">List Services</a></li>
					<li><a href="../navbar-static-top/">Help</a></li>
					<li><a href="../navbar-static-top/">Log in</a></li>
				</ul>
			-->
			
			<?php
			    wp_nav_menu( array(
			        'menu'              => 'menu-list-services',
			        'theme_location'    => 'primary',
			        'depth'             => 2,
			        'container'         => 'div',
			        'container_class'   => 'collapse navbar-collapse navbar-right',
					'container_id'      => 'bs-example-navbar-collapse-1',
			        'menu_class'        => 'nav navbar-nav',
			        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			        'walker'            => new wp_bootstrap_navwalker())
			    );
			?>

			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<?php 

		if ( is_front_page() ) {

			get_template_part( "content", "hero" );

		} else { 

			// No Slider

		}

	 ?>
