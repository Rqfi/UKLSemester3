<?php
if($_POST){
    $id_paket=$_POST['id_paket'];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update paket set id_paket='".$id_paket."', jenis='".$jenis."', harga='".$harga."' where id_paket = '".$id_paket."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update');location.href='ubah_paket.php?id_paket=".$id_paket."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update paket set id_paket='".$id_paket."', jenis='".$jenis."', harga='".$harga."' where id_paket = '".$id_paket."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update');location.href='ubah_paket.php?id_paket=".$id_paket."';</script>";
            }
        }
        
} 

?>