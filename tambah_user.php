<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body style="background-color:#B6E388;">
    <h3 style="color:#674747;">Tambah User</h3>
    <form action="proses_tambah_user.php" method="post">
        ID :
        <input type="text" name="id_user" value="" class="form-control">    
        Nama :
        <input type="text" name="nama" value="" class="form-control">
        Role : 
        <select name="role" class="form-control">
            <option></option>
            <option value="Admin">Admin</option>
            <option value="Kasir">Kasir</option>
        </select>
        Username :
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>