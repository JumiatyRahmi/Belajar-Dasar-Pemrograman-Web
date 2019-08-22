<?php
include 'koneksi.php';
if (isset($_GET['no_id'])) {
    $dbh->exec("DELETE FROM tiketpemesanan WHERE no_id = '$_GET[no_id]'");
}
header("location:index.php")
?>