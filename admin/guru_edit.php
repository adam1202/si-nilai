<?php
include "../include/connect.php";
// include "../include/session.php";

$id_guru = $_POST["id_guru"];
$nip    = $_POST["nip"];
$nama 	= $_POST["nama"];
$tempat  = $_POST["tempat"];
$tgl_lahir = $_POST["tgl_lahir"];
$jabatan = $_POST["jabatan"];
$golongan = $_POST["golongan"];
$agama = $_POST["agama"];
$pendidikan_terakhir = $_POST["pendidikan_terakhir"];

if ($edit = mysqli_query($connect, "UPDATE tbl_guru SET id_user='$id_user', username='$username', password='$password', level='$level' WHERE id_user='$id_user'")){
		header("Location: dataguru.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>