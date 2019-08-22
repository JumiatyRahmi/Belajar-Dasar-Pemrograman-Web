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
		<title>Bandara</title>
	</head>
	<body>
		<h3 align="center">Bandara</h3>
		<center>
		  <a href="index.php">Bandara Indonesia &Gt; </a>
		</center>
		<br />
		<table border="1">
			<thead>
			<tr>
				<td width=5%>ID Bandara</th>
				<td width=12%>Nama Bandara</th>
				<td width=12%>Alamat</th>	
				<td width=12%>Action</th>	
			</tr>
		</thead> 
    <tbody>
    <?php
    $sq = "SELECT * FROM tbl_bandara ORDER BY id_bandara";
    $no  = 1;
    foreach ($dbh->query($sq) as $dat) :
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $dat['nama_bandara'] ?></td>
            <td><?php echo $dat['alamat'] ?></td>
            <td align="center">
                <a href="edit.php?no_id=<?php echo $dat['id_bandara'] ?>"><img alt="edit" src="icon/edit.png" /></a>
                &nbsp;&nbsp;
                <a href="hapus.php?no_id=<?php echo $dat['id_bandara'] ?>" onClick="return confirm('Anda yakin akan menghapus data?')"><img alt="hapus" src="icon/hapus.png" /></a>
				<a href="">Location</a></th>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
	</table>
	
</body>
</html>

