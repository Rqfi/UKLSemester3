<?php
include "header.php";
?>
<div>
    <h2>Total Transaksi</h2>
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
    <form action="checkout.php" class="well form-horizontal" method="post">
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
