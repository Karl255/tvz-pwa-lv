<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv3-lab3</title>

	<style>
		table {
			border-collapse: collapse;
		}
		
		th,
		td {
			border: 1px solid #666;
			padding: 0.25rem 0.5rem;
		}
		
		.blue {
			background-color: #4b86f3;
		}
		
		.red {
			background-color: #f73636;
		}
	</style>
</head>

<body>
	<table>
		<tr>
			<th>id</th>
			<th>ime</th>
			<th>prezime</th>
			<th>spol</th>
			<th>telefon</th>
			<th>email</th>
			<th>godine</th>
			<th>hobi</th>
		</tr>
		
		<?php
			$conn = new mysqli("localhost", "root", "root", "vjezba_3");
			
			if ($conn->connect_errno > 0) {
				die("Couldn't connect to database: " . $conn->connect_error);
			}
			
			$res = $conn->query("SELECT * FROM korisnik;");
			
			if ($res) {
				foreach ($res as $row) {
					echo "<tr class='" . ($row["spol"] === "M" ? "blue" : "red") . "'>";
					echo "<td>$row[id]</td>";
					echo "<td>$row[ime]</td>";
					echo "<td>$row[prezime]</td>";
					echo "<td>$row[spol]</td>";
					echo "<td>$row[telefon]</td>";
					echo "<td>$row[email]</td>";
					echo "<td>$row[godine]</td>";
					echo "<td>$row[hobi]</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='8'>Došlo je do greške</td></tr>";
			}
			
			$res->close();
			$conn->close();
		?>
	</table>
</body>

</html>
