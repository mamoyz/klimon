<?php 
/* Template Name: Contact */
get_header(); ?>
<section class="about-hero klimon-hero contact-hero">
			<div class="hero-left yz-animate auto">
				<h1 class="page-h1"><?php
				 the_title(); 
				?></h1>
			</div>
			<div class="hero-right">
				<div class="page-hero-bg slide-in auto">
					<?php $contact_hero = get_field('contact_hero'); print_r($contact_hero); ?>
					<img class="mobile-only" src="assets/img/contact/contact-hero-mobile.jpg" alt="" />
					<img class="hidden-mobile" src="assets/img/contact/contact-hero.jpg" alt="" />
				</div>
			</div>
		</section>
		<section class="product-header contact-header">
			<div class="klimon-decor about left">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black-inverse.png" alt="" />
			</div>
			<div class="product-header-container slide-in">
				<div>
					<h1>
						WE’D LOVE TO
						<br />
						HEAR FROM YOU!
					</h1>
					<p>
						Lorem ipsum dolor sit amet,
						<br />
						consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
					</p>
				</div>
			</div>
			<div class="decor-white klimon-decor about right">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/decor-black-2.png" alt="" />
			</div>
		</section>

		<section class="home-content contact">
			<div>
				<img class="logo yz-animate" src="<?php the_field('main_logo','options'); ?>" alt="" />
			</div>
			<div class="contact-form">
				<div class="container">
					<form action="/contact/#wpcf7-f160-o1" method="post" class="wpcf7-form" novalidate="novalidate">
						<div class="form-group">
							<label>
								First NAME
								<span>*</span>
							</label>
							<input type="text" name="fullname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required kinjabang-input" aria-required="true" aria-invalid="false" />
						</div>
						<div class="form-group">
							<label>
								LAst NAME
								<span>*</span>
							</label>
							<input type="text" name="fullname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required kinjabang-input" aria-required="true" aria-invalid="false" />
						</div>
						<div class="form-group">
							<label>
								COMPANY NAME
								<span></span>
							</label>
							<input type="text" name="companyname" value="" size="40" class="wpcf7-form-control wpcf7-text kinjabang-input" aria-invalid="false" />
						</div>
						<div class="form-group">
							<label>
								EMAIL
								<span>*</span>
							</label>
							<input type="email" name="emailaddress" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email kinjabang-input" aria-required="true" aria-invalid="false" />
						</div>

						<div class="form-group">
							<label>
								ADDRESS 1*
								<span></span>
							</label>
							<input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text kinjabang-input" aria-invalid="false" />
						</div>
						<div class="form-group">
							<label>
								ADDRESS 2
								<span></span>
							</label>
							<input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text kinjabang-input" aria-invalid="false" />
						</div>
						<div class="form-group">
							<label>
								CITY *
								<span></span>
							</label>
							<input type="text" name="city" value="" size="40" class="wpcf7-form-control wpcf7-text kinjabang-input" aria-invalid="false" />
						</div>
						<div class="form-group">
							<label>
								STATE / PROVINCE
								<span></span>
							</label>
							<div class="kinjabang-select">
								<select name="state" class="wpcf7-form-control wpcf7-select kinjabang-input" aria-invalid="false">
									<option value="Select State">Select State</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>
								COUNTRY*
								<span></span>
							</label>
							<div class="kinjabang-select">
								<select name="state" class="wpcf7-form-control wpcf7-select kinjabang-input" aria-invalid="false">
									<option value="Select State">Select Country</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>
								ZIP POSTAL CODE*
								<span></span>
							</label>
							<input type="text" name="zip" value="" size="40" class="wpcf7-form-control wpcf7-text kinjabang-input" aria-invalid="false" />
						</div>

						<div class="form-group">
							<label>
								HOW DID YOU HEAR ABOUT US?
								<span></span>
							</label>
							<p></p>
							<div class="kinjabang-select">
								<select name="iam" class="wpcf7-form-control wpcf7-select kinjabang-input" aria-invalid="false">
									<option value="Internet Search">Internet Search</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>I AM</label>
							<div class="kinjabang-select">
								<select name="iam" class="wpcf7-form-control wpcf7-select kinjabang-input" aria-invalid="false">
									<option value="Consumer">Consumer</option>
									<option value="Vendor">Vendor</option>
									<option value="Distributor">Distributor</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label>
								YOUR MESSAGE
								<span>*</span>
							</label>
							<textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required kinjabang-input" aria-required="true" aria-invalid="false"></textarea>
						</div>
						<div class="form-group text-right">
							<input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" />
							<span class="ajax-loader"></span>
						</div>
						<div class="wpcf7-response-output wpcf7-display-none"></div>
					</form>
				</div>
			</div>
		</section>

<?php get_footer(); ?>