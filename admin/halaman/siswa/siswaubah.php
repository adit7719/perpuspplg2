<?php
include "../koneksi.php";
$nis = $_GET['idsiswa'];
$sql = "SELECT * FROM tbl_siswa WHERE nis = $nis";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <h3>Edit Siswa</h3>
    <h5><a href="index.php?page=siswa"><--Kembali</a></h5>
    <form action="halaman/siswa/siswaubah_aksi.php" method="post">
        <?php
        while($data = mysqli_fetch_assoc($query)) {
        ?>
    <table>
        <tr>
            <td>NIS</td>
            <td><input type="number" name="nis" readonly value="<?php echo $data['nis'];?>"></td>
        </tr>

        <tr>
            <td>Nama Siswa</td>
            <td><input type="text" name="namasiswa" value="<?php echo $data['namasiswa'];?>"></td>
        </tr>

        <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" value="<?php echo $data['kelas'];?>"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td><input type="text" name="hp" value="<?php echo $data['hp'];?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="tombolubah" value="Perbarui"></td>
        </tr>
    </table>
    <?php }
    ?>
</form>
</body>
</html>