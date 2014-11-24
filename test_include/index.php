<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Test</title>
</head>
<body>
		<?php 
		require"header.php";
		$input = $_GET["page"];
			if ($input=="contact")
				{require "contact.php";
			}
			elseif($input=="about"){
				require "about.php";
			}
			else{
				require "main.php";
			}
				
		require"footer.php";
		?>

</body>
</html>
		