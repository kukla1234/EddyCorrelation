<body>
		
		

		<div id="wrapper" class="wrapper">

			<div id="wrapper-inner" class="wrapper-inner">
				<div class="wrapper-header">

					<?php
						$this->view("templates/navbar");	
						$this->view("templates/page-header");
					?>
				</div>

				<div class="wrapper-content container-fluid">

					<div class="row-fluid">
						<div class="span12">
							<h3 style="text-align:center" >Gulf of Mexico, Florida - Permeable Sediments</h3>

							<div class="row-fluid">
								<div class="span10 offset1">
														
									<div id="slideshow" class="carousel slide" data-interval="false">
										<div class="carousel-inner">
											<div class="item active">
												<img src="/img/data/PlotWebSite1.jpg" alt="data example 1">
												
												<div class="carousel-caption datacaption">
													<p class="carouselcaption datacaption">
                                                    High-quality eddy correlation data through 17 hours measured over permeable sand in the Gulf of Mexico, Florida.
                                                    Water depth varied from 1 to 1.5 m, and sediment permeability was 1.3 10<sup>-11</sup> m<sup>2</sup>.
                                                    Raw data were recorded in 15 min data segments that included a short pause at the end.
                                                    <a href="/gallery#floridagulf">Gallery</a>
                                        			<br/><br/>
													<b>First panel:</b> Three velocity components (x, y, z) and mean current velocity varying between 1 and 5 cm s<sup>-1</sup>. Most of the variation in velocity represents wave action.
													<b>Second panel:</b> Oxygen concentration measured with a fast-responding micro-electrode and an oxygen meter. The latter was used for calibration.
													<b>Third panel:</b> Cumulative oxygen fluxes with linear trends indicating a strong consistent flux signal in the data.
													<b>Fourth panel:</b> Oxygen fluxes, one for each 15 min data segment, and light measured over the sand. Negative fluxes represent an uptake.
                                                    <br/><br/>
                                                    Note the clear day-night-day cycle (Fourth panel). The four last fluxes of extreme size were artificially induced by people wading upstream from the eddy correlation instrument.
                                                    Night time oxygen uptake averaged -368 ± 21 mmol m<sup>-2</sup> day<sup>-1</sup> (SE, n = 45) which is almost 4 times larger than the flux of -98 ± 21 mmol m<sup>-2</sup> day<sup>-1</sup> (SE, n = 5) measured concurrently in in situ chambers.
													This difference was likely caused by extensive flushing of the permeable sediment by current flow, oscillating wave-generated flow, and oscillating pressure at the sediment surface. Existing chamber technology cannot fully reproduce these naturally occurring drivers of porewater exchange.
													For further details on the data, see <a target="__blank" href="/publication/Berg%20and%20Huettel%202008%20Oceanography.pdf">Berg and Huettel (2008)</a> . The 16 Hz data (time, v<sub>x</sub>, v<sub>y</sub>, v<sub>z</sub>, O2) for this example can be downloaded here: <a href="data/BergData1.zip">BergData1</a>
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
				$this->view("templates/footer");
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