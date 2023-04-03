<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv2-m1</title>

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
	<form action="./m1.php" method="POST">
		<div class="field">
			<label for="tekst">Tekst:</label>
			<input type="text" name="tekst">
		</div>

		<div class="field">
			<label for="broj">Ponovi:</label>
			<input type="number" name="broj">
		</div>

		<input type="submit" value="Pošalji">
	</form>

	<?php
		if (isset($_POST["tekst"])) {
			$izlaz = str_repeat($_POST["tekst"], $_POST["broj"]);

			echo "<p>$izlaz</p>";
		}
	?>
</body>

</html>
