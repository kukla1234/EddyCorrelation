
	<body>
		<div id="wrapper" class="wrapper">
			<div id="wrapper-inner" class="wrapper-inner">
				
				<div class="wrapper-header">					
				<?php
				$this->view("templates/navbar");
				$this->view("templates/page-header");
				
				?>							
				</div>
				<!-- <div class="wrapper-content container"> -->
					<?php
							printGallerySegment("earlydays","Early days",array("" => ""));
							print '<hr/>';
							printGallerySegment("easternshore", "Eastern Shore, Virginia", array("smallfreshwaterstreams"=> "Small freshwater streams",
																						"oysterbeds" => "Oyster beds",
																						"seagrassbeds" => "Seagrass beds" ));
							print '<hr/>';
							printGallerySegment("floridakeys","Florida Keys",array( "coralreefs" => "Coral reefs",
																					"permeablesediments" => "Permeable sediments",
																					"seagrassbeds" => "Seagrass beds") );
							
							print '<hr/>';
							printGallerySegment("floridagulf","Gulf of Mexico, Florida", array("permeablesediments"=>"Permeable sediments"));
							print '<hr/>';
							printGallerySegment("floridawakulla","Wakulla River, Florida", array("permeablesediments"=>"Permeable sediments"));
							print '<hr/>';
							printGallerySegment("greenland","Greenland",array("underseaice"=>"Upside down, under sea ice"));
							print '<hr/>';
							printGallerySegment("japan","Japan",array("deepocean"=>"Deep ocean"));
							print '<hr/>';
							printGallerySegment("savannah", "Continental shelf, Georgia", array("permeableshelfsediments" => "Permeable sediments"));
							print '<hr/>';
							printGallerySegment("switzerland","Switzerland",array("freshwater"=>"Fresh water river sediments"));
							print '<hr/>';
							// printGallerySegment("calciumsensor","Test of Calcium Sensor",array(""=>""));
							// print '<hr/>';
							printGallerySegment("wisconsin","Great Lakes, Wisconsin", array("quaggamussels"=>"Quagga Mussels overgrown with filamentous algae"));
							print '<hr/>';
							printGallerySegment("woodshole","Woods Hole, Massachusetts", array("permeablesediments"=>"Permeable sediments"));
					?>
						
					<!--</div> <!--wrapper-content -->
					
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
		<!-- <script type="text/javascript" src="js/gallery.js"></script> -->
	</body>


<?php

function printGallerySegment($header, $title, $sections){
	print '<div class="row-fluid">';
//	print '<h2 class="gallery-header">'.$title.'</h2>';
	print '<div id='.$header.' class="gallery-section">';
	foreach($sections as $sec => $subheader) {
		printGalleryNode($header, $sec, $title, $subheader);
	}
	print '</div><!--./gallery-section-->
			</div><!--./row-fluid-->';
}

function printGalleryNode($directory, $subdirectory, $title, $subtitle){
	$subt = ($subtitle)? " - ".$subtitle  : "";
	print '<h2 class="gallery-header" id='.$directory.$subdirectory.'>'.$title.$subt.'</h2>
			<div class="imageRow">';
	printImageSet($directory,$subdirectory);
	print '</div><!--./imagerow-->';
}

function printImageSet($groupname,$subdirectory){
	$directory = $groupname;
	if($subdirectory) {
		$directory .= '/'.$subdirectory;
	}
	$imggroup = ($subdirectory? $subdirectory : $groupname);
	$imageNames = str_replace(" ", "%20", getDirectoryList('img/'.$directory.'/pics/') );
	print '<div class="set">'; 
	for($i = 0; $i < count($imageNames); $i++) {
		print '<a class="single" href="img/'.$directory.'/pics/'.$imageNames[$i].'" rel="lightbox['.$directory.']"><img src="img/'.$directory.'/thumbs/tn_'.$imageNames[$i].'" alt="'.$groupname.' '.($groupname == $imggroup? "" : $imggroup.' ').$i.'" /></a>';
	} 
	print '</div>';
}
 
 function getDirectoryList ($directory) 
  {

    // create an array to hold directory list
    $results = array();

    // create a handler for the directory
    $handler = opendir($directory);

    // open directory and walk through the filenames
    while ($file = readdir($handler)) {

      // if file isn't this directory or its parent, add it to the results
      if ($file != "." && $file != "..") {
        $results[] = $file;
      }

    }

    // tidy up: close the handler
    closedir($handler);

    // done!
    return $results;

  }
?>