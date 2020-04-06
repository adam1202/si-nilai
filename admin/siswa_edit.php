<?php
include "../include/connect.php";
// include "../include/session.php";

$id_siswa = $_POST["id_siswa"];
$no_induk    = $_POST["no_induk"];
$nama 	= $_POST["nama"];
$kelas  = $_POST["kelas"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$agama = $_POST["agama"];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];
$email = $_POST["email"];
$tempat = $_POST["tempat"];
$tanggal_lahir = $_POST["tanggal_lahir"];

if ($edit = mysqli_query($connect, "UPDATE tbl_siswa SET id_user='$id_user', username='$username', password='$password', level='$level' WHERE id_user='$id_user'")){
		header("Location: datasiswa.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>