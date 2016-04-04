<?php
$today = 5;
$arr = array(1, 2, 3, 4, 5, 6, 7);
foreach ($arr as $key => $arr) {
		if ($arr % 6 == $today) {
			echo "<i>$arr</i>, "; 	
		}
		else 
			echo "$arr, ";
}

?>