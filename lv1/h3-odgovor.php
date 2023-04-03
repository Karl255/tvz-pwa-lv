<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>lv1-h3-odgovor</title>
</head>

<body>
	<?php
		$broj = $_GET["broj"];
		
		// svi parni brojevi *između* 0 i unesenog broja -> 2 <= i < $broj
		for ($i = 2; $i < $broj; $i++) {
			if ($i % 2 === 0) {
				echo "<p>$i</p>";
			}
		}
	?>
</body>

</html>
