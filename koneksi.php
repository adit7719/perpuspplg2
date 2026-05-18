<?php
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "perpuspplg1";

    $conn=mysqli_connect($host,$user,$password,$dbname);
    if(!$conn) {
        echo "Koneksi Gagal Guys...!!!";
    }
?>