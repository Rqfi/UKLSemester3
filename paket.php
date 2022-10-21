<?php
include "header.php";
?>
<!DOCTYPE html>
<html>

<body>
    <?php
    include "koneksi.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row">
            <div class="card" style="width:600px;float:left;">
                <h2 style="color:#674747;">Daftar PAKETﺣﻼﻝ </h2>
                <?php
                $qry_paket = mysqli_query($conn, "select * from paket");
                while ($dt_paket = mysqli_fetch_array($qry_paket)) {
                ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= $dt_paket['jenis'] ?></h5>
                            <p class="card-text">Rp<?= substr($dt_paket['harga'], 0, 20) ?>/kg</p>
                            <a href="pesan_paket.php?id_paket=<?= $dt_paket['id_paket'] ?>" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="card" style="width:575px;float:right;">
                <h2 style="color:#674747;">Transaksi</h2>
                <table class="table table-hover striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Jenis Paket</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['cart'])) {
                            foreach (@$_SESSION['cart'] as $key_produk => $val_produk) :
                        ?>
                                <tr>
                                    <td><?= ($key_produk + 1) ?></td>
                                    <td><?= $val_produk['jenis'] ?></td>
                                    <td><?= $val_produk['qty'] ?></td>
                                    <td><?= $val_produk['harga'] * $val_produk['qty'] ?></td>
                                    <td><a href="hapus_pesanan.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>X</strong></a></td>
                                </tr>
                            <?php endforeach ?>
                        <?php } ?>
                    </tbody>
                </table>
                <form action="checkout.php" method="post">
                    Nama Member :
                    <select name="nama" class="form-control">
                        <option></option>
                        <?php
                        $qry_member = mysqli_query($conn, "select * from member");

                        while ($data_member = mysqli_fetch_array($qry_member)) {
                        ?>
                            <option value="<?= $data_member['id_member'] ?>"><?= $data_member['nama_member'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    Status :
                    <?php
                    $arr_status = array('lunas' => 'Lunas', 'belum_lunas' => 'Belum Lunas');
                    ?>
                    <select name="status" class="form-control">
                        <option></option>
                        <?php foreach ($arr_status as $key_status => $val_status) : ?>
                            <option value="<?= $key_status ?>"><?= $val_status ?></option>
                        <?php endforeach ?>
                    </select>
                    <input type="submit" name="simpan" value="Checkout" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div>
            <br>
        </div>
</body>

</html>
<?php
include "footer.php";
?>