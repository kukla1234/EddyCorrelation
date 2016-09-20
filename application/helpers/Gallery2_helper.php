<?php

function printGallerySegment($header, $title, $sections = ["" => ""]){
    print '<div class="berg_gallery-section">';
    print        '<p class=\'berg_text-team-name\' id=\''.$header.'\'>';
    print            $title;
    print        '</p>';
    foreach($sections as $sec => $subheader) {
        printGalleryNode($header, $sec, $title, $subheader);
    }
    print '</div>';
}

function printGalleryNode($directory, $subdirectory, $title, $subtitle){
    $subt = ($subtitle)? " - ".$subtitle  : "";
    print '<div class=\'berg_gallery-subsection id=\''.$subtitle.'\'>';
    print       '<p class=\'berg_text-team-name\'>';
    print            $subtitle;
    print       '</p>';
    printImageSet($directory,$subdirectory, $title, $subtitle);
    print '</div>';
}

function printImageSet($groupname,$subdirectory, $title, $subtitle){
    $directory = $groupname;
    if($subdirectory) {
        $directory .= '/'.$subdirectory;
    }
    $imggroup = ($subdirectory? $subdirectory : $groupname);
    $imageNames = str_replace(" ", "%20", getDirectoryList('img/gallery/'.$directory.'/pics/') );
    for($i = 0; $i < count($imageNames); $i++) {
        print '<a href="img/gallery/'.$directory.'/pics/'.$imageNames[$i].'" data-fresco-caption=\''.$title.' | '.$subtitle.'\' class=\'fresco\' data-fresco-group=\'berg-gallery\' data-fresco-group-options=\'loop: true\'\'>' ;
        print '<img src="img/gallery/'.$directory.'/thumbs/tn_'.$imageNames[$i].'" alt=\'Slide 1\' class=\'berg_gallery-image field\'>';
        print '</a>'; 
    } 
}
 
function getDirectoryList ($directory) 
    {

    // create an array to hold directory list
    $results = array();

    // create a handler for the directory
    $handler = opendir($directory);

    // open directory and walk through the filenames
    while ($file = readdir($handler)) {

    // if (!preg_match('/(?i)\.(jpg|png|gif)$/', $file)) {
    //         continue;
    // }
      // if file isn't this directory or its parent, add it to the results
    if ($file != "." && $file != ".." && $file != "Thumbs.db" && $file != ".AppleDouble") {
        $results[] = $file;
      }

    }

    // tidy up: close the handler
    closedir($handler);

    // done!
    return $results;

}



?>
