<?php
$arr = array(2, 5, 9, 15, 0, 4);
echo "Элементы больше 3 и меньше 10: <br>";
foreach ($arr as $key => $value) {
	if ($value > 3 && $value < 10) {
		echo "$value ";
	}
}

?>