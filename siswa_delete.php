<?php
include "db/koneksi.php";
 
$nis = $_GET['nis'];

$query = mysqli_query($koneksi, "DELETE  FROM siswa WHERE nis='$nis'");

if ($query){
    echo "<script>
      window.location = 'dashboard.php?dashboard=siswa-edit&aksi=edit-berhasil';
    </script>";
}