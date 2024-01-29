<?php
include "libs/load.php";
?>

<!doctype html>

<html lang="en">

	<?php load_template("_head"); ?>

	<body>

		<?php load_template('_preloader'); ?>

		<?php load_template('_theme'); ?>

		<?php load_template('_header'); ?>	


			<!-- INNER PAGE TITLE
			============================================= -->	
			<section id="contacts-page" class="pb-6 inner-page-title division">
				<div class="container">	
					<div class="row">	
						<div class="col">
							<div class="page-title-txt">
								<h2>Let's Talk Beauty!</h2>	
								<p>Got Questions? Please, don't hesitate to get in touch with us</p>
							</div>	
						</div>
					</div>
				</div>	   <!-- End container --> 
			</section>	<!-- END INNER PAGE TITLE -->

			<!-- CONTACTS-1 ============================================= -->
			<div id="contacts-1" class="contacts-section division">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="google-map">
								<iframe
									width="1300" height="450"
									src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12607.845959455892!2d77.2446013!3d8.2165665!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04fef6b739b781%3A0x673b4b608325974f!2sKattukadai%2C%20Tamil%20Nadu%20629159%2C%20India!5e0!3m2!1sen!2sus!4v1688668190206"
									allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>
				</div> <!-- End container -->
			</div> <!-- END CONTACTS-1 -->




			<?php load_template('_footer'); ?>


		</div>	<!-- END PAGE CONTENT -->	




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.7.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script src="js/menu.js"></script>
		<script src="js/datetimepicker.js"></script>	
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/contact-form.js"></script>	
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>	
		<script src="js/popper.min.js"></script>
		<script src="js/lunar.js"></script>
		<script src="js/wow.js"></script>
				
		<!-- Custom Script -->		
		<script src="js/custom.js"></script>

		<script>
			$(document).on({
			    "contextmenu": function (e) {
			        console.log("ctx menu button:", e.which); 

			        // Stop the context menu
			        e.preventDefault();
			    },
			    "mousedown": function(e) { 
			        console.log("normal mouse down:", e.which); 
			    },
			    "mouseup": function(e) { 
			        console.log("normal mouse up:", e.which); 
			    }
			});
		</script>

		<script>
			$(function() {
			  $(".switch").click(function() {
			  	 $("body").toggleClass("theme--dark");
			  });
			});
		</script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->	


	</body>



<!-- Mirrored from dsathemes.com/html/r_eine_1.1/files/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Dec 2023 17:26:10 GMT -->
</html>