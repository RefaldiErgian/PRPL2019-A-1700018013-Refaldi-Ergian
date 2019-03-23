<?php 
include "koneksi.php";
$QueryString = "select nama_pel, tgl_pemesanan, no_kamar from pelanggan,pemesanan,kamar where pelanggan.no_ktp = pemesanan.no_ktp and pemesanan.no_ktp = kamar.no_ktp and tgl_pemesanan like '2018-11%'";
	$SQL = mysqli_query($konek,$QueryString); 
?>

<table border="1">
		<tr>
			
			<th>Nama_Pel</th>
			<th>TGL_Pemesanan</th>
			<th>No_Kamar</th>
			
			
		</tr>
		<?php
			foreach ($SQL as $data) {
				echo "
					<tr>
						
						<td>$data[nama_pel]</td>
						<td>$data[tgl_pemesanan]</td>
						<td>$data[no_kamar]</td>
						
					</tr>
				";
			}
		?>
		
			<td><form>
			<button formaction="index.php">Kembali</button>
			</form></td>
	</table>