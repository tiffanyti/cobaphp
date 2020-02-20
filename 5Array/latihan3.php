<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<h1>latihan Array di php</h1>
		<p>skr coba bikin array dari yang udah dipelajarin sbelum ini, buat data kek yang pas di js, kek JSon gitu, tapi versi php</p>

		<p><ol>bkin daftar mahasiswa, tiap mahasiswa ada :
				<li>nama</li>
				<li>jurusan</li>
				<li>nomor mahasiswa</li>
				<li>email</li>
			</ol>
		</p>

	<?php $mahasiswa = [
		["tiptip", "desain", 133033, "tiptip@mail.com"],
		["tipir", "serialisatioin", 123321, "tipir@gmail.com"]
	]; ?>

	 <!-- yang for untuk 1 mahasiswa aja -->
	<!-- <ul>
	<?php for ($i=0; $i < count($mahasiswa) ; $i++) { ?>
		<Li> <?php echo $mahasiswa[$i]; ?> </Li>
	<?php } ?>
	</ul> -->
	 	

	 <!-- yang foreach -->
	 	<?php foreach($mahasiswa as $mhs) { ?>
	 <ul>
	 	<li>nama : <?= $mhs[0] ?></li>
	 	<li> jurusan: <?= $mhs[1] ?></li>
	 	<li>NRP : <?= $mhs[2] ?></li>
	 	<li>email : <?= $mhs[3] ?></li>
	 </ul>
	 <?php } ?>

</body>
</html>