<?php

include "../include/connect.php";
include "../include/session.php"; 

$id_siswa = $_GET['id_siswa'];

// mysqli_query($connect, "DELETE FROM user WHERE id_user='$id_user'");

// header("Location: users.php");
if($delete = mysqli_query ($connect, "DELETE FROM tbl_siswa WHERE id_siswa='$id_siswa'")){
	header("Location: siswa.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>