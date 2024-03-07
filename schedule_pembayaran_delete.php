<?php
include "db/koneksi.php";
 
$id_schedule = $_GET['id_schedule'];

$query = mysqli_query($koneksi, "DELETE  FROM schedule_pembayaran WHERE id_schedule='$id_schedule'");

if ($query){
    echo "<script>
      window.location = 'dashboard.php?dashboard=schedule_pembayaran&aksi=edit-berhasil';
    </script>";
}