<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>lv3-m2</title>
</head>

<body>
	<?php
		$conn = new mysqli("localhost", "korisnik", "875462", "Zapisnik");

		if ($conn->connect_errno !== 0) {
			echo "Connection failed" . $conn->connect_error;
		} else {
			echo "Connected successfully";
			$conn->close();
		}
	?>
</body>

</html>
