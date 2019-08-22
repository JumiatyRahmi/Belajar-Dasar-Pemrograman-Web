<?php
include 'koneksi.php';

if (isset($_GET['no_id'])) {
    $query = $dbh->query("SELECT * FROM tiketpemesanan WHERE no_id = '$_GET[no_id]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID tidak tersedia!<br /><a href='index.php'>Kembali</a>";
    exit();
}

if ($data === false) {
    echo "Data tidak ditemukan!<br /><a href='index.php'>Kembali</a>";
    exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit CRUD Pemesana Tiket KA</title>
	</head>
	<body>
		<h3 align="center">INPUT PEMESANAN TIKET PESAWAT INDONESIA</h3>
		<center>
		  <a href="index.php">&Lt; Tabel Pemesanan Tiket Pesawat Indonesia</a>
		</center></br>
		<fieldset style="width: 50%; margin: auto;">
		<legend>Form Input Pemesanan Tiket Pesawat Indonesia</legend>
		<form action="update.php" method="post">
        <table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"required placeholder='nama pembeli' value="<?php echo $data['nama'];?>"></td>
		</tr>
		<tr>
			<td>Nama Pesawat </td>
			<td>:</td>
			<td><input type="text" name="nama_pesawat"required placeholder='nama Pesawat' value="<?php echo $data['nama_pesawat'];?>"></td>
			<td>No Tiket </td>
			<td>:</td>
			<td><input type="number" name="no_tiket"required placeholder='No Tiket' value="<?php echo $data['no_tiket'];?>"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><select name="kelas" value="<?php echo $data['kelas'];?>">>
				<option value="Pilih kelas">---Pilih Kelas---
				<option value="EKONOMI">EKONOMI
				<option value="BISNIS">BISNIS
				<option value="EXECUTIVE">EXECUTIVE
			</select></td>
			<td>No Kursi</td>
			<td>:</td>
			<td><input type="number" name="no_kursi"required placeholder='No duduk' value="<?php echo $data['no_kursi'];?>"></td>
		</tr>
		<tr>
			<td>Berangkat</td>
			<td>:</td>
			<td><input type="text" name="berangkat"required placeholder='berangkat' value="<?php echo $data['berangkat'];?>"></td>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal_berangkat" required placeholder='ex:YYYY-MM-DD' value="<?php echo $data['tanggal_berangkat'];?>"></td>
		</tr>
		<tr>
			<td>Tiba</td>
			<td>:</td>
			<td><input type="text" name="tiba"required placeholder='tiba' value="<?php echo $data['tiba'];?>"></td>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal_tiba" required placeholder='ex:YYYY-MM-DD' value="<?php echo $data['tanggal_tiba'];?>"></td>
		</tr>
        <tr>
			<td>Harga</td>
			<td>:</td>
			<td><input type="number" name="harga"required placeholder='harga tiket' value="<?php echo $data['harga'];?>"></td>
		</tr>
        <tr>
            <td><input type="submit" value="Simpan" /></td>
            <td><input type="reset" value="Reset" onClick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
		</table>
    </form>
	</fieldset>
	<p>&nbsp;</p>
	</body>
</html>