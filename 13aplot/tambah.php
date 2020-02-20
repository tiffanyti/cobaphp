<?php 

require 'function.php';

// $db = mysqli_connect("localhost","root","","phpdasar");

if (isset($_POST["submit"])) {
	// $nama = $_POST["nama"];
	// $nrp = $_POST["nrp"];
	// $email = $_POST["email"];
	// $jurusan = $_POST["jurusan"];
	// $gambar = $_POST["gambar"];

	// $query = "INSERT INTO mahasiswa
 // 				VALUES (NULL,'$nama','$nrp','$email','$jurusan','$gambar')";

 // 	mysqli_query($db, $query);

 	// if(mysqli_affected_rows($db) > 0 ) {
 	// 	echo "berhasil masuk";
 	// } else {
 	// 	echo "gagal masuk nih";
 	// 	echo "<br>";
 	// 	echo mysqli_error($db);
 	// }


 	if (tambah($_POST) > 0 ) {
 		echo "
 			<script>
 			alert('data berhasil ditambahkan');
 			document.location.href = 'index.php';
 			</script>";
 	} else {
 		echo "data gagal masuk";
 	}

 }


// if (isset($_POST["submit"])) {
// 	if ($nama && $nrp && $jurusan && $email && $gambar ) {	
//  	$udah = true;
//  	} else {
//  	$udah = false;
//  	}
//  } 

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Tambah Data Mahasiswa</title>
</head>
<body>
	<h1>masukin data baru disini : </h1>

<!-- 	<?php if(isset($udah)) : ?>
		<p style="color : blue">udah masuk ya</p>
	<?php endif; ?> -->

		<form action="" method="post" enctype="multipart/form-data">
			<ul>
				<li>
					<label for="nama">Nama : </label>
					<input type="text" name="nama" id="nama" required>
				</li>
				<li>
					<label for="nrp">NRP : </label>
					<input type="text" name="nrp" id="nrp" required>
				</li>
				<li>
					<label for="email">Email : </label>
					<input type="text" name="email" id="email">
				</li>
				<li>
					<label for="jurusan">Jurusan : </label>
					<input type="text" name="jurusan" id="jurusan" required>
				</li>
				
				<li>
					<label for="gambar">Foto : </label>
					<input type="file" name="gambar" id="gambar">
				</li>
				<li>
					<button type="submit" name="submit" style="margin-top: 20px">kirim</button>
				</li>
			</ul>
		</form>

	<!-- <?php if(!isset($udah)) : ?>
		<p>ayu2 ditulis, belum masukin semua</p>
	<?php endif; ?> -->
</body>
</html>