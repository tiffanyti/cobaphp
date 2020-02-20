<?php 
	require 'function.php';

	$mahasiswa = query("SELECT * FROM mahasiswa");

	// $mhs = mysqli_fetch_row($result);
	// var_dump($mhs);

	// $mhs = mysqli_fetch_assoc($result);
	// var_dump($mhs);

	// $mhs = mysqli_fetch_array($result);
	// var_dump($mhs);

	// while($mhs = mysqli_fetch_assoc($result)) {
	// 	var_dump($mhs);
	//}
 ?>






<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<p>page ini adalah untuk admin.</p>
	<p>pertama kita bikin tabel sendiri dulu, secara manual ya : </p>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>NRP</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Gambar</th>
		</tr>

		<tr>
			<td>1</td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td>Tiptip</td>
			<td>123456789</td>
			<td>tiptip@gmail.com</td>
			<td>desain</td>
			<td><img src="image/cat1.jpg" width="50"></td>
		</tr>
	</table>

		<p>yang baru kita bikin ini belum terhubung dengan database, kita ketik lg sendiri </p>

	<table border="1" cellpadding="10" cellspacing="0">
	<?php $i = 1; ?>
	<?php foreach ($mahasiswa as $row) { ?>
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>NRP</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Gambar</th>
		</tr>

		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["nrp"]; ?></td>
			<td><?= $row["email"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
			<td><img src="image/<?= $row["gambar"] ?>" width="50"></td>
		</tr>
	<?php $i++; ?>
	<?php }; ?>
	</table>


		
</body>
</html>