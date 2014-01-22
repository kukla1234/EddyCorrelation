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
						<div class="span12 publications">
							<div class="pub-unit row-fluid">
								<h3>PROFILE Software</h3>
								<p class="citation"><a target="_blank" href="publication/modeling/PROFILE.zip"><span class="pdf-tag">[.ZIP]</span> Download PROFILE</a></p>			
								<hr/>
							</div>

							<div class="pub-unit row-fluid">
								<h3>Publications on Modeling</h3>
							<?php
								
								$this->view("templates/printCitation");
								
								
								printCitation("Huettel, M., <b>P. Berg</b>, J.E. Kostka. (2014). Benthic Exchange and Biogeochemical Cycling in Permeable Sediments. <b> Annu. Rev. Mar. Sci.</b> 6: 8.1-8.29.",
												"modeling","Huettel et al 2013 ARI");	
								printCitation("Hayn, M., R.W. Howarth, R. Marino, N. Ganju, <b>P. Berg</b>, K.H. Foreman, A.E. Giblin, K.J. McGlathery. (In Press). Exchange of nitrogen and phosphorus between a shallow seagrass-dominated lagoon and coastal waters. <b>Estuaries and Coasts</b>.");
								printCitation("Howarth, R.W., M. Hayn, R.M. Marino, K.H. Foreman, <b>P. Berg</b>, A.E. Giblin, K.J. McGlathery, J.D. Walker. (Accepted). Metabolism of a nitrogen-enriched coastal marine lagoon during summertime. <b>Biogeochemistry.</b> DOI 10.1007/s10533-013-9901-x.",
												"modeling","Howarth et al 2013 Biogeoche.pdf");
								printCitation("Long, M. H., J. E. Rheuban, <b>P. Berg,</b> and J. C. Zieman. (2012). A comparison and correction of light intensity loggers to photosynthetically active radiation sensors. <b>Limnology and Oceanography: Methods.</b> 10: 416-424.",
												"modeling","Long et al 2012 L&amp;OM.pdf");
								printCitation("Koopmans, D., <b>P. Berg.</b> (2011) An alternative to traditional seepage meters: Dye displacement. <b>Water Resources Research</b> 47, W01506, doi:10.1029/2010WR009113.",
												"modeling","Koopmans and Berg 2011 WRR.pdf");
								printCitation("Glud, R. N., H. Stahl, <b>P. Berg</b>, F. Wenzhöfer, K. Oguri, H. Kitazato (2009). In situ microscale variation in distribution and consumption of O2: A case study from a deep ocean margin sediment (Sagami Bay, Japan). <b>Limnology and Oceanography.</b> 54: 1-12.",
												"modeling","Glud et al L&amp;O 2009.pdf");
								printCitation("Liao, Q., H. A. Bootsma, J. Xiao, V. J. Klump, A. Hume, M. H. Long, <b>P. Berg</b> (2009). Development of an in situ Underwater Particle Image Velocimetry (UWPIV) System and Its Deployment in Lake Michigan. <b>Limnology and Oceanography: Methods.</b> 7: 169-184.",
												"modeling","Liao et al 2009 L&amp;OM.pdf");
								printCitation("Long, M. H., K. J. McGlathery, J. C. Zieman, <b>P. Berg</b> (2008). The role of organic acid exudates in liberating phosphorus from seagrass-vegetated carbonate sediments. <b>Limnology and Oceanography.</b> 53: 2616-2626.",
												"modeling","Long et al 2008 L&amp;O.pdf");
								printCitation("<b>Berg, P.</b>, D. Swaney, S. Rysgaard, B. Thamdrup, H. Fossing. (2007) A fast numerical solution to the general mass-conservation equation for solutes and solids in aquatic sediments. <b>Journal of Marine Research.</b> 65:317-343.",
												"modeling","Berg et al 2007 JMR.pdf");
								printCitation("Reynolds, L. K., J. C. Zieman, <b>P. Berg</b>. (2007) Lucinid Clam Influence on the Biogeochemistry of the seagrass Thalassia testudinum sediments. <b>Estuaries.</b> 30:482-490.",
												"modeling","Reynolds et al 2007 Estuaries.pdf");
								printCitation("Glud, R. N., <b>P. Berg</b>, H. Fossing, B. B. Jørgensen. (2007) Effect of the diffusive boundary layer (DBL) on benthic mineralization and oxygen distribution: a theoretical model analysis. <b>Limnology and Oceanography.</b> 52:547-557.",
												"modeling","Glud et al 2007 L&amp;O.pdf");
								printCitation("Hoffmann, C. C., <b>P. Berg,</b> M. Dahl, S. E. Larsen, H. E. Andersen, B. Andersen. (2006) Groundwater flow and transport of nutrients through a riparian meadow - Field data and modeling. <b>Journal of Hydrology.</b> 331:315-335.",
												"modeling","Hoffmann et al 2006 Hydrology.pdf");
								printCitation("Ray, G. C, J. McCormick-Ray, <b>P. Berg</b>, H. E. Epstein. (2006) Pacific walrus: Benthic bioturbator of Beringia. <b>Journal of Experimental Marine Biology and Ecology.</b> 330:403–419.",
												"modeling","Ray et al 2006 MBE.pdf");
								printCitation("Meile, C., <b>P. Berg</b>, P. Van Cappellen, K. Tuncay. (2005) Solute-specific pore water irrigation: Implications for chemical cycling in early diagenesis. <b>Journal of Marine Research.</b> 63: 601-621.",
												"modeling","Meile et al 2005 JMR.pdf");
								printCitation("Elberling, B., B.H. Jakobsen, <b>P. Berg</b>, J. Søndergaard, C. Sigsgaard. (2004) Influence of vegetation, temperature, and water content on soil carbon distribution and mineralization in four high Arctic soils. <b>Arctic, Antarctic, and Alpine Research.</b> 36:528-538.",
												"modeling","Elberling et al 2004 AAAR.pdf");
								printCitation("<b>Berg, P.</b>, S. Rysgaard, and B. Thamdrup. 2003. Dynamic modeling of early diagenesis and nutrient cycling. A case study in an Arctic marine sediment. <b>American Journal of Science.</b> 303:905-955.",
												"modeling","Berg et al 2003 AJS.pdf");
								printCitation("Habicht K.S., M. Gade, B. Thamdrup, <b>P. Berg</b>, D.E. Canfield. 2002. Calibration of sulfate levels in the Archean Ocean. <b>Science.</b> 298:2372-2374.",
												"modeling","Habicht et al 2002 Science.pdf");
								printCitation("McGlathery, K.J., <b>P. Berg</b>, and R. Marino. 2001. Using porewater profiles to assess nutrient availability in marine carbonate sediments. <b>Biogeochemistry.</b> 56:239-263.",
												"modeling","McGlathery et al 2001 Biogeochem.pdf");
								printCitation("<b>Berg, P.</b>, S. Rysgaard, P. Funch, and M. K. Sejr. 2001. Effects of bioturbation on solutes and solids in marine sediments. <b>Aquat. Microb. Ecol.</b> 26:81-94.",
												"modeling","Berg et al 2001 AME.pdf");
								printCitation("<b>Berg, P.</b> and K. J. McGlathery. 2001. A high-resolution porewater sampling for sandy sediments. <b>Limnology and Oceanography.</b> 46:203-210.",
												"modeling","Berg and McGlathery 2001 L&amp;O.pdf");
								printCitation("Hoffmann, C.C., S. Rysgaard, and <b>P. Berg</b>. 2000. Denitrification Rates Predicted by Nitrogen-15 Labeled Nitrate Microcosm Studies, In Situ Measurements, and Modeling. <b>Journal of Environmental Quality.</b> 29:2020-2028.",
												"modeling","Hoffmann et al 2000 JEQ.PDF");
								printCitation("Fossing, H., T. G. Ferdelman, and <b>P. Berg</b>. 2000. Sulfate reduction and methane oxidation in continental margin sediments influenced by irrigation (South-East Atlantic off Namibia). <b>Geochim. Cosmochim. Acta</b> 64:897-910.",
												"modeling","Fossing et al 2000 GCA.pdf");
								printCitation("Rysgaard S, P.B. Christensen, M.V. Sørensen, P. Funch, and <b>P. Berg</b>. 2000 Marine meiofauna, carbon and nitrogen mineralization in sandy and soft sediments of Disko Bay, West Greenland. <b>Aquat. Microb. Ecol.</b> 21:59-71. ",
												"modeling","Rysgaard et al 2000 AME.pdf");
								printCitation("<b>Berg, P.</b> 1999. Long-term simulation of water movement in soils using mass-conserving procedures. <b>Advances in Water Resources.</b> 22:419-430.",
												"modeling","Berg 1999 AWR.pdf");
								printCitation("Rysgaard S, Thamdrup B, Risgaard-Petersen N, Fossing H, <b>Berg P</b>, Christensen PB, Dalsgaard T. 1998. Seasonal carbon and nitrogen mineralization in a high-Arctic coastal marine sediment, Young Sound, Northeast Greenland. <b>Marine Ecology Progress Series.</b> 175:261-276. ",
												"modeling","Rysgaard et al 1998 MEPS.pdf");
								printCitation("<b>Berg, P.</b>, N. Risgaard-Petersen, and S. Rysgaard. 1998. Interpretation of measured concentration profiles in the sediment porewater. <b>Limnology and Oceonography</b>  43:1500-1510.",
												"modeling","Berg et al 1998 L&amp;O.pdf");
								printCitation("Rysgaard, S. and <b>P. Berg</b>. 1996.  Nitrogen mineralization in a northeastern Greenland sediment:  mathematical modeling, measured sediment porewater profiles and actual activities. <b>Aquatic Microbiology</b> 11:297-305.",
												"modeling","Rysgaard and Berg 1996 AM.pdf");
								?>
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
	</body>