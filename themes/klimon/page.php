<?php 
/* Template Name: Contact */
get_header(); ?>
<section class="about-hero klimon-hero contact-hero page-hero">
			<div class="hero-left yz-animate auto">
				<h1 class="page-h1"><?php
				 the_title(); 
				?></h1>
			</div>
			<div class="hero-right">
				<div class="page-hero-bg slide-in auto">
					<?php $page_hero = get_field('page_hero');  ?>
					<img class="mobile-only" src="<?php
					 echo $page_hero['about_hero_image_mobile'] ;
					?>" alt="" />
					<img class="hidden-mobile" src="<?php echo $page_hero['about_hero_image']; ?>" alt="" />
				</div>
			</div>
		</section>
		<section class="product-header page-header contact-header">
			<div class="klimon-decor about left">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black-inverse.png" alt="" />
			</div>
			<div class="product-header-container page-header-container slide-in auto">
				<div>
					<h1>
						<?php
						 echo $page_hero['about_heading'];
						?>
					</h1>
					<p>
						<?php
						 echo $page_hero['about_description_text'];
						?>
					</p>
				</div>
			</div>
		
		</section>

		<section class="home-content contact">
			<div>
				<img class="logo yz-animate" src="<?php the_field('main_logo','options'); ?>" alt="" />
			</div>
			<div class="contact-form">
				<div class="container">
				<div class="page-content">
					
				<?php
				 the_content(); 
				?>
				</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>