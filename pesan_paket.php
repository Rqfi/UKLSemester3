<?php
include "header.php";
include "koneksi.php";
$qry_detail_paket = mysqli_query($conn, "select * from paket where id_paket = '" . $_GET['id_paket'] . "'");
$dt_paket = mysqli_fetch_array($qry_detail_paket);
$_SESSION['jenis'] = $dt_paket['jenis'];
?>
<h2>Pesan Paket</h2>
<div class="row">

    <div class="col-md-8">
        <form action="pesanan.php?id_paket=<?= $dt_paket['id_paket'] ?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Nama Produk/Paket</td>
                        <td><?= $dt_paket['jenis'] ?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><?= $dt_paket['harga'] ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Pemesanan (/kg)</td>
                        <td><input min="1" type="number" name="jumlah_pemesanan" value="1"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="simpan" value="PESAN" class="btn btn-success"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
<?php
include "footer.php";
?>
<!DOCTYPE html>
<html>

<body style="background-color:#C98474;">
</body>

</html>