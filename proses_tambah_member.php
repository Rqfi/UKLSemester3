<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama_member=$_POST['nama_member'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $tlp=$_POST['tlp'];
    $kota=$_POST['kota'];
    if(empty($nama_member)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into member (id_member, nama_member, alamat, jenis_kelamin, tlp, kota) 
        value ('".$id_member."','".$nama_member."','".$alamat."','".$jenis_kelamin."','".$tlp."','".$kota."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan');location.href='tampil_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan');location.href='tampil_member.php';</script>";
        }
    }
}
?>