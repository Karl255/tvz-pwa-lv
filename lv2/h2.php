<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv2-h2</title>

	<style>
		:root {
			font-family: "Open Sans", sans-serif;
		}

		form {
			display: flex;
			flex-direction: column;
			gap: 1rem;
			
			max-width: 30ch;
		}
		
		.field {
			display: flex;
			flex-direction: column;
			gap: 0.25rem;
		}
		
		input[type="submit"] {
			text-transform: uppercase;
		}
		
		input {
			padding: 0.25rem 0.5rem;
		}
	</style>
</head>

<body>
	<form action="./h2.php" method="POST">
		<div class="field">
			<label for="a">Duljina stranice romba:</label>
			<input type="number" name="a" id="a">
		</div>
		
		<div class="field">
			<label for="v">Visina na stranicu romba:</label>
			<input type="number" name="v" id="v">
		</div>

		<input type="submit" name="izracunaj" value="povrsina">
		<input type="submit" name="izracunaj" value="opseg">
	</form>
	
	<div>
		<?php
			function povrsina($a, $v) {
				return $a * $v;
			}
			
			function opseg($a) {
				return 4 * $a;
			}
		
			if (isset($_POST["izracunaj"]) && isset($_POST["a"]) && isset($_POST["v"])) {
				$a = $_POST["a"];
				$v = $_POST["v"];

				switch ($_POST["izracunaj"]) {
					case "povrsina":
						echo "<p>Površina: " . povrsina($a, $v) . "</p>";
						break;
						
					case "opseg":
						echo "<p>Opseg: " . opseg($a) . "</p>";
						break;
				}
			}
		?>
	</div>
</body>

</html>
