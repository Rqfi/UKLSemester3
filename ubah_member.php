<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body style="background-color:#B6E388;">
    <?php
    include "koneksi.php";
    $qry_get_member = mysqli_query($conn, "select * from member where id_member = '" . $_GET['id_member'] . "'");
    $dt_member = mysqli_fetch_array($qry_get_member);
    ?>
    <h3 style="color:#674747;">Ubah Member</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id_member" value="<?= $dt_member['id_member'] ?>">
        Nama :
        <input type="text" name="nama_member" value="<?= $dt_member['nama_member'] ?>" class="form-control">
        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?= $dt_member['alamat'] ?></textarea>
        Jenis Kelamin :
        <select name="jenis_kelamin" class="form-control">

            <?php
            if ($dt_member['jenis_kelamin'] == 'Laki-laki') {
                echo '<option value="Laki-laki" selected>Laki-laki</option>';
            } else {
                echo ' <option value="Laki-laki">Laki-laki</option>';
            }


            if ($dt_member['jenis_kelamin'] == 'Perempuan') {
                echo '<option value="Perempuan" selected>Perempuan</option>';
            } else {
                echo ' <option value="Perempuan">Perempuan</option>';
            }
            ?>
            <option></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        Telepon :
        <input type="text" name="tlp" value="<?= $dt_member['tlp'] ?>" class="form-control">
        Kota :
        <textarea name="kota" class="form-control" rows="1"><?= $dt_member['kota'] ?></textarea>
        <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>