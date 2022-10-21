<?php
session_start();
if ($_POST) {
    include "koneksi.php";
    $qry_get_paket = mysqli_query($conn, "select * from paket where id_paket = '" . $_GET['id_paket'] . "'");
    $dt_paket = mysqli_fetch_array($qry_get_paket);
    $_SESSION['cart'][] = array(
        'id_paket' => $dt_paket['id_paket'],
        'jenis' => $dt_paket['jenis'],
        'harga'=> $dt_paket['harga'],
        'qty' => $_POST['jumlah_pemesanan']
    );
}
header('location: paket.php');
