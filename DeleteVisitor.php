<?php

include 'koneksi.php';
$id = $_POST['id'];
class emp{}
if(empty($id)){
	$respone = new emp();
	$respone->success = 0;
	$respone->message = "Error hapus Data Visitor";
	die(json_encode($respone));	
}else {
	$query = mysql_query("Delete from visitor where id='".$id."'");
		if($query){
			$respone = new emp();
			$respone->success = 1;
			$respone->message = "Data Visitor berhasil Dihapus";
			die(json_encode($respone));	
	}else {
			$respone = new emp();
			$respone->success = 0;
			$respone->message = "Error Hapus Data Visitor";
			die(json_encode($respone));
	}
}
?>