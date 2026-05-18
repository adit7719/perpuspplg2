<?php
include("../../../koneksi.php");

if(isset($_POST['tomboltambah'])) {
    $kode = $_POST['kodebuku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];

    $sql = "INSERT INTO tbl_buku (kodebuku, judul, pengarang, penerbit) VALUES ('$kode', '$judul', '$pengarang', '$penerbit')";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: ../../index.php?page=buku');
    } else {
        header('Location: ../../index.php?page=buku');
    }
} else {
    die("Akses dilarang...");
}

?>