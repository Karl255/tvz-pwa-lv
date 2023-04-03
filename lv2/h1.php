<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv2-h1</title>

	<style>
		:root {
			font-family: "Open Sans", sans-serif;

			<?php
				if (isset($_POST["velicina"]) && isset($_POST["jedinica"])) {
					echo "font-size: $_POST[velicina]$_POST[jedinica];";
				}

				if (isset($_POST["boja"])) {
					echo "color: $_POST[boja];";
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
			gap: 0.25rem;
		}
		
		input[type="radio"] {
			align-self: start;
		}
		
		p.label {
			margin: 0;
		}
	</style>
</head>

<body>
	<form action="./h1.php" method="POST">
		<div class="field">
			<label for="velicina">Veličina fonta:</label>
			<input type="text" name="velicina" id="velicina">
		</div>

		<div class="field">
			<p class="label">Izaberite jedinicu veličine fonta:</p>
			
			<label for="px">
				<input type="radio" name="jedinica" value="px" id="px">
				px
			</label>
			
			<label for="em">
				<input type="radio" name="jedinica" value="em" id="em">
				em
			</label>
			
			<label for="rem">
				<input type="radio" name="jedinica" value="rem" id="rem">
				rem
			</label>
			
			<label for="posto">
				<input type="radio" name="jedinica" value="%" id="posto">
				%
			</label>
		</div>

		<div class="field">
			<label for="boja">Izaberite boju teksta:</label>
			<input type="color" name="boja" id="boja">
		</div>

		<input type="submit" value="Primjeni">
	</form>
</body>

</html>
