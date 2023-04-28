<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv3-h2</title>
	
	<style>
		p {
			margin: 0;
		}
	</style>
</head>

<body>
	<?php
		$conn = new mysqli("localhost", "root", "root", "vjezba_3");
		$query = "SELECT ime, prezime, spol, telefon, telefon, email, godine, hobi
			FROM korisnik
			WHERE ime LIKE 'm%a';";
		
		if ($conn->connect_errno > 0) {
			die("Couldn't connect to database: " . $conn->connect_error);
		}
		
		$res = $conn->query($query);
		
		if ($res) {
			foreach ($res as $row) {
				?>
					<h1><?php echo $row["ime"] . " " . $row["prezime"]; ?></h1>
					<p>Spol: <?php echo $row["spol"]; ?></p>
					<p>Tel: <?php echo $row["telefon"]; ?></p>
					<p>Email: <?php echo $row["email"]; ?></p>
					<p>Godine: <?php echo $row["godine"]; ?></p>
					<p>Hobi: <?php echo $row["hobi"]; ?></p>
				<?php
			}
		} else {
			echo "<p>Došlo je do greške tijekom izvođenja upita</p>";
		}
		
		$res->close();
		$conn->close();
	?>
</body>

</html>
