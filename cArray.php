<!DOCTYPE html>
<html>
<head>
	<title>Workshop 3</title>
</head>
<body>
	<h3>Part 1</h3>
	<div style="background-color:#00ace6;">
		<?php
			$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
			
			ksort($ceu);
			foreach($ceu as $x => $x_value) {
			echo "Te capital of " . $x . " is " . $x_value;
			echo "<br>";
			}
		?>
	</div>
	<br>
	<h3>Part 2</h3>
	<div style="background-color:#47d147;">
		<?php
			$temp = array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

			//Highest
			rsort($temp);
			$largest = array_slice($temp, 0, 7);
			echo "List of seven highest temperatures : 	";
			foreach ($largest as $result) {
			    echo $result; 
			    echo ", ";
			} 	

			//Lowest
			echo "<br>";
			asort($temp);
			$largest = array_slice($temp, 0, 7);
			echo "List of seven lowest temperatures : 	";
			foreach ($largest as $result) {
			    echo $result; 
			    echo ", ";
			} 

			//Promedio
		    $promedio = array_sum($temp) / count($temp);
		    echo "<br>";
		    echo "Average Temperature is: " . $promedio;
		    echo "<br>" . "<br>";
		?>
	</div>
</body>
</html>