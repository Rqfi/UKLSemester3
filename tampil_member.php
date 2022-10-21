<?php
include "header.php";
?>
<!DOCTYPE html>
<htlm>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
    </head>

    <body style="background-color:#C98474;">
        <h3 style="color:#674747;">Tampil Member</h3>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID MEMBER</th>
                    <th>NAMA MEMBER</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>TELEPON</th>
                    <th>KOTA</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_member = mysqli_query($conn, "select * from member");
                $no = 0;
                while ($data_member = mysqli_fetch_array($qry_member)) {
                    $no++; ?>
                    <tr>
                        <td><?= $data_member['id_member'] ?></td>
                        <td><?= $data_member['nama_member'] ?></td>
                        <td><?= $data_member['alamat'] ?></td>
                        <td><?= $data_member['jenis_kelamin'] ?></td>
                        <td><?= $data_member['tlp'] ?></td>
                        <td><?= $data_member['kota'] ?></td>
                        <td><a href="ubah_member.php?id_member=<?= $data_member['id_member'] ?>" class="btn btn-success">Ubah</a> |
                            <a href="hapus_member.php?id_member=<?= $data_member['id_member'] ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <form action="tambah_member.php" method="post">
            <input type="submit" name="simpan" value="Tambah Member" class="btn btn-primary">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
    <br>
    </html>
    <?php
    include "footer.php";
    ?>