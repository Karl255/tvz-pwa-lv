<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv2-lab3</title>
</head>

<body>
	<?php
		function povrsina($a, $b) {
			return $a * $b;
		}
		
		echo "Površina je " . povrsina($_GET["a"], $_GET["b"]);
	?>
</body>

</html>
