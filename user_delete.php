<?php
include "db/koneksi.php";
 
$id_user = $_GET['id_user'];

$query = mysqli_query($koneksi, "DELETE  FROM user WHERE id_user='$id_user'");
echo $id_user;
if ($query){
    echo "<script>
    window.location = 'dashboard.php?dashboard=user&aksi=edit-berhasil';
  </script>";
}