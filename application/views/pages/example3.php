<body>
		
		

		<div id="wrapper" class="wrapper">

			<div id="wrapper-inner" class="wrapper-inner">
				<div class="wrapper-header">

					<?php
						$this->view( "templates/navbar");	
						$this->view( "templates/page-header");
					?>
				</div>

				<div class="wrapper-content container-fluid">

					<div class="row-fluid">
						<div class="span12">
							<h3 style="text-align:center" >Florida Keys - Permeable Sediments -- Test of robust prototype oxygen sensor</h3>

							<div class="row-fluid">
								<div class="span10 offset1">
									
									
									
									<div id="slideshow" class="carousel slide" data-interval="false">
										<div class="carousel-inner">
											<div class="item active">
												<img src="/img/data/PlotWebSite3.jpg" alt="data example 3">
												<div class="carousel-caption datacaption">
													<p class="carouselcaption datacaption">
														High-quality eddy correlation data measured in a test deployment of a new robust proto-type oxygen sensor.
														The data covering 22 hours were measured over permeable sand at 10 m depth in the Florida Keys.
														Raw data were recorded in one long continuous data sequence.
														<a href="/gallery.php#floridakeyspermeablesediments">Gallery</a>
														<br/><br/>							
														<b>First panel:</b> Three velocity components (x, y, z) and mean current velocity varying between 1 and 14 cm s<sup>-1</sup>. Some of the variation in velocity represents wave action.
														<b>Second panel:</b> Oxygen concentration measured with the fast-responding oxygen proto-type sensor and a stable optode. The latter was used for calibration. The proto-type sensor follows very closely the concentration recorded by the stable optode.
														<b>Third panel:</b> Cumulative oxygen fluxes, one for each 15 min data segment, with clear linear trends indicating a strong consistent flux signal in the data.
														<b>Fourth panel:</b> Oxygen fluxes, one for each 15 min data segment, and light (PAR) measured over the permeable sand. Positive fluxes represent a release.
														<br/><br/>
														Note the tight correlation between oxygen flux and light (Fourth panel), and also the spike in flux right before midnight (24 hour) which was caused by an abrupt increase in current velocity (First panel), from 7 to 14 cm s<sup>-1</sup> over a 5 min period.
														<br/><br/>
														The “clean” oxygen concentration data (Second panel) are recorded by the proto-type sensor without drift, spikes, sudden jumps, or any other abnormalities, and are superior to traditional data recorded with regular Clark-type microelectrodes.
														This makes flux extractions more straight forward, and also increases the success rate of data collection to close-to 100% of the deployment time.
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
		$this->view( "templates/scripts");	
	?>
	<script type="text/javascript">
		$(".carousel").carousel( { interval : false } );
	</script>
	</body>