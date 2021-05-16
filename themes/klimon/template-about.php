<?php 
/* Template Name: About */
get_header(); ?>
<section class="about-hero klimon-hero contact-hero ">
			<div class="hero-left yz-animate auto about-hero-left">
				<h1 class="page-h1 about-page-h1"><?php the_title(); ?></h1>
			</div>
			<div class="hero-right">
				<div class="page-hero-bg slide-in auto">
					<img class="mobile-only" src="<?php the_field('about_hero_image_mobile'); ?>" alt="" />
					<img class="hidden-mobile" src="<?php the_field('about_hero_image'); ?>" alt="" />
				</div>
			</div>
		</section>
		<section class="product-header contact-header about-header">
			<div class="klimon-decor about-header-decor about left">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black-inverse.png" alt="" />
			</div>
			<div class="product-header-container about-page slide-in auto auto-mobile">
				<div>
					<h1><?php the_field('about_heading'); ?></h1>
					<p>
						<?php the_field('about_description_text'); ?>
					</p>
				</div>
			</div>
			<div class="decor-white klimon-decor about right filter">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black-2.png" alt="" />
			</div>
		</section>

		<section class="home-content about yz-animate">
			<div class="mobile-only decor-white klimon-decor about">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black-2.png" alt="" />
			</div>
			<h2 class="page-h1"><?php the_field('about_primary_heading'); ?></h2>

			<div class="home-content-img">
				<img class="bg" src="<?php the_field('about_sec2_background_image'); ?>" alt="" />
				<div>
					<img src="<?php the_field('about_sec2_background_image'); ?>" alt="" />
				</div>
			</div>
			<div class="home-content-desc">
				<h1>
					<?php the_field('about_secondary_heading'); ?>
				</h1>
				<p><?php the_field('about_sec2_description_text'); ?></p>
				<div class="no-dairy">
					<h2 class="hidden-mobile">NO DAIRY. NO DIFFERENCE.</h2>
					<h2 class="mobile-only">NO DAIRY. NO DAIRY.</h2>
				</div>
			</div>
		</section>
		<!-- <section class="about-klimon-logo mobile-only">
			<div>
				<img src="<?php the_field('main_logo','options'); ?>" alt="" />
			</div>
		</section> -->
		
		<section class="parallax-bg parallax about-parallax-bg hidden-mobile" data-scale="100" style="background-image: url('<?php echo get_field('about_parallax')['home_parallax_image']; ?>')"></section>
		<section class="parallax-bg parallax about-parallax-bg mobile-only" data-scale="100" style="background-image: url('<?php echo get_field('about_parallax')['home_parallax_image_mobile']; ?>')"></section>
		<section class="home-content about-flavors yz-animate">
			<div class="decor-black klimon-decor home-content-decor down">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black.png" alt="" />
			</div>
			<h2 class="page-h1">Flavors</h2>
			<div class="home-content-img">
				<img class="bg" src="<?php the_field('about_sec3_background_image'); ?>" alt="" />
				<div>
					<img src="<?php the_field('about_sec3_background_image'); ?>" alt="" />
				</div>
			</div>
			<div class="home-content-desc">
				<h1><?php the_field('about_sec3_heading'); ?></h1>
				<?php the_field('about_sec3_description_text'); ?>
				<a href="<?php the_field('about_sec3_cta_url'); ?>" class="btn-view-more"><?php the_field('about_sec3_cta_title'); ?></a>
			</div>
		</section>
		<!-- <section class="about-bottom hidden-mobile">
			<div class="hidden-mobile decor-white klimon-decor about">
				<img src="assets/img/decor-black-2.png" alt="" />
			</div>
			<div class="about-bottom-content">
				<p>
					Lorem ipsum dolor sit amet,
					<br />
					consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer\pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
				</p>
			</div>
		</section> -->
<section class="about-no-dairy-mobile mobile-only">
	<div class="container">
				<div class="no-dairy">
					<h2 class="mobile-only">NO DAIRY. NO DAIRY.</h2>
				</div>
	</div>
</section>
<?php get_footer(); ?>