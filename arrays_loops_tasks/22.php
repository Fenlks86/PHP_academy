<?php
$pyramid = '';

for ($i = 2; $i <= 10; $i+= 2) {
	
		for ($a = 0; $a<$i; $a++){
			$pyramid .= 'x' ;
		}
		echo "$pyramid <br>";
		$pyramid = '';

}

?>