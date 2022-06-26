<?php 
	include 'database.php';
	$db = new database();
 ?>

 <h3>Edit Data</h3>

 <form action="proses.php?aksi=update" method="POST">
 	<?php 
 		foreach ($db->edit($_GET['id']) as $d) { ?>
 		<table>
			<tr>
				<td>NIK</td>
				<td>
					<input type="text" name="id" value="<?= $d['id']; ?>">
					<input type="text" name="nik" value="<?= $d['nik']; ?>">
				</td>
			</tr>
			<tr>
				<td>Akademik</td>
				<td>
					<input type="text" name="akademik" value="<?= $d['akademik']; ?>">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="password" value="<?= $d['password']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" value="<?= $d['nama']; ?>">
				</td>
			</tr>
			<tr>
				<td>Nomor Hape</td>
				<td>
					<input type="text" name="no_hp" value="<?= $d['no_hp']; ?>">
				</td>
			</tr>
			<tr>
				<td>Petugas</td>
				<td>
					<input type="text" name="petugas" value="<?= $d['petugas']; ?>">
				</td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td>
					<input type="text" name="tahun" value="<?= $d['tahun']; ?>">
				</td>
			</tr>
			<tr>
				<td>Biaya</td>
				<td>
					<input type="text" name="biaya" value="<?= $d['biaya']; ?>">
				</td>
			</tr>
			<tr>
				<td>Tanggal Daftar</td>
				<td>
					<input type="text" name="tanggal_daftar" value="<?= $d['tanggal_daftar']; ?>">
				</td>
			</tr>
			<tr>
				<td>Jalur</td>
				<td>
					<input type="text" name="jalur" value="<?= $d['jalur']; ?>">
				</td>
			</tr>
			<td></td>
			<td>
				<input type="submit" name="simpan" value="Simpan">
			</td>
		</table>
 	<?php } ?>
 </form>