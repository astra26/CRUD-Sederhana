<?php
include_once("koneksi.php");

$query = "SELECT * FROM tb_mahasiswa";
$hasil = mysqli_query($conn, $query);

?>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <center>
    <h1>Data Mahasiswa</h1>
    <br>
    <a href="tambah.php">[+]Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Telpon</th>
            <th>Asal Sekolah</th>
            <th>Tindakan</th>
        </tr>
        <?php 
        $nomor=1;
        while ($row = mysqli_fetch_array($hasil)) { ?>
        <tr>
            <td><?php echo $nomor; ?> </td>
            <td><?php echo $row['NIK']; ?></td>
            <td><?php echo $row['Nama']; ?></td>
            <td><?php echo $row['Alamat']; ?></td>
            <td><?php echo $row['Jenis_Kelamin']; ?></td>
            <td><?php echo $row['Agama']; ?></td>
            <td><?php echo $row['Telpon']; ?></td>
            <td><?php echo $row['Asal_Sekolah']; ?></td>
            <td>
                <a href="edit.php?NIK=<?php echo $row['NIK']; ?>">Edit</a> |
                <a href="hapus.php?NIK=<?php echo $row['NIK']; ?>">Hapus</a>
        </tr>
        <?php $nomor++; } ?>
    </table>
</body>
</center>
</html>