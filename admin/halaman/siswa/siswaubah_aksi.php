<?php 
include '../../../koneksi.php'; 

if (isset($_POST['tombolubah'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['namasiswa'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    }
     
    $sql = "UPDATE tbl_siswa SET namasiswa='$nama', kelas='$kelas', alamat='$alamat', hp='$hp' where nis='$nis'";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: ../../index.php?page=siswa');
    } else {
        header('Location: ../../index.php?page=siswa');
    }
?>