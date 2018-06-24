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
						<div class="span6 offset3">
					<h2 style="text-align:center;">Useful Web Links</h2>
					<p>You may find other useful web pages about the eddy covariance technique below.</p>
					<p>Research sites:</p>
					<ul>
						<?php
							foreach(  array("http://myweb.fsu.edu/mhuettel/Projects/NSF_Eddy.html",
											"http://www.mikenish.com/Research/Benthic_metabolism.html",
											"http://phys.org/news/2015-05-scientists-high-tech-fragile-cold-water-reefs.html",
											"http://www.oceannetworks.ca/microsquid-experiment",
											"http://dfmcginnis.com/EddyCorrelation.html",
											"http://www.mpi-bremen.de/en/Eddy_Correlation_System.html",
											"http://hmsc.oregonstate.edu/research-labs/reimers-lab/current-research")
										as $link){
											echo '<li>'.weblink($link).'</li>';
									}
									?>	
					</ul>
					<p>Commercial sites:</p>
					<ul>
						<?php
							foreach(  array("http://www.unisense.com/eddy_covariance_system",
											"http://www.jfe-advantech.co.jp/eng/ocean/rinko/rinko-ec.html",
											"https://www.presens.de/products/detail/eddy-covariance-oxygen-microsensor-eco-pst7.html",
											"http://www.rocklandscientific.com/Products/EddyCorrelation/tabid/120/Default.aspx",
											"http://www.nortek-as.com/en/products/velocimeters/vector",
											"http://www.nortek-as.com/en/news/flux-measurements-by-eddy-correlation-in-benthic-environments-using-the-nortek-vector")
										as $link){
											echo '<li>'.weblink($link).'</li>';
									}
									?>
					</ul>
					<p>Work in air:</p>
					<ul>
						<?php
							foreach(  array("http://www.licor.com/env/products/eddy_covariance/index.html",
											"http://www.licor.com/env/products/eddy_covariance/ec_book.html",
											"http://ameriflux.lbl.gov/",
											"http://www.europe-fluxdata.eu/home",
											"http://fluxnet.ornl.gov/")
										as $link){
											echo '<li>'.weblink($link).'</li>';
									}
									?>
					</ul>
					<p>Books:</p>
					<ol>
						<li class="book-reference">
							 Handbook of Micrometeorology: A Guide for Surface Flux Measurement and Analysis (2004). <br/> 
							 By Xuhui Lee (Editor) , William Massman (Editor) , Beverly Law (Editor). 
							 Kluwer Academic Publishers.
						</li>
						<li class="book-reference">
							 Eddy Covariance: A Practical Guide to Measurement and Data Analysis (2012). <br/>
							 By Marc Aubinet (Editor), Timo Vesala (Editor), Dario Papale (Editor). Springer.
						</li>
						<li class="book-reference">
							 Eddy Covariance Method for Scientific, Industrial, Agricultural, and Regulatory Applications (2013). <br/>
							 By George Burba. <br/>
							 Download from <a href="http://www.licor.com/env/products/eddy_covariance/ec_book.html">LI-COR</a>
						</li>
					</ol>
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
	</body>
	
<?php
	function weblink($link){
		return '<a href="'.$link.'">'.$link.'</a>';
	}
