<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Associative Array</title>
	<style type="text/css">
		img {
			height: 200px;
		}
	</style>
</head>
<body>
	<h1>Associative Array</h1>
		<p>ini adalah lanjutan dari Array yang kita pelajari sbelumnya </p>
		<p>untuk detilnya Array dan latihan awal, bisa dilihat di <a href="../5Array/latihan1.php" target="_blank">disini</a> ya</p>


		<p>kita lanjut dari yang <a href="../5Array/latihan3.php" target="_blank">disini</a> ya </p>

		<ol>nah masalah dari yang kemarin :
			<li>itu array numerik berdasar angka</li>
			<li>jadi kalau memang ada kesalahan pemasukan data dia gapeduli, tampi aja</li>
			<li>karena yang dia pentingin bukan datanya tapi indexnya</li>
			<Li>mungkin kalau 1 aja masih gapapa, kalau banyak? itu yang ribet</Li>
			<li>makanya harus pakai assosiative biar lebih gampang(?)</li>
		</ol>


		<br><br>
		<p style="color : red"> Key nya associative array adalah string yang kita buat sendiri</p>

		<p>contoh : 				<br>
			$mahasiswa = [ 			<br>
			"nama" => "tiptip",		<br>
			"jurusan" => "desain"	<br>
			"NRP" => "133033"		<br>
			"email" => "tiptip@gmail.com" <br>
				]; </p>

		<p>untuk cara menulis banyak org dsb, sama aja kek biasa</p>

		<h2>Cara manggil</h2>
		<ol> cara panggilnya skr bukan dengan index , tapi :
			<li>foreach <br>
				kek yang kemaren, bkin dulu kebawah listnya</li>
			<li>singular pake string <br>
				misal mau tau jurusannya, ketik  <br>
				echo $mahasiswa["jurusan"]; </li>
			<li>multidimensi <br>
				multidimensi ttp pake array numerik, jadi <br> awalnya tetep pake nomor, ex : $mahasiswa[1]["nomor"];</li>
		</ol>


		<p>hasilnya : </p>
		<?php $mahasiswa = [
			[
				"nama" => "tiptip", 
				"jurusan" => "desain", 
				"nomor" => "133033", 
				"email" => "tiptip@mail.com",
				"foto" => "cat1.jpg"
			],

			[
				"nama" => "tipir", 
				"jurusan" => "serialisatioin",
				"nomor" => "123321", 
				"email" => "tipir@gmail.com",
				"foto" => "cat2.jpeg"
			]
		]; 
		?>

		<?php foreach ($mahasiswa as $siswa) { ?>
			<ul>
	 			<li>nama : <?= $siswa["nama"] ?></li>
	 			<li> jurusan: <?= $siswa["jurusan"] ?></li>
	 			<li>NRP : <?= $siswa["nomor"] ?></li>
	 			<li>email : <?= $siswa["email"] ?></li>
	 			<li>foto : <img src="image/<?= $siswa["foto"]?>"> </li>
	 		</ul>
		<?php } ?>

		<br><br>
		
		<?php 
		echo $mahasiswa[0]["jurusan"];
		echo "<br><br>";
		echo $mahasiswa[1]["nomor"];
		?>

		<p>kelebihan associative array, jadinya gakebalik2 asal tulisnya selalu key nya, boleh acak</p>

		<p>notes : mau udh jadi numerik trs mau diubah jadi multidimensional pun, cuma tinggal ganti angkanya aja</p>


		<h2>masukin gambar</h2>
		<p>caranya pake gabungan dari css img src dengan php</p>
		<ol>
			<li>gabungin di 1 folder image didalem folder ini</li>
			<li>di $mahasiswa, masukin "foto" => "gambar.jpg" (foto yang terkait</li>
			<li>dibagian pas munculin, pake teknik css yg img src</li>
			<li>tapi pas sourcenya ditulis, tulisnya image/php echo $siswa["foto"}</li>
			<li>$siswa adalah satuan dari mahasiswa di foreach <br>
				image adalah foldernya</li></ol>

</body>
</html>