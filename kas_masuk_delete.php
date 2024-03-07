<?php
include "db/koneksi.php";
 
$id_pembayaran = $_GET['id_pembayaran'];

$query = mysqli_query($koneksi, "DELETE  FROM kas_masuk WHERE id_pembayaran='$id_pembayaran'");

if ($query){
    echo "<script>
      window.location = 'dashboard.php?dasboard=kas_masuk&aksi=edit-berhasil';
    </script>";
}