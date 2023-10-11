<!DOCTYPE html>
<html>
<body>

	<?php 
	
		//WHILE LOOP
		$x = 1;
		  
		while($x < 10) {
		   echo "The number is: $x <br>";
		   $x++;
		} 
		echo "<hr />";
		
		//DO WHILE LOOP
		//only repeat the loop if condition is true
		$x = 6;		
		do {
		echo "The number is: $x <br>";
		$x++;
		} while ($x <= 5); //condition
		
	?>   

</body>
</html>