<?php
//Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.
$var = '';

for ($i = 0; $i < 5; $i++){
$var [$i] = rand (1, 100);
}
print_r ($var);
$max = 0;
foreach ($var as $key => $var1){
    if ($var1 > $max){
        $max = $var1;
        $key_max = $key;
    }
}
echo "Maximum = $max his key = $key_max \n";
$min = $max;
foreach ($var as $key => $var1){
    if ($var1 < $min){
        $min = $var1;
        $key_min = $key;
    }
}
echo "Minimum = $min his key = $key_min \n";
$var [$key_min] = $max;
$var [$key_max] = $min;
print_r ($var);
?>