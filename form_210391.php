<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data Buku</title>
</head>
<body>
	<center>
	<h2>Form Input Data Buku</h2>
	<form method="POST" action=" ">
		<table rules="rows">
			<tr>
				<td><label>Kode Buku</label></td>
				<td><input type="text" name="txt_kode" placeholder="Masukkan Kode Buku" style="width: 95%"></td>
			</tr>
			<tr>
				<td><label>Judul Buku</label></td>
				<td><input type="text" name="judul" placeholder="Masukkan Judul Buku" style="width: 95%"></td>
			</tr>
			<tr>
				<td><label>Pengarang</label></td>
				<td><input type="text" name="pengarang" placeholder="Masukkan Pengarang Buku" style="width: 95%"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>
					<select name="penerbit">
						<option>--Pilih--</option>
						<option value="Erlangga">Erlangga</option>
						<option value="Gramedia">Gramedia</option>
						<option value="Mexindo">Mexindo</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Terbit</td>
				<td><input type="date" name="tgl_terbit"></td>
			</tr>
			<tr>
				<td><label>Jumlah Buku</label></td>
				<td><input type="text" name="txt_jumlah" placeholder="Masukkan Jumlah Buku" style="width: 95%"></td>
			</tr>

			<tr>
				<td></td>
				<td>
					<button type="submit" name="Simpan">Simpan</button>
				</td>
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
	Copyright: 21101152610391 - Putri Ayuni
</body>
</html>