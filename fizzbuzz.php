<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
</head>
<body>
		<?php 
		
		$number=0;
		for ($number = 1; $number<101; $number++){
			echo '<br />'.$number;
			if ($number%3===0){
				echo(" Fizz");
			}
			elseif($number%5===0){
				echo(" Buzz");
			}
			
		}
		?>

</body>
</html>