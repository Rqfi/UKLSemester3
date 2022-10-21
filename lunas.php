<?php
    include "koneksi.php";
    $update=mysqli_query($conn,"update transaksi set pembayaran = 'lunas', tgl_bayar = '".date('Y-m-d')."' where id_transaksi = '".$_GET['id']."'") or die(mysqli_error($conn));
    if($update){
        echo "<script>alert('Sukses update transaksi');location.href='transaksi.php';</script>";
    } else {
        echo "<script>alert('Gagal update transaksi');location.href='transaksi.php';</script>";
    }
?>