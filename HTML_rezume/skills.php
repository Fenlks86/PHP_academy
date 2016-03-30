<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
			<link rel="stylesheet" type="text/css" href="style/skills.css">
		</head>
		<body>
		<?php
		$skills_work1 = array( 'Windows', 'Internet', /*"Microsoft" => */Array( "Word",  "Excel",  "Power", "Point", "Visio", "Access", "Project"),
					  array ("ТОВ «БМС Консалтинг»", "ЗАТ «Український процесінговий центр» (UPC)"));

		//Выводим первого масива с многомерного массива с разными типами
		function array_from_array ($skills_work) {

		//Узнайом на каком ключе начинаеться массив
		for ($i=0; ($i < count($skills_work)); $i++) { 
			if (is_array($skills_work[$i])){
			$array_new [$i] = key($skills_work);
			}
		}
		$number_key = key($array_new); //Значение ключа 2
		for ($i=0; ($i < count($skills_work)) && ($i <= $number_key); $i++) { 
			if (is_array($skills_work[$i])){
			
			foreach ($skills_work[$i] as $key => $Microsoft) {
				echo "$Microsoft". ", ";
			 } 
			}
		}
		return 	$Microsoft;
		}
				
		?>
			<div>
			<h3>Додаткова інформація: </h3>
			<p><span class="bold">Знання комп'ютера: </span> Microsoft Office (<?php array_from_array ($skills_work1)?>), <?php echo $skills_work1 [0] . ", " . $skills_work1 [0] ?></p>
			<p><span class="bold">Знайомий з принципами роботи: </span>Adobe Photoshop, AutoCAD, HTML, С++, CSS, PHP, Visual Basic, SQL.</p>
			<p><span class="bold">Володіння іноземними мовами: </span> Українська, російська - вільно. Англійська - розмовний рівень.</p>
			<p><span class="bold">Особисті якості: </span> Орієнтований на результат, комунікабельний, стресостійкий, вмію знаходити вихід із складних ситуацій і приймати самостійні рішення, відповідальний, уважний, аналітичний склад розуму, творчий підхід до виконання завдань, вміння працювати в команді, здатність до швидкого навчання, висока працездатність</p>
			<p><span class="bold">Сімейний стан: </span> неодружений.</p>
			<p><span class="bold">Відношення до відряджень: </span> позитивне.</p>
		</div>	
		</body>
		</html>					