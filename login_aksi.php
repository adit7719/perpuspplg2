<?php
    session_start();

    include "koneksi.php";

    $username=$_POST['user'];
    $password=$_POST['password'];

    $ambildata=mysqli_query($conn,"select * from tbl_petugas where username='$username' and password='$password'");

    $cek=mysqli_num_rows($ambildata);
    if($cek>0)
    {
        $_SESSION['username']=$username;
        $_SESSION['status']='login';
        header("location:admin/index.php");
    }
    else
    {
        header("location:index.php?pesan=gagal");
    }
?>