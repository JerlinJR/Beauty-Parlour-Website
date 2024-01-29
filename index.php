
<?php
include 'libs/load.php';
?>

<!doctype html>
<html lang="en">


	<?php load_template('_head'); ?>


	<body>


		<?php load_template('_preloader'); ?>

		<?php load_template('_theme'); ?>

		<?php load_template('_header'); ?>	

		<?php load_template('_hero'); ?>


			<!-- ABOUT-1
			============================================= -->
			<section class="pt-8 about-1 about-section">
				<div class="container">
					<div class="row justify-content-center">	


						<!-- TEXT BLOCK -->	
						<div class="col-lg-10 col-xl-9">
							<div class="txt-block text-center">

								<!-- Section ID -->	
					 			<span class="section-id">Indulge Yourself</span>

					 			<!-- Transparent Title -->	
								<h2 class="tra-title">Come, Relax and Enjoy</h2>	

								<!-- Title -->	
								<h2 class="h2-title">Your Secret Place of Beauty</h2>

								<!-- Text -->	
								<p class="mb-0">Transforming elegance into an art, our beauty parlour unveils the radiance that defines you.
								</p>

							</div>
						</div>	<!-- END TEXT BLOCK -->	


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-1 -->




			<?php
				$services = array(
					array("Facials", "flaticon-facial-treatment"),
					array("Eyelash", "flaticon-eyelashes"),
					array("Eyebrow", "flaticon-eyebrow"),
					array("Waxing", "flaticon-wax"),
					array("Nails", "flaticon-foundation"),
					array("Make-Up", "flaticon-cosmetics")
				);

				?>

				<div id="services-3" class="pt-6 pb-8 services-section division">
					<div class="container">
						
						<div class="sbox-3-wrapper text-center">
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">

								<?php foreach ($services as $service): ?>
									<div class="col">
										<div class="sbox-3 wow fadeInUp">
											<div class="sbox-ico ico-65">
												<span class="<?php echo $service[1]; ?> color--black"></span>
											</div>
											<div class="sbox-txt">
												<p><?php echo $service[0]; ?></p>
											</div>
										</div>
									</div> 
								<?php endforeach; ?>

							</div>
						</div> 
						
						<!-- MORE BUTTON -->
						<div class="row">
							<div class="col">
								<div class="more-btn">
									<a href="pricing-1.php" class="btn btn--tra-black hover--black">View Our Menu</a>
								</div>
							</div>
						</div>

					</div> <!-- End container -->
				</div> <!-- END SERVICES-3 -->





			<!-- TEXT CONTENT
			============================================= -->
			<section class="shape--01 poudre--shape py-7 ct-01 content-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
						<div class="col-lg-6 order-last order-lg-2">
							<div class="txt-block left-column wow fadeInRight">

								<!-- Section ID -->	
						 		<span class="section-id">Mind, Body and Soul</span>
	
								<!-- Title -->	
								<h2 class="h2-md">Beauty Parlour where you will feel unique</h2>

								<!-- Text -->	
								<p class="mb-0">Step into a world of enchantment at 'Your Secret Place of Beauty.' Our parlour is a haven where skilled artisans sculpt confidence, unveiling the exquisite beauty within you. With a blend of expertise and elegance, each visit becomes a celebration of your unique allure. Indulge in transformative moments as we weave artistry into every touch, making your experience truly exceptional.
								</p>

							</div>
						</div>	<!-- END TEXT BLOCK -->	


						<!-- IMAGE BLOCK -->
						<div class="col-lg-6 order-first order-lg-2">
							<div class="img-block right-column wow fadeInLeft">
								<img class="img-fluid" src="images/woman_01.jpg" alt="content-image">
							</div>
						</div>


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- PRICING-1
			============================================= -->
			<div class="py-8 pricing-1 pricing-section division">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row justify-content-center">	
						<div class="col-lg-10 col-xl-8">
							<div class="section-title text-center mb-6">	

								<!-- Section ID -->	
					 			<span class="section-id">Focus On Beauty</span>	

					 			<!-- Transparent Title -->	
								<h2 class="tra-title">Our Service Menu</h2>

								<!-- Title -->	
								<h2 class="h2-title">Enhance Your Beauty</h2>	
									
							</div>	
						</div>
					</div>


					<!-- PRICING-1 WRAPPER -->
					<div class="pricing-1-wrapper">
						<div class="row">

						<?php
							$pricingItemsSecondSet = array(
								array("Herbal Facial", "$75", "Service length 1 hour"),
								array("Deep Cleaning Facial", "$130", "Service length 55 minutes"),
								array("Organic Facial", "$185", "Service length 1.5 hours"),
								array("Four Layer Facial", "$140", "Service length 1.5 hours"),
								array("Biolight Facial", "$165", "Service length 1.5 hours"),
								array("Oxygen Blast Facial", "$265", "Service length 60 minutes")
							);

							?>
							<div class="col-lg-6">
								<div class="pricing-1-table left-column wow fadeInUp">
									<ul class="pricing-list">
										<?php foreach ($pricingItemsSecondSet as $item): ?>
											<li class="pricing-1-item">
												<div class="detail-price">
													<div class="price-name"><p><?php echo $item[0]; ?></p></div>
													<div class="price-dots"></div>
													<div class="price-number"><p><?php echo $item[1]; ?></p></div>
												</div>
												<div class="price-txt">
													<p><?php echo $item[2]; ?></p>
												</div>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>

							<?php
								$pricingItems = array(
									array("Eyebrow Tinting", "$15+", "Service length 40 minutes"),
									array("Eyelash Tinting", "$25+", "Service length 2 hours"),
									array("Lash Application", "$45+", "Service length 50 minutes"),
									array("Eyebrow Shaping", "$50 - $97", "Service length 1.5 hours"),
									array("Brow Tint", "From $50", "Service length 1 hour"),
									array("Lash Tint", "From $50", "Service length 50 minutes")
								);

								?>
								<div class="col-lg-6">
									<div class="pricing-1-table right-column wow fadeInUp">
										<ul class="pricing-list">
											<?php foreach ($pricingItems as $item): ?>
												<li class="pricing-1-item">
													<div class="detail-price">
														<div class="price-name"><p><?php echo $item[0]; ?></p></div>
														<div class="price-dots"></div>
														<div class="price-number"><p><?php echo $item[1]; ?></p></div>
													</div>
													<div class="price-txt">
														<p><?php echo $item[2]; ?></p>
													</div>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>

						</div>
					</div>	<!-- END PRICING-1 WRAPPER -->


					<!-- BUTTON -->		
			 		<div class="row">
			 			<div class="col">
			 				<div class="more-btn mt-5">
								<a href="pricing-1.php" class="btn btn--tra-black hover--black">View All Prices</a>
							</div>
						</div>
					</div>


				</div>  <!-- End container -->
			</div>	<!-- END PRICING-1 -->




			<!-- WIDE IMAGE
			============================================= -->
			<div class="bg--05 bg--scroll ct-12 content-section"></div>



			<?php
				$brandImages = array(
					"brand-1.png", "brand-2.png", "brand-3.png",
					"brand-4.png", "brand-5.png", "brand-6.png",
					"brand-7.png", "brand-8.png", "brand-9.png"
				);

				?>

				<div id="brands-1" class="pt-8 brands-section">
					<div class="container">

						<!-- BRANDS CAROUSEL -->
						<div class="row">
							<div class="col text-center">
								<div class="owl-carousel brands-carousel-5">

									<?php foreach ($brandImages as $image): ?>
										<!-- BRAND LOGO IMAGE -->
										<div class="brand-logo">
											<a href="#"><img class="img-fluid" src="images/<?php echo $image; ?>" alt="brand-logo"></a>
										</div>
									<?php endforeach; ?>

								</div>
							</div>
						</div> <!-- END BRANDS CAROUSEL -->

					</div> <!-- End container -->
				</div>





			<!-- GALLERY-4
			============================================= -->		
			<div id="gallery-4" class="py-8 gallery-section division">
				<div class="container-fluid">


					<!-- SECTION TITLE -->
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-8">
							<div class="section-title text-center mb-6">	

								<!-- Section ID -->	
					 			<span class="section-id">Be a more perfect</span>	

					 			<!-- Transparent Title -->	
								<h2 class="tra-title">A Whole New You</h2>

								<!-- Title -->	
								<h2 class="h2-title">Redefine Your Beauty</h2>	
									
							</div>	
						</div>
					</div>


					<!-- GALLERY-4 WRAPPER -->
					<div class="gallery-4-wrapper">
						<div class="row">


							<!-- IMAGE #1 -->
							<div class="col-md-6 col-lg-2">
								<div id="img-4-1" class="gallery-image">
							  		<div class="hover-overlay"> 

							  			<!-- Image -->
										<img class="img-fluid" src="images/gallery/woman_04.jpg" alt="gallery-image">			
										<div class="item-overlay"></div>				
										
										<!-- Image Zoom -->
										<div class="image-data">
											<div class="gallery-link ico-30 color--white">
												<a class="image-link" href="images/gallery/woman_04.jpg">
													<span class="flaticon-visibility"></span>
												</a>
											</div>																					 
										</div> 

							  		</div>
								</div>
							</div>


							<!-- IMAGE #2 -->
							<div class="col-md-6 col-lg-5">
								<div id="img-4-2" class="gallery-image">
							  		<div class="hover-overlay"> 

							  			<!-- Image -->
										<img class="img-fluid" src="images/gallery/woman_01.jpg" alt="gallery-image">			
										<div class="item-overlay"></div>				
										
										<!-- Image Zoom -->
										<div class="image-data">
											<div class="gallery-link ico-40 color--white">
												<a class="image-link" href="images/gallery/woman_01.jpg">
													<span class="flaticon-visibility"></span>
												</a>
											</div>																					 
										</div> 

							  		</div>
								</div>
							</div>


							<!-- IMAGE #1 -->
							<div class="col-lg-3">


								<!-- IMAGE #3 -->
								<div id="img-4-3" class="gallery-image">
							  		<div class="hover-overlay"> 

							  			<!-- Image -->
										<img class="img-fluid" src="images/gallery/woman_03.jpg" alt="gallery-image">			
										<div class="item-overlay"></div>				
										
										<!-- Image Zoom -->
										<div class="image-data">
											<div class="gallery-link ico-40 color--white">
												<a class="image-link" href="images/gallery/woman_03.jpg">
													<span class="flaticon-visibility"></span>
												</a>
											</div>																					 
										</div> 

							  		</div>
								</div>


								<!-- IMAGE #4 -->
								<div id="img-4-4" class="gallery-image">
							  		<div class="hover-overlay"> 

							  			<!-- Image -->
										<img class="img-fluid" src="images/gallery/woman_02.jpg" alt="gallery-image">			
										<div class="item-overlay"></div>				
										
										<!-- Image Zoom -->
										<div class="image-data">
											<div class="gallery-link ico-40 color--white">
												<a class="image-link" href="images/gallery/woman_02.jpg">
													<span class="flaticon-visibility"></span>
												</a>
											</div>																					 
										</div> 

							  		</div>
								</div>

							</div>	


							<div class="col-lg-2">


								<!-- IMAGE #5 -->
								<div id="img-4-5" class="gallery-image">
							  		<div class="hover-overlay"> 

							  			<!-- Image -->
										<img class="img-fluid" src="images/gallery/woman_05.jpg" alt="gallery-image">			
										<div class="item-overlay"></div>				
										
										<!-- Image Zoom -->
										<div class="image-data">
											<div class="gallery-link ico-30 color--white">
												<a class="image-link" href="images/gallery/woman_05.jpg">
													<span class="flaticon-visibility"></span>
												</a>
											</div>																					 
										</div> 

							  		</div>
								</div>


								<!-- IMAGE #5 -->
								<div id="img-4-6" class="gallery-image">
							  		<div class="hover-overlay"> 

							  			<!-- Image -->
										<img class="img-fluid" src="images/gallery/woman_06.jpg" alt="gallery-image">			
										<div class="item-overlay"></div>				
										
										<!-- Image Zoom -->
										<div class="image-data">
											<div class="gallery-link ico-30 color--white">
												<a class="image-link" href="images/gallery/woman_06.jpg">
													<span class="flaticon-visibility"></span>
												</a>
											</div>																					 
										</div> 

							  		</div>
								</div>


							</div>


						</div>  <!-- End row -->	
					</div>	<!-- END GALLERY-4 WRAPPER -->	


					<!-- BUTTON -->		
			 		<div class="row">
			 			<div class="col">
			 				<div class="more-btn">
								<a href="gallery.php" class="btn btn--tra-black hover--black">Visit Our Gallery</a>
							</div>
						</div>
					</div>	<!-- END BUTTON -->	


				</div>	   <!-- End container -->
			</div>	<!-- END GALLERY-4 -->




			<!-- TEXT CONTENT
			============================================= -->
			<section class="shape--02 poudre--shape py-7 ct-02 content-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-lg-6">
							<div class="img-block left-column wow fadeInRight">
								<img class="img-fluid" src="images/woman_02.jpg" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-lg-6">
							<div class="txt-block right-column wow fadeInLeft">

								<!-- Section ID -->	
						 		<span class="section-id">Time to be beautiful</span>
	
								<!-- Title -->	
								<h2 class="h2-md">Give the pleasure of beautiful to yourself</h2>

								<!-- ACCORDION WRAPPER -->	
								<div class="accordion accordion-wrapper mt-5">
									<ul class="accordion">


										<!-- ACCORDION ITEM #1 -->
										<li class="accordion-item is-active">

											<!-- Title -->
											<div class="accordion-thumb"><p>Certified Stylists</p></div>

											<!-- Text -->
											<div class="accordion-panel">
									      		<p class="mb-0">Our team is comprised of certified stylists who bring a wealth of expertise and creativity to every appointment. 
												</p>
											</div>

										</li>	<!-- END ACCORDION ITEM #1 -->

