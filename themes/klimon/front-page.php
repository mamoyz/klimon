<?php get_header(); ?>
<section class="home-hero klimon-hero">
			<div class="hero-left yz-animate auto hidden-mobile">
				<img src="<?php the_field('home_hero_logo'); ?>" alt="" />
			</div>
	
            	<div class="hero-right  hero-slideshow home-hero-slideshow slideshow-homepage">
				<div class="slideshow-container" v-touch:swipe="swipeHandler">
                    <?php
                    $homeSlideShow = get_field('home_slideshow_images');
                     foreach ($homeSlideShow as $slide) {
                        
                        ?>
	                <div class="slideshow-item">
						<img class="hidden-mobile" src="<?php echo $slide["desktop_image"]; ?>" alt="" />
						<img class="mobile-only" src="<?php echo $slide["mobile_image"]; ?>" alt="" />
					</div>
                    <?php
                     } 
                    ?>
				
				
				</div>
				<div class="slideshow-dots yz-animate auto"></div>
				<!-- <div class="hero-slideshow-controls yz-animate auto">
					<button class="prev">
						<img src="assets/img/arrow-left.svg" alt="" />
					</button>
					<button class="next">
						<img src="assets/img/arrow-right.svg" alt="" />
					</button>
				</div> -->
			</div>
		</section>
		<section class="home-instagram slide-in auto yz-animate ">
			<div class="container ">
				<div class="instagram-wrapper yz-animate auto">
					<div class="gallery-title">
						<h2 class="page-h1">GALLERY</h2>
						<!-- <a class="more mobile-only" href="#">
							<span>More</span>
							<img src="assets/img/view-more.svg" alt="" />
						</a> -->
					</div>
					<div class="instagram-gallery">
						<div class="swiper-container">
							<div class="swiper-wrapper">
                                <?php
                                $home_gallery_images = get_field('home_gallery_images');
                                 foreach ($home_gallery_images as $item) {
                                    ?>
                                <div class="swiper-slide">
									<!-- <a href="<?php the_field('instagram_url','options'); ?>"> -->
									<img src="<?php echo $item; ?>" alt="" />
									<!-- </a> -->
								</div>
                                    <?php
                                 } 
                                ?>
							</div>
						</div>
						<div class="swiper-btn-next">
							<img class="hidden-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/swiper-next.png" alt="" />

						</div>
							<div class="swiper-btn-prev">
							<img class="hidden-mobile" src="<?php echo get_template_directory_uri();?>/assets/img/swiper-next.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="parallax-bg parallax home-parallax-bg slide-in hidden-mobile" data-scale="130" style="background-image: url('<?php the_field('home_parallax_image'); ?>')"></section>
		<section class="parallax-bg parallax home-parallax-bg slide-in mobile-only" data-scale="130" style="background-image: url('<?php the_field('home_parallax_image_mobile'); ?>')"></section>
		<section class="home-content yz-animate">
			<div class="decor-black klimon-decor home-content-decor">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black.png" alt="" />
			</div>
			<div class="decor-white klimon-decor home-content-decor">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-white.png" alt="" />
			</div>
			<div class="home-content-img">
				<img class="bg" src="<?php the_field('home_content_background_image'); ?>" alt="" />
				<div>
					<img src="<?php the_field('home_content_background_image'); ?>" alt="" />
				</div>
			</div>
			<div class="home-content-desc">
				<h1>
				<?php the_field('home_content_heading'); ?>
				</h1>
                <?php the_field('home_content_description_text'); ?>
				<div class="no-dairy">
					<h2 class="hidden-mobile">NO DAIRY. NO DIFFERENCE.</h2>
					<h2 class="mobile-only">NO DAIRY. NO DAIRY.</h2>
				</div>
			</div>
		</section>
		<section class="home-sda">
			<h2 class="page-h1">ADS</h2>
			<div class="grid">

            <?php
             $ads_images = get_field('ads_images') ;
             foreach ($ads_images as $ad) {
                ?>
            	<div class="home-da-item yz-animate">
					<img class="bg" src="<?php echo $ad; ?>" alt="" />
					<div><img src="<?php echo $ad; ?>" alt="" /></div>
				</div>
                <?php
             }
            ?>
			
			</div>
		</section>
<?php get_footer(); ?>