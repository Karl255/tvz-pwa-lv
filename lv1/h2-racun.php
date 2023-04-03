<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>lv1-h2</title>
</head>

<body>
	<?php
		$a = $_GET["a"];
		$b = $_GET["b"];
		$c = $_GET["c"];
		
		$d = $c * $a / ($a - 2 * $b);
	?>
	
	<p>d = <?php echo $d; ?></p>
</body>

</html>
