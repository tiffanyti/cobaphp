<!DOCTYPE html>
<html>
<head>
	<title>date</title>
</head>
<body>
	<h2>date</h2>
	<p> mencoba buat date, rumusnya adalah <br> 
		&lt;?php echo date("<span style="color : red">parameter</span>"); ?&gt; </p>
	<p>dipakaikan echo biar bisa muncul di layar (semua sama)</p>
	<p> date ada parameter tersendiri, 
			<ul> misalnya : 
				<li> l untuk hari </li>
				<li> d untuk tanggal</li>
				<li> M untuk nama bulan</li>
				<li> m untuk nomor bulan</li>
				<li> Y untuk tahun</li>
				<li>untuk menggabungkan semua, bisa pakai l,d-M-Y</li>
			</ul> 
		<br> <br>
		contoh penggunaan : <br>

		<?php 
			echo date("l");
		 ?> <br>

		 <?php 
			echo date("d");
		 ?> <br>

		 <?php 
			echo date("M");
		 ?> <br>

		 <?php 
			echo date("m");
		 ?> <br>

		 <?php 
			echo date("Y");
		 ?> <br>

		 <?php 
			echo date("l,d-M-Y");
		 ?> <br>
				</p> 


	<h2>Time</h2>
		<p> mencoba buat time, rumusnya adalah <br> 
			&lt;?php echo time("<span style="color : red">parameter</span>"); ?&gt; </p>
		<p>time gaharus pake parameter </p>

		<p>hasil : <?php echo time(); ?> </p>
		<p>kenapa hasilnya banyak? <br>
			soalnya ini hasilnya UNIX Timestamp / EPOCH time<br>
			detik yang udah berlalu sejak 1 Januari 1970, waktu di dunia IT gituh</p>

		<p>salah satu guna time, dia bisa hitung kedepan, misalnya 2 hari dari skr, tapi emang perlu hitungan <br>
			caranya : <br>
			misalnya kita mau bikin dia ngitung 2 hari dari skr ya, <br>
			&lt;?php echo date("l", time()+172800); ?&gt; </p>

		<p>perhitungannya dari 1 menit = 60 detik <br>
			1 menit x 60 = 1jam <br>
			1jam x 24 = 1 hari <br>
			itung detiknya 60x60x24x2 = 172800 <br><br>

			atau kalo misalnya mau suruh matematik komputer langsung hitung jg bisa, jadi masukinnya 60*60*24*2
		</p>

		<ul> hasilnya : 
			<li>yang pake angka : <br>
				<?php echo date("l", time()+172800); ?> </li>
			<li>pake rumus matematik langsung, coba ubah jadi 3 hari kebelakang (ganti plus jadi minus) <br>
				<?php echo date("l", time()-60*60*24*3); ?> </li>
		</ul>

	<h2>mktime</h2>
		<p>buat sendiri detik dan waktu sesuai yang diinginkan (make time)</p>

		<p> mencoba buat mktime, rumusnya adalah <br> 
			&lt;?php echo mktime("<span style="color : red">0,0,0,0,0,0</span>"); ?&gt; </p>

		<p>parameternya agak banyak, ada 6, terdiri dari jam, menit, detik, bulan, tanggal, taun </p>

		<p>misalnya : <br>
		mau tau tanggal ultah, <br>
		jadinya &lt;?php echo mktime(0,0,0,11, 9,1993); ?&gt; <br>
		nanti keliatan detik yg sudah berlalu dr tanggal itu, <br>
		terus tinggal ditulis &lt;?php echo date("l", mktime(0,0,0,11,9,1993); ?&gt;</p>

		<p>hasil : <?php echo mktime(0,0,0,11,9,1993); ?> <br>
			<?php echo date("l", mktime(0,0,0,11,9,1993)); ?>
		</p>


		<h2>strtotime</h2>
		<p>balikin format tangggal jadi detik</p>
		
		<p>mencoba buat strtotime, rumusnya adalah <br> 
			&lt;?php echo strtotime("<span style="color : red">parameter</span>"); ?&gt;</p>

		<p>parameternya string, misalnya 1 nov 1993</p>

		<p>contoh : <br>
			mau liat detik, dari tanggal 9 nov 1993 <br>
			&lt;?php echo strtotime("9 nov 1993"); ?&gt; <br>

			hasilnya : <br>
			<?php echo strtotime("9 nov 1993"); ?> <br><br>

			mau coba date kek yang diatas : <br>
			&lt;?php echo date("l",strtotime("9 nov 1993"); ?&gt; <br>

			hasilnya : <br>
			<?php echo date("l",strtotime("9 nov 1993")); ?>

			</p>


	<p>balik ke awal pencet di <a href="index.php" style="color : blue"> sini </a></p>
</body>
</html>