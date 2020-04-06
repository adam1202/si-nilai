<?php
include "../include/connect.php";
include "../include/session.php"; 

$id_guru = $_POST["id_guru"];
$nip    = $_POST["nip"];
$nama 	= $_POST["nama"];
$tempat 	        = $_POST["tempat"];
$tgl_lahir = $_POST["tgl_lahir"];
$jabatan = $_POST["jabatan"];
$golongan = $_POST["golongan"];
$agama = $_POST["agama"];
$pendidikan_terakhir = $_POST["pendidikan_terakhir"];

if ($add = mysqli_query($connect, "INSERT INTO tbl_guru VALUES ('$id_guru', '$nip', '$nama', '$tempat', '$tgl_lahir',
'$jabatan', '$golongan', '$agama', '$pendidikan_terakhir' )")){
		header("Location: guru.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>