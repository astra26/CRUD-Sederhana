<?php
include_once("koneksi.php");
$conn->query("delete from tb_mahasiswa where NIK='".$_GET['NIK']."'");
header("location:index.php");
?>