<?php 
session_start();
require 'function.php'; 

	if (isset($_cookie["id"])) {
		$id = $_cookie['id'];
		$key = $_cookie['key'];

		$result = mysqli_query($db, "SELECT username FROM user WHERE id = '$id'");
		$row = mysqli_fetch_assoc($result);


		if ($key === hash('sha256', $row['username'])) {
			$session['login'] = true;
		}

	}

	if (isset($_SESSION["login"])) {
		header("Location: index.php");
		exit;
	}



if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");


	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);

		if(password_verify($password, $row["password"])) {

			$_SESSION["login"] = true;

				if (isset($_POST['remember'])) {
					setcookie('id',$row['id'],time()+60);
					setcookie('key',hash('sha256', $row['username']),time()+60);
				}
			
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
				<input type="checkbox" name="remember" id="remember">
				<label for="remember" style="font-size: 12px;">remember me? :</label>
			</li>
			<li>
				<button type="submit" name="login">login</button>
			</li>

		</ul>
	</form>


	<p>belum ada akun? daftar di <a href="registrasi.php">sini</a></p>
</body>
</html>