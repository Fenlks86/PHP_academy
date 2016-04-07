<?php
$e = 1;
$test14 = array(4, 2, 5, 19, 13, 0, 3);
foreach ($test14 as $key => $value) {
	if ($value == $e) {
		echo "Есть!";
		break;
	}
	elseif (count($test14)-1 == $key) {
	 	echo "Нет!";
	 } 
		
}
?>