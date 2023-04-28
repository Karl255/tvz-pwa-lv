<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv3-h3</title>
	
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: start;
			gap: 1rem;
		}
	</style>
</head>

<body>
	<?php
		$conn = new mysqli("localhost", "root", "root", "vjezba_3");
		$itemsQuery = "SELECT id, ime, prezime FROM korisnik;";
		$deleteQuery = "DELETE FROM korisnik WHERE id = ?;";
		
		if ($conn->connect_errno > 0) {
			die("Couldn't connect to database: " . $conn->connect_error);
		}
	?>
		
	<?php
		if (isset($_POST["delete_id"])) {
			$statement = $conn->prepare($deleteQuery);
			$statement->bind_param("i", $_POST["delete_id"]);
			$statement->execute();
			
			if ($statement->errno === 0) {
				echo "<p>Izbrisan element s id = $_POST[delete_id]</p>";
			}
		}
	?>
	
	<form action="./h3.php" method="POST">
		<?php
			$items = $conn->query($itemsQuery);
			
			if ($items) {
				?>
					<label for="delete_id">Odaberite podatak koji želite obrisati:</label>
					<select name="delete_id" id="delete_id">
						<?php
							foreach ($items as $item) {
								echo "<option value='$item[id]'> $item[id] - $item[ime] $item[prezime] </option>";
							}
						?>
					</select>
				<?php
			} else {
				echo "<p>Došlo je do greške tijekom izvođenja upita</p>";
			}
			
			$items->close();
			$conn->close();
		?>
		
		<input type="submit" value="Izbriši">
	</form>
</body>

</html>
