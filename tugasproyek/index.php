<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>||===Data List (Table List)===||</h2>
		<br>
		<h4>Tabel Pelanggan : </h4>
		<form method="get" action="input1.php">
		<td>Ingin Input Data ? </td>
		<td> : </td>
		<button type="submit">Klik Disini</button>
		</form>
		<form method="get" action="read1.php">
		<td>Ingin Searching ? </td>
		<td> : </td>
		<button type="submit">Klik Disini</button>
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
            <td><a href='editpel.php?no_ktp=$row[no_ktp]'>Edit</a>
                <a href='delpel.php?no_ktp=$row[no_ktp]'>Delete</a>
            </td>
              </tr>"; 
            }
            ?>
			
        </table>
		
		
		//////////////////////////////////
		<br>
		</form>
        <table border="1">
            <tr><th>No_KTP</th><th>Id_Kamar</th><th>No_Kamar</th><th>Luas_Kamar</th><th>Harga_Kamar</th><th>Status</th></tr>
            <?php
            include 'koneksi.php';
			
            $kamar = mysqli_query($konek, "SELECT * from kamar");
            foreach ($kamar as $row) {
                echo "<tr>
            <td>" . $row['no_ktp'] . "</td>
            <td>" . $row['id_kamar'] . "</td>
            <td>" . $row['no_kamar'] . "</td>
			<td>" . $row['luas_kamar'] . "</td>
			<td>" . $row['harga_kamar'] . "</td>
			<td>" . $row['status'] . "</td>
              </tr>"; 
            }
            ?>
			
        </table>
		
		//////////////////////////////////
		<br>
		</form>
        <table border="1">
            <tr><th>ID_Fasilitas</th><th>Nama_Fasilitas</th><th>Ket_Fasilitas</th><th>Harga_Fasilitas</th></tr>
            <?php
            include 'koneksi.php';
			
            $fasilitas = mysqli_query($konek, "SELECT * from fasilitas");
            foreach ($fasilitas as $row) {
                echo "<tr>
            <td>" . $row['id_fasilitas'] . "</td>
            <td>" . $row['nama_fasilitas'] . "</td>
            <td>" . $row['ket_fasilitas'] . "</td>
			<td>" . $row['harga_fasilitas'] . "</td>
              </tr>"; 
            }
            ?>
        </table>
		
		<br>
		<p>Beberapa Kasus dan solusi yang didapatkan : </p>
		<form method="get" action="listkasus.php">
		<button type="submit">List Kasus</button>
		</form>
    </body>
</html>