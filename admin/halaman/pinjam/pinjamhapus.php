<?php
include("../../../koneksi.php");

if (isset($_GET['idpinjam'])) {
    $id = $_GET['idpinjam'];

    $sql = "DELETE FROM tbl_peminjaman WHERE idpinjam='$id'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../../index.php?page=pinjam');  
    } else {
        die("Gagal menghapus data.");
    }
} else {
    echo "Kode barang tidak ditemukan.";
}

?>  