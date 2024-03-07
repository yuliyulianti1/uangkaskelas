<?php
include "db/koneksi.php";

$nama_barang = $_GET['nama_barang'];

$pilih = mysqli_query($koneksi, "SELECT * FROM kas_keluar WHERE nama_barang='$nama_barang'");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama = $_POST['nama_barang'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    $jumlah = $_POST['jumlah'];

    $query = mysqli_query($koneksi, "UPDATE kas_keluar SET nama_barang='$nama_barang', tanggal='$tanggal', keterangan='$keterangan', jumlah='$jumlah'
    WHERE nama_barang='$nama_barang'");
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
                <?php
                  while ($data = mysqli_fetch_array($pilih)){
                  ?>
                <form action="" method="post">
                   <div class="mb-3">
                    <label for="nama_barang" class="form-label">nama_barang</label>
                    <input type="text" id="nama_barang" name="nama_barang" class="form-control"
                    value="<?php echo $data['nama_barang'] ?>">
                   </div>
                   <div class="mb-3">
                    <label for="tanggal" class="form-label">tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control"
                    value="<?php echo $data['tanggal'] ?>">
                   </div>
                   <div class="mb-3">
                    <label for="keterangan" class="form-label">keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="form-control"
                    value="<?php echo $data['keterangan'] ?>">
                   </div>
                   <div class="mb-3">
                      <label for="jumlah" class="form-label">jumlah</label>
                      <input type="text" id="jumlah" name="jumlah" class="form-control"
                      value="<?php echo $data['jumlah'] ?>">
                    </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                   <?php } ?>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

