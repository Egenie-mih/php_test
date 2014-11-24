<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
</head>
<body>
	<?php 
		
		// $dataString = file_get_contents('hipster.txt');
		// var_dump($dataString); 
		// $dataString .= "Santa Claus does not exist!\n";
		// file_put_contents('result.txt',$dataString);
		// var_dump($dataString);



		// $text = file_get_contents('hipster.txt');
		// $paragraph = explode("\r\n\r\n",$text);
		// krsort($paragraph);
		// $paragraph=implode("\r\n\r\n",$paragraph);
		// file_put_contents('result1.txt',$paragraph);
		// var_dump($paragraph);


		$text = file_get_contents('hipster.txt');
		$paragraph = explode("\r\n\r\n",$text);
		krsort($paragraph);
		
		// if (!$i % 4) {
		// 	unset($paragraph[$i]);
		// }
		$paragraph=implode("\r\n\r\n",$paragraph);
		

		$relaced=str_replace('en','ФЫВ', $paragraph);
		file_put_contents('result2.txt',$relaced);
		var_dump($relaced);
		var_dump($relaced);
		?>

</body>
</html>