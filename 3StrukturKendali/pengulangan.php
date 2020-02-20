<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>pengulangan</title>
</head>
<body>
	<h2>latihan pengulangan</h2>

	
	<p>misalnya mau bikin tabel ya,  </p>
	<p> kalo caranya dengan tulis manual : <br>
		&lt; table border="1" cellpadding="10" cellspacing="0" &gt; <br>
			&lt; tr&gt; <br>
				&lt;td&gt; 1 &lt;/td&gt; <br>
				&lt;td&gt; 2 &lt;/td&gt; <br>
				&lt;td&gt; 3 &lt;/td&gt; <br>
				&lt;td&gt; 4 &lt;/td&gt; <br>
				&lt;td&gt; 5 &lt;/td&gt; <br>
			&lt;/tr&gt; <br>

			&lt; tr&gt; <br>
				&lt;td&gt; 1 &lt;/td&gt; <br>
				&lt;td&gt; 2 &lt;/td&gt; <br>
				&lt;td&gt; 3 &lt;/td&gt; <br>
					&lt;td&gt; 4 &lt;/td&gt; <br>
			&lt;td&gt; 5 &lt;/td&gt; <br>
			&lt;/tr&gt; <br>

			&lt; tr&gt; <br>
				&lt;td&gt; 1 &lt;/td&gt; <br>
				&lt;td&gt; 2 &lt;/td&gt; <br>
				&lt;td&gt; 3 &lt;/td&gt; <br>
					&lt;td&gt; 4 &lt;/td&gt; <br>
			&lt;td&gt; 5 &lt;/td&gt; <br>
			&lt;/tr&gt; <br>

		&lt;/table&gt; <br>

		hasilnya : <br>
		
		<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
		</tr>

		<tr>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
		</tr>

		<tr>
			<td>1</td>
			<td>2</td>
			<td>3</td>
			<td>4</td>
			<td>5</td>
		</tr>

		</table>
	</p>



	<P>tapi kalo pake cara pengulangan : <br>
		&lt; table border="1" cellpadding="10" cellspacing="0" &gt; <br>
		&lt;?php <br>
			for ( $i = 1; $i <=3; $i++) { <br>
			echo "&lt;tr&gt;"; <br>
			for ($j = 1; $j <= 5; $j++ ) { <br>
				echo "&lt;td&gt; $j &lt;/td&gt;"; <br>
			} <br>
			echo "&lt;/tdr&gt;"; <br>
		} <br>

		?&gt; <br>
		&lt;/table&gt; <br>

		<p> angka 1, karena untuk baris dan kolom <br>
			pake sama dengan biar pengulangannya 2x <br>
			dalam for tr, yang $j itu untuk mengulang kolom <br>
			echo dalemnya buat bkin angkanya urut </p>

		<p>hasilnya : <br>
			<table border="1" cellpadding="10" cellspacing="0">
		<?php
			for ( $i = 1; $i <=3; $i++) {
			echo "<tr>";
			for ($j = 1; $j <= 5; $j++ ) {
				echo "<td> $j </td>";
				}
			echo "</tdr>";
		} 
		?>
		</table>
		</p>
	</P>

	<p> ada juga gaya templating <br>
		sesuatu yang kita mau pake php, php. tapi gamau, yaudah keluarin aja, misalnya yang tadi ya, <br>
		&lt; table border="1" cellpadding="10" cellspacing="0" &gt; <br> <br>
		&lt;?php 	for ( $i = 1; $i <=3; $i++) {  ?&gt; 		<br>
					&lt;tr&gt; 									<br>
					&lt;?php for ($j = 1; $j <= 5; $j++ ) {  ?&gt;<br>
						&lt;td&gt;								<br>
					&lt;?php echo "$j"; ?&gt; 					<br>
					&lt;/td&gt;									<br>
					&lt;?php 	} 	 ?&gt; 						<br>
					&lt;/tr&gt;									<br>
		&lt;?php  	} 	?&gt; 									<br>
		&lt;/table&gt; 											<br>

		<p>hasilnya : <br>
			<table border="1" cellpadding="10" cellspacing="0">
				<?php for ( $i = 1; $i <=3; $i++) { ?>
				<tr>
				<?php for ($j = 1; $j <= 5; $j++ ) { ?>
				<td>
				<?php echo "$j"; ?>
				</td>
				<?php } ?>
				</tr>
				<?php } ?>
			</table>
		</p>

		<p>	mau gampangin kurawal buka ganti : <br>
			kurawal tutup jadi endfor; ,atau sesuai nama endif end..<br>
			php echo, bisa diganti &lt;?= 
		</p>

	</p>

	<P>balik depan lagi ya pencet <a href="lat1.php" style="color:red;">sini</a></p>
	
</body>
</html>