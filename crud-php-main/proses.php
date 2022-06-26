<?php 
	
	include 'database.php';
	$db = new database();

	$aksi = $_GET['aksi'];
	if($aksi == "tambah_databayar"){
		$db->input($_POST['nik'],$_POST['akademik'], md5($_POST['password']), $_POST['nama'], $_POST['no_hp'], $_POST['petugas'], $_POST['tahun'], $_POST['biaya'], $_POST['tanggal_daftar'], $_POST['jalur']);
		header("location:tampil_bayar.php");
	}elseif ($aksi == "hapus_databayar") {
		$db->hapus($_GET['id']);
		header("location:tampil_bayar.php");
	}elseif ($aksi == "update") {
		$db->update($_POST['id'], $_POST['nik'],$_POST['akademik'], md5($_POST['password']), $_POST['nama'], $_POST['no_hp'], $_POST['petugas'], $_POST['tahun'], $_POST['biaya'], $_POST['tanggal_daftar'], $_POST['jalur']);
		header("location:tampil_bayar.php");
	}

 ?>