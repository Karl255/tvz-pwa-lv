<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv2-h3</title>

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
	<form action="./h3.php" method="POST">
		<div class="field">
			<label for="broj">Broj:</label>
			<input type="number" name="broj" id="broj">
		</div>
		
		<input type="submit" value="Poštalji">
	</form>
	
	<div>
		<?php
			function tablica_mnozenja_do_10($broj) {
				echo "<p>";

				for ($i = 1; $i <= 10; $i++) { 
					$n = $broj * $i;
					echo "$broj * $i = $n<br>";
				}

				echo "</p>";
			}
		
			if (isset($_POST["broj"])) {
				tablica_mnozenja_do_10($_POST["broj"]);
			}
		?>
	</div>
</body>

</html>
