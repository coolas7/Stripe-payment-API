<?php

if (!empty($_GET['id'])) {
	$id = $_GET['id'];
}
else {
	header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payment accepted</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1 style="text-align: center;">Payment accepted and data saved to <a href="documents/charge_info_file.txt" download>file</a>!</h1>

</body>
</html>