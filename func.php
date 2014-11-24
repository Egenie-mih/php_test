<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
</head>
<body>
<?php
function textByAge($age=99){
			
		if ($age<20){
			echo("Все впереди,Jack");
		}
		elseif($age>=20 && $age<=30){
			echo("Самое время за ум, Jack");
		}
		else{
			echo("У вас есть чему поучиться, Jack");
		}

}
for($i=1;$i<100;$i++){
	$value = textByAge($i);
	echo $value."<br />";
}
?>
</body>
</html>
<!-- по порядковому номеру вывести число фибоначи -->