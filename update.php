<?php
include 'koneksi.php';

if (isset($_POST)) {
    $sql = "UPDATE tiketpemesanan SET nama = '$_POST[nama]',
                                     nama_pesawat = '$_POST[nama_pesawat]',
                                     no_tiket = '$_POST[no_tiket]',
                                     kelas  = '$_POST[kelas]',
									 no_kursi  = '$_POST[no_kursi]',
									 berangkat  = '$_POST[berangkat]',
									 tanggal_berangkat  = '$_POST[tanggal_berangkat]',
									 tiba  = '$_POST[tiba]',
									 tanggal_tiba  = '$_POST[tanggal_tiba]',
									 harga  = '$_POST[harga]',
                                 WHERE no_id = '$_POST[no_id]' ";
    $dbh->exec($sql);
}
header("location:index.php");
?>