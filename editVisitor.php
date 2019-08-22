<?php
include "koneksi.php";
$id = $_POST['id'];
class emp{}
if (empty($id)) {
	$respone = new emp();
	$respone->success = 0;
	$respone->message = "Error Mangambil data visitor";
	die(json_encode($respone));	
}else {
		$query = mysql_query("select * from visitor where id='".$id."'");
		$row = mysql_fetch_array($query);
		if (!empty($row)){
			$respone = new emp();
			$respone->success = 1;
			$respone->id = $row["id"];
			$respone->nama = $row["nama"];
			$respone->alamat = $row["alamat"];
			$respone->email = $row["email"];
			die(json_encode($respone));	
		}else {
			$respone = new emp();
			$respone->success = 0;
			$respone->message = "Error Mengambil Data";
			die(json_encode($respone));	
		}
}
?>