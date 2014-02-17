<body>
		
		

		<div id="wrapper" class="wrapper">

			<div id="wrapper-inner" class="wrapper-inner">
				<div class="wrapper-header">

					<?php
					$this->view('templates/navbar');
					$this->view('templates/page-header');
					?>
				</div>

				<div class="wrapper-content container-fluid">

					<div class="row-fluid">
						<div class="span12">
							<h3 style="text-align:center" >Basic Principles</h3>

							<div class="row-fluid">
								<div class="span10 offset1">
								<div id="animation" class="carousel">
									<div class="carousel-inner">
										<div class="item active" style="margin: auto;">
											<!--[if IE]>
											<object width="700" height="575">
											<param name="movie" value="vid/pberg_anim_nosound.swf">
											<embed src="vid/pberg_anim_nosound.swf" width="700" height="575">
											</embed>
											</object>
											<![endif]-->
											<![if !IE]>
											<object data="/berg/vid/pberg_anim_nosound.swf" width="700" height="575" type="application/x-shockwave-flash">
												<param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
												<param name="bgcolor" value="#ffffff" />
												<param name="quality" value="high" />
											</object>
											<![endif]>

											<?php /* 
										 * 
										 * 									<object type="application/x-shockwave-flash" data="vid/pberg_anim_nosound.swf" width="700" height="575" >
										 * 	<embed src="vid/pberg_anim_nosound.swf" quality="high" width="700" height="575" name="movie" align="center" type="application/x-shockwave-flash" plug inspage="http://www.macromedia.com/go/getflashplayer" />
   											<param name="movie" value="vid/pberg_anim_nosound.swf" /> 
										</object>
										 * 
										 	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="700" height="575" id="movie" align="center">
   										<param name="Eddy Correlation" value="vid/pberg_anim_nosound.swf" />
										<param name="quality" value="high" />
										<embed src="vid/pberg_anim_nosound.swf" quality="high" />
								
										 * 
										 * 
										 * 
										 */
											?>
											<div class="padding" style="min-height:120px;"></div>
											<div class="carousel-caption animation-caption" >
												<p class="carouselcaption ">
													Time series of water velocities (x, y, z) and oxygen concentration (for oxygen fluxes) are recorded simultaneously, for example at 64 Hz and 5 to 30 cm above seafloor.
													<br/>
													Key assumption is that the oxygen flux in the measuring point equals the flux across sediment-water interface (no oxygen production or transient accumulation in water column).
												</p>
											</div>
										</div>
										<!-- /.item -->
									</div>
									<!-- /.carousel-inner -->
								</div>
								<!-- /#animation , .carousel -->
								<?php
/*
<div style="margin-bottom:40px;" class="row-fluid explanation">
<p class="video-explanation">Time series of water velocities (x, y, z) and oxygen concentration (for oxygen fluxes) are recorded simultaneously, for example at 64 Hz and 5 to 30 cm above seafloor.</p>
<p class="video-explanation">Key assumption is that the oxygen flux in the measuring point equals the flux across sediment-water interface (no oxygen production or transient accumulation in water column).</p>
</div>
*/
								?>
								</div> <!-- /.span10 -->
							</div> <!-- /.row-fluid -->
							<hr/>
							<div class="row-fluid">
								<div class="span10 offset1">
									<div id="slideshow" class="carousel slide" data-interval="false">
										<!--
										<ol class="carousel-indicators">
										<li data-target="#slideshow" data-slide-to="0" class="active"></li>
										<li data-target="#slideshow" data-slide-to="1" ></li>
										<li data-target="#slideshow" data-slide-to="2" ></li>
										<li data-target="#slideshow" data-slide-to="3" ></li>
										<li data-target="#slideshow" data-slide-to="4" ></li>
										<li data-target="#slideshow" data-slide-to="5" ></li>
										</ol> -->
										<div class="carousel-inner">
											<div class="item active">
												<img src="/berg/img/slides/EddySlides01.jpg" alt="slide01">
												<div class="carousel-caption">
													<p class="carouselcaption">Oxygen is consumed in the upper sediment layers.</p>
												</div>
											</div>
											<div class="item">
												<img src="/berg/img/slides/EddySlides02.jpg" alt="slide02">
												<div class="carousel-caption">
													<p class="carouselcaption">Turbulent eddy mixing brings oxygen down to the sediment surface.</p>
												</div>
											</div>
											<div class="item">
												<img src="/berg/img/slides/EddySlides03.jpg" alt="slide03">
												<div class="carousel-caption">
													<p class="carouselcaption">Real data (oxygen concentration and vertical velocity) measured through 1 min 10 cm above a sediment surface</p>
												</div>
											</div>
											<div class="item">
												<img src="/berg/img/slides/EddySlides04.jpg" alt="slide04">
												<div class="carousel-caption">
													<p class="carouselcaption">Means and smoothing added.</p>
												</div>
											</div>
											<div class="item">
												<img src="/berg/img/slides/EddySlides05.jpg" alt="slide05">
												<div class="carousel-caption">
													<p class="carouselcaption">Marked with yellow: Velocity pointing down and oxygen concentration is above average.</p>
												</div>
											</div>
											<div class="item">
												<img src="/berg/img/slides/EddySlides06.jpg" alt="slide06">
												<div class="carousel-caption">
													<p class="carouselcaption">Marked with green: Velocity pointing up and oxygen concentration is below average. <br/> This "yellow-green" correlation gives a net transport of oxygen down to the sediment where it is consumed.</p>
												</div>
											</div>
										</div>
										<a class="left carousel-control" href="#slideshow" data-slide="prev">&lsaquo;</a>
										<a class="right carousel-control" href="#slideshow" data-slide="next">&rsaquo;</a>
									</div><!-- /.carousel -->

								</div>
							</div>

						</div>
					</div>

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