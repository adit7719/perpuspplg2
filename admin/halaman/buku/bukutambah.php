<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h3>Tambah Buku</h3>
    <h5><a href="index.php?page=buku"><--Kembali</a></h5>
    <form action="halaman/buku/bukutambah_aksi.php" method="post">
    <table>
        <tr>
            <td>Kode Buku</td>
            <td><input type="number" name="kodebuku" placeholder="Masukan Kode Buku"></td>
        </tr>

        <tr>
            <td>Judul</td>
            <td><input type="text" name="judul" placeholder="Masukan Judul Buku"></td>
        </tr>

        <tr>
            <td>Pengarang</td>
            <td><input type="text" name="pengarang" placeholder="Masukan Nama Pengarang"></td>
        </tr>

        <tr>
            <td>Penerbit</td>
            <td><input type="text" name="penerbit" placeholder="Masukan Nama Penerbit"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>
</body>
</html>