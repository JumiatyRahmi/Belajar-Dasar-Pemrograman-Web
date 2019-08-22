<?php
	include "koneksi.php";
	$query = mysql_query("select * from visitor order by nama ASC");
	$json = array();
	while($row = mysql_fetch_assoc($query)){
				$json[] = $row;
	}
	echo json_encode($json);
	mysql_close($connect);
?>