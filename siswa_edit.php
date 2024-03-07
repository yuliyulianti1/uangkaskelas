<?php
include "db/koneksi.php";

$nis = $_GET['nis'];

$pilih = mysqli_query($koneksi, "SELECT * FROM siswa WHERE 
nis='$nis'");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $ttl = $_POST['ttl'];
    $nama_orang_tua = $_POST['nama_orang_tua'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];

    $query = mysqli_query($koneksi, "UPDATE siswa SET nama_siswa='$nama_siswa', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', ttl='$ttl',
    nama_orang_tua='$nama_orang_tua', alamat='$alamat', no_telepon='$no_telepon' WHERE nis='$nis'");
    if ($query) {
    echo "<script>
      window.location = 'dashboard.php?dashboard=siswa&aksi=edit-berhasil';
    </script>";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mengedit siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mengedit siswa</h1>
                <form action="" method="post">
                <?php
                  while ($data = mysqli_fetch_array($pilih)){
                  ?>
                   <div class="mb-3">
                    <label for="nis" class="form-label">nis</label>
                    <input type="text" id="nis" name="nis" class="form-control"
                    value="<?php echo $data['nis'] ?>">
                   </div>
                   <div class="mb-3">
                      <label for="nama_siswa" class="form-label">nama_siswa</label>
                      <input type="text" id="nama_siswa" name="nama_siswa" class="form-control"
                      value="<?php echo $data['nama_siswa'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="jurusan" class="form-label">jurusan</label>
                      <input type="text" id="jurusan" name="jurusan" class="form-control"
                      value="<?php echo $data['jurusan'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="jenis_kelamin" class="form-label">jenis_kelamin</label>
                      <select  name="jenis_kelamin" class="form-select"
                      value="<?php echo $data['jenis_kelamin'] ?>" id="">
                        <option value="laki-laki">laki-laki</option>
                        <option value="perempuan">perempuan</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="ttl" class="form-label">ttl</label>
                      <input type="text" id="ttl" name="ttl" class="form-control"
                      value="<?php echo $data['ttl'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="nama_orang_tua" class="form-label">nama_orang_tua</label>
                      <input type="text" id="nama_orang_tua" name="nama_orang_tua" class="form-control"
                      value="<?php echo $data['nama_orang_tua'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="alamat" class="form-label">alamat</label>
                      <input type="text" id="alamat" name="alamat" class="form-control"
                      value="<?php echo $data['alamat'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="no_telepon" class="form-label">no_telepon</label>
                      <input type="text" id="no_telepon" name="no_telepon" class="form-control"
                      value="<?php echo $data['no_telepon'] ?>">
                    </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                   <button type="submit" class="btn btn-primary">Reset</button>
                   <?php } ?>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>