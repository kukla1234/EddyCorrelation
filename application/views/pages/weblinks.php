<!-- 
 * Description: Weblinks and Resources page
 *
 * @author    Elizabeth Kukla <elizabeth.kukla@gmail.com>
 * @date      03.09.16
 * @copyright All rights reserved.
 */
 -->
<body>
    <div class='berg_content'>
        <h2 class='berg_content-title'>
          Weblinks
      </h2>
        <p class='berg_align-center'>Useful web pages about the eddy covariance technique.</p>
        <div class='berg_weblink berg_align-center'>
            <p class='berg_text-team-name'>
                Research Sites
            </p>
<?php
$this->load->helper('Citation');

                $researchSites = array(
                    "Florida State Univeristy: EddyCorrelation" => "http://myweb.fsu.edu/mhuettel/Projects/NSF_Eddy.html",
                    "Benthic Metabolism & Eddy Correlation" => "http://www.mikenish.com/Research/Benthic_metabolism.html",
                    "Scientists go high-tech to study fragile cold-water reefs" => "http://phys.org/news/2015-05-scientists-high-tech-fragile-cold-water-reefs.html",
                    "Woods Hole Oceanographic Institution: Matt Long" => "http://www.whoi.edu/hpb/viewPage.do?id=136876&cl=1",
                    "MicroSquid Experiment" => "http://www.oceannetworks.ca/microsquid-experiment",
                    "EddyCorrelation: D. F. McGinnis" => "http://dfmcginnis.com/EddyCorrelation.html",
                    "Royal Netherlands Institute for Sea Research: Ecosystem Studies
" => "https://www.nioz.nl/yes-en",
                    "Max Plank: Eddy Correlation System (ECS)" => "http://www.mpi-bremen.de/en/Eddy_Correlation_System.html",
                    "Oregon State: Reimers' Laboratory" => "http://hmsc.oregonstate.edu/research-labs/reimers-lab/current-research",
                    "Southern Cross University: Eddy Correlation" => "http://www.scu.edu.au/coastal-biogeochemistry/index.php/49/"
                    );
                foreach ($researchSites as $key => $value) {
                    echo printWeblink($key, $value).'<br>';
                }
                    ?>  
        </div>

        <div class='berg_weblink berg_align-center'>
            <p class='berg_text-team-name'>
                Commercial Sites
            </p>
            <?php
                $researchSites = array(
                    "Unisense: Eddy Covariance System" => "http://www.unisense.com/eddy_covariance_system",
                    "Rockland Scientific: Eddy Correlation" => "http://www.rocklandscientific.com/Products/EddyCorrelation/tabid/120/Default.aspx",
                    "Nortek: Vector" => "http://www.nortek-as.com/en/products/velocimeters/vector",
                    "Nortek: Flux Measurements by Eddy Correlation" => "http://www.nortek-as.com/en/news/flux-measurements-by-eddy-correlation-in-benthic-environments-using-the-nortek-vector"
                    );
                foreach ($researchSites as $key => $value) {
                    echo printWeblink($key, $value).'<br>';
                }
            ?>  
        </div>

        <div class='berg_weblink berg_align-center'>
            <p class='berg_text-team-name'>
                Work in Air
            </p>
            <?php
                $researchSites = array(
                    "Li-Cor: Complete Eddy Covariance Systems" => "http://www.licor.com/env/products/eddy_covariance/index.html",
                    "Li-Cor: Eddy Covariance Method" => "http://www.licor.com/env/products/eddy_covariance/ec_book.html",
                    "AmeriFlux" => "http://ameriflux.lbl.gov/",
                    "European Fluxes Database Cluster" => "http://www.europe-fluxdata.eu/home",
                    "Fluxnet: Worldwide Water and Energy Flux Measurements" => "http://fluxnet.ornl.gov/"
                    );
                foreach ($researchSites as $key => $value) {
                    echo printWeblink($key, $value).'<br>';
                }
            ?>  
        </div>

        <div class='berg_weblink berg_align-center'>
            <p class='berg_text-team-name'>
                Books
            </p>
            <p class='berg_citation-text text berg_indent-block'>
                Handbook of Micrometeorology: A Guide for Surface Flux Measurement and Analysis (2004). <br/>
                By Xuhui Lee (Editor) , William Massman (Editor) , Beverly Law (Editor). 
                Kluwer Academic Publishers.
            </p>
            <p class='berg_citation-text text berg_indent-block'>
                Eddy Covariance: A Practical Guide to Measurement and Data Analysis (2012). <br/>
                By Marc Aubinet (Editor), Timo Vesala (Editor), Dario Papale (Editor). Springer.
            </p>
            <p class='berg_citation-text text berg_indent-block'>
                Eddy Covariance Method for Scientific, Industrial, Agricultural, and Regulatory Applications (2013). <br/>
                 By George Burba. <br/>
                 Download from <a class='berg_citation-text' href="http://www.licor.com/env/products/eddy_covariance/ec_book.html">LI-COR</a>
            </p>
        </div>
    </div>
</body>
