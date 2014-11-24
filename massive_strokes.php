<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
</head>
<body>
		<?php 
		$words = [
		' qwe',
		'  aSd',
		' Zxchgf '];
			foreach($words as $key => $value){
				$words[$key] = trim ($value);
				$words[$key] = strtolower ($value);
				
			}
			$array = implode(",",$words);
			echo($array);

			
		?>

</body>
</html>