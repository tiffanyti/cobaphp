<?php 
require 'function.php'; 

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");


	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);

		if(password_verify($password, $row["password"])) {
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>halaman Login</h1>

	<?php if(isset($error)) : ?>
		<p style="color: red;"> salah masukin pass/username</p>
	<?php endif; ?>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">login</button>
			</li>
		</ul>
	</form>
</body>
</html>