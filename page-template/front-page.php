<?php
/**
 * Template Name: Front Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<!-- Section Categories-->
	<div class="section section-categories border-top-light-blue">
		<div class="container">
			<div class="row">
				<h1 class="section-title text-center">Head-to-Toes Goodness</h1>
				<h4 class="section-subtitle">You are a Few Clicks Away to Unwind from the Daily Grind</h4>

				<div class="col-xs-6 col-sm-6 col-md-3 box ">
					<a href="#" class="inner category_massage">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Massage</h5>				
								</div>									
							</div>
						</div>					
					</a>	
				</div>

				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="#" class="inner category_medical-therapy">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Medical Therapy</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="#" class="inner category_waxing">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Waxing, Threading & Laser Hair Removal</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="" class="inner category_hair-styling">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Hair Styling</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="#" class="inner category_barber">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Barber</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="#" class="inner category_nail-care">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Nail Care</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="" class="inner category_facials">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Facials & Body Treatments</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-3 box">
					<a href="#" class="inner category_makeup">
						<div class="overlay">
							<div class="content vertical-parent">
								<div class="vertical-child">
									<h5 class="box-title">Make Up</h5>									
								</div>
							</div>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>

	<div class="section section-two-column section-zero-padding">
		<div class="row">
			<div class="col-md-6 box box-video video-wrapper-control vid-overlay-50">
				<div class="vertical-parent">
					<div class="vertical-child">
						<video autoplay muted poster="<?php echo get_stylesheet_directory_uri(); ?>/img/section-bg-video.jpg" id="bgvid" loop>
						 WCAG general accessibility recommendation is that media such as background video play through only once. 
						 Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the
						  same way created by pressing the "Pause" button 
							<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video-2.mp4" type="video/mp4">
						</video>
						<p class="box-subtitle">Leave Your Stress with Blissful Abandon. Indulge Now!</p>	
						<a href="" class="">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icon-play.png" alt="">
						</a>
					</div>
				</div>					
			</div>		
			<div class="col-md-6 box box-post-job">
				<div class="vertical-parent">
					<div class="vertical-child">
						<h2 class="box-title ">Post a Job</h2>
						<p class="box-subtitle">Book Your Indulgence Givers for Your Event</p>
						<a href="" class="btn btn-primary btn-green">Sign Up</a>			
						<a href="" class="btn btn-lightblue">Log in</a>					
					</div>					
				</div>
			</div>
		</div>
	</div>



	<div class="section section-indulgence-giver">
		<div class="container">
			<div class="row">
				<h2 class="section-title">Our Top Indulgence Giver</h2>
			</div>
			<div class="row">
				<div class="box">

					<div class="col-md-3 item">
						<div class="profile-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/giver-1.png" alt="">
						</div>
						<h3 class="profile-name">Profile Name</h3>	
						<p class="profile-desc">Our Top Indulgence Giver</p>	
					</div>	

					<div class="col-md-3 item">
						<div class="profile-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/giver-2.png" alt="">
						</div>
						<h3 class="profile-name">Profile Name</h3>	
						<p class="profile-desc">Our Top Indulgence Giver</p>	
					</div>	

					<div class="col-md-3 item">
						<div class="profile-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/giver-3.png" alt="">
						</div>
						<h3 class="profile-name">Profile Name</h3>	
						<p class="profile-desc">Our Top Indulgence Giver</p>	
					</div>	

					<div class="col-md-3 item">
						<div class="profile-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/giver-4.png" alt="">
						</div>
						<h3 class="profile-name">Profile Name</h3>	
						<p class="profile-desc">Our Top Indulgence Giver</p>	
					</div>	

				</div>
			</div>			
		</div>
	</div>

<?php get_footer(); ?>
