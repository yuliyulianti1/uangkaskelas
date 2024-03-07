<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-schedule_pembayaran.xls");
?>

<table class="table mt-3">
    <tr>
    <td>id_schedule</td>
             <td>nis</td>
             <td>id_pembayaran</td>
             <td>jenis_pembayaran</td>
             <td>nama_pembayaran</td>
             <td>nominal</td>
             <td>jatuh_tempo</td>
             <td>status_pembayaran</td>
             <td>aksi</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM schedule_pembayaran");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td><?php echo $data['id_schedule'] ?></td>
              <td><?php echo $data['nis'] ?></td>
              <td><?php echo $data['id_pembayaran'] ?></td>
              <td><?php echo $data['jenis_pembayaran'] ?></td>
              <td><?php echo $data['nama_pembayaran'] ?></td>
              <td><?php echo $data['nominal'] ?></td>
              <td><?php echo $data['jatuh_tempo'] ?></td>
              <td><?php echo $data['status_pembayaran'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>