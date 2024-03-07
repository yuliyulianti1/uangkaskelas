<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-user.xls");
?>

<table class="table mt-3">
    <tr>
             <td>id_user</td>
             <td>username</td>
             <td>password</td>
             <td>name</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM user");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td><?php echo $data['id_user'] ?></td>
              <td><?php echo $data['username'] ?></td>
              <td><?php echo $data['password'] ?></td>
              <td><?php echo $data['name'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>