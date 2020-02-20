<?php 
require 'function.php';

	if (isset($_POST["register"])) {
		if (registrasi($_POST) > 0) {
			echo "<script>
					alert('user berhasil ditambahkan')
					</script>";
		}else {
			echo mysqli_error($db);
		}
	}
 ?>


 <!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<style type="text/css">
		label {
			display: block;
		}
	</style>
</head>
<body>

	<h1>Registrasi</h1>

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
			<label for="password2">Konfirmasi password :</label>
			<input type="password" name="password2" id="password2">
		</li>
		<li>
			<button type="submit" name="register">login</button>
		</li>
	</ul>
	</form>

</body>
</html>