<?php
	function printCitation($txt, $path = "", $filename ="") {
		echo "<p class=\"publication\">";
		if ($path) {
			echo "<a target=\"_blank\" href=";
			if($path == "modeling")
				echo "journals/modeling/";
			else if ($path == "eddy")
				echo "journals/";
			else if ($path == "web")
				echo "";
			echo str_replace(" ","%20",$filename) . " >";
		}
		if ($path == "eddy" || $path == "modeling")
			echo "<span class=\"pdf-tag\">[PDF]</span>";
		else if ($path == "web")
			echo "<span class=\"pdf-tag\">[WEBLINK]</span>";
		echo "<br/>";
		echo "<span class=\"citation\">";
		echo $txt;
		echo "</span>";
		echo "</a></p>";
	}

	?>
