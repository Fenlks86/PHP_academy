<?php
$pyramid = '';

for ($i = 1; $i <= 9; $i++) {
	
		for ($a = 0; $a<$i; $a++){
			$pyramid .= $i ;
		}
		echo "$pyramid <br>";
		$pyramid = '';

}

?>