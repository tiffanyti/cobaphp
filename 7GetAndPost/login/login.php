<?php if (isset($_POST["submit"])) {
	if ($_POST["username"] == "admin" && $_POST["password"] == "543911") {
		header("Location:admin.php");
		exit;
	} else {
		$error = true;
	}
} ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Log In</title>
</head>
<body>

	<h2>Login</h2>

	<?php if (isset($error)) { ?>
		<p style="color : red; font-style: italic;">
			Username / Password salah
		</p>
	<?php } ?>


		<form action="" method="post">
			<li>
				<label for="username"> Username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password"> Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="submit">Login</button>
			</li>
		</form>

	<p>kita coba bikin log in sederhana banget buat ngetes $_POST ya, : <br>
		kalo benar, masuk ke halaman admin <br>
		kalo salah, keluar notif warna merah</p>

	<ul> caranya :
		<li>tombol submit udah tekan/belum, pastiin di logic atas</li>
		<li>cek username (admin) & password (543911) <br>
			kalau benar, redirect ke halaman admin <br>
			kalau salah, tampilkan notif salah <br><br>
			rumusnya : <br>
			&lt;?php if (isset($_POST["submit"])) {		<br>
				if ($_POST["username"] == "admin" && $_POST["password"] == "543911") {		 <br>
				header("Location:admin.php");			<br>
				exit;									<br>
				} else {								<br>
				$error = true;							<br>
					} 									<br>
				} ?&gt; 								<br>
		</li>
		<li>jangan lupa di body juga tulis kalo keluar, pesan apa yang harus ditunjukan <br><br>
			&lt;?php if (isset($error)) { ?&gt;					<br>
			&lt;p style="color : red; font-style: italic;"&gt;	<br>
			Username / Password salah							<br>
			&lt;/p&gt;											<br>
			&lt;?php } ?&gt;									<br>
			</li>
	</ul>

</body>
</html>
