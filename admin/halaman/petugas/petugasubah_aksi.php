<?php 
include '../../../koneksi.php'; 

if (isset($_POST['tombolubah'])) {
    $idpetugas = $_POST['idpetugas'];
    $nama = $_POST['namapetugas'];
    $user = $_POST['username'];
    $hp = $_POST['hp'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpass'];
    }
     
    if($password != $cpassword) {
        header('Location: ../../index.php?page=petugas');
    }

    $sql = "UPDATE tbl_petugas SET namapetugas='$nama', username='$user', hp='$hp', password='$password' where idpetugas='$idpetugas'";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: ../../index.php?page=petugas');
    } else {
        header('Location: ../../index.php?page=petugas');
    }
?>