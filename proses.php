<?php
 include_once("koneksi.php");

    $NIK = $_POST['NIK'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $Agama = $_POST['Agama'];
    $Telpon = $_POST['Telpon'];
    $Asal_Sekolah = $_POST['Asal_Sekolah'];

    $query="INSERT INTO `tb_mahasiswa` (`NIK`, `Nama`, `Alamat`, `Jenis_Kelamin`, `Agama`, `Telpon`, `Asal_Sekolah`) VALUES ('$NIK', '$Nama', '$Alamat', '$Jenis_Kelamin', '$Agama', '$Telpon', '$Asal_Sekolah')";
    $hasil=mysqli_query($conn, $query);
    header("location:index.php");
?>