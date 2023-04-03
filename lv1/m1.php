<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
		table {
			border-collapse: collapse;
		}
		
		th, td {
			border: 1px solid black;
			padding: 0.25rem;
		}
	</style>
	
	<title>lv1-m1</title>
</head>

<body>
	<?php
		$col1Title = "Name";
		$col2Title = "Telephone1";
		$col3Title = "Telephone2";
	
		$name = "Bill Gates";
		$tel1 = "55577855";
	?>
	
	<table>
		<tr>
			<?php echo "<th>$col1Title</th>" ?>
			<?php echo "<th>$col2Title</th>" ?>
			<?php echo "<th>$col3Title</th>" ?>
		</tr>
		<tr>
			<?php echo "<td>$name</td>" ?>
			<?php echo "<td colspan='2'>$tel1</td>" ?>
		</tr>
	</table>
</body>

</html>
