<?php
	include "authenticate.php";
?>

<!DOCTYPE html>
<!-- "http://www.w3.org/TR/html4/loose.dtd"> -->
<html lang="en">

	<head>
		<?php
		include "templates/header.php";
        include_once "templates/analyticstracking.php"; 
        ?>
	</head>

	<body>
		
		<div id="wrapper" class="wrapper">

			<div id="wrapper-inner" class="wrapper-inner">

				<div class="wrapper-header">

					<?php
					include "templates/navbar.php";
					include "templates/page-header.php";
					
					?>

				</div>

				<div class="wrapper-content container-fluid">
					<div class="row-fluid">
						<div class="span6 offset3">
					<h2 style="text-align:center;">Useful Web Links</h2>
					<p>You may find other useful web pages about the eddy correlation technique below.</p>
					<p>Research sites:</p>
					<ul>
						<?php
							foreach(  array("http://myweb.fsu.edu/mhuettel/Projects/NSF_Eddy.html",
											"http://dfmcginnis.com/EddyCorrelation.html",
											"http://www.mpi-bremen.de/en/Eddy_Correlation_System.html",
											"http://hmsc.oregonstate.edu/reimerslab/boxer",
											"http://www.scu.edu.au/coastal-biogeochemistry/index.php/49/")
										as $link){
											echo '<li>'.weblink($link).'</li>';
									}
									?>	
					</ul>
					<p>Commercial sites:</p>
					<ul>
						<?php
							foreach(  array("http://www.unisense.com/eddy_correlation_system",
											"http://www.rocklandscientific.com/Products/EddyCorrelation/tabid/120/Default.aspx",
											"http://www.pme.com/HTML%20Docs/PMENortek.html",
											"http://www.nortekusa.com/lib/technical-notes/tn-025-eddy-correlation-technique")
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
											"http://ameriflux.lbl.gov/SitePages/Home.aspx",
											"http://www.unitus.it/dipartimenti/disafri/progetti/eflux/euro.html")
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
				include "templates/footer.php";
				?>
			</div>
			<!--wrapper-inner-->
		</div>
		<!-- wrapper-outer -->

		<?php
		include "templates/scripts.php";
		?>
	</body>
</html>

<?php
	function weblink($link){
		return '<a href="'.$link.'">'.$link.'</a>';
	}
