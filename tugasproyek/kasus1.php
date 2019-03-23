<?php 
include "koneksi.php";
$QueryString = "SELECT nama_pel, no_hp FROM pelanggan";
	$SQL = mysqli_query($konek,$QueryString); 
?>

<table border="1">
		<tr>
			
			<th>Nama_Pel</th>
			<th>No_HP</th>
			
			
		</tr>
		<?php
			foreach ($SQL as $data) {
				echo "
					<tr>
						
						<td>$data[nama_pel]</td>
						<td>$data[no_hp]</td>
						
					</tr>
				";
			}
		?>
		
			<td><form>
			<button formaction="index.php">Kembali</button>
			</form></td>
	</table>