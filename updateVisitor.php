<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
class emp{}
if (empty($id) || empty($nama) || empty($alamat) || empty($email)) {
	$respone = new emp();
	$respone->success = 0;
	$respone->message = "Kolom Isian Data Visitor tidak boleh kosong";
	die(json_encode($respone));	
}else {
		$query = mysql_query("update visitor set nama='".$nama."',"
		."alamat='".$alamat."',email='".$email."'"
		."WHERE id ='".$id."'");
		if ($query){
			$respone = new emp();
			$respone->success = 1;
			$respone->message = "Data Visitor berhasil di Update";
			die(json_encode($respone));	
		}else {
			$respone = new emp();
			$respone->success = 0;
			$respone->message = "Error Update Data Visitor";
			die(json_encode($respone));	
		}
}
?>