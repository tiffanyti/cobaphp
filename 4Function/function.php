<!DOCTYPE html>
<html>
<head>
	<title>user-defined function</title>
</head>
<body>
	<h2>user-defined function</h2>
	<p>fungsi kita sendiri</p>

	<ol>langkah2nya :
		<li>definisikan dulu fungsi</li>
		<li>rumusnya <br>
			&lt;?php function 
			<span style="color: red">nama fungsi</span>() { <br>
			return	"<span style="color:red">action</span>"; <br>
		} ?&gt;</li>
	</ol>

	<p>dicoba ya, misalnya mau bikin function yang bisa munculin "selamat pagi/siang/malam , dengan nama orangnya :</p>

	<ol>langkah2nya :
		<li>bikin dulu dasar functionnya <br>
			&lt;?php function salam() { <br>
			return	"selamat admin"; <br>
		} ?&gt;</li>
		<li>masukin parameternya salam($nama) <br>
			dan bagian admin pun diganti $nama</li>
		<li>masukin $waktu di salam($waktu, $nama) &gt;&gt; 	urutan ga masalah, <br>
			yang penting pas dibawah, jadi "selamat $waktu, $nama" &gt;&gt; ini yang penting urutannya </li>
		<li>jangan lupa terakhir pake echo depan 				functionnya pas panggil jadi <br>
			misalnya tiptip = <br>
			 &lt;?php echo salam("pagi","tiptip"); ?&gt; <br> 
			 atau <br>
			 &lt;?= salam("pagi","tiptip"); ?&gt; </li>
	</ol>

	<ol>hasil : 
		<li>
			<?php 
			function salam($waktu , $nama) {
				return "selamat $waktu, $nama";
			} ?>

			<?php echo salam("pagi","tiptip"); ?>
		</li>
	</ol>

	<p>php bisa kasih default, yang penting di bagian parameter nanti ada ditulis aja misalnya $waktu = "pagi" , jadi kalo ga ada isi, bisa keganti kata pagi, kalo ga keisi, pasti error soalnya</p>



<p>balik ke awal pencet di <a href="index.php" style="color : blue"> sini </a></p>
</body>
</html>