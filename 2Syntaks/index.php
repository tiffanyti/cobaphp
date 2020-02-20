<?php $nama = "tiptip"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> coba 2 php</title>
</head>
<body>

	<h2>mencoba sintaks sederhana</h2>
		<p> <ul>sintaks php
		misalnya : 
			<li>echo (buat cuma print)</li>
			<li>print (buat cetak isi var dsb)</li>

			<li>print_r (untuk cetak isi array)</li>
			<li>var_dump (lihat isi variabel)<br/>

			(print_r & var_dump biasa dipakai saat debugging, saat cari kesalahan, bukan pas bkin websitenya)</li>
			</ul>

		<?php echo "tiptip"; ?> <br/>
		<?php print "coba ke dua"; ?> <br/>
		<?php print_r("coba sintaks paling dasar php"); ?> <br/>
		<?php var_dump("menghitung stringnya dengan var_dump");?> <br/>
		 	
		 <?php /*ada command yang kek gini juga di php, buat nutup , yang biasa juga bisa kok */ ?>

		 </p>

	<h2>penulisan php</h2>
		<p> <ul>ada 2 cara :
			<li>php dalam html</li>
			<li>html dalam php</li>

			kelebihannya, php bisa berganti2 dengan variabel yg mau dipakai biarpun mungkin ga keliatan kalau dari client side
		</ul>

		<?php echo "<p> misalnya kek begini, ini yang html dalam php</p>" ?>
		<p>atau begini, ada <?php echo "php" ?> dalam html</p>
			
		</p>


		<h2>variabel dan tipe data</h2>
		<p>variabel, biasa kok, isi nama dan nilai, tapi ada icon dollar dipaling depan <br/>
		nanti kalo mau dipakai di php, tinggal tulis misalnya : <br/>
		$nama : "sandi"; <br/>
		di php : echo $nama; </p>

		<p>contoh pengaplikasian adalah ini >> <?php echo "$nama" ?> </p>

		<p style="text-decoration: underline;"> variabel nama awalnya gaboleh pake angka, ex = 1nama, <br/>
		kalau nama1 tapi boleh</p>

		<p style="text-decoration: underline;">kutip 1 dan kutip 2 di php ada bedanya. <br/>
		 kalau kutip 1 dia gabisa apa2 <br/>
		 sementara kutip 2 kek bisa interpollation, bisa berubah2 <br/>
			ex = kalau <?php echo "$nama" ?> dan <?php echo '$nama' ?></p>

	<h2>operator</h2>
		<ul>
			<li>aritmatika gitu2 bisa <br/>
				contoh = echo 1+1; <br/>
				hasilnya <?php echo 1+1; ?> <br/>
				
				atau lebih sulit lagi misalnya pake variabel <br/>
				$x = 10; $y =20; echo $x * $y; <br/>
				<?php 
				$x = 10; 
				$y =20; 
				echo $x * $y; ?></li>

			<li>penggabung string <br/>
				biasa disebut concatenation / concat <br/>
				kodenya pakai titik <br/>
				dan spasi itu pake " " <br/>
				
				contoh : $depan = "tip"; $blkang = "chi"; echo $depan . " " . $belakang; <br/>
				
				<?php 
				$depan = "tip"; 
				$blkang = "chi"; 
				echo $depan . " " . $blkang; ?>
			</li>

			<li> Penugasan <br/>
				sbnernya drtd udah pake, kek sama dengan <br/>
				ada juga += , x=, ?=. %=. .= <br/>
				ini buat kek ada perubahan di var sama, misalnya : <br/>
				$u =1; $u += 5; echo $u; <br/>

				kalau ga ada += itu akan jadi 5 karena ketimpa, sama kan? <br/>

				tapi karena ada, jadi 6, karena ditmbah <br/>

				<?php 
				$u =1; 
				$u += 5; 
				echo $u; ?>
			</li>

			<li>perbandingan <br/>
				bentuk2nya keke < > <= >= !=<br/>
				biasa dipake buat pengkondisian <br/>
				ex = var_dump(1 < 5); >> true <br/>
				var_dump(1 == "1"); >> true, karena cek angka aja, nah mau liat beda apa ngga tipe data, pake identitas <br/>

				<?php var_dump(1 < 5); ?>
				<?php var_dump(1 == "1") ?>
			</li>

			<Li> Identitas <br/>
				ini pake === , !== <br/>
				misal var_dump(1 === "1") >> false karena beda tipe, 1 string 1 bukan <br/>
				<?php var_dump(1 === "1"); ?></Li>

			<li>logika
				&& || ! <br/>
				ini juga pengkondisian , kek memberi 'dan' sama 'atau' <br/>
				ex = $r = 30; <br/>
				var_dump($r < 20 || $r % 2 == 0); >> true, karena ini 'atau' <br/>
				var_dump($r < 20 && $r % 2 == 0); >> false, karena ini 'dan' <br/>

				<?php 
				$r = 30;
				var_dump($r < 20 || $x % 2 == 0); 
				var_dump($r < 20 && $x % 2 == 0);  ?></li>

</body>
</html>