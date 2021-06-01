<?php 
/* Template Name: Terms */
get_header(); ?>
<section class="about-hero klimon-hero contact-hero">
			<div class="hero-left yz-animate auto">
				<h1 class="page-h1 terms-h1"><?php
				 the_title(); 
				?></h1>
			</div>
			<div class="hero-right">
				<div class="page-hero-bg slide-in auto">
					<?php $contact_hero = get_field('contact_hero');  ?>
					<img class="mobile-only" src="<?php
					 echo $contact_hero['about_hero_image_mobile'] ;
					?>" alt="" />
					<img class="hidden-mobile" src="<?php echo $contact_hero['about_hero_image']; ?>" alt="" />
				</div>
			</div>
		</section>


		<section class="term-header">
			<div class="terms-header slide-in auto auto-mobile show">
	<?php the_field('terms_content'); ?>
			</div>
		</section>

<?php get_footer(); ?>