<!-- 
										<li class="accordion-item">

											<div class="accordion-thumb"><p>100% Organic Cosmetics</p></div>

											<div class="accordion-panel">
												<p class="mb-0">Magna sapien dolor vitae molestie nunc augue and primis quisque 
												   sapien justo aliquet venenatis quaerat
												</p>
											</div>			

										</li>	 -->


										<!-- ACCORDION ITEM #3 -->
										<li class="accordion-item">

											<!-- Title -->
											<div class="accordion-thumb"><p>Easy Online Booking</p></div>

											<!-- Text -->	
											<div class="accordion-panel">
									      		<p class="mb-0">Experience convenience at your fingertips with our easy online booking system or simply give us a call! 
												</p> 
											</div>
											
										</li>	<!-- END ACCORDION ITEM #3 -->


									</ul>
								</div>	<!-- END ACCORDION WRAPPER -->	

							</div>
						</div>	<!-- END TEXT BLOCK -->	


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END TEXT CONTENT -->




			<!-- WORKING HOURS
			============================================= -->
			<section class="py-8 ct-table content-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT -->
						<div class="col-lg-6">
							<div class="left-column wow fadeInRight">
								
								<!-- Section ID -->	
						 		<span class="section-id">Time Schedule</span>
	
								<!-- Title -->	
								<h2 class="h2-md">Working Hours</h2>

								<!-- Text -->	
								<p class="mb-0">At Angel Zaneta, we understand the importance of flexibility to accommodate our clients' busy schedules. Our dedicated team is committed to providing exceptional beauty services during the following operating hours:


								</p>

							</div>
						</div>


						<!-- TABLE -->	
						<div class="col-lg-6">
							<div class="txt-table right-column wow fadeInLeft">
								<table class="table">
									<tbody>
									    <tr>
									      	<td>Mon – Wed</td>
									      	<td> - </td>
									      	<td class="text-end">10:00 AM - 9:00 PM</td>
									    </tr>
									    <tr>
									      	<td>Thursday</td>
									      	<td> - </td>
									      	<td class="text-end">10:00 AM - 9:00 PM</td>
									    </tr>
									     <tr>
									      	<td>Friday</td>
									      	<td> - </td>
									      	<td class="text-end">10:00 AM - 9:00 PM</td>
									    </tr>
									    <tr class="last-tr">
									      	<td>Saturday</td>
									      	<td>-</td>
									      	<td class="text-end">10:00 AM - 9:00 PM</td>
									   	 </tr>
									  </tbody>
								</table>
							</div>
						</div>	<!-- END TABLE -->	


					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END WORKING HOURS -->




			<!-- ABOUT-6
			============================================= -->
			<section class="about-6 about-section">
				<div class="container">


					<!-- SECTION TITLE -->
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-8">
							<div class="section-title text-center mb-6">	

								<!-- Section ID -->	
					 			<span class="section-id">It’s your time to shine</span>	

					 			<!-- Transparent Title -->	
								<h2 class="tra-title">Get Ready to Shine</h2>

								<!-- Title -->	
								<h2 class="h2-title">Unleash your inner beauty with our parlour magic</h2>	
									
							</div>	
						</div>
					</div>


					<!-- ABOUT-6 CONTENT -->
					<div class="row">


						<!-- ABOUT-6 IMAGE -->
						<div class="col-md-6 col-lg-4">
							<div id="a6-img-1" class="about-6-img">
								<img class="img-fluid" src="images/beauty_06.jpg" alt="about-image">
							</div>
						</div>


						<!-- ABOUT-6 TEXT -->
						<div class="col-lg-4 order-first order-lg-1">
							<div class="about-6-txt">

								<!-- TEXT -->
								<div class="a6-txt bg--salmon">

									<!-- Title -->
									<h4 class="h4-md">Don’t be ordinary, be extraordinary</h4>

									<!-- Text -->	
									<p class="mb-0">At Angel Zaneta, we believe in transcending the ordinary and embracing the extraordinary. Elevate your beauty experience with us, where we redefine standards and celebrate the extraordinary in every client, making each visit exceptional.
									</p>

								</div>

								<!-- IMAGE -->
								<div class="a6-img">
									<img class="img-fluid" src="images/beauty_07.jpg" alt="about-image">
								</div>

							</div>
						</div>


						<!-- ABOUT-6 IMAGE -->
						<div class="col-md-6 col-lg-4 order-last order-lg-2">
							<div id="a6-img-2" class="about-6-img">
								<img class="img-fluid" src="images/beauty_05.jpg" alt="about-image">
							</div>
						</div>


					</div>	<!-- END ABOUT-6 CONTENT -->


				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-6 -->




			<?php
				// Define an array of reviews
				$reviews = array(
					array("Kelly Walker", "13 days ago", "Angel Zaneta truly lives up to its heavenly name! The stylists here work magic – my hair has never looked this fabulous. The serene ambiance adds to the delightful experience."),
					array("Evelyn Martinez", "19 days ago", "A visit to Angel Zaneta is like a beauty retreat. The certified stylists know their craft, and the personalized service makes you feel like a VIP. The only drawback was a slight wait, but the end result was worth every minute."),
					array("Linda Ferell", "27 days ago", "Extraordinary service at Angel Zaneta! The skilled stylists turned my vision into reality. The attention to detail and warm atmosphere make every visit a pleasure. This parlour is now my beauty sanctuary."),
					array("Elizabeth Ross", "27 days ago", "Angel Zaneta is where beauty meets comfort. The online booking system made scheduling a breeze, and the stylists ensured I left feeling pampered. The ambiance is tranquil, providing a much-needed escape from the ordinary."),
					array("Nicole Byer", "1 month ago", "Exceptional experience at Angel Zaneta! The certified stylists worked wonders on my hair, and the results were beyond my expectations. The attention to customer satisfaction sets this parlour apart. Highly recommended!"),
					array("Laura Merino", "1 month ago", "A heavenly touch to beauty services! Angel Zaneta has a welcoming atmosphere, and the stylists are not only skilled but also friendly. I left feeling like a new person. Can't wait for my next visit!"),
					array("Carmen M. Garcia", "2 months ago", "Angel Zaneta offers an angelic escape for beauty enthusiasts. The service is impeccable, and the prices are reasonable. A slight wait was the only downside, but the results were heavenly. I'll be back for sure!"),
					array("Rachel A.", "2 months ago", "Perfection achieved at Angel Zaneta! The stylists are true artists, and the personalized approach makes you feel valued. The ambiance is serene, creating a tranquil space for beauty transformations. Definitely my go-to parlour.")
				);

				?>

				<div id="reviews-2" class="py-8 reviews-section">
					<div class="container">

						<!-- SECTION TITLE -->
						<div class="row justify-content-center">
							<div class="col-md-10 col-lg-8">
								<div class="section-title text-center mb-6">
									<!-- Section ID -->
									<span class="section-id">Testimonials</span>
									<!-- Transparent Title -->
									<h2 class="tra-title">Our Happy Clients</h2>
									<!-- Title -->
									<h2 class="h2-title">Comments & Reviews</h2>
								</div>
							</div>
						</div>

						<!-- TESTIMONIALS CONTENT -->
						<div class="row">
							<div class="col">
								<div class="owl-carousel owl-theme reviews-2-wrapper">

									<?php foreach ($reviews as $review): ?>
										<!-- TESTIMONIAL -->
										<div class="review-2">
											<div class="review-txt">
												<!-- Rating Stars -->
												<div class="star-rating ico-20 color--yellow clearfix">
													<span class="flaticon-star-1"></span>
													<span class="flaticon-star-1"></span>
													<span class="flaticon-star-1"></span>
													<span class="flaticon-star-1"></span>
													<span class="flaticon-star-half-empty"></span>
												</div>
												<!-- Text -->
												<p><?php echo $review[2]; ?></p>
												<!-- Data -->
												<div class="review-author">
													<p><?php echo $review[0]; ?></p>
													<span><?php echo $review[1]; ?></span>
												</div>
											</div>
										</div> <!-- END TESTIMONIAL -->
									<?php endforeach; ?>

								</div>
							</div>
						</div> <!-- END TESTIMONIALS CONTENT -->

					</div> <!-- End container -->
				</div>




			<!-- BANNER-2
			============================================= -->
			<section class="bg--03 bg--scroll py-8 banner-2 banner-section">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="banner-2-txt text-center color--white">

								<!-- Section ID -->	
						 		<span class="section-id">This Week Only</span>

								<!-- Title -->	
								<h2>Get <span>30% OFF</span></h2>
								<h3>Quick Face Makeup</h3>

								<!-- Button -->	
								<a href="contact.php" class="btn btn--tra-white hover--white">Contact us</a>

							</div>
						</div>
					</div>   <!-- End row -->	
				</div>     <!-- End container -->	
			</section>	<!-- END BANNER-2 -->


