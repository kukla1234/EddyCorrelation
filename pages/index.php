<?php
include "authenticate.php";
/*
 *
 *
 *
 */
?>

<!DOCTYPE html>
<!-- "http://www.w3.org/TR/html4/loose.dtd"> -->

<html lang="en">

	<head>
		<?php
		include "templates/header.php";
		?>
        <?php include_once "templates/analyticstracking.php"; ?>
	</head>

	<body>
		

		<div id="wrapper" class="wrapper">
			<div id="wrapper-inner" class="wrapper-inner">
				<div class="wrapper-header">

					<?php
					include "templates/navbar.php";
					include "templates/page-header.php"
					?>
				</div>

				<div style="text-align: center" class="wrapper-content container-fluid">
					<div class="row-fluid">
						<div class="span7">
							<div class="row-fluid explanation">
								<p>
									Welcome to the Eddy Correlation Research Lab at the University of Virginia. We work with the eddy correlation technique for underwater flux measurements in three main areas:
									<ol>
										<li>
											In situ applications in <a href="gallery.php">various aquatic environments</a> to address research questions on carbon and nutrient cycling.
										</li>
										<li>
											Sensor development and flux calculation approaches to further advance the technique.
										</li>
										<li>
											Training and education.
										</li>
									</ol>
								</p>
							</div> 
							
							<div class="row-fluid explanation">
								<p>
									The eddy correlation technique was developed by <a href="team.php">Peter Berg</a> and the <a href="http://www.mpi-bremen.de/en/">Max Planck Institute for Marine Microbiology, Germany</a>. The first proof of concept paper focusing on oxygen fluxes for different benthic environments was published in 2003 (Berg et al. 2003), and since then an increasing number of groups have adopted the approach.
								</p>
							</div> 
							
							<div class="row-fluid explanation">
								<p>
									The technique is more expensive and challenging to apply than traditional benthic flux methods, but it has several unique advantages:
								</p>
								<ol>
									<li>
										Measurements can be made without disturbing the natural light and flow conditions.
									</li>
									<li>
										The flux contributing area on the benthic surface covers many square-meters.
									</li>
									<li>
										Flux estimates are usually produced at high temporal resolution, typically on the order of minutes.
									</li>
									<li>
										The technique can be applied in environments where traditional enclosure methods are difficult to use, including highly permeable sediments, seagrass meadows, coral and oyster reefs, and also sea-ice surfaces (see <a href="gallery.php">Gallery</a>).
									</li>
								</ol>

								<p>
									For most benthic ecosystems, the eddy correlation technique represents the closest we come today to measuring true in situ fluxes.
								</p>
								</div>
					
							<div class="row-fluid explanation">
								<p>
									The technique has been used in the atmospheric boundary layer for many decades, and it is by far the most common approach for measuring fluxes between land and air. We hope to see a similar development for the aquatic environment as more experience is gained with the technique and more sensors are being developed.
								</p>
							</div> 

						</div>
						<div class="span5">
							<div class="display-image">
								<img src="img/slides/tn_IMG_0670modified2.jpg" alt="eddy correlation 1">
							</div>
							<div class="display-image">
								<img src="img/slides/tn_IMG_0697modified3.jpg" alt="eddy correlation 2">
							</div>
							<blockquote>
								photos by Markus Huettel
							</blockquote>

						</div>
					</div>

				</div>
				<!-- wrapper-content -->
				<?php
				include "templates/footer.php";
				?>
			</div>
			<!--wrapper-inner-->
		</div>
		<!-- wrapper-outer -->

		<?php
		include "templates/scripts.php";
		?>
		<script src="js/home.js" type="text/javascript"></script>
	</body>
</html>