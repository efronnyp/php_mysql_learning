<?php
	require_once 'connection.php';
	$npm_siswa = $_POST['nomor_mahasiswa'];
	$name = $_POST['nama_mhs'];
	$score = $_POST['nilai'];
	
	$berhasil = $conn->query("INSERT INTO php_mysql_test.siswa VALUES('".$npm_siswa."', '".$name."', ".$score.")");
	if ($berhasil) {
		header("location:index.php");
	} else {
		echo "Eh goblok gagal! Lu gimana sih!";
	}
?>