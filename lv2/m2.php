<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv2-m2</title>

	<style>
		:root {
			font-family: "Open Sans", sans-serif;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: start;
			gap: 1rem;
		}
		
		.field {
			display: flex;
			flex-direction: column;
			gap: 0.5rem;
		}
	</style>
</head>

<body>
	<form action="./m2.php" method="POST">
		<div class="field">
			<label for="tekst">Polumjer:</label>
			<input type="number" name="r">
		</div>

		<div class="field">
			<label for="broj">Visina:</label>
			<input type="number" name="h">
		</div>

		<input type="submit" value="Pošalji">
	</form>

	<?php
		function volumen($r, $h) {
			return 3.14 * $r * $r * $h;
		}
	
		if (isset($_POST["r"]) && isset($_POST["h"])) {
			echo "Volumen: " . volumen($_POST["r"], $_POST["h"]);
		}
	?>
</body>

</html>
