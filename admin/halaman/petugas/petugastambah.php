<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
</head>
<body>
    <h3>Tambah Petugas</h3>
    <h5><a href="index.php?page=petugas"><--Kembali</a></h5>
    <form action="halaman/petugas/petugastambah_aksi.php" method="post">
    <table>
        <tr>
            <td>Nama Petugas</td>
            <td><input type="text" name="namapetugas" placeholder="Masukan Nama Petugas"></td>
        </tr>

        <tr>
            <td>Username</td>
            <td><input type="text" name="username" placeholder="Masukan Username"></td>
        </tr>

        <tr>
            <td>No. HP</td>
            <td><input type="number" name="hp" placeholder="Masukan No. HP"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" placeholder="Masukan Password"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="cpass" placeholder="Masukan Password"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>
</body>
</html>