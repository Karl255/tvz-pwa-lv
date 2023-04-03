<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv2-m3</title>

	<style>
		:root {
			font-family: "Open Sans", sans-serif;

			<?php
				if (isset($_POST["primjeni"]) && isset($_POST["velicina"])) {
					echo "font-size: $_POST[velicina]px";
				}
			?>
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
			grid-template: 0.5rem;
		}
	</style>
</head>

<body>
	<form action="./m3.php" method="POST">
		<div class="field">
			<label for="velicina">Veličina teksta:</label>
			<input type="number" name="velicina">
		</div>

		<label for="primjeni">
			<input type="checkbox" name="primjeni">
			Želim primjeniti promjenu
		</label>

		<input type="submit" value="Pošalji">
	</form>

</body>

</html>
