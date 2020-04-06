<?php
include "../include/connect.php";
include "../include/session.php"; 

$id_siswa = $_POST["id_siswa"];
$no_induk  = $_POST["no_induk"];
$nama 	= $_POST["nama"];
$kelas 	= $_POST["kelas"];
$jenis_kelamin = $_POST	["jenis_kelamin"];
$agama = $_POST["agama"];
$alamat = $_POST["alamat"];
$no_hp = $_POST["no_hp"];
$email = $_POST["email"];
$tempat = $_POST["tempat"];
$tanggal_lahir = $_POST["tanggal_lahir"];


if ($add = mysqli_query($connect, "INSERT INTO tbl_siswa VALUES ('$id_siswa', '$no_induk', '$nama','$kelas', '$jenis_kelamin', '$agama',
'$alamat', '$no_Hp', '$email', '$tempat', ' $tanggal_lahir')")){
		header("Location: siswa.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>