<!-- 

			<section class="py-8 ct-09 content-section division">
				<div class="container text-center">


					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-8">
							<div class="section-title text-center mb-6">	

					 			<span class="section-id">Our Locations</span>	

								<h2 class="h2-title">Welcome to Angel Zaneta</h2>	
									
							</div>	
						</div>
					</div>


					<div class="row d-flex align-items-center">


						<div class="col-md-6">
							<div class="left-column wow fadeInRight">

								<div class="ct-09-img">
									<div class="hover-overlay"> 
										<img class="img-fluid" src="images/salon_02.jpg" alt="location-photo">
										<div class="item-overlay"></div>
									</div>
								</div>

								<div class="ct-09-txt">
	
									<h3>Visit Angel Zaneta Wilshire</h3>

									<p class="ct-09-address">8721 Central Ave, Los Angeles, CA 90036</p>

									<ul class="advantages ico-30 clearfix">
										<li><p class="me-3">est. 2018</p></li>
										<li><p><a href="contact.php">Learm More</a></p></li>
										<li class="advantages-links-divider"><p><span class="flaticon-vertical-line"></span></p></li>
										<li><p><a href="booking.php">Book Now</a></p></li>
									</ul>

								</div>		

							</div>
						</div>	


						<div class="col-md-6">
							<div class="right-column wow fadeInLeft">

								<div class="ct-09-img">
									<div class="hover-overlay"> 
										<img class="img-fluid" src="images/salon_03.jpg" alt="location-photo">
										<div class="item-overlay"></div>
									</div>
								</div>

								<div class="ct-09-txt">
	
									<h3>Visit Angel Zaneta Westwood</h3>

									<p class="ct-09-address">8493 Sunset Blvd, Los Angeles, CA 90069</p>

									<ul class="advantages ico-30 clearfix">
										<li><p class="me-3">est. 2021</p></li>
										<li><p><a href="contact.php">Learm More</a></p></li>
										<li class="advantages-links-divider"><p><span class="flaticon-vertical-line"></span></p></li>
										<li><p><a href="booking.php">Book Now</a></p></li>
									</ul>

								</div>	

							</div>
						</div>		


					</div>    
				</div>	  
			</section>	 -->



	
			<?php
				$galleryImages = array(
					array("images/gallery/woman_08.jpg", "https://www.example.com/gallery/woman_08.jpg", false),
					array("images/gallery/beauty_01.jpg", "", true),
					array("images/gallery/woman_07.jpg", "https://www.example.com/gallery/woman_07.jpg", false),
					array("images/gallery/beauty_02.jpg", "https://www.example.com/gallery/beauty_02.jpg", false),
					array("images/gallery/beauty_03.jpg", "", true),
					array("images/gallery/woman_09.jpg", "https://www.example.com/gallery/woman_09.jpg", false)
				);

				?>

				<section id="gallery-3" class="bg--poudre py-8 gallery-section division">
					<div class="container">

						<!-- SECTION TITLE -->
						<div class="row justify-content-center">
							<div class="col-lg-10 col-xl-8">
								<div class="section-title">
									<h3 class="h3-lg color--black">Follow: <a href="https://www.instagram.com/angelzaneta_makeup_artist/">@angelzaneta</a></h3>
								</div>
							</div>
						</div>

						<!-- IMAGES WRAPPER -->
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">

							<?php foreach ($galleryImages as $index => $image): ?>
								<!-- IMAGE -->
								<div class="col">
									<div id="img-3-<?php echo $index + 1; ?>" class="gallery-image">
										<div class="hover-overlay">

											<!-- Image -->
											<img class="img-fluid" src="<?php echo $image[0]; ?>" alt="gallery-image">
											<div class="item-overlay"></div>

											<!-- Image Zoom -->
											<div class="image-data">
												<div class="gallery-link ico-40 color--white">
													<?php if ($image[2]): ?>
														<a class="video-popup<?php echo $index + 1; ?>" href="<?php echo $image[1]; ?>">
															<span class="flaticon-play"></span>
														</a>
													<?php else: ?>
														<a class="image-link" href="<?php echo $image[1]; ?>">
															<span class="flaticon-visibility"></span>
														</a>
													<?php endif; ?>
												</div>
											</div>

										</div>
									</div>
								</div> <!-- END IMAGE -->
							<?php endforeach; ?>

						</div> <!-- END IMAGES WRAPPER -->

					</div> <!-- End container -->
				</section>


			<?php load_template('_footer'); ?>

	</body>


</html>