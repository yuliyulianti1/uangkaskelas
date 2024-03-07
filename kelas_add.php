<?php
include "db/koneksi.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_kelas = $_POST['id_kelas'];
    $kelas = $_POST['kelas'];
    $tahun_ajar = $_POST['tahun_ajar'];
    $wali_kelas = $_POST['wali_kelas'];
    $jumlah_murid = $_POST['jumlah_murid'];
    $status = $_POST['status'];

    $query = mysqli_query($koneksi, "INSERT INTO kelas VALUES ('$id_kelas','$kelas','$tahun_ajar','$wali_kelas','$jumlah_murid','$status')");
    if ($query) {
        echo "<script>
      window.location = 'dashboard.php?dashboard=kelas&aksi=edit-berhasil';
    </script>";
    echo "berhasil";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menambah kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Menambah kelas</h1>
                <form action="" method="post">
                   <div class="mb-3">
                    <label for="id_kelas" class="form-label">id_kelas</label>
                    <input type="text" id="id_kelas" name="id_kelas" class="form-control">
                   </div>
                   <div class="mb-3">
                      <label for="kelas" class="form-label">kelas</label>
                      <input type="text" id="kelas" name="kelas" class="form-control">
                   </div>
                   <div class="mb-3">
                      <label for="tahun_ajar" class="form-label">tahun_ajar</label>
                      <input type="text" id="tahun_ajar" name="tahun_ajar" class="form-control">
                   </div>
                   <div class="mb-3">
                      <label for="wali_kelas" class="form-label">wali_kelas</label>
                      <input type="text" id="wali_kelas" name="wali_kelas" class="form-control">
                   </div>
                   <div class="mb-3">
                     <label for="jumlah_murid" class="form-label">jumlah_murid</label>
                      <input type="text" id="jumlah_murid" name="jumlah_murid" class="form-control">
                   </div>
                   <div class="mb-3">
                      <label for="status" class="form-label">status</label>
                      <input type="text" id="status" name="status" class="form-control">
                   </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>