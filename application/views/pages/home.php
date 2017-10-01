<body>

		<div id="wrapper" class="wrapper">
			<div id="wrapper-inner" class="wrapper-inner">
				<div class="wrapper-header">

					<?php
					$this->view("templates/navbar");
					$this->view("templates/page-header");
					?>
				</div>

				<div style="text-align: center" class="wrapper-content container-fluid">
					<div class="row-fluid">
						<div class="span7">
							<div class="row-fluid explanation home_new_papers">
								<h3>New papers:</h3>

								<ol>
									<li>A review of the aquatic eddy covariance technique published in L&O e-Lectures. Get a pdf <a href="journals/Berg%20et%20al%202017%20LandO%20e-Lectures.pdf">here</a>, or download the full PowerPoint presentation with live animations, lecture notes, and reading lists from <a href="http://onlinelibrary.wiley.com/doi/10.1002/loe2.10005/full">L&O e-Lectures</a>.</li>
									<li>New paper on ‘upside’ down eddy covariance measurements right below the air-water interface of gas exchange rates and coefficients. Get a pdf <a href="journals/Berg%20and%20Pace%202017%20BGD.pdf">here</a>.</li>
								</ol>
							</div>

							<div class="row-fluid explanation">
								<p>
									Welcome to the Aquatic Eddy Covariance Research Lab at the University of Virginia. Our work is centered on underwater flux measurements using the aquatic eddy covariance (or eddy correlation) technique. We focus on three main areas: 
									<ol>
										<li>
											In situ applications of the technique to address research questions on carbon and nutrient cycling. 										</li>
										<li>
											 Development of new sensors and flux calculation protocols to advance the technique. 
										</li>
										<li>
											Training and education.
										</li>
									</ol>
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
							<div class="display-image">
								<img src="img/slides/homepage_3.png" alt="eddy correlation 3">
							</div>
							<blockquote>
								photos by Markus Huettel
							</blockquote>

						</div>
					</div>
					<div class="row-fluid">
						<div class="row-fluid explanation">
							<p>
								The aquatic eddy covariance technique was adapted from the atmospheric boundary layer to measure fluxes of oxygen in benthic environments in a joint effort with the <a href="http://www.mpi-bremen.de/en/">Max Planck Institute for Marine Microbiology, Germany</a>. Our first proof of concept paper was published in 2003 (Berg et al. 2003). 
							</p>
						</div> 
						<div class="row-fluid explanation">
								<p>
									Since then an increasing number of research groups have adopted the approach because of the unique advantages of the technique over traditional flux methods: 
								</p>
								<ol>
									<li>
										Measurements can be made without disturbing the natural light and flow conditions.
									</li>
									<li>
										Fluxes represent a large area on the benthic surface (many square-meters) and have a high temporal resolution (minutes). 
									</li>
									<li>
										The technique can be applied in environments where traditional enclosure methods are difficult to use (e.g., highly permeable sediments, seagrass meadows, and coral and oyster reefs).
									</li>
								</ol>

								<p>
									Recently, we have also applied the technique for ‘upside down’ measurements right below the air-water interface to give gas exchange rates and coefficients. 
								</p>	
							</div>
					
							<div class="row-fluid explanation">
								<p>
									The technique has been used for many decades in the atmospheric boundary layer where it is by far the most common flux method today. We hope to see a similar development for the aquatic environment as more experience is gained with the technique.
								</p>
							</div> 
							
							<div class="row-fluid explanation">
								<p>
									This research is made possible by funding and support from the University of Virginia and the National Science Foundation.
								</p>
								<span class="span5">
									<img class="sponsor-images" src="img/support/uvastack.gif" alt="University of Virginia Logo">
								</span>
								<span class="span5">
									<img class="sponsor-images" src="img/support/nsf1.gif" alt="National Sciene Foundation Logo">
								</span>
							</div>

					</div>

				</div>
				<!-- wrapper-content -->
				<?php
				$this->view('templates/footer');
				?>
			</div>
			<!--wrapper-inner-->
		</div>
		<!-- wrapper-outer -->

		<?php
		$this->view('templates/scripts');
		?>
		<script src="js/home.js" type="text/javascript"></script>
	</body>
