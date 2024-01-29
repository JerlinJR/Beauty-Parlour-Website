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
			<section id="reviews-page" class="pb-6 inner-page-title division">
				<div class="container">	
					<div class="row">	
						<div class="col">
							<div class="page-title-txt">
								<h2>It’s Time For a Change</h2>	
								<p>The perfect combination of beauty and relaxation</p>
							</div>	
						</div>
					</div>
				</div>	   <!-- End container --> 
			</section>	<!-- END INNER PAGE TITLE -->




			<?php
				$imageBaseURL = "images/gallery/";
				$numberOfImages = 9;
				?>

				<div id="gallery-1" class="gallery-section division">
				<div class="container">
					<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">

					<?php for ($i = 1; $i <= $numberOfImages; $i++) : ?>
						<div class="col">
						<div class="gallery-image">
							<div class="hover-overlay">
							<img class="img-fluid" src="<?= $imageBaseURL ?>hair_<?= sprintf("%02d", $i) ?>.jpg" alt="gallery-image">
							<div class="item-overlay"></div>
							<div class="image-data">
								<div class="gallery-link ico-40 color--white">
								<a class="image-link" href="<?= $imageBaseURL ?>hair_<?= sprintf("%02d", $i) ?>.jpg">
									<span class="flaticon-visibility"></span>
								</a>
								</div>
							</div>
							</div>
						</div>
						</div>
					<?php endfor; ?>

					</div>

					<div class="row">
					<div class="col">
						<div class="more-btn">
						<a href="https://www.instagram.com/angelzaneta_makeup_artist/" class="btn btn--tra-black hover--black">Visit Our Instagram</a>
						</div>
					</div>
					</div>

				</div>
				</div>

			<?php load_template('_offerbanner'); ?>

		
			<?php load_template("_footer"); ?>

	</body>
			</html>