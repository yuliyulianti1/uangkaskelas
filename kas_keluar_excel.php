<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-kas_keluar.xls");
?>

<table class="table mt-3">
    <tr>
    <td>nama_barang</td>
             <td>tanggal</td>
             <td>keterangan</td>
             <td>jumlah</td>
             <td>aksi</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM kas_keluar");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td><?php echo $data['nama_barang'] ?></td>
              <td><?php echo $data['tanggal'] ?></td>
              <td><?php echo $data['keterangan'] ?></td>
              <td><?php echo $data['jumlah'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>