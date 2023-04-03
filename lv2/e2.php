<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>lv2-e2</title>

	<style>
		:root {
			font-family: "Open Sans", sans-serif;
		}

		form {
			display: flex;
			flex-direction: column;
			align-items: start;
			gap: 1rem;
		}
	</style>
</head>

<body>
	<form action="./e2.php" method="POST">
		<textarea name="text" cols="40" rows="10"><?php echo $_POST["text"] ?? ""; ?></textarea>
		<input type="submit" value="Pošalji">
	</form>

	<div>
		<?php
			if (isset($_POST["text"])) {
				$text = $_POST["text"];
				$len = strlen($text);
				
				if ($len < 10) {
					echo "broj znakova: " . $len;
				} elseif ($len < 30) {
					echo strtolower($text);
				} else {
					echo $text;
				}
			}
		?>
	</div>
</body>

</html>
