<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>lv2-e3</title>

	<style>
		:root {
			font-family: "Open Sans", sans-serif;
		}
	</style>
</head>

<body>
	<?php
		$day = (int)date("N");
		
		if ($day < 6) {
			echo "Nastava još uvijek traje.";
		} else {
			echo "Danas nema nastave!!!";
		}
	?>
</body>

</html>
