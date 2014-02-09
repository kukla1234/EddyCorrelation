<body>

	<div id="wrapper" class="wrapper">

		<div id="wrapper-inner" class="wrapper-inner">
			<div class="wrapper-header">

				<?php
				$this -> view("templates/navbar");
				$this -> view("templates/page-header");
				?>

			</div>

			<div class="wrapper-content container-fluid">

				<div class="row-fluid">
					<div class="span12 publications">
						<h3>Publications on Eddy Correlation</h3>
						<?php
						$this->view("templates/printCitation");

						printCitation("<b>Koopmans, D.</b>, <b>P. Berg</b> (Submitted). Spatial variability in oxygen flux in a coastal stream: An application of the eddy correlation technique. <b>Ecosystems.</b>");
						printCitation("<b>Long, M.H.</b>, <b>P. Berg</b>, J.C. Zieman, K.J. McGlathery. (Submitted). Tropical seagrass ecosystem metabolism using the eddy correlation technique. <b>Marine Ecology Progress Series.</b>");
						printCitation("<b>Rheuban, J.,</b> <b>P. Berg,</b> K.J. McGlathery. (Submitted). Seasonal oxygen metabolism in restored <em>Zostera marina L.</em> (eelgrass) meadows measured by eddy correlation. <b>Marine Ecology Progress Series.</b>");
						printCitation("<b>Rheuban, J.,</b> <b>P. Berg,</b> K.. McGlathery. (Submitted).  Ecosystem metabolism along a colonization gradient of eelgrass (<em>Zostera marina L.</em>) measured by eddy correlation. <b>Limnology and Oceanography.</b>");
						printCitation("Reidenbach, M. A., <b>P. Berg</b>, E. R. Whitman, J. C. R. Hansen, <b>A. C. Hume</b>. (2013). Hydrodynamics of intertidal oyster reefs: the influence of boundary layer flow processes on sediment and oxygen uptake. <b>Limnology and Oceanography: Fluids and Environment.</b> 3: 225–239 ","eddy",
						"Reidenbach%20et%20al%202013%20L&amp;O%20FE.pdf");
						printCitation("<b>Rheuban, J., P. Berg.</b> (2013). The effect of benthic surface heterogeneity on eddy correlation flux measurements. <b>Limnology and Oceanography: Methods.</b> 11:351-359 ", "eddy", "Rheuban%20and%20Berg%202013%20L&amp;OM.pdf");
						printCitation("<b>Berg, P., Long, M. H.</b>, Huettel, <b>M. Rheuban, J. E.</b>, McGlathery, K. J. Howarth, R. W. Foreman, K. H., Giblin, A. E., Marino, R. (2013) Eddy correlation measurements of oxygen fluxes in permeable sediments exposed to varying current flow and light. <b>Limnology and Oceanography.</b>  58: 1329–1343. ", "eddy", "Berg%20et%20al%202013%20L&amp;O.pdf");
						printCitation("<b>Long, M. H., P. Berg</b>, D. de Beer, J. C. Zieman. (2013). In situ coral reef oxygen metabolism:  An eddy correlation study. <b>PLoS ONE.</b> 8(3): e58581.", "eddy", "Long%20et%20al%202013%20PLOS%20ONE.pdf");
						printCitation("Chipman, L., M. Huettel, <b>P. Berg</b>, V. Meyer, I. Klimant, R. Glud, F. Wenzhoefer. (2012). Oxygen optodes as fast sensors for eddy correlation measurements in aquatic systems. <b>Limnology and Oceanography: Methods.</b> 10: 304–316", "eddy", "Chipman%20et%20al%202012%20L&amp;OM.pdf");
						printCitation("<b>Long, M. H., D. Koopmans, P. Berg</b>, S. Rysgaard, R. N. Glud, D.H. Søgaard. (2012) Oxygen exchange and ice melt measured at the ice-water interface by eddy correlation. <b>Biogeosciences.</b> 9: 1957–1967", "eddy", "Long%20et%20al%202012%20BG.pdf");
						printCitation(" Reimers, C. E., T. Özkan-Haller, <b>P. Berg</b>, A. Devol, K. Grosvenor-McCann, R. D. Sanders. (2012). Benthic Oxygen Consumption Rates Determined by Eddy Correlation during Hypoxic Conditions on the Oregon Continental Shelf. <b>J. Geophys. Res.</b>, 117, C02021, doi:10.1029/2011JC007564", "eddy", "Reimers%20et%20al%202012%20JGR.pdf");
						printCitation("McGinnis, D. F., S. Cherednichenko, L. Rovelli. <b>P. Berg</b>, R. Schwarz, R. N. Glud, S. Sommer, P. Linke. (2011) Simple, robust eddy-correlation amplifier for aquatic O2 and H2S flux measurements. <b>Limnology and Oceanography: Methods.</b> 9: 340–347", "eddy", "McGinnis%20et%20al%202011%20L&amp;OM.pdf");
						printCitation("<b>Hume, A., P. Berg</b>, K. J. McGlathery. (2011) Dissolved oxygen fluxes and ecosystem metabolism in an eelgrass (Zostera marina) meadow measured with the novel eddy correlation technique. <b>Limnology and Oceanography.</b> 56: 86–96.", "eddy", "Hume%20et%20al%202011%20L&amp;O.pdf");
						printCitation("Glud, R. N, <b>P. Berg</b>, A. Hume, P. Batty, M. E. Blicher, K. Lennert, S. Rysgaard. (2010) Benthic O2 exchange rates across hard-bottom substrates quantified by eddy correlation in a sub-Arctic fjord system. <b>Marine Ecology Progress Series.</b> 417: 1–12.", "eddy", "Glud%20et%20al%202010%20MEPS.pdf");
						printCitation("Lorrai, C., D.F. McGinnis, <b>P. Berg</b>, A. Brand, and A. Wüest (2010) Eddy correlation technique for turbulent oxygen flux measurements in aquatic ecosystems. <b>Journal of Atmospheric and Oceanic Technology.</b> 27: 1533–1546.", "eddy", "Lorrai%20et%20al%202010%20JAOT.pdf");
						printCitation("<b>Berg, P.</b>, R. N. Glud, A. Hume, H. Stahl, K. Oguri, V. Meyer, H. Kitazato. (2009) Eddy correlation measurements of oxygen uptake in deep ocean sediment. <b>Limnology and Oceanography: Methods.</b> 7: 576–584.", "eddy", "Berg%20et%20al%202009%20L&amp;OM.pdf");
						printCitation("<b>Berg, P.</b> and M. Huettel. (2008) Monitoring the Seafloor using the Non-Invasive Eddy Correlation Technique: Integrated Benthic Exchange Dynamics. <b>Oceanography.</b> 21: 164-167.", "eddy", "Berg%20and%20Huettel%202008%20Oceanography.pdf");
						printCitation("McGinnis, D. F., <b>P. Berg</b>, A. Brand, C. Lorrai, T. J. Edmonds, and A. Wüest (2008), Measurements of eddy correlation oxygen fluxes in shallow freshwaters: Towards routine applications and analysis, <b>Geophys. Res. Lett.</b>, 35, L04403.", "eddy", "McGinnis%20et%20al%202008%20GRL.pdf");
						printCitation("Crusius, J., <b>P. Berg</b>, D. J. Koopmans, L. Erban. (2008) Testing an eddy correlation method of quantifying submarine groundwater discharge. <b>Marine Chemistry</b> 109 (2008) 77–85.", "eddy", "Crusius%20et%20al%202008%20MC.pdf");
						printCitation("<b>Berg, P.</b>, H. Røy, P. L. Wiberg. (2007) Eddy correlation flux measurements – the sediment surface area that contributes to the flux. <b>Limnology and Oceanography.</b> 52:1672-1684.", "eddy", "Berg%20et%20al%202007%20L&amp;O.pdf");
						printCitation("<b>Berg, P.</b>, H. Røy, F. Janssen, V. Meyer, B. B. Jørgensen, M. Hüttel, and D. de Beer. 2003. Oxygen uptake by aquatic sediments measured with a novel non-invasive eddy correlation technique. <b>Marine Ecology Progress Series.</b> 261:75-83.", "eddy", "Berg et al 2003 MEPS.pdf");
						?>
					</div>
				</div>

			</div>
			<!--wrapper-content -->
			<?php
			$this -> view("templates/footer");
			?>
		</div>
		<!--wrapper-inner-->
	</div>
	<!-- wrapper-outer -->

	<?php
	$this -> view("templates/scripts");
	?>
</body>