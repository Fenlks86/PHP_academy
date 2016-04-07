<?php
$row = rand(1, 8); // к-во строк
$cols = rand(1, 8); // к-во столбцов
 $colors = array('red','yellow','blue','gray','maroon','brown','green');
//$value = $row * $cols;
echo "К-во строк $row, к-во столбцов $cols <br> ";
echo " <table border = 1> ";



	for ($a = 0; $a < $row; $a++) {
		echo " <tr>";	

	for ($b = 0; $b < $cols; $b++){
		$mas=rand(1100,100000);
		$colors_rand = rand (0,6);
		echo " <td bgcolor = $colors[$colors_rand]> $mas </td> ";
	}
		echo " </tr> ";
	}

	echo " </table> ";
?>