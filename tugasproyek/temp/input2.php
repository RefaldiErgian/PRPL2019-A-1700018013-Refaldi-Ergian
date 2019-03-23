<?php
?>

<html>
<head>
	<title>Input Data</title>
</head>
<?php
	if(isset($_POST['kirim'])){
		include 'koneksi.php';
		
		$no_ktp = $_POST['no_ktp'];
		$id_kamar = $_POST['id_kamar'];
		$no_kamar = $_POST['no_kamar'];
		$luas_kamar = $_POST['luas_kamar'];
		$harga_kamar = $_POST['harga_kamar'];
		$status = $_POST['status'];
		
		$query = "INSERT INTO pelanggan VALUES ('$no_ktp','$id_kamar','$no_kamar','$luas_kamar','$harga_kamar','$status)";
		$sql = mysqli_query($konek,$query);
		
		echo"===INPUT BERHASIL===<br>";
	}
?>
<body>

<form method="post" action="input2.php">
	<table>
		<tr>
			<td>No KTP Pelanggan</td>
			<td> : </td>
			<td><input type="text" name="no_ktp"></td>
		</tr>
		<tr>
			<td>ID_Kamar</td>
			<td> : </td>
			<td><input type="text" name="id_kamar"></td>
		</tr>
		<tr>
			<td>No_Kamar</td>
			<td> : </td>
			<td><input type="text" name="no_kamar"></td>
		</tr>
		<tr>
			<td>Luas_Kamar</td>
			<td> : </td>
			<td><input type="text" name="luas_kamar"></td>
		</tr>
		<tr>
			<td>Harga_Kamar</td>
			<td> : </td>
			<td><input type="text" name="harga_kamar"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td> : </td>
			<td><input type="radio" name="status" value="berisi">Berisi
				<input type="radio" name="status" value="kosong">Kosong
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="kirim" value="Kirim">
			<form>
			<button formaction="index.php">Kembali</button>
			</form></td>
		</tr>
	</table>
</form>

</body>
</html>