<?php 
    if($_GET['id_member']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from member where id_member='".$_GET['id_member']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus');location.href='tampil_member.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus');location.href='tampil_member.php';</script>";
        }
    }
?>