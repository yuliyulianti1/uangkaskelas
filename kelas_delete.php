<?php
include "db/koneksi.php";
 
$id_kelas = $_GET['id_kelas'];

$query = mysqli_query($koneksi, "DELETE  FROM kelas WHERE id_kelas='$id_kelas'");

if ($query){
    echo "<script>
      window.location = 'dashboard.php?dashboard=kelas&aksi=edit-berhasil';
    </script>";
}