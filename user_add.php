<?php
include "db/koneksi.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $name = $_POST['name'];
    $query = mysqli_query($koneksi, "INSERT INTO user VALUES ('$id_user','$username','$password','$name')");
    if ($query) {
        echo "<script>
      window.location = 'dashboard.php?dashboard=user&aksi=edit-berhasil';
    </script>";
    echo "Data berhasil disimpan";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menambah user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Menambah user</h1>
                <form action="" method="post">
                   <div class="mb-3">
                    <label for="id_user" class="form-label">id_user</label>
                    <input type="text" id="id_user" name="id_user" class="form-control">
                   </div>
                   <div class="mb-3">
                      <label for="username" class="form-label">username</label>
                      <input type="text" id="username" name="username" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">password</label>
                      <input type="text" id="password" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label for="name" class="form-label">name</label>
                      <input type="text" id="name" name="name" class="form-control">
                    </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>