<?php
include "db/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data-siswa.xls");
?>

<table class="table mt-3">
    <tr>
    <td>nis</td>
             <td>nama_siswa</td>
             <td>jurusan</td>
             <td>jenis_kelamin</td>
             <td>ttl</td>
             <td>nama_orang_tua</td>
             <td>alamat</td>
             <td>no_telepon</td>
             <td>aksi</td>
    </tr>

    <?php $query = mysqli_query($koneksi, "SELECT * FROM siswa");  ?>

    <tbody>
        <?php while ($data = mysqli_fetch_array($query)) : ?>
            <tr>
            <td><?php echo $data['nis'] ?></td>
              <td><?php echo $data['nama_siswa'] ?></td>
              <td><?php echo $data['jurusan'] ?></td>
              <td><?php echo $data['jenis_kelamin'] ?></td>
              <td><?php echo $data['ttl'] ?></td>
              <td><?php echo $data['nama_orang_tua'] ?></td>
              <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['no_telepon'] ?></td>
            </tr>
        <?php endwhile ?>
    </tbody>
</table>