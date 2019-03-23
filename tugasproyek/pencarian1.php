<?php 
include "koneksi.php";
$key = $_POST['cari'];
echo "Keyword pencarian = $key";
$QueryString = "SELECT * FROM pelanggan WHERE no_ktp LIKE '%$key%' or nama_pel LIKE '%$key%' or no_hp LIKE '%$key%' or no_ortu LIKE '%$key%' or alamat LIKE '%$key%' or jk LIKE '%$key%'";
	$SQL = mysqli_query($konek,$QueryString); 
?>

 <table border="1">
		<tr>
			<th>No_KTP</th>
			<th>Nama_Pel</th>
			<th>No_HP</th>
			<th>No_Ortu</th>
			<th>Alamat</th>
			<th>JK</th>
			
		</tr>
		<?php
			foreach ($SQL as $data) {
				echo "
					<tr>
						<td>$data[no_ktp]</td>
						<td>$data[nama_pel]</td>
						<td>$data[no_hp]</td>
						<td>$data[no_ortu]</td>
						<td>$data[alamat]</td>
						<td>$data[jk]</td>
					</tr>
				";
			}
		?>
	</table>