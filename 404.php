<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header( 'secondheader' ); ?>

<section class="inner-page">
	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found parent-wrap">
				<div class="child-wrap">

					<span><i class="icon-caution"></i></span>
					<h4 class="section-title">Page not found</h4>
					<p>The page you are loading for either doesn't exist or is not here anymore.</p>	
					<p>Return <a href="<?php bloginfo( 'url' ) ?>/">home</a></p>				
				</div>
				
			</section><!-- .error-404 -->
		</main><!-- .site-main -->

	</div><!-- .content-area -->	
</section>

<?php get_footer(); ?>

