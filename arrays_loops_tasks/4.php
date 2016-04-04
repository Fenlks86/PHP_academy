<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo "Это ключи массива: <br>";
foreach ($arr as $key => $value) {
	echo "$key <br>";
}
echo "Это значения массива: <br>";
foreach ($arr as $key => $value) {
	echo "$value <br>";
}

?>