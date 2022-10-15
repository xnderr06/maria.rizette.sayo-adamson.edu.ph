<html>
<body>
		<?php		
				echo "<br><br>";
			$name = "Agbisit";
			$grade = 59;
			if ($grade >= 70) 
			{
				echo "Name: ".$name . "<br>Grade: ". $grade . ", Passed <br>";
			} 
			elseif (($grade >=60) && ($grade <=69))
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", For Remedials <br>";
			}
			else
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", You failed <br>";
			}			
			//passed
			echo "<br><br>";
			$name = "Agbisit";
			$grade = 89;
			if ($grade >= 70) 
			{
				echo "Name: ".$name . "<br>Grade: ". $grade . ", Passed <br>";
			} 
			elseif (($grade >=60) && ($grade <=69))
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", For Remedials <br>";
			}
			else
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", You failed <br>";
			}		
			//Remedials
			echo "<br><br>";
			$name = "Agbisit";
			$grade = 68;
			if ($grade >= 70) 
			{
				echo "Name: ".$name . "<br>Grade: ". $grade . ", Passed <br>";
			} 
			elseif (($grade >=60) && ($grade <=69))
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", For Remedials <br>";
			}
			else
			{
				echo "Name: ".$name . "<br>Grade: ".$grade . ", You failed <br>";
			}		
		?>
		
		
</body>
</html>