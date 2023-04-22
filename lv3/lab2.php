<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv3-lab2</title>

	<style>
		form {
			display: flex;
			flex-direction: column;
			gap: 0.25rem;
			
			max-width: 40ch;
		}

		label,
		input[type="submit"] {
			margin-top: 0.5rem;
		}
	</style>
</head>

<body>
	<form action="./lab2.php" method="POST">
		<label for="opis">Opis</label>
		<textarea name="opis" required></textarea>

		<label for="odjel">Odjel</label>
		<input name="odjel" type="text" required>

		<label for="ects">ECTS</label>
		<input name="ects" type="number" required>

		<label for="semestar">Semestar</label>
		<input name="semestar" type="number" required>

		<input name="submit" type="submit" value="Pošalji">
	</form>

	<?php
		if (isset($_POST["submit"])) {
			$conn = new mysqli("localhost", "root", "root", "pwa");

			if ($conn->connect_errno > 0) {
				die("Couldn't connect to database: " . $conn->connect_error);
			}

			$statement = $conn->prepare("INSERT INTO Predmet (opis, odjel, ECTS, semestar) VALUES (?, ?, ?, ?);");

			$statement->bind_param(
				"ssii",
				$_POST["opis"],
				$_POST["odjel"],
				$_POST["ects"],
				$_POST["semestar"]
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
