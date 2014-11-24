<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
</head>
<body>
<ul>
	<li><a href="?action=list">ГЛав</a></li>
	<li><a href="?action=add">добавить текст</a></li>
</ul>
	<?php 
		$actions =['list','add','post', 'edit','delete'];
		$action = isset($_GET['action']) ? $_GET['action']:'list';
		if (in_array($action,$actions)){
			require_once $action .'.php';
		}
		else{
			echo'not found';
		}

	?>


</body>
</html>