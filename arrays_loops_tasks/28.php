<?php
	echo "Таблица умножения: <br>";
		for ($i=1; $i <= 10 ; $i++) { 
	    $a_1=1;
		    while ($a_1 <= 10) {
		        $prod_1 = $a_1 * $i;
				echo "$i * $a_1 = $prod_1 <br>";
				$a_1++;
				if ($a_1 == 11)	{
					echo "<br>";
	    	    }
			}
		}
?>