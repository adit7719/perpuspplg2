<?php 
include '../../../koneksi.php'; 

if (isset($_POST['tombolubah'])) {
    $kode = $_POST['kodebuku']; 
    $judul = $_POST['judul']; 
    $pengarang = $_POST['pengarang']; 
    $penerbit = $_POST['penerbit'];
    }
     
    $sql = "UPDATE tbl_buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit' where kodebuku='$kode'";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: ../../index.php?page=buku');
    } else {
        header('Location: ../../index.php?page=buku');
    }
?>