<html>
	<head>
		<title>Assignment</title>
	</head>
	<body>
	<?php
	
		//1.
		print("Quetion 1 : Write a program in PHP script to print prime numbers between 1 and 100<br><br>");
		for($i = 2;$i<100; $i++){
			for($j=2;$j<=$i;$j++){
				if ($j == $i){
					print($i.", ");
				}
				if($i%$j == 0){
					break;
				}
				
			}
		}
		
		//2.
		print("<hr><hr>Quetion 2: <br><br>");
		
		for($i = 0 ; $i<5; $i++){
			for($j = 0;$j<=$i;$j++){
				print("* ");
			}
			print("<br>");
		}
		for($i = 5 ; $i>0; $i--){
			for($j = 0;$j<$i;$j++){
				print("* ");
			}
			print("<br>");
		}
		
		//3.
		
		print("<hr><hr>Quetion 3: <br><br>");
		
		$marks = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
		65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
		
		print("average = ".array_sum($marks)/count($marks));
		
		sort($marks);
		print("<br>five lowest marks: ");
		for($i = 0;$i<5;$i++){
			print($marks[$i]).", ";
		}
		
		print("<br>five highest marks: ");
		for($i = 0;$i<5;$i++){
			print($marks[count($marks)-1-$i]).", ";
		}
		
		//4.
		print("<hr><hr>Quetion 4: <br><br>");
		
		$mark = 50;
		
		
		if($mark >= 75){
			$grade = "A";
		}
		elseif($mark>=65){
			$grade = "B";
		}
		elseif($mark>=55){
			$grade = "C";
		}
		elseif($mark >= 45){
			$grade = "S";
		}
		else{
			$grade = "F";
		}
		print("marks = $mark, grade = $grade");
		
		
		//5.
		print("<hr><hr>Quetion 5: <br><br>");
		
		
		
		$num = date("d");
		//$num = 100;
		$date = date("M");
		switch($num){
				case 1:
				case 8:
				case 15:
				case 22:
				case 29:
					$day = " Monday";
					break;
				
				case 2:
				case 9:
				case 16:
				case 23:
				case 30:
					$day =  " Tuesday";
					break;
					
				case 3:
				case 10:
				case 17:
				case 24:
				case 31:
					$day = "  Wednesday";
					break;
					
				case 4:
				case 11:
				case 18:
				case 25:
					$day = " Thursday";
					break;
					
				case 5:
				case 12:
				case 19:
				case 26:
					$day = " Friday";
					break;
					
				case 6:
				case 13:
				case 20:
				case 27:
					$day = " Saturday";
					break;
					
				case 7:
				case 14:
				case 21:
				case 28:
					$day = " Sunday";
					break;
				default:
					$day = "invalid number";
			
			
		}
		
		print("$date day-$day");
		
		
		//6.
		print("<hr><hr>Quetion 6: <br><br>");
		
		$num = 10;
		$factorial = 1;
		
		for ($i = 1; $i<=$num;$i++){
			$factorial = $i*$factorial;
		}
		print("factorial of $num = $factorial");
		
		//7.
		print("<hr><hr>Quetion 7: <br><br>");
		
		
		$ceu = array( "Italy"=>"Rome",
					"Luxembourg"=>"Luxembourg", 
					"Belgium"=> "Brussels",
					"Denmark"=>"Copenhagen", 
					"Finland"=>"Helsinki", 
					"France" => "Paris",
					"Slovakia"=>"Bratislava", 
					"Slovenia"=>"Ljubljana", 
					"Germany" => "Berlin", 
					"Greece" => "Athens", 
					"Ireland"=>"Dublin", 
					"Netherlands"=>"Amsterdam",
					"Portugal"=>"Lisbon", 
					"Spain"=>"Madrid", 
					"Sweden"=>"Stockholm", 
					"United Kingdom"=>"London", 
					"Cyprus"=>"Nicosia", 
					"Lithuania"=>"Vilnius", 
					"Czech Republic"=>"Prague", 
					"Estonia"=>"Tallin", 
					"Hungary"=>"Budapest", 
					"Latvia"=>"Riga",
					"Malta"=>"Valetta", 
					"Austria" => "Vienna", 
					"Poland"=>"Warsaw"
					) ;
	asort($ceu);
	

	foreach($ceu as $country => $capital){
		print("The capital of $country is $capital <br>");
	}

	?>
	
	</body>
</html>