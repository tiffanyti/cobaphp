<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>pengkondisian</title>
	<style type="text/css">
		.warna {
			background-color: silver;
		}
	</style>
</head>
<body>

	<h1>pengulangan</h1>
	<p> mau coba nerapin di tabel kek di pengulangan. <br>
		sekarang dari tabel yang tadi, kita pake lagi, dan kita terapin misalnya pake warna yang beda di tempat genap misalnya </p>

	<p> misalnya : yang genap kita biarin putih, yang ganjil abu2 <br>	<ol>
			<li>kita tambah dulu ya tabelnya jadi gedean lagi, <br>
				di for pertama tulisnya jadi 5</li>
			<li>buat dulu cssnya di style .warna { background-color: silver;} </li>
			<li>cek warnanya, di &lt;tr&gt; pertama, ditambah class : "warna"; dan semua isi tabel bakal jadi berwarna</li>
			<li>nah sekarang lakukan pengecekan <br>
				&lt; table border="1" cellpadding="10" cellspacing="0" &gt; <br> <br>
					&lt;?php for ( $i = 1; $i <=5; $i++) {  ?&gt; <br>
					&lt;?php if($i %2 == 1) { ?&gt; 			<br>
					&lt;tr class="warna"; &gt; 					<br>
					&lt;?php } else { ?&gt;						<br>
					&lt;tr &gt; 								<br>
					&lt;?php } ?&gt;							<br>
					&lt;?php for ($j = 1; $j <= 5; $j++ ) {  ?&gt;<br>
						&lt;td&gt;								<br>
					&lt;?php echo "$j"; ?&gt; 					<br>
					&lt;/td&gt;									<br>
					&lt;?php 	} 	 ?&gt; 						<br>
					&lt;/tr&gt;									<br>
					&lt;?php  	} 	?&gt; 						<br>
					&lt;/table&gt; 								<br>

			</li>
		</ol>
	</p>

	<p> hasilnya per step : <br>
		<ol>
			<li>tambah tabel <br>
				<table border="1" cellpadding="10" cellspacing="0">
					<?php for ( $i = 1; $i <=5; $i++) { ?>
					<tr>
					<?php for ($j = 1; $j <= 5; $j++ ) { ?>
					<td>
					<?php echo "$j"; ?>
					</td>
					<?php } ?>
					</tr>
					<?php } ?>
				</table>
			<br>
			</li>

			<li> cek warna <br>
				 <table border="1" cellpadding="10" cellspacing="0">
					<?php for ( $i = 1; $i <=5; $i++) { ?>
					<tr class="warna";>
					<?php for ($j = 1; $j <= 5; $j++ ) { ?>
					<td>
					<?php echo "$j"; ?>
					</td>
					<?php } ?>
					</tr>
					<?php } ?>
				</table>
			<br>
			</li>

			<li>tambahin formulanya <br>
				<table border="1" cellpadding="10" cellspacing="0">
					<?php for ( $i = 1; $i <=5; $i++) { ?>
					<?php if ($i % 2 ==1) { ?>
					<tr class="warna";>
					<?php } else { ?>
					<tr>
					<?php } ?>
					<?php for ($j = 1; $j <= 5; $j++ ) { ?>
					<td>
					<?php echo "$j"; ?>
					</td>
					<?php } ?>
					</tr>
					<?php } ?>
				</table>
			</li>
		</tr>

		<P>balik depan lagi ya pencet <a href="lat1.php" style="color:red;">sini</a></p>
	

</body>
</html>