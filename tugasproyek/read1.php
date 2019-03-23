<?php
	include 'koneksi.php';
	$QueryString = "SELECT * FROM pelanggan";
	$SQL = mysqli_query($konek,$QueryString); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data</title>
</head>
<body>
	<form method="post" action="pencarian1.php">
		<input type="text" name="cari">
		<input type="submit" name="kirim" value="cari">
	</form>
	 <table border="1">
            <tr><th>No_KTP</th><th>Nama_Pel</th><th>No_HP</th><th>No_Ortu</th><th>Alamat</th><th>JK</th></tr>
            <?php
            include 'koneksi.php';
			
            $pelanggan = mysqli_query($konek, "SELECT * from pelanggan");
            foreach ($pelanggan as $row) {
                $jk = $row['jk'] == 'P' ? 'Perempuan' : 'Laki laki';
                echo "<tr>
            <td>" . $row['no_ktp'] . "</td>
            <td>" . $row['nama_pel'] . "</td>
            <td>" . $row['no_hp'] . "</td>
			<td>" . $row['no_ortu'] . "</td>
			<td>" . $row['alamat'] . "</td>
            <td>" . $jk . "</td>
              </tr>"; 
            }
            ?>
			
        </table>
</body>
</html>