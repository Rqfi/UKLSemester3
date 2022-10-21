<?php
if($_POST){
    $id_paket=$_POST['id_paket'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into paket (id_paket, jenis, harga) 
        value ('".$id_paket."','".$jenis."','".$harga."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan paket');location.href='tampil_paket.php';</script>";
        }
}
?>