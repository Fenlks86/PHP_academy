<?php
//Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
$var = '';

for ($i = 0; $i < 5; $i++){
$var [$i] = rand (-100, 100);
}
print_r ($var);
$max = '';
foreach ($var as $key => $var1){
    if ($var1 / 10 >= 1 && $var1 > 0){
        $max [$key] = $var1;
    }
    
}
$prod =1;
if ($max != null){
foreach ($max as $var1){
    $prod *= $var1;
}
echo "Product of array where value more 10 = $prod \n";
}
else echo "Ïðîèçâîäíûõ áîëüøå 10 íåòó \n";
$min = '';
foreach ($var as $key => $var1){
    if ($var1 / 10 < 1 && $var1 > 0){
        $min [$key] = $var1;
        }
}
if ($min != null){
    echo "Âîò ìàññèâ èç çíà÷åíèé áîëüøå 0 è ìåíüøå 10 \n";
    print_r ($min);
}
else echo "Çíà÷åíèé ìàññèâà áîëüøå 0 è ìåíüøå 10 íåòó";
?>