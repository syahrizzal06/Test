<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body>
	<h2>Input Data Bayar</h2>
	<form action="proses.php?aksi=tambah_databayar" method="POST">
		<table>
			<tr>
				<td>NIK</td>
				<td>
					<input type="text" name="nik">
				</td>
			</tr>
			<tr>
				<td>Akademik</td>
				<td>
					<input type="text" name="akademik">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr>
			<tr>
				<td>Nomor Hape</td>
				<td>
					<input type="text" name="no_hp">
				</td>
			</tr>
			<tr>
				<td>Petugas</td>
				<td>
					<input type="text" name="petugas">
				</td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td>
					<input type="text" name="tahun">
				</td>
			</tr>
			<tr>
				<td>Biaya</td>
				<td>
					<input type="text" name="biaya">
				</td>
			</tr>
			<tr>
				<td>Tanggal Daftar</td>
				<td>
					<input type="text" name="tanggal_daftar">
				</td>
			</tr>
			<tr>
				<td>Jalur</td>
				<td>
					<input type="text" name="jalur">
				</td>
			</tr>
			<td></td>
			<td>
				<input type="submit" name="simpan" value="Simpan">
			</td>
		</table>
	</form>
</body>
</html>