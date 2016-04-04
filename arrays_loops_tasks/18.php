<?php

$arr = array(1, 2, 3, 4, 5, 6, 7);
foreach ($arr as $key => $arr) {
		if ($arr % 6 == 0 || $arr % 7 == 0) {
			echo "<b>$arr</b>, "; 	
		}
		else 
			echo "$arr, ";
}

?>