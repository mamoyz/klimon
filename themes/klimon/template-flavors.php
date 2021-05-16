<?php 
/* Template Name: Flavors */
get_header(); ?>
<section class="about-hero klimon-hero products-hero">
			<div class="hero-left yz-animate auto">
				<h1 class="page-h1"><?php the_title(); ?></h1>
				  <?php wp_nav_menu( array( 'theme_location' => 'flavors-menu' , 'container'=> false, 'menu_class'=>'products-menu') ); ?>
			</div>
			<div class="hero-right">
				<div class="page-hero-bg slide-in auto products-hero-bg">
					<?php
					 $products_hero = get_field('products_hero');
					?>
						<img class="hidden-mobile" src="<?php echo $products_hero['about_hero_image']; ?>" alt="" />
						<img class="mobile-only" src="<?php echo $products_hero['about_hero_image_mobile']; ?>" alt="" />
				</div>
			</div>
		</section>
			<section class="home-instagram mobile-only">
			<div class="container">
				<div class="instagram-wrapper yz-animate auto">
					<div class="gallery-title">
						<h2 class="page-h1">FLAVORS</h2>
						<!-- <a class="more mobile-only" href="#">
							<span>More</span>
							<img src="assets/img/view-more.svg" alt="" />
						</a> -->
					</div>
					<div class="instagram-gallery">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php
								$flavors_carousel = get_field('flavors_carousel');
								print_r($flavors_carousel);
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
						<div class="swiper-btn-next">
							<img class="hidden-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/swiper-next.svg" alt="" />
							<!-- <img class="mobile-only" src="assets/img/swiper-next.svg" alt="" /> -->
						</div>
						<div class="swiper-btn-prev">
							<img class="hidden-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/swiper-next.svg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="home-instagram flavor-slider products-top-slider hidden-mobile">
			<div class="container">
				<div class="instagram-wrapper yz-animate auto">
					<div class="gallery-title">
						<h2 class="page-h1">FLAVORS</h2>
					</div>
					<div class="instagram-gallery">
						<div class="swiper-container">
							<div class="swiper-wrapper">
							
								<?php
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
						<div class="swiper-btn-next">
							<img src="<?php echo get_template_directory_uri();?>/assets/img/swiper-next.svg" alt="" />
						</div>
						<div class="swiper-btn-prev">
							<img class="hidden-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/swiper-next.svg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
		 $flavors_parallax_image = get_field('flavors_parallax_image') ;
		?>
		<section class="parallax-bg parallax home-parallax-bg products-parallax-bg hidden-mobile slide-in" style="background-image: url('<?php echo $flavors_parallax_image['home_parallax_image']; ?>')"></section>
		<section class="parallax-bg parallax home-parallax-bg products-parallax-bg mobile-only" style="background-image: url('<?php echo $flavors_parallax_image['home_parallax_image_mobile']; ?>')"></section>
		<section class="product-flavors">
			<div class="flavors-list-top">
				<img class="logo" src="<?php echo get_template_directory_uri();?>/assets/img/logo-black.png" alt="" />
			</div>
			<div class="flavors-list">
				<?php
// WP_Query arguments
$args = array(
	'post_type'              => array( 'flavors' ),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		$index =  $query->current_post + 1;
		$flavor_hero = get_field('flavor_hero',get_the_ID());

		?>
		<div class="flavors-list-item yz-animate">
					<?php
					if($index==1){
?>
<div class="klimon-decor product-decor white">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black-inverse.png" alt="" />
					</div>
					<div class="klimon-decor product-decor black">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black.png" alt="" />
					</div> 
					<?php
					}
					if($index==4){
						?>
	<div class="klimon-decor product-decor">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black-inverse.png" alt="" />
					</div>
					<div class="klimon-decor product-decor">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black-2.png" alt="" />
					</div>
						<?php
						
					}
?>
				
					<div class="item-img">
						<img class="bg" src="<?php echo $flavor_hero['about_hero_image'];  ?>" alt="" />
						<div>
							<img src="<?php echo $flavor_hero['about_hero_image'];  ?>" alt="" />
						</div>
					</div>
					<div class="item-content">
						<h3 style="color: <?php the_field('flavor_color',get_the_ID()); ?>"><?php
						 the_title(); 
						?></h3>
						<p><?php the_field('flavor_short_description',get_the_ID()); ?></p>
						<a href="<?php
						 the_permalink(); 
						?>">
							<span>View More</span>
							<img src="<?php echo get_template_directory_uri();?>/assets/img/view-more.svg" alt="" />
						</a>
					</div>
				</div>
		<?php
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();				  
				?>
	
			
			</div>
		</section>
		<section class="products-no-dairy">
			<h2 class="hidden-mobile">NO DAIRY. NO DIFFERENCE.</h2>
			<h2 class="mobile-only">NO DAIRY. NO DAIRY.</h2>
		</section>

<?php get_footer(); ?>