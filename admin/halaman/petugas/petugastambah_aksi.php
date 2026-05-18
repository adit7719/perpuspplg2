<?php
include("../../../koneksi.php");

if(isset($_POST['tomboltambah'])) {
    $nama = $_POST['namapetugas'];
    $user = $_POST['username'];
    $hp = $_POST['hp'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpass'];

    if($password != $cpassword) {
        header('Location: ../../index.php?page=petugas');
    }

    $sql = "INSERT INTO tbl_petugas (namapetugas, username, hp, password) VALUES ('$nama', '$user', '$hp', '$password')";
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('Location: ../../index.php?page=petugas');
    } else {
        header('Location: ../../index.php?page=petugas');
    }
} else {
    die("Akses dilarang...");
}

?>