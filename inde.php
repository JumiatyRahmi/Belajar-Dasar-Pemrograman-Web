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
		<title>Halaman CRUD Pemesana Tiket Pesawat</title>
	</head>
	<body>
		<h3 align="center">TABEL PEMESANAN TIKET PESAWAT INDONESIA</h3>
		<center>
		  <a href="input.php">Inputan Pemesanan Tiket Pesawat Indonesia &Gt; </a>
		</center>
		<br />
		<table border="1">
			<thead>
			<tr>
				<td width=5%>No ID</th>
				<td width=12%>Nama</th>
				<td width=12%>Nama Pesawat</th>
				<td width=7%>No Tiket</th>
				<td width=7%>Kelas</th>
				<td width=6%>No Kursi</th>
				<td width=11%>Berangkat</th>
				<td width=9%>Tanggal</th>
				<td width=6%>Tiba</th>
				<td width=10%>Tanggal</th>
				<td width=7%>Harga</th>
				<td width=8%>Action</th>			
			</tr>
		</thead> 
    <tbody>
    <?php
    $sql = "SELECT * FROM tiketpemesanan ORDER BY no_id";
    $no  = 1;
    foreach ($dbh->query($sql) as $data) :
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['nama_pesawat'] ?></td>
            <td><?php echo $data['no_tiket'] ?></td>
            <td><?php echo $data['kelas'] ?></td>
			<td><?php echo $data['no_kursi'] ?></td>
			<td><?php echo $data['berangkat'] ?></td>
			<td><?php echo $data['tanggal_berangkat'] ?></td>
			<td><?php echo $data['tiba'] ?></td>
			<td><?php echo $data['tanggal_tiba'] ?></td>
			<td><?php echo $data['harga'] ?></td>
            <td align="center">
                <a href="edit.php?no_id=<?php echo $data['no_id'] ?>"><img alt="edit" src="icon/edit.png" /></a>
                &nbsp;&nbsp;
                <a href="hapus.php?no_id=<?php echo $data['no_id'] ?>" onClick="return confirm('Anda yakin akan menghapus data?')"><img alt="hapus" src="icon/hapus.png" /></a>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
	</table>
		</body>
</html>