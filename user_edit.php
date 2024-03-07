<?php
include "db/koneksi.php";

$id_user = $_GET['id_user'];

$pilih = mysqli_query($koneksi, "SELECT * FROM user WHERE 
id_user='$id_user'");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_user= $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $query = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', name='$name'
    WHERE id_user='$id_user'");
    if ($query) {
      echo "<script>
      window.location = 'dashboard.php?dashboard=user&aksi=edit-berhasil';
    </script>";
        
    }
}
?>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mengedit user</h1>
                <form action="" method="post">
                <?php
                  while ($data = mysqli_fetch_array($pilih)){
                  ?>
                  <input type="hidden" id="id_user" name="id_user" class="form-control"
                    value="<?php echo $data['id_user'] ?>">
                   <div class="mb-3">
                      <label for="username" class="form-label">username</label>
                      <input type="text" id="username" name="username" class="form-control"
                      value="<?php echo $data['username'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">password</label>
                      <input type="text" id="password" name="password" class="form-control"
                      value="<?php echo $data['password'] ?>">
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">name</label>
                      <input type="text" id="name" name="name" class="form-control"
                      value="<?php echo $data['name'] ?>">
                    </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                   <?php } ?>
                </form>
            </div>
        </div>
    </div>
   