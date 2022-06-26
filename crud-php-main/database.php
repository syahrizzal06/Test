<?php
	class database{
		var $host = "localhost";
		var $user = "root";
		var $pass = "";
		var $db = "tugas_pelatihan";

		function __construct(){
			$koneksi = mysql_connect($this->host, $this->user, $this->pass);
			$database = mysql_select_db($this->db);

			$this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		}

		function tampil_data(){
			$data= mysql_query("SELECT * FROM beli_formulir");
			if (mysql_num_rows($data) > 0) {
				while ($d = mysql_fetch_array($data)) {
					$hasil[] = $d;
				}
				return $hasil;
			}
		}

		function input($nik, $akademik, $password, $nama, $no_hp, $petugas, $tahun, $biaya, $tanggal_daftar, $jalur){
			mysql_query("INSERT INTO beli_formulir VALUES('', '$nik', '$akademik','$password', '$nama', '$no_hp', '$petugas', '$tahun', '$biaya', '$tanggal_daftar', '$jalur')");
		}

		function update($id, $nik, $akademik, $password, $nama, $no_hp, $petugas, $tahun, $biaya, $tanggal_daftar, $jalur){
			mysql_query("UPDATE beli_formulir SET nik = '$nik', akademik = '$akademik', password = '$password', nama = '$nama', no_hp = '$no_hp', biaya = '$biaya', tanggal_daftar = '$tanggal_daftar', jalur = '$jalur' WHERE id = '$id' ");
		}
		function edit($id){
			$data = mysql_query("SELECT * FROM beli_formulir where id = '$id' ");
			while ($d = mysql_fetch_array($data)) {
				$hasil[] = $d;
			}
			return $hasil;
		}

		function hapus($id){
			mysql_query("DELETE FROM beli_formulir WHERE id = '$id'");
		}
	}
?>