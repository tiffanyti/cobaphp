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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>$_GET</title>
	<style type="text/css">
		img {
			width: 100px;
		}
	</style>
</head>
<body>
	<table>
		<?php foreach ($mahasiswa as $siswa) { ?>
			
			<li><img src="image/<?php echo $siswa["foto"]; ?>"></li>
			<li><a href="lat2.php?
				nama=<?php echo $siswa["nama"]; ?>&
				jurusan=<?php echo $siswa["jurusan"]; ?>&
				nomor=<?php echo $siswa["nomor"]; ?>&
				foto=<?php echo $siswa["foto"] ?>&
				email=<?php echo $siswa["email"] ?>">
				<?php echo $siswa["nama"]; ?>
				</a>
			</li>
			<br>
		<?php } ?>
	</table>

	<h1>GET and POST</h1>

	<ul>sebelum belajar, kita harus tau dulu teorinya :
		<li>variable scope (lingkup variabel) <br>
			ini kek scopenya variable, mana yang ada di local, mana yang ada di dalem </li>
		<li>superglobal variabel (variabel yang nangkep data nanti) <br> jadi ini variabel yang nanti nangkep data yang dikirim. 
			<ol>ada 7 tipe (biarpun yg kita belajar disini 2)
					<li>$_GET</li>
					<li>$_POST</li>
					<li>$_REQUEST</li>
					<li>$_SESSION</li>
					<li>$_COOKIE</li>
					<li>$_SERVER</li>
					<li>$_ENV</li>
				</ol>
		</li>
	</ul>

	<h2>$_GET</h2>
	<ul>masukin data :
		<li>dari string</li>
		<li>bkin associative array yang key dan value</li>
	</ul>

	<p>digunakan untuk banyak hal ,misalnya kek yang di FB gitu, kek contoh yang diatas, nanti dia kalo dipencet, bisa ke lat2 sesuai data yang udah dimasukin</p>


	<ul>P.S :
		<li>kalo kita mau hati2 terhadap intruder, pake ISSET supaya mereka ga sengaja masuk gitu <li>
		<li>jangan pake GET buat masukin data password karena nanti keliatan di URL</li>
		</ul>

</body>
</html>