<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-kas_masuk.xls");
?>

<table class="table mt-3">
    <tr>
             <td>id_pembayaran</td>
             <td>nis</td>
             <td>tanggal_pembayaran</td>
             <td>total_pembayaran</td>
             <td>status_approval</td>
             <td>bukti_bayar</td>
             <td>aksi</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM kas_masuk");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td><?php echo $data['id_pembayaran'] ?></td>
              <td><?php echo $data['nis'] ?></td>
              <td><?php echo $data['tanggal_pembayaran'] ?></td>
              <td><?php echo $data['total_pembayaran'] ?></td>
              <td><?php echo $data['status_approval'] ?></td>
              <td><?php echo $data['bukti_bayar'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>