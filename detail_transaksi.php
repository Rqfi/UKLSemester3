<?php
include "header.php";
include "koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <table class="table table-striped">
        <thead style="text-align:center;">
            <?php
            $qry_transaksi = mysqli_query($conn, "select * from transaksi join member on transaksi.id_member = member.id_member where transaksi.id_transaksi = '" . $_GET['id'] . "'");
            $dt_transaksi = mysqli_fetch_array($qry_transaksi);
            ?>
            <h2 style="color:#674747;"> Nota</h2>
            <h5 style="margin-left:5px;">Nama Member : <?= $dt_transaksi['nama_member'] ?></h5>
            <h6 style="float:right;">Tanggal : <?= $dt_transaksi['tgl'] ?></h6>
            <tr>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Jumlah/kg</th>
                
                <th>Total</th>
            </tr>
        </thead>
        <tbody style="text-align:center;">
            <?php
            $qry_detail = mysqli_query($conn, "select * from detail_transaksi join paket on detail_transaksi.id_paket = paket.id_paket where detail_transaksi.id_transaksi = '" . $_GET['id'] . "'");
            $total = 0;
            while ($dt_detail = mysqli_fetch_array($qry_detail)) {
            ?>
                <tr>
                    <td><?= $dt_detail['jenis'] ?></td>
                    <td><?= $dt_detail['harga'] ?></td>
                    <td><?= $dt_detail['qty'] ?></td>
                    
                    <td><?= $dt_detail['harga'] * $dt_detail['qty'] ?></td>
                    <?php
                    $total += $dt_detail['harga'] * $dt_detail['qty'];
                    ?>
                </tr>
            <?php
            }
            ?>
            <tr>
                <td><b>Total Pembayaran</b></td>
                <td></td>
                <td></td>
                <td><b><?= $total ?></b></td>
            </tr>
        </tbody>
    </table>
    <h5>Status : </h5>
    <h4><b><?= $dt_transaksi['pembayaran'] ?></b></h4>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
<script>
    window.print()
</script>

</html>