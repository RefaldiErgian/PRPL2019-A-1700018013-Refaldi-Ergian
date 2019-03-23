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
		$nama_pel = $_POST['nama_pel'];
		$no_hp = $_POST['no_hp'];
		$no_ortu = $_POST['no_ortu'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jk'];
		
		$query = "INSERT INTO pelanggan VALUES ('$no_ktp','$nama_pel','$no_hp','$no_ortu','$alamat','$jk')";
		$sql = mysqli_query($konek,$query);
		
		echo"===INPUT BERHASIL===<br>";
	}
?>
<body>

<form method="post" action="input1.php">
	<table>
		<tr>
			<td>No KTP Pelanggan</td>
			<td> : </td>
			<td><input type="text" name="no_ktp"></td>
		</tr>
		<tr>
			<td>Nama Pelanggan</td>
			<td> : </td>
			<td><input type="text" name="nama_pel"></td>
		</tr>
		<tr>
			<td>No HP</td>
			<td> : </td>
			<td><input type="text" name="no_hp"></td>
		</tr>
		<tr>
			<td>No Ortu</td>
			<td> : </td>
			<td><input type="text" name="no_ortu"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> : </td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>jk</td>
			<td> : </td>
			<td><input type="radio" name="jk" value="L">Laki-laki
				<input type="radio" name="jk" value="P">Perempuan
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