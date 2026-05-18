<?php
include("../../../koneksi.php");

if(isset($_POST['tomboltambah'])) {
    $petugas = $_POST['petugas'];
    $siswa = $_POST['siswa'];
    $buku = $_POST['buku'];

    $sql = "INSERT INTO tbl_peminjaman (idpetugas, idsiswa, idbuku) VALUES ('$petugas', '$siswa', '$buku')";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: ../../index.php?page=pinjam');
    } else {
        header('Location: ../../index.php?page=pinjam');
    }
} else {
    die("Akses dilarang...");
}

?>