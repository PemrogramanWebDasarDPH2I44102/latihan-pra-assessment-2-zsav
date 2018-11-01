<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<td>nama<input type="text" name="nama"><br></td>
		<td>unit<input type="text" name="unit"><br></td>
		<td>noKTP<input type="text" name="noKTP"></td>
		<td>submit<input type="submit" name="kirim"></td>
	</form>
</body>
</html>
<?php
include 'koneksi.php';
if (isset($POST['kirim'])) {
		if (str_word_count($_POST['nama'])<=20) {
			$nama = $_POST['nama'];
		}else{echo "Nama terlalu panjang <br>";}

		if (!is_numeric($_POST['noKTP'])&&str_word_count($_POST['noKTP']>10)) {
			echo "noKTP harus angka dan max 10 karakter <br>";
		}else{$noKTP = $_POST['nim'];}

	$query = mysqli_query($conn,"INSERT INTO karyawan(nama, noKTP) VALUES ('$nama','$noKTP')");
if (isset($query)) {
			header("Location:koneksi.php");
		}
}