<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$id_pel = $_GET['id_pel'];
// query SQL untuk insert data
$query="DELETE from pelanggan where id_pel='$id_pel'";
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>