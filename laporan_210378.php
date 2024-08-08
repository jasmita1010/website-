<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Buku Perpustakaan</title>
</head>
<body>
	<h2>Laporan Data Buku Perpustakaan</h2>
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
</body>
</html>