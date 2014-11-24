<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
</head>
<body>
<table>
	<?php
				
	for($i = 0;$i <= 10;$i ++){
			echo "<tr>";
			for($m = 0;$m <= 10;$m ++){
				echo "<td>";
				if($i == 0 && $m == 0){
					echo"";
				}
				elseif($i==0){
					echo $m; 
				}
				elseif($m==0){
					echo $i; 
				}
				else{
					echo $i*$m;
				}
				echo "</td>";
			}
			echo "</tr>";

		}
	?>
</table>

</body>
</html>