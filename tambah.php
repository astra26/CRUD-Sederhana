<html>
    <head>
        <title>Pendaftaran</title>
    </head>
    <body>
        <center>
            <h1>===========================</h1>
            <h1>Form Pendaftaran Mahasiswa</h1>
            <h1>===========================</h1>
            <form action="proses.php" method="post">
                <table>
                    <tr>
                        <td>NIK</td>
                        <td><input type="text" name="NIK"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="Nama"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="Alamat"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <input type="radio" name="Jenis_Kelamin" value="Laki-Laki">Laki-Laki
                            <input type="radio" name="Jenis_Kelamin" value="Perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <select name="Agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Telpon</td>
                        <td><input type="text" name="Telpon"></td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td><input type="text" name="Asal_Sekolah"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan">
                        <input type="reset" value="Reset"></td>
                    </tr>
                </table> 
            </form>
            </table>
        </center>
    </body>
</html>