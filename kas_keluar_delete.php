<?php
include "db/koneksi.php";
 
$nama_barang = $_GET['nama_barang'];

$query = mysqli_query($koneksi, "DELETE  FROM kas_keluar WHERE nama_barang='$nama_barang'");

if ($query){
    echo "<script>
      window.location = 'dashboard.php?dashboard=kas_keluar&aksi=edit-berhasil';
    </script>";
}