<?php 

session_start();
if (!isset($_SESSION["login"])) {
		header("Location: login.php");
		exit;
	}


$_SESSION = [];

session_unset();

session_destroy();


setcookie('id', '', time()-3600);
setcookie('key', '', time()-3600);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Log out</title>
</head>
<body>
	<h1>Log out</h1>

	<p>kamu telah ter log out </p>
	<p> kalo mau balik, klik <a href="login.php">sini ya</a></p>

</body>
</html>