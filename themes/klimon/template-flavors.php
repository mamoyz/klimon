<?php 
/* Template Name: Flavors */
get_header(); ?>
<section class="about-hero klimon-hero products-hero">
			<div class="hero-left yz-animate auto">
				<h1 class="page-h1">PRODUCTS</h1>
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
								 foreach ($flavors_carousel as $item) {
									?>
								<div class="swiper-slide">
									<a href="#"><img src="<?php echo $item; ?>" alt="" /></a>
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
									<a href="#"><img src="<?php echo $item; ?>" alt="" /></a>
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
		<section class="parallax-bg parallax home-parallax-bg products-parallax-bg hidden-mobile slide-in" style="background-image: url('assets/img/products-parallax.jpg')"></section>
		<section class="parallax-bg parallax home-parallax-bg products-parallax-bg mobile-only" style="background-image: url('assets/img/products-parallax-mobile.jpg')"></section>
		<section class="product-flavors">
			<div class="flavors-list-top">
				<img class="logo" src="assets/img/logo-black.png" alt="" />
			</div>
			<div class="flavors-list">
				<div class="flavors-list-item yz-animate">
					<div class="klimon-decor product-decor white">
						<img src="assets/img/decor-black-inverse.png" alt="" />
					</div>
					<div class="klimon-decor product-decor black">
						<img src="assets/img/decor-black.png" alt="" />
					</div>
					<div class="item-img">
						<img class="bg" src="assets/img/products/p1.jpg" alt="" />
						<div>
							<img src="assets/img/products/p1.jpg" alt="" />
						</div>
					</div>
					<div class="item-content">
						<h3 style="color: #c16f2c">CARAMEL BRÛLÉE</h3>
						<p>SALTED CARAMEL FLAVORED FROZEN DESSERT WITH CHOCOLATE COOKIE CRUMBLES & CRÈME BRûLéE FLAVORED SWIRL</p>
						<a href="#">
							<span>View More</span>
							<img src="assets/img/view-more.svg" alt="" />
						</a>
					</div>
				</div>
				<div class="flavors-list-item yz-animate">
					<!-- <div class="klimon-decor product-decor white">
						<img src="assets/img/decor-black-inverse.png" alt="" />
					</div> -->
					<div class="item-img">
						<img class="bg" src="assets/img/products/p2.jpg" alt="" />
						<div>
							<img src="assets/img/products/p2.jpg" alt="" />
						</div>
					</div>
					<div class="item-content">
						<h3 style="color: #900000">CHERRY BOMB</h3>
						<p>CHERRY FLAVORED FROZEN DESSERT WITH REAL BORDEAUX CHERRY CHUNKS & CHERRY SWIRL</p>
						<a href="#">
							<span>View More</span>
							<img src="assets/img/view-more.svg" alt="" />
						</a>
					</div>
				</div>
				<div class="flavors-list-item yz-animate">
					<!-- <div class="klimon-decor product-decor white">
						<img src="assets/img/decor-black-inverse.png" alt="" />
					</div> -->
					<div class="item-img">
						<img class="bg" src="assets/img/products/p3.jpg" alt="" />
						<div>
							<img src="assets/img/products/p3.jpg" alt="" />
						</div>
					</div>
					<div class="item-content">
						<h3 style="color: #6fc59e">MINT CONDITION</h3>
						<p>MINT FLAVORED FROZEN DESSERT WITH MINI DARK CHOCOLATE CHIPS & FUDGE SWIRL</p>
						<a href="#">
							<span>View More</span>
							<img src="assets/img/view-more.svg" alt="" />
						</a>
					</div>
				</div>
				<div class="flavors-list-item yz-animate">
					<!-- <div class="klimon-decor product-decor white">
						<img src="assets/img/decor-black-inverse.png" alt="" />
					</div> -->
					<div class="klimon-decor product-decor">
						<img src="assets/img/decor-black-inverse.png" alt="" />
					</div>
					<div class="klimon-decor product-decor">
						<img src="assets/img/decor-black-2.png" alt="" />
					</div>
					<div class="item-img">
						<img class="bg" src="assets/img/products/p4.jpg" alt="" />
						<div>
							<img src="assets/img/products/p4.jpg" alt="" />
						</div>
					</div>
					<div class="item-content">
						<h3 style="color: #754d26">MORNING BREW</h3>
						<p>COFFEE FLAVORED FROZEN DESSERT WITH REAL ALMOND SLICES & FUDGE SWIRL</p>
						<a href="#">
							<span>View More</span>
							<img src="assets/img/view-more.svg" alt="" />
						</a>
					</div>
				</div>
				<div class="flavors-list-item yz-animate">
					<!-- <div class="klimon-decor product-decor white">
						<img src="assets/img/decor-black-inverse.png" alt="" />
					</div> -->
					<div class="item-img">
						<img class="bg" src="assets/img/products/p5.jpg" alt="" />
						<div>
							<img src="assets/img/products/p5.jpg" alt="" />
						</div>
					</div>
					<div class="item-content">
						<h3 style="color: #fead00">SUNRISE BANG</h3>
						<p>CREAMY ORANGE FLAVORED FROZEN DESSERT WITH CREAM FLAVORED SWIRL</p>
						<a href="#">
							<span>View More</span>
							<img src="assets/img/view-more.svg" alt="" />
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="products-no-dairy">
			<h2 class="hidden-mobile">NO DAIRY. NO DIFFERENCE.</h2>
			<h2 class="mobile-only">NO DAIRY. NO DAIRY.</h2>
		</section>

<?php get_footer(); ?>