<?php
$count = 0;
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $key => $arr) {
	if ($arr == 3 || $arr == 6 || $arr == 9) {
		echo "$arr "; 	
	}
	else 
		echo "$arr, ";
}

?>