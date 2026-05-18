<?php
include("../../../koneksi.php");

if (isset($_GET['idbuku'])) {
    $kode = $_GET['idbuku'];

    $sql = "DELETE FROM tbl_buku WHERE kodebuku='$kode'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../../index.php?page=buku');  
    } else {
        die("Gagal menghapus data.");
    }
} else {
    echo "Kode barang tidak ditemukan.";
}

?>  