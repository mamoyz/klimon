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
						<p class="hidden-mobile"><?php the_field('footer_text','options'); ?></p>
					</div>
					<div class="col footer-menu">
					                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' , 'container'=> false) ); ?>

					</div>
					<div class="col products-menu">
						<h3 class="h3">PRODUCTS</h3>
					                <?php wp_nav_menu( array( 'theme_location' => 'flavors-menu' , 'container'=> false) ); ?>

					</div>
				</div>

				<div class="footer-copyright">
					<p class="mobile-only"><?php the_field('footer_text','options'); ?></p>
					<p>
						<?php the_field('copyright_text','options'); ?>
						<a href="#">Terms & Conditions</a>
						<br />
					</p>
				</div>
			</div>
		</footer>
        <?php wp_footer(); ?>
	</body>
</html>