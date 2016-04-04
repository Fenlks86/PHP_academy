<?php
$count = 0;
$arr = array(4, 2, 5, 19, 13, 0, 10,  13,  10, 1, 5, 1);
foreach ($arr as $key => $arr) {
	if ($key >= $count) {
		$count ++; 	
	}
}
	echo "$count";
	echo "$key";
?>