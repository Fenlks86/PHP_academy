<?php
$month = 'Апрель';
$arr = array('Январь', 'Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
foreach ($arr as $key => $arr) {
		if ($arr === $month) {
		echo "<b>$month</b>, "; 	
	}
	else 
		echo "$arr, ";
}

?>