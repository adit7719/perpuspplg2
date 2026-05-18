<?php
include "../koneksi.php";

$query = "SELECT * FROM tbl_siswa";
$data = mysqli_query($conn, $query);

?>

<h3>
    <center>Daftar Siswa</center>
</h3>
<p>
<h3>
    <center>SMK Negeri 1 Sayung</center>
</h3>
<h5><a href="index.php?page=siswatambah"> [+]Tambah Siswa</a></h5>

<table align="center" border="1">
    <tr>
        <th>No</th>
        <th>NIS</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>No. HP</th>
        <th>Aksi</th>
    </tr>
    <?php
    $nomor = 1;
    while($row = mysqli_fetch_assoc($data)) {
        echo "<tr>";
        echo "<td> $nomor </td>";
        echo "<td>". $row['nis'] ."</td>";
        echo "<td>". $row['namasiswa'] ."</td>";
        echo "<td>". $row['kelas'] ."</td>";
        echo "<td>". $row['alamat'] ."</td>";
        echo "<td>". $row['hp'] ."</td>";
        
        echo "<td>";
        echo "<a href='../admin/index.php?page=siswaubah&idsiswa=".$row['nis'] . "'>Edit</a> | ";
        echo "<a href='halaman/siswa/siswahapus.php?idsiswa=".$row['nis'] . "'onClick='return confirm(\"Apakah anda yakin ingin menghapus data buku ini?\")'>Hapus</a></td>";
        echo "</td>";
        echo "</tr>";
        $nomor++;
    }
    ?>
</table>