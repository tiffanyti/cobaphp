<?php 
	$db = mysqli_connect("localhost","root","","phpdasar");

function query($query) {
	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
} 


function tambah($data) {
	global $db;
	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	
	$gambar = upload();
		if (!$gambar) {
			return false;
		}


	$query = "INSERT INTO mahasiswa
 				VALUES (NULL,'$nama','$nrp','$email','$jurusan','$gambar')";

 	mysqli_query($db, $query);

 	return mysqli_affected_rows($db);

}


function upload() {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script>
			alert( 'gambar belum diaplot') 
			</script>
			";

		return false;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode(".", $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('ext gambar hanya jpg,jpeg, ato png');
			  </script>";
	}


	if ($ukuranFile > 1000000) {
		echo "<script>
				alert('ukuran data kebesaran');
			  </script>";
		return false;
	}


	$tempatMasuk = "image/";
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, $tempatMasuk.$namaFileBaru);

	return $namaFileBaru;
}

function hapus($id) {
	global $db;
	mysqli_query($db, "DELETE FROM mahasiswa WHERE id= $id");

	return mysqli_affected_rows($db);
}

function ubah($data) {
	global $db;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nrp = htmlspecialchars($data["nrp"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);


	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
	$gambar = upload();
	}

	$query = "UPDATE mahasiswa SET
 				nama = '$nama',
 				nrp = '$nrp',
 				email = '$email',
 				jurusan = '$jurusan',
 				gambar = '$gambar'
 				WHERE id = '$id'";

 	mysqli_query($db, $query);

 	return mysqli_affected_rows($db);

}


function cari($keyword) {
	$query = "SELECT * FROM mahasiswa
			WHERE
				nama LIKE '%$keyword%' OR
				nrp LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%' OR
				email LIKE '%$keyword%'";

	return query($query);
}

function registrasi($data) {
	global $db;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($db, $data["password"]);
	$password2 = mysqli_real_escape_string($db, $data["password2"]);
	

	$result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah ada')
				</script>";

		return false;
	}


	if ($password !== $password2) {
		echo "<script>
				alert ('konfirmasi password beda');
				</script>";

		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query ($db, "INSERT INTO user 
					VALUES(NULL, '$username', '$password')");

	return mysqli_affected_rows($db);
}

?>