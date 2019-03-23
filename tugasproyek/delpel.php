<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$no_ktp = $_GET['no_ktp'];
// query SQL untuk insert data
$query="DELETE from pelanggan where no_ktp='$no_ktp'";
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>