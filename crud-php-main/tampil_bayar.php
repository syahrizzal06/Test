<?php  
	include 'database.php';
	$db = new database();
?>

<h1>CRUD OOP</h1>
<h1>DATA BAYAR</h1>

<a href="input_bayar.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>NIK</th>
		<th>Jalur</th>
		<th>Akademik</th>
		<th>Password</th>
		<th>Nama</th>
		<th>Nomor Hape</th>
		<th>Petugas</th>
		<th>Tahun</th>
		<th>Biaya</th>
		<th>Tanggal Daftar</th>
		<th>Opsi</th>
	</tr>

	<?php 
		$no = 1;
		if (!empty($db->tampil_data())) {
			foreach ($db->tampil_data()as $d) { ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $d["nik"]; ?></td>
					<td><?= $d["jalur"] ?></td>
					<td><?= $d["akademik"]; ?></td>
					<td><?= $d["password"]; ?></td>
					<td><?= $d["nama"]; ?></td>
					<td><?= $d["no_hp"]; ?></td>
					<td><?= $d["petugas"]; ?></td>
					<td><?= $d["tahun"]; ?></td>
					<td><?= $d["biaya"]; ?></td>
					<td><?= $d["tanggal_daftar"]; ?></td>
					<td>
						<a href="edit_bayar.php?id=<?php echo $d['id']; ?>&aksi=edit">Edit</a>
						<a href="proses.php?id=<?php echo $d['id']; ?>&aksi=hapus_databayar">Hapus</a>
					</td>
				</tr>
	<?php  
		}
	}
	?>
</table>