<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<td>nama<input type="text" name="nama"><br></td>
		<td>nim<input type="text" name="nip"><br></td>
		<td>kirim<input type="submit" name="kirim"></td>
	</form>
</body>
</html>
<?php
include 'koneksi.php';
if (isset($POST['kirim'])) {
		if (str_word_count($_POST['nama'])<=20) {
			$nama = $_POST['nama'];
		}else{echo "Nama terlalu panjang <br>";}

		if (!is_numeric($_POST['nip'])&&str_word_count($_POST['nip']>10)) {
			echo "NIP harus angka dan max 10 karakter <br>";
		}else{$nip = $_POST['nim'];}

	$query = mysqli_query($conn,"INSERT INTO karyawan(nama, nip) VALUES ('$nama','$nip')");
if (isset($query)) {
			header("Location : penghuni.php");
		}
}