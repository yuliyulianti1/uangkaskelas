<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-kelas.xls");
?>

<table class="table mt-3">
    <tr>
    <td>id_kelas</td>
             <td>kelas</td>
             <td>tahun_ajar</td>
             <td>wali_kelas</td>
             <td>jumlah_murid</td>
             <td>status</td>
             <td>aksi</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM kelas");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td><?php echo $data['id_kelas'] ?></td>
              <td><?php echo $data['kelas'] ?></td>
              <td><?php echo $data['tahun_ajar'] ?></td>
              <td><?php echo $data['wali_kelas'] ?></td>
              <td><?php echo $data['jumlah_murid'] ?></td>
              <td><?php echo $data['status'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>