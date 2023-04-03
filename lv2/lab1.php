<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv2-lab1</title>
	
	<style>
		:root {
			<?php
				if (isset($_GET["promjeni"])) {
					echo "background-color: $_GET[boja]";
				}
			?>
		}
	</style>
</head>

<body>
	<form action="./lab1.php" method="GET">
		Željena boja stranice:
		<br />
		<input type="color" name="boja" />
		<br>
		<label>
			<input type="checkbox" name="promjeni">
			Želim napraviti promjenu
		</label>
		<br>
		<input type="submit" value="Promjeni" />
	</form>
</body>

</html>
