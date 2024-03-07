<?php
include "db/koneksi.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama_barang = $_POST['nama_barang'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    $jumlah = $_POST['jumlah'];
    $query = mysqli_query($koneksi, "INSERT INTO kas_keluar VALUES ('$nama_barang','$tanggal','$keterangan','$jumlah')");
    if ($query) {
        echo "<script>
      window.location = 'dashboard.php?dashboard=kas_keluar&aksi=edit-berhasil';
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
    <title>mengedit kas_keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mengedit kas_keluar</h1>
                <form action="" method="post">
                   <div class="mb-3">
                    <label for="nama_barang" class="form-label">nama_barang</label>
                    <input type="text" id="nama_barang" name="nama_barang" class="form-control">
                   </div>
                   <div class="mb-3">
                    <label for="tanggal" class="form-label">tanggal</label>
                    <input type="text" id="tanggal" name="tanggal" class="form-control">
                   </div>
                   <div class="mb-3">
                    <label for="keterangan" class="form-label">keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control">
                   </div>
                   <div class="mb-3">
                      <label for="jumlah" class="form-label">jumlah</label>
                      <input type="text" id="jumlah" name="jumlah" class="form-control">
                    </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

