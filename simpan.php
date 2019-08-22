<?php
include 'koneksi.php';
$test=$_POST['nama'];
$coba=$_POST['nama_pesawat'];
$jajal=$_POST['no_tiket'];
$kelas=$_POST['kelas'];
$no=$_POST['no_kursi'];
$berangkat=$_POST['berangkat'];
$tanggal_berangkat=$_POST['tanggal_berangkat'];
$tiba=$_POST['tiba'];
$tgl=$_POST['tanggal_tiba'];
$harga=$_POST['harga'];
if (isset($_POST)) {
   $sql = "INSERT INTO tiketpemesanan value('', '$test','$coba','$jajal','$kelas','$no','$berangkat','$tanggal_berangkat','$tiba','$tgl','$harga')";
    $dbh->exec($sql);
}
header("location:index.php");
?>