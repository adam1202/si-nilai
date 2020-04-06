<?php

include "../include/connect.php";
include "../include/session.php"; 

$id_guru = $_GET['id_guru'];

// mysqli_query($connect, "DELETE FROM user WHERE id_user='$id_user'");

// header("Location: users.php");
if($delete = mysqli_query ($connect, "DELETE FROM tbl_guru WHERE id_guru='$id_guru'")){
	header("Location: guru.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>