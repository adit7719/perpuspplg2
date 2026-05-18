<?php
include "../koneksi.php";
$idpinjam = $_GET['idpinjam'];
$ambildata = mysqli_query($conn, "SELECT * FROM tbl_peminjaman 
INNER JOIN tbl_petugas ON tbl_petugas.idpetugas=tbl_peminjaman.idpetugas
INNER JOIN tbl_siswa ON tbl_siswa.idsiswa=tbl_peminjaman.idsiswa
INNER JOIN tbl_buku ON tbl_buku.idbuku=tbl_peminjaman.idbuku
WHERE idpinjam = '$idpinjam'");

while ($tampildata = mysqli_fetch_array($ambildata)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pinjam</title>
</head>
<body>
    <h3>Edit Peminjaman</h3>
    <h5><a href="index.php?page=pinjam"><--Kembali</a></h5>
    <form action="halaman/pinjam/pinjamubah_aksi.php" method="post">
    <table>
        <tr>
            <td><input hidden type="text" name="idpinjam" value="<?php echo $tampildata['idpinjam'];?>" readonly></td>
        </tr>
        <tr>
            <td>Petugas</td>
            <td>
                <select name="idpetugas">
                    <option value="<?php echo $tampildata['idpetugas'] ?>"> <?php echo $tampildata['namapetugas'] ?></option>
                    <?php
                        $petugas_query = mysqli_query($conn, "select * from tbl_petugas");
                        while ($petugas_data = mysqli_fetch_array($petugas_query))
                        {
                    ?>
                        <option value="<?php echo $petugas_data['idpetugas']?>">
                            <?php echo $petugas_data['namapetugas']?>
                        </option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Siswa</td>
            <td>
                <select name="idsiswa">
                    <option value="<?php echo $tampildata['idsiswa'] ?>"> <?php echo $tampildata['namasiswa'] ?></option>
                    <?php
                        $siswa_query = mysqli_query($conn, "select * from tbl_siswa");
                        while ($siswa_data = mysqli_fetch_array($siswa_query))
                        {
                    ?>
                        <option value="<?php echo $siswa_data['idsiswa']?>">
                            <?php echo $siswa_data['namasiswa']?>
                        </option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Buku</td>
            <td>
                <select name="idbuku">
                    <option value="<?php echo $tampildata['idbuku'] ?>"> <?php echo $tampildata['judul'] ?></option>
                    <?php
                        $buku_query = mysqli_query($conn, "select * from tbl_buku");
                        while ($buku_data = mysqli_fetch_array($buku_query))
                        {
                    ?>
                        <option value="<?php echo $buku_data['idbuku']?>">
                            <?php echo $buku_data['judul']?>
                        </option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Waktu Pinjam</td>
            <td>
                <input type="datetime-local" name="updated_at" value="<?php echo $tampildata['updated_at'];?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="tombolubah" value="Perbarui"></td>
        </tr>
    </table>
</form>
<?php }
    ?>
</body>
</html>