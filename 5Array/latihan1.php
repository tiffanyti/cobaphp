<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<h2>Array</h2>
	<p>array adalah variabel yang bisa punya banyak nilai <br>
	elemen (nilai yang dimasukan ke array nya) pada array boleh macem2 misalnya campuran string, angka, dan boolean <br>
	jangan lupa kalau array adalah key and value, ada indexnya (yang dimulai dari 0), dan isinya sendiri</p>

	<h2>mencoba bikin array</h2>
	<ul>ada 2 cara :
		<li>cara lama <br>
			$hari = array("isi", "isi", isi);</li>

			<li>cara baru <br>
			$hari = ["isi", "isi", isi];</li>
		</ul>

	<h2>menampilkan array ke layar</h2>
	<ol>bisa pakai ini buat debug:
		<li>var_dump()<br>
			menampilkan index, tipe data, jumlah data dan datanya sendiri</li>
		<li>print_r()<br>
			menampilkan index dan datanya sendiri</li>
		<li>echo<br>
			echo gabisa dipake buat nunjukin/nampilin semua elemennya, tapi bisa buat 1 ato 2 , misalnya echo $bulan[2]</li>
		</ol>

	<ol>pakai ini biasa buat user :
		<li>pengulangan <br>
			khusus untuk array bisa pake for/foreach <br>
			untuk lebih lengkap bisa di cek di <a href="latihan2.php">halaman selanjutnya</a> </li></ol>

	<p>hasil keseluruhannya : <br>
		untuk debug : <br>
		<?php
		$hari=array("senin", "selasa", "rabu");
		$hari[]="kamis";
		$bulan=["januari", "februari", "maret"];

		var_dump($hari);
		echo "<br>";
		print_r($bulan); 
		echo "<br>";
		echo $bulan[2];
		?>

		<br><br>
	</p>
	
	<h2>Nambahin elemen di array </h2>
		<p><ol>bisa dengan :
				<li>$hari[] = "isi value"; <br>
					ini nanti masuknya di paling belakang</li>
			</ol>
		</p>

	<p>sekarang kita pindah halaman ya , ke <a href="latihan2.php" style="color:red">sini</a></p>
	
</body>
</html>