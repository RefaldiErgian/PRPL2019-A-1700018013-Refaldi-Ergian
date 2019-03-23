<?php 
include "koneksi.php";
$QueryString = "Select nama_pel, nama_fasilitas from pelanggan,fasilitas,pemakaian where pelanggan.no_ktp = pemakaian.no_ktp and pemakaian.id_fasilitas = fasilitas.id_fasilitas";
	$SQL = mysqli_query($konek,$QueryString); 
?>

<table border="1">
		<tr>
			
			<th>Nama_Pel</th>
			<th>Nama Fasilitas</th>
			
			
		</tr>
		<?php
			foreach ($SQL as $data) {
				echo "
					<tr>
						
						<td>$data[nama_pel]</td>
						<td>$data[nama_fasilitas]</td>
						
					</tr>
				";
			}
		?>
		
			<td><form>
			<button formaction="index.php">Kembali</button>
			</form></td>
	</table>