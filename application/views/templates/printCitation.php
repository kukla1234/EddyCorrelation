<?php
	function printCitation($txt, $path = "", $filename ="") {
		echo "<p class=\"publication\">";
		if ($path) {
			echo "<a target=\"_blank\" href=";
			if($path == "modeling")
				echo "journals/modeling/";
			else if ($path == "eddy")
				echo "journals/";
			echo str_replace(" ","%20",$filename) . " >";
		}
		if ($path)
			echo "<span class=\"pdf-tag\">[PDF]</span>";
		echo "<br/>";
		echo "<span class=\"citation\">";
		echo $txt;
		echo "</span>";
		echo "</a></p>";
	}

	?>