<?php 
	if (!isset($_GET["nama"]) ||
		!isset($_GET["nomor"]) ||
		!isset($_GET["foto"])  ||
		!isset($_GET["email"]) ||
		!isset($_GET["jurusan"])) { 
	header("Location : lat1.php");
	exit;
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>$_GET</title>
	<style type="text/css">
		img {
			width: 100px;
		}
	</style>
</head>
<body>
	<ul>
		<li><img src="image/<?= $_GET["foto"]; ?>"></li>
		<li><?php echo $_GET["nama"] ?></li>
		<Li><?php echo $_GET["jurusan"] ?></Li>
		<li><?php echo $_GET["nomor"] ?></li>
		<li><?php echo $_GET["email"] ?></li>
	</ul>

	<p><a href="lat1.php">balik</a></p>
</body>
</html>