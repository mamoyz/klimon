<footer>
			<div class="container">
				<div class="footer-row">
					<div class="col contact">
						<div class="social">
							<span class="h3">FOLLOW US</span>
							<a href="<?php the_field('instagram_url','options'); ?>">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/ig-icon.png" alt="" />
							</a>
							<a href="<?php the_field('facebook_url','options'); ?>">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/fb-icon.png" alt="" />
							</a>
						</div>
						<p class="footer-tagline hidden-mobile"><?php the_field('footer_text','options'); ?></p>
					</div>
					<div class="col footer-menu">
					                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' , 'container'=> false) ); ?>

					</div>
					<div class="col products-menu">
						<h3 class="h3"><a href="<?php echo get_site_url();?>/flavors">FLAVORS</a></h3>
					                <?php wp_nav_menu( array( 'theme_location' => 'flavors-menu' , 'container'=> false) ); ?>

					</div>
				</div>

				<div class="footer-copyright">
					<p class="mobile-only footer-tagline"><?php the_field('footer_text','options'); ?></p>
					<p>
						<?php the_field('copyright_text','options'); ?>
						<a href="<?php echo get_site_url();?>/terms-conditions">Terms & Conditions</a>
						<br />
					</p>
				</div>
			</div>
		</footer>
        <?php wp_footer(); ?>
		<script>
		$(window).on("load", function () {
		console.log(`
		
		

			█▄▀ █░░ █ █▀▄▀█ █▀█ █▄░█
			█░█ █▄▄ █ █░▀░█ █▄█ █░▀█		
		
		

		`);

		let preloaderVisited = localStorage.getItem("preloaderVisited");
		let slideshowDelay, introDelay, preloaderDuration;
		if (preloaderVisited && window.location.pathname != "/") {
			introDelay = 100;
			slideshowDelay = 1200;
			setTimeout(function () {
				$(window).scrollTop(0);
				$("#preloader").addClass("loaded");
				$("#preloader").fadeOut(0);
			}, 0);
		} else {
			introDelay = 3000;
			preloaderDuration = 3000;
			slideshowDelay = 4000;
			setTimeout(function () {
				$(window).scrollTop(0);
				$(window).scrollTop(0);
				$("#preloader").addClass("loaded");
			}, 10);
			setTimeout(function () {
				$("#preloader").fadeOut(500);
			}, preloaderDuration);
			localStorage.setItem("preloaderVisited", true);
		}

		setTimeout(function () {
			$(".slide-in.auto").addClass("show");
			if ($(window).innerWidth() < 961) {
				$(".slide-in.auto-mobile").addClass("show");
			}
			$(".yz-animate.auto").addClass("init");
		}, introDelay);
		setTimeout(function () {
			let slides = $(".home-hero .hero-right .slideshow-item").length;
			let dots = "";
			for (let i = 0; i < slides; i++) {
				if (i == 0) {
					dots += "<span class='active'></span>";
				} else {
					dots += "<span></span>";
				}
			}
			$(".slideshow-dots").html(dots);
			$(".home-hero .hero-right .slideshow-item").eq(0).addClass("active show");
			autoSlide = setInterval(() => {
				slideShowNext();
			}, 5200);
		}, slideshowDelay);
	});
		</script>
	</body>
</html>