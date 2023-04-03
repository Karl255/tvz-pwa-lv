<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>lv1-h1</title>
</head>

<body>
	<?php
		$rec = "XAMPP je besplatni višeplatformski web server paket koji služi za razvoj i testiranje dinamičkih web stranica.";
		$bezAeiou = str_ireplace(["a", "e", "i", "o", "u"], "", $rec);
	?>
	
	<p><?php echo $bezAeiou; ?></p>
</body>

</html>
