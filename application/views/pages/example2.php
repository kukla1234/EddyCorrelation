<body>
		
		

		<div id="wrapper" class="wrapper">

			<div id="wrapper-inner" class="wrapper-inner">
				<div class="wrapper-header">

					<?php
						$this->view( "templates/navbar");	
						$this->view("templates/page-header");
					?>
				</div>

				<div class="wrapper-content container-fluid">

					<div class="row-fluid">
						<div class="span12">
							<h3 style="text-align:center" >Florida Keys - Coral Reefs </h3>

							<div class="row-fluid">
								<div class="span10 offset1">
									
									
									<div id="slideshow" class="carousel slide" data-interval="false">
										<div class="carousel-inner">
											<div class="item active">
												<img src="/img/data/PlotWebSite2.jpg" alt="data example 2">
												<div class="carousel-caption datacaption">
													<p class="carouselcaption datacaption">
														High-quality eddy correlation data through 24 hours measured over a 2 m deep coral reef in Florida Keys.
														Raw data were recorded in 15 min data segments that included a short pause at the end. 
														<a href="/gallery#floridakeys">Gallery</a>
														<br/><br/>
														 <b>First panel:</b> Three velocity components (x, y, z) and mean current velocity varying between 1 and 10 cm s<sup>-1</sup>. Some of the variation in velocity represents wave action.
														 <b>Second panel:</b> Oxygen concentration measured with a fast-responding micro-electrode and a stable optode. The latter was used for calibration. Note the large fluctuations in concentration (~10 µmol L<sup>-1</sup>) at the end of the time series consistent with the large fluxes.
														 <b>Third panel:</b> Cumulative oxygen fluxes with clear linear trends indicating a strong consistent flux signal in the data.
														 <b>Fourth panel:</b> Oxygen fluxes, one for each 15 min data segment, and light (PAR) measured over the reef. Positive fluxes represent a release.
														 <br/><br/>					
														Note the tight correlation between oxygen flux and light (Fourth panel), and also the magnitude of the fluxes that results from the efficient use of light by the phototrophs and the uneven complex reef surface that has a many-fold larger surface area than its horizontal projection.
														The clear water over this subtropical reef allowed data of this rare high quality to be measured. For further details on the data, see <a target="_blank" href="/journals/Long%20et%20al%202013%20PLOS%20ONE.pdf"> Long et al. (2013) </a>.
													</p>
												</div>
											</div>
									</div><!-- /.carousel -->
										
								</div> <!--/.span10 -->
							</div>	<!--/.row-fluid -->

						</div> <!--/.span10-->
					</div><!--/.row-fluid-->

				</div>
				<!--wrapper-content -->
				<?php
				$this->view( "templates/footer");
				?>
			</div>
			<!--wrapper-inner-->
		</div>
		<!-- wrapper-outer -->

		<?php
		$this->view("templates/scripts");	
	?>
	<script type="text/javascript">
		$(".carousel").carousel( { interval : false } );
	</script>
	</body>