<?php
include "db/koneksi.php";

$id_schedule = $_GET['id_schedule'];

$pilih = mysqli_query($koneksi, "SELECT * FROM schedule_pembayaran WHERE 
id_schedule='$id_schedule'");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_schedule = $_POST['id_schedule'];
    $nis = $_POST['nis'];
    $id_pembayaran = $_POST['id_pembayaran'];
    $jenis_pembayaran = $_POST['jenis_pembayaran'];
    $nama_pembayaran = $_POST['nama_pembayaran'];
    $nominal = $_POST['nominal'];
    $jatuh_tempo = $_POST['jatuh_tempo'];
    $status_pembayaran = $_POST['status_pembayaran'];

    $query = mysqli_query($koneksi, "UPDATE schedule_pembayaran SET  nis='$nis', id_pembayaran='$id_pembayaran', jenis_pembayaran='$jenis_pembayaran', nama_pembayaran='$nama_pembayaran', nominal='$nominal', jatuh_tempo='$jatuh_tempo', status_pembayaran='$status_pembayaran'
    WHERE id_schedule='$id_schedule'");
    if ($query) {
      echo "<script>
      window.location = 'dashboard.php?dashboard=schedule_pembayaran&aksi=edit-berhasil';
    </script>";
    }
}
?>

  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mengedit schedule_pembayaran</h1>
                <?php
                  while ($data = mysqli_fetch_array($pilih)){
                  ?>
                <form action="" method="post">
                   <div class="mb-3">
                    <label for="id_schedule" class="form-label">id_schedule</label>
                    <input type="text" id="id_schedule" name="id_schedule" class="form-control"
                    value="<?php echo $data['id_schedule'] ?>">
                   </div>
                   <div class="mb-3">
                      <label for="nis" class="form-label">nis</label>
                      <input type="text" id="nis" name="nis" class="form-control"
                      value="<?php echo $data['nis'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="id_pembayaran" class="form-label">id_pembayaran</label>
                      <input type="text" id="id_pembayaran" name="id_pembayaran" class="form-control"
                      value="<?php echo $data['id_pembayaran'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="jenis_pembayaran" class="form-label">jenis_pembayaran</label>
                      <input type="text" id="jenis_pembayaran" name="jenis_pembayaran" class="form-control"
                      value="<?php echo $data['jenis_pembayaran'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="nama_pembayaran" class="form-label">nama_pembayaran</label>
                      <input type="text" id="nama_pembayaran" name="nama_pembayaran" class="form-control"
                      value="<?php echo $data['nama_pembayaran'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="nominal" class="form-label">nominal</label>
                      <input type="text" id="nominal" name="nominal" class="form-control"
                      value="<?php echo $data['nominal'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="jatuh_tempo" class="form-label">jatuh_tempo</label>
                      <input type="date" id="jatuh_tempo" name="jatuh_tempo" class="form-control"
                      value="<?php echo $data['jatuh_tempo'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="status_pembayaran" class="form-label">status_pembayaran</label>
                      <input type="text" id="status_pembayaran" name="status_pembayaran" class="form-control"
                      value="<?php echo $data['status_pembayaran'] ?>">
                    </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                   <?php } ?>
                </form>
            </div>
        </div>
    </div>
