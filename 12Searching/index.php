<?php 
	require 'function.php';

	$mahasiswa = query("SELECT * FROM mahasiswa");

	if (isset($_GET['cari'])) {
		$mahasiswa = cari($_GET["keyword"]);
	}

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
	<p>page ini adalah untuk admin. <span style="color : blue">yang kita buat kemarin, cuma di copy paste </span></p>
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

	<br>
	<br>

	<form action="" method="get">
		<label> cari : </label>
		<input type="text" name="keyword" placeholder="nama" autofocus autocomplete="off">

		<button type="submit" name="cari">yes</button>
	</form>

	<br>
	<br>

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
				<a href="ubah.php?id=<?= $row["id"] ?>">Ubah</a> |
				<a href="hapus.php?id=<?= $row["id"] ?>" onclick = "return confirm('yakin?');">Hapus</a>
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

	<h2>Insert and Delete</h2>
		<p>sekarang kita lanjut yaaa <br>
		 mencoba memasukan / nambahin nama dari <a href="tambah.php">sini ya, pencet</a>.</p>


	<h2>Update</h2>
		<p>lanjut ke mengubah data<br>
			mencoba mengubah data yang sudah ada dari tombol yang sudah dibuat</p>

	<h2>Searching</h2>
		<p>kali ini kita tambahin tools buat searching <br>
			biar misalnya datanya banyak, gampang dicari</p>
		
</body>
</html>