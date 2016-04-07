<?php

$var = 913;
$arr = str_split($var);
print_r($arr);
$arr1 = 0;
foreach ($arr as $arr){
	$arr1 += $arr;
}
echo "<br>" . $arr1;