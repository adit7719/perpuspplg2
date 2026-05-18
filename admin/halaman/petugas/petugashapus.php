<?php
include("../../../koneksi.php");

if (isset($_GET['idpetugas'])) {
    $id = $_GET['idpetugas'];

    $sql = "DELETE FROM tbl_petugas WHERE idpetugas='$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../../index.php?page=petugas');  
    } else {
        die("Gagal menghapus data.");
    }
} else {
    echo "Kode barang tidak ditemukan.";
}

?>  