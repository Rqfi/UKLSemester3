<?php
session_start();
if ($_SESSION['status_login'] != true) {
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title></title>
</head>

<body style="background-color:#B6E388;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -4px;">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php" style="color:#1C6758; font-family: verdana, sans-serif; font-size:x-large; margin-left:30px;"><img src="Foto/logo.jpg" style="width: 75px; margin-left: -30px; margin-top: -10px;"><b>ﺣﻼﻝLAUNDRY</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="paket.php">Produk/Paket</a>
          </li>
          <?php
          if ($_SESSION['role'] != 'kasir') {
          ?>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_paket.php">Daftar Produk/Paket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_member.php">Daftar Member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tampil_user.php">Daftar User</a>
            </li>
          <?php
          }
          ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="transaksi.php">Histori Transaksi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container bg-light rounded" style="margin-top:10px">