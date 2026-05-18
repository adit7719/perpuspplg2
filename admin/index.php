<?php
    session_start();
    if($_SESSION['status']!="login")
    {
        header("location:../index.php?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan | SMK Negeri 1 Sayung</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
        <div class = "kepala">
            
        </div>
        <div class = "menu">
            <ul class = "list_menu">
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=buku">Data Buku</a></li>
                <li><a href="index.php?page=siswa">Siswa</a></li>
                <li><a href="index.php?page=pinjam">Peminjaman</a></li>
                <li><a href="index.php?page=petugas">Petugas</a></li>
                <li><a href="index.php?page=logout">Logout</a></li>
            </ul>
        </div>
        <div>
            <div class ="sisikiri">
                <h2>Visi</h2>
                <p>Indonesia Emas</p>
                <p></p>
                <p></p>
                <h2>Misi</h2>
                <ol>
                    <li>Terwujudnya layanan prima</li>
                    <li>Dengan MBG kita sejahtera</li>
                </ol>
            </div>
            <div class ="konten">
                <?php
                if (isset($_GET['page'])) {
                    switch ($_GET['page']) {
                        case 'home':
                            include "halaman/home.php";
                            break;
                        case 'buku':
                            include "halaman/buku/buku.php";
                            break;
                        case 'bukutambah':
                            include "halaman/buku/bukutambah.php";
                            break;
                        case 'bukuubah':
                            include "halaman/buku/bukuubah.php";
                            break;
                        case 'siswa':
                            include "halaman/siswa/siswa.php";
                            break;
                        case 'siswatambah':
                            include "halaman/siswa/siswatambah.php";
                            break;
                        case 'siswaubah':
                            include "halaman/siswa/siswaubah.php";
                            break;
                        case 'pinjam':
                            include "halaman/pinjam/pinjam.php";
                            break;
                        case 'pinjamtambah':
                            include "halaman/pinjam/pinjamtambah.php";
                            break;
                        case 'pinjamubah':
                            include "halaman/pinjam/pinjamubah.php";
                            break;
                        case 'petugas':
                            include "halaman/petugas/petugas.php";
                            break;
                        case 'petugastambah':
                            include "halaman/petugas/petugastambah.php";
                            break;
                        case 'petugasubah':
                            include "halaman/petugas/petugasubah.php";
                            break;
                        case 'logout':
                            include "logout.php";
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                } else {

                }
                ?>
            </div>
        </div>
        <div class ="kaki">
            Copyright @2026 | SMK Negeri 1 Sayung
        </div>
    </div>
</body>
</html>