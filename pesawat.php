<?php
include 'koneksi.php';
?>
<style>
    tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
        background-color: #0000;
    }
    table{
        width: 75%;
        margin: auto;
        border-collapse: collapse;
        box-shadow: darkgrey 3px;
    }
    thead tr {
        background-color: #0ff0ff;
    }
</style>
<!DOCTYPE html>
<html>
	<head>
		<title>Maskapai</title>
	</head>
	<body>
		<h3 align="center">Maskapai</h3>
		<center>
		  <a href="index.php">Maskapai Indonesia &Gt; </a>
		</center>
		<br />
		<table border="1">
			<thead>
			<tr>
				<td width=5%>ID Pesawat 
				<td width=12%>Nama Pesawat 
				<td width=12%>Kapasitas
				<td width=12%>Action</th>	
			</tr>
		</thead> 
    <tbody>
    <?php
    $sq = "SELECT * FROM pesawat ORDER BY id_pesawat";
    $no  = 1;
    foreach ($dbh->query($sq) as $dat) :
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $dat['nama_pesawat'] ?></td>
            <td><?php echo $dat['kapasitas'] ?></td>
            <td align="center">
                <a href="edit.php?no_id=<?php echo $dat['id_pesawat'] ?>"><img alt="edit" src="icon/edit.png" /></a>
                &nbsp;&nbsp;
                <a href="hapus.php?no_id=<?php echo $dat['id_pesawat'] ?>" onClick="return confirm('Anda yakin akan menghapus data?')"><img alt="hapus" src="icon/hapus.png" /></a></td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
	</table>
	
</body>
</html>