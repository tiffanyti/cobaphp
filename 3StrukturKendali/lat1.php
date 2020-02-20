<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>pengulangan</title>
</head>
<body>
	<h1>control flow</h1>
	<p><ul>untuk mengatur alur program gacuma dari atas kebawah, tapi bisa :
		<li>pengulangan</li>
		<li>pengkondisian</li>
		</ul>
	</p>

	<p>ini kurleb teorinya sama kek js ya</p>

	<h3>pengulangan</h3>
	<ol>
		<li>for <br/>
			for (initialisasi ; terminasi ; increment/decrement) {situasi} <br>
			ex : for ($i = 0; $i<5; $i++) { echo "hello world<br>"; }
			<br>

			hasilnya : <br>

			<?php for ($i = 0; $i<5; $i++) { 
				echo "hello world<br>"; }
			 ?>

		<br>
		</li>

		<li>while <br>
			while (initialisasi) { terminasi; increment/decrement;} <br>
			
			ex : <br>
				$i = 0; <br>
				while ( $i < 5 ) {echo "hello world "; $i++;} <br>

			hasilnya : <br>
			<?php $p = 0;
				while ( $p < 5 ) {
					echo "hello world "; 
					$p++;}
 			?>

		<br><br>
		</li>

		<li>do . . while <br>
			do { terminasi; incre/decre} while (initialisasi) <br>

			ex : <br>
				$i =0;
				do { echo "hello world <br>"; $i++;} <br>
				while($i <5); <br>

			hasilnya : <br>
			<?php $y=0;
				do { echo "hello world <br>"; $y++;}
				while($y < 5); ?> <br>
			
			 <em>saat pake do . . while, mau false pun, bakal ttp dijalanin dulu sekali, baru  nanti diem<em>
		

		<br><br>
		</li>
		<li>for each <br>
		pengulangan khusus array (bakal dibahas di bab array)</li>
	</ol>

	<p> buat penerapan lebih jelas pengulangan, bisa dicoba di <a href="pengulangan.php" style="color:red;">sini</a></p>


	<h3>pengkondisian/percabangan</h3>
	<ol>
		<li>if else <br>
			if(initialisasi) { terminasi} <br>
			ex : <br>
				$x = 10; <br>
				if( $x <20 ) { <br>
					echo "truee"; <br>
				} <br>
			
			karena ga ada apa2 dibawahnya, sekali salah, langsung keluar	<br>

			hasilnya : <br>
				<?php 	$x = 10;
					if( $x < 20 ) {
						echo "truee";
					}
			 	?>
				<br><br>

			supaya bisa ada true and false, pake else <br>
			ex = <br>
				$x = 10; <br>
				if( $x >20 ) { <br>
					echo "truee"; <br>
				} else { <br>
					echo "salah"; <br>
				} <br>

			hasilnya : <br>
				<?php $p = 20; 
				if( $p >30 ) { 
					echo "truee";
				} else {
					echo "salah";
				} ?>

			<br><br>
		</li>
		<li>if else if else <br>
			menaruh 1 opsi lagi selain benar ato salah, kek pas gt <br>
			ex = <br>
			$x = 20; <br>
				if( $x <10 ) { <br>
					echo "truee"; <br>
				} else if($x == 20) {
					echo "pas!";
				} else { <br>
					echo "salah"; <br>
				} <br>

			hasilnya : <br>
				<?php $b = 20;
				if( $b <10 ) {
					echo "truee";
				} else if($b == 20) {
					echo "pas!";
				} else {
					echo "salah";
				} ?>
			<br><br>
		</li>

		<li>ternary (fullnya di js)</li>
		<li>switch (fullnya di js)<br>
			saat if else udah terlalu banyak, bisa pake switch <br>
		</li>
	</ol>

	<p> buat penerapan di pengkondisian, bisa dicoba di <a href="pengkondisian.php" style="color:red;">sini</a></p>



</body>
</html>