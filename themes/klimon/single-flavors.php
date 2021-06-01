<?php 
get_header(); ?>

	<section class="products-hero about-hero klimon-hero contact-hero">
			<div class="hero-left yz-animate auto">
				<h1 class="page-h1"><a href="<?php echo get_site_url();?>/flavors">FLAVORS</a></h1>
                <?php wp_nav_menu( array( 'theme_location' => 'flavors-menu' , 'container'=> false, 'menu_class'=>'products-menu') ); ?>

				<!-- <ul class="products-menu">
					<li class="current-menu-item">
						<a href="#">CARAMEL BRûLéE</a>
					</li>
					<li>
						<a href="#">CHERRY BOMB</a>
					</li>
					<li>
						<a href="#">MINT CONDITION</a>
					</li>
					<li>
						<a href="#">MORNING BREW</a>
					</li>
					<li>
						<a href="#">SUNRISE BANG</a>
					</li>
				</ul> -->
			</div>
			<div class="hero-right">
				<div class="page-hero-bg slide-in auto">
					<?php 
					$flavor_hero = get_field('flavor_hero',get_the_ID());
					?>
					<img class="hidden-mobile" src="<?php echo $flavor_hero['desktop_image']; ?>" alt="" />
					<img class="mobile-only" src="<?php echo $flavor_hero['about_hero_image_mobile']; ?>" alt="" />
				</div>

			</div>
		</section>
		<section class="product-header single-product-header">
							<div class="next-product-link yz-animate auto">

<?php
$nextTemplate = '<span>NEXT FLAVOR</span>
						<img src="'.get_template_directory_uri().'/assets/img/next-flavor-arrow.png" alt="" />';
						    
if( get_adjacent_post(false, '', false) ) { 
	next_post_link('%link', $nextTemplate);
} else { 
	$last = new WP_Query('post_type=flavors&posts_per_page=1&order=ASC'); $last->the_post();
    	echo '<a href="' . get_permalink() . '">'.$nextTemplate.'</a>';
    wp_reset_query();
}; 

// next_post_link( '%link', $nextTemplate); ?>
						
				</div>
			<div class="product-header-container slide-in auto">
				<h1 style="color: <?php the_field('flavor_color',get_the_ID()); ?>"><?php the_field('flavor_name',get_the_ID()); ?></h1>
				<h3><?php the_field('flavor_short_description',get_the_ID()); ?></h3>
			</div>
		</section>
		<section class="product-info">
			<div class="product-info-bg hidden-mobile" style="background-image: url('<?php the_field('flavor_background_image'); ?>')"></div>
			<div class="product-info-bg mobile-only" style="background-image: url('<?php the_field('flavor_background_image_mobile'); ?>')"></div>
			<h2 class="page-h1 slide-in">NUTRITION FACTS + INGREDIENTS</h2>
			<div class="klimon-decor product-decor white mobile-only">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-white.png" alt="" />
			</div>
			<div class="row yz-animate">
				<div class="product-primary-img">
					<img src="<?php the_field('flavor_image'); ?>" alt="" />
				</div>
				<div class="product-info-content">
					<img class="nfp" src="<?php the_field('nutrition_facts',get_the_ID()); ?>" alt="" />
					<h2 class="page-h1 yz-animate">INGREDIENTS</h2>
					<div class="info yz-animate">
					<?php the_field('ingredients',get_the_ID()); ?>	
				</div>
				</div>
			</div>
		</section>
		<section class="home-instagram flavor-slider product-bottom-slider">
			<img class="logo yz-animate" src="<?php the_field('main_logo','options'); ?>" alt="" />
			<div class="klimon-decor product-decor white">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black-inverse.png" alt="" />
			</div>
			<div class="container">
				<div class="instagram-wrapper yz-animate auto">
					<div class="gallery-title">
						<h2 class="page-h1">FLAVORS</h2>
					</div>
					<div class="instagram-gallery">
						<div class="swiper-container">
							<div class="swiper-wrapper">
							<?php
								$flavors_carousel = get_field('flavors_carousel','options');
								
								 foreach ($flavors_carousel as $item) {
									?>
								<div class="swiper-slide">
									<a href="<?php echo the_permalink($item['carousel_product'][0]); ?>"><img src="<?php echo $item['carousel_product_image']; ?>" alt="" /></a>
								</div>
									<?php
								 } 
								?>

							</div>
						</div>
						<div class="swiper-btn-next hidden-mobile">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/swiper-next.png" alt="" />
						</div>
						<div class="swiper-btn-next mobile-only">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/products/arrow-right-black.png" alt="" />
						</div>
						<div class="swiper-btn-prev mobile-only">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/products/arrow-left-black.png" alt="" />
						</div>
							<div class="swiper-btn-prev">
							<img class="hidden-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/swiper-next.png" alt="" />
						</div>
						<!-- <div class="swiper-btn-prev mobile-only">
              <img src="assets/img/arrow-left.svg" alt="" />
            </div> -->
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>