<?php
include "header.php";
?>
<!DOCTYPE html>
<htlm>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>

    <body>
        <h3 style="color:#674747;">Tampil User</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID USER</th>
                    <th>NAMA USER</th>
                    <th>ROLE</th>
                    <th>USERNAME</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_user = mysqli_query($conn, "select * from user");
                $no = 0;
                while ($data_user = mysqli_fetch_array($qry_user)) {
                    $no++; ?>
                    <tr>
                        <td><?= $data_user['id_user'] ?></td>
                        <td><?= $data_user['nama'] ?></td>
                        <td><?= $data_user['role'] ?></td>
                        <td><?= $data_user['username'] ?></td>
                        <td><a href="ubah_user.php?id_user=<?= $data_user['id_user'] ?>" class="btn btn-success">Ubah</a> |
                            <a href="hapus_user.php?id_user=<?= $data_user['id_user'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <form action="tambah_user.php" method="post">
            <input type="submit" name="simpan" value="Tambah User" class="btn btn-primary">
        </form>
        <br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

    </html>