<?php
	echo "Таблица умножения: <br>";

		for ($i=1; $i <= 10 ; $i++) { 
			for ($a_1 = 1; $a_1 <= 10; $a_1++) {
				$prod_1 = $a_1 * $i;
				echo "$i * $a_1 = $prod_1 <br>";
				if ($a_1 == 10)	{
					echo "<br>";
				}
			}
		
		}

?>