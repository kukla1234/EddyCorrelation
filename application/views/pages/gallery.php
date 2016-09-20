<!-- 
 * Description: photo Gallery
 *
 * @author    Elizabeth Kukla <elizabeth.kukla@gmail.com>
 * @date      03.09.16
 * @copyright All rights reserved.
 */
 -->

<body>
    <link href="/berg/css/fresco/fresco.css" rel="stylesheet">
    <script src="/berg/js/fresco/fresco.js" type="text/javascript"></script>
    <div class='berg_content'>
        <h2 class='berg_content-title'>
            Gallery
        </h2>
        
        <?php 
        $this->load->helper('Gallery2');
            
            printGallerySegment("earlydays","Early days");

            $easternshore = [
                "smallfreshwaterstreams"=> "Small Freshwater Streams",
                "oysterbeds" => "Oyster beds",
                "seagrassbeds" => "Seagrass beds" 
                ];               
            printGallerySegment("easternshore", "Eastern Shore, Virginia", $easternshore);

            $floridakeys = [
                            "coralreefs" => "Coral Reefs",
                            "permeablesediments" => "Permeable Sediments",
                            "seagrassbeds" => "Seagrass Beds"
                            ];
            printGallerySegment("floridakeys","Florida Keys", $floridakeys);

            $floridagulf = [
                            "permeablesediments"=>"Permeable Sediments"
                            ];
            printGallerySegment("floridagulf","Gulf of Mexico, Florida", $floridagulf);

            $floridawakulla = [
                            "permeablesediments"=>"Permeable sediments"
                            ];
            printGallerySegment("floridawakulla","Wakulla River, Florida", $floridawakulla);

            $greenland = [
                            "underseaice"=>"Upside Down, Under Sea Ice"
                            ];
            printGallerySegment("greenland","Greenland", $greenland);

            $japan = [
                      "deepocean"=>"Deep ocean"
                     ];

            printGallerySegment("japan","Japan",$japan);

            $savannah = [
                      "permeableshelfsediments" => "Permeable Sediments"
                     ];

            printGallerySegment("savannah", "Continental shelf, Georgia", $savannah);

            $switzerland = [
                      "freshwater"=>"Fresh water river sediments"
                     ];
            printGallerySegment("switzerland","Switzerland", $switzerland);

            $wisconsin = [
                      "quaggamussels"=>"Quagga Mussels overgrown with filamentous algae"
                     ];
            printGallerySegment("wisconsin","Great Lakes, Wisconsin", $wisconsin);

            $woodshole = [
                      "permeablesediments"=>"Permeable sediments"
                     ];
            printGallerySegment("woodshole","Woods Hole, Massachusetts", $woodshole);
        ?>      
    </div>
</body>
