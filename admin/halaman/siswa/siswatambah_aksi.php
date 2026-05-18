<?php
include("../../../koneksi.php");

if(isset($_POST['tomboltambah'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['namasiswa'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];

    $sql = "INSERT INTO tbl_siswa (nis, namasiswa, kelas, alamat, hp) VALUES ('$nis', '$nama', '$kelas', '$alamat', '$hp')";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: ../../index.php?page=siswa');
    } else {
        header('Location: ../../index.php?page=siswa');
    }
} else {
    die("Akses dilarang...");
}

?>