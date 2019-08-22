<!DOCTYPE html>
<html>
	<head>
		<title>Input CRUD Pemesana Tiket KA</title>
	</head>
	<body>
		<h3 align="center">INPUT PEMESANAN TIKET PESAWAT INDONESIA</h3>
		<center>
		  <a href="index.php">&Lt; Tabel Pemesanan Tiket Pesawat Indonesia</a>
		</center></br>
	<fieldset style="width: 50%; margin: auto;">
		<legend>Form Input Pemesanan Tiket Pesawat Indonesia</legend>
		    <form action="simpan.php" method="post">
		<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"required=required placeholder='nama pembeli'></td>
		</tr>
		<tr>
			<td>Nama Pesawat </td>
			<td>:</td>
			<td><input type="text" name="nama_pesawat"required=required placeholder='nama Pesawat'></td>
			<td>No Tiket </td>
			<td>:</td>
			<td><input type="number" name="no_tiket"required=required placeholder='No Tiket'></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td>:</td>
			<td><select name="kelas">
				<option value="Pilih kelas">---Pilih Kelas---
				<option value="EKONOMI">EKONOMI
				<option value="BISNIS">BISNIS
				<option value="EXECUTIVE">EXECUTIVE
			</select></td>
			<td>No Kursi</td>
			<td>:</td>
			<td><input type="number" name="no_kursi"required=required placeholder='No duduk'></td>
		</tr>
		<tr>
			<td>Berangkat</td>
			<td>:</td>
			<td><input type="text" name="berangkat"required=required placeholder='berangkat'></td>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal_berangkat"required=required placeholder='ex:YYYY-MM-DD'></td>
		</tr>
		<tr>
			<td>Tiba</td>
			<td>:</td>
			<td><input type="text" name="tiba"required=required placeholder='tiba'></td>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal_tiba"required=required placeholder='ex:YYYY-MM-DD'></td>
		</tr>
        <tr>
			<td>Harga</td>
			<td>:</td>
			<td><input type="number" name="harga"required=required placeholder='harga tiket'></td>
		</tr>
        <tr>
            <td><input type="submit" value="Simpan" /></td>
            <td><input type="reset" value="Reset" onClick="return confirm('hapus data yang telah diinput?')"></td>
        </tr>
		</table>
    </form>
	</fieldset>
	</body>
</html>