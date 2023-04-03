<!DOCTYPE html>
<html>

<?php
	$link = 'http://php.net/';
	$var= 'PHP Tutorial';
	$description= 'Free Web tutorials';
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="description" content="<?php echo $description; ?>">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<title>lv1-m2</title>
</head>

<body>
	<h3><?php echo $var; ?></h3>

	<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>

	<p>Go to the <a href="<?php echo $link; ?>">PHP Tutorial</a>.</p>
</body>

</html>
