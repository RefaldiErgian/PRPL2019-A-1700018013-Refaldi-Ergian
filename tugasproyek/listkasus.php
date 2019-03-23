<html>
<head></head>
<body>

<td>Kasus dan solusi yang dimiliki : </td>
<br>
<td>1.) Pemilik ingin melihat nama dan nomor hp saja dari penyewa kos agar tidak membingunkan</td>
<br>
<td>-Solusi : Pemilik mencari nama dan nomor hp saja di database</td>
<br>
<td>(SQL : select nama_pel,no_hp from pelanggan)</td>
		<form method="get" action="kasus1.php">
		<button type="submit">Pemecahan masalah SQL</button></form>
		
<br>
<tr>2.) Pemilik ingin melihat siapa saja yang menyewa/memakai fasilitas saat ini</tr>
<br>
<tr>-Solusi : Pemilik mencari nama dan fasilitas yang disewa setiap orang di database</tr>
<br>
<tr>(SQL : select nama_pel, nama_fasilitas from pelanggan,fasilitas,pemakaian</tr>
<br>
<td>where pelanggan.no_ktp = pemakaian.no_ktp and pemakaian.id_fasilitas = fasilitas.id_fasilitas)</td>
		<form method="get" action="kasus2.php">
		<button type="submit">Pemecahan masalah SQL 2</button></form>
		
<br>
<tr>3.) Pemilik ingin melihat siapa saja yang memesan kamar bulan kemaren ( bulan 11 ) serta no.kamarnya</tr>
<br>
<tr>-Solusi : Pemilik mencari data nama,tanggal pemesanan berserta no kamar yang ingin menyewa kos di database/catatan</tr>
<br>
<tr>(SQL : select nama_pel, tgl_pemesanan, no_kamar from pelanggan,pemesanan,kamar where pelanggan.no_ktp 
<br>
<tr>= pemesanan.no_ktp and pemesanan.no_ktp = kamar.no_ktp and tgl_pemesanan like '2018-11%')</tr>
		<form method="get" action="kasus3.php">
		<button type="submit">Pemecahan masalah SQL 2</button></form>