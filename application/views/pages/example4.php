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
							<h3 style="text-align:center" >Eastern Shore, Virginia - Seagrass Beds </h3>

							<div class="row-fluid">
								<div class="span10 offset1">
									
									
									<div id="slideshow" class="carousel slide" data-interval="false">
										<div class="carousel-inner">
											<div class="item active">
												<img src="img/data/PlotWebSite4.png" alt="data example 4">
												<div class="carousel-caption datacaption">
													<p class="carouselcaption datacaption">
														 High-quality eddy covariance data through 26 hours measured over a seagrass meadow in the Virginia coastal bays. Raw data were recorded in 15 min data segments that included a short pause at the end. <a href="gallery#easternshoreseagrassbeds">Gallery</a>
                                                            <br/><br/>
                                                            <b>First panel:</b> Three velocity components (x, y, z), mean current velocity, and water depth. The velocity was varying between 1 and 6 cm s<sup>-1</sup> and driven mainly by tides. Some of the short-term variation in velocity represents wave action. 
                                                            <br/>
                                                            <b>Second panel:</b> Oxygen concentration measured with a fast-responding micro-electrode and a stable optode. The latter was used for calibration. 
                                                            <br/>
                                                            <b>Third panel:</b> Cumulative oxygen fluxes with clear linear trends indicating a strong consistent flux signal in the data. 
                                                            <br/>
                                                            <b>Fourth panel:</b> Oxygen fluxes, one for each 15 min data segment, and light (PAR) measured over the reef. Positive fluxes represent a release. 
                                                            <br/><br/>
                                                            Note the large diurnal variation in concentration of ~100% (<b>Second panel</b>) and the tight correlation between oxygen flux and light (<b>Fourth panel</b>), for example illustrated by the storm event that began at hour 38 with large reduction in light and resulting decline in oxygen flux. For further details on the data, see <a href="journals/Rheuban%20et%20al%202014%20MEPS.pdf">Rheuban et al. (2014)</a>.
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