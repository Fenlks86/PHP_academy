<?php
/**
 * Created by PhpStorm.
 * User: rus
 * Date: 29.03.16
 * Time: 19:17
 * Пример работы с массивами разного уровня сложности и циклами, которые их обрабатывают
 */

// вычисляет надбавки к базовой ставке
function Int( $salary, $yacenyuk, $nothing = 100) {

    return $salary*$yacenyuk + $nothing; // возвращает вычисленное значение зарплаты

}
 // массив разного рода образовательных уреждений
 $education_type = Array( 'школа', 'институт', 'училище', 'колледж', 'техникум' );

 /* массив, который содержит работников и разные сведения о них,
  * список работ ("work_list")
  * и образование ("education") могут быть различного типа
  */
 $names = Array(
     Array( "name" => "Иван", "age" => 28, "salary" => 100, "work_list" => Array( "Континент",  "Магнит",  "Кишене" ),
            "education" => Array( "церковно-приходская {$education_type[0]}", "семинария", "бурса")

     ),
     Array( "name" => "Роман", "age" => 44, "salary" => 100, "work_list" => Array( "Континент",  "Магнит" ),
         "education" => " Политехнический {$education_type[1]}"
         ),
     Array( "name" => "Данил", "age" => 56, "salary" => 130, "work_list" => "Пока не работает",
         "education" => true
         ),
     Array( "name" => "Сергей", "age" => 34, "salary" => 150, "work_list" => Array( "Кишене" ),
     ),
   );

 // коэффициенты прибавок к зарплате
 $sale = Array( 1 => 1.3, 2 => 1.5, 3=> 1.7 );

 // определяет наличие образования
 $is_education = Array( true => 'Есть образование', false => 'нет образования');

// цикл по основному массиву со сведениями работников
foreach( $names as $name ) {

     // вычисление коэффициента от числа прежних мест работы
     $yacenyuk = ( isset($sale[ count($name["work_list"]) ] ) ? $sale[ count($name["work_list"]) ] : 1 );

     // вывод основных сведений
     echo $name["name"].', возраст ='.$name["age"].', получает '.Int( $name["salary"], $yacenyuk).' гривен </br>';

     // вывод списка прежних мест работы, если список - массив, то обрабатываем его как массив
     if ( is_array($name["work_list"]) ){
         echo "Ранее работал: ";

         foreach ($name["work_list"] as $key => $work_list)
             echo "$work_list" . ($key + 1 == count($name["work_list"]) ? '.' : ', ');
     }
     else // просто выводим значение
         echo $name["work_list"];

     // вывод сведений об образовании с учетом типа данного элемента массива
     if ( isset($name["education"]) ) {

         if (is_array($name["education"]) ) { // массив
             echo " Образование: ";
             foreach($name["education"] as $name_education)
                 echo $name_education.', ';

             // второй вариант вывода
             $i = 0;
             while ( $i < count($name["education"]) ) {
                 echo $name["education"][$i].', ';
                 $i ++;

             }
         }
         elseif ( is_bool($name["education"]) ) // булево значение
             echo $is_education[ $name["education"] ];
         else
             echo " Образование: {$name['education']}";

     } // окончание вывода сведений об образовании

     echo '</br></br>';
 } // окончание цикла обработки сведений работников

 // цикл чтения данных из файла
$filename = "/usr/local/something.txt";
$handle = fopen($filename, "r");
 while ( $contents = fread($handle, 1000) /* пока не достигли конца файла */) {
     // производим какие-то действия
 }
fclose($handle); // закрываем доступ к файлу
// цикл исполниться хотя бы один раз!
 do {
     // производим какие-то действия

 }
 while ( false /* условие выхода */);
