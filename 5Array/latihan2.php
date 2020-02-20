<!DOCTYPE html>
<html>
<head>
	<title>array</title>
	<style>
			.kotak {
				width: 50px;
				height: 50px;
				background-color: salmon;
				color: black;
				text-align: center;
				line-height: 50px;
				margin: 3px;
				float: left;
				transition: 1s;
			}
			.kotak:hover {
				transform: rotate(360deg);
				border-radius: 50%;
			}
			
	</style>

</head>
<body>
	<h1>latihan</h1>

		<p>sekarang kita mau coba dulu memunculkan array untuk user , dengan pengulangan for/foreach</p>

		<h2>for</h2>

			<p><ol> misalnya kita mau bkin kotak2 dengan isi array 			: 
					<li>bikin dulu isi array nya</li>
					<li>kelompokin kotaknya dengan div</li>
					<li>hias kotaknya dengan css style</li>
					<li>pake rumus for</li>
					<li>tips : pake count() untuk lebih gampang saat ada perubahan, dia bisa itung sendiri soalnya</li>
				</ol>
			</p>

			<p>rumus : <br>
				<ul>style css :
					<li>.kotak { 					<br>
						width: 50px;				<br>
						height: 50px;				<br>
						background-color: salmon;	<br>
						text-align: center;			<br>
						line-height: 50px;			<br>
						margin: 3px;				<br>
						float: left;				<br>
					</li>

					<li>rumusnya : 					<br>
						&lt;?php 					<br>
						$angka=[3,4,6,8,7,3];		<br>
						for ($i=0; $i < count($angka) ; $i++) { ?&gt; 				<br>
						&lt;div class="kotak"&gt; &lt;?php echo $angka[$i]; ?&gt;&lt;/div&gt;							 <br>
						&lt;?php } ?&gt;			<br>
					</li>
					
				</ul>
			</p>


		<p>hasilnya: <br>

			<?php 
				$angka=[3,4,6,8,7,3];
				for ($i=0; $i < count($angka) ; $i++) { ?>
				
				<div class="kotak"> <?php echo $angka[$i]; ?></div>
			
			<?php } ?>

		</p>

		<div style="clear: both"></div>

		<h2>foreach</h2>
			<p>foreach kan kek artinya untuk tiap 1 elemen ya, tiap tiap elemennya diapain gitu </p>

			<p> jadi langkah awalnya : <br>
				bikin var baru, namanya bebas, aku pake kata $a
			</p>

			<p>rumusnya : 								<br>
				&lt;?php foreach($angka as $a ) { ?&gt; <br>
				&lt;div class="kotak"&gt; &lt;?php echo $a ?&gt; &lt;/div&gt; 						<br>
				&lt;?php } ?&gt;</p>


			<p>hasilnya :
				<?php foreach($angka as $a ) { ?>
				<div class="kotak"><?php echo $a ?></div>
				<?php } ?>
			</p>

			<div style="clear: both"></div>



		<h2>foreach bersarang</h2>
			<p>gimana kalau didalam array ada array lagi? <br>
				misalnya : $angkas = [[1,5,7],[6,9,3].[0,2,8]];</p>

			<p>untuk keluarin 1 aja, bisa pake echo <br>
				kita bisa pake rumus echo $angkas[0][2] <br>
				parameter yang pertama untuk index yang mana <br>
				parameter kedua untuk index dalamnya </p>

			<p>ex : mau keluarin nomor 5 , jadinya [0][1] </p>
				<?php $angkas = [[1,5,7],[6,9,3],[0,2,8]]; ?>
				<div class="kotak"><?= $angkas[0][1] ?> </div>
				<div style="clear: both"></div>


			<p>kalau mau semua dikeluarin dan bersusun kebawah, kita bisa pake foreach : </p>
				<?php foreach ($angkas as $a) { ?>
					<?php foreach ($a as $b) { ?>
						<div class="kotak"><?php echo $b; ?></div>
					<?php } ?>
						<div style="clear: both"></div>
				<?php } ?>

	<p>balik ke halaman sbelumnya pencet <a href="latihan1.php" style="color:red">sini</a> ya</p>

	<p>coba 1 latihan yang lebih nyata di <a href="latihan3.php">sini</a></p>
</body>
</html>