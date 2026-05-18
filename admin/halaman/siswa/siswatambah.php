<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <h3>Tambah Siswa</h3>
    <h5><a href="index.php?page=siswa"><--Kembali</a></h5>
    <form action="halaman/siswa/siswatambah_aksi.php" method="post">
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="number" name="nis" placeholder="Masukan NIS"></td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td><input type="text" name="namasiswa" placeholder="Masukan Nama Siswa"></td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" placeholder="Masukan Kelas"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" placeholder="Masukan Alamat"></td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td><input type="text" name="hp" placeholder="Masukan No. HP"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>
</body>
</html>