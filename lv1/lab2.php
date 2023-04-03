<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>
		table,
		th,
		td {
			border: 1px solid black;
			border-collapse: collapse;
		}

	</style>

	<title>lv1-lab2</title>
</head>

<body>
	<?php
		$name = "Jill";
		$surname = "Smith";
		$age = 50;
	?>

	<table style="width: 100%">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Age</th>
		</tr>
		<tr>
			<td colspan="2">
				<?php echo "$name $surname"; ?>
			</td>

			<td>
				<?php echo $age; ?>
			</td>
		</tr>
	</table>
</body>

</html>
