<?php
include "../koneksi.php";

$query_petugas = "SELECT * FROM tbl_petugas WHERE username='"
                  . $_SESSION['username'] . "' LIMIT 1";
$query_siswa = "SELECT * FROM tbl_siswa";
$query_buku = "SELECT * FROM tbl_buku";

$data_petugas = mysqli_query($conn, $query_petugas);
$data_siswa = mysqli_query($conn, $query_siswa);
$data_buku = mysqli_query($conn, $query_buku);

$data = mysqli_fetch_assoc($data_petugas); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjaman</title>
</head>
<body>
    <h3>Tambah Data Peminjaman</h3>
    <h5><a href="index.php?page=pinjam"><--Kembali</a></h5>
    <form action="halaman/pinjam/pinjamtambah_aksi.php" method="post">
    <table>
        <input hidden type="text" name="petugas" value="<?php echo $data['idpetugas']; ?>">
        <tr>
            <td>Nama Petugas</td>
            <td><input readonly type="text" value="<?php echo $data['namapetugas']; ?>"></td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td>
                <select name="siswa">
                    <?php
                    while ($row = mysqli_fetch_assoc($data_siswa)) {
                        echo "<option value=".$row['idsiswa'].">"
                        . $row['namasiswa'] .
                        "</option>";

                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Buku</td>
            <td>
                <select name="buku">
                    <?php
                    while ($row = mysqli_fetch_assoc($data_buku)) {
                        echo "<option value=".$row['idbuku'].">"
                        . $row['judul'] .
                        "</option>";

                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Waktu Pinjam</td>
            <td>
                <input type="datetime-local" name="created_at" value="<?php echo $tampildata['created_at'];?>">
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tomboltambah" value="Tambah"></td>
        </tr>
    </table>
</form>
</body>
</html>