<?php
include "../koneksi.php";

$query = "SELECT * FROM tbl_petugas";
$data = mysqli_query($conn, $query);

?>

<h3>
    <center>Daftar Petugas</center>
</h3>
<p>
<h3>
    <center>SMK Negeri 1 Sayung</center>
</h3>
<h5><a href="index.php?page=petugastambah"> [+]Tambah Petugas</a></h5>

<table align="center" border="1">
    <tr>
        <th>No</th>
        <th>Nama Petugas</th>
        <th>Username</th>
        <th>No. HP</th>
        <th>Aksi</th>
    </tr>
    <?php
    $nomor = 1;
    while($row = mysqli_fetch_assoc($data)) {
        echo "<tr>";
        echo "<td> $nomor </td>";
        echo "<td>". $row['namapetugas'] ."</td>";
        echo "<td>". $row['username'] ."</td>";
        echo "<td>". $row['hp'] ."</td>";
        
        echo "<td>";
        echo "<a href='../admin/index.php?page=petugasubah&idpetugas=".$row['idpetugas'] . "'>Edit</a> | ";
        echo "<a href='halaman/petugas/petugashapus.php?idpetugas=".$row['idpetugas'] . "'onClick='return confirm(\"Apakah anda yakin ingin menghapus data buku ini?\")'>Hapus</a></td>";
        echo "</td>";
        echo "</tr>";
        $nomor++;
    }
    ?>
</table>