<?php
include "db/koneksi.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_pembayaran= $_POST['id_pembayaran'];
    $nis = $_POST['nis'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $total_pembayaran = $_POST['total_pembayaran'];
    $status_approval = $_POST['status_approval'];
    $bukti_bayar = $_POST['bukti_bayar'];

    $query = mysqli_query($koneksi, "INSERT INTO kas_masuk VALUES ('$id_pembayaran','$nis','$tanggal_pembayaran','$total_pembayaran','$status_approval','$bukti_bayar')");
    if ($query) {
        echo "<script>
      window.location = 'dashboard.php?dashboard=kas_masuk&aksi=edit-berhasil';
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
    <title>Menambah kas_masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Menambah kas_masuk</h1>
                <form action="" method="post">
                   <div class="mb-3">
                    <label for="id_pembayaran" class="form-label">id_pembayaran</label>
                    <input type="text" id="id_pembayaran" name="id_pembayaran" class="form-control">
                   </div>
                   <div class="mb-3">
                      <label for="nis" class="form-label">nis</label>
                      <input type="text" id="nis" name="nis" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="tanggal_pembayaran" class="form-label">tanggal_pembayaran</label>
                      <input type="text" id="tanggal_pembayaran" name="tanggal_pembayaran" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="total_pembayaran" class="form-label">total_pembayaran</label>
                      <input type="text" id="total_pembayaran" name="total_pembayaran" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="status_approval" class="form-label">status_approval</label>
                      <input type="text" id="status_approval" name="status_approval" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="bukti_bayar" class="form-label">bukti_bayar</label>
                      <input type="text" id="bukti_bayar" name="bukti_bayar" class="form-control">
                    </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>