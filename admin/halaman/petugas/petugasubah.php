<?php
include "../koneksi.php";
$id = $_GET['idpetugas'];
$sql = "SELECT * FROM tbl_petugas WHERE idpetugas = $id";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Petugas</title>
</head>
<body>
    <h3>Edit Petugas</h3>
    <h5><a href="index.php?page=petugas"><--Kembali</a></h5>
    <form action="halaman/petugas/petugasubah_aksi.php" method="post">
        <?php
        while($data = mysqli_fetch_assoc($query)) {
        ?>
    <table>

        <input type="text" name="idpetugas" hidden value="<?php echo $data['idpetugas'];?>"></td>

        <tr>
            <td>Nama Petugas</td>
            <td><input type="text" name="namapetugas" value="<?php echo $data['namapetugas'];?>"></td>
        </tr>

        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?php echo $data['username'];?>"></td>
        </tr>

        <tr>
            <td>No. HP</td>
            <td><input type="number" name="hp" value="<?php echo $data['hp'];?>"></td>
        </tr>

        <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="<?php echo $data['password'];?>"></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="cpass" value="<?php echo $data['password'];?>"></td>
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