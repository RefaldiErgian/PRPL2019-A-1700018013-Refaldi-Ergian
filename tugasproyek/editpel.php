<?php
include 'koneksi.php';
$no_ktp = $_GET['no_ktp'];
$pelanggan  = mysqli_query($konek, "SELECT * FROM pelanggan where no_ktp='$no_ktp'");
$row        = mysqli_fetch_array($pelanggan);
// membuat function untuk set aktif radio button
function active_radio_button($value,$input){
    // apabilan value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" action="update1.php">
            <input type="hidden" value="<?php echo $row['no_ktp'];?>" name="no_ktp">
            <table>
				//no ktp tidak bisa di ubah karena merupakan primary key;
				<tr><td>nama_pel</td><td><input type="text" value="<?php echo $row['nama_pel'];?>" name="nama_pel"></td></tr>
                <tr><td>no_hp</td><td><input type="text" value="<?php echo $row['no_hp'];?>" name="no_hp"></td></tr>
				<tr><td>no_ortu</td><td><input type="text" value="<?php echo $row['no_ortu'];?>" name="no_ortu"></td></tr>
				<tr><td>alamat</td><td><input type="text" value="<?php echo $row['alamat'];?>" name="alamat"></td></tr>
                <tr><td>jk</td><td>
                        <input type="radio" name="jk" value="L" <?php echo active_radio_button("L", $row['jk'])?>>Laki Laki
                        <input type="radio" name="jk" value="P" <?php echo active_radio_button("P", $row['jk'])?>>Perempuan
                    </td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>