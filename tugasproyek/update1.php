<?php
include 'koneksi.php';
$no_ktp			= $_POST['no_ktp'];
$nama_pel			= $_POST['nama_pel'];
$no_hp		= $_POST['no_hp'];
$no_ortu			= $_POST['no_ortu'];
$alamat = $_POST['alamat'];
$jk				= $_POST['jk'];

$query="UPDATE pelanggan SET no_ktp = '$no_ktp',nama_pel='$nama_pel',no_hp='$no_hp',no_ortu='$no_ortu',alamat='$alamat' where no_ktp = '$no_ktp'";
//echo $query;
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>