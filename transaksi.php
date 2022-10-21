<?php
include "header.php";
?>
<!DOCTYPE html>
<html>


<body>
    <h2 style="color:#674747;">Histori Transaksi</h2>
    <table class="table table-hover">
        <thead style="text-align:center;">
            <th>NO</th>
            <th>Nama Member</th>
            <th>Tanggal Transaksi</th>
            <th>Batas Waktu</th>
            <th>Tanggal Bayar</th>
            <th>Status</th>
            <th>Pembayaran</th>
            <th colspan="4">Aksi</th>

        </thead>
        <tbody style="text-align:center;">
            <?php
            include "koneksi.php";
            $qry_histori = mysqli_query($conn, "select *,transaksi.id_transaksi AS id_transaksi from transaksi join member on transaksi.id_member = member.id_member order by transaksi.id_transaksi desc");
            $no = 0;
            while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                $no++;
                $button_lunas = "<a href='lunas.php?id=" . $dt_histori['id_transaksi'] . "' class='btn btn-success' onclick='return confirm(\"Apakah anda yakin?\")'>Lunas</a>";
                $button_proses = "<a href='update_transaksi.php?id=" . $dt_histori['id_transaksi'] . "' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Proses . . .</a>";
                $button_selesai = "<a href='update_transaksi.php?id=" . $dt_histori['id_transaksi'] . "' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Selesai √</a>";
                $button_diambil = "<a href='update_transaksi.php?id=" . $dt_histori['id_transaksi'] . "' class='btn btn-primary' onclick='return confirm(\"Apakah anda yakin?\")'>Diambil</a>";
                $button_cetak_detail = "<a href='detail_transaksi.php?id=" . $dt_histori['id_transaksi'] . "' class='btn btn-warning'>Nota</a>";

            ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $dt_histori['nama_member'] ?></td>
                    <td><?= $dt_histori['tgl'] ?></td>
                    <td><?= $dt_histori['batas_waktu'] ?></td>
                    <td><?= $dt_histori['tgl_bayar'] ?></td>
                    <?php
                    $status = "";
                    if ($dt_histori['status'] == 'baru') {
                        $status = '<span class="badge bg-primary">Baru</span>';
                    } else if ($dt_histori['status'] == 'proses') {
                        $status = '<span class="badge bg-warning">Proses</span>';
                    } else if ($dt_histori['status'] == 'selesai') {
                        $status = '<span class="badge bg-success">Selesai</span>';
                    } else {
                        $status = '<span class="badge bg-info">Diambil</span>';
                    }
                    ?>
                    <td><?= $status ?></td>
                    <?php
                    $status_bayar = "";
                    if ($dt_histori['pembayaran'] == 'lunas') {
                        $status_bayar = '<span class="badge bg-success">Lunas</span>';
                    } else {
                        $status_bayar = '<span class="badge bg-danger">Belum Lunas</span>';
                    }
                    ?>
                    <td><?= $status_bayar ?></td>
                    <?php
                    if ($dt_histori['pembayaran'] == 'belum_lunas') { ?>
                        <td><?= $button_lunas ?></td>
                    <?php
                    }
                    ?>
                    <?php
                    if ($dt_histori['status'] == 'baru') { ?>
                        <td><?= $button_proses ?></td>
                    <?php
                    }
                    ?>
                    <?php
                    if ($dt_histori['status'] == 'proses') { ?>
                        <td><?= $button_selesai ?></td>
                    <?php
                    }
                    ?>
                    <?php
                    if ($dt_histori['status'] == 'selesai') { ?>
                        <td><?= $button_diambil ?></td>
                    <?php
                    }
                    ?>
                    <td>
                        <?= $button_cetak_detail ?>
                        <a href="hapus_histori.php?id_transaksi=<?= $dt_histori['id_transaksi'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </tbody>

    </table>
    <div>

    </div>
</body>

</html>