<?php
include "db/koneksi.php";

$id_kelas = $_GET['id_kelas'];

$pilih = mysqli_query($koneksi, "SELECT * FROM kelas WHERE 
id_kelas='$id_kelas'");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $kelas = $_POST['kelas'];
  $tahun_ajar = $_POST['tahun_ajar'];
  $wali_kelas = $_POST['wali_kelas'];
  $jumlah_murid = $_POST['jumlah_murid'];
  $status = $_POST['status'];

  $query = mysqli_query($koneksi, "UPDATE kelas SET kelas='$kelas',tahun_ajar='$tahun_ajar',wali_kelas='$wali_kelas',jumlah_murid='$jumlah_murid',status='$status'
    WHERE id_kelas='$id_kelas'");
  if ($query) {
    echo "<script>
      window.location = 'dashboard.php?dashboard=kelas&aksi=edit-berhasil';</script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mengedit kelas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Mengedit kelas</h1>
        <form action="" method="post">
          <?php
          while ($data = mysqli_fetch_array($pilih)) {
          ?>
            <div class="mb-3">
              <label for="kelas" class="form-label">kelas</label>
              <input type="text" id="kelas" name="kelas" class="form-control" value="<?php echo $data['kelas'] ?>">
            </div>
            <div class="mb-3">
              <label for="tahun_ajar" class="form-label">tahun_ajar</label>
              <input type="text" id="tahun_ajar" name="tahun_ajar" class="form-control" value="<?php echo $data['tahun_ajar'] ?>">
            </div>
            <div class="mb-3">
              <label for="wali_kelas" class="form-label">wali_kelas</label>
              <input type="text" id="wali_kelas" name="wali_kelas" class="form-control" value="<?php echo $data['wali_kelas'] ?>">
            </div>
            <div class="mb-3">
              <label for="jumlah_murid" class="form-label">jumlah_murid</label>
              <input type="text" id="jumlah_murid" name="jumlah_murid" class="form-control" value="<?php echo $data['jumlah_murid'] ?>">
            </div>
            <div class="mb-3">
              <label for="status" class="form-label">status</label>
              <input type="text" id="status" name="status" class="form-control" value="<?php echo $data['status'] ?>">
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