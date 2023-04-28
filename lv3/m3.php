<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv3-m3</title>

	<style>
		form {
			display: flex;
			flex-direction: column;
			gap: 0.25rem;
			
			max-width: 40ch;
		}

		label,
		input[type="submit"] {
			margin-top: 0.75rem;
		}
		
		input[type="text"],
		input[type="submit"] {
			padding: 0.25rem 0.5rem;
		}
	</style>
</head>

<body>
	<form action="./m3.php" method="POST">
		<label for="naziv">Naziv hotela</label>
		<input type="text" name="naziv">
		
		<label for="grad">Grad</label>
		<input type="text" name="grad">
		
		<label for="zupanija">Županija</label>
		<input type="text" name="zupanija">

		<input name="submit" type="submit" value="Pošalji">
	</form>

	<?php
		if (isset($_POST["submit"])) {
			$conn = new mysqli("localhost", "root", "root", "pwa");
			
			if ($conn->connect_errno !== 0) {
				die("Couldn't connect to database: " . $conn->connect_error);
			}
			
			$statement = $conn->prepare("INSERT INTO Hotel (naziv, grad, zupanija) VALUES (?, ?, ?);");
			
			$statement->bind_param(
				"sss",
				$_POST["naziv"],
				$_POST["grad"],
				$_POST["zupanija"],
			);
			
			$statement->execute();
			
			if ($statement->errno) {
				die("Insert error: " . $statement->error);
			}
			
			echo "<p>Uspješno dodano " . $statement->affected_rows . " retka u tablicu</p>";
			
			$statement->close();
			$conn->close();
		}
	?>
</body>

</html>
