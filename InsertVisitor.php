<?php

include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
class emp{}
if (empty($nama) || empty($alamat) || empty($email)) {
	$respone = new emp();
	$respone->success = 0;
	$respone->message = "kolom isian data visitor tidak boleh kosong";
	die(json_encode($respone));
}else {
		$query = mysql_query("insert into visitor (id,nama,alamat,email)"
							"values(0,'".$nama."','".$alamat."','".$emali."')");
		if ($query){
			$respone = new emp();
			$respone->success = 1;
			$respone->message = "data visitor berhasil di simpan";
			die(json_encode($respone));	
		}else {
			$respone = new emp();
			$respone->success = 0;
			$respone->message = "Simpan Data Visitor Error";
			die(json_encode($respone));	
		}
}
?>