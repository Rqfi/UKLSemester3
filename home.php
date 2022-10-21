<?php
include "header.php";

?>
    <br>
    <h3 align="center">Selamat Datang <?=$_SESSION['nama']?></h1>
    <br>
    <h4 align="center"><b>Siap Menyediakan Jasa ﺣﻼﻝLaundry </b></h4>
    <h5 align="center"><b>Selalu  ﺣﻼﻝ Melayani</b></h5>
    <?php
    if ($_SESSION['role'] == 'admin') {
    ?>
    <p align="center"><b>login sebagai ADMIN</b></p>
    <?php
    } else {
    ?>
    <p align="center"><b>login sebagai KASIR</b></p>
    <?php
    }
    ?>
    <center><img src="Foto/londri.jpg"></center>
    <br>
<?php
include "footer.php";
?>