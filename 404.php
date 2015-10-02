<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="section section--innerpage">
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area col-md-12">
				<main id="main" class="site-main" role="main">
					<section class="error-404 not-found ">
						<div class="child-wrap">
							<span><i class="icon-caution"></i></span>
							<h1 class="section-title">Page not found</h1>
							<p>We are sorry but this page doesn't exist or has been removed.</p>	
							<a href="<?php echo bloginfo( 'home' ); ?>/" class="btn btn-green">Home</a>			
						</div>
					</section><!-- .error-404 -->
				</main><!-- .site-main -->
			</div><!-- .content-area -->
		</div>
	</div>	
</div>

<?php get_footer(); ?>

