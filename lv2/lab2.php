<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>lv2-lab2</title>
</head>

<body>
	<?php
		$mjesec = date("F");
		$n_mjesec = (int)date("m");
	
		if ($n_mjesec % 2 === 0) {
			echo "$mjesec je parni";
		} else {
			echo "$mjesec je neparni";
		}
	?>
</body>

</html>
