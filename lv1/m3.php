<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>lv1-m3</title>
</head>

<body>
	<?php
		$str = "ime varijable mora sadržavati barem jedan znak, ne računajući znak $.";
	?>
	
	<p><?php echo strtoupper($str); ?></p>
	<p><?php echo strtolower($str); ?></p>
	<p><?php echo ucfirst($str); ?></p>
	<p><?php echo ucwords($str); ?></p>
</body>

</html>
