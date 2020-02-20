<?php 

require 'function.php';


$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {

 	if (ubah($_POST) > 0 ) {
 		echo "
 			<script>
 			alert('data berhasil diubah');
 			document.location.href = 'index.php';
 			</script>";
 	} else {
 		echo "data gagal diubah";
 	}

 }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Ubah Data Mahasiswa</title>
</head>
<body>
	<h1>masukin data yang mau diubah disini : </h1>

		<form action="" method="post">
			<input type="hidden" name="id" value="<?=$mhs["id"]; ?>">
			<ul>
				<li>
					<label for="nama">Nama : </label>
					<input type="text" name="nama" id="nama" required value="<?=$mhs["nama"]; ?>">
				</li>
				<li>
					<label for="nrp">NRP : </label>
					<input type="text" name="nrp" id="nrp" required value="<?=$mhs["nrp"]; ?>">
				</li>
				<li>
					<label for="email">Email : </label>
					<input type="text" name="email" id="email" value="<?=$mhs["email"]; ?>">
				</li>
				<li>
					<label for="jurusan">Jurusan : </label>
					<input type="text" name="jurusan" id="jurusan" required value="<?=$mhs["jurusan"]; ?>">
				</li>
				
				<li>
					<label for="gambar">Foto : </label>
					<input type="text" name="gambar" id="gambar">
				</li>
				<li>
					<button type="submit" name="submit">ubah</button>
				</li>
			</ul>
		</form>


</body>
</html>