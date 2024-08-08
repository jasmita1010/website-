<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
<center>
	<h2> FORM INPUT DATA BUKU</h2>
	<form method="POST" action="">
		<table rules="rows">
			<tr>
				<td><label>Kode Buku</label></td>
				<td><Input type="text" name="txt_nim"
				placeholder="Masukan Kode Buku" style="width:95%"></td>
			</tr>
			<tr>
				<td><label>Judul Buku</label></td>
				<td><Input type="text" name="txt_nama"
				placeholder="Masukan Judul Buku" style="width:95%"></td>
			</tr>
			<tr>
				<td><label>Pengarang</label></td>
				<td><Input type="text" name="txt_nama"
				placeholder="Masukan Nama Pengarang" style="width:95%"></td>
			</tr>
			<tr>
				<td><label>Penerbit</label></td>
				<td>
					<select name="penerbit">
						<option>--Pilih--</option>
						<option value="erlangga">erlangga</option>
						<option value="gramedia pustaka utama">gramedia pustaka utama</option>
						<option value="pustaka hidayah">pustaka hidayah</option>
						<option value="repbulika">repbulika </option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Tanggal terbit</label></td>
				<td><Input type="date" name="tgl_terbit"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit">Submit</button></td>
			</tr>
			<tr>
				<td><label>Jumlah Buku</label></td>
				<td><Input type="text" name="txt_nama"
				placeholder="Masukan Jumlah Buku" style="width:95%"></td>
			</tr>
		</table>
	</form>
	<br>

	<?php if (isset($_POST["Simpan"])): ?>
	<h2>Laporan Data Buku Perpustakaan</h2>
	<table border="1" cellspacing="0" cellpadding="5">	

		<tr align="center">
			<th rowspan="2">Kode Buku</th>
			<th rowspan="2">Judul Buku</th>
			<th rowspan="2">Pengarang</th>
			<th colspan="2">Penerbit Buku</th>
			<th rowspan="2">Jumlah  Buku</th>
		</tr>
		<tr align="center">
			<th>Penerbit </th>
			<th>Tanggal Terbit</th>
		</tr>
		<tr align="center">
			<td><?php echo $_POST["txt_kode"]; ?></td>
			<td><?php echo $_POST["judul"]; ?></td>
			<td><?php echo $_POST["pengarang"]; ?></td>
			<td><?php echo $_POST["penerbit"]; ?></td>
			<td><?php echo $_POST["tgl_terbit"]; ?></td>
			<td><?php echo $_POST["txt_jumlah"]; ?></td>
		</tr>
	</table>
	<?php endif ?>
	<br>
	Copyright: 21101152610378 - JASMITA ELYUSRA
</body>
</html>