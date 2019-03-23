<?php
include 'koneksi.php';
$no_ktp = $_GET['no_ktp'];
$kamar  = mysqli_query($konek, "SELECT * FROM kamar where no_ktp='$no_ktp'");
$row        = mysqli_fetch_array($kamar);
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
        <form method="post" action="update2.php">
            <input type="hidden" value="<?php echo $row['no_ktp'];?>" name="no_ktp">
            <table>
				//no ktp tidak bisa di ubah karena merupakan primary key;
				<tr><td>Id_Kamar/td><td><input type="text" value="<?php echo $row['id_kamar'];?>" name="id_kamar"></td></tr>
                <tr><td>No_Kamar</td><td><input type="text" value="<?php echo $row['no_kamar'];?>" name="no_kamar"></td></tr>
				<tr><td>Luas_Kamar</td><td><input type="text" value="<?php echo $row['luas_kamar'];?>" name="luas_kamar"></td></tr>
				<tr><td>Harga_Kamar</td><td><input type="text" value="<?php echo $row['harga_kamar'];?>" name="harga_kamar"></td></tr>
                <tr><td>status</td><td>
                        <input type="radio" name="status" value="berisi" <?php echo active_radio_button("berisi", $row['status'])?>>Laki Laki
                        <input type="radio" name="status" value="kosong" <?php echo active_radio_button("kosong", $row['status'])?>>Perempuan
                    </td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="index.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>