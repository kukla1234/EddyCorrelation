<?php

/* src/View/Helper/GalleryHelper.php 
 *
 * @link http://book.cakephp.org/3.0/en/views/helpers.html#creating-helpers
 *
**/

// $this->load->helper('file');



/**
* @param String             $directory    - directory name to print (found in img/gallery/{directory})
* @param String             $sectionTitle - desired name of the section title
* @param associative array  $subsections (optional) 
*                                         - if subsections format: ['subdirectoryName' => 'subsectionTitle']
*/
function printGallerySection($directory, $sectionTitle, $subsections = null) {
    var_dump("yolo");
    echo '<p> YOLO</p>';
    echo    '<div class=\'berg_gallery-section\'>';
    echo        '<p class=\'berg_text-team-name\' id=\''.$sectionTitle.'\'>';
    echo            $sectionTitle;
    echo        '</p>';
    
    foreach ($subsections as $subdirectoryName => $subsectionTitle) {
        printGallerySubSection($directory, $subsectionTitle, $sectionTitle, $subdirectoryName);
    }            
    echo    '</div>';
}

/**
* @param String $directory       - directory name to print (found in img/gallery/{directory})
* @param String $subdirectory    - directory name to print (found in img/gallery/{directory}/{subdirectory})
* @param String $subsectionTitle - desired name of subsection title
*/
function printGallerySubSection($directory, $subsectionTitle, $sectionTitle, $subdirectory = null) {
    $path = "";
    $pathFromGallery = "";
    if ($subdirectory != null) {
        $path ='/berg/img/gallery/'.$directory.'/'.$subdirectory.'/'.'pics/';
        $pathFromGallery = 'gallery/'.$directory.'/'.$subdirectory.'/'.'pics';
    }
    else {
        $path ='/berg/img/gallery/'.$directory.'/'.'pics/';
        $pathFromGallery = 'gallery/'.$directory.'/'.'pics';
    }

    // $dir = new Folder($path);
    // $dirContents = $dir->read();
    // $files = $dirContents[1];
    $files = get_filenames($path);

    echo '<div class=\'berg_gallery-subsection id=\''.$subsectionTitle.'\'>';
    echo            '<p class=\'berg_text-team-name\'>';
    echo            $subsectionTitle;
    echo            '</p>';
    foreach ($files as $file) {
        if (!preg_match('/(?i)\.(jpg|png|gif)$/', $file)) {
            continue;
        }
        printGalleryImage($pathFromGallery, $file, $subsectionTitle, $sectionTitle);
    }
    echo '</div>';

}

/**
* @param String $directory - directory name to print (found in img/gallery/{directory})
* @param String $subdirectory - directory name to print (found in img/gallery/{directory}/{subdirectory})
*/
function printGalleryImage($pathFromGallery, $fileName, $subsectionTitle, $sectionTitle) {
    $pathToFile = $pathFromGallery.'/'.$fileName;
    echo '<a href=\'.berg/img/'.$pathToFile.'\' data-fresco-caption=\''.$sectionTitle.' | '.$subsectionTitle.'\' class=\'fresco\' data-fresco-group=\'berg-gallery\' data-fresco-group-options=\'loop: true\'\'>' ;
    echo '<img src=\'berg/img/'.$pathToFile.'\' alt=\'Slide 1\' class=\'berg_gallery-image field\'>'
    echo '</a>'; 
}



?>
