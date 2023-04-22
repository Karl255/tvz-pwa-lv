<?php
	$conn = mysqli_connect("localhost", "root", "root", "pwa");
	
	if (!$conn) {
		die("Couldn't connect to database: " . mysqli_connect_error());
	}
	
	$res = mysqli_query($conn, "SELECT * FROM test;");
	
	if (!$res) {
		die("Query error: " . mysqli_error($conn));
	}
	
	while ($row = mysqli_fetch_array($res)) {
		echo $row["id"] . ": " . $row["value"] . "<br>";
	}
	
	mysqli_close($conn);
?>
