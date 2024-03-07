<?php
include "db/koneksi.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_schedule = $_POST['id_schedule'];
    $nis = $_POST['nis'];
    $id_pembayaran = $_POST['id_pembayaran'];
    $jenis_pembayaran = $_POST['jenis_pembayaran'];
    $nama_pembayaran = $_POST['nama_pembayaran'];
    $nominal = $_POST['nominal'];
    $jatuh_tempo = $_POST['jatuh_tempo'];
    $status_pembayaran = $_POST['status_pembayaran'];

    $query = mysqli_query($koneksi, "INSERT INTO schedule_pembayaran VALUES ('$id_schedule','$nis','$id_pembayaran','$jenis_pembayaran','$nama_pembayaran','$nominal','$jatuh_tempo','$status_pembayaran')");
    if ($query) {
        echo "<script>
      window.location = 'dashboard.php?dashboard=schedule_pembayaran&aksi=edit-berhasil';
    </script>";
    echo "Berhasil";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menambah schedule_pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Menambah schedule_pembayaran</h1>
                <form action="" method="post">
                   <div class="mb-3">
                    <label for="id_schedule" class="form-label">id_schedule</label>
                    <input type="text" id="id_schedule" name="id_schedule" class="form-control">
                   </div>
                   <div class="mb-3">
                      <label for="nis" class="form-label">nis</label>
                      <input type="text" id="nis" name="nis" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="id_pembayaran" class="form-label">id_pembayaran</label>
                      <input type="text" id="id_pembayaran" name="id_pembayaran" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="jenis_pembayaran" class="form-label">jenis_pembayaran</label>
                      <input type="text" id="jenis_pembayaran" name="jenis_pembayaran" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="nama_pembayaran" class="form-label">nama_pembayaran</label>
                      <input type="text" id="nama_pembayaran" name="nama_pembayaran" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="nominal" class="form-label">nominal</label>
                      <input type="text" id="nominal" name="nominal" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="jatuh_tempo" class="form-label">jatuh_tempo</label>
                      <input type="text" id="jatuh_tempo" name="jatuh_tempo" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="status_pembayaran" class="form-label">status_pembayaran</label>
                      <input type="text" id="status_pembayaran" name="status_pembayaran" class="form-control">
                    </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>