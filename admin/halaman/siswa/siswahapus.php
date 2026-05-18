<?php
include("../../../koneksi.php");

if (isset($_GET['idsiswa'])) {
    $nis = $_GET['idsiswa'];

    $sql = "DELETE FROM tbl_siswa WHERE nis='$nis'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../../index.php?page=siswa');  
    } else {
        die("Gagal menghapus data.");
    }
} else {
    echo "Kode barang tidak ditemukan.";
}

?>  